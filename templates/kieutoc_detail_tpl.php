<div id="info">
<div id="sanpham">
       
        <div class="khung">
      
        <div class="thanh_title"><h2><?=$row_detail['ten_'.$lang]?></h2></div>
        <div class="noidung">
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
    <li><a href="<?=$com?>/<?=$tinkhac['tenkhongdau']?>.html" ><img src="images/muiten_detail.png" border="0" /><?=$tinkhac['ten_'.$lang]?></a></li>
    
    <?php }?>
    </ul>
    </div>      
      
        
</div>
</div>
     