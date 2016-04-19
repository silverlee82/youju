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
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_public.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_v5div.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_page.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
	var loing_input_err = "<?php echo $this->_tpl_vars['lngpack']['loing_input_err'] ?>";
	var seccode_empty = "<?php echo $this->_tpl_vars['lngpack']['seescodeerr'] ?>";
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
	<form name="mainform" method="post" action="<?php echo $this->_tpl_vars['mlink']['logindb'] ?>" onSubmit="return memberlogin('<?php echo $this->_tpl_vars['mem_isseccode'] ?>')">
	<input type="hidden" name="tokenkey" value="<?php echo $this->_tpl_vars['tokenkey']['token_key'] ?>"/>
	<div class="espcms_member_login_center espcms_formwidth_a">
		<div class="title mb20"><div class="messageicon"></div><div class="messtitle">会员登陆</div></div>
		<div class="espcms_form_group">
			<label for="title" class="control_label16">用户名</label>
			<div class="control_required20">
				<input type="text" name="username" id="username" class="col7 infoInput"/>
			</div>
		</div>
		<div class="espcms_form_group">
			<label for="username" class="control_label16">密码</label>
			<div class="control_required20"><input type="password" name="password" id="password" class="col7 infoInput"/></div>
		</div>
		<?php if($this->_tpl_vars['mem_isseccode']==1){ ?>
		<div class="espcms_form_group">
			<label for="email" class="control_label16">验证码</label>
			<div class="control_required20">
				<input type="text" id="seccode" name="seccode" class="infoInput" maxlength="4" size="5" style="text-transform: uppercase;"/>
				<img title="点击更换验证码" id="memberseccodesrc" onclick="sessionimg('memberseccodesrc','<?php echo $this->_tpl_vars['rootdir'] ?>')" src="<?php echo $this->_tpl_vars['seccodelink'] ?>" style="cursor: pointer;height:28px;margin-left:5px;" align="absmiddle"/>
			</div>
		</div>
		<?php } ?>
		<div class="espcms_form_group">
			<label class="control_label16"> </label>
			<div class="control_required20">
				<input type="submit" id="submit" class="button blue2" value="登陆"/>
				<a class="button red" href="<?php echo $this->_tpl_vars['mlink']['reg'] ?>">注册</a>
				<a class="button blue2" href="<?php echo $this->_tpl_vars['mlink']['lostpasswd'] ?>">找回密码</a>
			</div>
		</div>
	</div>
	</form>
</div>

885BA145EFC8431D34F5CC06D142F143specialty/cn/public/footer.html|885BA145EFC8431D34F5CC06D142F143
</body>
</html>
