<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<base href="http://<?=$config_url?>/"  />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?=$row_setting['keywords']?>" />
<meta name="description" content="<?=$row_setting['description']?>" />
<meta name="google-site-verification" content="QfYHLpI8_sH1zEwcTzcIzI2P8nB-wmM_a21yz-hqoy0" />

<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
<title><?php if(isset($title_bar)) echo $title_bar; else echo $row_setting["title_$lang"]; ?></title>
 
 

<script type="text/javascript" src="mobile/libraries/js/jquery-1.7.2.js"></script>
  <script type="text/javascript" src="mobile/libraries/menu/js/jquery.mmenu.min.all.js"></script>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
 
<link type="text/css" rel="stylesheet" href="mobile/libraries/menu/css/jquery.mmenu.all.css" />


 
<link rel="stylesheet" href="mobile/css/style.css" type="text/css">
 
 
<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="mobile/owl-carousel/owl.carousel.css">
 
<!-- Default Theme -->
<link rel="stylesheet" href="mobile/owl-carousel/owl.theme.css">
 

 
<!-- Include js plugin -->
<script src="mobile/owl-carousel/owl.carousel.js"></script>
  
  <!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="mobile/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="mobile/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="mobile/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="mobile/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="mobile/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="mobile/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="mobile/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="mobile/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
  
  

  <script>var base_url = '<?=$config_url?>';  </script>
<script type="text/javascript">
	$(function() {
		$('nav#menu').mmenu();
		
		$('#keyword').keypress(function(event){
			var keycode = (event.keyCode ? event.keyCode : event.which);
			if(keycode == '13'){
				$k = $("#keyword").val();
				window.location.href="tim-kiem/keyword="+$k;
				return false;
			}
		});

	});
</script>

<script type="text/javascript">
  $(document).ready(function() {

      $('.btn-addcart').click(function(e) {
        var pid = $(this).attr('data-id');
		 
		 
		
		infocart = [];
		infocart[0] = pid;
		infocart[1] = '';
		infocart[2] ='';
		infocart[3] = 1;
        $.ajax({
          type: "POST",
          url: "ajax/add_giohang.php", 
          data: {infocart:infocart},
          success: function(string){
			   alert('Đặt hàng thành công');
			  setTimeout(function(){
				 
				 // window.location.href='gio-hang.html';
				  },500)
			  }          
        });
      });

  });
</script>
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC_reXxFyqYV70NpNj12ZyAaxgcauZ58cY"></script>
 
</head>
<body <?php if(@$_GET['com']=='lien-he') echo 'onLoad=" initialize()"'; ?> >


<div data-role="page" class="ui-page ui-page-theme-a ui-page-active">
		<div data-role="header">
            <?php    
 			include _template."layout/banner.php";
		 
			 ?>
         </div>
           <div class="ui-content ui-btn-b" role="main">
          
          
           <?php    include _template."layout/slideranh.php"; ?>
          
        <?php   include _template.$template."_tpl.php"; ?>          
        
		 
          
          
           <?php    //       _template.$template."_tpl.php"; ?>          
            
              
        </div>
          
	  <div>  <div class="clear"></div>
      
      
         <?php 
		 
		 
		 	  
		 include _template."layout/footer.php"; 
		 
		include  _template."layout/fix_phone.php"; 
		 
		 ?>
      </div>
      <?php    include _template."layout/menu.php";?>

   
</div>    	
      
   </body>
</html>