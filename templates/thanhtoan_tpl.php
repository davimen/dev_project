<form name="form_giohang" action="index.php?com=thanh-toan" method="get">
	<input type="hidden" name="com" value="thanh-toan" />
	<input type="hidden" name="pid" />
	<input type="hidden" name="size" />
	<input type="hidden" name="mausac" />
    <input type="hidden" name="command" />
</form>

<?php
	if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid'],$_REQUEST['size'],$_REQUEST['mausac']);
	}
	else if($_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
	}

	$script_php .="
		<script language='javascript'>
			function xoa(pid,size,mausac){
				if(confirm('Xóa sản phẩm này ! ')){
					document.form_giohang.pid.value=pid;
					document.form_giohang.size.value=size;
					document.form_giohang.mausac.value=mausac;
					document.form_giohang.command.value='delete';
					document.form_giohang.submit();
				}
			}
		</script>
		<script language='javascript'>
			function clear_cart(){
				if(confirm('Bạn có muốn xóa tất giỏ hàng không ?')){
					document.form1.command.value='clear';
					document.form1.submit();
				}
			}
			function update_cart(){
				document.form1.command.value='update';
				document.form1.submit();
			}
			$(document).ready(function() {
				$('.capnhat_sl').keyup(function(event) {
					/* Act on the event */
					var soluong = $(this).val();
					var product = $(this).attr('name');
					var size = $(this).data('size');
					var mausac = $(this).data('mau');
					var vitri = $(this).data('i');
					$.ajax({
				            type:'POST',
				            url:'ajax/capnhat_giohang.php',
				            data:{soluong:soluong,product:product,size:size,mausac:mausac},
				            success: function(result) {
				            	var getData = $.parseJSON(result);
				            	$('.capnhat_price_'+vitri).html(getData.price_item);
				            	$('.capnhat_full').html(getData.full_item);
				            }
			        });
				});
			});
		</script>
	";
?>

<div id="info">
<div id="sanpham">
     <div class="title_index_about"><span>Thanh toán </span></div>
     <form method="post" name="frm_order" action="xac-nhan.html" enctype="multipart/form-data"  id="frm_order">
        <div class="khung" style="background:#fff;">   
           <table border="0" cellpadding="5px" cellspacing="1px" width="100%" class="giohang_tk">

           <tr class="menu_giohang" >
	           <td class="res_cart">STT</td>
	           <td>Sản phẩm</td>
	           <td>Số lượng</td>
	           <td class="res_cart">Tổng giá</td>
	           <td>Xóa</td>
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
                <td width="30%" class="tt_cart"><a href="san-pham/<?=$pid?>/<?=changeTitle($pname)?>.html">
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
                <td ><input name="<?=$pid?>" data-i="<?=$i?>" data-size="<?=$size?>" data-mau="<?=$mausac?>" value="<?=$q?>" class="capnhat_sl" /></td>                    
                <td width="10%" class="res_cart capnhat_price_<?=$i?>"><?=number_format(get_price($pid)*$q,0, ',', '.')?>&nbsp;đ</td>
                <td width="10%"><img src="images/icon/disabled.png" border="0" onclick="xoa(<?=$pid?>,'<?=$size?>','<?=$mausac?>')" width="20" style="cursor: pointer;" /></td>
    		</tr>
            <?php } ?>
				
            <tr class="tonggia">
            	<td colspan="7">Tổng giá : <b  class="capnhat_full" ><?=number_format(get_order_total(),0, ',', '.')?>&nbsp;đ</b></td>
            </tr>
			<?php }	else{ echo "<tr bgColor='#FFFFFF'><td>Bạn Không có sản phẩm nào trong giỏ hàng</td>"; } ?>
        
        </table>
    
    <div class="col-md-6 col-sm-6 col-xx-12 col-xs-12">
	    <div class="col-md-12 col-sm-12 col-xx-12 col-xs-12 cl_input block_info_payment">
	   		<label><img src="images/icon/accuont.png" alt="" /> Họ tên <span class="alert">*</span></label>
	    	<input name="ten" id="ten" class="formsubmit" value="<?=$thanhvien_tv['hoten']?>" required="required" />
	    </div>
	    
		<div class="col-md-12 col-sm-12 col-xx-12 col-xs-12 cl_input block_info_payment">
		    <label><img src="images/icon/phone.png" alt="" /> Điện thoại <span class="alert">*</span></label>
		    <input name="dienthoai" id="dienthoai" class="formsubmit" value="<?=$thanhvien_tv['dienthoai']?>" required="required" />
	    </div>
		<div class="col-md-12 col-sm-12 col-xx-12 col-xs-12 cl_input block_info_payment">
		    <label><img src="images/icon/house.png" alt=""  /> Địa chỉ <span class="alert">*</span></label>
		    <input  name="diachi"  id="diachi" class="formsubmit" required="required"  value="<?=$thanhvien_tv['diachi']?>"/>
	    </div>
		<div class="col-md-12 col-sm-12 col-xx-12 col-xs-12 cl_input block_info_payment">
		    <label><img src="images/icon/batquai.png" alt="" /> E-mail<span class="alert">*</span></label>
		    <input type="email" name="email" id="email" class="formsubmit" required="required"  value="<?=$thanhvien_tv['email']?>"/>
	    </div>
	</div>

    <div class="col-md-6 col-sm-6 col-xx-12 col-xs-12 cl_area block_info_payment">
		<label><img src="images/icon/thutuc.png" alt="" /> Thông tin người nhận </label>
	    <textarea name="noidung"><?=$_POST['noidung']?></textarea>
    </div>
      
    <div class="icon_thanh">
        <input id="submit_thanhtoan" type="submit" name="next" value="Thanh Toán" class="g_muatiep" />
    </div>
    
    </div> 

</form>
                
</div>           
</div>