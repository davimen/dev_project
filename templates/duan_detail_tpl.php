<div id="info">
<div id="sanpham">
       <div class="title_index_about"><span>
    <?=$title_detail?>
    </span></div>
    
        <div class="khung">
      
        
        
        <div class="noidung">
           <?
		    if(count($result_arrayPhoto)>0){
           ?>
           <div class="block_project_detail">
           <div id="owl-project" class="owl-carousel owl-theme">
	<?
	 foreach((array)$result_arrayPhoto as $k=>$v){
    ?>
  <div class="item"><img src="thumb/700x350/1/<?=_upload_baiviet_l.$v['photo']?>"></div>
  <? }?>

</div>
           </div>
            
            <script>
$(document).ready(function() {
 
  var owl = $("#owl-project");
 
  owl.owlCarousel({
     
      items:1,
      navigation : true,
	  pagination:true,
	  stopOnHover:true,
	  autoPlay : 3000
 
  });
 
});
</script>
            <? }?>
             <h1 class="tieude"> <?=$row_detail['ten_'.$lang]?></h1>
            <?=$row_detail['noidung_'.$lang]?>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55a5ff5b3a9222b9" async="async"></script>
            <script src="https://apis.google.com/js/platform.js" async defer></script>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-570467c6b3882b22"></script>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_native_toolbox"></div>
            <?=get_social('','comment');?>

		</div>
 </div>       
    <div style="clear:left;"></div><br /><br />
    <div class="thanh_title"><h2><?=_othernews?></h2></div>

  <div class="khung">
 <ul class="tinkhac">
    <?php foreach($tintuc as $tinkhac){?>
    <li><a href="<?=$com?>/<?=$tinkhac['tenkhongdau']?>.html" ><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><?=$tinkhac['ten_'.$lang]?></a></li>
    
    <?php }?>
    </ul>
    </div>      
          
        
</div>
</div>
     