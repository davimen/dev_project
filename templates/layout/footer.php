<?php
?>
<?php /*?><script type="text/javascript">
$(document).ready(function() {
$('.block_register_email button').click(function(event) {
var gioitinh = $(this).html();
var email = $('.block_register_email input').val();
if(email==''){
alert('Bạn chưa nhập email');
$('.dangkymail input').focus();
} else {
$.ajax ({
type: "POST",
url: "ajax/dangky_email.php",
data: {gioitinh:gioitinh,email:email},
success: function(result) { 
if(result==0){
$('.dangkymail input').attr('value','');
alert('Đăng ký thành công ! ');
} else if(result==1){
alert('Email đã được đăng ký ! ');
} else if(result==2){
alert(' ! Đăng ký không thành công . Vui lòng thử lại ');
}
}
});
}
});
});
</script><?php */?>
<?
?>
<div style="clear:both"></div>
<div class="block-footer">
<div class="container">
<div class="block-conntent-footer">
<div class="block-footer-data">
 <span class="title_footer_bottom">THÔNG TIN LIÊN HỆ</span> 
<?=$footer['noidung_'.$lang]?>
</div>

 <div class="block-footer-data">
<span class="title_footer_bottom">ĐĂNG KÝ NHẬN TIN </span>

<?
include _template.'layout/dangkynhanemail1.php';
?>

<ul class="list-social">
	<li><strong>Kết nói với chúng tôi</strong></li>
<?
foreach((array)$result_social as $k=>$v){
?>
<li><a target="_blank" href="<?=$v['link']?>"><img src="<?=_upload_hinhanh_l.$v['photo_vi']?>" alt="<?=$v['ten_vi']?>" />
<?php /*?>  <h3><?=$v['ten_vi']?></h3><?php */?>
</a></li>
<? } ?>
</ul>
</div>
<div class="block-footer-data">
  <span class="title_footer_bottom">Bản đồ</span>  
<?
include _template.'layout/map.php';
?>
</div>

<?php 
$count_online=count_online();
?>
<!-- <div class="block-footer-data">
<span class="title_footer_bottom">Thống kê truy cập</span>
<ul class="list-counter">
<li><img src="images/iconc1.png" alt="icon-1" /> <span>Đang online: <?=$count_online['dangxem']?></span></li>
<li><img src="images/iconc2.png" alt="icon-1" /> <span>Hôm nay: <?=$today_visitors?></span></li>
<li><img src="images/iconc3.png" alt="icon-1" /> <span>Tuần này: <?=$week_visitors?></span></li>
<li><img src="images/iconc4.png" alt="icon-1" /> <span>Tổng truy cập: <?=$count_online['daxem']?></span></li>
</ul>

</div>  -->
<div style=" clear:both"></div>
</div>
<div style=" clear:both"></div>
</div>
</div>
  <div class="copyright">
<div class="container">  
2015 Copyright © THUỐC TRỪ SÂU . All rights reserved. Design by Nina.vn
 <ul class="list-counter">
<li> <span>Đang online: <?=$count_online['dangxem']?></span></li>
<li> <span>Hôm nay: <?=$today_visitors?></span></li>
<li> <span>Tuần này: <?=$week_visitors?></span></li>
<li><span>Tổng truy cập: <?=$count_online['daxem']?></span></li>
</ul>
</div>
</div>  
<?
$d->reset();
$sql = "select * from #_photo where hienthi>0 and type='popup'  order by stt,id desc";
$d->query($sql);
$result_popup11 = $d->result_array();
if(count($result_popup)>0){
?>
<a href="#popup_main"  class="fancybox popup_btn"></a>
<div id="popup_main" style=" display:none">
<a href="<?=$result_popup[0]['link']?>"><img src="<?=_upload_hinhanh_l.$result_popup[0]['photo_vi']?>" /></a>
</div>
<?
if($_SESSION['popup']==NULL){
$_SESSION['popup']=1;
?>
<script>
$().ready(function(e) {
setTimeout(function(){
$('.popup_btn').trigger('click');
},500)
});
</script>
<? } }?>
