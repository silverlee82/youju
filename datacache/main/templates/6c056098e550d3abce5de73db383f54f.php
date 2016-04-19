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
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/treeviewcookie.js"></script>
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_three.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_public.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_v5div.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['rootpath'] ?>css/espcms_page.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">
var seccode_empty = "<?php echo $this->_tpl_vars['lngpack']['seescodeerr'] ?>";
function <?php echo $this->_tpl_vars['form']['formcode'] ?>form(seccodetype) {
	<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
		<?php if($this->_tpl_vars['array'][$i]['isvalidate']==1){ ?>
			<?php if($this->_tpl_vars['array'][$i]['validatetext']!=''){ ?>
				if(document.<?php echo $this->_tpl_vars['form']['formcode'] ?>.<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>.value.match(<?php echo $this->_tpl_vars['array'][$i]['validatetext'] ?>ig)==null) {
			<?php }else{ ?>
				if(document.<?php echo $this->_tpl_vars['form']['formcode'] ?>.<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>.value==''){
			<?php } ?>
			document.<?php echo $this->_tpl_vars['form']['formcode'] ?>.<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>.focus();
			alert('<?php echo $this->_tpl_vars['array'][$i]['typename'] ?>输入错误，请返回重新输入');
			return false;
		}
		<?php } ?>
	<?php }} ?>

	if(seccodetype=='1' && document.<?php echo $this->_tpl_vars['form']['formcode'] ?>.seccode.value.match(/^[A-Z]{4}$/ig)==null) {
		document.<?php echo $this->_tpl_vars['form']['formcode'] ?>.seccode.focus();
		alert(seccode_empty);
		return false;
	}
}
</script>
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
<?php if($this->_tpl_vars['form']['pic']!=''){ ?>
<div class="espcms_page_bannpic"><img src="<?php echo $this->_tpl_vars['rootdir'] ?><?php echo $this->_tpl_vars['form']['pic'] ?>" alt="<?php echo $this->_tpl_vars['form']['formgroupname'] ?>"/></div>
<?php } ?>

