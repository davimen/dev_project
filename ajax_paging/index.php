<?php
	session_start();

	@define ( '_lib' , '../libraries/');
	@define ( '_source' , '../sources/');	
	
	if(!isset($_SESSION['lang']))
	{
	$_SESSION['lang']='vi';
	}
	$lang=$_SESSION['lang'];

	$id_list = $_POST["id_list"];
	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	include_once _source."lang_$lang.php";
	$d = new database($config['database']);
	
	if(isset($_POST["page"]))
    {
	$paging = new paging_ajax();
	$paging->class_pagination = "pagination";
	$paging->class_active = "active";
	$paging->class_inactive = "inactive";
	$paging->class_go_button = "go_button";
	$paging->class_text_total = "total";
	$paging->class_txt_goto = "txt_go_button";
    $paging->per_page = 6; 	
    $paging->page = $_POST["page"];
    $paging->text_sql = "select ten_$lang,thumb,thumb,giaban,tenkhongdau,mota_$lang,lienhe from table_product where hienthi=1 and id_list='".$id_list."' order by stt,id desc";
    $result_pag_data = $paging->GetResult();
	$message = "";
	$paging->data = "" . $message . "";
    }
	 
?>



<ul class="product_home">
<?php while ($row = mysql_fetch_array($result_pag_data)) {?>  

 		<li class="item">
            <a href="bat-dong-san/<?=$row['tenkhongdau']?>.html">
                <img src="<?=_upload_product_l.$row['thumb']?>" alt="<?=$row['ten_'.$lang]?>" />
            </a>
            <div class="item_info">
                <h3><a href="bat-dong-san/<?=$row['tenkhongdau']?>.html"><?=$row['ten_'.$lang]?></a></h3>
                <p><?=catchuoi($row['mota_'.$lang],170)?></p>
                <p class="lienhe_con"><b><?=$row['lienhe']?></b></p>
                <p class="giaban"><?=_gia?> : <span> <?php if($row['giaban']==0) echo 'Liên hệ'; else echo read_number_bds($row['giaban']);?></span><p>
            </div>
        </li>

  <?php } ?>   
</ul>
<div class="clear"></div>
<?=$paging->Load()?>


