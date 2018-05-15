<div id="info">
      <div class="thanh_title"><h2><?=$title_detail?></h2></div>
      <div class="khung">       

      
      <div>
     <div class="chinhanh">
        <ul>
            <?php for($j=0,$count_sp=count($chinhanh);$j<$count_sp;$j++){?>
               <li class="item_chinhanh <?php if(($j+1)%2==0){ echo "c_right";}?>">
                    <img src="<?=_upload_khachhang_l.$chinhanh[$j]['thumb']?>" alt="<?=$chinhanh[$j]['ten_'.$lang]?>" />
                    <div class="chi_address">
                        <h3><?=$chinhanh[$j]['ten_'.$lang]?></h3>
                        <p>Địa chỉ : <?=$chinhanh[$j]['diachi_'.$lang]?></p>
                        <a class="colorbox_ajax" href="ajax/map.php?id_map=<?=$chinhanh[$j]['id']?>">Tìm đường</a>
                    </div>
                </li> 
            <?php } ?>
       </ul>
    </div>
       </div>
       <div align="center" ><div class="paging"><?=$paging?></div></div>

      </div>
</div> 