<?php  if(!defined('_source')) die("Error");

		$id =  $_GET['id'];
		
		 $d->reset();
  $sql = "select * from #_khachhang where hienthi=1 and type='chinhanh' order by stt,id desc ";
  $d->query($sql);
  $chinhanh = $d->result_array();
	
?>