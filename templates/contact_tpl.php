
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC_reXxFyqYV70NpNj12ZyAaxgcauZ58cY"></script> 



<div class="block-content-right">
         <div class="title_index_about"><span><?=_contact?></span></div>


 
    
    <div class="block-about">
    
    
    <span><?=$row_detail['noidung_'.$lang]?></span>
  
<?php /*?>  <div class="title-right"><span><?=_lienhequaemail?></span></div>
<?php */?>    <div class="block-frm-contact">
  <form method="post" name="frm" action="lien-he.html">
		
		
	        <p><label><?=_hovaten?> : </label><input name="ten" placeholder="Nhập họ tên " required="required" type="text" class="tflienhe" id="ten" /></p>
	        <p><label><?=_address?> : </label><input name="diachi" type="text"  class="tflienhe" id="diachi" placeholder="Nhập  địa chỉ " required="required"/></p>
			<p><label><?=_dienthoai?> : </label> <input name="dienthoai" type="text" placeholder="Nhập  số điện thoại " required="required" class="tflienhe" id="dienthoai"/></p>
			<p><label>Email : </label><input name="email" type="email" placeholder="Nhập địa chỉ email " required="required" class="tflienhe" id="email"  /></p>
			<p><label><?=_chude?> : </label><input name="tieude" type="text"  placeholder="Nhập  chủ đề " required="required" class="tflienhe" id="tieude" /></p>
			<p><label><?=_noidung?> : </label>
			<textarea name="noidung" cols="50" rows="5" class="ta_noidung" id="noidung" placeholder="Nhập nội dung " required="required" style=""></textarea>
			</p>
	        <p><label>&nbsp </label>
	            <button type="submit"> <?=_gui?></button>
	            <button type="reset">Reset</button>   
	        </p> 
	      
	    </form>
     
     </div>   
           

     

      
   
      
     
  		<div class="ggmaps">
              	<div id="map" style=""></div>  
                <script type="text/javascript">  
                var locations = [  
                ['<b style="color:red; font-size:15px; font-family:arial"><?=$row_setting['ten_'.$lang]?></b><br /><b>ĐC:<?=$row_setting['diachi_'.$lang]?></b><br /><div style="font-family:arial">Email:<?=$row_setting['email']?><br />Điện thoại:<?=$row_setting['dienthoai']?></div>', <?=$row_setting['toado']?> , 1],  
                ];  
                var map = new google.maps.Map(document.getElementById('map'), {  
                 zoom: 13,  
                 center: new google.maps.LatLng(<?=$row_setting['toado']?>),  
                 mapTypeId: google.maps.MapTypeId.ROADMAP  
                });  
                var infowindow = new google.maps.InfoWindow();  
                var marker, i;  
                for (i = 0; i < locations.length; i++) {   
				
                 marker = new google.maps.Marker({  
                   position: new google.maps.LatLng(locations[i][1], locations[i][2]),  
                   map: map  
                 });  
                 google.maps.event.addListener(marker, 'click', (function(marker, i) {  
                   return function() {  
                     infowindow.setContent(locations[i][0]);  
                     infowindow.open(map, marker);  
                   }  
                 })(marker, i));  
                }  
                </script>

      
      
        
  </div>
    
</div>



