<?

# sql header 
	 $d->reset();
    $sql = "select * from #_photo where type='banner'  order by stt,id desc";
    $d->query($sql);
    $result_bannerTop = $d->result_array();
	
	
	 $d->reset();
    $sql = "select * from #_photo where type='logo'  order by stt,id desc";
    $d->query($sql);
    $result_bannerLogo = $d->result_array();
	
	 $d->reset();
    $sql = "select * from #_baiviet_list  where hienthi=1 and type='tintuc'  order by stt,id desc";
    $d->query($sql);
    $result_NewsList = $d->result_array();

	 $d->reset();
    $sql = "select * from #_photo where hienthi=1 and type='socialtop'  order by stt,id desc";
    $d->query($sql);
    $result_socialtop = $d->result_array()
	
	;
	$d->reset();
    $sql = "select * from #_product_list where hienthi=1 and type='product'  order by stt,id desc";
    $d->query($sql);
    $result_product_list = $d->result_array();
	
	   $d->reset();
    $sql = "select * from #_baiviet_list where hienthi=1 and type='dichvu'  order by stt,id desc";
    $d->query($sql);
    $result_dichvu_list = $d->result_array();
	
	$d->reset();
    $sql = "select * from #_product_list where hienthi=1 and type='product'  and noibat >0 order by stt,id desc limit 0,3";
    $d->query($sql);
    $result_product_list1 = $d->result_array();
	
	
	
	 $d->reset();
    $sql = "select * from #_baiviet  where hienthi=1 and type='hotro'  order by stt,id desc";
    $d->query($sql);
    $result_hotro = $d->result_array();
	
	$d->reset();
    $sql = "select photo,ten_vi,tenkhongdau,id from #_baiviet  where hienthi=1 and type='icongioithieu'  order by stt,id desc limit 0,3";
    $d->query($sql);
    $result_icontop = $d->result_array();
	

# end sql header 


# sql slider 
	 $d->reset();
    $sql = "select * from #_photo where hienthi=1 and type='slider'  order by stt,id desc";
    $d->query($sql);
    $result_slider = $d->result_array();
 $d->reset();
    $sql = "select * from #_photo where hienthi=1 and type='socialtop'  order by stt,id desc";
    $d->query($sql);
    $result_socialtop = $d->result_array();

## end sql slider

//////////////////////

 





# sql left 
## end sql left

# sql footer 

	$d->reset();
	$sql = "select noidung_$lang from #_company where type='footer' ";
	$d->query($sql);
	$footer = $d->fetch_array();
	
	$d->reset();
    $sql = "select * from #_photo where hienthi=1 and type='socialfooter'  order by stt,id desc";
    $d->query($sql);
    $result_social = $d->result_array();
	
	
	$d->reset();
    $sql = "select * from #_yahoo where hienthi=1    order by stt,id desc";
    $d->query($sql);
    $result_yahoo = $d->result_array();
	
		$d->reset();
    $sql = "select * from #_photo where hienthi=1 and type='bg_footer'    order by stt,id desc";
    $d->query($sql);
    $result_bgfooter = $d->result_array();
	
	

## end sql footer


	
	 
?>

