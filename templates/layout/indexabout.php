<?
 
	  
    $d->reset();
  $sql = "select * from #_info where type='gioithieuhome' order by stt,id desc";
  $d->query($sql);
  $result_gioithieuhome = $d->result_array();
  
    $d->reset();
  $sql = "select * from #_photo where type='quangcao' order by stt,id desc";
  $d->query($sql);
  $result_quangcaotop = $d->result_array();

     $d->reset();
  $sql = "select * from #_baiviet where type='dichvu' order by stt,id desc";
  $d->query($sql);
  $result_dichvuHot = $d->result_array();
	
	
?>
 
<div class="about_index">
	<div class="container">
    	<h2 class="title_about_home"><strong>Giới thiệu</strong></h2>
        <div class="content_page">
        
        <?=$result_gioithieuhome[0]['noidung_'.$lang]?>
        
        
        
        </div>  
         <div class="content_page">
         <?
		 	foreach((array)$result_quangcaotop as $k=>$v){
         ?>
         <div class="item_sl">
        <a href="<?=$v['link']?>"><img src="<?=_upload_hinhanh_l.$v['photo_vi']?>" /></a>
      
         </div>
         
         <? }?>
         </div>
         
    <div style=" clear:both"></div>
    </div>
</div>


 <div  style="clear:both"></div>

<div class="block_dichvu_full">
<div class="container">
 <div class="title_index_about"><span>Dịch vụ chính</span></div>
<div id="owl-dichvu11" class="owl-carousel owl-theme">
	<?
	 foreach((array)$result_dichvuHot as $k=>$v){
    ?>
  <div class="item">
  <div class="block-service1   <?=(($k+1)%4==0)?'end_right':''?>">
            <a href="dich-vu/<?=$v['tenkhongdau']?>.html" >
              <img class="img-news" src="thumb/295x200/1/<?=_upload_baiviet_l.$v['photo']?>" border="0" align="left" /></a>
			 
            <h3><a href="dich-vu/<?=$v['tenkhongdau']?>.html"><?=$v['ten_'.$lang]?></a></h3>
            <span><?=catchuoi($v['mota_vi'],120)?></span>
            <a class="btn_view_more" href="dich-vu/<?=$v['tenkhongdau']?>.html">Xem thêm</a>
            
            
        </div>
  </div>
   <div class="item">
  <div class="block-service1   <?=(($k+1)%4==0)?'end_right':''?>">
            <a href="dich-vu/<?=$v['tenkhongdau']?>.html" >
              <img class="img-news" src="thumb/295x200/1/<?=_upload_baiviet_l.$v['photo']?>" border="0" align="left" /></a>
			 
            <h3><a href="dich-vu/<?=$v['tenkhongdau']?>.html"><?=$v['ten_'.$lang]?></a></h3>
            <span><?=catchuoi($v['mota_vi'],120)?></span>
            <a class="btn_view_more" href="dich-vu/<?=$v['tenkhongdau']?>.html">Xem thêm</a>
            
            
        </div>
  </div>
  <div class="item">
  <div class="block-service1   <?=(($k+1)%4==0)?'end_right':''?>">
            <a href="dich-vu/<?=$v['tenkhongdau']?>.html" >
              <img class="img-news" src="thumb/295x200/1/<?=_upload_baiviet_l.$v['photo']?>" border="0" align="left" /></a>
			 
            <h3><a href="dich-vu/<?=$v['tenkhongdau']?>.html"><?=$v['ten_'.$lang]?></a></h3>
            <span><?=catchuoi($v['mota_vi'],120)?></span>
            <a class="btn_view_more" href="dich-vu/<?=$v['tenkhongdau']?>.html">Xem thêm</a>
            
            
        </div>
  </div>   
  <? }?>

</div>
</div>
<div  style="clear:both"></div>
</div>


<script>
$(document).ready(function() {
 
  var owl = $("#owl-dichvu11");
 
  owl.owlCarousel({
     
      items:4,
      navigation : true,
	  pagination:false,
	  stopOnHover:false,
	  autoPlay : 3000
 
  });
 
});
</script>
 