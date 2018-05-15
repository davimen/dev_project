<?
	$d->reset();
      $sql = "select * from #_baiviet where type='tintuc' and noibat >0    order by stt,id desc limit 0,5";
    $d->query($sql);
    $result_newsHot = $d->result_array();
?>
  

       
	
 
    
    
   <div class="block_main_news_home">
   <a href="tin-tuc/<?=$result_newsHot[0]['tenkhongdau']?>.html">
            <img class="img-news" src="thumb/380x200/2/<?=_upload_baiviet_l.$result_newsHot[0]['photo']?>" border="0" align="left"></a>
            
            <a href="tin-tuc/<?=$result_newsHot[0]['tenkhongdau']?>.html"><h3><?=$result_newsHot[0]['ten_vi']?></h3></a>
            <span> <?=_substr($result_newsHot[0]['mota_'.$lang],300)?></span>
            
   </div>
       <div class="block-content_list_news  ">
  <?php 
   foreach((array)$result_newsHot as $k=>$v)  {  ?> 
   	 <?
	 if($k!=0){
     ?>
     <div class="block-news  radius_index">
            <a href="tin-tuc/<?=$v['tenkhongdau']?>.html" >
            <img class="img-news" src="<?=_upload_baiviet_l.$v['photo']?>" border="0" align="left" /></a>

            <h3><a href="tin-tuc/<?=$v['tenkhongdau']?>.html" ><?=$v['ten_'.$lang]?></a></h3>
            <?php /*?><span  class="post-date"><?=_ngaydang?> : <?=date('d/m/Y - g:i A',$v['ngaytao']);?></span><br /><?php */?>
            <?=_substr($v['mota_'.$lang],100)?>
         <?php /*?>   <div class="xemtiep"><a href="tin-tuc/<?=$v['tenkhongdau']?>.html" ><?=_xemtiep?> &raquo;</a></div><?php */?>
        </div>
     
       <? } ?>
       <?php } ?>       
     
     </div>