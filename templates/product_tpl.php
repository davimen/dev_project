
<div class="block-content-right">
  <?php /*?><div class="title-right"><span>></span></div><?php */?>
  <div class="title_index_about"><span>
    <?=$title_detail?>
    </span></div>
  <div class="block-content">
    <?
		 foreach((array)$product as $k=>$v){
        ?>
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
    <? } ?>
    <div class="phantrang">
      <?=@$paging?>
    </div>
  </div>
</div>
<h1 class="visit_hidden">
  <?=$row_setting['ten_'.$lang]?>
</h1>
