<table border="0" width="100%" bordercolor="#FFFFFF">
	<tr>
		<td width="4%"><input type="checkbox" name="check_all" id="check_all" value="1" onClick="select_ok('selectform','selectall','check_all');"/></td>
		<td width="7%"><a id="btlimit_osrid" class="infolink06" href="javascript:onlimit('oid','asc','#btlimit_osrid','#limit_osrid','','selectform','selectall','check_all')"  hidefocus="true"><?php echo $this->_tpl_vars['ST']['ordermain_text_oid'] ?></a><span id="limit_osrid" class="limitdesc"></span></td>
		<td width="16%"><?php echo $this->_tpl_vars['ST']['ordermain_text_ordersn'] ?></td>
		<td width="8%"><?php echo $this->_tpl_vars['ST']['ordermain_text_ordertype'] ?></td>
		<td width="10%"><?php echo $this->_tpl_vars['ST']['ordermain_text_money'] ?></td>
		<td width="10%"><?php echo $this->_tpl_vars['ST']['ordermain_text_consignee'] ?></td>
		<td width="14%"><?php echo $this->_tpl_vars['ST']['ordermain_text_addtime'] ?></td>
		<td width="10%"><?php echo $this->_tpl_vars['ST']['ordermain_text_paysn'] ?></td>
		<td width="10%"><?php echo $this->_tpl_vars['ST']['ordermain_text_shippingsn'] ?></td>
		<td width="11%"><?php echo $this->_tpl_vars['ST']['ordermain_text_set'] ?></td>
	</tr>
</table>