<?php /* 日志查看/ 模板列表 */ ?>
<?php if($this->_tpl_vars['menutype'] == 'loglist' || $this->_tpl_vars['menutype'] == 'templatelist'){ ?>
<ul class="listbottonul" id="listbottonul">
	<li class="menumain"><a id="refresh" href="#body" onclick="javascript:refresh('selectform','selectall','check_all');" title="<?php echo $this->_tpl_vars['ST']['refresh_botton'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['refresh_botton'] ?></a></li>
</ul>
<?php } ?>      