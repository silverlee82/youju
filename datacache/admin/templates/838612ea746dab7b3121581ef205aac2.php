<?php if(count($this->_tpl_vars['array']) > 0){ ?>
<?php if (count($this->_tpl_vars['array'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['array']); $list++){?>
<div class="infolist" onselectstart="return false;" title="<?php echo $this->_tpl_vars['array'][$list]['rankname'] ?>" <?php if($this->powercheck('member','classedit')==true ){ ?>ondblClick="javascript:parent.onbotton('<?php echo $this->_tpl_vars['ST']['memclassmanage_edit_title'] ?>','index.php?archive=memclassmanage&action=classedit&mcid=<?php echo $this->_tpl_vars['array'][$list]['mcid'] ?>&type=edit&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),true,'memberclassedit<?php echo $this->_tpl_vars['array'][$list]['mcid'] ?>',self.frameElement.getAttribute('name'));"<?php } ?>>
	<table border="0" style="border-collapse:collapse" width="100%" bordercolor="#FFFFFF">
		<tr>
			<td width="10%"><?php if($this->_tpl_vars['array'][$list]['lockin']==0){ ?><input type="checkbox" name="selectinfoid" value="<?php echo $this->_tpl_vars['array'][$list]['mcid'] ?>"><?php } ?></td>
			<td width="10%"><?php echo $this->_tpl_vars['array'][$list]['mcid'] ?></td>
			<td width="40%"><?php echo $this->_tpl_vars['array'][$list]['rankname'] ?></td>
			<td width="10%"><?php echo $this->_tpl_vars['array'][$list]['integra'] ?></td>
			<td width="10%" id="infotype">
				<table>
					<tr>
						<td><?php if($this->_tpl_vars['array'][$list]['isinter']==1){ ?><span class="select_ok"></span><?php }else{ ?><span class="select_no"></span><?php } ?></td>
					</tr>
				</table>
			</td>
			<td width="10%" id="infotype">
				<table>
					<tr>
						<td><?php if($this->_tpl_vars['array'][$list]['isclass']==1){ ?><font class="colorthree strong"><?php echo $this->_tpl_vars['ST']['open_botton_title'] ?><?php }else{ ?><font class="colorgreg strong"><?php echo $this->_tpl_vars['ST']['close_botton_title'] ?><?php } ?></font></td>
					</tr>
				</table>
			</td>
			<td width="10%" id="infotype">
				<?php if($this->powercheck('member','classedit')==true ){ ?>
				<table border="0" style="border-collapse:collapse" bordercolor="#FFFFFF">
					<tr>
						<td><a class="setedit" onclick="javascript:parent.onbotton('<?php echo $this->_tpl_vars['ST']['memclassmanage_edit_title'] ?>','index.php?archive=memclassmanage&action=classedit&mcid=<?php echo $this->_tpl_vars['array'][$list]['mcid'] ?>&type=edit&freshid='+Math.random()+'&iframename='+self.frameElement.getAttribute('name'),false,'memberclassedit<?php echo $this->_tpl_vars['array'][$list]['mcid'] ?>',self.frameElement.getAttribute('name'));" id="memberclassedit<?php echo $this->_tpl_vars['array'][$list]['mcid'] ?>" href="#body" title="<?php echo $this->_tpl_vars['array'][$list]['rankname'] ?><?php echo $this->_tpl_vars['ST']['memclassmanage_edit_title'] ?>" hidefocus="true"><?php echo $this->_tpl_vars['ST']['setedit_botton'] ?></a></td>
					</tr>
				</table>
				<?php } ?>
			</td>
		</tr>
	</table>
</div>
<?php }} ?>
<?php }else{ ?>
<div class="infolist">
<table border="0" style="border-collapse:collapse" width="100%" bordercolor="#FFFFFF">
	<tr>
	    <td align="center"><?php echo $this->_tpl_vars['ST']['list_nothing_title'] ?></td>
	</tr>
</table>
</div>
<?php } ?>