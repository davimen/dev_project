<?php

  
    $d->reset();
  $sql = "select * from #_video where hienthi=1  order by stt,id desc";
  $d->query($sql);
  $result_videoclip = $d->result_array();
  
  
    
  
  
  $id_video=end(explode('v=',$result_videoclip[0]['url']));
  
    $d->reset();
  $sql = "select * from #_product where hienthi=1 and hot >0 and  type='product' order by stt,id desc limit 0,15";
  $d->query($sql);
  $result_sanphammoi = $d->result_array();
  
  
    $d->reset();
  $sql = "select * from #_baiviet where hienthi=1 and   type='congtrinh' order by stt,id desc limit 0,15";
  $d->query($sql);
  $result_newsHot = $d->result_array();
   $d->reset();
  $sql = "select * from #_baiviet where hienthi=1 and   type='dichvu' and noibat >0 order by stt,id desc";
  $d->query($sql);
  $result_dichvuhot_list = $d->result_array();
  
  
  
    $d->reset();
  $sql = "select * from #_yahoo where hienthi=1  order by stt,id desc";
  $d->query($sql);
  $result_yahoo = $d->result_array();
  
  
  
	 
   $d->reset();
    $sql = "select * from #_product_list where hienthi=1 and type='product' order by stt,id desc";
    $d->query($sql);
    $result_porducts_list = $d->result_array();

	  $d->reset();
    $sql = "select * from #_photo where hienthi=1 and type='quangcao'  order by stt,id desc";
    $d->query($sql);
    $result_quangcaoleft = $d->result_array();	
  
  
?>
 
 <div class="block-left">
  
   <div class="content-left block_danhmuc_sanpham">
  <div class="title_left">Dịch vụ</div>
     <div style=" clear:both"></div>
    <div class="block-content-left">
  <ul class="menuleft">   <?
                foreach((array)$result_dichvu_list as $k1=>$v1){
                  ?>
                  <li><a href="dich-vu/<?=$v1['tenkhongdau']?>"><?=$v1['ten_vi']?></a></li>
                  <? }?>
            
    </ul>
    </div>
 </div>
 <div class="content-left block_danhmuc_sanpham">
 	<div class="title_left">DANH MỤC SẢN PHẨM </div>
     <div style=" clear:both"></div>
    <div class="block-content-left">
 	<ul class="menuleft"><?
  foreach((array)$result_porducts_list as $k=>$v){
 ?>
    	<li><a href="san-pham/<?=$v['tenkhongdau']?>"><?=$v['ten_vi']?></a>
        	<ul>
             <?
			
				$sql = "select * from #_product_cat where hienthi=1 and type='product' and id_list='".$v['id']."' order by stt,id desc  ";
				$d->query($sql);
				$result_product_cat11 = $d->result_array();
			foreach((array)$result_product_cat as $k1=>$v1){
            ?>
         	<li><a href="san-pham/<?=$v['tenkhongdau']?>/<?=$v1['tenkhongdau']?>"><?=$v1['ten_vi']?></a></li>
            <? }?>
            </ul>
        </li>
    
   <? }?>
            
    </ul>
    </div>
 </div>
 <div class="content-left block_danhmuc_sanpham">
  <div class="title_left">Diệt mối TP.HCM</div>
     <div style=" clear:both"></div>
    <div class="block-content-left">
  <ul class="menuleft"><?
  foreach((array)$result_dichvuhot_list as $k=>$v){
 ?>
      <li><a href="dich-vu/<?=$v['tenkhongdau']?>.html"><?=$v['ten_vi']?></a>
          
        </li>
    
   <? }?>
            
    </ul>
    </div>
 </div>
 
<script>
$().ready(function(e) {
    $('.sub_left').click(function(){
		$(this).find('ul').slideDown();
		
		})
});
</script>


<script type="text/javascript" src="js/jquery.simplyscroll.js"></script>
<link rel="stylesheet" href="css/jquery.simplyscroll.css" media="all" type="text/css">




 
 
 
 
 
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
 
 <script type="text/javascript">
