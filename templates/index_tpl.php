<?
 
 	
	$d->reset();
    $sql = "select * from #_product_list where hienthi=1 and type='product' and noibat >0  order by stt,id desc";
    $d->query($sql);
    $result_product_list = $d->result_array();
	
	
		$d->reset();
    $sql = "select * from #_product where hienthi=1 and type='product' and sp_banchay >0  order by stt,id desc";
    $d->query($sql);
    $result_productbanchay = $d->result_array();
	
	
	
		$d->reset();
    $sql = "select * from #_baiviet where hienthi=1 and type='dichvu'   order by stt,id desc";
    $d->query($sql);
    $result_dichvuNew = $d->result_array();

      $d->reset();
    $sql = "select * from #_baiviet where hienthi=1 and type='chinhanh'   order by stt,id desc";
    $d->query($sql);
    $result_chinhanh = $d->result_array();
	
 ?>
 

  <div class="title_index_about"><span> SẢN PHẨM CHÍNH </span></div>
<div class="block-content">


 <div id="owl-product" class="owl-carousel owl-theme">
  <?
     foreach((array)$result_productbanchay as $k=>$v){
        ?>
 <div class="item">
   <div class="products-item <?=(($k+1)%4==0)?'end_right':''?>">
      <div class="bg_product"> 
      <a itemprop="url" href="san-pham/<?=$v['tenkhongdau']?>.html"> 
      <img src="thumb/280x320/2/<?=_upload_product_l.$v['photo']?>" alt="<?=$v['ten_'.$lang]?>"/></a> </div>
      <div class="name-block"> <a href="san-pham/<?=$v['tenkhongdau']?>.html">
        <h3 itemprop="name">
          <?=catchuoi($v['ten_'.$lang],150)?>
        </h3>
        </a> 
        <span class="price-product">
        <!--  <a  href="san-pham/<?=$v['tenkhongdau']?>.html"   class="btn_view_detail"> <strong>Xem thêm </strong>  </a> -->
         <span class="price">
        <strong>Giá:</strong> <?=format_money($v['giaban'],' đ','Liên hệ')?>
        </span> 
         
      </div>
    </div>

 </div>
  
 <? }?>
 </div>

 <script>
$(document).ready(function() {
 
  var owl = $("#owl-product");
 
  owl.owlCarousel({
     
      items:4,
      navigation :true,
    pagination:false,
    stopOnHover:true,
    autoPlay : 3000
 
  });
 
});
</script>

   
  <!-- <div class="phantrang">
    <?=@$paging?>
  </div> -->
  <div style="clear:bold"></div>
</div>


 
 