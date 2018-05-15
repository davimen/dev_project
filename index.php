<?php
session_start();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './libraries/');
	if(!isset($_SESSION['lang']))
	{
	$_SESSION['lang']='vi';
	}
	$lang=$_SESSION['lang'];
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_share.php";
	include_once _lib."class.database.php";
	include_once _source."lang_$lang.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
	include_once _lib."counter.php"; 
	include_once _lib."getdatahome.php"; 
	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
	$pid=$_REQUEST['productid'];
	$soluong=1;
	addtocart($pid,$soluong);
	redirect("thanh-toan.html");}
	if($_GET['lang']!=''){
		$_SESSION['lang']=$_GET['lang'];
		header("location:".$_SESSION['links']);
	} else {
		$_SESSION['links']=getCurrentPageURL();
	}
	$d->reset();
    $sql_banner_top= "select thumb_$lang from #_photo where type='slogan'";
    $d->query($sql_banner_top);
    $slogan_top = $d->fetch_array();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<base href="http://<?=$config_url?>/">
<link id="favicon" rel="shortcut icon" href="<?=_upload_hinhanh_l.$favicon['thumb_'.$lang]?>" type="image/x-icon" />
<title>
<?php if($title_bar!='') echo $title_bar; else echo $row_setting['title']; ?>
</title>
<meta name="description" content="<?php if($description_bar!='') echo $description_bar; else echo $row_setting['description']; ?>">
<meta name="keywords" content="<?php if($keywords_bar!='') echo $keywords_bar; else echo $row_setting['keywords']; ?>">
<meta name="viewport" content="width=1200px" />
<meta name="robots" content="noodp,index,follow" />
<meta name="google" content="notranslate" />
<meta name='revisit-after' content='1 days' />
<meta name="ICBM" content="<?=$row_setting['toado']?>">
<meta name="geo.position" content="<?=$row_setting['toado']?>">
<meta name="geo.placename" content="<?=$row_setting['diachi_'.$lang]?>">
<meta name="author" content="<?=$row_setting['ten_'.$lang]?>">
<link rel="canonical" href="<?=getCurrentPageURL()?>" />
<?=$share_facebook?>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
<!-- Default Theme -->
<link rel="stylesheet" href="owl-carousel/owl.theme.css">
<!-- Include js plugin -->
<script src="owl-carousel/owl.carousel.js"></script>
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
<script>
$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
</script>
<?=$php_link?>
</head>
<body <?php if($_GET['com']=='lien-he'){?>onload="initialize();"<?php } ?>>
<?=$row_setting['analytics']?>
  <?php include _template."layout/header.php"; ?>
<section id="content">
  <div style=" clear:both"></div>
    <?php  
  include _template."layout/slider.php";    
  ?>
  <div style=" clear:both"></div>
  <div class="container" itemscope itemtype="http://schema.org/product">
   <?php // include _template."layout/left.php"; ?>
    <div class="block-right  full_content  <?=($template=='index')?'full_content11 ':''?>">
      <?php  
				 include _template.$template."_tpl.php";
				//   _template.$template."_tpl.php";
				 ?>
    </div>
    <div style=" clear:both"></div>
  </div>
  <div style=" clear:both"></div>
</section>
<?php 
if($template=='index'){
 include _template."layout/thongtin.php";
// include _template."layout/doitac.php";	
 
//include _template."layout/map.php";
}
 		    ?>
<footer id="footer"> 
  <?php  include _template."layout/footer.php"; ?>
</footer>
<?php //  include _template."layout/chatfacebook.php"; ?>
<?=$script_php?>
<?=$row_setting['vchat']?>
</body>
</html>