(function($) {
	$(function() {
		$("#scroller1").simplyScroll({orientation:'vertical',customClass:'vert1'});
	});
})(jQuery);
</script>
<!--  
 <div class="content-left">
  <div class="title_left">Hỗ trợ trực tuyến</div>
    <div class="block-content-left">
        <div class="block_hotline_left">
          <img src="images/bg_hotro.png" alt="">
          <strong class="hotline_left"><?=$row_setting['hotline']?></strong>
        </div>

        <ul class="list_infleft">
          <li>Hotline: <strong><?=$row_setting['dienthoai']?></strong></li>
           <li>Email: <?=$row_setting['email']?></li>
        </ul>
          
        <div style="clear:both"></div>
    </div>
 </div>
  -->
  
 
 <div class="content-left content_news_hot">
 	<div class="title_left">Công trình</div>
    <div style="clear:both"></div>
    <div class="block-content-left">
 		<ul id="scroller1" class="list-news-hot">
        <?
		 foreach((array)$result_newsHot as $k=>$v){
        ?>
        <li>
        <a href="cong-trinh/<?=$v['tenkhongdau']?>.html">
        
        <img src="thumb/100x100/1/<?=_upload_baiviet_l.$v['photo']?>" />
        <h2><?=catchuoi($v['ten_'.$lang],90)?></h2>
     <!--    <span><?=catchuoi($v['mota_'.$lang],150)?></span> -->
        
        </a>
        </li>
        <? }?>
        </ul>
        
        
        
       <!--  <ul id="scroller1" class="list-news-hot">
        <?
		 foreach((array)$result_sanphammoi as $k=>$v){
        ?>
        <li>
        <div class="block_sanpham_left">
        <a href="san-pham/<?=$v['tenkhongdau']?>/<?=$v['id']?>.html">
        
        <img src="timthumb.php?src=<?=_upload_product_l.$v['photo']?>&h=200&w=250&zc=1&q=100" />
        <span><?=catchuoi($v['mota_'.$lang],150)?></span>
        
       
        </a>
          <a href="san-pham/<?=$v['tenkhongdau']?>/<?=$v['id']?>.html"><h2><?=catchuoi($v['ten_'.$lang],50)?></h2></a>
        <span class="price">Giá: <strong><?=format_money($v['giaban'],' vnđ')?></strong></span>
        
        </div>
        
        </li>
        <? }?>
        </ul> -->
        
        
        <div style="clear:both"></div>
    </div>
 </div>
 
 
 
 <script type="text/javascript">
(function($) {
	$(function() {
		$("#scroller2").simplyScroll({orientation:'vertical'});
	});
})(jQuery);
</script>
   
<!-- <div class="content-left">
 	<div class="title_left">SẢN PHẨM BÁN CHẠY</div>
    <div class="block-content-left">
 			<?
		 foreach((array)$result_quangcaoleft  as $k=>$v){
        ?>
 		<a href="<?=$v['link']?>"><img class="img_quangcao" src="<?=_upload_hinhanh_l.$v['photo_vi']?>" /></a>
        <? }?>

        
        <div style="clear:both"></div>
    </div>
 </div>
 
  -->


 <div class="content-left">
 	<div class="title_left">Facbook</div>
    <div class="block-content-left">
 		<?
		include _template.'layout/facebook.php';
        ?>
        
        <div style="clear:both"></div>
    </div>
 </div> 
 
 
 <?
// $count_online=count_online();
 ?>
 <?php /*?><div class="content-left">
 	<div class="title_left">Thống kê truy cập</div>
    <div class="block-content-left">
 		<ul class="list-counter">
        	<li><img src="images/iconc1.png" alt="icon-1" /> <span>Đang online: <?=$count_online['dangxem']?></span></li>
            <li><img src="images/iconc2.png" alt="icon-1" /> <span>Hôm nay: <?=$today_visitors?></span></li>
            <li><img src="images/iconc3.png" alt="icon-1" /> <span>Tuần này: <?=$week_visitors?></span></li>
            <li><img src="images/iconc4.png" alt="icon-1" /> <span>Tổng truy cập: <?=$count_online['daxem']?></span></li>
            
        </ul>

        
        <div style="clear:both"></div>
    </div>
 </div><?php */?>
  
 
 </div>
 
 
 
 
  


