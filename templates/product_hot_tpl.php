<?

	$per_page = 12; // Set how many records do you want to display per page.
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;
 			$where = " #_product where hienthi=1 and type='product' and noibat >0 ";
			$where .= $where_tk;
			$where .= " order by stt,ngaytao desc ";

			$sql = "select ten_$lang,id,thumb,photo,mota_$lang,giacu,giaban,tenkhongdau,rate,masp,sp_banchay from $where $limit";
			$d->query($sql);
			$product = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);


?>


<div class="block-content-right">
  <?php /*?><div class="title-right"><span>></span></div><?php */?>
  <div class="title_index_about"><span>
    <?=$title_detail?>
    </span></div>
  <div class="block-content"> 
    <?
		 foreach((array)$product as $k=>$v){
        ?>
    <div class="products-item <?=(($k+1)%3==0)?'end_right':''?>">
       <div class="bg_product"> <a href="san-pham/<?=$v['tenkhongdau']?>.html"> <img src="thumb/350x400/1/<?=_upload_product_l.$v['photo']?>" alt="<?=$v['ten_'.$lang]?>"/></a> </div>
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
    <div class="phantrang">
      <?=@$paging?>
    </div>
  </div>
</div>
<h1 class="visit_hidden">
  <?=$row_setting['ten_'.$lang]?>
</h1>
