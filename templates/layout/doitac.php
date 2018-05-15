<?
 
	
	  $d->reset();
    $sql = "select * from #_photo where hienthi=1 and type='doitac'  order by stt,id desc";
    $d->query($sql);
    $result_doitac = $d->result_array();
?>
 <div class="block-doi-tac">
<div class="container">

	<!--   <div class="title_index_about"><span>Đại Lý Đang Hợp Tác</span></div> -->

 <div id="owl-doitac" class="owl-carousel owl-theme">
	<?
	 foreach((array)$result_doitac as $k=>$v){
    ?>
  <div class="item"><a target="_blank" href="<?=$v['link']?>"><img src="thumb/250x155/2/<?=_upload_hinhanh_l.$v['photo_vi']?>"></a></div>
  <? }?>

</div>
<div style=" clear:both"></div>
</div>
 
</div>

<script>
$(document).ready(function() {
 
  var owl = $("#owl-doitac");
 
  owl.owlCarousel({
     
      items:8,
      navigation :true,
	  pagination:false,
	  stopOnHover:true,
	  autoPlay : 3000
 
  });
 
});
</script>