
 <div class="content_email">
<div class="content_footer_item">
 
 <span>Vui lòng nhập email của bạn để được chương trình quà tặng hấp dẫn từ chúng tôi!</span> 
    <div class="block_register_email">
   <input name="register-email" placeholder="Nhập địa chỉ email..." />
   <button>Đăng ký</button>
   
   </div>
   
</div>


<div style="clear:both"></div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.block_register_email button').click(function(event) {
			var gioitinh = $(this).html();
			var email = $('.block_register_email input').val();
			if(email==''){
				alert('Bạn chưa nhập email');
				$('.dangkymail input').focus();
			} else {
				$.ajax ({
					type: "POST",
					url: "ajax/dangky_email.php",
					data: {gioitinh:gioitinh,email:email},
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