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
	<?php if($this->_tpl_vars['out']=='buylist'){ ?>
	<script type="text/javascript">
		var order_amout_err = "<?php echo $this->_tpl_vars['lngpack']['order_amout_err'] ?>";
	</script>
	<div class="pb10 pt20 tc"><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/a1.jpg"/></div>
	<div class="espcms_member_login_center espcms_formwidth_c">
		<?php if(count($this->_tpl_vars['array']) > 0 ){ ?>
		<div class="title mb20"><div class="messageicon3"></div><div class="messtitle">我的购物车</div></div>
		<form name="mainform" method="post" action="<?php echo $this->_tpl_vars['mlink']['orderupdae'] ?>">
		<table class="tablelist" width="99%" style="margin:0 auto;">
			<tr>
				<td class="td01">商品名</td>
				<td class="td01">图片</td>
				<td class="td01">商品编号</td>
				<td class="td01">订购价格</td>
				<td class="td01">数量</td>
				<td class="td01">小计</td>
				<td class="td01">操作</td>
			</tr>
			<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
			<tr>
				<td class="td02"><a target="_blank" class="infolink01" href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>"><?php echo $this->_tpl_vars['array'][$i]['title'] ?></a></td>
				<td class="td02"><img src="<?php echo $this->zoom($this->_tpl_vars['array'][$i]['pic'],90,90) ?>"></td>
				<td class="td02"><?php echo $this->_tpl_vars['array'][$i]['tsn'] ?></td>
				<td class="td03">
					<?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['array'][$i]['bprice'] ?>
					<input type="hidden" name="bprice[]" value="<?php echo $this->_tpl_vars['array'][$i]['bprice'] ?>"/>
					<input type="hidden" name="did[]" value="<?php echo $this->_tpl_vars['array'][$i]['did'] ?>"/>
				</td>
				<td class="td02">
					<input type="text" name="amount[]" id="amount<?php echo $this->_tpl_vars['array'][$i]['did'] ?>" value="<?php echo $this->_tpl_vars['array'][$i]['amount'] ?>" onBlur="javascript:orderamount(<?php echo $this->_tpl_vars['array'][$i]['did'] ?>);" size="2" maxlength="5" class="infoInput"/>
				</td>
				<td class="td03">
					<?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['array'][$i]['countprice'] ?>
					<input type="hidden" name="countprice[]" id="countprice" value="<?php echo $this->_tpl_vars['array'][$i]['countprice'] ?>">
				</td>
				<td class="td02"><a class="button red" href="javascript:if (confirm('您确定要从购物车移出该商品吗？')) location.href='<?php echo $this->_tpl_vars['array'][$i]['dellink'] ?>';">删除</a></td>
			</tr>
			<?php }} ?>
			<tr>
				<td colspan="16" class="td03"><span class="f14 colorgreg strong">商品总金额：<?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['ordertotal'] ?></span></td>
			</tr>
			<tr>
				<td colspan="16" class="td03">
					<input type="submit" class="button" name="Submit" value="更新购物车"/>&nbsp;
					<input name="addch" class="button" type="button" value="清空购物车" onclick="javascript:if (confirm('您确定要清空所选购的商品吗？')) location.href='<?php echo $this->_tpl_vars['mlink']['clearcart'] ?>';"/>
				</td>
			</tr>
			<tr>
				<td colspan="10" class="td03">
					<table class="tablelist" width="100%" style="margin:0 auto;">
						<tr>
							<td class="left"><input name="addch" class="button blue" type="button" value="继续购物" onclick="javascript:location.href='<?php echo $this->_tpl_vars['homelink'] ?>';"/></td>
							<td class="right"><input name="addch" class="button orange" type="button" value="下一步（结算）" onclick="javascript:location.href='<?php echo $this->_tpl_vars['mlink']['orderpay'] ?>';"/></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		</form>
		<?php }else{ ?>
		<div class="title mb10"><div class="messageicon2"></div><div class="messtitle">购物车提示</div></div>
		<div class="espcms_form_group tc f14 pt15">您还没有选择订购商品</div>
		<?php } ?>
	</div>
	<?php } elseif($this->_tpl_vars['out']=='buyedit'){ ?>
	<!--购物车信息填写-->
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
	var address_title = "<?php echo $this->_tpl_vars['lngpack']['address_title'] ?>";
	var zipcode_empty = "<?php echo $this->_tpl_vars['lngpack']['zipcode_empty'] ?>";
	var alias_empty = "<?php echo $this->_tpl_vars['lngpack']['alias_empty'] ?>";
	var email_err = "<?php echo $this->_tpl_vars['lngpack']['email_err'] ?>";
	var tel_empty = "<?php echo $this->_tpl_vars['lngpack']['tel_empty'] ?>";
	</script>
	<div class="pb10 pt20 tc"><a href="<?php echo $this->_tpl_vars['mlink']['buylist'] ?>"><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/a2.jpg"/></a></div>
	<div class="espcms_member_login_center espcms_formwidth_c">
		<?php if(count($this->_tpl_vars['array']) > 0 ){ ?>
		<div class="title mb10"><div class="messageicon3"></div><div class="messtitle">订购商品列表</div></div>
		<form name="ordersaveform" method="post" action="<?php echo $this->_tpl_vars['mlink']['ordersave'] ?>" onsubmit="return ordersave()">
		<input type="hidden" name="userid" value="<?php echo $this->_tpl_vars['member']['userid'] ?>"/>
		<input type="hidden" name="productmoney" value="<?php echo $this->_tpl_vars['productmoney'] ?>"/>
		<input type="hidden" name="discount_productmoney" value="<?php echo $this->_tpl_vars['discount_productmoney'] ?>"/>
		<input type="hidden" name="discountmoney" value="<?php echo $this->_tpl_vars['discountmoney'] ?>"/>
		<input type="hidden" name="tokenkey" value="<?php echo $this->_tpl_vars['tokenkey']['token_key'] ?>"/>
			<table class="tablelist" width="99%" style="margin:0 auto;">
				<tr>
					<td class="td01">商品名</td>
					<td class="td01">图片</td>
					<td class="td01">商品编号</td>
					<td class="td01">订购价格</td>
					<td class="td01">数量</td>
					<td class="td01">小计</td>
				</tr>
				<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
				<tr>
					<td class="td02">
						<input type="hidden" name="ptitle[]" value="<?php echo $this->_tpl_vars['array'][$i]['title'] ?>">
						<a target="_blank" class="infolink01" href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>"><?php echo $this->_tpl_vars['array'][$i]['title'] ?></a>
					</td>
					<td class="td02"><img src="<?php echo $this->zoom($this->_tpl_vars['array'][$i]['pic'],90,90) ?>"></td>
					<td class="td02"><input type="hidden" name="tsn[]" value="<?php echo $this->_tpl_vars['array'][$i]['tsn'] ?>"><?php echo $this->_tpl_vars['array'][$i]['tsn'] ?></td>
					<td class="td02">
						<?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['array'][$i]['bprice'] ?>
						<input type="hidden" name="bprice[]" value="<?php echo $this->_tpl_vars['array'][$i]['bprice'] ?>">
						<input type="hidden" name="oprice[]" value="<?php echo $this->_tpl_vars['array'][$i]['oprice'] ?>">
						<input type="hidden" name="did[]" value="<?php echo $this->_tpl_vars['array'][$i]['did'] ?>">
					</td>
					<td class="td02"><?php echo $this->_tpl_vars['array'][$i]['amount'] ?><input type="hidden" name="amount[]" id="orderhow" value="<?php echo $this->_tpl_vars['array'][$i]['amount'] ?>"></td>
					<td class="td03"><?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['array'][$i]['countprice'] ?><input type="hidden" name="countprice[]" id="countprice" value="<?php echo $this->_tpl_vars['array'][$i]['countprice'] ?>"></td>
				</tr>
				<?php }} ?>
				<tr>
					<td colspan="6" class="pt10 pb10 tr"><span class="f14 colorgreg strong">商品总金额：<?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['productmoney_f'] ?> - 折扣<?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['discountmoney'] ?> = <?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['discount_productmoney_f'] ?></span></td>
				</tr>
			</table>

			<div class="title mb20 mt20"><div class="messageicon3"></div><div class="messtitle">配送方式</div></div>
			<table class="tablelist" width="99%" style="margin:0 auto;">
				<?php if(count($this->_tpl_vars['shipplug']) > 0 ){ ?>
				<?php if (count($this->_tpl_vars['shipplug'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['shipplug']); $i++){?>
				<tr>
					<td class="td03" width="20%"><?php echo $this->_tpl_vars['shipplug'][$i]['title'] ?></td>
					<td class="td04">
						<input type="radio" name="osid" value="<?php echo $this->_tpl_vars['shipplug'][$i]['osid'] ?>"<?php if($i+1==1){ ?> checked<?php } ?>>
						<?php if($this->_tpl_vars['shipplug'][$i]['price']>0){ ?>运费：<?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['shipplug'][$i]['price'] ?> <?php } ?><?php echo $this->_tpl_vars['shipplug'][$i]['content'] ?>
					</td>
				</tr>
				<?php }} ?>
				<?php }else{ ?>
				<tr>
					<td class="center">暂无配送方式</td>
				</tr>
				<?php } ?>
			</table>

			<div class="title mb20 mt20"><div class="messageicon3"></div><div class="messtitle">支付方式</div></div>
			<table class="tablelist" width="99%" style="margin:0 auto;">
				<?php if(count($this->_tpl_vars['payplug']) > 0 ){ ?>
				<?php if (count($this->_tpl_vars['payplug'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['payplug']); $i++){?>
				<tr>
					<td class="td03" width="20%"><?php echo $this->_tpl_vars['payplug'][$i]['payname'] ?></td>
					<td class="td04">
						<input type="radio" name="opid" value="<?php echo $this->_tpl_vars['payplug'][$i]['opid'] ?>" <?php if($i+1==1){ ?> checked<?php } ?>>
						<?php if($this->_tpl_vars['shipplug'][$i]['payis']>0){ ?>手续费比例：<?php echo $this->_tpl_vars['payplug'][$i]['payis'] ?>%<?php } ?> <?php echo $this->_tpl_vars['payplug'][$i]['paycontent'] ?>
					</td>
				</tr>
				<?php }} ?>
				<?php }else{ ?>
				<tr>
					<td class="tc">暂无支付方式</td>
				</tr>
				<?php } ?>
			</table>

			<div class="title mb20 mt20"><div class="messageicon3"></div><div class="messtitle">填写收货信息</div></div>
			<div class="espcms_form_group">
				<label for="title" class="control_label16">收货人姓名</label>
				<div class="control_required20">
					<input type="text" name="alias" value="<?php echo $this->_tpl_vars['member']['alias'] ?>" class="col4 infoInput" size="20" maxlength="50"/>
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
				<label for="title" class="control_label16">送货时间</label>
				<div class="control_required20 f14">
					<select size="1" name="sendtime" class="infoInput">
						<option value="1" selected>工作日、双休日与假日均可送货</option>
						<option value="2">只双休日、假日送货(工作日不用送)</option>
						<option value="3">只工作日送货(双休日、假日不用送) (注：写字楼/商用地址请客户备注说明)</option>
						<option value="4">尽量安排其他时间送货,请备注说明</option>
					</select>
				</div>
			</div>
			<div class="espcms_form_group">
				<label for="title" class="control_label16">备注</label>
				<div class="control_required20 f14"><textarea name="content" rows="5" cols="60" class="col10 infoInput"></textarea></div>
			</div>
			<div class="espcms_form_group">
				<label for="title" class="control_label16">发票抬头</label>
				<div class="control_required20 f14"><input type="text" name="invpayee" maxlength="100" class="col6 infoInput" /></div>
			</div>
			<div class="espcms_form_group">
				<label for="title" class="control_label16">发票内容</label>
				<div class="control_required20 f14"><input type="text" name="invcontent" maxlength="100" class="col6 infoInput" /></div>
			</div>
			<div class="espcms_form_group">
				<label class="control_label16"> </label>
				<div class="control_required20">
					<input type="submit" id="submit" class="button blue2" value="提交订单"/>
				</div>
			</div>
		</form>
		<?php }else{ ?>
		<div class="title mb10"><div class="messageicon2"></div><div class="messtitle">购物车提示</div></div>
		<div class="espcms_form_group tc f14 pt15">您还没有选择订购商品</div>
		<?php } ?>
	</div>
	<?php } elseif($this->_tpl_vars['out']=='buyok'){ ?>
	<div class="pb10 pt20 tc"><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/a3.jpg"/></div>
	<div class="espcms_member_login_center espcms_formwidth_c">
		<div class="title mb30"><div class="messageicon3"></div><div class="messtitle">成功提交订单</div></div>
		<div class="espcms_form_group tc f14">恭喜，您的订单已提交成功，请记住您的订单号<span class="oninage b"><?php echo $this->_tpl_vars['ordersn'] ?></span></div>
		<div class="espcms_form_group tc f14 pt15">您订单总金额为：商品合计<?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['discount'] ?> + 邮寄费用<?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['shipprice'] ?> + 支付手续费<?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['payprice'] ?> = <span class="oninage"><?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['orderamount'] ?></span></div>
		<div class="espcms_form_group tc pt15"><?php echo $this->_tpl_vars['orderonline'] ?></div>
		<?php if($this->_tpl_vars['order_ismember']){ ?>
		<div class="espcms_form_group tc pt15">
			<a class="button blue2" href="<?php echo $this->_tpl_vars['mlink']['center'] ?>">会员中心</a>  <a class="button blue2" href="<?php echo $this->_tpl_vars['homelink'] ?>">返回网站首页</a>
		</div>
		<?php } ?>
	</div>
	<?php } ?>
</div>
885BA145EFC8431D34F5CC06D142F143specialty/cn/public/footer.html|885BA145EFC8431D34F5CC06D142F143
</body>
</html>
