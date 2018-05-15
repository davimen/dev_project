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

<form name="form_giohang" action="index.php?com=gio-hang" method="get">
  <input type="hidden" name="com" value="gio-hang" />
  <input type="hidden" name="pid" />
  <input type="hidden" name="size" />
  <input type="hidden" name="mausac" />
  <input type="hidden" name="command" />
</form>
<div class="block-content-right">
  <div class="title_index_about"><span> Giỏ hàng </span></div>
  <div class="block-about">
    <form name="form1" method="post">
      <input type="hidden" name="pid" />
      <input type="hidden" name="command" />
      <table border="0" cellpadding="5px" cellspacing="1px" width="100%" class="giohang_tk">
        <tr class="menu_giohang" >
          <td class="res_cart">STT</td>
          <td>Hình ảnh</td>
         
          <td>Số lượng</td>
          <td>Giá</td>
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
          <td   class="tt_cart"><a href="san-pham/<?=$pid?>/<?=changeTitle($pname)?>.html"> <img src="thumb/60x60/2/upload/product/<?=get_thumb($pid)?>" alt="<?=$pname?>" class='img' />
            <?php if($size){?>
            <b>Size :
            <?=$size?>
            </b><br/>
            <?php } ?>
            <?php if($size){?>
            <b>Màu sắc  :
            <?=$mausac?>
            </b>
            <?php } ?>
            </a></td>
            
          <td   class="tt_cart"><h3>
              <?=$pname?>
            </h3></td>
          <td width=""><input name="<?=$pid?>" data-i="<?=$i?>" data-size="<?=$size?>" data-mau="<?=$mausac?>" value="<?=$q?>" class="capnhat_sl" /></td>
          <td width="10%" class="res_cart capnhat_price_<?=$i?>"><span>Giá :
            <?=number_format(get_price($pid),0, ',', '.')?>
            &nbsp;đ</span><br/></td>
          <td width="10%" class="res_cart capnhat_price_<?=$i?>"><?=number_format(get_price($pid)*$q,0, ',', '.')?>
            &nbsp;đ</td>
          <td width="10%"><img src="images/icon/disabled.png" border="0" onclick="xoa(<?=$pid?>,'<?=$size?>','<?=$mausac?>')" width="20" style="cursor: pointer;" /></td>
        </tr>
        <?php } ?>
        <tr class="tonggia">
          <td colspan="7" >Tổng giá : <b class="capnhat_full">
            <?=number_format(get_order_total(),0, ',', '.')?>
            &nbsp;đ</b></td>
        </tr>
        <?php }	else{ echo "<tr bgColor='#FFFFFF'><td colspan='5'>Bạn Không có sản phẩm nào trong giỏ hàng</td>"; } ?>
      </table>
      <input type="button" value="Mua tiếp" onclick="window.location='trang-chu.html'" class="g_muatiep">
      <input type="button" value="Xóa tất cả" onclick="clear_cart()" class="g_muatiep">
      <input type="button" value="Thanh toán" onclick="window.location='thanh-toan.html'" class="g_muatiep">
    </form>
  </div>
</div>
