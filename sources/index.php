<?php  if(!defined('_source')) die("Error");

	$d->reset();
	$sql = "select * from #_product_list where hienthi=1 and type='product' and noibat!=0 order by stt,id desc ";
	$d->query($sql);
	$product_list = $d->result_array();

	$d->reset();
    $sql = "select ten_$lang,tenkhongdau,id,thumb from #_product where hienthi=1 and type='product' and sp_banchay!=0 order by stt,id desc ";
    $d->query($sql);
    $productnb = $d->result_array();


?>