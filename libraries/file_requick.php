<?php
	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$d = new database($config['database']);
	
	$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
	if ($page <= 0) $page = 1;
	
	$d->reset();
	$sql_setting = "select * from #_setting limit 0,1";
	$d->query($sql_setting);
	$row_setting= $d->fetch_array();

	$d->reset();
	$sql_setting = "select * from #_bgweb where type='bgweb' limit 0,1";
	$d->query($sql_setting);
	$row_background= $d->fetch_array();

	$d->reset();
    $sql = "select thumb_$lang from #_photo where type='favicon'";
    $d->query($sql);
    $favicon = $d->fetch_array();
	 
	
	switch($com){
		/**************LOGIN***************/
	
		/**************LOGIN***************/
		case 'video':
			$source = "video";
			$template = isset($_GET['id']) ? "video_detail" : "video";
			break;
		case 'dat-hang-thanh-cong':
			$source = "success";
			$template ="success";
			break;
			
		case 'ban-do':
			$source = "map";
			$template ="map";
			break;
		case 'dat-hang':
			$source = "dathang";
			$template ="dathang";
			break;	
		case 'download':
			$source = "download";
			$template = isset($_GET['id']) ? "download_detail" : "download";
			$type_bar = 'download';
			$title_detail = "Download";
			break;
		case 'album':
			$source = "album";
			$template = isset($_GET['id']) ? "album_detail" : "album";
			$type_bar = 'album';
			$title_detail = "album hình ảnh";
			break;
		case 'site-map':
			$source = "sitemap";
			$template ="sitemap";
			break;
		case 'diem-tich-luy':
			$source = "about";
			$template = "about";
			$title_detail = 'Điểm tích lũy';
			$type_bar = 'diemtichluy';
			break;
		case 'phuong-thuc-thanh-toan':
			$source = "about";
			$template = "about";
			$title_detail = 'Phương thức thanh toán';
			$type_bar = 'phuongthucthanhtoan';
			break;

		case 'dang-nhap':
			$source = "login";
			$template ="login";
			break;
		case 'tags':
			$source = "tags";
			$template ="tags";
			break;
		
		case 'phan-hoi':
			$source = "gopy";
			$template = "gopy";
			break;	
		
		case 'hoi-dap':
			$source = "hoidap";
			$template ="hoidap";
			break;
			
		case 'gioi-thieu':
			$source = "about";
			$template = "about";
			$type_bar = 'gioithieu';
			$title_detail = _gioithieu;
			break;
		case 'tuyen-dung1':
			$source = "about";
			$template = "about";
			$type_bar = 'tuyendung';
			$title_detail = "Tuyển dụng";
			break;

		case 'cong-nghe':
			$source = "service";
			$template = isset($_GET['id']) ? "service_detail" : "service";
			$type_bar = 'congnghe';
			$title_detail = "Công nghệ";
			break;
		case 'chinh-sach':
			$source = "service";
			$template = isset($_GET['id']) ? "service_detail" : "service";
			$type_bar = 'chinhsach';
			$title_detail = "Chính sách";
			break;
		case 'du-an':
			$source = "news";
			$template = isset($_GET['id']) ? "duan_detail" : "duan";
			$type_bar = 'duan';
			$title_detail = "Dự án";
			break;

		case 'kiem-tra-don-hang':
			$source = "donhang";
			$template = "donhang";
			$title_detail = "Kiểm tra đơn hàng";
			$type_bar = 'chamsoc';
			break;

		case 'huong-dan-mua-hang':
			$source = "about";
			$template = "about";
			$title_detail = "Hướng dẩn mua hàng";
			$type_bar = 'muahang';
			break;
		
		case 'tin-tuc':
 			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'tintuc';
			$title_detail = "Tin tức";
			break;
		case 'tuyen-dung':
 			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'tuyendung';
			$title_detail = "Tuyển dụng";
			break;	
			
 		case 'tu-van':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'tuvan';
			$title_detail = "Tư vấn";
			break;
		case 'doi-xe':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'doixe';
			$title_detail = "Đội xe vận chuyển";
			break;		

		case 'chi-nhanh':
			 
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'chinhanh';
			$title_detail = "Chi nhánh";
			break;

		case 'blog1':
			$source = "service";
			$template = isset($_GET['id']) ? "service_detail" : "service";
			$type_bar = 'daotao';
			$title_detail = 'blog';
			break;
		case 'ho-tro':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail1" : "news";
			$type_bar = 'hotro';
			$title_detail = 'Chăm sóc khách hàng';
			break;

		case 'dich-vu':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'dichvu';
			$title_detail = _dichvu;
		break;
		case 'cong-trinh':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'congtrinh';
			$title_detail ="Công trình";
		break;


		case 'khuyen-mai':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'khuyenmai';
			$title_detail = _khuyenmai;
		break;


		case 'doi-tac':
			$source = "thuonghieu";
			$template =isset($_GET['id']) ? "product" : "thuonghieu";
			$title_detail = _doitac;
			$type_bar = 'doitac';	
			break;	
		break;

		case 'cham-soc-khach-hang':
			$source = "chamsoc";
			$template = isset($_GET['id']) ? "chamsoc_detail" : "chamsoc";
			break;

		case 'san-pham':
			$source = "product";
			$template =isset($_GET['id']) ? "product_detail" : "product";
			$title_detail = " Sản phẩm ";
			$type_bar = 'product';	
			break;
		
		case 'hot-deal':
			 
			$template ="product_hot";
			$title_detail = "Hot deal ";
			$type_bar = 'product';	
			break;			
								
		case 'lien-he':
			$source = "contact";
			$template = "contact";
			break;

		case 'giao-hang-toan-quoc':
			$source = "giaohang";
			$template = "giaohang";
			break;

		case 'giao-hang-nhan-tien':
			$source = "giaohangnt";
			$template = "giaohangnt";
			break;

		case 'doi-tra-hang-trong-10-ngay':
			$source = "doitra";
			$template = "doitra";
			break;

		case 'huong-dan-mua-hang':
			$source = "huongdanmuahang";
			$template = "huongdanmuahang";
			break;
		
		case 'tim-kiem':
			$source = "search";
			$template = "search";
			break;
		case 'gio-hang':
			$source = "giohang";
			$template = "giohang";
			break;	
		case 'thanh-toan':
			$source = "thanhtoan";
			$template = "thanhtoan";
			break;
		case 'xac-nhan':
			$source = "xacnhan";
			$template = "xacnhan";
			break;		

		default: 
			$source = "index";
			$template = "index";
			break;
	}
	
	if($source!="") include _source.$source.".php";
	
	if($_REQUEST['com']=='logout')
	{
	session_unregister($login_name);
	header("Location:index.php");
	}		

	if($_REQUEST['com']=='thoat')
	{
		unset($_SESSION['login']);
		header("location:trang-chu.html");
	}		


?>