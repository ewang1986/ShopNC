<?php
/////////////////////////////////////////////////////////////////////////////
// 这个文件是 网城创想多用户商城 项目的一部分
//
// Copyright (c) 2007 - 2010 www.shopnc.net
//
// 要查看完整的版权信息和许可信息，请查看源代码中附带的 COPYRIGHT 文件，
// 或者访问 http://www.shopnc.net/ 获得详细信息。
/////////////////////////////////////////////////////////////////////////////

/**
 * FILE_NAME : system_menu.php
 * 系统后台菜单
 *
 * @copyright Copyright (c) 2007 - 2010 www.shopnc.net
 * @author ShopNC Develop Team
 * @version Thu Jun 10 05:54:42 GMT 2010
 */
$navers = array(
			array('name'=>$this->_lang['langSysCIndex'],'power'=>'index','body'=>array(
			array('name'=>$this->_lang['langSysCSystemIndex'],'power'=>'index~9999','url'=>'index.php?action=index_info'),
		)
		),
		array('name'=>$this->_lang['langSysCSystemSet'],'power'=>'system','body'=>array(
			array('name'=>$this->_lang['langSysCBasicSet'],'power'=>'baseinfo~1001','menu_sel'=>'1','url'=>'baseinfo.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuSystemBaseinfoSet'],'class_name'=>'icoibx1','menu_sel'=>'0','url'=>'baseinfo.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuSystemSMTPSet'],'class_name'=>'icoibx2','menu_sel'=>'0','url'=>'baseinfo.manage.php?action=mail'),
				array('name'=>$this->_lang['langSysMenuSystemSystemSet'],'class_name'=>'icoibx3','menu_sel'=>'1','url'=>'baseinfo.manage.php?action=system'),
				)
			),
			array('name'=>$this->_lang['langSysCPowerGroup'],'power'=>'power_group~1002','menu_sel'=>'0','url'=>'system_power.manage.php?action=list_group','body'=>array(
				array('name'=>$this->_lang['langSysMenuPowerGroupList'],'class_name'=>'icoibx15','menu_sel'=>'1','url'=>'system_power.manage.php?action=list_group'),
				array('name'=>$this->_lang['langSysMenuPowerGroupAdd'],'class_name'=>'icoibx16','menu_sel'=>'0','url'=>'system_power.manage.php?action=add_group'),
				)
			),
			array('name'=>$this->_lang['langSysCAdmin'],'power'=>'power_member~1003','menu_sel'=>'0','url'=>'system_power.manage.php?action=member','body'=>array(
				array('name'=>$this->_lang['langSysMenuPowerMemberList'],'class_name'=>'icoibx15','menu_sel'=>'1','url'=>'system_power.manage.php?action=member'),
				array('name'=>$this->_lang['langSysMenuPowerMemberAdd'],'class_name'=>'icoibx16','menu_sel'=>'0','url'=>'system_power.manage.php?action=add_member'),
				)
			),
			array('name'=>$this->_lang['langSysCEmailTemplate'],'power'=>'email~1004','menu_sel'=>'0','url'=>'mailcontent.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuEmailList'],'class_name'=>'icoibx11','menu_sel'=>'1','url'=>'mailcontent.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuEmailAdd'],'class_name'=>'icoibx12','menu_sel'=>'0','url'=>'mailcontent.manage.php?action=add'),
				)
			),
			array('name'=>$this->_lang['langSysCPayment'],'power'=>'payment~1005','menu_sel'=>'0','url'=>'payment.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuPaymentList'],'class_name'=>'icoibx17','menu_sel'=>'1','url'=>'payment.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuPaymentDownAccount'],'class_name'=>'icoibx4','menu_sel'=>'0','url'=>'payment_offline.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuPaymentAddDownAccount'],'class_name'=>'icoibx6','menu_sel'=>'0','url'=>'payment_offline.manage.php?action=add'),
				array('name'=>$this->_lang['langSysMenuSystemPaySet'],'class_name'=>'icoibx4','menu_sel'=>'0','url'=>'baseinfo.manage.php?action=payset'),
				)
			),
			array('name'=>$this->_lang['langSysCredits'],'power'=>'credits~1006','menu_sel'=>'0','url'=>'credits.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuCreditsList'],'class_name'=>'icoibx24','menu_sel'=>'1','url'=>'credits.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuCreditsLog'],'class_name'=>'icoibx25','menu_sel'=>'0','url'=>'credits.manage.php?action=log_list'),
				array('name'=>$this->_lang['langSysMenuCreditsHandle'],'class_name'=>'icoibx25','menu_sel'=>'0','url'=>'credits.manage.php?action=handle'),
				)
			),
			array('name'=>$this->_lang['langSysCExchange'],'power'=>'exchange~1007','menu_sel'=>'0','url'=>'exchange.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuExchangeList'],'class_name'=>'icoibx21','menu_sel'=>'1','url'=>'exchange.manage.php?action=list'),
				)
			),
			array('name'=>$this->_lang['langSysCLanguage'],'power'=>'language~1008','menu_sel'=>'0','url'=>'language.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuLanguageList'],'class_name'=>'icoibx22','menu_sel'=>'1','url'=>'language.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuLanguageAdd'],'class_name'=>'icoibx23','menu_sel'=>'0','url'=>'language.manage.php?action=add'),
				)
			),
			array('name'=>$this->_lang['langSysCKeyWordManage'],'power'=>'keyword~1009','menu_sel'=>'0','url'=>'keyword.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuKeyWordList'],'class_name'=>'icoibx7','menu_sel'=>'0','url'=>'keyword.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuKeyWordAdd'],'class_name'=>'icoibx31','menu_sel'=>'0','url'=>'keyword.manage.php?action=add')
				)
			),
			array('name'=>$this->_lang['langSysCKeennessWordFiltrate'],'power'=>'filter~1010','menu_sel'=>'0','url'=>'filter.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuKeennessWordFiltrateList'],'class_name'=>'icoibx53','menu_sel'=>'1','url'=>'filter.manage.php?action=list'),
				)
			),
			array('name'=>$this->_lang['langSysCHelpManage'],'power'=>'help~1604','menu_sel'=>'0','url'=>'help.manage.php?action=class_list','body'=>array(
				array('name'=>$this->_lang['langSysMenuHelpClassManage'],'class_name'=>'icoibx53','menu_sel'=>'0','url'=>'help.manage.php?action=class_list'),
				array('name'=>$this->_lang['langSysMenuHelpList'],'class_name'=>'icoibx53','menu_sel'=>'0','url'=>'help.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuHelpAdd'],'class_name'=>'icoibx53','menu_sel'=>'0','url'=>'help.manage.php?action=add')
				)
			),
		)
		),
		array('name'=>$this->_lang['langSysCProductManage'],'power'=>'product','body'=>array(
			array('name'=>$this->_lang['langSysCProductClass'],'power'=>'product_class~1101','menu_sel'=>'0','url'=>'pclass.manage.php?action=manage','body'=>array(
				array('name'=>$this->_lang['langSysMenuProductClassList'],'class_name'=>'icoibx26','menu_sel'=>'1','url'=>'pclass.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuProductClassAdd'],'class_name'=>'icoibx27','menu_sel'=>'0','url'=>'pclass.manage.php?action=add'),
				)
			),
			array('name'=>$this->_lang['langSysCProductList'],'power'=>'product_list~1102','menu_sel'=>'1','url'=>'product.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuProductList'],'class_name'=>'icoibx29','menu_sel'=>'1','url'=>'product.manage.php?action=list'),
				)
			),
