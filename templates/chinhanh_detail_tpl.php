<div id="info">
<div id="sanpham">
 <div class="thanh_title"><h2><?=$title_detail?></h2></div>
    <div class="khung">
      
       

        <h1 class="tieude"> <?=$row_detail['ten_'.$lang]?></h1>
        <p class="ngaydang"><?=_ngaydang?> : <?=date('d/m/Y - g:i A',$row_detail['ngaytao']);?></p>
        <div class="noidung">
        <?=$row_detail['noidung_'.$lang]?>

        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-570467c6b3882b22"></script>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <div class="addthis_native_toolbox"></div>
        <?=get_social('','comment');?>

		</div>
        
    <div style="clear:left;"></div><br /><br />
</div>
    <div class="thanh_title"><h2><?=_othernews?></h2></div>
 <div class="khung">
 <ul class="tinkhac">
    <?php foreach($tintuc as $tinkhac){?>
    <li><a href="<?=$com?>/<?=$tinkhac['tenkhongdau']?>.html" ><img src="images/icon_gachgt.png" border="0" /><?=$tinkhac['ten_'.$lang]?></a></li>
    
    <?php }?>
    </ul>
    </div>      
        
</div>
</div>
     