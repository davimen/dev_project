






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
          
 
  
  <ul class="list-news">
 
  <?php foreach($tintuc as $tinkhac){?>
    <li><a href="<?=$com?>/<?=$tinkhac['tenkhongdau']?>.html" ><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><?=$tinkhac['ten_'.$lang]?></a></li>
    
    <?php }?>
              
              </ul>      
  </div>  
  <? }?>
</div>














 