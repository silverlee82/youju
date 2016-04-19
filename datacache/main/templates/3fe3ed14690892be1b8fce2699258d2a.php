<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $this->_tpl_vars['lngpack']['sitename'] ?></title>
<meta name="keywords" content="<?php echo $this->_tpl_vars['lngpack']['keyword'] ?>" />
<meta name="description" content="<?php echo $this->_tpl_vars['lngpack']['description'] ?>" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/basicrun.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/jquery.Slide.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/ajax_city.js"></script>
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_v5div.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_public.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_page.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
	$(window).load(function() {
		$("#clickmenubotton li span").hover(function() {
			$(this).addClass("menuhover");
			$(this).parent().find("ul.subnav").slideDown('fast').show();
			$(this).parent().hover(function() {
			}, function() {
				$(this).parent().find("ul.subnav").fadeOut('fast');
				$(this).parent().find("span").removeClass("menuhover");
			});
		});
	});
</script>
</head>

<body>
885BA145EFC8431D34F5CC06D142F143specialty/cn/public/head.html|885BA145EFC8431D34F5CC06D142F143
<div class="espcms_page_bannpic"><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/bann/type_pic.jpg"/></div>
<div class="espcms_page">
	<?php if($this->_tpl_vars['out']=='list'){ ?>
	<!--询盘列表-->
	<script type="text/javascript">
	var order_amout_err = "<?php echo $this->_tpl_vars['lngpack']['order_amout_err'] ?>";
	<?php if($this->_tpl_vars['mem_isaddress']==1){ ?>
	$(function() {
	sec_cityone('<?php echo $this->_tpl_vars['member']['country'] ?>','<?php echo $this->_tpl_vars['member']['province'] ?>');
	sec_citytwo('<?php echo $this->_tpl_vars['member']['province'] ?>','<?php echo $this->_tpl_vars['member']['city'] ?>');
	sec_district('<?php echo $this->_tpl_vars['member']['city'] ?>','<?php echo $this->_tpl_vars['member']['district'] ?>');
	});
	<?php } ?>
	var citytwo_title = "省";
	var citythree_title = "市";
	var district_title = "区";
	var address_title = "<?php echo $this->_tpl_vars['lngpack']['address_title'] ?>";
	var alias_empty = "<?php echo $this->_tpl_vars['lngpack']['alias_empty'] ?>";
	var email_err = "<?php echo $this->_tpl_vars['lngpack']['email_err'] ?>";
	var tel_empty = "<?php echo $this->_tpl_vars['lngpack']['tel_empty'] ?>";
	</script>
	<div class="espcms_member_login_center espcms_formwidth_c">
		<?php if(count($this->_tpl_vars['array']) > 0 ){ ?>
		<div class="title mb10"><div class="messageicon4"></div><div class="messtitle">询价产品清单</div></div>
		<form name="mainform" method="post" action="<?php echo $this->_tpl_vars['mlink']['enquirysave'] ?>" onsubmit="return enquirysave()">
		<input type="hidden" name="userid" value="<?php echo $this->_tpl_vars['member']['userid'] ?>"/>
		<input type="hidden" name="tokenkey" value="<?php echo $this->_tpl_vars['tokenkey']['token_key'] ?>"/>
			<table class="tablelist" width="99%" style="margin:0 auto;">
				<tr>
					<td class="td01">产品名</td>
					<td class="td01">图片</td>
					<td class="td01">商品编号</td>
					<td class="td01">订购数量</td>
					<td class="td01">操作</td>
				</tr>
				<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
				<tr>
					<td class="td02"><input type="hidden" name="ptitle[]" value="<?php echo $this->_tpl_vars['array'][$i]['title'] ?>"><a target="_blank" class="infolink01" href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>"><?php echo $this->_tpl_vars['array'][$i]['title'] ?></a></td>
					<td class="td02"><img src="<?php echo $this->zoom($this->_tpl_vars['array'][$i]['pic'],90,90) ?>"/></td>
					<td class="td02"><input type="hidden" name="tsn[]" value="<?php echo $this->_tpl_vars['array'][$i]['tsn'] ?>"/><?php echo $this->_tpl_vars['array'][$i]['tsn'] ?></td>
					<td class="td02">
						<input type="text" name="amount[]" id="amount<?php echo $this->_tpl_vars['array'][$i]['did'] ?>" value="<?php echo $this->_tpl_vars['array'][$i]['amount'] ?>" onBlur="javascript:orderamount(<?php echo $this->_tpl_vars['array'][$i]['did'] ?>);" size="2" maxlength="5" class="infoInput"/>
						<input type="hidden" name="did[]" value="<?php echo $this->_tpl_vars['array'][$i]['did'] ?>"/>
					</td>
					<td class="td02"><a class="infolink04" href="javascript:if (confirm('您确定要从询价列表中删除该商品吗？')) location.href='<?php echo $this->_tpl_vars['array'][$i]['dellink'] ?>';">删除询价</a></td>
				</tr>
				<?php }} ?>
				<tr>
					<td colspan="6" class="td03">
						<input name="addch" class="button orange" type="button" value="继续选择商品" onclick="javascript:location.href='<?php echo $this->_tpl_vars['homelink'] ?>';">
						<input name="addch" class="button" type="button" value="清空询价表" onclick="javascript:if (confirm('您确定要清空所询价的商品吗？')) location.href='<?php echo $this->_tpl_vars['mlink']['cleargoods'] ?>';">
					</td>
				</tr>
			</table>


			<div class="title mb20 mt20"><div class="messageicon4"></div><div class="messtitle">填写联系信息</div></div>
			<div class="espcms_form_group">
				<label for="title" class="control_label16">联系人姓名</label>
				<div class="control_required20">
					<input type="text" name="linkman" value="<?php echo $this->_tpl_vars['member']['alias'] ?>" class="col4 infoInput" size="20" maxlength="50"/>
					<span class="form_message">请输入您的真实姓名</span>
				</div>
			</div>
			<div class="espcms_form_group">
				<label for="title" class="control_label16">性别</label>
				<div class="control_required20 f14">
					<input type="radio" value="1" name="sex" <?php if($this->_tpl_vars['member']['sex']==1){ ?>checked<?php } ?> /> 男&nbsp;
					<input type="radio" value="0" name="sex" <?php if($this->_tpl_vars['member']['sex']==0){ ?>checked<?php } ?> /> 女
				</div>
			</div>
			<div class="espcms_form_group">
				<label for="title" class="control_label16">电子邮件</label>
				<div class="control_required20 f14"><input type="text" name="email" value="<?php echo $this->_tpl_vars['member']['email'] ?>" maxlength="100" size="50" class="col5 infoInput" /> <span class="form_message">请输入您的真实邮箱</span></div>
			</div>
			<div class="espcms_form_group">
				<label for="title" class="control_label16">联系电话</label>
				<div class="control_required20 f14"><input type="text" name="tel" value="<?php echo $this->_tpl_vars['member']['tel'] ?>" maxlength="50" size="50" class="col4 infoInput" /> <span class="form_message">请填写联系电话或者手机</span></div>
			</div>
			<div class="espcms_form_group">
				<label for="title" class="control_label16">手机</label>
				<div class="control_required20 f14"><input type="text" name="mobile" value="<?php echo $this->_tpl_vars['member']['mobile'] ?>" maxlength="50" size="50" class="col4 infoInput" /> </div>
			</div>
			<div class="espcms_form_group">
				<label for="title" class="control_label16">传真</label>
				<div class="control_required20 f14"><input type="text" name="fax" value="<?php echo $this->_tpl_vars['member']['fax'] ?>" maxlength="50" size="50" class="col4 infoInput" /> </div>
			</div>
			<?php if($this->_tpl_vars['mem_isaddress']==1){ ?>
			<div class="espcms_form_group">
				<label for="title" class="control_label16">地区</label>
				<div class="control_required20 f14">
					<select size="1" name="cityone" class="infoInput" id="cityone">
						<option value="0" <?php if($this->_tpl_vars['member']['country']==0){ ?>selected<?php } ?>>国家</option>
						<option value="1" <?php if($this->_tpl_vars['member']['country']==1){ ?>selected<?php } ?>>中国</option>
					</select>
					<select size="1" name="citytwo" class="infoInput" id="citytwo">
						<option selected value="0">省</option>
					</select>
					<select size="1" name="citythree" class="infoInput" id="citythree">
						<option selected value="0">市</option>
					</select>
					<select size="1" name="district" class="infoInput" id="district">
						<option selected value="0">区</option>
					</select>
					<span id="loading">正在读取</span>
				</div>
			</div>
			<?php } ?>
			<div class="espcms_form_group">
				<label for="title" class="control_label16">详细地址</label>
				<div class="control_required20 f14"><input type="text" name="address" value="<?php echo $this->_tpl_vars['member']['address'] ?>" maxlength="200" size="80" class="col6 infoInput" /> <span class="form_message">请输入真实的收件地址</span></div>
			</div>
			<div class="espcms_form_group">
				<label for="title" class="control_label16">邮编</label>
				<div class="control_required20 f14"><input type="text" name="zipcode" value="<?php echo $this->_tpl_vars['member']['zipcode'] ?>" maxlength="10" size="10" class="col3 infoInput" /></div>
			</div>
			<div class="espcms_form_group">
				<label for="title" class="control_label16">备注</label>
				<div class="control_required20 f14"><textarea name="content" rows="5" cols="60" class="col10 infoInput"></textarea></div>
			</div>
			<div class="espcms_form_group">
				<label class="control_label16"> </label>
				<div class="control_required20">
					<input type="submit" id="submit" class="button blue2" value="确认提交询价"/>
				</div>
			</div>
		</form>
		<?php }else{ ?>
		<div class="title mb10"><div class="messageicon2"></div><div class="messtitle">询盘提示</div></div>
		<div class="espcms_form_group tc f14 pt15">您还没有选择询价商品</div>
		<?php } ?>
	</div>

	<?php } ?>
</div>
885BA145EFC8431D34F5CC06D142F143specialty/cn/public/footer.html|885BA145EFC8431D34F5CC06D142F143
</body>
</html>
