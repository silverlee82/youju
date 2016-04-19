<table border="0" width="100%" bordercolor="#FFFFFF">
	<tr>
		<td width="4%"><input type="checkbox" name="check_all" id="check_all" value="1" onClick="select_ok('selectform','selectall','check_all');"/></td>
		<td width="8%"><a id="btlimit_userid" class="infolink06" href="javascript:onlimit('userid','asc','#btlimit_userid','#limit_userid','','selectform','selectall','check_all')"  hidefocus="true"><?php echo $this->_tpl_vars['ST']['membermain_text_did'] ?></a><span id="limit_userid" class="limitdesc"></span></td>
		<td width="20%"><?php echo $this->_tpl_vars['ST']['membermain_text_username'] ?></td>
		<td width="15%"><?php echo $this->_tpl_vars['ST']['membermain_text_rankname'] ?></td>
		<td width="22%"><?php echo $this->_tpl_vars['ST']['membermain_text_email'] ?></td>
		<td width="8%"><?php echo $this->_tpl_vars['ST']['membermain_text_integral'] ?></td>
		<td width="8%"><?php echo $this->_tpl_vars['ST']['membermain_text_visitcount'] ?></td>
		<td width="8%"><?php echo $this->_tpl_vars['ST']['membermain_text_class'] ?></td>
		<td width="7%"><?php echo $this->_tpl_vars['ST']['membermain_text_set'] ?></td>
	</tr>
</table>