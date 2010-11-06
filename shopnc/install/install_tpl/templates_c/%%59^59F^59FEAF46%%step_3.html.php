<?php /* Smarty version 2.6.9, created on 2009-09-15 11:47:37
         compiled from step_3.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>单用户ShopNC V6.0版安装程序--设置参数</title>
<link href="install_tpl/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.onetd {
	text-align:right;
	line-height:25px;
}
-->
</style>
<script src="install_tpl/jquery.js" language="javascript" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
<!--
	$(document).ready(function(){
		//列表第一格CSS
		$(".twbox tr").each(function(){ $(this).children("td").eq(0).addClass("onetd");});

		//列表行鼠标悬停
		$(".twbox tr").mouseover(function(){ $(this).addClass("moncolor");}).mouseout(function(){$(this).removeClass("moncolor");	});

	});
-->
</script>
<script language="javascript">
/*检查mysql版本*/
function check_mysql() {
	var dbhost		= $('#nc_dbhost').val();
	var dbuser		= $('#nc_dbuser').val();
	var dbpasswd	= $('#nc_dbpwd').val();
	var dbport		= $('#nc_dbport').val();
	
	$.get('index.php',{'action':'check_mysql_ver','nc_dbhost':dbhost,'nc_dbuser':dbuser,'nc_dbpwd':dbpasswd,'nc_dbport':dbport},function(data){
		$("#dbpwdsta").html(data);
	});
}
//js检查输入框
function check_form() {
	if(!check_input('nc_dbhost','数据库主机不能为空！')) {
		return false;
	}
	if(!check_input('nc_dbname','数据库名称不能为空！')) {
		return false;
	}	
	if(!check_input('nc_dbuser','数据库用户名不能为空！')) {
		return false;
	}
	if(!check_input('nc_dbpwd','数据库密码不能为空！')) {
		return false;
	}
	if(!check_input('nc_dbprefix','数据前缀不能为空！')) {
		return false;
	}
	if(!check_input('nc_adminuser','管理员用户名不能为空！')) {
		return false;
	}
	if($.trim($("#nc_adminpwd").val())=='' || $.trim($("#nc_adminpwd1").val())=='') {
		alert('管理员密码和确认密码都不能为空！');
		return false;
	} else {
		if($.trim($("#nc_adminpwd").val())!=$.trim($("#nc_adminpwd1").val())) {
			alert('两次输入的密码不相同，请重新输入！');
			return false;
		}
	}
	if(!check_input('nc_webname','网站名称不能为空！')) {
		return false;
	}
	if(!check_input('nc_adminmail','管理员email不能为空！')) {
		return false;
	}
	if(!check_input('nc_weburl','网站地址！')) {
		return false;
	}
	return true;
}
function check_input(id,msg) {
	if($.trim($("#"+id).val()) == '') {
		alert(msg);
		$("#"+id).focus();
		return false;
	}
	return true;
}
</script>
</head>
<body>
<div id="head">
  <div class="top boxcenter">
    <div id="logo">&nbsp;</div>
    <ul class="stepbox">
      <li>许可协议</li>
      <li>环境检测</li>
      <li class="current">参数设置</li>
      <li>程序安装</li>
    </ul>
  </div>
</div>
<div class="main boxcenter">
  <form action="index.php" method="post" name="form1" onsubmit="return check_form();">
  <input type="hidden" name="action" value="step_4" />
    <h2 class="boxtitle">数据库设置</h2>
    <table width="676" border="0" align="center" cellpadding="0" cellspacing="0" class="twbox">
      <tr>
        <td width="256"><strong>数据库主机：</strong></td>
        <td width="468"><input name="nc_dbhost" type="text" id="nc_dbhost" value="localhost" style="width:200px" />
          <small>一般为localhost</small></td>
      </tr>
      <tr>
        <td><strong>数据库端口：</strong></td>
        <td><input name="nc_dbport" type="text" id="nc_dbport" value="3306"  onblur="check_mysql()" style="width:200px" />
		<small>一般为3306</small></td>
      </tr>
      <tr>
        <td><strong>数据库名称：</strong></td>
        <td><input name="nc_dbname" type="text" id="nc_dbname" value="shopnc6" style="width:200px" />        </td>
      </tr>
      <tr>
        <td><strong>数据库用户：</strong></td>
        <td><input name="nc_dbuser" type="text" id="nc_dbuser" value="root" style="width:150px" /></td>
      </tr>
      <tr>
        <td><strong>数据库密码：</strong></td>
        <td><input name="nc_dbpwd" type="text" id="nc_dbpwd" style="width:150px" onblur="check_mysql();" />
          <span id='dbpwdsta'></span> </td>
      </tr>
      <tr>
        <td><strong>数据表前缀：</strong></td>
        <td><input name="nc_dbprefix" type="text" id="nc_dbprefix" value="shopnc_" style="width:200px" />
          <small>如无特殊需要,请不要修改</small></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name="nc_add_test" type="checkbox" value="1" checked="checked" />
          添加演示数据</td>
      </tr>
    </table>
    <h2 class="boxtitle">管理员设置</h2>
    <table width="676" border="0" align="center" cellpadding="0" cellspacing="0" class="twbox">
      <tr>
        <td width="256"><strong>用户名称：</strong></td>
        <td width="468"><input name="nc_adminuser" type="text" id="nc_adminuser" value="admin" style="width:200px" />
        </td>
      </tr>
      <tr>
        <td><strong>密　 码：</strong></td>
        <td><input name="nc_adminpwd" type="text" id="nc_adminpwd" value="admin" style="width:200px" />
          密码建议6位以上</td>
      </tr>
      <tr>
        <td><strong>确认密码：</strong></td>
        <td><input name="nc_adminpwd1" type="text" id="nc_adminpwd1" value="admin" style="width:200px" /></td>
      </tr>
    </table>
    <h2 class="boxtitle">网店设置</h2>
    <table width="676" border="0" align="center" cellpadding="0" cellspacing="0" class="twbox">
		<tr>
		  <td><strong>字符集选择：</strong></td>
		  <td><label>
		    <select name="nc_charset" id="nc_charset">
		      <option value="utf8">utf8</option>
		      <option value="gbk">gbk</option>
	        </select>
		  </label></td>
	  </tr>
      <tr>
        <td width="256"><strong>网站名称：</strong></td>
        <td width="468"><input name="nc_webname" type="text" id="nc_webname" value="ShopNC单用户网店" style="width:200px" /></td>
      </tr>
      <tr>
        <td><strong>管理员邮箱：</strong></td>
        <td><input name="nc_adminmail" type="text" id="nc_adminmail" value="shopnc@shopnc.cn" style="width:200px" /></td>
      </tr>
      <tr>
        <td><strong> 网站网址：</strong></td>
        <td><input name="nc_weburl" type="text" value="<?php echo $this->_tpl_vars['nc_url']; ?>
" id="nc_weburl" style="width:200px" /></td>
      </tr>
    </table>
    <div class="butbox boxcenter">
      <input type="button" class="backbut" value="" onclick="history.back();" style="margin-right:20px" />
      <input name="提交" type="submit" class="setupbut" value="" />
    </div>
  </form>
</div>
<div class="copyright"><a href="http://www.shopnc.net" target="_blank" style="text-decoration:none; color:#FFFFFF">ShopNC&#8482;天津网城科技有限公司</a> <br />
  <span>Copyright &copy; 2007-2009 ShopNC, Powered by <a href="http://www.shopnc.net" target="_blank" style="text-decoration:none; color:#FFFFFF">ShopNC</a> Team , All Rights Reserved</span></div>
</body>
</html>