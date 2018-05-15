<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="js/magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="js/magiczoomplus/magiczoomplus.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function() {

      $('.btn_muahang').click(function(e) {
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
 

<?
	$d->reset();
	$sql = "select noidung_$lang from #_company where type='nguoiban' ";
	$d->query($sql);
	$result_thongtin = $d->result_array();
?>


<div class="block-content-right">
  <div class="title_index_about"><span>
   <?=$title_detail?> <?=_chitiet?>
    </span></div>
      <div class="padding0 content-boder col-lg-12 col-md-12 col-xsm-12 col-xs-12">
    
    <div class=" padding0 col-md-6 col-sm-6 col-xsm-12 col-xs-12">
      <div class="frame_images" >
                <div class="app-figure" id="zoom-fig">
                <a href="<?=_upload_product_l.$row_detail['photo']?>" id="Zoom-1" class="MagicZoom" title="<?=$row_detail['ten_'.$lang]?> .">
                <img src="<?=_upload_product_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"  /></a>
                </div>

                <div class="selectors">
                <?php   include _template."layout/jssor.php";?>
                </div>
      </div>
     </div>    
  <ul class="khung_thongtin">
                <li><h1><?=$row_detail['ten_'.$lang]?></h1></li>
               
              <li class="text-info"><b> Mã sản phẩm: </b> <?=$row_detail['masp']?> </li> 
                <li class="gia_detail"><b><?=_gia?> :</b> <?php if($row_detail['giaban']==0) echo "Liên Hệ"; else echo number_format ($row_detail['giaban'],0,",",".")." vnđ ";?></li>
                <? 
                if($row_detail['giacu']>0){
                ?>
                <li class="gia_detail_old"><b>Giá cũ :</b> <?php if($row_detail['giacu']==0) echo "Liên Hệ"; else echo number_format ($row_detail['giacu'],0,",",".")." vnđ ";?></li> 
                 <? }?>
                 <?php /*?>  <li class="text-info"><b>Tình trạng:</b> <?=$row_detail['tinhtrang']?> </li> <?php */?>
                
            <?php /*?>   <li class="btn_muangay"><a href="#muangay" class="fancybox"><img src="images/bg_muangay.png" alt="mua ngay" /></a></li> <?php */?>
                <li class="mota_detail"><?=$row_detail['mota_'.$lang]?></li>
                  <li class="mota_detail"><?
		   include _template.'layout/share_social.php';
         ?></li>
               
               <?php /*?> <li class="gia_detail"><button data-id="<?=$row_detail['id']?>" class="btn_muahang">Mua ngay</button> </li> <?php */?>
               
          

                  
              

       </ul>
      
         
         
         
   <div class="  block_content_detail col-lg-12 col-md-12 col-xsm-12 col-xs-12">  
         
 
   
<div class="title_index_about"><span><?=_thongtinsanpham?></span></div>
    <div style=" clear:both"></div>
   
         <?=$row_detail['noidung_'.$lang]?>
         
         
         </div>
     </div>
 	    
    
     
    <div style=" clear:both"></div>
   
   <div class="title_index_about"><span>Sản phẩm khác</span></div>
    
    <div class="row10">
    <div class="block-content-duan col-lg-12 col-md-12 col-xsm-12 col-xs-12">
   	<?
		 foreach((array)$product as $k=>$v){
        ?>  <div class="products-item <?=(($k+1)%4==0)?'end_right':''?>">
      <div class="bg_product"> 
      <a itemprop="url" href="san-pham/<?=$v['tenkhongdau']?>.html"> 
      <img src="thumb/280x320/2/<?=_upload_product_l.$v['photo']?>" alt="<?=$v['ten_'.$lang]?>"/></a> </div>
      <div class="name-block"> <a href="san-pham/<?=$v['tenkhongdau']?>.html">
        <h3 itemprop="name">
          <?=catchuoi($v['ten_'.$lang],150)?>
        </h3>
        </a> 
        <span class="price-product">
        <!--  <a  href="san-pham/<?=$v['tenkhongdau']?>.html"   class="btn_view_detail"> <strong>Xem thêm </strong>  </a> -->
         <span class="price">
        <strong>Giá:</strong> <?=format_money($v['giaban'],' đ','Liên hệ')?>
        </span> 
         
      </div>
    </div>
    	<? } ?>
        </div>
        
           <div class="phantrang"><? //=$paging['paging']?></div>
           
           </div>
    
    
</div>

<a class="fancybox  btn_dathang1" href="#muangay"></a>

<div id="muangay" class="block-frm-dangky">
<h3>Đăng ký đặt hàng</h3>
<form action="dat-hang.html" method="post">
<table width="100%" border="0">
  <tr>
    <td><label>Họ tên</label> <input required="required" name="hoten" placeholder="Họ tên" /></td>
  </tr>
  <tr>
    <td><label>Điện thoại</label> <input  required="required" name="dienthoai" placeholder="Điện thoại" /></td>
  </tr>
  <tr>
    <td><label>Email</label> <input name="email" type="email" required="required" placeholder="Nhập Email" /></td>
  </tr>
  <tr>
    <td><label>Địa chỉ</label> <input  required="required" name="diachi" placeholder="Địa chỉ" /></td>
  </tr>
  <tr>
    <td><label>Tên sản phẩm</label> <input name="tensanpham" value=" <?=$row_detail['ten_'.$lang]?>"  placeholder="Tên sản phẩm"  required="required" /></td>
  </tr>
  <tr>
  <td><label>Số lượng</label> <input name="soluong" type="number" min="1" value="1" required="required" placeholder="Số lượng" /></td>
  </tr>
  
   <tr>
  <td><label>Nội dung</label> 
  <textarea name="noidung" required="required"></textarea></td>
  </tr>
  <tr>
    <td><button class="btn_dathang1"><img class="btn_dathang2" src="images/bg_dathang1.png" alt="dat hang" /></button> <label>&nbsp;</label>  </td>
  </tr>
</table>
</form>
</div>

<?php /*?><script>
$().ready(function(e) {
    $('.btn_muahang').click(function(){
		$('.btn_dathang1').trigger('click');
		
		})
});
</script><?php */?>
 

 