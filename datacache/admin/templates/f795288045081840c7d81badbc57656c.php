<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['softtitle'] ?></title>
<link href="templates/css/baselist.css" rel="stylesheet" type="text/css" />
<link href="templates/css/all.css" rel="stylesheet" type="text/css" />
<link href="templates/css/formdiv.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/control.js"></script>
<script type="text/javascript" src="js/cityselect.js"></script>
<script type="text/javascript" language="JavaScript">
	var membermain_search_js_searchkey_err  = "<?php echo $this->_tpl_vars['ST']['membermain_search_js_searchkey_err'] ?>";
	var iframename = "<?php echo $this->_tpl_vars['iframename'] ?>";
	var digheight="<?php echo $this->_tpl_vars['digheight'] ?>";
	$(document).ready(function(){
		var h = $(window).height();
		if(document.getElementById("mainbodybottonauto")){
			$('.managebottonadd').css({height:h-40});
		}
		var options = {
			beforeSubmit: formverify,
			success:function(){
				return false;
			}
		}
		$('#membersearch').submit(function() {
			$(this).ajaxSubmit(options);
			return false;
		});
	})
	function formverify(formData, jqForm, options) {
		var queryString = $.param(formData);
		var get=urlarray(queryString);
		if(get['searchkey']!=""){
			if(get['searchkey'].match(/[\'\"\<\>\,\;\^\$\(\)\!\.]+/ig)!=null) {
				document.membersearch.searchkey.focus();
				alert(membermain_search_js_searchkey_err);
				return false;
			}
		}
		var esarchurl="index.php?archive=membermain&action=memberlist&mcid="+get['mcid']+"&country="+get['cityone']+"&province="+get['citytwo']+"&city="+get['citythree']
			+"&district="+get['district']+"&isclass="+get['isclass']+"&limitkey=&limitclass=&keyname="+get['keyname']+"&serchekey="+encodeURI(get['searchkey']);
		parent.frames[iframename].search(esarchurl)
		parent.closeifram();
		return false;
	}
</script>
</head>

<body style="background-color: #FFFFFF">
<form name="membersearch" id="membersearch" method="post" action="#body">
<div id="mainbodybottonauto" class="managebottonadd">
	<div class="maindobycontent">
		<div class="suggestion">
			<span class="sugicon"><span class="strong colorgorning2"><?php echo $this->_tpl_vars['ST']['position_title'] ?></span><span class="padding-left5 colorgorningage"><?php echo $this->_tpl_vars['ST']['membermain_search_title'] ?></span></span>
		</div>
		<div class="manageeditdiv">
			<div class="maneditcontent">
				<table class="formtablewin">
					<tr class="trstyle2">
						<td width="20%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_search_keyword'] ?></td>
						<td width="80%" class="trtitle02"><input type="text" name="searchkey" size="30" maxlength="30" class="infoInput"/></td>
					</tr>
					<tr class="trstyle2">
						<td width="20%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_search_keyword_type'] ?></td>
						<td width="80%" class="trtitle02">
							<select size="1" name="keyname" class="select" id="keyname">
								<option selected value="username"><?php echo $this->_tpl_vars['ST']['membermain_search_keyword_type1'] ?></option>
								<option value="email"><?php echo $this->_tpl_vars['ST']['membermain_search_keyword_type2'] ?></option>
							</select>
						</td>
					</tr>
					<tr class="trstyle2">
						<td width="20%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_search_mcid'] ?></td>
						<td width="80%" class="trtitle02">
							<select size="1" name="mcid">
								<option value="0"><?php echo $this->_tpl_vars['ST']['membermain_search_all'] ?></option>
								<?php if (count($this->_tpl_vars['memberpuvlist'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['memberpuvlist']); $list++){?>
								<option value="<?php echo $this->_tpl_vars['memberpuvlist'][$list]['mcid'] ?>"><?php echo $this->_tpl_vars['memberpuvlist'][$list]['rankname'] ?></option>
								<?php }} ?>
							</select>
						</td>
					</tr>
					<tr class="trstyle2">
						<td class="trtitle01"><?php echo $this->_tpl_vars['ST']['membermain_add_country'] ?></td>
						<td class="trtitle02">
							<select size="1" name="cityone" class="select" id="cityone">
								<option selected value="0"><?php echo $this->_tpl_vars['ST']['membermain_add_country_option'] ?></option>
								<option value="1"><?php echo $this->_tpl_vars['ST']['membermain_add_country_value'] ?></option>
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
					<tr class="trstyle2">
						<td width="20%" class="trtitle01"><?php echo $this->_tpl_vars['ST']['lock_botton'] ?></td>
						<td width="80%" class="trtitle02">
							<input type="radio" value="0" name="isclass" checked="checked"/> <?php echo $this->_tpl_vars['ST']['all_botton'] ?>&nbsp;
							<input type="radio" value="1" name="isclass"/> <?php echo $this->_tpl_vars['ST']['infook_botton'] ?>&nbsp;
							<input type="radio" value="2" name="isclass"/> <?php echo $this->_tpl_vars['ST']['lockok_botton'] ?>
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
			<tr id="bottonsubmit">
				<td id="right"><input type="submit" name="Submit" id="submitbotton" value="<?php echo $this->_tpl_vars['ST']['botton_search'] ?>" class="button orange" title="<?php echo $this->_tpl_vars['ST']['botton_search'] ?>"/></td>
				<td id="left" class="padding-left5"><input type="reset" name="reset" onClick="javascript:parent.closeifram();" id="release" value="<?php echo $this->_tpl_vars['ST']['botton_search_reset'] ?>" class="button orange"  title="<?php echo $this->_tpl_vars['ST']['botton_search_reset'] ?>" /></td>
			</tr>
		</table>
	</div>
</div>
</form>
</body>
</html>