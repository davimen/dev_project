<?
 
    
    $d->reset();
  $sql = "select * from #_video where hienthi=1  order by stt,id desc";
  $d->query($sql);
  $result_videoclip = $d->result_array();

  $id_video=end(explode('v=',$result_videoclip[0]['url']));
  

   
  
    $d->reset();
    $sql = "select * from #_baiviet_list where type='tintuc'    order by stt,id desc ";
    $d->query($sql);
    $result_newsHot_list = $d->result_array();
  
  
  $d->reset();
    $sql = "select * from #_baiviet where type='hotro' and hienthi >0    order by stt,id desc ";
    $d->query($sql);
    $result_hotroList = $d->result_array();
  
  
  
  
  
?>
<?php /*?><script>
$().ready(function(e) {
    $('.list-video').change(function(){
    $id_video=$(this).val();
    $.ajax({
            url:"ajax/ajax_video.php",
            type:"post",
            data:"id_video="+$id_video,
            async:true,
            success:function(result){
              $(".result_video").html(result);
            }
          }); 

    
    })
});
</script><?php */?>

<div style=" clear:both"></div>
<div class="block-full-info">
  <div class="container">
     <div class="block-col-footer">
  <div class="title_footer"><strong>Video clip</strong></div>
   <?
   include _template.'layout/video.php';
   ?>
   </div> 
 
  <div class="block-col-footer">
   <div class="title_footer"><strong>TIN TỨC Mới</strong></div>
   <?
   include _template.'layout/news_bottom2.php';
   ?>
   </div>
  
    
    
    <div style=" clear:both"></div>
  </div>
</div>

 





 
