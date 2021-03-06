<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $this->_tpl_vars['softtitle'] ?></title>
<link href="templates/css/baselist.css" rel="stylesheet" type="text/css" />
<link href="templates/css/all.css" rel="stylesheet" type="text/css" />
<link href="templates/css/formdiv.css" rel="stylesheet" type="text/css"/>
<link href="templates/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/control.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" language="JavaScript">
	var iframename = "<?php echo $this->_tpl_vars['iframename'] ?>";
	var checkfrom="<?php echo $this->_tpl_vars['checkfrom'] ?>";
	var getbyid="<?php echo $this->_tpl_vars['getbyid'] ?>";
	var editiframename="<?php echo $this->_tpl_vars['iframeid'] ?>";
	var fileinputid="<?php echo $this->_tpl_vars['fileinputid'] ?>";
	var digheight="<?php echo $this->_tpl_vars['digheight'] ?>";
	var rootDIR="<?php echo $this->_tpl_vars['rootDIR'] ?>";
	var picview="<?php echo $this->_tpl_vars['picview'] ?>&fheight=<?php echo $this->_tpl_vars['framt'] ?>";
	var fileview="<?php echo $this->_tpl_vars['fileview'] ?>&fheight=<?php echo $this->_tpl_vars['framt'] ?>";
	$(document).ready(function(){
		var h = parseInt(digheight);
		var w = $(window).width();
		$('#mainwindowstr').css({height:h-45,width: w-12});
		$('.upfilewindow').css({height:h-45});
	})
	function resetwindow(){
		parent.closeifram();
	}
	function fnUpdate(){
		$("#floatBoxBg").hide();
		$("#floatBox").hide();
	}
	function refile(filename,iswidth){
		if (checkfrom=='edit'){
			checkimageinput(filename,fileinputid);
		}else if(checkfrom=='input'){
			checkinput(filename,fileinputid);
		}else if(checkfrom=='function'){
			functionpic(filename,fileinputid,getbyid,iswidth);
		}else if(checkfrom=='picshow'){
			picshow(filename,fileinputid,getbyid,iswidth);
		}else if(checkfrom=='editwin'){
			checkimageeditor(filename,fileinputid);
		}else if(checkfrom=='list'){
			getbackwindows();
		}
	}
	function checkimageeditor(filename,inputnameID){
		if ($.browser.msie){
			var win = parent.frames[iframename].frames[editiframename];
		}else{
			var framesid=parent.frames[iframename].frames.length;
			if(framesid>2){
				var nowframsid=framesid-1;
				var win = parent.frames[iframename].frames[nowframsid];
			}else{
				var win = parent.frames[iframename].frames[1];
			}
		}
		filename=rootDIR+filename;
		win.document.getElementById(inputnameID).value = filename;
		if (typeof(win.ImageDialog) != "undefined") {
			if (win.ImageDialog.getImageData) win.ImageDialog.getImageData();
			if (win.ImageDialog.showPreviewImage) win.ImageDialog.showPreviewImage(filename);
		}
		parent.closeifram();
	}
	function checkimageinput(filename,inputnameID){
		if ($.browser.msie){
			var win = parent.frames[iframename].frames[editiframename];
		}else{
			var win = parent.frames[iframename].frames[1];
		}
		var filenames = filename.split('|');
		var src_tex='';
		for (var i = 0; i < filenames.length; i++){
			src_tex+='<img src="'+rootDIR+filenames[i]+'" alt="" />';
		}
		parent.frames[iframename].tinyMCE.execCommand('mceInsertContent',false,src_tex);
		parent.closeifram();
	}
	function checkinput(filename,inputnameID){
		parent.frames[iframename].document.getElementById(inputnameID).value = filename;
		parent.closeifram();
	}
	function picshow(filename,inputnameID,getbyid,iswidth){
		parent.frames[iframename].document.getElementById(inputnameID).value = filename;
		parent.frames[iframename].addpicshow(filename,getbyid,iswidth,inputnameID,fileinputid);
		parent.closeifram();
	}
	function functionpic(filename,inputnameID,getbyid,iswidth){
		parent.frames[iframename].addpicipnput(filename,inputnameID,getbyid,iswidth,iframename);
		parent.closeifram();
	}
	function selectfile(){
		var filename=$('.pp_description').html();
		var fileinputid="<?php echo $this->_tpl_vars['fileinputid'] ?>";
		if (checkfrom=='edit'){
			checkimageinput(filename);
		}else if(checkfrom=='input'){
			checkinput(filename,fileinputid);
		}else if(checkfrom=='function'){
			functionpic(filename,fileinputid);
		}
	}
	function flushiframe(getid){
		var url = (getid=='piclist') ? picview : fileview;
		document.getElementById(getid).src = url;
	}
	function getbackwindows(){
		parent.frames[iframename].refresh('selectform','selectall','check_all');
		parent.closeifram();
	}
	document.oncontextmenu=new Function('event.returnValue=false;');
	document.onselectstart=new Function('event.returnValue=false;');
