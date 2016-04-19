<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $this->_tpl_vars['lngpack']['sitename'] ?></title>
<meta name="keywords" content="<?php echo $this->_tpl_vars['lngpack']['keyword'] ?>" />
<meta name="description" content="<?php echo $this->_tpl_vars['lngpack']['description'] ?>" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/jquery.Slide.js"></script>
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_public.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_v5div.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/slider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>index.php?ac=scriptout&at=waplink"></script>
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
<div class="espcms_slide">
	<div class="bd">
		214adb21252b0af7b03s214s9bann|atid:1,adtype:1,max:3|||60af7b03s21fs
		<ul>
			<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
			<li _src="url(<?php echo $this->_tpl_vars['rootdir'] ?><?php echo $this->_tpl_vars['array'][$i]['filename'] ?>)" style="background:#eafaff center 0 no-repeat;"><a alt="<?php echo $this->_tpl_vars['array'][$i]['title'] ?>" target="_blank" href="<?php echo $this->_tpl_vars['array'][$i]['url'] ?>"></a></li>
			<?php }} ?>
		</ul>
		214adb21252b0af7b03s214s9
	</div>
	<div class="hd"><ul></ul></div>
</div>
<script type="text/javascript">
	jQuery(".espcms_slide").slide({titCell: ".hd ul", mainCell: ".bd ul", effect: "fold", autoPlay: true, autoPage: true, trigger: "mouseover",
		startFun: function(i) {
			var curLi = jQuery(".espcms_slide .bd li").eq(i);
			if (!!curLi.attr("_src")) {

				curLi.css("background-image", curLi.attr("_src")).removeAttr("_src");
			}
		}
	});
</script>
<div class="espcms_page pt15">
	

	
</div>

<div class="espcms_page_border">
	<ul class="unstyled">
		214adb21252b0af7b03s214s9bann|atid:4,adtype:1,max:10|||60af7b03s21fs
		<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
		<li><a title="<?php echo $this->_tpl_vars['array'][$i]['title'] ?>" target="_blank" href="<?php echo $this->_tpl_vars['array'][$i]['url'] ?>"><img alt="<?php echo $this->_tpl_vars['array'][$i]['title'] ?>" border="0" src="<?php echo $this->_tpl_vars['rootdir'] ?><?php echo $this->_tpl_vars['array'][$i]['filename'] ?>"></a></li>
		<?php }} ?>
		214adb21252b0af7b03s214s9
	</ul>

	<ul class="unstyled">
		214adb21252b0af7b03s214s9bann|atid:3,adtype:3,max:20|||60af7b03s21fs
		<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
		<li class="font"><a title="<?php echo $this->_tpl_vars['array'][$i]['title'] ?>" target="_blank" href="<?php echo $this->_tpl_vars['array'][$i]['url'] ?>"><?php echo $this->_tpl_vars['array'][$i]['title'] ?></a></li>
		<?php }} ?>
		214adb21252b0af7b03s214s9
	</ul>
</div>


885BA145EFC8431D34F5CC06D142F143specialty/cn/public/footer.html|885BA145EFC8431D34F5CC06D142F143
</body>
</html>
