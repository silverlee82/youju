<table border="0" width="100%" bordercolor="#FFFFFF">
	<tr>
		<td width="4%"><input type="checkbox" name="check_all" id="check_all" value="1" onClick="select_ok('selectform','selectall','check_all');"/></td>
		<td width="8%"><a id="btlimit_pid" class="infolink06" href="javascript:onlimit('pid','desc','#btlimit_pid','#limit_pid','#limit_maid','selectform','selectall','check_all')"  hidefocus="true"><?php echo $this->_tpl_vars['ST']['memattmanage_text_pid'] ?></a><span id="limit_pid" class="limitdesc displaynone"></span></td>
		<td width="8%"><a id="btlimit_maid" class="infolink06" href="javascript:onlimit('maid','asc','#btlimit_maid','#limit_maid','#limit_pid','selectform','selectall','check_all')"  hidefocus="true"><?php echo $this->_tpl_vars['ST']['memattmanage_text_mcid'] ?></a><span id="limit_maid" class="limitdesc"></span></td>
		<td width="20%"><?php echo $this->_tpl_vars['ST']['memattmanage_text_typename'] ?></td>
		<td width="20%"><?php echo $this->_tpl_vars['ST']['memattmanage_text_attrname'] ?></td>
		<td width="14%"><?php echo $this->_tpl_vars['ST']['memattmanage_text_type'] ?></td>
		<td width="8%"><?php echo $this->_tpl_vars['ST']['memattmanage_text_isvalidate'] ?></td>
		<td width="8%"><?php echo $this->_tpl_vars['ST']['memattmanage_text_class'] ?></td>
		<td width="10%"><?php echo $this->_tpl_vars['ST']['memattmanage_text_set'] ?></td>
	</tr>
</table>