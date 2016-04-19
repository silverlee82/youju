<?php /* 订单列表 */ ?>
<?php if($this->_tpl_vars['menutype'] == 'orderlist'){ ?>
<ul class="listbottonul" id="listbottonul">
	<?php if($this->powercheck('order','orderadd')==true ){ ?>
	<li class="menumain"><a id="addinfo" class="addinfo" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['ST']['botton_add_orderadd'],'hc') ?>','index.php?archive=ordermain&action=orderadd&tab=true&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'addinfo',self.frameElement.getAttribute('name'));"  href="#body" title="<?php echo $this->_tpl_vars['ST']['botton_add_orderadd'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['botton_add_orderadd'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="selectall" class="selectall" href="javascript:select_change(true,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['selAll_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['selAll_botton'] ?></a></li>
	<li class="menumain"><a id="bolt" href="#body" hidefocus="true" hidefocus="true"><?php echo $this->_tpl_vars['ST']['bolt_botton'] ?></a>
		<ul class="menulist">
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['ordermain_text_ordertype'] ?></span>
				<ul>
					<li><a class="menunoclick" id="ordertype0" href="#body" onclick="javascript:dbfilter('ordertype','ordertype',0,0,7,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="ordertype1" href="#body" onclick="javascript:dbfilter('ordertype','ordertype',1,1,7,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['ordermain_text_ordertype1'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['ordermain_text_ordertype1'] ?></a></li>
					<li><a class="menuclick" id="ordertype2" href="#body" onclick="javascript:dbfilter('ordertype','ordertype',2,2,7,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['ordermain_text_ordertype2'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['ordermain_text_ordertype2'] ?></a></li>
					<li><a class="menuclick" id="ordertype3" href="#body" onclick="javascript:dbfilter('ordertype','ordertype',3,3,7,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['ordermain_text_ordertype3'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['ordermain_text_ordertype3'] ?></a></li>
					<li><a class="menuclick" id="ordertype4" href="#body" onclick="javascript:dbfilter('ordertype','ordertype',4,4,7,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['ordermain_text_ordertype4'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['ordermain_text_ordertype4'] ?></a></li>
					<li><a class="menuclick" id="ordertype5" href="#body" onclick="javascript:dbfilter('ordertype','ordertype',5,5,7,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['ordermain_text_ordertype5'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['ordermain_text_ordertype5'] ?></a></li>
					<li><a class="menuclick" id="ordertype6" href="#body" onclick="javascript:dbfilter('ordertype','ordertype',6,6,7,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['ordermain_text_ordertype6'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['ordermain_text_ordertype6'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['ordermain_text_paysn'] ?></span>
				<ul>
					<li><a class="menunoclick" id="ispaysn0" href="#body" onclick="javascript:dbfilter('ispaysn','ispaysn',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="ispaysn1" href="#body" onclick="javascript:dbfilter('ispaysn','ispaysn',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['ordermain_text_paysn1'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['ordermain_text_paysn1'] ?></a></li>
					<li><a class="menuclick" id="ispaysn2" href="#body" onclick="javascript:dbfilter('ispaysn','ispaysn',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['ordermain_text_paysn2'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['ordermain_text_paysn2'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['ordermain_text_shippingsn'] ?></span>
				<ul>
					<li><a class="menunoclick" id="isshippingsn0" href="#body" onclick="javascript:dbfilter('isshippingsn','isshippingsn',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="isshippingsn1" href="#body" onclick="javascript:dbfilter('isshippingsn','isshippingsn',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['ordermain_text_shippingsn1'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['ordermain_text_shippingsn1'] ?></a></li>
					<li><a class="menuclick" id="isshippingsn2" href="#body" onclick="javascript:dbfilter('isshippingsn','isshippingsn',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['ordermain_text_shippingsn2'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['ordermain_text_shippingsn2'] ?></a></li>
				</ul>
			</li>
			<li><a class="menuclick" id="searchall" href="#body" onclick="javascript:refreshurl('selectform')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['getalllist_botton'] ?></a></li>
		</ul>
	</li>
	<li class="menumain"><a id="search" href="javascript:parent.windowsdig('<?php echo $this->_tpl_vars['ST']['ordermain_search_botton'] ?>','iframe:index.php?archive=ordermain&action=search&iframename='+self.frameElement.getAttribute('name'),'600px','450px','iframe',true);" title="<?php echo $this->_tpl_vars['ST']['ordermain_search_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['search_botton'] ?></a></li>
	<?php if($this->powercheck('order','orderdel')==true ){ ?>
	<li class="menumain"><a id="del" onclick="javascript:callrun('index.php?archive=ordermain&action=orderdel','selectinfoid',false,null,null,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['del_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" href="#body" hidefocus="true"><?php echo $this->_tpl_vars['ST']['del_botton'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="refresh" href="#body" onclick="javascript:refresh('selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['refresh_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['refresh_botton'] ?></a></li>
</ul>
<?php } ?>      