<?php

 
  
  
    
  
  
	 
   $d->reset();
    $sql = "select * from #_product_list where hienthi=1 and type='product' and noibat >0 order by stt,id desc";
    $d->query($sql);
    $result_porducts_list = $d->result_array();

 
  
?>
<script>
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
</script>
 <div class="block-left">
  
  
 
 <div class="content-left block_danhmuc_sanpham">
 	<div class="title_left">DANH MỤC SẢN PHẨM </div>
     <div style=" clear:both"></div>
    <div class="block-content-left">
 	<ul class="menuleft"><?
  foreach((array)$result_porducts_list as $k=>$v){
 ?>
    	<li> <img src="<?=_upload_product_l.$v['thumb']?>"/> <a href="san-pham/<?=$v['tenkhongdau']?>"><?=$v['ten_vi']?></a>
        	<ul>
             <?
			
				$sql = "select * from #_product_cat where hienthi=1 and type='product' and id_list='".$v['id']."' order by stt,id desc  ";
				$d->query($sql);
				$result_product_cat11 = $d->result_array();
			foreach((array)$result_product_cat as $k1=>$v1){
            ?>
         	<li> <a href="san-pham/<?=$v['tenkhongdau']?>/<?=$v1['tenkhongdau']?>"><?=$v1['ten_vi']?></a></li>
            <? }?>
            </ul>
        </li>
    
   <? }?>
            
    </ul>
    </div>
 </div>
 
 


 

 
 
 
 
 
    

  


 
 
  
 
 </div>
 
 
 
 
  


