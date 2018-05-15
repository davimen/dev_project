<?php
	$d->reset();
	$sql_banner_top= "select photo_$lang from #_photo where com='banner_top'";
	$d->query($sql_banner_top);
	$banner_top = $d->fetch_array();

	function _substr($str,$n)
	{
	if(strlen($str)<$n) return $str;
	$html = substr($str,0,$n);
	$html = substr($html,0,strrpos($html,' '));
	return $html.'..';
	}

    $d->reset();
    $sql = "select ten_$lang,id from #_product_item where hienthi=1 and id_cat=121 order by stt,id desc";
    $d->query($sql);
    $row_spcat = $d->result_array();

    $d->reset();
    $sql = "select ten_$lang,id from #_product_item where hienthi=1 and id_cat=122 order by stt,id desc";
    $d->query($sql);
    $row_tmcat = $d->result_array();


    $d->reset();
    $sql = "select ten_$lang,id from #_project_cat where hienthi=1 order by stt,id desc";
    $d->query($sql);
    $row_ttcat = $d->result_array();
	
?>
<div class="margin_auto">
<div id="smoothmenu1" class="ddsmoothmenu">
    <ul>
            <li class="icon <?php if($_GET['com']=='trang-chu'){?>active<?php }?>"><a href="trang-chu.html"><?=_home?></a></li>
            <li class="icon <?php if($_GET['com']=='gioi-thieu'){?>active<?php }?>"><a href="gioi-thieu.html"><?=_about?></a></li>
            <li class="icon <?php if($_GET['idl']=='san-pham'){?>active<?php }?>"><a href="san-pham"><?=_product?></a>
            <ul>
            <?php for($i=0;$i<count($row_spcat);$i++){?>
                <li>
                    <a href="san-pham/<?=bodautv($row_spcat[$i]['ten_'.$lang])?>/<?=$row_spcat[$i]['id']?>.html"><?=$row_spcat[$i]['ten_'.$lang]?></a>
                </li>
            <?php } ?>
            </ul> 
            </li>

            <li class="icon <?php if($_GET['idl']=='thuong-mai'){?>active<?php }?>"><a href="thuong-mai"><?=_thuongmai?></a>
            <ul>
            <?php for($i=0;$i<count($row_tmcat);$i++){?>
                <li>
                    <a href="thuong-mai/<?=bodautv($row_tmcat[$i]['ten_'.$lang])?>/<?=$row_tmcat[$i]['id']?>.html"><?=$row_tmcat[$i]['ten_'.$lang]?></a>
                </li>
            <?php } ?>
            </ul> 
            </li>
            <li class="icon <?php if($_GET['com']=='tin-tuc'){?>active<?php }?>"><a href="tin-tuc.html"><?=_news?></a>
              <ul>
            <?php for($i=0;$i<count($row_ttcat);$i++){?>
                <li>
                    <a href="tin-tuc/<?=bodautv($row_ttcat[$i]['ten_'.$lang])?>/<?=$row_ttcat[$i]['id']?>.html"><?=$row_ttcat[$i]['ten_'.$lang]?></a>
                </li>
            <?php } ?>
            </ul> 
            </li>
            <li class="icon <?php if($_GET['com']=='mau-tham-khao'){?>active<?php }?>"><a href="mau-tham-khao.html"><?=_mauthamkhao?></a></li>
            <li class=" <?php if($_GET['com']=='thong-tin-lien-he'){?>active<?php }?>"><a href="thong-tin-lien-he.html"><?=_contact?></a></li>
    </ul>

    
    </div>
<div class="ngonngu">
            <a href="ngon-ngu/vi.htm"><img src="images/vi.png" alt="Tiếng Việt"></a>
            <a href="ngon-ngu/en.htm"><img src="images/en.png" alt="Tiếng Anh"></a>
        </div>
</div>