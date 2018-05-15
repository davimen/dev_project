<?php
$d->reset();
$sql = "select * from #_photo where hienthi=1 and type='bg_header'    order by stt,id desc";
$d->query($sql);
$result_bgheader = $d->result_array();


?>
<header id="header"> 
<?php /*?><div class="line_header">
<div class="container">

<span class="address_top">
<?=$row_setting['diachi_vi']?>
</span> 
<span class="email_top">
<?=$row_setting['email']?>
</span> 




<ul class="list_socialTop">
<li><span>Mạng xã hội:</span></li>
<?
foreach((array)$result_socialtop as $k=>$v){
?>
<li><a target="_blank" href="<?=$v['link']?>"><img src="<?=_upload_hinhanh_l.$v['photo_vi']?>" alt="<?=$v['ten_vi']?>" /> </a></li>
<? } ?>
</ul>

</div>
</div><?php */?>
<div class="container">
  <div class="block_logo1"> <a href="index.html">
    <img src="<?=_upload_hinhanh_l.$result_bannerLogo[0]['photo_vi']?>" /></a> </div>
  <div id="logo"><a href="trang-chu.html">
<!-- <object width="1200" height="140" data="<?=_upload_hinhanh_l.$result_bannerTop[0]['photo_vi']?>" type="application/x-shockwave-flash">
        <param value="<?=_upload_hinhanh_l.$result_bannerTop[0]['photo_vi']?>" name="movie">
        <param value="high" name="quality">
        <param value="transparent" name="wmode">
        </object>  --> 


   <img src="<?=_upload_hinhanh_l.$result_bannerTop[0]['photo_vi']?>"   alt="logo" > </a> <strong class="block_hotline"><strong>
    <?=$row_setting['dienthoai']?>
  </strong></strong> </div>

<!--    <ul class="list_info_top">
    <li><strong>Địa chỉ: <?=$row_setting['diachi_vi']?></strong></li>
     <li><strong>Hotline: <?=$row_setting['hotline']?></strong>  <strong>Email: <?=$row_setting['email']?></strong> </li>  
  </ul>  
 -->


  <div style=" clear:both"></div>
</div>
<div style=" clear:bold"></div>
<nav class="top-menu">
  <div class="container">
    <ul>

      <li><a href="./">Trang chủ</a></li>   
      <li><a href="gioi-thieu.html">Giới thiệu</a></li>   
    
 
      <li><a href="san-pham.html">Sản phẩm</a>
        <ul>
          <?
          foreach((array)$result_product_list as $k=>$v){

            $d->reset();
            $sql = "select * from #_product_cat where hienthi=1 and type='product'  and noibat >0 order by stt,id desc";
            $d->query($sql);
            $result_product_cat1 = $d->result_array();

            ?>
            <li><a href="san-pham/<?=$v['tenkhongdau']?>"><?=$v['ten_vi']?></a>
              <ul>
                <?
                foreach((array)$result_product_cat as $k1=>$v1){
                  ?>
                  <li><a href="san-pham/<?=$v['tenkhongdau']?>/"><?=$v1['ten_vi']?></a></li>
                  <? }?>
                </ul>
              </li>
              <? } ?>
            </ul>
        
          </li>            
         
           <li><a href="tin-tuc.html">Tin tức</a></li>   
           <li><a href="tuyen-dung.html">Tuyển dụng</a></li>   

          <li><a href="lien-he.html">Liên hệ</a></li>   
        </ul>
        <div style="clear:both"></div>
      </div>
     <!--  <div class="block-search">
        <form action="tim-kiem.html" method="post">
          <input name="keywords" placeholder="Tìm kiếm" />
          <button>&nbsp; </button>
        </form>
      </div>  -->
    </nav>

  </header>
  <script type="text/javascript">
    $(document).ready(function() {

      $('.btn_addtocart').click(function(e) {
        var pid = $(this).attr('data-id');

        $.ajax({
          type: "POST",
          url: "ajax/add_giohang.php", 
          data: {pid:pid},
          success: function(string){
            setTimeout(function(){
              alert('Chúc mừng bạn đã thêm sả phẩm vào giỏ hàng thành công')
              window.location.href='gio-hang.html';
            },500)
          }          
        });
      });

    });
  </script>


