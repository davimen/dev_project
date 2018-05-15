





<div class="block-content-right">
    <div class="title_index_about"><span><?=$title_detail?></span></div>
 
    <div class="block-about">
        
		 <h1 class="title-page"> <?=$row_detail['ten_'.$lang]?></h1>
        
        <i><?=$row_detail['mota_'.$lang]?></i>
             <?=$row_detail['noidung_'.$lang]?>
         <? //=get_social('','comment');?>
         <?
		   include _template.'layout/share_social.php';
         ?>
		</div>
        <?
		 if(count($tintuc)>0){
        ?>
        
        <div style=" clear:both"></div>
        <div class="title_index_about"><span><?=_othernews?></span></div>


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
  
  <?php /*?><ul class="list-news">
 
  <?php foreach($tintuc as $tinkhac){?>
    <li><a href="<?=$com?>/<?=$tinkhac['tenkhongdau']?>.html" ><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><?=$tinkhac['ten_'.$lang]?></a></li>
    
    <?php }?>
              
              </ul><?php */?>      
  </div>  
  <? }?>
</div>














 