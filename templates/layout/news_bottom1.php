<?
	$d->reset();
      $sql = "select * from #_baiviet where type='tintuc' and noibat >0    order by stt,id desc limit 0,3";
    $d->query($sql);
    $result_newsHot = $d->result_array();
?>
  

       
 
    <div class="block-content_list_news  ">
  <?php 
   foreach((array)$result_newsHot as $k=>$v)  {  ?> 
   	 
     <div class="block-news  radius_index <?=(($k+1)%2==0)?'end_right_index':''?>">
            <a href="tin-tuc/<?=$v['tenkhongdau']?>/<?=$v['id']?>.html" >
            <img class="img-news" src="thumb/220x220/1/<?=_upload_baiviet_l.$v['photo']?>" border="0" align="left" /></a>

            <h3><a href="tin-tuc/<?=$v['tenkhongdau']?>/<?=$v['id']?>.html" ><?=$v['ten_'.$lang]?></a></h3>
            <?php /*?><span  class="post-date"><?=_ngaydang?> : <?=date('d/m/Y - g:i A',$v['ngaytao']);?></span><br /><?php */?>
           <span> <?=_substr($v['mota_'.$lang],120)?></span>
            <?php /*?><div class="xemtiep"><a href="tin-tuc/<?=$v['tenkhongdau']?>/<?=$v['id']?>.html" ><?=_xemtiep?> &raquo;</a></div><?php */?>
        </div>
     
        
       <?php } ?>       
     
     </div>
     
     