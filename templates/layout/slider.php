

 
<script src="js/jquery.bxslider.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" />

 <div class="block-slider" style="position:relative">
         	<ul id="slider">
                <?php
				foreach((array)$result_slider as $k=>$v)
				{
				?>
                <li><a href="<?=$v['link']?>" target="_blank" title="<?=$v['ten_'.$lang]?>">
                <img  src="thumb/1366x551/1/<?=_upload_hinhanh_l.$v['photo_vi']?>" alt="<?=$v['ten_'.$lang]?>" /></a></li>
             	<? }?>
            </ul>

             <script>
                $('#slider').bxSlider({
                  mode: 'fade',
                  auto: true,
                  autoControls: true,
                  pause: 4800,
				  adaptiveHeight: true,

				 
                });
            </script>
            
      
     
     <?php /*?><div class="block_httt_slider">
     <div class="content_desc_slider">
  <?=$reuslt_hethongphong[0]['noidung_vi']?>
  </div>
     </div><?php */?>
     
</div>
 