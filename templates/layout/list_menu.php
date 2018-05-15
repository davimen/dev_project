 
 
 <div style=" clear:both"></div>
 
<div class="sesstion_full" >

 

<div class="container">
	 
 <div class="block_col_list">
 	<h3>THÔNG TIN CÔNG TY</h3>
 	<ul>
    	<li><a href="gioi-thieu.html">Giới Thiệu Hồng Hải Store</a></li>
        <li><a href="#">Danh muc 1</a></li>
        <li><a href="#">Danh muc 1</a></li>
        <li><a href="tuyen-dung.html">Tuyển dụng</a></li>
        <li><a href="lien-he.html">Liên hệ</a></li>
    </ul>
 </div>
 
  <div class="block_col_list">
 	<h3>DỊCH VỤ CÔNG TY</h3>
 	<ul>
    	<?
				 foreach((array)$result_dichvuTop as $k=>$v){
                ?>
            	<li><a href="dich-vu/<?=$v['tenkhongdau']?>.html"><?=$v['ten_'.$lang]?></a></li>
                <? } ?>
    </ul>
 </div>
 
 
 <div class="block_col_list">
 	<h3>ĐĂNG KÝ NHẬN TIN</h3>
 	<?
	 include _template.'/layout/dangkynhanemail.php';
    ?>
 </div>
 
 <div class="block_col_list">
 	<h3>FANPAGE FACEBOOK</h3>
 	<?
	 include _template.'/layout/facebook.php';
    ?>
 </div>
 
    
    <div style="clear:both"></div>
    </div>
    </div>
    
    
    
    
    
    
    
 