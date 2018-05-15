<?php  if(!defined('_source')) die("Error");
		

		$title_detail = _timkiem;

		$id_list=trim($_GET['id_list']);
		$key=trim($_POST['keywords']);
		$key_khong_dau=changeTitle($key);

		$per_page = 20; // Set how many records do you want to display per page.
		$startpoint = ($page * $per_page) - $per_page;
		$limit = ' limit '.$startpoint.','.$per_page;
		
		$where = " #_product where hienthi=1 and type='product' ";
		$ten=trim($_POST['timkiem']);
		if($key!='')
		{
			 $where.=" and ten_vi like '%".$key."%' ";

		}
		if($id_list!='')
		{
			$where.=" and id_list='".$id_list."' ";
		}
		$where .= " order by stt,ngaytao desc";

		$sql = "select * from $where $limit";
		$d->query($sql);
		$product = $d->result_array();

		$url = getCurrentPageURL();
		$paging = pagination($where,$per_page,$page,$url);

?>