<div class="espcms_page espcms_page_left_linkbg">
	<div class="espcms_page_left">
		214adb21252b0af7b03s214s9typelist|utid:3|||60af7b03s21fs
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
	</div>
	<div class="espcms_page_right">
		<div class="espcms_page_typename"><?php echo $this->_tpl_vars['form']['formgroupname'] ?></div>
		<div class="espcms_page_location">您现在的位置：<a href="<?php echo $this->_tpl_vars['homelink'] ?>">首页</a> » <b><?php echo $this->_tpl_vars['form']['formgroupname'] ?></b></div>
		<div class="espcms_page_right_line"></div>

		<div class="espcms_book">
			<form name="<?php echo $this->_tpl_vars['form']['formcode'] ?>" id="<?php echo $this->_tpl_vars['form']['formcode'] ?>" method="post" action="<?php echo $this->_tpl_vars['form']['action'] ?>"  onSubmit="return <?php echo $this->_tpl_vars['form']['formcode'] ?>form('<?php echo $this->_tpl_vars['form']['isseccode'] ?>')">
			<input type="hidden" name="tokenkey" value="<?php echo $this->_tpl_vars['tokenkey']['token_key'] ?>"/>
			<input type="hidden" name="linkurl" value="add"/>
			<input type="hidden" name="fgid" id="fgid" value="<?php echo $this->_tpl_vars['form']['fgid'] ?>"/>
			<input type="hidden" name="formcode" id="formcode" value="<?php echo $this->_tpl_vars['form']['formcode'] ?>"/>
				<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
				<div class="espcms_form_group">
					<label for="username" class="control_label"><?php if($this->_tpl_vars['array'][$i]['isvalidate']==1){ ?>* <?php } ?><?php echo $this->_tpl_vars['array'][$i]['typename'] ?></label>
					<div class="control_required">
						<?php if($this->_tpl_vars['array'][$i]['inputtype']=='string' || $this->_tpl_vars['array'][$i]['inputtype']=='int' || $this->_tpl_vars['array'][$i]['inputtype']=='float' || $this->_tpl_vars['array'][$i]['inputtype']=='decimal'){ ?><input type="text" name="<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>" size="<?php echo $this->_tpl_vars['array'][$i]['attrsize'] ?>" maxlength="<?php echo $this->_tpl_vars['array'][$i]['attrlenther'] ?>" value="<?php echo $this->_tpl_vars['array'][$i]['attrvalue'] ?>" class="infoInput"/><?php } ?>
						<?php if($this->_tpl_vars['array'][$i]['inputtype']=='datetime'){ ?>
							 <input type="text" name="<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>" size="<?php echo $this->_tpl_vars['array'][$i]['attrsize'] ?>" id="<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>" onclick="WdatePicker({el:'<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>',readOnly:true,dateFmt:'yyyy-MM-dd HH:mm:ss'})" maxlength="<?php echo $this->_tpl_vars['array'][$i]['attrlenther'] ?>" class="infoInput"/>
						<?php } ?>
						<?php if($this->_tpl_vars['array'][$i]['inputtype']=='selectinput'){ ?>
						<input type="text" name="<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>" size="<?php echo $this->_tpl_vars['array'][$i]['attrsize'] ?>" id="<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>" value="" maxlength="<?php echo $this->_tpl_vars['array'][$i]['attrlenther'] ?>" class="infoInput"/>
						<select size="1" name="<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>selectinputvalue" onchange="javascript:$('#<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>').val(this.value)">
							<option value=""><?php echo $this->_tpl_vars['array'][$i]['typename'] ?></option>
							<?php if (count($this->_tpl_vars['array'][$i]['selectinputvalue'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['array'][$i]['selectinputvalue']); $ii++){?>
							<option value="<?php echo $this->_tpl_vars['array'][$i]['selectinputvalue'][$ii]['name'] ?>"><?php echo $this->_tpl_vars['array'][$i]['selectinputvalue'][$ii]['name'] ?></option>
							<?php }} ?>
						</select>
						<?php } ?>
						<?php if($this->_tpl_vars['array'][$i]['inputtype']=='img'){ ?>
							<input type="text" name="<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>" size="<?php echo $this->_tpl_vars['array'][$i]['attrsize'] ?>" value="<?php echo $this->_tpl_vars['array'][$i]['attrvalue'] ?>" class="infoInput"/>
						<?php } ?>
						<?php if($this->_tpl_vars['array'][$i]['inputtype']=='addon'){ ?>
							<input type="text" name="<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>" size="<?php echo $this->_tpl_vars['array'][$i]['attrsize'] ?>" value="<?php echo $this->_tpl_vars['array'][$i]['attrvalue'] ?>" class="infoInput"/>
						<?php } ?>
						<?php if($this->_tpl_vars['array'][$i]['inputtype']=='text'){ ?><textarea name="<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>" cols="<?php echo $this->_tpl_vars['array'][$i]['attrsize'] ?>" rows="<?php echo $this->_tpl_vars['array'][$i]['attrrow'] ?>"  class="col11 infoInput"><?php echo $this->_tpl_vars['array'][$i]['attrvalue'] ?></textarea><?php } ?>
						<?php if($this->_tpl_vars['array'][$i]['inputtype']=='htmltext'){ ?><textarea name="<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>" cols="<?php echo $this->_tpl_vars['array'][$i]['attrsize'] ?>" rows="<?php echo $this->_tpl_vars['array'][$i]['attrrow'] ?>"  class="col11 infoInput"><?php echo $this->_tpl_vars['array'][$i]['attrvalue'] ?></textarea><?php } ?>
						<?php if($this->_tpl_vars['array'][$i]['inputtype']=='editor'){ ?><textarea name="<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>" cols="<?php echo $this->_tpl_vars['array'][$i]['attrsize'] ?>" rows="<?php echo $this->_tpl_vars['array'][$i]['attrrow'] ?>"  class="col11 infoInput"><?php echo $this->_tpl_vars['array'][$i]['attrvalue'] ?></textarea><?php } ?>
						<?php if($this->_tpl_vars['array'][$i]['inputtype']=='select'){ ?>
							<select size="1" name="<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>">
							<?php if (count($this->_tpl_vars['array'][$i]['attrvalue'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['array'][$i]['attrvalue']); $ii++){?>
								<option <?php if($this->_tpl_vars['array'][$i]['attrvalue'][$ii]['selected']=='selected'){ ?>selected="selected" <?php } ?>value="<?php echo $this->_tpl_vars['array'][$i]['attrvalue'][$ii]['name'] ?>"><?php echo $this->_tpl_vars['array'][$i]['attrvalue'][$ii]['name'] ?></option>
							<?php }} ?>
							</select>
						<?php } ?>
						<?php if($this->_tpl_vars['array'][$i]['inputtype']=='radio'){ ?>
							<?php if (count($this->_tpl_vars['array'][$i]['attrvalue'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['array'][$i]['attrvalue']); $ii++){?>
								<input <?php if($this->_tpl_vars['array'][$i]['attrvalue'][$ii]['selected']=='selected'){ ?>checked="checked" <?php } ?>name="<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>" type="radio" value="<?php echo $this->_tpl_vars['array'][$i]['attrvalue'][$ii]['name'] ?>" /> <?php echo $this->_tpl_vars['array'][$i]['attrvalue'][$ii]['name'] ?>
							<?php }} ?>
						<?php } ?>
						<?php if($this->_tpl_vars['array'][$i]['inputtype']=='checkbox'){ ?>
							<?php if (count($this->_tpl_vars['array'][$i]['attrvalue'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['array'][$i]['attrvalue']); $ii++){?>
								<input <?php if($this->_tpl_vars['array'][$i]['attrvalue'][$ii]['selected']=='selected'){ ?>checked="checked" <?php } ?>name="<?php echo $this->_tpl_vars['array'][$i]['attrname'] ?>[]" type="checkbox" value="<?php echo $this->_tpl_vars['array'][$i]['attrvalue'][$ii]['name'] ?>" /> <?php echo $this->_tpl_vars['array'][$i]['attrvalue'][$ii]['name'] ?>
							<?php }} ?>
						<?php } ?>
						<?php if($this->_tpl_vars['array'][$i]['typeremark']!=''){ ?><span class="form_message"><?php echo $this->_tpl_vars['array'][$i]['typeremark'] ?></span><?php } ?>
					</div>
				</div>
				<?php }} ?>
				<?php if($this->_tpl_vars['form']['isseccode']==1){ ?>
				<div class="espcms_form_group">
					<label for="username" class="control_label">验证码</label>
					<div class="control_required">
						<input type="text" id="seccode" name="seccode" class=" infoInput" maxlength="4" size="5" style="text-transform: uppercase;"/>
						<img title="点击更换验证码" id="<?php echo $this->_tpl_vars['form']['formcode'] ?>seccodesrc" onclick="sessionimg('<?php echo $this->_tpl_vars['form']['formcode'] ?>seccodesrc','<?php echo $this->_tpl_vars['rootdir'] ?>')" src="<?php echo $this->_tpl_vars['seccodelink'] ?>" style="cursor: pointer;height:28px;margin-left:5px;" align="absmiddle"/>
					</div>
				</div>
				<?php } ?>
				<div class="espcms_form_group">
					<label class="control_label"> </label>
					<div class="control_required"><input type="submit" id="<?php echo $this->_tpl_vars['form']['formcode'] ?>botton" class="button blue2" value="确认提交"> </div>
				</div>
			</form>
		</div>
	</div>
</div>

885BA145EFC8431D34F5CC06D142F143specialty/cn/public/footer.html|885BA145EFC8431D34F5CC06D142F143
</body>
</html>
