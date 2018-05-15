<?
	 
  $d->reset();
	$sql = "select * from #_photo where com='lienkettop' order by stt,id desc  ";
	$d->query($sql);
	$result_quangcaotop = $d->result_array();
	
  
  
	
	
?> 
<div class="container">
 <div class="block_quangcaotop">
 
 
 

	<ul>
    <?
	 foreach((array)$result_quangcaotop as $k=>$v){
    ?>
    <li><a href="<?=$v['link']?>"><img src="timthumb.php?src=<?=_upload_hinhanh_l.$v['photo_vi']?>&h=133&w=135&zc=1&q=100" /></a>
    <a href="<?=$v['link']?>"><h2><?=$v['ten_vi']?></h2></a>
    <span><?=$v['mota']?></span>
    
    </li>
    <? }?>
    
      <li><img src="images/img_phone.png" />
    <h2>Liên hệ</h2>
    <p>Phone:<?=$row_setting['hotline']?></p>
     <p style="color:#f00;">Email:<?=$row_setting['email']?></p>
    
    </li>
    
    </ul>
    
   <div style="clear:both"></div>
 </div>
 
 <div style=" clear:both"></div>
 </div>