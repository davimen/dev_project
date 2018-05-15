
<?
   $d->reset();
  $sql = "select * from #_video where hienthi=1 and  type='video'  order by stt,id desc";
  $d->query($sql);
  $result_videoclip = $d->result_array();
   
    $id_video=end(explode('v=',$result_videoclip[0]['links']));
 
?>

<div class="result_video result_video">
 	<iframe width="100%" class="view_video_if" height="540" src="https://www.youtube.com/embed/<?=$id_video?>" frameborder="0" allowfullscreen></iframe>
    </div>
  
  
  
  <div id="owl-video" class="owl-carousel owl-theme">
	<?
	 foreach((array)$result_videoclip as $k=>$v){
    ?>
  <div data-id="<?=getIDyoutube($v['links'])?>" class="item view_video"><img src="<?=getimgyoutube($v['links'])?>"></div>
  <? }?>

</div>
<script>
$().ready(function(e) {
    $('.view_video').click(function(){
		url='https://www.youtube.com/embed/'+$(this).attr('data-id');
		
		$('.view_video_if').attr('src',url);
		})
});
</script>  
  
    
   <?php /*?> <select name="video" class="list-video">
    	<?
		foreach((array)$result_videoclip as $k=>$v){
        ?>
    	<option value="<?=$v['id']?>"><?=$v['ten_vi']?></option>
        <? }?>
    </select>  <?php */?>
	
    
    <script>
$(document).ready(function() {
 
  var owl = $("#owl-video");
 
  owl.owlCarousel({
     
      items:6,
	 
      navigation : false,
	  pagination:false,
	  stopOnHover:true,
	  autoPlay : 3000
 
  });
 
});
</script>
    