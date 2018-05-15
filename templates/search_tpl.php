


<div class="block-content-right">
   <div class="title_index_about"><span>
    <?=$title_detail?>
    </span></div>
  <div class="block-content">
    <?
		 foreach((array)$product as $k=>$v){
        ?>
    <div class="products-item <?=(($k+1)%3==0)?'end_right':''?>">
      <div class="bg_product"> 
      <a itemprop="url" href="san-pham/<?=$v['tenkhongdau']?>.html"> 
      <img src="thumb/370x310/1/<?=_upload_product_l.$v['photo']?>" alt="<?=$v['ten_'.$lang]?>"/></a> </div>
      <div class="name-block"> <a href="san-pham/<?=$v['tenkhongdau']?>.html">
        <h3 itemprop="name">
          <?=catchuoi($v['ten_'.$lang],150)?>
        </h3>
        </a> 
        <span class="price-product">
         <a  href="san-pham/<?=$v['tenkhongdau']?>.html"   class="btn_view_detail"> <strong>Xem thêm </strong>  </a>
       <!--  <span class="price">
        <strong>Giá:</strong> <?=format_money($v['giaban'],' đ','Liên hệ')?>
        </span> -->
        <? /*
        <!-- 
         
        <span>
      <strong> Giá lẻ:</strong> <?=format_money($v['giaban'],' đ','Liên hệ')?>
        </span></span>
           <a  href="san-pham/<?=$v['tenkhongdau']?>.html"   class="btn_view_detail"> <strong>Chi tiết </strong>  </a> -->*/?>
      </div>
    </div>
    <? } ?>
    <div class="phantrang">
      <?=@$paging?>
    </div>
  </div>
</div>
 