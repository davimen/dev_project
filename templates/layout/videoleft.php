
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
  
  
  
 
<script>
$().ready(function(e) {
    $('.list-video').change(function(){
		url='https://www.youtube.com/embed/'+$(this).val();
		 
		$('.view_video_if').attr('src',url);
		})
});
</script>  
  
    
  <select name="video" class="list-video">
    	<?
		foreach((array)$result_videoclip as $k=>$v){
        ?>
    	<option value="<?=getIDyoutube($v['links'])?>"><?=$v['ten_vi']?></option>
        <? }?>
    </select>    
	
    
    