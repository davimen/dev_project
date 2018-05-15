<?
 
 	
	$d->reset();
    $sql = "select * from #_product_list where hienthi=1 and type='product' and noibat >0  order by stt,id desc";
    $d->query($sql);
    $result_product_list = $d->result_array();
	
	
	
	
	foreach((array)$result_product_list as $k1=>$v1){
	
	
	$d->reset();
    $sql = "select * from #_product where hienthi=1 and type='product' and id_list='".$v1['id']."'   order by stt,id desc";
    $d->query($sql);
    $result_productHot = $d->result_array();
	
?>

 
   <div class="  title_footer1"><span><?=$v1['ten_'.$lang]?></span></div>
   
   <div id="owl-doitac<?=$v1['id']?>" class="owl-carousel owl-theme">
   
  <?
		 foreach((array)$result_productHot as $k=>$v){
        ?>
    <div class="products-item <?=(($k+1)%3==0)?'end_right':''?>">
       <div class="bg_product"> <a href="san-pham/<?=$v['tenkhongdau']?>.html"> <img src="thumb/280x369/1/<?=_upload_product_l.$v['photo']?>" alt="<?=$v['ten_'.$lang]?>"/></a> </div>
      <div class="name-block"> <a href="san-pham/<?=$v['tenkhongdau']?>.html">
        <h3>
          <?=catchuoi($v['ten_'.$lang],50)?>
        </h3>
        </a> 
        <p>Mã SP: <?=$v['masp']?></p>	
        <span class="price-product">Giá: <span>
        <?=format_money($v['giaban'],' đ','Liên hệ')?>
        </span></span>
          <a href="<?=$v['tenkhongdau']?>.htm"  class="btn_view_detail">   </a>
      </div>
    </div>
    <? } ?>
  
  
   </div>
  
  <script>
$(document).ready(function() {
 
  var owl = $("#owl-doitac<?=$v1['id']?>");
 
  owl.owlCarousel({
     
      items:4,
      navigation : false,
	  pagination:false,
	  stopOnHover:true,
	  autoPlay : 3000
 
  });
 
});
</script>
  
 <? }?>
 

 