<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $this->_tpl_vars['softtitle'] ?></title>
<link href="templates/css/baselist.css" rel="stylesheet" type="text/css" />
<link href="templates/css/all.css" rel="stylesheet" type="text/css" />
<link href="templates/css/formdiv.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/control.js"></script>
<script type="text/javascript">

	var resizewindow= null;

	window.onresize = function(){
		var h = $(window).height();
		if(resizewindow!=h){
			sizewindow();
			resizewindow=h;
		}
	};

	function sizewindow(){
		var h = $(window).height();
		if(document.getElementById("mainbodybottonauto")){
			$('.managebottonadd').css({height:h-40});
		}
	}
	var memclassmanage_js_rankname_empty  = "<?php echo $this->_tpl_vars['ST']['memclassmanage_js_rankname_empty'] ?>";
	var memclassmanage_js_integra_empty  = "<?php echo $this->_tpl_vars['ST']['memclassmanage_js_integra_empty'] ?>";
	var memclassmanage_js_type_add_ok = "<?php echo $this->_tpl_vars['ST']['memclassmanage_js_type_add_ok'] ?>";
	var memclassmanage_js_type_add_no = "<?php echo $this->_tpl_vars['ST']['memclassmanage_js_type_add_no'] ?>";
	var iframename = "<?php echo $this->_tpl_vars['iframename'] ?>";
	iframename = iframename=='' ? "jerichotabiframe_0" : iframename;
	$(document).ready(function(){
		var h = '<?php echo $this->_tpl_vars['iframeheightwindow'] ?>';
		$('.managebottonadd').css({height:h-40});
		var options = {
			beforeSubmit: formverify,
			success:saveResponse,
			resetForm: false
		};
		$('#classadd').submit(function() {
			$(this).ajaxSubmit(options);
			return false;
		});
	});




	function formverify(formData) {
		var queryString = $.param(formData);
		var get=urlarray(queryString);
		if(get['rankname']==''){
			document.classadd.rankname.focus();
			alert(memclassmanage_js_rankname_empty);
			return false;
		}
		if(get['isinter']==1){
			if(get['integra'].match(/^[1-9][0-9]*$/ig)==null) {
				document.classadd.integra.focus();
				alert(memclassmanage_js_integra_empty);
				return false;
			}
		}else{
			if(get['integra']!='' && get['integra']!=0){
				if(get['integra'].match(/^[1-9][0-9]*$/ig)==null) {
					document.classadd.integra.focus();
					alert(memclassmanage_js_integra_empty);
					return false;
				}
			}
		}
		parent.windowsdig('Loading','iframe:index.php?archive=management&action=load','400px','180px','iframe',false);
	}
	function saveResponse(options){
		parent.closeifram();
		var tab=document.getElementById("classaddtab").value;
		if (options=='true'){
			if (tab=='true'){
				if(parent.frames[iframename].document.getElementById("selectform")){
					parent.frames[iframename].refresh('selectform','selectall','check_all');
				}
			}
			alert(memclassmanage_js_type_add_ok);
		}else{
			alert(memclassmanage_js_type_add_no);
		}
		var refalse = "<?php echo $this->_tpl_vars['refalse'] ?>";
		if (refalse!='1'){
			if (tab=='true'){
				parent.onaletdoc()
			}
		}else{
			window.location.reload();
		}
	}
</script>
</head>

<body>
<form name="classadd" id="classadd" method="post" action="index.php?archive=memclassmanage&action=classsave">
<input type="hidden" name="inputclass" value="add">
<input type="hidden" name="tab" id="classaddtab" value="<?php echo $this->_tpl_vars['tab'] ?>">
<div id="mainbodybottonauto" class="managebottonadd">
	<div class="maindobycontent">
		<div class="suggestion">
			<span class="sugicon"><span class="strong colorgorning2"><?php echo $this->_tpl_vars['ST']['position_title'] ?></span><span class="colorgorningage"><?php echo $this->_tpl_vars['ST']['memclassmanage_type_add_mess'] ?></span></span>
		</div>
		<div class="manageeditdiv">
			<div class="maneditcontent">
				<table class="formtable">
					<tr class="trstyle2">
						<td class="trtitle011"><?php echo $this->_tpl_vars['ST']['memclassmanage_type_add_rankname'] ?></td>
						<td class="trtitle02">
							<input type="text" name="rankname" size="30" maxlength="20" class="infoInput"/>
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['memclassmanage_type_add_rankname_mess'] ?></span>
						</td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['memclassmanage_type_add_integra'] ?></td>
						<td class="trtitle02">
							<input type="text" name="integra" size="10" maxlength="10" value="0" class="infoInput"/>
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['memclassmanage_type_add_integra_mess'] ?></span>
						</td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['memclassmanage_type_add_isinter'] ?></td>
						<td class="trtitle02">
							<input type="radio" value="1" name="isinter"/> <?php echo $this->_tpl_vars['ST']['open_botton_title'] ?>&nbsp;
							<input type="radio" value="0" name="isinter" checked="checked"/> <?php echo $this->_tpl_vars['ST']['close_botton_title'] ?>
							<span class="cautiontitle"><?php echo $this->_tpl_vars['ST']['memclassmanage_type_add_isinter_mess'] ?></span>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div id="downbotton">
	<div id="subbotton">
		<table border="0" width="100%">
			<tr>
				<td id="right"><input type="submit" name="Submit" value="<?php echo $this->_tpl_vars['ST']['botton_add'] ?>" class="button orange" /></td>
				<td id="left" class="padding-left5"><input type="button" name="cancel" onClick="javascript:parent.onaletdoc();" value="<?php echo $this->_tpl_vars['ST']['botton_add_reset'] ?>" class="button orange" /></td>
			</tr>
		</table>
	</div>
</div>
</form>
</body>

</html>