/*			array('name'=>$this->_lang['langSysCProductStatic'],'power'=>'product_html~1103','menu_sel'=>'0','url'=>'product.html.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuProductStatic'],'class_name'=>'icoibx32','menu_sel'=>'1','url'=>'product.html.php?action=list'),
				)
			),*/
			array('name'=>$this->_lang['langSysCProductBrand'],'power'=>'product_brand~1104','menu_sel'=>'0','url'=>'product_brand.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuProductBrandList'],'class_name'=>'icoibx33','menu_sel'=>'1','url'=>'product_brand.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuProductBrandAdd'],'class_name'=>'icoibx31','menu_sel'=>'0','url'=>'product_brand.manage.php?action=add'),
				)
			),
			array('name'=>$this->_lang['langSysMenuProductDatacall'],'power'=>'product_datacall~1105','menu_sel'=>'0','url'=>'product_datecall.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuProductDatacallManage'],'class_name'=>'icoibx33','menu_sel'=>'0','url'=>'product_datecall.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuProductAddDatacall'],'class_name'=>'icoibx31','menu_sel'=>'1','url'=>'product_datecall.manage.php?action=add'),
				)
			),
			array('name'=>$this->_lang['langSysCAutoAddPrice'],'power'=>'up_price~1106','menu_sel'=>'0','url'=>'up_price.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuAutoPriceList'],'class_name'=>'icoibx30','menu_sel'=>'1','url'=>'up_price.manage.php?action=list')
				)
			),
		)
		),
		array('name'=>$this->_lang['langSysCDealManage'],'power'=>'order','body'=>array(
			array('name'=>$this->_lang['langSysCDealForm'],'power'=>'order_list~1201','menu_sel'=>'1','url'=>'order.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuOrderList'],'class_name'=>'icoibx34','menu_sel'=>'1','url'=>'order.manage.php?action=list'),
				)
			),
			array('name'=>$this->_lang['langSysCLawManage'],'power'=>'complaint~1202','menu_sel'=>'0','url'=>'complaint.manage.php?action=complaint','body'=>array(
				array('name'=>$this->_lang['langSysMenuComplaintList'],'class_name'=>'icoibx35','menu_sel'=>'1','url'=>'complaint.manage.php?action=complaint'),
				array('name'=>$this->_lang['langSysMenuComplaintSet'],'class_name'=>'icoibx3','menu_sel'=>'1','url'=>'complaint.manage.php?action=set_complaint_day'),
				)
			),
			array('name'=>$this->_lang['langSysCComplaintManage'],'power'=>'report~1203','menu_sel'=>'0','url'=>'complaint.manage.php?action=report','body'=>array(
				array('name'=>$this->_lang['langSysMenuReportList'],'class_name'=>'icoibx36','menu_sel'=>'1','url'=>'complaint.manage.php?action=report'),
				)
			),
		)
		),
		array('name'=>$this->_lang['langSysCMemberManage'],'power'=>'member','body'=>array(
			array('name'=>$this->_lang['langSysCMemberManage'],'power'=>'member_list~1301','menu_sel'=>'1','url'=>'member.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuMemberList'],'class_name'=>'icoibx37','menu_sel'=>'1','url'=>'member.manage.php?action=list'),
				)
			),
			array('name'=>$this->_lang['langSysMemberGroup'],'power'=>'member_group~1302','menu_sel'=>'0','url'=>'member_group.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuMemberGroupList'],'class_name'=>'icoibx15','menu_sel'=>'1','url'=>'member_group.manage.php?action=list'),
				)
			),
			array('name'=>$this->_lang['langSysCReputablyManage'],'power'=>'score~1303','menu_sel'=>'0','url'=>'score.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuScoreList'],'class_name'=>'icoibx38','menu_sel'=>'1','url'=>'score.manage.php?action=list'),
				)
			),
			array('name'=>$this->_lang['langSysCConsigneeAddress'],'power'=>'receive~1304','menu_sel'=>'0','url'=>'receive.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuReceiveList'],'class_name'=>'icoibx39','menu_sel'=>'1','url'=>'receive.manage.php?action=list'),
				)
			),
			array('name'=>$this->_lang['langSysCProductMessage'],'power'=>'product_message~1305','menu_sel'=>'0','url'=>'productmessage.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuProductMessageList'],'class_name'=>'icoibx40','menu_sel'=>'1','url'=>'productmessage.manage.php?action=list'),
				)
			),
			array('name'=>$this->_lang['langSysCShopMessage'],'power'=>'shop_message~1306','menu_sel'=>'0','url'=>'shopmessage.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuShopMessageList'],'class_name'=>'icoibx25','menu_sel'=>'1','url'=>'shopmessage.manage.php?action=list'),
				)
			),
			array('name'=>$this->_lang['langSysCMessageGroupSend'],'power'=>'message~1307','menu_sel'=>'0','url'=>'message.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuGroupMessageList'],'class_name'=>'icoibx41','menu_sel'=>'1','url'=>'message.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuGroupMessageAdd'],'class_name'=>'icoibx42','menu_sel'=>'0','url'=>'message.manage.php?action=add_message'),
				)
			),
			array('name'=>$this->_lang['langSysCUserAgreement'],'power'=>'user_agreement~1308','menu_sel'=>'0','url'=>'agreement.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuUserAgreement'],'class_name'=>'icoibx18','menu_sel'=>'1','url'=>'agreement.manage.php?action=list'),
				)
			),
			array('name'=>$this->_lang['langSysMenuPersonalCertify'],'power'=>'personal_certify~1309','menu_sel'=>'0','url'=>'member_personal_certify.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuPersonalCertifyList'],'class_name'=>'icoibx43','menu_sel'=>'1','url'=>'member_personal_certify.manage.php?action=list'),
				)
			),
		)
		),
		array('name'=>$this->_lang['langSysCShopManage'],'power'=>'shop','body'=>array(
			array('name'=>$this->_lang['langSysCShopClass'],'power'=>'shop_class~1401','menu_sel'=>'0','url'=>'shopcategory.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuShopClassList'],'class_name'=>'icoibx44','menu_sel'=>'1','url'=>'shopcategory.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuShopClassAdd'],'class_name'=>'icoibx8','menu_sel'=>'0','url'=>'shopcategory.manage.php?action=add'),
				)
			),
			array('name'=>$this->_lang['langSysCShopList'],'power'=>'shop_list~1402','menu_sel'=>'1','url'=>'shop.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuShopList'],'class_name'=>'icoibx45','menu_sel'=>'1','url'=>'shop.manage.php?action=list'),
				)
			),
			array('name'=>$this->_lang['langSysCShopGrade'],'power'=>'shop_grade~1605','menu_sel'=>'0','url'=>'shopc_grade.manage.php?action=grade_list','body'=>array(
				array('name'=>$this->_lang['langSysCShopGradeList'],'class_name'=>'icoibx44','menu_sel'=>'1','url'=>'shop_grade.manage.php?action=grade_list'),
				array('name'=>$this->_lang['langSysCShopGradeAdd'],'class_name'=>'icoibx8','menu_sel'=>'0','url'=>'shop_grade.manage.php?action=grade_add'),
				)
			),
			array('name'=>$this->_lang['langSysCShopFirendLink'],'power'=>'shop_link~1403','menu_sel'=>'0','url'=>'shoplink.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuShopFirendLinkList'],'class_name'=>'icoibx46','menu_sel'=>'1','url'=>'shoplink.manage.php?action=list'),
				)
			),
			array('name'=>$this->_lang['langSysCShopProductClass'],'power'=>'shop_product_class~1404','menu_sel'=>'0','url'=>'shopproductcate.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuShopProductClass'],'class_name'=>'icoibx32','menu_sel'=>'1','url'=>'shopproductcate.manage.php?action=list'),
				)
			),
			array('name'=>$this->_lang['langSysMenuShopDragManage'],'power'=>'store_drag~1405','menu_sel'=>'0','url'=>'shop_drag.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuShopDragPicManage'],'class_name'=>'icoibx47','menu_sel'=>'1','url'=>'shop_drag.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuShopDragPicAdd'],'class_name'=>'icoibx48','menu_sel'=>'1','url'=>'shop_drag.manage.php?action=add'),
				array('name'=>$this->_lang['langSysMenuShopStyleList'],'class_name'=>'icoibx47','menu_sel'=>'1','url'=>'shop_module_style.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuShopStyleAdd'],'class_name'=>'icoibx48','menu_sel'=>'1','url'=>'shop_module_style.manage.php?action=add'),
				)
			),
			array('name'=>$this->_lang['langSysShopAgreement'],'power'=>'shop_agreement~1406','menu_sel'=>'0','url'=>'shop_agreement.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuShopAgreement'],'class_name'=>'icoibx18','menu_sel'=>'1','url'=>'shop_agreement.manage.php?action=list'),
				)
			),
			array('name'=>$this->_lang['langSysCShopAttestation'],'power'=>'shop_entity~1407','menu_sel'=>'0','url'=>'shopentity.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuShopEntityList'],'class_name'=>'icoibx47','menu_sel'=>'1','url'=>'shopentity.manage.php?action=list'),
				)
			),
		)
		),
		array('name'=>$this->_lang['langSysCSystemTool'],'power'=>'tools','body'=>array(
			array('name'=>$this->_lang['langSysCStaticManage'],'power'=>'static~1501','menu_sel'=>'1','url'=>'html.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuStaticList'],'class_name'=>'icoibx1','menu_sel'=>'1','url'=>'html.manage.php?action=list'),
				)
			),
			array('name'=>$this->_lang['langSysCChannelIndexManage'],'power'=>'index_manage~1502','menu_sel'=>'0','url'=>'channel.manage.php?action=index_set','body'=>array(
				array('name'=>$this->_lang['langSysMenuChannelIndex'],'class_name'=>'icoibx20','menu_sel'=>'1','url'=>'channel.manage.php?action=index_set'),
				)
			),
			array('name'=>$this->_lang['langSysCChannelManage'],'power'=>'channel_manage~1503','menu_sel'=>'0','url'=>'channel.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuChannelList'],'class_name'=>'icoibx1','menu_sel'=>'1','url'=>'channel.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuChannelAdd'],'class_name'=>'icoibx19','menu_sel'=>'0','url'=>'channel.manage.php?action=add'),
				)
			),
			array('name'=>$this->_lang['langSysCChannelDrag'],'power'=>'channel_drag~1513','menu_sel'=>'0','url'=>'channel_drag.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysCChannelDragPic'],'class_name'=>'icoibx1','menu_sel'=>'1','url'=>'channel_drag.manage.php?action=list'),
				array('name'=>$this->_lang['langSysCChannelDragPicAdd'],'class_name'=>'icoibx19','menu_sel'=>'0','url'=>'channel_drag.manage.php?action=add'),
				)
			),
			array('name'=>$this->_lang['langSysCBasicCote'],'power'=>'section~1504','menu_sel'=>'0','url'=>'section.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuSectionList'],'class_name'=>'icoibx13','menu_sel'=>'1','url'=>'section.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuSectionAdd'],'class_name'=>'icoibx14','menu_sel'=>'0','url'=>'section.manage.php?action=add'),
				)
			),
			array('name'=>$this->_lang['langSysCZoneManage'],'power'=>'area~1505','menu_sel'=>'0','url'=>'area.manage.php','body'=>array(
				array('name'=>$this->_lang['langSysMenuAreaList'],'class_name'=>'icoibx49','menu_sel'=>'1','url'=>'area.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuAreaAdd'],'class_name'=>'icoibx50','menu_sel'=>'0','url'=>'area.manage.php?action=add'),
				)
			),
			array('name'=>$this->_lang['langSysCNews'],'power'=>'news~1506','menu_sel'=>'0','url'=>'news.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuNewsList'],'class_name'=>'icoibx5','menu_sel'=>'0','url'=>'news.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuNewsAdd'],'class_name'=>'icoibx6','menu_sel'=>'1','url'=>'news.manage.php?action=add'),
				array('name'=>$this->_lang['langSysMenuNewsClassList'],'class_name'=>'icoibx7','menu_sel'=>'0','url'=>'news.manage.php?action=ajax_class_list'),
				array('name'=>$this->_lang['langSysMenuNewsClassAdd'],'class_name'=>'icoibx8','menu_sel'=>'0','url'=>'news.manage.php?action=add_class'),
				array('name'=>$this->_lang['langSysMenuNewsJsList'],'class_name'=>'icoibx9','menu_sel'=>'0','url'=>'news.manage.php?action=ajax_js_list'),
				array('name'=>$this->_lang['langSysMenuNewsJsAdd'],'class_name'=>'icoibx10','menu_sel'=>'0','url'=>'news.manage.php?action=add_js'),
				)
			),
			array('name'=>$this->_lang['langSysCAdvManage'],'power'=>'adv~1507','menu_sel'=>'0','url'=>'advertisement.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuAdvList'],'class_name'=>'icoibx54','menu_sel'=>'1','url'=>'advertisement.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuAdvAdd'],'class_name'=>'icoibx55','menu_sel'=>'0','url'=>'advertisement.manage.php?action=add'),
				)
			),
			array('name'=>$this->_lang['langSysCVoteSurvey'],'power'=>'vote~1508','menu_sel'=>'0','url'=>'vote.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuVoteList'],'class_name'=>'icoibx10','menu_sel'=>'1','url'=>'vote.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuVoteAdd'],'class_name'=>'icoibx56','menu_sel'=>'0','url'=>'vote.manage.php?action=add'),
				)
			),
			array('name'=>$this->_lang['langSysCFirendLink'],'power'=>'link~1509','menu_sel'=>'0','url'=>'link.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuFirendLinkList'],'class_name'=>'icoibx57','menu_sel'=>'1','url'=>'link.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuFirendLinkAdd'],'class_name'=>'icoibx58','menu_sel'=>'0','url'=>'link.manage.php?action=add'),
				array('name'=>$this->_lang['langSysMenuFirendLinkSet'],'class_name'=>'icoibx3','menu_sel'=>'0','url'=>'link.manage.php?action=set'),
				)
			),
			array('name'=>$this->_lang['langSysCDatabase'],'power'=>'database~1510','menu_sel'=>'0','url'=>'sqlback.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuDatabaseBak'],'class_name'=>'icoibx59','menu_sel'=>'1','url'=>'sqlback.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuDatabaseRestore'],'class_name'=>'icoibx60','menu_sel'=>'0','url'=>'sqlback.manage.php?action=restore'),
				array('name'=>$this->_lang['langSysMenuDatabaseOptimize'],'class_name'=>'icoibx61','menu_sel'=>'0','url'=>'sqlback.manage.php?action=optimize_list'),
				)
			),
			array('name'=>$this->_lang['langSysCOperatorNote'],'power'=>'log~1511','menu_sel'=>'0','url'=>'system_power.manage.php?action=all_log','body'=>array(
				array('name'=>$this->_lang['langSysMenuPowerLog'],'class_name'=>'icoibx25','menu_sel'=>'1','url'=>'system_power.manage.php?action=all_log'),
				)
			),
			array('name'=>$this->_lang['langSysCAccessStat'],'power'=>'statistic~1512','menu_sel'=>'0','url'=>'statics.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuStaticsList'],'class_name'=>'icoibx1','menu_sel'=>'1','url'=>'statics.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuStaticsProduct'],'class_name'=>'icoibx10','menu_sel'=>'0','url'=>'statics_product.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuStaticsOrder'],'class_name'=>'icoibx33','menu_sel'=>'0','url'=>'statics_trade.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuStaticsMember'],'class_name'=>'icoibx37','menu_sel'=>'0','url'=>'statics_member.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuStaticsVisit'],'class_name'=>'icoibx63','menu_sel'=>'0','url'=>'statics_visit.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuStaticsTime'],'class_name'=>'icoibx64','menu_sel'=>'0','url'=>'statics_time.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuStaticsIP'],'class_name'=>'icoibx65','menu_sel'=>'0','url'=>'statics_ip.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuStaticsEng'],'class_name'=>'icoibx66','menu_sel'=>'0','url'=>'statics_eng.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuStaticsKey'],'class_name'=>'icoibx67','menu_sel'=>'0','url'=>'statics_key.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuStaticsFrom'],'class_name'=>'icoibx39','menu_sel'=>'0','url'=>'statics_from.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuStaticsGo'],'class_name'=>'icoibx5','menu_sel'=>'0','url'=>'statics_go.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuStaticsSys'],'class_name'=>'icoibx15','menu_sel'=>'0','url'=>'statics_sys.manage.php?action=list'),
				)
			),
		)
		),
		array('name'=>$this->_lang['langSysCFinanceManage'],'power'=>'finance','body'=>array(
			array('name'=>$this->_lang['langSysCPredepositManage'],'power'=>'predeposit~1601','menu_sel'=>'1','url'=>'predeposit.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuPredepositList'],'class_name'=>'icoibx68','menu_sel'=>'1','url'=>'predeposit.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuPredepositDetailList'],'class_name'=>'icoibx69','menu_sel'=>'0','url'=>'predeposit.manage.php?action=detail_list'),
				array('name'=>$this->_lang['langSysMenuPredepositCashList'],'class_name'=>'icoibx70','menu_sel'=>'0','url'=>'predeposit.manage.php?action=cash_list'),
				array('name'=>$this->_lang['langSysMenuPredepositOperation'],'class_name'=>'icoibx6','menu_sel'=>'0','url'=>'predeposit.manage.php?action=artificial_operation'),
				)
			),
