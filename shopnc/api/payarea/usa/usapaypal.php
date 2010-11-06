<?php

if(is_array($pay_module) and count(pay_module) > 0) {
	$i	= count($pay_module);
} else {
	$i	= 0;
}

$pay_module[$i]['name']		= "paypal";
$pay_module[$i]['code']		= "usapaypal";
$pay_module[$i]['info']		= "paypal";
$pay_module[$i]['online']	= "1";
$pay_module[$i]['pay_type']	= "0";
$pay_module[$i]['web_site']	= "http://www.paypal.com";
$pay_module[$i]['content']	= array(
array('name'=>'商户帐号',	'code' => 'paypalcn_account', 		'type' => 'text',   'value' => ''),
array('name'=>'支付货币',	'code' => 'paypal_currency',     	'type' => 'select', 'value' => 'USD','content'=>array('USD'=>'美元','AUD'=>'澳元','CAD'=>'加元','EUR'=>'欧元','GBP'=>'英镑','JPY'=>'日元','HKD'=>'港币')),
);

class usapaypalPayClass {
	function __construct(){

	}
	function outForm($order_info,$pay_info,$shop_url) {
		$pay_info	= $this->decodeArray($pay_info);				//将其中序列化的数组还

		$business	= $pay_info['pay_content']['paypalcn_account'];	//商户帐号
		$return		= $shop_url.'/shopping.php?action=shopnc_code&nc_order_serial='.$order_info['order_serial'].'&shopnccode='.intval($pay_info['pay_id']);//返回的url
		$invoice	= $order_info['order_serial'];					//订单号
		$amount		= $order_info['price_count'];					//订单金额
		//<form method="post" name="E_FORM" action="https://www.paypal.com/cgi-bin/webscr" method="post">
		$button		= '<div style="text-align:center">';
		$button		.= '<form method="post"		name="NC_FORM" action="https://www.paypal.com/cgi-bin/webscr" target="_blank">';	
		$button		.= '<input type="hidden"	name="cmd"			value="_xclick">';
		$button		.= '<input type="hidden"	name="business"		value="'.$business.'">';
		$button		.= '<input type="hidden"	name="return"		value="'.$return.'">';
		$button		.= '<input type="hidden"	name="amount"		value="'.$amount.'">';
		$button		.= '<input type="hidden"	name="invoice"		value="'.$invoice.'">';
		$button		.= '<input type="hidden"	name="item_name"	value="'.$invoice.'">';
		$button		.= '<input type="hidden"	name="charset"		value="utf-8">';
		$button		.= '<input type="hidden"	name="no_shipping"	value="1">';
		$button		.= '<input type="hidden"	name="rm"			value="2">';
		$button		.= '<input type="hidden"	name="no_note"		value="0">';
		$button		.= '<input type="hidden"	name="currency_code" value="'.$pay_info['pay_content']['paypal_currency'].'">';
		$button		.= '<input type="submit"	value="paypal"/>';
		$button		.= '</form>';
		$button		.= '</div>';  
		return $button;
	}

	function decodeArray($array) {
		$array['pay_content']	= unserialize($array['pay_content']);
		return $array;
	}

	function getParmentDo($order_info,$pay_info) {
		$pay_info	= $this->decodeArray($pay_info);				//将其中序列化的数组还
		$req = 'cmd=_notify-validate';
		foreach ($_POST as $key => $value)
		{
			$value = urlencode(stripslashes($value));
			$req .= "&$key=$value";
		}

		// post back to PayPal system to validate
		$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
		$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
		$header .= "Content-Length: " . strlen($req) ."\r\n\r\n";
		//$fp = fsockopen ('www.sandbox.paypal.com', 80, $errno, $errstr, 30);
		$fp = fsockopen ('www.paypal.com', 80, $errno, $errstr, 30);

		// assign posted variables to local variables
		$item_name 			= $_POST['item_name'];
		$item_number 		= $_POST['item_number'];
		$payment_status 	= $_POST['payment_status'];
		$payment_amount 	= $_POST['mc_gross'];
		$payment_currency 	= $_POST['mc_currency'];
		$txn_id 			= $_POST['txn_id'];
		$receiver_email 	= $_POST['receiver_email'];
		$payer_email 		= $_POST['payer_email'];
		$order_sn 			= $_POST['invoice'];
		$merchant_id 		= $pay_info['pay_content']['paypalcn_account'];
		if (!$fp)
		{
			fclose($fp);
			
			return false;
		}
		else
		{
			fputs($fp, $header . $req);
			while (!feof($fp))
			{
				$res = fgets($fp, 1024);
				if (strcmp($res, 'VERIFIED') == 0)
				{
					// check the payment_status is Completed
					if ($payment_status != 'Completed')
					{
						fclose($fp);

						return false;
					}

					// check that receiver_email is your Primary PayPal email
					if ($receiver_email != $merchant_id)
					{
						fclose($fp);

						return false;
					}
					if ($order_info['order_price'] != $payment_amount)
					{
						fclose($fp);

						return false;
					}
					if ($payment_currency != $pay_info['pay_content']['paypal_currency'])
					{
						fclose($fp);

						return false;
					}
					fclose($fp);
					return true;
				}
				elseif (strcmp($res, 'INVALID') == 0)
				{
					// log for manual investigation
					fclose($fp);
					return false;
				}
			}
			
			fclose($fp);
		}
	}
}
