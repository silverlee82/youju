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

	var seconds = <?php echo $this->_tpl_vars['tiptime'] ?>;
	var defaultUrl = "<?php echo $this->_tpl_vars['linkURL'] ?>";
	onload = function() {
		if (defaultUrl == 'javascript:history.go(-1)' && window.history.length == 0) {
			document.getElementById('redirectionMsg').innerHTML = '';
			return;
		}
		window.setInterval(redirection, 1000);
	}
	function redirection() {
		if (seconds <= 0) {
			window.clearInterval();
			return;
		}
		seconds--;
		document.getElementById('spanSeconds').innerHTML = seconds;
		if (seconds == 0) {
			window.clearInterval();
			location.href = defaultUrl;
		}
	}
</script>
</head>

<body>
885BA145EFC8431D34F5CC06D142F143specialty/cn/public/head.html|885BA145EFC8431D34F5CC06D142F143
<?php if($this->_tpl_vars['type']['typepic']!=''){ ?>
<div class="espcms_page_bannpic"><img src="<?php echo $this->_tpl_vars['rootdir'] ?><?php echo $this->_tpl_vars['type']['typepic'] ?>" alt="<?php echo $this->_tpl_vars['type']['typename'] ?>"/></div>
<?php } ?>

<div class="espcms_page">
	<div class="espcms_member_login_center espcms_formwidth_c">
		<div class="title mb20"><div class="messageicon2"></div><div class="messtitle">信息提醒</div></div>
		<div class="espcms_form_group tc f14 oninage b"><?php echo $this->_tpl_vars['calltitle'] ?></div>
		<div class="espcms_form_group tc f14">您可以选择以下操作按钮，网站将在<span class="em" id="spanSeconds"><?php echo $this->_tpl_vars['tiptime'] ?></span>秒钟后返回默认地址！</div>

		<div class="espcms_form_group tc pt15">
			<?php if($this->_tpl_vars['backid'] > 0){ ?>
			<input class="button blue2" onclick="javascript:location.href = '<?php echo $this->_tpl_vars['backlinkURL'] ?>';" name="submit" type="submit" value="<?php echo $this->_tpl_vars['backBotton'] ?>" />
			<?php } ?>
			<input class="button blue2" onclick="javascript:location.href = '<?php echo $this->_tpl_vars['linkURL'] ?>';" name="submit" type="submit" value="<?php echo $this->_tpl_vars['bottonName'] ?>" />
		</div>
	</div>
</div>

885BA145EFC8431D34F5CC06D142F143specialty/cn/public/footer.html|885BA145EFC8431D34F5CC06D142F143
</body>
</html>
