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

				<div class="espcms_form_group">
				<label class="control_label16"> </label>
				<div class="control_required20">
					<input type="submit" id="submit" class="button blue2" value="提交订单"/>
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
		<div class="espcms_form_group tc f14 pt15">您订单总金额为：商品合计<?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['discount'] ?> = <span class="oninage"><?php echo $this->_tpl_vars['moneytype'] ?><?php echo $this->_tpl_vars['orderamount'] ?></span></div>
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
