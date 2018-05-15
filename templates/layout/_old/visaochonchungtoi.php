<?
	       $d->reset();
  $sql = "select * from #_baiviet where hienthi=1 and   type='vi-sao-chon-chung-toi' order by stt,id desc ";
  $d->query($sql);
  $result_visochonchungtoi = $d->result_array();	

 
?>
<div class="block_thogtin_main">
<div class="container">
<div style=" clear:both"></div>
<div class="title_index_about title_service_home"><span>Vì sao chọn chúng tôi</span></div>
<?
	foreach((array)$result_visochonchungtoi as $k=>$v){
?>
 <div class="item_infor <?=(($k+1)%3==0)?'end_right':''?>">
 <img src="<?=_upload_baiviet_l.$v['photo']?>" />
 <h3><?=$v['ten_vi']?></h3>
<span><?=$v['mota_vi']?></span>

 </div>
 <? }?>
 
 
<div style=" clear:both"></div>
</div>
 </div>

 
