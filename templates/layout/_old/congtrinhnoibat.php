<?php
	$d->reset();
  $sql = "select * from #_baiviet where hienthi=1 and noibat >0 and  type='cong-trinh' order by stt,id desc ";
  $d->query($sql);
  $result_congtrinhHot = $d->result_array();	
?>
<div class="block_congtrinhnoibat">
<div class="container">
<div class="title_index_about"><span>Công trình </span></div>

   <?php foreach((array)$result_congtrinhHot as $k=>$v){  ?> 
        <div class="products-item <?=(($k+1)%3==0)?'end_right':''?>">
        <h2>Công trình</h2>
          <a href="cong-trinh/<?=$v['tenkhongdau']?>/<?=$v['id']?>.html"> <h3><?=catchuoi($v['ten_'.$lang],50)?></h3></a>
        <div class="bg_product">
        <a href="cong-trinh/<?=$v['tenkhongdau']?>/<?=$v['id']?>.html">
        
        
        <img src="timthumb.php?src=<?=_upload_baiviet_l.$v['photo']?>&h=185&w=315&zc=2&q=100" alt="<?=$v['ten_'.$lang]?>"/></a>
        
        </div>
        
       
         <div class="name-block">
          
          <span class="description_sp">
       
		 <?=catchuoi($v['mota_'.$lang],150)?></span>
        <a href="cong-trinh/<?=$v['tenkhongdau']?>/<?=$v['id']?>.html"  class="btn_view_detail">Xem thêm >> </a>
         </div>
	





        </div>	
       <?php }?>


</div>
<div style="clear:both;"></div>
</div>