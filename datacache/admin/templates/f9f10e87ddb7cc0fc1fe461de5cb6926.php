<?php /* 会员列表 */ ?>
<?php if($this->_tpl_vars['menutype'] == 'memberlist'){ ?>
<ul class="listbottonul" id="listbottonul">
	<?php if($this->powercheck('member','memberadd')==true ){ ?>
	<li class="menumain"><a id="addinfo" class="addinfo" onclick="javascript:parent.onbotton('<?php echo $this->addslashes($this->_tpl_vars['ST']['botton_add_memberadd'],'hc') ?>','index.php?archive=membermain&action=memberadd&mlid=<?php echo $this->_tpl_vars['tabarray']['mlid'] ?>&tab=true&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'addinfo',self.frameElement.getAttribute('name'));"  href="#body" title="<?php echo $this->_tpl_vars['ST']['botton_add_memberadd'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['botton_add_memberadd'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="selectall" class="selectall" href="javascript:select_change(true,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['selAll_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['selAll_botton'] ?></a></li>
	<li class="menumain"><a id="bolt" href="#body" hidefocus="true" hidefocus="true"><?php echo $this->_tpl_vars['ST']['bolt_botton'] ?></a>
		<ul class="menulist">
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['membertype_botton'] ?></span>
				<ul id="modeltablist">
					<li><a class="menunoclick" id="mcid0" href="#body" onclick="javascript:dbfilter('mcid','mcid',0,0,<?php echo $this->_tpl_vars['pubnum'] ?>,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<?php if (count($this->_tpl_vars['memberpuvlist'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['memberpuvlist']); $ii++){?>
					<li><a class="menuclick" id="mcid<?php echo $ii+1 ?>" href="#body" onclick="javascript:dbfilter('mcid','mcid','<?php echo $this->_tpl_vars['memberpuvlist'][$ii]['mcid'] ?>',<?php echo $ii+1 ?>,<?php echo $this->_tpl_vars['pubnum'] ?>,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['memberpuvlist'][$ii]['rankname'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['memberpuvlist'][$ii]['rankname'] ?></a></li>
					<?php }} ?>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['membermain_text_typeclass'] ?></span>
				<ul>
					<li><a class="menunoclick" id="memisclass0" href="#body" onclick="javascript:dbfilter('memisclass','isclass',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="memisclass1" href="#body" onclick="javascript:dbfilter('memisclass','isclass',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['membermain_text_class1'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['membermain_text_class1'] ?></a></li>
					<li><a class="menuclick" id="memisclass2" href="#body" onclick="javascript:dbfilter('memisclass','isclass',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['membermain_text_class2'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['membermain_text_class2'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['ismoblie_title'] ?></span>
				<ul>
					<li><a class="menunoclick" id="memismoblie0" href="#body" onclick="javascript:dbfilter('memismoblie','ismoblie',0,0,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['all_botton'] ?></a></li>
					<li><a class="menuclick" id="memismoblie1" href="#body" onclick="javascript:dbfilter('memismoblie','ismoblie',1,1,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['ismoblie_title_ok'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['ismoblie_title_ok'] ?></a></li>
					<li><a class="menuclick" id="memismoblie2" href="#body" onclick="javascript:dbfilter('memismoblie','ismoblie',2,2,3,'selectform','selectall','check_all')" title="<?php echo $this->_tpl_vars['ST']['ismoblie_title_no'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['ismoblie_title_no'] ?></a></li>
				</ul>
			</li>
			<li><a class="menuclick" id="articleisorder0" href="#body" onclick="javascript:refreshurl('selectform')" title="<?php echo $this->_tpl_vars['ST']['all_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['getalllist_botton'] ?></a></li>
		</ul>
	</li>
	<li class="menumain"><a id="search" href="javascript:parent.windowsdig('<?php echo $this->_tpl_vars['ST']['membermain_search_botton'] ?>','iframe:index.php?archive=membermain&action=search&iframename='+self.frameElement.getAttribute('name'),'580px','300px','iframe',true);" title="<?php echo $this->_tpl_vars['ST']['membermain_search_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['search_botton'] ?></a></li>
	<?php if($this->powercheck('member','memberdel')==true ){ ?>
	<li class="menumain"><a id="del" onclick="javascript:callrun('index.php?archive=membermain&action=memberdel','memberselectinfoid',false,null,null,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['del_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" href="#body" hidefocus="true"><?php echo $this->_tpl_vars['ST']['del_botton'] ?></a></li>
	<?php } ?>
	<li class="menumain"><a id="refresh" href="#body" onclick="javascript:refresh('selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['refresh_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['refresh_botton'] ?></a></li>
	<?php if($this->powercheck('member','memberedit')==true ){ ?>
	<li class="menumain"><a id="setbotton" href="#body" hidefocus="true" title="<?php echo $this->_tpl_vars['ST']['set_botton'] ?>"><?php echo $this->_tpl_vars['ST']['set_botton'] ?></a>
		<ul class="menulist">
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['membermain_text_set_typeclass'] ?></span>
				<ul>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=membermain&action=setting','memberselectinfoid',true,'isclass',1,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['membermain_text_class1'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['membermain_text_class1'] ?></a></li>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=membermain&action=setting','memberselectinfoid',true,'isclass',0,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['membermain_text_class2'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['membermain_text_class2'] ?></a></li>
				</ul>
			</li>
			<li><span class="menufont"><?php echo $this->_tpl_vars['ST']['membertypeset_botton'] ?></span>
				<ul>
					<?php if (count($this->_tpl_vars['memberpuvlist'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['memberpuvlist']); $ii++){?>
					<li><a class="menuclick" href="#body" onclick="javascript:callrun('index.php?archive=membermain&action=setting','memberselectinfoid',true,'mcid',<?php echo $this->_tpl_vars['memberpuvlist'][$ii]['mcid'] ?>,'index.php?archive=management&action=load','<?php echo $this->_tpl_vars['ST']['update_messok'] ?>','<?php echo $this->_tpl_vars['ST']['select_no'] ?>',true,'<?php echo $this->_tpl_vars['ST']['run_ok'] ?>','<?php echo $this->_tpl_vars['ST']['run_no'] ?>','selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['memberpuvlist'][$ii]['rankname'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['memberpuvlist'][$ii]['rankname'] ?></a></li>
					<?php }} ?>
				</ul>
			</li>
		</ul>
	</li>
	<?php } ?>
</ul>
<?php } ?>      