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
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/menuthree.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/menuthree.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/treeviewcookie.js"></script>
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_three.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_public.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_v5div.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_page.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_content.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>index.php?ac=public&at=readpuv&did=<?php echo $this->_tpl_vars['read']['did'] ?>"></script>
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
		$("#three").treeview({collapsed: true, control: "#sidetreecontrol", prerendered: false, persist: "location"});
	});
</script>
</head>

<body>
885BA145EFC8431D34F5CC06D142F143specialty/cn/public/head.html|885BA145EFC8431D34F5CC06D142F143
<?php if($this->_tpl_vars['type']['typepic']!=''){ ?>
<div class="espcms_page_bannpic"><img src="<?php echo $this->_tpl_vars['rootdir'] ?><?php echo $this->_tpl_vars['type']['typepic'] ?>" alt="<?php echo $this->_tpl_vars['type']['typename'] ?>"/></div>
<?php } ?>

<div class="espcms_page espcms_page_left_linkbg">
	<div class="espcms_page_left">
		214adb21252b0af7b03s214s9typelist|utid:<?php echo $this->_tpl_vars['type']['topid'] ?>,tid:<?php echo $this->_tpl_vars['type']['tid'] ?>|||60af7b03s21fs
		<h2><?php echo $this->_tpl_vars['uptypeview']['typename'] ?></h2>
		<ul id="three" class="treeview">
			<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
			<li<?php if(count( $this->_tpl_vars['array'][$i]['childArray'] ) <= 0){ ?> class="onefast"<?php } ?>>
				<a href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>" <?php if($this->_tpl_vars['array'][$i]['selected']==1 ){ ?>class="hover"<?php } ?> title="<?php echo $this->_tpl_vars['array'][$i]['typename'] ?>"><?php echo $this->_tpl_vars['array'][$i]['typename'] ?></a>
				<?php if(count( $this->_tpl_vars['array'][$i]['childArray'] ) > 0 ){ ?>
				<ul>
					<?php if (count($this->_tpl_vars['array'][$i]['childArray'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['array'][$i]['childArray']); $ii++){?>
					<li class="treeone">
						<a href="<?php echo $this->_tpl_vars['array'][$i]['childArray'][$ii]['link'] ?>" <?php if($this->_tpl_vars['array'][$i]['childArray'][$ii]['selected']==1 ){ ?>class="hover"<?php } ?>  title="<?php echo $this->_tpl_vars['array'][$i]['childArray'][$ii]['typename'] ?>"><?php echo $this->_tpl_vars['array'][$i]['childArray'][$ii]['typename'] ?></a>
						<?php if(count( $this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'] ) > 0 ){ ?>
							<ul>
								<?php if (count($this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'])>0){$divid_iii=1;for($iii=0;$iii<count($this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray']); $iii++){?>
								<li class="treetow">
									<a href="<?php echo $this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['link'] ?>" <?php if($this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['selected']==1 ){ ?>class="hover"<?php } ?> title="<?php echo $this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['typename'] ?>"><?php echo $this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['typename'] ?></a>
									<?php if(count( $this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'] ) > 0 ){ ?>
										<ul>
											<?php if (count($this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'])>0){$divid_iiii=1;for($iiii=0;$iiii<count($this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['childArray']); $iiii++){?>
											<li class="treefour">
												<a href="<?php echo $this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['link'] ?>" <?php if($this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['selected']==1 ){ ?>class="hover"<?php } ?> title="<?php echo $this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['typename'] ?>"><?php echo $this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['typename'] ?></a>
												<?php if(count( $this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'] ) > 0 ){ ?>
													<ul>
														<?php if (count($this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'])>0){$divid_iiiii=1;for($iiiii=0;$iiiii<count($this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray']); $iiiii++){?>
														<li class="treefive"><a href="<?php echo $this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['link'] ?>" <?php if($this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['selected']==1 ){ ?>class="hover"<?php } ?> title="<?php echo $this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['typename'] ?>"><?php echo $this->_tpl_vars['array'][$i]['childArray'][$ii]['childArray'][$iii]['childArray'][$iiii]['childArray'][$iiiii]['typename'] ?></a></li>
														<?php }} ?>
													</ul>
												<?php } ?>
											</li>
											<?php }} ?>
										</ul>
									<?php } ?>
								</li>
								<?php }} ?>
							</ul>
						<?php } ?>
					</li>
					<?php }} ?>
				</ul>
				<?php } ?>
			</li>
			<?php }} ?>
		</ul>
		214adb21252b0af7b03s214s9

		885BA145EFC8431D34F5CC06D142F143specialty/cn/public/left.html|885BA145EFC8431D34F5CC06D142F143
	</div>
	<div class="espcms_page_right">
		<div class="espcms_page_typename"><?php echo $this->_tpl_vars['type']['typename'] ?></div>
		<div class="espcms_page_location">6623ef97c6f6ccf2fb032e800d2edda9path|type:type,id:<?php echo $this->_tpl_vars['type']['tid'] ?>||||6623ef97c6f6ccf2fb032e800d2edda9</div>
		<div class="espcms_page_right_line"></div>

		<div class="espcms_book f14 lh30 colorgorning"><?php echo $this->_tpl_vars['read']['content'] ?></div>
		<?php if(count($this->_tpl_vars['page'])>0 ){ ?>
		<div class="espcms_page_botton">
			<div id="pagination" class="pagination">
				<?php if($this->_tpl_vars['read']['plink']!=''){ ?>
				<span><a href="<?php echo $this->_tpl_vars['read']['plink'] ?>">上一页</a></span>
				<?php } ?>
				<?php if (count($this->_tpl_vars['page'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['page']); $i++){?>
				<?php if($this->_tpl_vars['page'][$i]['n']==1){ ?>
				<span class="current disabled"><?php echo $this->_tpl_vars['page'][$i]['num'] ?></span>
				<?php }else{ ?>
				<span><a href="<?php echo $this->_tpl_vars['page'][$i]['link'] ?>"><?php echo $this->_tpl_vars['page'][$i]['num'] ?></a></span>
				<?php } ?>
				<?php }} ?>
				<?php if($this->_tpl_vars['read']['nlink']!=''){ ?>
				<span><a href="<?php echo $this->_tpl_vars['read']['nlink'] ?>">下一页</a></span>
				<?php } ?>
			</div>
		</div>
		<?php } ?>
	</div>
</div>

885BA145EFC8431D34F5CC06D142F143specialty/cn/public/footer.html|885BA145EFC8431D34F5CC06D142F143
</body>
</html>