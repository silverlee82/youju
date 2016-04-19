<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $this->_tpl_vars['softtitle'] ?></title>
<link href="templates/css/baselist.css" rel="stylesheet" type="text/css" />
<link href="templates/css/all.css" rel="stylesheet" type="text/css" />
<link href="templates/css/formdiv.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/control.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/passcheck.js"></script>
<?php if($this->_tpl_vars['defaultinput']['mem_isaddress']==1){ ?>
<script type="text/javascript" src="js/cityselect.js"></script>
<?php } ?>
<script type="text/javascript" src="../js/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">

	var resizewindow= null;

	window.onresize = function(){
		var h = $(window).height();
		if(resizewindow!=h){
			sizewindow();
			resizewindow=h;
		}
	}

	function sizewindow(){
		var h = $(window).height();
		if(document.getElementById("mainbodybottonauto")){
			$('.managebottonadd').css({height:h-40});
		}
	}
	var membermain_js_password_empty  = "<?php echo $this->_tpl_vars['ST']['membermain_js_password_empty'] ?>";
	var membermain_js_password_error  = "<?php echo $this->_tpl_vars['ST']['membermain_js_password_error'] ?>";
	var membermain_js_email_empty  = "<?php echo $this->_tpl_vars['ST']['membermain_js_email_empty'] ?>";
	var membermain_js_birthday_empty  = "<?php echo $this->_tpl_vars['ST']['membermain_js_birthday_empty'] ?>";
	var membermain_js_zipcode_empty  = "<?php echo $this->_tpl_vars['ST']['membermain_js_zipcode_empty'] ?>";
	var membermain_js_qq_empty  = "<?php echo $this->_tpl_vars['ST']['membermain_js_qq_empty'] ?>";
	var membermain_js_edit_ok = "<?php echo $this->_tpl_vars['ST']['membermain_js_edit_ok'] ?>";
	var membermain_js_edit_no = "<?php echo $this->_tpl_vars['ST']['membermain_js_edit_no'] ?>";
	var membermain_js_integral_empty = "<?php echo $this->_tpl_vars['ST']['membermain_js_integral_empty'] ?>";
	var password_err1 = "<?php echo $this->_tpl_vars['ST']['password_err1'] ?>";
	var password_err2 = "<?php echo $this->_tpl_vars['ST']['password_err2'] ?>";
	var password_err3 = "<?php echo $this->_tpl_vars['ST']['password_err3'] ?>";
	var password_err4 = "<?php echo $this->_tpl_vars['ST']['password_err4'] ?>";
	var password_err5 = "<?php echo $this->_tpl_vars['ST']['password_err5'] ?>";
	var article_js_input_err  = "<?php echo $this->_tpl_vars['ST']['article_js_input_err'] ?>";
	var iframename = "<?php echo $this->_tpl_vars['iframename'] ?>";
	$(document).ready(function(){
		$('#password').ESPpasscheck({
			verdects:[password_err1,password_err2,password_err3,password_err4,password_err5]
		});
		var h = '<?php echo $this->_tpl_vars['iframeheightwindow'] ?>';
		$('.managebottonadd').css({height:h-40});
		var options = {
			beforeSubmit: formverify,
			success:saveResponse
		}
		$('#memberedit').submit(function() {
			$(this).ajaxSubmit(options);
			return false;
		});
		<?php if($this->_tpl_vars['defaultinput']['mem_isaddress']==1){ ?>
		sec_cityone(<?php echo $this->_tpl_vars['memread']['country'] ?>,<?php echo $this->_tpl_vars['memread']['province'] ?>);
		sec_citytwo(<?php echo $this->_tpl_vars['memread']['province'] ?>,<?php echo $this->_tpl_vars['memread']['city'] ?>);
		sec_district(<?php echo $this->_tpl_vars['memread']['city'] ?>,<?php echo $this->_tpl_vars['memread']['district'] ?>);
		<?php } ?>
		if (parent.document.getElementById('centerleft')){
			parent.scrolclear();
		}
	})




	function formverify(formData) {
		var queryString = $.param(formData);
		var get=urlarray(queryString);
		if(get['password']!="") {
			if(get['password'].length<6) {
				document.memberedit.password.focus();
				alert(membermain_js_password_empty);
				return false;
			}
			if( get['password2'] != get['password'] ) {
				document.memberedit.password.focus();
				alert(membermain_js_password_error);
				return false;
			}
		}
		if(get['email'].match(/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/ig)==null) {
			document.memberedit.email.focus();
			alert(membermain_js_email_empty);
			return false;
		}
		if(get['birthday']!=""){
			if(get['birthday'].match(/^[1-9][0-9]{3}\-[0-9]{2}\-[0-9]{2}$/ig)==null) {
				document.memberedit.birthday.focus();
				alert(membermain_js_birthday_empty);
				return false;
			}
		}
		if(get['zipcode']!=""){
			if(get['zipcode'].match(/^[0-9]+$/ig)==null) {
				document.memberedit.zipcode.focus();
				alert(membermain_js_zipcode_empty);
				return false;
			}
		}
		if(get['integral']!=""){
			if(get['integral'].match(/^[0-9]+$/ig)==null) {
				document.memberedit.integral.focus();
				alert(membermain_js_integral_empty);
				return false;
			}
		}
		if(get['qq']!=""){
			if(get['qq'].match(/^[0-9]+$/ig)==null) {
				document.memberedit.qq.focus();
				alert(membermain_js_qq_empty);
				return false;
			}
		}
		<?php if (count($this->_tpl_vars['modelatt'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['modelatt']); $list++){?>
			<?php if(($this->_tpl_vars['modelatt'][$list]['isvalidate']==1)){ ?>
			<?php if(($this->_tpl_vars['modelatt'][$list]['validatetext']!='')){ ?>
				if(get['<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>'].match(<?php echo $this->_tpl_vars['modelatt'][$list]['validatetext'] ?>ig)==null) {
			<?php }else{ ?>
				if(get['<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>']==''){
			<?php } ?>
				document.memberedit.<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>.focus();
				alert('<?php echo $this->_tpl_vars['modelatt'][$list]['typename'] ?>'+article_js_input_err);
				return false;
			}
			<?php } ?>
		<?php }} ?>
		parent.windowsdig('Loading','iframe:index.php?archive=management&action=load','400px','180px','iframe',false);
	}
	function saveResponse(options){
		parent.closeifram();
		if (options=='true'){
			parent.frames[iframename].refresh('selectform','selectall','check_all');
			alert(membermain_js_edit_ok);
		}else{
			alert(membermain_js_edit_no+'Return message:'+options);
		}
		if (parent.document.getElementById('centerleft')){
			parent.scrolopen();
		}
		parent.onaletdoc()
	}
</script>
</head>

<body>
<form name="memberedit" id="memberedit" method="post" action="index.php?archive=membermain&action=membersave">
<input type="hidden" name="inputclass" value="edit">
<input type="hidden" name="userid" value="<?php echo $this->_tpl_vars['memread']['userid'] ?>">
<div id="mainbodybottonauto" class="managebottonadd">
	<div class="maindobycontent">
		<div class="suggestion">
			<span class="sugicon"><span class="strong colorgorning2"><?php echo $this->_tpl_vars['ST']['position_title'] ?></span><span class="colorgorningage"><?php echo $this->_tpl_vars['ST']['membermain_edit_mess'] ?> <u><?php echo $this->_tpl_vars['memread']['username'] ?> <?php echo $this->timeformat($this->_tpl_vars['memread']['addtime'],3) ?> </u></span></span>
		</div>
		<div class="manageeditdiv">
			<div class="maneditcontent">
				<table class="formtable">
					<tr class="trstyle2">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_username'] ?></td>
						<td width="85%" class="trtitle02"><?php echo $this->_tpl_vars['memread']['username'] ?></td>
					</tr>
					<tr class="trstyle2">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_text_visitcount'] ?></td>
						<td width="85%" class="trtitle02"><?php echo $this->_tpl_vars['memread']['visitcount'] ?></td>
					</tr>
					<tr class="trstyle2">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_edit_lastip'] ?></td>
						<td width="85%" class="trtitle02"><?php echo $this->ip($this->_tpl_vars['memread']['lastip'],0) ?></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_text_lasttime'] ?></td>
						<td class="trtitle02"><?php echo $this->timeformat($this->_tpl_vars['memread']['lasttime'],3) ?></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_edit_password'] ?></td>
						<td class="trtitle02">
							<input type="password" name="password" size="20" maxlength="16" class="infoInput" id="password">
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['membermain_edit_password_mess'] ?></span>
						</td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_password2'] ?></td>
						<td class="trtitle02"><input type="password" name="password2" size="20" maxlength="16" class="infoInput"></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_passwordcheck'] ?>：</td>
						<td class="trtitle02"><span id="passlist"></span></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_email'] ?></td>
						<td class="trtitle02"><input type="text" name="email" maxlength="100" size="40" value="<?php echo $this->_tpl_vars['memread']['email'] ?>" class="infoInput"></td>
					</tr>
					<tr class="trstyle2" id="select1">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_question'] ?></td>
						<td class="trtitle02"><input type="text" name="question" maxlength="100" size="40" value="<?php echo $this->_tpl_vars['memread']['question'] ?>" class="infoInput"><span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['membermain_add_question_mess'] ?></span></td>
					</tr>
					<tr class="trstyle2" id="select2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_answer'] ?></td>
						<td class="trtitle02"><input type="text" name="answer" maxlength="100" size="40" value="<?php echo $this->_tpl_vars['memread']['answer'] ?>" class="infoInput"></td>
					</tr>
					<tr class="trstyle2" id="select2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_integral'] ?></td>
						<td class="trtitle02"><input type="text" name="integral" maxlength="5" size="5" value="<?php echo $this->_tpl_vars['memread']['integral'] ?>" class="infoInput"></td>
					</tr>
					<tr class="trstyle2">
						<td width="15%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_mcid'] ?></td>
						<td width="85%" class="trtitle02">
							<select name="mcid" id="mcid">
								<?php if (count($this->_tpl_vars['memberpuvlist'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['memberpuvlist']); $i++){?>
								<option <?php echo $this->_tpl_vars['memberpuvlist'][$i]['selected'] ?> value="<?php echo $this->_tpl_vars['memberpuvlist'][$i]['mcid'] ?>"><?php echo $this->_tpl_vars['memberpuvlist'][$i]['rankname'] ?></option>
								<?php }} ?>
							</select>
						</td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle03" colspan="2"><?php echo $this->_tpl_vars['ST']['membermain_add_countustype'] ?></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01" width="15%"><?php echo $this->_tpl_vars['ST']['membermain_add_alias'] ?></td>
						<td class="trtitle02" width="85%"><input type="text" value="<?php echo $this->_tpl_vars['memread']['alias'] ?>" name="alias" maxlength="80" size="50" class="infoInput"></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_sex'] ?></td>
						<td class="trtitle02">
							<input type="radio" value="1" name="sex"<?php if($this->_tpl_vars['memread']['sex']==1){ ?> checked="checked"<?php } ?>> <?php echo $this->_tpl_vars['ST']['select_sex_1'] ?>&nbsp;
							<input type="radio" value="0" name="sex"<?php if($this->_tpl_vars['memread']['sex']==0){ ?> checked="checked"<?php } ?>> <?php echo $this->_tpl_vars['ST']['select_sex_0'] ?>
						</td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_tel'] ?></td>
						<td class="trtitle02"><input type="text" name="tel" maxlength="20" value="<?php echo $this->_tpl_vars['memread']['tel'] ?>" size="50" class="infoInput"><span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['membermain_add_tel_mess'] ?></span></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_motel'] ?></td>
						<td class="trtitle02"><input type="text" name="mobile" value="<?php echo $this->_tpl_vars['memread']['mobile'] ?>" maxlength="20" size="50" class="infoInput"></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_birthday'] ?></td>
						<td class="trtitle02">
							<input type="text" name="birthday" id="birthday" value="<?php echo $this->timeformat($this->_tpl_vars['memread']['birthday'],2) ?>" maxlength="20" size="20" class="infoInput">
							<a class="datetime" onclick="WdatePicker({el:'birthday',readOnly:true,dateFmt:'yyyy-MM-dd'})" href="#body"><?php echo $this->_tpl_vars['ST']['selectdata_botton'] ?></a>
						</td>
					</tr>
					<?php if($this->_tpl_vars['defaultinput']['mem_isaddress']==1){ ?>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_country'] ?></td>
						<td class="trtitle02">
							<select size="1" name="cityone" class="select" id="cityone">
								<option <?php if($this->_tpl_vars['memread']['country']==0){ ?>selected <?php } ?>value="0"><?php echo $this->_tpl_vars['ST']['membermain_add_country_option'] ?></option>
								<option <?php if($this->_tpl_vars['memread']['country']==1){ ?>selected <?php } ?>value="1"><?php echo $this->_tpl_vars['ST']['membermain_add_country_value'] ?></option>
							</select>
							<select size="1" name="citytwo" class="select" id="citytwo">
								<option selected value="0"><?php echo $this->_tpl_vars['ST']['membermain_add_province_option'] ?></option>
							</select>
							<select size="1" name="citythree" class="select" id="citythree">
								<option selected value="0"><?php echo $this->_tpl_vars['ST']['membermain_add_city_option'] ?></option>
							</select>
							<select size="1" name="district" class="select" id="district">
								<option selected value="0"><?php echo $this->_tpl_vars['ST']['membermain_add_district_option'] ?></option>
							</select>
							<span id="cityloading">Loading…</span>
						</td>
					</tr>
					<?php } ?>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_address'] ?></td>
						<td class="trtitle02"><input type="text" name="address" value="<?php echo $this->_tpl_vars['memread']['address'] ?>" maxlength="120" size="80" class="infoInput"></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_zipcode'] ?></td>
						<td class="trtitle02"><input type="text" name="zipcode" value="<?php echo $this->_tpl_vars['memread']['zipcode'] ?>" maxlength="10" size="50" class="infoInput"></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_msn'] ?></td>
						<td class="trtitle02"><input type="text" name="msn" value="<?php echo $this->_tpl_vars['memread']['msn'] ?>" maxlength="50" size="50" class="infoInput"></td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_qq'] ?></td>
						<td class="trtitle02"><input type="text" name="qq" value="<?php echo $this->_tpl_vars['memread']['qq'] ?>" maxlength="10" size="50" class="infoInput"></td>
					</tr>
					<?php if(count($this->_tpl_vars['modelatt']) > 0){ ?>
						<?php if (count($this->_tpl_vars['modelatt'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['modelatt']); $list++){?>
							<tr class="trstyle2">
								<td class="trtitle01"><?php echo $this->_tpl_vars['modelatt'][$list]['typename'] ?></td>
								<td class="trtitle02">
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
									<input type="text" name="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>" size="<?php echo $this->_tpl_vars['modelatt'][$list]['attrsize'] ?>" id="<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>" value="<?php echo $this->timeformat($this->_tpl_vars['modelatt'][$list]['attrvalue'],3) ?>" maxlength="<?php echo $this->_tpl_vars['modelatt'][$list]['attrlenther'] ?>" class="infoInput"/>
									<a class="datetime" onclick="WdatePicker({el:'<?php echo $this->_tpl_vars['modelatt'][$list]['attrname'] ?>',readOnly:true,dateFmt:'yyyy-MM-dd HH:mm:ss'})" href="#body"><?php echo $this->_tpl_vars['ST']['selectdata_botton'] ?></a>
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
									<?php if($this->_tpl_vars['modelatt'][$list]['typeremark']!=''){ ?><span class="cautiontitle"><?php echo $this->_tpl_vars['modelatt'][$list]['typeremark'] ?></span><?php } ?>
								</td>
							</tr>
						<?php }} ?>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>
<div id="downbotton">
	<div id="subbotton">
		<table border="0" width="100%">
			<tr>
				<td id="right"><input type="submit" name="Submit" value="<?php echo $this->_tpl_vars['ST']['botton_edit'] ?>" class="button orange" /></td>
				<td id="left" class="padding-left5"><input type="button" name="cancel" onClick="javascript:closewindow();" value="<?php echo $this->_tpl_vars['ST']['botton_edit_reset'] ?>" class="button orange" /></td>
			</tr>
		</table>
	</div>
</div>
<input type="hidden" name="mvid" value="<?php echo $this->_tpl_vars['memread']['mvid'] ?>">
<input type="hidden" name="lng" value="<?php echo $this->_tpl_vars['lng'] ?>">
<input type="hidden" name="username" value="<?php echo $this->_tpl_vars['memread']['username'] ?>">
<input type="hidden" name="passwordold" value="<?php echo $this->_tpl_vars['memread']['password'] ?>">
</form>
</body>

</html>