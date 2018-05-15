 

 


<div class="block-content-right">
 
    <div class="title_index_about"><span><?=$title_detail?></span></div>

    
    
    <div class="block-about">
    
        
 <?php foreach((array)$tintuc as $k=>$v){  ?> 
        <div class="block-news   <?=(($k+1)%2==0)?'end_right':''?>">
            <a href="<?=$com?>/<?=$v['tenkhongdau']?>.html" >
              <img class="img-news" src="thumb/295x175/1/<?=_upload_baiviet_l.$v['photo']?>" border="0" align="left" /></a>
			 
            <h3><a href="<?=$com?>/<?=$v['tenkhongdau']?>.html"><?=$v['ten_'.$lang]?></a></h3>
            <span><?=_substr($v['mota_'.$lang],300)?></span>
            <div class="xemtiep"><a href="<?=$com?>/<?=$v['tenkhongdau']?>.html" ><?=_xemtiep?> &raquo;</a></div>
        </div>
       <?php }?>
    
        
       <div class="phantrang"><?=$paging?></div>
    
  </div>
  
  
    
</div>
