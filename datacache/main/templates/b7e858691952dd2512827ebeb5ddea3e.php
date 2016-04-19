<h2>会员中心</h2>
<ul class="espcms_three_one unstyled">
	<li><a class="typelink" href="<?php echo $this->_tpl_vars['mlink']['center'] ?>">中心首页</a></li>
	<li><a class="typelink" href="<?php echo $this->_tpl_vars['mlink']['orderlist'] ?>">订单管理</a></li>
	<?php if($this->_tpl_vars['bbsapp']==1){ ?>
	<li><a class="typelink" href="<?php echo $this->_tpl_vars['mlink']['forumlist'] ?>">留言管理</a></li>
	<?php } ?>
	<li><a class="typelink" href="<?php echo $this->_tpl_vars['mlink']['memedit_info'] ?>">个人资料修改</a></li>
	<li><a class="typelink" href="<?php echo $this->_tpl_vars['mlink']['memedit_password'] ?>">密码修改</a></li>
	<li><a class="typelink" href="<?php echo $this->_tpl_vars['mlink']['memedit_email'] ?>">E-mail修改</a></li>
	<li><a class="typelink" href="<?php echo $this->_tpl_vars['mlink']['quit'] ?>">退出</a></li>
</ul>
