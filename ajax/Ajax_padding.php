<?php
	session_start();
	@define ( '_template' , '../templates/');
	@define ( '_lib' , '../libraries/');
	@define ( '_source' , '../sources/');	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	$lang='vi';
			
			$arrayUrl=explode('php&page=',$_POST['url']);
			 
			
			$per_page = 8; // Set how many records do you want to display per page.
			if($arrayUrl[1]>0){
			$page=$arrayUrl[1];
			}else{
				$page=1;
				}
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;
			$where = " #_product where hienthi=1 and type='product' ";
			if($_POST['id_list']!=''){
				$where .= " and  id_list='".$_POST['id_list']."' ";
				}
				
 			$where .= " order by stt,ngaytao desc ";
 			$sql = "select ten_$lang,id,thumb,mota_$lang,giacu,giaban,tenkhongdau,rate,sp_banchay from $where $limit";
			$d->query($sql);
			$product = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);
 
 
 

?>
<?
 foreach((array)$product as $k=>$v){
?>
<div class="products-item <?=(($k+1)%4==0)?'end_right':''?>">
    
    <span class="bg_opa">
    	<a href="san-pham/<?=$v['tenkhongdau']?>.html"><img src="images/icon_detail1.png" /></a>
        <a class="various" rel="view_next" data-fancybox-type="iframe"  href="quick_view.php?id=<?=$v['id']?>"><img src="images/icon_viewmore.png" /></a>
    </span>
    
    
      <div class="bg_product"> <a href="san-pham/<?=$v['tenkhongdau']?>.html"> <img src="thumb/500x500/1/<?=_upload_product_l.$v['thumb']?>" alt="<?=$v['ten_'.$lang]?>"/></a> </div>
      <div class="name-block"> <a href="san-pham/<?=$v['tenkhongdau']?>.html">
        <h3>
          <?=catchuoi($v['ten_'.$lang],50)?>
        </h3>
        </a> <span class="price-product">Giá: <span>
        <?=format_money($v['giaban'],' đ','Liên hệ')?>
        </span></span>
        <?php /*?>  <a href="<?=$v['tenkhongdau']?>.htm"  class="btn_view_detail">Xem chi tiết </a><?php */?>
      </div>
    </div>
        <? }?>
        
        
         <div class="phantrang"><?=@$paging?></div>
