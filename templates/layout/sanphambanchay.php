<?
 
 	
	$d->reset();
    $sql = "select * from #_product_list where hienthi=1 and type='product' and noibat >0  order by stt,id desc";
    $d->query($sql);
    $result_product_list = $d->result_array();
 	$d->reset();
    $sql = "select * from #_baiviet where hienthi=1 and type='congtrinh' and noibat >0   order by stt,id desc";
    $d->query($sql);
    $result_congtrinh = $d->result_array();
	
	
	$d->reset();
    $sql = "select * from #_photo where hienthi=1 and type='quangcao'  order by stt,id desc";
    $d->query($sql);
    $result_quangcao = $d->result_array();
	
	
?>

 <div id="owl-sanphambanchay" class="owl-carousel owl-theme">
 
 <?
     foreach((array)$result_congtrinh as $k=>$v){
        ?>

    <div class="item">
    <div class="products-item <?=(($k+1)%4==0)?'end_right':''?>">
      <div class="bg_product"> 
      <a itemprop="url" href="cong-trinh/<?=$v['tenkhongdau']?>.html"> 
      <img src="thumb/270x210/1/<?=_upload_baiviet_l.$v['photo']?>" alt="<?=$v['ten_'.$lang]?>"/></a> </div>
      <div class="name-block"> <a href="cong-trinh/<?=$v['tenkhongdau']?>.html">
        <h3 itemprop="name">
          <?=catchuoi($v['ten_'.$lang],50)?>
        </h3>
        </a> 

        <span>  <?=catchuoi($v['mota_'.$lang],150)?></span>
        
         
      </div>
    </div> </div>
      
    <? } ?>
 
</div>
 <script>
$(document).ready(function() {
 
  var owl = $("#owl-sanphambanchay");
 
  owl.owlCarousel({
     
      items:3,
      navigation :true,
    pagination:false,
    stopOnHover:true,
    autoPlay : 3000
 
  });
 
});
</script>