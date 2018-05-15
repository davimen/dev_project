<script type="text/javascript">
  $(document).ready(function() {
      $('#menu_top li.fi').hover(function(event) {
          $(this).find('.sub_menu').css({ display:'block'});
      } ,function() {
          $('#menu_top li.fi .sub_menu').css({ display:'none'});
      }); //
  });
</script> 

<div class="margin_auto">

  <nav id="menu_top">
  	<h2><?=_danhmucsanpham?></h2>
      <ul class="big">
          <?php for($i=0;$i<count($row_list);$i++){
            $d->reset();
            $sql = "select * from #_product_cat where hienthi=1 and type='product' and id_list='".$row_list[$i]['id']."'  order by stt,id desc";
            $d->query($sql);
            $row_item = $d->result_array();

            $d->reset();
            $sql = "select ten_$lang,id,thumb,mota_$lang,giacu,giaban,tenkhongdau from #_product where hienthi=1 and type='product' and id_list='".$row_list[$i]['id']."' and noibat!=0 order by stt,id desc limit 0,6";
            $d->query($sql);
            $row_product = $d->result_array();

          ?>
          <li class="fi"><a class="fi1" href="<?=$row_list[$i]['tenkhongdau']?>/"><span><img src="<?=_upload_product_l.$row_list[$i]['thumb']?>"> </span><?=$row_list[$i]['ten_'.$lang]?></a>
          <div class="sub_menu">
              <div class="danhmuc_2">
              <ul>
              <?php for($j=0;$j<count($row_product);$j++){?>
                  <li class="item_index">
                      <a href="san-pham/<?=$row_product[$j]['id']?>/<?=$row_product[$j]['tenkhongdau']?>.html">
                          <span class="giamgia"><p>Giảm</p><?=giamgia($row_product[$j]['giacu'],$row_product[$j]['giaban'])?></span>
                          <h3><?=catchuoi($row_product[$j]['ten_'.$lang],25)?></h3>
                          <p class="mota"><?=catchuoi($row_product[$j]['mota_'.$lang],70)?></p>
                          <p class="giaban"><?=_gia?> : <?php if($row_product[$j]['giaban']==0) echo _lienhe; else echo number_format ($row_product[$j]['giaban'],0,",",",")." VNĐ";?></p>
                          <?php if($row_product[$j]['giacu']!=0){?>
                          <p class="giacu"><?=_giacu?> : <?php if($row_product[$j]['giacu']==0) echo _lienhe; else echo number_format ($row_product[$j]['giacu'],0,",",",")." VNĐ";?></p>
                          <?php } ?>
                          <img src="<?=_upload_product_l.$row_product[$j]['thumb']?>" alt="<?=$row_product[$j]['ten_'.$lang]?>" />
                      </a>
                  </li>

                  <?php if(($j+1)%2==0 || ($j+1) == count($row_product)) echo "</ul>"; ?>
                  <?php if(($j+1)%2==0 && ($j+1) != count($row_product)) echo "<ul class='u_$j'>"; ?>
                  
              <?php } ?>

              <div class="quangcao_in"><a href="<?=$row_list[$i]['links']?>"><img src="<?=_upload_product_l.$row_list[$i]['quangcao']?>" width="360" height="430" alt="<?=$row_list[$i]['ten_'.$lang]?>"></a></div>

              </div>
          </div>
          </li>
          <?php } ?>
      </ul>
  </nav>

  <div id="slide_show">
          <?php include _template."layout/quake_slider.php";?> 
  </div>
   
</div> 



               
                
   