
 <div class="content_email">
<div class="content_footer_item">
 
     <div class="block_register_email">
     <input name="hoten" class="hoten" placeholder="Nhập họ tên..." />
     <input name="dienthoai" class="dienthoai" placeholder="Nhập số điện thoại..." />
   <input name="email" class="email" placeholder="Nhập địa chỉ email..." />
   <button>Đăng ký</button>
   
   </div>
   
</div>


<div style="clear:both"></div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.block_register_email button').click(function(event) {
			var dienthoai =  $('input.dienthoai').val();
			var hoten =  $('input.hoten').val();
			var email = $('input.email').val();
			if(email==''){
				alert('Bạn chưa nhập email');
				$('.dangkymail input').focus();
			} else {
				$.ajax ({
					type: "POST",
					url: "ajax/dangky_email.php",
					data: {hoten:hoten,dienthoai:dienthoai,email:email},
					success: function(result) { 
						if(result==0){
							$('.dangkymail input').attr('value','');
							alert('Đăng ký thành công ! ');
						} else if(result==1){
							alert('Email đã được đăng ký ! ');
						} else if(result==2){
							alert(' ! Đăng ký không thành công . Vui lòng thử lại ');
						}
						
					}
				});
			}
		});
	});
</script>