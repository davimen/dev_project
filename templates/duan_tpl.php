 

 


<div class="block-content-right">
 
     
<div class="title_index_about"><span>
    <?=$title_detail?>
    </span></div>
    
    
    <div class="block-about">
    
        
 <?php foreach((array)$tintuc as $k=>$v){  ?> 
        <div class="block-project   <?=(($k+1)%4==0)?'end_right':''?>">
            <a href="<?=$com?>/<?=$v['tenkhongdau']?>.html" >
              <img class="img-news" src="thumb/295x200/1/<?=_upload_baiviet_l.$v['photo']?>" border="0" align="left" /></a>
			 
            <h3><a href="<?=$com?>/<?=$v['tenkhongdau']?>.html"><?=$v['ten_'.$lang]?></a></h3>
            
        </div>
       <?php }?>
    
        
       <div class="phantrang"><?=$paging?></div>
    
  </div>
  
  
    
</div>






  