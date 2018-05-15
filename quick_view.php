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
<title><?php if($title_bar!='') echo $title_bar; else echo $row_setting['title']; ?></title>
<meta name="description" content="<?php if($description_bar!='') echo $description_bar; else echo $row_setting['description']; ?>">
<meta name="keywords" content="<?php if($keywords_bar!='') echo $keywords_bar; else echo $row_setting['keywords']; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1" />
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
 

<?=$php_link?>

<?php /*?><style type="text/css">
body{
	font-family: Arial;
	font-size:14px;
	line-height:1.5;
	background:url(<?=_upload_hinhanh_l.$row_background['photo']?>) <?=$row_background['re_peat']?> <?=$row_background['tren']?> <?=$row_background['trai']?>;
	background-color:<?=$row_background['mauneen']?>;
	background-attachment:<?=$row_background['fix_bg']?>;
	height: 100%;
	max-width: 1349px;
	margin: auto;
}

</style><?php */?>

</head>
<body <?php if($_GET['com']=='lien-he'){?>onload="initialize();"<?php } ?>>
 <link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="js/magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="js/magiczoomplus/magiczoomplus.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function() {

      $('.btn_muangay').click(function(e) {
        var pid = $(this).attr('data-id');

        $.ajax({
          type: "POST",
          url: "ajax/add_giohang.php", 
          data: {pid:pid},
          success: function(string){
            var getData = $.parseJSON(string);   
            var result = getData.result_giohang;
            var count = getData.count;
            if(result > 0) {    
              alert('Bạn đã thêm thành công sản phẩm này vào giỏ hàng');
              window.location.href='gio-hang.html';
              $('.giohang_top a span').html(count);                
            }
            else if (result == -1)alert('Sản phẩm này không tồn tại');
            else if (result == 0)alert('Sản phẩm này đã có trong giỏ hàng');
          }          
        });
      });

  });
</script>
 
<?
$d->reset();
			$sql_detail = "select * from #_product where hienthi=1 and type='product' and id='".$_GET['id']."'";
			$d->query($sql_detail);
			$row_detail = $d->fetch_array();
?>



<div class="block-content-right1">
  <div class="title_index_about"><span>
   <?=$title_detail?> <?=_chitiet?>
    </span></div>
      <div class="padding0 content-boder col-lg-12 col-md-12 col-xsm-12 col-xs-12">
    
    <div class=" padding0 col-md-6 col-sm-6 col-xsm-12 col-xs-12">
      <div class="frame_images" >
                <div class="app-figure" id="zoom-fig">
                <a href="<?=_upload_product_l.$row_detail['photo']?>" id="Zoom-1" class="MagicZoom" title="<?=$row_detail['ten_'.$lang]?> .">
                <img src="<?=_upload_product_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"  /></a>
                </div>

                <div class="selectors">
                <?php   include _template."layout/jssor.php";?>
                </div>
      </div>
     </div>    
  <ul class="khung_thongtin">
                <li><h1><?=$row_detail['ten_'.$lang]?></h1></li>
               
              <li class="text-info"><b> Mã sản phẩm</b> <?=$row_detail['masp']?> </li> 
                <li class="gia_detail"><b><?=_gia?> :</b> <?php if($row_detail['giaban']==0) echo "Liên Hệ"; else echo number_format ($row_detail['giaban'],0,",",".")." vnđ ";?></li>
                
                 <?php /*?>  <li class="text-info"><b>Tình trạng:</b> <?=$row_detail['tinhtrang']?> </li> <?php */?>
                
            <?php /*?>   <li class="btn_muangay"><a href="#muangay" class="fancybox"><img src="images/bg_muangay.png" alt="mua ngay" /></a></li> <?php */?>
                <li class="mota_detail"><?=$row_detail['mota_'.$lang]?></li>
                  <li class="mota_detail"><?
		   include _template.'layout/share_social.php';
         ?></li>
               
                <li class="gia_detail"><button data-id="<?=$row_detail['id']?>" class="btn_muahang">Mua ngay</button> </li> 
               
          

                  
             

       </ul>
      
         
         
         
   <?php /*?><div class="  block_content_detail col-lg-12 col-md-12 col-xsm-12 col-xs-12">  
         
 
   
<div class="title_index_about"><span><?=_thongtinsanpham?></span></div>
    <div style=" clear:both"></div>
   
         <?=$row_detail['noidung_'.$lang]?>
         
         
         </div><?php */?>
     </div>
 	    
    
     
    <div style=" clear:both"></div>
   
 
    
</div>
 

 
</body>
</html>