</script>
</head>
<body style="background-color: #FFFFFF">
<div class="centerrightwindow"  style="background-color: #FFFFFF">
	<div id="mainwindowtab">
		<?php if($this->_tpl_vars['isgetback']){ ?>
		<ul>
			<li class="hover" id="tabbottonul1" href="#body" onmousedown="javascript:windowsclass('#tabbottonul1','#tabcontentdiv1','tabbottonul','tabcontentdiv',1,4,'hover','hover2');">上传文件</li>
			<li id="tabbottonul2" href="#body" onmousedown="javascript:windowsclass('#tabbottonul2','#tabcontentdiv2','tabbottonul','tabcontentdiv',2,4,'hover','hover2');">批量上传</li>
		</ul>
		<?php }else{ ?>
			<?php if($this->_tpl_vars['filetype']=='img'){ ?>
			<ul>
				<li class="hover" id="tabbottonul1" href="#body" onmousedown="javascript:windowsclass('#tabbottonul1','#tabcontentdiv1','tabbottonul','tabcontentdiv',1,4,'hover','hover2');">上传文件</li>
				<li id="tabbottonul2" href="#body" onmousedown="javascript:windowsclass('#tabbottonul2','#tabcontentdiv2','tabbottonul','tabcontentdiv',2,4,'hover','hover2');">批量上传</li>
				<li id="tabbottonul3" href="#body" onmousedown="javascript:windowsclass('#tabbottonul3','#tabcontentdiv3','tabbottonul','tabcontentdiv',3,4,'hover','hover2');flushiframe('piclist');">相册浏览模式</li>
				<li id="tabbottonul4" href="#body" onmousedown="javascript:windowsclass('#tabbottonul4','#tabcontentdiv4','tabbottonul','tabcontentdiv',4,4,'hover','hover2');flushiframe('filelist');">文件夹浏览模式</li>
			</ul>
			<?php }else{ ?>
			<ul>
				<li class="hover" id="tabbottonul1" href="#body" onmousedown="javascript:windowsclass('#tabbottonul1','#tabcontentdiv1','tabbottonul','tabcontentdiv',1,3,'hover','hover2');">上传文件</li>
				<li id="tabbottonul2" href="#body" onmousedown="javascript:windowsclass('#tabbottonul2','#tabcontentdiv2','tabbottonul','tabcontentdiv',2,3,'hover','hover2');">批量上传</li>
				<li id="tabbottonul3" href="#body" onmousedown="javascript:windowsclass('#tabbottonul3','#tabcontentdiv4','tabbottonul','tabcontentdiv',3,3,'hover','hover2');flushiframe('filelist');">文件夹浏览模式</li>
			</ul>
			<?php } ?>
		<?php } ?>
	</div>
	<div id="mainwindowstr">
		<div id="tabcontentdiv1" class="displaytrue"><iframe name="upfilewindow" class="upfilewindow" src="<?php echo $this->_tpl_vars['loadurl'] ?>&fheight=<?php echo $this->_tpl_vars['framt'] ?>" width="100%" height="<?php echo $this->_tpl_vars['framt'] ?>" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe></div>
		<div id="tabcontentdiv2" class="displaynone"><iframe name="upbatfilewindow" class="upfilewindow" src="<?php echo $this->_tpl_vars['batupwindow'] ?>&fheight=<?php echo $this->_tpl_vars['framt'] ?>" width="100%" height="<?php echo $this->_tpl_vars['framt'] ?>" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe></div>
		<div id="tabcontentdiv3" class="displaynone"><iframe name="piclist" id="piclist" class="upfilewindow" src="#" width="100%" height="<?php echo $this->_tpl_vars['framt'] ?>" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe></div>
		<div id="tabcontentdiv4" class="displaynone"><iframe name="filelist" id="filelist" class="upfilewindow" src="#" width="100%" height="<?php echo $this->_tpl_vars['framt'] ?>" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe></div>
	</div>
</div>
</body>
</html>