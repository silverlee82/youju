<div class="espcms_head">
	<div class="logo"><img src="<?php echo $this->_tpl_vars['rootpath'] ?>images/logo.jpg" alt="logo"/></div>
	<div class="head_botton">
		<ul class="unstyled">
			214adb21252b0af7b03s214s9lng||||60af7b03s21fs
			<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
			<li><a href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>"><?php echo $this->_tpl_vars['array'][$i]['lngtitle'] ?></a></li>
			<?php }} ?>
			214adb21252b0af7b03s214s9
			<li><a href="<?php echo $this->_tpl_vars['rootdir'] ?>wap/">手机网站</a></li>
			<li><a href="4adb4912cd04e6fd3mlink|1|login4adb4912cd04e6fd3">会员中心</a></li>
			<li><a href="4adb4912cd04e6fd3mlink|2|order4adb4912cd04e6fd3">购物车</a></li>
		</ul>
	</div>
</div>
<div class="espcms_botton">
	<ul class="menubotton unstyled" id="clickmenubotton">
		214adb21252b0af7b03s214s9menu|path:<?php echo $this->_tpl_vars['path'] ?>,current:<?php echo $this->_tpl_vars['current'] ?>,ishome:1|||60af7b03s21fs
		<?php if (count($this->_tpl_vars['array'])>0){$divid_i=1;for($i=0;$i<count($this->_tpl_vars['array']); $i++){?>
		<li <?php if($this->_tpl_vars['array'][$i]['path']==$this->_tpl_vars['path'] && $this->_tpl_vars['array'][$i]['current']==$this->_tpl_vars['current']){ ?>class="hover"<?php } ?>><span><a class="menu" title="<?php echo $this->_tpl_vars['array'][$i]['title'] ?>" href="<?php echo $this->_tpl_vars['array'][$i]['link'] ?>"><?php echo $this->_tpl_vars['array'][$i]['title'] ?></a></span>
			<?php if(count( $this->_tpl_vars['array'][$i]['larray'] ) > 0 ){ ?>
			<ul class="subnav" style="display: none; ">
				<?php if (count($this->_tpl_vars['array'][$i]['larray'])>0){$divid_ii=1;for($ii=0;$ii<count($this->_tpl_vars['array'][$i]['larray']); $ii++){?>
				<li><a class="novlink" href="<?php echo $this->_tpl_vars['array'][$i]['larray'][$ii]['link'] ?>" title="<?php echo $this->_tpl_vars['array'][$i]['larray'][$ii]['title'] ?>"><?php echo $this->_tpl_vars['array'][$i]['larray'][$ii]['title'] ?></a></li>
				<?php }} ?>
			</ul>
			<?php } ?>
		</li>
		<?php }} ?>
		214adb21252b0af7b03s214s9
	</ul>
</div>
