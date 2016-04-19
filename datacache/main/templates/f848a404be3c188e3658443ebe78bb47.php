<!--js-->
<script type="text/javascript">
	var username_len = "<?php echo $this->_tpl_vars['lngpack']['username_err'] ?>";
	var email_err = "<?php echo $this->_tpl_vars['lngpack']['email_err'] ?>";
	var password_len = "<?php echo $this->_tpl_vars['lngpack']['password_err'] ?>";
	var password_len2 = "<?php echo $this->_tpl_vars['lngpack']['password_len2'] ?>";
	var password2_empty = "<?php echo $this->_tpl_vars['lngpack']['password2_err'] ?>";
	var password_disaffinity = "<?php echo $this->_tpl_vars['lngpack']['password_equal'] ?>";
	var agree_empty = "<?php echo $this->_tpl_vars['lngpack']['agree_empty'] ?>";
	var seccode_empty = "<?php echo $this->_tpl_vars['lngpack']['seescodeerr'] ?>";
</script>
<!--end_js-->
<form name="memberreg" id="memberreg" method="post" action="<?php echo $this->_tpl_vars['mlink']['regsave'] ?>" onsubmit="return memberdbreg('<?php echo $this->_tpl_vars['mem_regisseccode'] ?>')">
<input type="hidden" name="tokenkey" value="<?php echo $this->_tpl_vars['tokenkey']['token_key'] ?>"/>
<div class="espcms_member_login_center espcms_formwidth_c">
	<div class="title mb20"><div class="messageicon"></div><div class="messtitle">会员注册</div></div>
	<div class="espcms_form_group">
		<label for="title" class="control_label16">手机号码</label>
		<div class="control_required20">
			<input type="text" name="username" id="username" class="col5 infoInput" value="" size="20" maxlength="50" onblur="checktypename('username',this.value,'<?php echo $this->_tpl_vars['mlink']['checkusername'] ?>','usermsg','<?php echo $this->_tpl_vars['lngpack']['mem_reg_ok'] ?>','<?php echo $this->_tpl_vars['lngpack']['mem_reg_no'] ?>','regsubmit');"/>
			<span id="usermsg" class="form_message">请输入手机号码</span>
		</div>
	</div>
	<div class="espcms_form_group">
		<label for="title" class="control_label16">电子邮箱</label>
		<div class="control_required20">
			<input type="text" name="email" id="email" class="col5 infoInput"  size="40" maxlength="100" onblur="checktypename('email',this.value,'<?php echo $this->_tpl_vars['mlink']['checkusername'] ?>','mailmsg','<?php echo $this->_tpl_vars['lngpack']['mem_regemail_ok'] ?>','<?php echo $this->_tpl_vars['lngpack']['mem_regemail_no'] ?>','regsubmit');"/>
			<span id="mailmsg" class="form_message">请真实填写您的邮件，用于密码找回和相关通知服务</span>
		</div>
	</div>
	<div class="espcms_form_group">
		<label for="title" class="control_label16">密&nbsp;&nbsp;&nbsp; 码</label>
		<div class="control_required20">
			<input type="password" name="password" id="password"  class="col4 infoInput" size="18" maxlength="50"/>
			<span class="form_message">5－15 个字符，包括英文字母、中文、数字、下划线</span>
		</div>
	</div>
	<div class="espcms_form_group">
		<label for="title" class="control_label16">重复密码</label>
		<div class="control_required20">
			<input type="password" name="password2" id="password2" class="col4 infoInput" size="18" maxlength="50"/>
		</div>
	</div>
	<?php if(count($this->_tpl_vars['modelatt']) > 0){ ?>
		<?php if (count($this->_tpl_vars['modelatt'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['modelatt']); $list++){?>
		<div class="espcms_form_group">
			<label for="title" class="control_label16"><?php echo $this->_tpl_vars['modelatt'][$list]['typename'] ?></label>
			<div class="control_required20">
				<?php if($this->_tpl_vars['modelatt'][$list]['inputtype']=='string' || $this->_tpl_vars['modelatt'][$list]['inputtype']=='int' || $this->_tpl_vars['modelatt'][$list]['inputtype']=='float' || $this->_tpl_vars['modelatt'][$list]['inputtype']=='decimal'){ ?>
				<input type="text" name="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>" size="<?php echo $this->_tpl_vars['modelatt'][$list]['attrsize'] ?>" id="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>" value="<?php echo $this->_tpl_vars['modelatt'][$list]['attrvalue'] ?>" maxlength="<?php echo $this->_tpl_vars['modelatt'][$list]['attrlenther'] ?>" class="infoInput"/>
				<?php } elseif(($this->_tpl_vars['modelatt'][$list]['inputtype']=='text' || $this->_tpl_vars['modelatt'][$list]['inputtype']=='editor')){ ?>
				<textarea name="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>" id="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>"  style="width:99%;height:<?php echo $this->_tpl_vars['modelatt'][$list]['attrrow'] ?>px;" class="infoInput"><?php echo $this->_tpl_vars['modelatt'][$list]['attrvalue'] ?></textarea>
				<?php } elseif(($this->_tpl_vars['modelatt'][$list]['inputtype']=='htmltext')){ ?>
				<textarea name="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>" id="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>"  style="width:99%;height:<?php echo $this->_tpl_vars['modelatt'][$list]['attrrow'] ?>px;" class="infoInput"><?php echo $this->Html2Text($this->_tpl_vars['modelatt'][$list]['attrvalue'],'0') ?></textarea>
				<?php } elseif(($this->_tpl_vars['modelatt'][$list]['inputtype']=='selectinput')){ ?>
				<input type="text" name="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>" size="<?php echo $this->_tpl_vars['modelatt'][$list]['attrsize'] ?>" id="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>" value="<?php echo $this->_tpl_vars['modelatt'][$list]['attrvalue'] ?>" maxlength="<?php echo $this->_tpl_vars['modelatt'][$list]['attrlenther'] ?>" class="infoInput"/>
				<select size="1" name="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>selectinputvalue" onchange="javascript:$('#<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>').val(this.value)">
					<option value=""><?php echo $this->_tpl_vars['ST']['botton_select_name'] ?><?php echo $this->_tpl_vars['modelatt'][$list]['typename'] ?></option>
					<?php if (count($this->_tpl_vars['modelatt'][$list]['selectinputvalue'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['modelatt'][$list]['selectinputvalue']); $ii++){?>
					<option value="<?php echo $this->_tpl_vars['modelatt'][$list]['selectinputvalue'][$ii]['name'] ?>"><?php echo $this->_tpl_vars['modelatt'][$list]['selectinputvalue'][$ii]['name'] ?></option>
					<?php }} ?>
				</select>
				<?php } elseif(($this->_tpl_vars['modelatt'][$list]['inputtype']=='datetime')){ ?>
				<input type="text" name="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>" size="<?php echo $this->_tpl_vars['modelatt'][$list]['attrsize'] ?>" id="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>"  onclick="WdatePicker({el:'<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>',readOnly:true,dateFmt:'yyyy-MM-dd HH:mm:ss'})"  value="<?php echo $this->timeformat($this->_tpl_vars['modelatt'][$list]['attrvalue'],3) ?>" maxlength="<?php echo $this->_tpl_vars['modelatt'][$list]['attrlenther'] ?>" class="infoInput"/>
				<?php } elseif(($this->_tpl_vars['modelatt'][$list]['inputtype']=='select')){ ?>
				<select size="1" name="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>" id="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>">
					<option value=""><?php echo $this->_tpl_vars['ST']['botton_select_name'] ?><?php echo $this->_tpl_vars['modelatt'][$list]['typename'] ?></option>
					<?php if (count($this->_tpl_vars['modelatt'][$list]['attrvalue'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['modelatt'][$list]['attrvalue']); $ii++){?>
					<option <?php echo $this->_tpl_vars['modelatt'][$list]['attrvalue'][$ii]['selected'] ?> value="<?php echo $this->_tpl_vars['modelatt'][$list]['attrvalue'][$ii]['name'] ?>"><?php echo $this->_tpl_vars['modelatt'][$list]['attrvalue'][$ii]['name'] ?></option>
					<?php }} ?>
				</select>
				<?php } elseif(($this->_tpl_vars['modelatt'][$list]['inputtype']=='radio')){ ?>
					<?php if (count($this->_tpl_vars['modelatt'][$list]['attrvalue'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['modelatt'][$list]['attrvalue']); $ii++){?>
					<input type="radio" value="<?php echo $this->_tpl_vars['modelatt'][$list]['attrvalue'][$ii]['name'] ?>" name="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>" <?php if($this->_tpl_vars['modelatt'][$list]['attrvalue'][$ii]['selected']=='selected'){ ?>checked="checked"<?php } ?>/> <?php echo $this->_tpl_vars['modelatt'][$list]['attrvalue'][$ii]['name'] ?>&nbsp;
					<?php }} ?>
				<?php } elseif(($this->_tpl_vars['modelatt'][$list]['inputtype']=='checkbox')){ ?>
					<?php if (count($this->_tpl_vars['modelatt'][$list]['attrvalue'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['modelatt'][$list]['attrvalue']); $ii++){?>
					<input type="checkbox" value="<?php echo $this->_tpl_vars['modelatt'][$list]['attrvalue'][$ii]['name'] ?>" name="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>[]" <?php if($this->_tpl_vars['modelatt'][$list]['attrvalue'][$ii]['selected']=='selected'){ ?>checked="checked"<?php } ?>/> <?php echo $this->_tpl_vars['modelatt'][$list]['attrvalue'][$ii]['name'] ?>&nbsp;
					<?php }} ?>
				<?php } ?>
				<?php if($this->_tpl_vars['modelatt'][$list]['typeremark']!=''){ ?><span class="form_message"><?php echo $this->_tpl_vars['modelatt'][$list]['typeremark'] ?></span><?php } ?>
			</div>
		</div>
		<?php }} ?>
	<?php } ?>
	<?php if($this->_tpl_vars['mem_regisseccode']==1){ ?>
	<div class="espcms_form_group">
		<label for="username" class="control_label">验证码</label>
		<div class="control_required">
			<input type="text" id="seccode" name="seccode" class="infoInput" maxlength="4" size="5" style="text-transform: uppercase;"/>
			<img title="点击更换验证码" id="memberseccodesrc" onclick="sessionimg('memberseccodesrc','<?php echo $this->_tpl_vars['rootdir'] ?>')" src="<?php echo $this->_tpl_vars['seccodelink'] ?>" style="cursor: pointer;height:28px;margin-left:5px;" align="absmiddle"/>
		</div>
	</div>
	<?php } ?>
	<div class="espcms_form_group">
		<label class="control_label16"> </label>
		<div class="control_required20"><input type="checkbox" name="agree" id="agree" value="1" /> <a target="_blank" href="<?php echo $this->_tpl_vars['reglink'] ?>" title="您是否同意服务条款">同意服务条款（先看看条款？）</a></div>
	</div>
	<div class="espcms_form_group">
		<label class="control_label16"> </label>
		<div class="control_required20">
			<input type="submit" id="submit" class="button blue2" value="确定注册"/>
		</div>
	</div>
</div>
</form>
