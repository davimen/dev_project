<?php
	$d->reset();
	$sql = "select * from #_yahoo where hienthi=1 order by stt,id desc ";
	$d->query($sql);
	$result_yahoo = $d->result_array();
?>
 <div class="content_suportonline">
 	<div class="block_hotline_bottom">
    	<p><?=$row_setting['hotline']?></p>
        <p><?=$row_setting['dienthoai']?></p>
    </div>
    
    <?
	 foreach((array)$result_yahoo as $k=>$v){
    ?>
    <table width="200" border="0" class="table_yahoo">
  <tr>
    <td><a href="skype:<?=$v['skype']?>?chat"><img src="images/icon_skype.png" alt="skype" /></a> <a href="tel:<?=$v['yahoo']?>"><img src="images/icon_zalo.png" alt="skype" /></a> <strong><?=$v['ten']?></strong></td>
  </tr>
  <tr>
    <td><img src="images/icon_phone.png" alt="phone" /> <span><?=$v['dienthoai']?></span></td>
  </tr>
  <tr>
    <td><img src="images/icon_email.png" alt="phone" /> <span><?=$v['email']?></span></td>
  </tr>
</table>
<table width="200" border="0" class="table_yahoo">
  <tr>
    <td><a href="skype:<?=$v['skype']?>?chat"><img src="images/icon_skype.png" alt="skype" /></a> <a href="tel:<?=$v['yahoo']?>"><img src="images/icon_zalo.png" alt="skype" /></a> <strong><?=$v['ten']?></strong></td>
  </tr>
  <tr>
    <td><img src="images/icon_phone.png" alt="phone" /> <span><?=$v['dienthoai']?></span></td>
  </tr>
  <tr>
    <td><img src="images/icon_email.png" alt="phone" /> <span><?=$v['email']?></span></td>
  </tr>
</table>
 
 
	<? }?>

 </div>
 