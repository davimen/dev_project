<script language="javascript">
  function addtocart(pid){
    document.form_giohang.productid.value=pid;
    document.form_giohang.command.value='add';
    document.form_giohang.submit();
  }
</script>
<form name="form_giohang" action="index.php" method="post">
  <input type="hidden" name="productid" />
  <input type="hidden" name="command" />
</form>
<div id="info_pro">
    <div id="sanpham">

    
        
    <div class="khung">
    <div class="thanh_title"><h2><?=$title_detail?></h2> </div>
    <ul>
		<?php if(count($product)!=0){?>
        <?php for($j=0,$count_sp=count($product);$j<$count_sp;$j++){?>
              <li class="row_sp col-md-3 col-sm-4 col-xx-6 col-xs-6">
               <div class="item">
                    <div class="img"><a href="<?=$com?>/<?=$product[$j]['tenkhongdau']?>.html"><img src="<?=_upload_product_l.$product[$j]['thumb']?>" alt="<?=$product[$j]['ten_'.$lang]?>" /></a></div>
                    <h3><a href="<?=$com?>/<?=$product[$j]['tenkhongdau']?>.html"><?=$product[$j]['ten_'.$lang]?></a></h3>
                    <p class="giaban"> <?=_gia?> : <span> <?php if($product[$j]['giaban']==0) echo _lienhe; else echo number_format ($product[$j]['giaban'],0,",",",").' '.VND ; ?></span></p>

                </div>
                </li> 
        <?php } ?>
		<?php } else { ?>
    <div style="text-align:center; color:#FF0000; font-weight:900; font-size:22px; text-transform:uppercase;"> Chưa Có Tin Cho Mục này . </div>
    <?php }?>

</ul>
<div class="clear"></div>
<div class="paging"><?=$paging?></div> 

</div>
</div>
</div>
<h1 class="visit_hidden"><?=$row_setting['ten_'.$lang]?></h1>


<div style='display:none'>
<div id='inline_content'></div>
</div>