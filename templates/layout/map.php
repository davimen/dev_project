
<?
if($com!='lien-he'){
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC_reXxFyqYV70NpNj12ZyAaxgcauZ58cY"></script>
<? }?>
<div class="ggmaps">

              
              
              	<div id="map2" style=" width:100%; height:150px"></div>  
                <script type="text/javascript">  
                var locations = [  
                ['<b style="color:red; font-size:15px; font-family:arial"><?=$row_setting['ten_'.$lang]?></b><br /><b>ĐC:<?=$row_setting['diachi_'.$lang]?></b><br /><div style="font-family:arial">Email:<?=$row_setting['email']?><br />Điện thoại:<?=$row_setting['dienthoai']?></div>', <?=$row_setting['toado']?> , 1],  
                ];  
                var map = new google.maps.Map(document.getElementById('map2'), {  
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
