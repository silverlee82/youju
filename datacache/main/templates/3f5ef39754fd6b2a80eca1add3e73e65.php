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
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootdir'] ?>js/My97DatePicker/WdatePicker.js"></script>
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
</script>
</head>

<body>
885BA145EFC8431D34F5CC06D142F143specialty/cn/public/head.html|885BA145EFC8431D34F5CC06D142F143
<div class="espcms_page_bannpic"><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/bann/type_pic.jpg"/></div>

<div class="espcms_page espcms_page_left_linkbg">
	<div class="espcms_page_left">
		6623ef97c6f6ccf2fb032e800d2edda9memmenu|||||6623ef97c6f6ccf2fb032e800d2edda9
	</div>
	<div class="espcms_page_right">
		<?php if($this->_tpl_vars['out']=='center'){ ?>
		<div class="espcms_page_typename">欢迎您成功登陆</div>
		<div class="espcms_page_location">您现在的位置：<a href="<?php echo $this->_tpl_vars['homelink'] ?>">首页</a> » <b><?php echo $this->_tpl_vars['lngpack']['member_title'] ?></b></div>
		<div class="espcms_page_right_line"></div>

		<div class="espcms_book_paddingbottom0 pt10">
			<div class="espcms_bbs_form">
				<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
				<div class="title"><div class="messageicon2"></div><div class="messtitle"><?php echo $this->_tpl_vars['member']['username'] ?></div>欢迎您登陆会员中心</div>
				<div class="content">
					<div class="espcms_form_group">
						<label for="username" class="control_label16">您上次登陆的时间为</label>
						<div class="control_required20 f14"><?php echo $this->timeformat($this->_tpl_vars['member']['lasttime'],3) ?></div>
					</div>
					<div class="espcms_form_group">
						<label for="username" class="control_label16">您上次登陆的IP为</label>
						<div class="control_required20 f14"><?php echo $this->ip($this->_tpl_vars['member']['lastip'],0) ?></div>
					</div>
					<div class="espcms_form_group">
						<label for="username" class="control_label16">您的会员等级为</label>
						<div class="control_required20 f14"><?php echo $this->_tpl_vars['member']['rankname'] ?></div>
					</div>
					<div class="espcms_form_group">
						<label for="username" class="control_label16">您的会员积分为</label>
						<div class="control_required20 f14"><?php echo $this->_tpl_vars['member']['integral'] ?></div>
					</div>
					<div class="espcms_form_group">
						<label for="username" class="control_label16">您的登陆次数为</label>
						<div class="control_required20 f14"><?php echo $this->_tpl_vars['member']['visitcount'] ?>次</div>
					</div>
				</div>
				<b class="b5"></b><b class="b6"></b><b class="b7"></b><b class="b8"></b>
			</div>
		</div>

		<div class="espcms_book_paddingbottom0 pt10">
			<div class="espcms_bbs_form">
				<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
				<div class="title"><div class="messageicon3"></div><div class="messtitle">订单中心提示</div></div>
				<div class="content tc">
					您在本站共提交了 <u><?php echo $this->_tpl_vars['ordernum'] ?></u> 个订单 <span class="colorgreg pl5">您有 <u><?php echo $this->_tpl_vars['ordernum3'] ?></u> 个订单已发货</span> <span class="pl5"><a class="button" href="<?php echo $this->_tpl_vars['mlink']['orderlist'] ?>">点击查看订单列表</a></span>
				</div>
				<b class="b5"></b><b class="b6"></b><b class="b7"></b><b class="b8"></b>
			</div>
		</div>
		<?php if($this->_tpl_vars['bbsapp']==1){ ?>
		<div class="espcms_book_paddingbottom0 pt10">
			<div class="espcms_bbs_form">
				<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
				<div class="title"><div class="messageicon"></div><div class="messtitle">最新留言信息</div></div>
				<div class="content tc">
					您在本站共提交了 <u><?php echo $this->_tpl_vars['messagenum'] ?></u> 次留言 <span class="pl5"><a class="button" href="<?php echo $this->_tpl_vars['mlink']['forumlist'] ?>">点击查看留言列表</a></span>
				</div>
				<b class="b5"></b><b class="b6"></b><b class="b7"></b><b class="b8"></b>
			</div>
		</div>
		<?php } ?>
		<?php } elseif($this->_tpl_vars['out']=='editinfo'){ ?>
		<!--个人资料修改-->
		<script type="text/javascript">
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
		var birthday_empty = "<?php echo $this->_tpl_vars['lngpack']['birthday_empty'] ?>";
		var qq_empty = "<?php echo $this->_tpl_vars['lngpack']['qq_empty'] ?>";

		function editinfo(){
			if(document.editmember.birthday.value!=""){
				if(document.editmember.birthday.value.match(/^[1-9][0-9]{3}\-[0-9]{2}\-[0-9]{2}$/ig)==null) {
					document.editmember.birthday.focus();
					alert(birthday_empty);
					return false;
				}
			}
			if(document.editmember.qq.value!=""){
				if(document.editmember.qq.value.match(/^[0-9]+$/ig)==null) {
					document.editmember.qq.focus();
					alert(qq_empty);
					return false;
				}
			}
			<?php if (count($this->_tpl_vars['modelatt'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['modelatt']); $i++){?>
				<?php if($this->_tpl_vars['modelatt'][$i]['isvalidate']==1){ ?>
					<?php if($this->_tpl_vars['modelatt'][$i]['validatetext']!=''){ ?>
						if(document.editmember.<?php echo $this->_tpl_vars['modelatt'][$i]['attrname'] ?>.value.match(<?php echo $this->_tpl_vars['modelatt'][$i]['validatetext'] ?>ig)==null) {
					<?php }else{ ?>
						if(document.editmember.<?php echo $this->_tpl_vars['modelatt'][$i]['attrname'] ?>.value==''){
					<?php } ?>
					document.editmember.<?php echo $this->_tpl_vars['modelatt'][$i]['attrname'] ?>.focus();
					alert('<?php echo $this->_tpl_vars['modelatt'][$i]['typename'] ?>输入错误，请返回重新输入');
					return false;
				}
				<?php } ?>
			<?php }} ?>
		}
		</script>

		<form name="editmember" id="editmember" method="post" action="<?php echo $this->_tpl_vars['mlink']['membersave'] ?>" onsubmit="return editinfo()">
		<input type="hidden" name="tokenkey" value="<?php echo $this->_tpl_vars['tokenkey']['token_key'] ?>"/>
		<input type="hidden" name="upurl" value="<?php echo $this->_tpl_vars['upurl'] ?>"/>
		<input type="hidden" name="inputclass" value="editinfo"/>
		<input type="hidden" name="userid" value="<?php echo $this->_tpl_vars['member']['userid'] ?>"/>
		<input type="hidden" name="username" value="<?php echo $this->_tpl_vars['member']['username'] ?>"/>
		<input type="hidden" name="email" value="<?php echo $this->_tpl_vars['member']['email'] ?>"/>
		<input type="hidden" name="mvid" value="<?php echo $this->_tpl_vars['member']['mvid'] ?>"/>
		<div class="espcms_book_paddingbottom0 pt10">
			<div class="espcms_bbs_form">
				<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
				<div class="title"><div class="messageicon2"></div><div class="messtitle">个人资料修改</div></div>
				<div class="content">
					<div class="espcms_form_group">
						<label for="username" class="control_label">用户名</label>
						<div class="control_required f14"><?php echo $this->_tpl_vars['member']['username'] ?></div>
					</div>
					<div class="espcms_form_group">
						<label for="email" class="control_label">电子邮箱</label>
						<div class="control_required f14"><?php echo $this->_tpl_vars['member']['email'] ?></div>
					</div>
					<div class="espcms_form_group">
						<label for="alias" class="control_label">姓名（昵称）</label>
						<div class="control_required">
							<input type="text" name="alias" value="<?php echo $this->_tpl_vars['member']['alias'] ?>" class="col4 infoInput" maxlength="50"/>
						</div>
					</div>
					<div class="espcms_form_group">
						<label for="sex" class="control_label">性别</label>
						<div class="control_required20 f14">
							<input type="radio" value="1" name="sex" <?php if($this->_tpl_vars['member']['sex']==1){ ?>checked<?php } ?>> 男&nbsp;
							<input type="radio" value="0" name="sex" <?php if($this->_tpl_vars['member']['sex']==0){ ?>checked<?php } ?>> 女
						</div>
					</div>
					<div class="espcms_form_group">
						<label for="birthday" class="control_label">生日</label>
						<div class="control_required20 f14">
							<input type="text" name="birthday" value="<?php echo $this->timeformat($this->_tpl_vars['member']['birthday'],2) ?>" id="birthday" onclick="WdatePicker({el:'birthday',readOnly:true,dateFmt:'yyyy-MM-dd'})" maxlength="100" class="col4 infoInput"/>
							<span class="form_message">请按“2000-00-00”格式进行填写</span>
						</div>
					</div>
					<?php if($this->_tpl_vars['mem_isaddress']==1){ ?>
					<div class="espcms_form_group">
						<label for="cityone" class="control_label">地区</label>
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
							<span id="loading" class="form_message">正在读取</span>
						</div>
					</div>
					<?php } ?>
					<div class="espcms_form_group">
						<label for="address" class="control_label">详细地址</label>
						<div class="control_required20 f14">
							<input type="text" name="address" value="<?php echo $this->_tpl_vars['member']['address'] ?>" maxlength="120" size="60" class="infoInput" />
						</div>
					</div>
					<div class="espcms_form_group">
						<label for="zipcode" class="control_label">邮编</label>
						<div class="control_required20 f14">
							<input type="text" name="zipcode" value="<?php echo $this->_tpl_vars['member']['zipcode'] ?>" maxlength="10" size="10" class="infoInput"/>
						</div>
					</div>
					<div class="espcms_form_group">
						<label for="zipcode" class="control_label">MSM</label>
						<div class="control_required20 f14">
							<input type="text" name="msn" value="<?php echo $this->_tpl_vars['member']['msn'] ?>" maxlength="50" size="30" class="infoInput"/>
						</div>
					</div>
					<div class="espcms_form_group">
						<label for="zipcode" class="control_label">QQ</label>
						<div class="control_required20 f14">
							<input type="text" name="qq" value="<?php echo $this->_tpl_vars['member']['qq'] ?>" maxlength="10" size="15" class="infoInput"/>
						</div>
					</div>
					<?php if(count($this->_tpl_vars['modelatt']) > 0){ ?>
						<?php if (count($this->_tpl_vars['modelatt'])>0){$divid_list=1;for($list=0;$list<count($this->_tpl_vars['modelatt']); $list++){?>
						<div class="espcms_form_group">
							<label for="zipcode" class="control_label"><?php echo $this->_tpl_vars['modelatt'][$list]['typename'] ?></label>
							<div class="control_required20 f14">
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
					<div class="espcms_form_group">
						<label class="control_label"> </label>
						<div class="control_required20">
							<input type="submit" id="submit" class="button blue2" value="确认修改资料"/>
						</div>
					</div>
				</div>
				<b class="b5"></b><b class="b6"></b><b class="b7"></b><b class="b8"></b>
			</div>
		</div>
		</form>
		<?php } elseif($this->_tpl_vars['out']=='editpassword'){ ?>
		<!--密码修改-->
		<script type="text/javascript">
			var oldpassword_err = "<?php echo $this->_tpl_vars['lngpack']['oldpassword_err'] ?>";
			var password_len = "<?php echo $this->_tpl_vars['lngpack']['password_err'] ?>";
			var password_len2 = "<?php echo $this->_tpl_vars['lngpack']['password_len2'] ?>";
			var password2_empty = "<?php echo $this->_tpl_vars['lngpack']['password2_err'] ?>";
			var password_disaffinity = "<?php echo $this->_tpl_vars['lngpack']['password_equal'] ?>";
		</script>
		<form name="editmember" id="editmember" method="post" action="<?php echo $this->_tpl_vars['mlink']['membersave'] ?>" onsubmit="return editpassword()">
		<input type="hidden" name="tokenkey" value="<?php echo $this->_tpl_vars['tokenkey']['token_key'] ?>"/>
		<input type="hidden" name="upurl" value="<?php echo $this->_tpl_vars['upurl'] ?>"/>
		<input type="hidden" name="inputclass" value="editpassword"/>
		<input type="hidden" name="userid" value="<?php echo $this->_tpl_vars['member']['userid'] ?>"/>
		<input type="hidden" name="username" value="<?php echo $this->_tpl_vars['member']['username'] ?>"/>
		<input type="hidden" name="email" value="<?php echo $this->_tpl_vars['member']['email'] ?>"/>
		<div class="espcms_book_paddingbottom0 pt10">
			<div class="espcms_bbs_form">
				<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
				<div class="title"><div class="messageicon2"></div><div class="messtitle">密码修改</div></div>
				<div class="content">
					<div class="espcms_form_group">
						<label for="username" class="control_label">用户名</label>
						<div class="control_required f14"><?php echo $this->_tpl_vars['member']['username'] ?></div>
					</div>
					<div class="espcms_form_group">
						<label for="email" class="control_label">电子邮箱</label>
						<div class="control_required f14"><?php echo $this->_tpl_vars['member']['email'] ?></div>
					</div>
					<div class="espcms_form_group">
						<label for="alias" class="control_label">旧密码</label>
						<div class="control_required">
							<input type="password" name="oldpassword" id="oldpassword" size="18" maxlength="15" class="infoInput"/>
						</div>
					</div>
					<div class="espcms_form_group">
						<label for="sex" class="control_label">新密码</label>
						<div class="control_required20 f14">
							<input type="password" name="password" id="password" size="18" maxlength="15" class="infoInput"/>
							<span class="form_message">5－15 个字符，包括英文字母、中文、数字、下划线</span>
						</div>
					</div>
					<div class="espcms_form_group">
						<label for="address" class="control_label">重复新密码</label>
						<div class="control_required20 f14">
							<input type="password" name="password2" id="password2" size="18" maxlength="15"  class="infoInput"/>
						</div>
					</div>
					<div class="espcms_form_group">
						<label class="control_label"> </label>
						<div class="control_required20">
							<input type="submit" id="submit" class="button blue2" value="确认修改密码"/>
						</div>
					</div>
				</div>
				<b class="b5"></b><b class="b6"></b><b class="b7"></b><b class="b8"></b>
			</div>
		</div>
		</form>
		<?php } elseif($this->_tpl_vars['out']=='editemail'){ ?>
		<!--邮箱修改-->
		<script type="text/javascript">
			var password_len = "<?php echo $this->_tpl_vars['lngpack']['password_err'] ?>";
			var email_err = "<?php echo $this->_tpl_vars['lngpack']['email_err'] ?>";
		</script>

		<form name="editmember" id="editmember" method="post" action="<?php echo $this->_tpl_vars['mlink']['membersave'] ?>" onsubmit="return editmail()">
		<input type="hidden" name="tokenkey" value="<?php echo $this->_tpl_vars['tokenkey']['token_key'] ?>"/>
		<input type="hidden" name="upurl" value="<?php echo $this->_tpl_vars['upurl'] ?>"/>
		<input type="hidden" name="inputclass" value="editmail"/>
		<input type="hidden" name="userid" value="<?php echo $this->_tpl_vars['member']['userid'] ?>"/>
		<input type="hidden" name="username" value="<?php echo $this->_tpl_vars['member']['username'] ?>"/>
		<div class="espcms_book_paddingbottom0 pt10">
			<div class="espcms_bbs_form">
				<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
				<div class="title"><div class="messageicon2"></div><div class="messtitle">E-mail修改</div></div>
				<div class="content">
					<div class="espcms_form_group">
						<label for="username" class="control_label">用户名</label>
						<div class="control_required f14"><?php echo $this->_tpl_vars['member']['username'] ?></div>
					</div>
					<div class="espcms_form_group">
						<label for="email" class="control_label">原电子邮箱</label>
						<div class="control_required f14"><?php echo $this->_tpl_vars['member']['email'] ?></div>
					</div>
					<div class="espcms_form_group">
						<label for="alias" class="control_label">密码</label>
						<div class="control_required">
							<input type="password" name="password" id="password" size="18" maxlength="15" class="infoInput"/>
						</div>
					</div>
					<div class="espcms_form_group">
						<label for="sex" class="control_label">新电子邮箱</label>
						<div class="control_required20 f14">
							<input type="text" name="email" id="email" size="30" maxlength="100" class="infoInput" onblur="checktypename('email',this.value,'<?php echo $this->_tpl_vars['mlink']['checkusername'] ?>','mailmsg','<?php echo $this->_tpl_vars['lngpack']['mem_regemail_ok'] ?>','<?php echo $this->_tpl_vars['lngpack']['mem_regemail_no'] ?>','editmailsubmit');" />
							<span id="mailmsg" class="form_message">请真实填写您的邮件，用于密码找回和相关通知服务</span>
						</div>
					</div>
					<div class="espcms_form_group">
						<label class="control_label"> </label>
						<div class="control_required20">
							<input type="submit" id="submit" class="button blue2" value="确认修改E-mail"/>
						</div>
					</div>
				</div>
				<b class="b5"></b><b class="b6"></b><b class="b7"></b><b class="b8"></b>
			</div>
		</div>
		</form>
		<?php } elseif($this->_tpl_vars['out']=='orderlist'){ ?>
		<div class="espcms_page_typename">订单管理</div>
		<div class="espcms_page_location">您现在的位置：<a href="<?php echo $this->_tpl_vars['homelink'] ?>">首页</a> » <b><?php echo $this->_tpl_vars['lngpack']['member_title'] ?></b></div>
		<div class="espcms_page_right_line"></div>

			<?php if(count($this->_tpl_vars['array']) > 0){ ?>
			<table style="width: 100%" class="tablelist mt10">
				<tr>
					<td class="td01">订单编号</td>
					<td class="td01">订单金额</td>
					<td class="td01">订单状态</td>
					<td class="td01">订单时间</td>
					<td class="td01">操作</td>
				</tr>
				<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
				<tr>
					<td class="td02 tc"><a href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>" class="infolink01"><?php echo $this->_tpl_vars['array'][$i]['ordersn'] ?></a></td>
					<td class="td02 tr"><?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['array'][$i]['orderamount'] ?></td>
					<td class="td02 colorgreg tc"><?php echo $this->_tpl_vars['array'][$i]['ordertypename'] ?></td>
					<td class="td02 tc"><?php echo $this->timeformat($this->_tpl_vars['array'][$i]['addtime'],4) ?></td>
					<td class="td02 tc">
						<a href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>" class="button blue2">查看订单</a>
						<?php if($this->_tpl_vars['array'][$i]['ordertype']==1){ ?><a href="javascript:if (confirm('您确定要取消该订单吗？')) location.href='<?php echo $this->_tpl_vars['array'][$i]['dlink'] ?>';" class="button">取消订单</a><?php } ?>
					</td>
				</tr>
				<?php }} ?>
			</table>

			<div class="espcms_page_botton">
				<div id="pagelist"><?php echo $this->_tpl_vars['pagetext'] ?></div>
			</div>
			<div class="espcms_page_botton">
				<div id="pagination" class="pagination">
					<?php echo $this->_tpl_vars['pagebotton'] ?>
				</div>
			</div>
			<?php }else{ ?>
			<div class="espcms_page_botton">
				<div id="pagination">暂无内容</div>
			</div>
			<?php } ?>
		<?php } elseif($this->_tpl_vars['out']=='orderread'){ ?>
		<!--订单基本信息-->
		<script type="text/javascript">
		<?php if($this->_tpl_vars['mem_isaddress']==1){ ?>
		$(function() {
		    sec_cityone('<?php echo $this->_tpl_vars['read']['country'] ?>','<?php echo $this->_tpl_vars['read']['province'] ?>');
		    sec_citytwo('<?php echo $this->_tpl_vars['read']['province'] ?>','<?php echo $this->_tpl_vars['read']['city'] ?>');
		    sec_district('<?php echo $this->_tpl_vars['read']['city'] ?>','<?php echo $this->_tpl_vars['read']['district'] ?>');
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
		<div class="espcms_book_paddingbottom0 pt10">
			<div class="espcms_bbs_form">
				<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
				<div class="title"><div class="messageicon3"></div><div class="messtitle">订单基本信息</div></div>
				<div class="content">
					<div class="espcms_form_group">
						<label for="username" class="control_label">订单号</label>
						<div class="control_required f14"><?php echo $this->_tpl_vars['read']['ordersn'] ?></div>
					</div>
					<div class="espcms_form_group">
						<label for="addtime" class="control_label">订单时间</label>
						<div class="control_required f14"><?php echo $this->timeformat($this->_tpl_vars['read']['addtime'],4) ?></div>
					</div>
					<div class="espcms_form_group">
						<label for="ordertypename" class="control_label">订单状态</label>
						<div class="control_required f14"><?php echo $this->_tpl_vars['read']['ordertypename'] ?></div>
					</div>
				</div>
				<div class="title"><div class="messageicon3"></div><div class="messtitle">产品列表</div></div>
				<div class="content">
					<?php if(count($this->_tpl_vars['array']) > 0 ){ ?>
					<table style="width: 100%" class="tablelist">
						<tr>
							<td class="td01" valign="middle">产品编号</td>
							<td class="td01" valign="middle">产品名称</td>
							<td class="td01" valign="middle">图片</td>
							<td class="td01" valign="middle" align="right">单价</td>
							<td class="td01" valign="middle">数量</td>
							<td class="td01" valign="middle" align="right">小计</td>
						</tr>
						<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
						<tr>
							<td class="td02"><?php echo $this->_tpl_vars['array'][$i]['tsn'] ?></td>
							<td class="td02"><a target="_blank" title="<?php echo $this->_tpl_vars['array'][$i]['title'] ?>" href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>"><?php echo $this->cutstr($this->_tpl_vars['array'][$i]['title'],35) ?></a></td>
							<td class="td02"><img src="<?php echo $this->zoom($this->_tpl_vars['array'][$i]['pic'],90,90) ?>"></td>
							<td class="td02" valign="middle" align="right"><?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['array'][$i]['bprice'] ?></td>
							<td class="td02 colorgreg" valign="middle"><?php echo $this->_tpl_vars['array'][$i]['amount'] ?></td>
							<td class="td02" align="right"><?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['array'][$i]['countprice'] ?></td>
						</tr>
						<?php }} ?>
					</table>
					<?php }else{ ?>
					<table width="100%" class="tablelist">
						<tr align="center" class="td02"><td valign="middle">订单中暂无产品或产品数据不存在！</td></tr>
					</table>
					<?php } ?>
				</div>
				<div class="title"><div class="messageicon3"></div><div class="messtitle">金额及支付</div></div>
				<div class="content">
					<div class="espcms_form_group">
						<label for="productmoney" class="control_label">商品总额</label>
						<div class="control_required f14"><?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['read']['productmoney'] ?></div>
					</div>
					<?php if($this->_tpl_vars['read']['discount']>0){ ?>
					<div class="espcms_form_group">
						<label for="discount" class="control_label">折扣</label>
						<div class="control_required f14"><?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['read']['discount'] ?></div>
					</div>
					<?php } ?>
					<div class="espcms_form_group">
						<label for="productmoney" class="control_label">订单总额</label>
						<div class="control_required f14">商品总额<?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['read']['productmoney'] ?> - 折扣<?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['read']['discount'] ?> = 订单总额<?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['read']['orderamount'] ?></div>
					</div>
					<div class="espcms_form_group"><?php echo $this->_tpl_vars['orderonline'] ?></div>
				</div>
				<b class="b5"></b><b class="b6"></b><b class="b7"></b><b class="b8"></b>
			</div>
		</div>
		<?php } elseif($this->_tpl_vars['out']=='forumlist'){ ?>
		<!--留言列表-->
		<div class="espcms_page_typename">留言管理</div>
		<div class="espcms_page_location">您现在的位置：<a href="<?php echo $this->_tpl_vars['homelink'] ?>">首页</a> » <b><?php echo $this->_tpl_vars['lngpack']['member_title'] ?></b></div>
		<div class="espcms_page_right_line"></div>

			<?php if(count($this->_tpl_vars['array']) > 0){ ?>
			<table style="width: 100%" class="tablelist mt10">
				<tr>
					<td class="td01">话题</td>
					<td class="td01">时间</td>
					<td class="td01">操作</td>
				</tr>
				<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
				<tr>
					<td class="td02 tl"><a target="_blank" href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>" class="infolink01"><?php echo $this->cutstr($this->_tpl_vars['array'][$i]['title'],35,'') ?></a></td>
					<td class="td02"><?php echo $this->timeformat($this->_tpl_vars['array'][$i]['addtime'],4) ?></td>
					<td class="td02">
						<a href="<?php echo $this->_tpl_vars['array'][$i]['edit'] ?>" class="button blue2">修改话题</a>
					</td>
				</tr>
				<?php }} ?>
			</table>

			<div class="espcms_page_botton">
				<div id="pagelist"><?php echo $this->_tpl_vars['pagetext'] ?></div>
			</div>
			<div class="espcms_page_botton">
				<div id="pagination" class="pagination">
					<?php echo $this->_tpl_vars['pagebotton'] ?>
				</div>
			</div>
			<?php }else{ ?>
			<div class="espcms_page_botton">
				<div id="pagination">暂无内容</div>
			</div>
			<?php } ?>
		<?php } elseif($this->_tpl_vars['out']=='forumedit'){ ?>
		<script type="text/javascript">
		var forum_title_err = "<?php echo $this->_tpl_vars['lngpack']['forum_title_err'] ?>";
		var forum_input_err = "<?php echo $this->_tpl_vars['lngpack']['forum_input_err'] ?>";
		var email_err = "<?php echo $this->_tpl_vars['lngpack']['email_err'] ?>";
		var seccode_empty = "<?php echo $this->_tpl_vars['lngpack']['seescodeerr'] ?>";
		</script>
		<!--留言查看-->
		<form name="bbsmainform" method="post" action="<?php echo $this->_tpl_vars['mlink']['forumeditsave'] ?>" onSubmit="return forumcreat('0')">
		<input type="hidden" name="tokenkey" value="<?php echo $this->_tpl_vars['tokenkey']['token_key'] ?>"/>
		<input type="hidden" name="userid" value="<?php echo $this->_tpl_vars['read']['userid'] ?>"/>
		<input type="hidden" name="bid" value="<?php echo $this->_tpl_vars['read']['bid'] ?>"/>
		<input type="hidden" name="btid" value="<?php echo $this->_tpl_vars['read']['btid'] ?>"/>
		<input type="hidden" name="lng" value="<?php echo $this->_tpl_vars['read']['lng'] ?>"/>
		<div class="espcms_book_paddingbottom0 pt10">
			<div class="espcms_bbs_form">
				<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
				<div class="title"><div class="messageicon"></div><div class="messtitle">修改留言</div></div>
				<div class="content">
					<div class="espcms_form_group">
						<label for="address" class="control_label">主题</label>
						<div class="control_required"><input type="text" name="title" value="<?php echo $this->_tpl_vars['read']['title'] ?>" maxlength="200" size="60" class="infoInput"/></div>
					</div>
					<div class="espcms_form_group">
						<label for="address" class="control_label">姓名</label>
						<div class="control_required"><input type="text" name="username" class="infoInput" value="<?php echo $this->_tpl_vars['read']['username'] ?>" size="40" class="infoInput"/></div>
					</div>
					<div class="espcms_form_group">
						<label for="address" class="control_label">E-mail</label>
						<div class="control_required"><input type="text" name="email" class="infoInput" value="<?php echo $this->_tpl_vars['read']['email'] ?>" size="40" class="infoInput"/></div>
					</div>

					<div class="espcms_form_group">
						<label for="content" class="control_label">内容</label>
						<div class="control_required">
							<textarea name="content" rows="10" id="content" class="col11 infoInput"><?php echo $this->Html2Text($this->_tpl_vars['read']['content'],'0') ?></textarea>
						</div>
					</div>
					<div class="espcms_form_group">
						<label for="content" class="control_label"></label>
						<div class="control_required f14">
							<input type="radio" value="1" name="istype" onclick="ondisplayother('lastdiv2', 'displaytrue', 'lastdiv1', 'displaynone');" checked="checked"/> 省略附加信息&nbsp;
							<input type="radio" value="2" name="istype" onclick="ondisplayother('lastdiv2', 'displaynone', 'lastdiv1', 'displaytrue')"/> 填写附加信息
						</div>
					</div>

					<div class="espcms_bbs_other displaynone" id="lastdiv1">
						<div class="espcms_form_group">
							<label class="control_label">QQ</label>
							<div class="control_required"><input type="text" name="qq" value="<?php echo $this->_tpl_vars['read']['qq'] ?>" class="col5 infoInput"/></div>
						</div>
						<div class="espcms_form_group">
							<label class="control_label">MSN</label>
							<div class="control_required"><input type="text" name="msn" value="<?php echo $this->_tpl_vars['read']['msn'] ?>" class="col5 infoInput"/></div>
						</div>
						<div class="espcms_form_group">
							<label class="control_label">联系地址</label>
							<div class="control_required"><input type="text" name="address" value="<?php echo $this->_tpl_vars['read']['address'] ?>" class="col5 infoInput"/></div>
						</div>
						<div class="espcms_form_group">
							<label class="control_label">电话</label>
							<div class="control_required"><input type="text" name="tel" value="<?php echo $this->_tpl_vars['read']['tel'] ?>" class="col5 infoInput"/></div>
						</div>
						<div class="espcms_form_group">
							<label class="control_label">手机</label>
							<div class="control_required"><input type="text" name="mobile" value="<?php echo $this->_tpl_vars['read']['mobile'] ?>" class="col5 infoInput"/></div>
						</div>
					</div>
					<div class="espcms_form_group">
						<label for="submit" class="control_label"></label>
						<div class="control_required">
							<input type="submit" id="submit" class="button blue2" value="修改留言"/>
						</div>
					</div>
				</div>
				<b class="b5"></b><b class="b6"></b><b class="b7"></b><b class="b8"></b>
			</div>
		</div>
		</form>
		<?php } ?>
	</div>
</div>

885BA145EFC8431D34F5CC06D142F143specialty/cn/public/footer.html|885BA145EFC8431D34F5CC06D142F143
</body>
</html>