//			array('name'=>$this->_lang['langSysMenuShopPay'],'power'=>'shop_pay~1602','menu_sel'=>'0','url'=>'shop_pay.manage.php?action=list','body'=>array(
//				array('name'=>$this->_lang['langSysMenuShopPayList'],'class_name'=>'icoibx5','menu_sel'=>'1','url'=>'shop_pay.manage.php?action=list'),
//				array('name'=>$this->_lang['langSysMenuShopPayArtificial'],'class_name'=>'icoibx71','menu_sel'=>'0','url'=>'shop_pay.manage.php?action=artificial'),
//				array('name'=>$this->_lang['langSysMenuShopPayModeList'],'menu_sel'=>'0','class_name'=>'icoibx72','url'=>'shop_pay.manage.php?action=mode_list'),
//				array('name'=>$this->_lang['langSysMenuShopPayModeAdd'],'menu_sel'=>'0','class_name'=>'icoibx73','url'=>'shop_pay.manage.php?action=mode_add'),
//				array('name'=>$this->_lang['langSysMenuShopPayShopList'],'menu_sel'=>'0','class_name'=>'icoibx74','url'=>'shop_pay.manage.php?action=shop_list'),
//				)
//			),
		)
		),
		array('name'=>$this->_lang['langSysApp'],'power'=>'app','body'=>array(
			/*array('name'=>$this->_lang['langSysAppList'],'power'=>'app_list~1701','menu_sel'=>'1','url'=>'app_module.manage.php?action=list','body'=>array(
				array('name'=>$this->_lang['langSysMenuAppList'],'class_name'=>'icoibx75','menu_sel'=>'1','url'=>'app_module.manage.php?action=list'),
				)
			),*/
			 array('name'=>$this->_lang['langSysCLaissezPasser'],'power'=>'passport~1703','menu_sel'=>'0','url'=>'integration.manage.php?action=manage','body'=>array(
				array('name'=>$this->_lang['langSysMenuPasser'],'class_name'=>'icoibx62','menu_sel'=>'1','url'=>'integration.manage.php?action=manage'),
				)
			),
		)
		),
		array('name'=>$this->_lang['langSysMenuPromotions'],'power'=>'promotions','body'=>array(
			array('name'=>$this->_lang['langSysMenuPromotionsAuction'],'power'=>'promotions~1601','menu_sel'=>'1','url'=>'','body'=>array(
				array('name'=>$this->_lang['langSysMenuPromotionsAuctionList'],'class_name'=>'icoibx68','menu_sel'=>'1','url'=>'product_auction.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuPromotionsAuctionTopicsPic'],'class_name'=>'icoibx68','menu_sel'=>'0','url'=>'product_auction.manage.php?action=set_topics'),
				),
			),
			array('name'=>$this->_lang['langSysMenuPromotionsGroupBuy'],'power'=>'promotions~1602','menu_sel'=>'0','url'=>'','body'=>array(
				array('name'=>$this->_lang['langSysMenuPromotionsGroupBuyList'],'class_name'=>'icoibx68','menu_sel'=>'1','url'=>'product_group.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuPromotionsAuctionTopicsPic'],'class_name'=>'icoibx68','menu_sel'=>'0','url'=>'product_group.manage.php?action=set_topics')
				),
			),
			array('name'=>$this->_lang['langSysMenuPromotionsCountDown'],'power'=>'promotions~1603','menu_sel'=>'0','url'=>'','body'=>array(
				array('name'=>$this->_lang['langSysMenuPromotionsCountDownList'],'class_name'=>'icoibx68','menu_sel'=>'1','url'=>'product_countdown.manage.php?action=list'),
				array('name'=>$this->_lang['langSysMenuPromotionsAuctionTopicsPic'],'class_name'=>'icoibx68','menu_sel'=>'0','url'=>'product_countdown.manage.php?action=set_topics')
				),
			)
		)
		),
	);
?>