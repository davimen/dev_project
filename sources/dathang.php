<?php if(!defined('_source')) die("Error");
		
		$d->reset();
		$sql = "select noidung_$lang,title,keywords,description from #_company where type='lienhe' ";
		$d->query($sql);
		$row_detail = $d->fetch_array();
		
		if(!empty($_POST)){
			include_once "phpMailer/class.phpmailer.php";	
		$mail = new PHPMailer();
		$mail->Priority = 1;
 		$mail->AddCustomHeader("X-MSMail-Priority: High");
				
		$mail->IsSMTP(); // telling the class to use SMTP
		 //$mail->Host       = "mail.yourdomain.com"; // SMTP server
		 $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
		 
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		 
		$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
		 $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
		 $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
		 $mail->Username   = "nosendemailweb@gmail.com";  // GMAIL username
		 $mail->Password   = "slmbipydevrauqme";  

		//Thiet lap thong tin nguoi gui va email nguoi gui
		$mail->SetFrom($config_email,$row_setting['ten_'.$lang]);
		
		$mail->AddAddress($row_setting['email'],$row_setting['ten_'.$lang]);
		
		/*=====================================
		 * THIET LAP NOI DUNG EMAIL
 		*=====================================*/

		//Thiết lập tiêu đề
		$mail->Subject    = '['.$_POST['ten'].']';
		$mail->IsHTML(true);
		//Thiết lập định dạng font chữ
		$mail->CharSet = "utf-8";	
			$body = '<table>';
			$body .= '
				<tr> 
					<th colspan="2">&nbsp;</th>
				</tr>

				<tr>
					<th colspan="2">Thư liên hệ từ website <a href="http://'.$config_url.'">www.'.$config_url.'</a></th>
				</tr>

				<tr>
					<th colspan="2">&nbsp;</th>
				</tr>

				<tr>
					<th>Họ tên :</th><td>'.$_POST['hoten'].'</td>
				</tr>

				<tr>
					<th>Địa chỉ :</th><td>'.$_POST['diachi'].'</td>
				</tr>

				<tr>
					<th>Điện thoại :</th><td>'.$_POST['dienthoai'].'</td>
				</tr>

				<tr>
					<th>Email :</th><td>'.$_POST['email'].'</td>
				</tr>
				
				<tr>
					<th>Tiêu đề :</th><td>Đặt hàng từ website '.$_POST['tensanpham'].'  số lượng '.$_POST['soluong'].'</td>
				</tr>
				<tr>
					<th>Nội dung :</th><td>'.$_POST['noidung'].'</td>
				</tr>';
			$body .= '</table>';

			$data1['ten'] = $_POST['hoten'];
			$data1['diachi'] = $_POST['diachi'];
			$data1['dienthoai'] = $_POST['dienthoai'];
			$data1['email'] = $_POST['email'];
			$data1['tieude'] = "Đặt hàng từ website ".$_POST['tensanpham'].'  số lượng '.$_POST['soluong'];
			$data1['noidung'] = $_POST['noidung'];
			$data1['stt'] = $_POST['stt'];

			$data1['ngaytao'] = time();
			$d->setTable('contact');
			//$d->insert($data1);
 
				
			$mail->Body = $body;
			
			if($mail->Send())
			{	
				transfer("Thông tin liên hệ được gửi.<br>Cảm ơn.", "trang-chu.html");
			} else {
				transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "lien-he.html");
			}
		}
			
	
?>