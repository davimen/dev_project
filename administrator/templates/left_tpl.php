<div class="logo"> <a href="#" target="_blank" onclick="return false;"> <img src="images/logo.png"  alt="" /> </a></div>
<div class="sidebarSep mt0"></div>
<!-- Left navigation -->
<ul id="menu" class="nav">
  <li class="dash" id="menu1"><a class=" active" title="" href="index.php"><span>Trang chủ</span></a></li>

   <li class="categories_li <?php if($_GET['com']=='product' || $_GET['com']=='order' || $_GET['com']=='size' || $_GET['com']=='gia' || $_GET['com']=='tieude' || $_GET['com']=='excel') echo ' activemenu' ?>" id="menu2"><a href="" title="" class="exp"><span>Sản phẩm</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['act']=='man_list') echo ' class="this"' ?>><a href="index.php?com=product&act=man_list&type=product">Quản lý danh mục 1</a></li>
     <?php /*?> <li<?php if($_GET['act']=='man_cat') echo ' class="this"' ?>><a href="index.php?com=product&act=man_cat&type=product">Quản lý danh mục 2</a></li><?php */?>
      <li<?php if($_GET['act']=='man' && $_GET['com']=='product') echo ' class="this"' ?>><a href="index.php?com=product&act=man&type=product">Quản lý sản phẩm</a></li>

<?php /*?>       <li<?php if($_GET['com']=='order') echo ' class="this"' ?>><a href="index.php?com=order&act=man">Quản lý giỏ hàng</a></li>
<?php */?>     </ul>
  </li>

   

<li class="categories_li <?php if($_GET['com']=='baiviet') echo ' activemenu' ?>" id="menu_bv"><a href="" title="" class="exp"><span>Bài viết</span><strong></strong></a>
    <ul class="sub">
          
      
       <li<?php if($_GET['type']=='tintuc') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=tintuc">Quản lý tin tức</a></li>
     

             <li<?php if($_GET['type']=='tuyendung') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=tuyendung">Quản lý Tuyển dụng</a></li> 


              
 

<?php /*?>         <li<?php if($_GET['type']=='hotro') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=hotro">Quản lý quy trình</a></li>
      
       <li<?php if($_GET['type']=='duan') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=duan">Quản lý dự án</a></li>
 
<?php */?>      <?php /*?>
         <li<?php if($_GET['type']=='icongioithieu') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=icongioithieu" title="">Quản lý icon Header</a></li><?php */?>
      
      
      </ul>
</li>

   
 


<!--   <li class="template_li<?php if($_GET['com']=='member') echo ' activemenu' ?>" id="menu_mb"><a href="#" title="" class="exp"><span>Thành viên </span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=member&act=man" title="">Quản lý thành viên</a></li>
    </ul>
  </li> 
 -->

<li class="categories_li <?php if($_GET['com']=='info') echo ' activemenu' ?>" id="menu_tt"><a href="" title="" class="exp"><span>Trang tĩnh</span><strong></strong></a>

    <ul class="sub">
      <li<?php if($_GET['type']=='gioithieu') echo ' class="this"' ?>><a href="index.php?com=info&act=capnhat&type=gioithieu">Giới Thiệu</a></li>
  <?php /*?>    <li<?php if($_GET['type']=='gioithieuhome') echo ' class="this"' ?>><a href="index.php?com=info&act=capnhat&type=gioithieuhome">Giới Thiệu  home</a></li>
<?php */?>      
   
      
     </ul>
  </li> 


  

  <li class="template_li<?php if($_GET['com']=='setting' || $_GET['com']=='newsletter' || $_GET['com']=='bannerqc'  || $_GET['com']=='company') echo ' activemenu' ?>" id="menu5"><a href="#" title="" class="exp"><span>Thông tin công ty</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='logo') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=logo" title="">Logo</a></li>
    <li<?php if($_GET['type']=='banner') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=banner" title="">Banner</a></li>
      <li<?php if($_GET['type']=='favicon') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=favicon" title="">Favicon</a></li>

      <li<?php if($_GET['type']=='lienhe') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=lienhe" title="">Liên hệ</a></li>
      <li<?php if($_GET['type']=='footer') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=footer" title="">Footer</a></li>
      
   <?php /*?>    <li<?php if($_GET['type']=='nguoiban') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=nguoiban" title="">Thông tin suport</a></li><?php */?>
      <li<?php if($_GET['com']=='setting') echo ' class="this"' ?>><a href="index.php?com=setting&act=capnhat" title="">Cấu hình chung</a></li>
      
    <?php /*?>  <li<?php if($_GET['com']=='newsletter') echo ' class="this"' ?>><a href="index.php?com=newsletter&act=man" title="">Email</a></li>
    <?php */?>  
    </ul>
  </li>

<?php /*?>   <li class="marketing_li<?php if($_GET['com']=='yahoo' || $_GET['com']=='lkweb') echo ' activemenu' ?>" id="menu6"><a href="#" title="" class="exp"><span>Hổ Trợ Online</span><strong></strong></a>
    <ul class="sub">
      <li <?php if($_GET['com']=='yahoo') echo ' class="this"' ?>><a href="index.php?com=yahoo&act=man&type=yahoo" title="">Yahoo</a></li>
    </ul>
  </li><?php */?>

  <li class="gallery_li<?php if($_GET['com']=='photo') echo ' activemenu' ?>" id="menu7"><a href="#" title="" class="exp"><span>Hình Ảnh - Slider</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='slider') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=slider" title="">Hình ảnh slider</a></li>
       
      
        <?php /*?><li<?php if($_GET['type']=='quangcao') echo ' class="this"' ?>>
        <a href="index.php?com=photo&act=man_photo&type=quangcao" title="">Quảng cáo left </a></li><?php */?>
        <?php /*?>
         <li<?php if($_GET['type']=='popup') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=popup" title="">Popup</a></li><?php */?>
      
      
        
        <li<?php if($_GET['type']=='socialfooter') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=socialfooter" title="">MXH footer</a></li>
       
      
    </ul>
  </li>
   
  <li class="gallery_li<?php if($_GET['com']=='video') echo ' activemenu' ?>" id="menu_v"><a href="#" title="" class="exp"><span>Video</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['com']=='video') echo ' class="this"' ?>><a href="index.php?com=video&act=man&type=video" title="">Video</a></li>
    </ul>
  </li>   
 
</ul>