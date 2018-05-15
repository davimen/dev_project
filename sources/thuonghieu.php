<?php  if(!defined('_source')) die("Error");

		@$id=  addslashes($_GET['id']);
		#các sản phẩm khác======================
		if($id){

			$d->reset();
			$sql_detail = "select * from #_tieude where hienthi=1 and type='thuonghieu' and tenkhongdau='".$id."'";
			$d->query($sql_detail);
			$row_detail = $d->fetch_array();

			$title_detail = $row_detail['ten_'.$lang];
			$per_page = 12; // Set how many records do you want to display per page.
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;
			
			$where = " #_product where hienthi=1 and type='product' and thuonghieu='".$row_detail['id']."'  order by stt,ngaytao desc";

			$sql = "select ten_$lang,id,thumb,mota_$lang,giacu,giaban,tenkhongdau,rate,gial,giat,gian,giamgia from $where $limit";
			$d->query($sql);
			$product = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);

		} else {
			$per_page = 120; // Set how many records do you want to display per page.
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;
			
			$where = " #_photo where hienthi=1 and type='doitac' order by id desc";

			$sql = "select * from $where $limit";
			$d->query($sql);
			$product = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);
		}

			
?>