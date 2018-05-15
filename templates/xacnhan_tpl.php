<?php
	$script_php .="
		<script>
			$(document).ready(function(e) {
			      $('#submit_thanhtoan').click(function(e){ 
			          var ten = '".$_POST['ten']."';
			          var dienthoai = '".$_POST['dienthoai']."';
			          var diachi = '".$_POST['diachi']."';
			          var email = '".$_POST['email']."';
			          var noidung = '".$_POST['noidung']."';
			          var phuongthuc = $('input[name=phuongthuc]:checked').val();

			          if(ten==''){
				          	alert('Bạn chưa nhập tên . ');
				          	$('#ten').focus();
				          	return false;
			          } else if(dienthoai==''){
				          	alert('Bạn chưa nhập điện thoại . ');
				          	$('#dienthoai').focus();
				          	return false;
			          } else if(diachi==''){
				          	alert('Bạn chưa nhập địa chỉ . ');
				          	$('#diachi').focus();
				          	return false;
			          } else if(email==''){
				          	alert('Bạn chưa nhập email . ');
				          	$('#email').focus();
				          	return false;
			          } else if(!phuongthuc){
				          	alert('Bạn chưa chọn phương thức thanh toán . ');
				          	return false;
			          } else {
			          		$.ajax({
					            type:'POST',
					            url:'ajax/thanhtoan.php',
					            data:{phuongthuc:phuongthuc,ten:ten,dienthoai:dienthoai,diachi:diachi,email:email,noidung:noidung},
					            success: function(result) {
					            	if(result!=0){
					            		alert('chúc mừng bạn đã đặt hàng thành công .');
					            		window.location.href='index.html';
					            	} else{
					            		alert('Hệ thống bị lổi vui lòng thực hiện lại sau vài giây .');
					            	} 
					                
					            }
				          	});
			          }
			        });
			    });
		</script>";
?>
<div id="info">
<div id="sanpham">
        <div class="thanh_title"><h2>Xác Nhận Thanh Toán</h2></div>
     	<form method="post" name="frm_order" action="http://<?=$config_url?>/noidia_php/do.php" enctype="multipart/form-data"  id="frm_order"> </form>
        <div class="khung" style="background:#fff;">
              
        <table border="0" cellpadding="5px" cellspacing="1px" width="100%" class="giohang_tk">

	           <tr class="menu_giohang" >
		           <td class="res_cart">STT</td>
		           <td>Sản phẩm</td>
		           <td>Số lượng</td>
		           <td class="res_cart">Tổng giá</td>
	           </tr>

	    		<?php 
				if(is_array($_SESSION['cart'])){
					$max=count($_SESSION['cart']);
					for($i=0;$i<$max;$i++){
						$pid=$_SESSION['cart'][$i]['productid'];
						$q=$_SESSION['cart'][$i]['qty'];
						$size=$_SESSION['cart'][$i]['size'];
					$mausac=$_SESSION['cart'][$i]['mausac'];
						$pname=get_product_name($pid);
						if($q==0) continue;
				?>
	    		<tr class="form_giohang">
	        		<td width="5%" class="res_cart"><?=$i+1?></td>
	                <td   class="tt_cart"><a href="san-pham/<?=$pid?>/<?=changeTitle($pname)?>.html">
	                    <img src="thumb/60x60/2/upload/product/<?=get_thumb($pid)?>" alt="<?=$pname?>" class='img' />
	                    <h3><?=$pname?> </h3>
						<span>Giá : <?=number_format(get_price($pid),0, ',', '.')?>&nbsp;đ</span><br/>
						<?php if($size){?>
					<b>Size : <?=$size?></b><br/>
					<?php } ?>
					<?php if($size){?>
					<b>Màu sắc  : <?=$mausac?></b>
					<?php } ?>

	                </a></td>
	                <td ><?=$q?></td>                    
	                <td width="10%" class="res_cart capnhat_price_<?=$pid?>"><?=number_format(get_price($pid)*$q,0, ',', '.')?>&nbsp;đ</td>
	    		</tr>
	            <?php } ?>
					
	            <tr class="tonggia">
	            	<td colspan="4" >Tổng giá : <b class="capnhat_full"><?=number_format(get_order_total(),0, ',', '.')?>&nbsp;đ</b></td>
	            </tr>
				<?php }	else{ echo "<tr bgColor='#FFFFFF'><td colspan='5'>Bạn Không có sản phẩm nào trong giỏ hàng</td>"; } ?>
	        
	        </table>

        <div class="xacnhan">
        <div class="khungxn">
        		<h4>Xác nhận thông tin giao hàng </h4>
        		<p><label><b>Tên :</b> <?=$_POST['ten']?></label></p>
        		<p><label><b>Địa chỉ : </b><?=$_POST['diachi']?></label></p>
        		<p><label><b>Điện thoại :</b> <?=$_POST['dienthoai']?></label></p>
        		<p><label><b>Email : </b><?=$_POST['email']?></label></p>
        		<p><label><b>Nội dung : </b><?=$_POST['noidung']?></label></p>
        </div>

		<div class="phuongthuc">
		<h4>Phương thức thanh toán </h4>
        <p><label> <input type="radio" name="phuongthuc" value="Thanh toán khi nhận hàng" /><span> </span>Thanh toán khi nhận hàng  . <br /><?php /*?><strong style="color:rgba(102,102,102,1); text-transform:capitalize; font-weight:100;"><b>Miễn Phí </b>, áp dụng cho khu vực TP . Hồ Chí Minh</strong><?php */?></label></p>

                 
        <p> <label> <input type="radio" name="phuongthuc" value="Thanh toán tại cửa hàng" /> <span></span> Thanh toán qua chuyển khoản.  <br /><strong style="color:rgba(102,102,102,1); text-transform:capitalize; font-weight:100;">Thanh toán tại : <?=$row_setting['diachi_'.$lang]?></strong></label></p>
		</div>

        </div>
    
	    <div style=" float:right; padding-bottom:20px; padding-top:20px;" align="right">
	        <input  id="submit_thanhtoan" title='tiếp tục' alt='tiếp tục' align="right" type="button" name="next" value="Thanh Toán" style="cursor:pointer;" style="padding:2px;" class="g_muatiep"/>
	    </div>
    
</form>
                
    </div>
    </div>
</div>