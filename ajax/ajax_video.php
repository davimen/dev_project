<?php
	session_start();
	@define ( '_template' , '../templates/');
	@define ( '_lib' , '../libraries/');
	@define ( '_source' , '../sources/');

	if(!isset($_SESSION['lang']))
	{
	$_SESSION['lang']='vi';
	}
	$lang=$_SESSION['lang'];


	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	include_once _source."lang_$lang.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
	$d = new database($config['database']);
	
	$d->reset();
  $sql = "select * from #_video where hienthi=1 and  type='video'  order by stt,id desc";
  $d->query($sql);
  $result_videoclip = $d->result_array();
	
	$id_video=end(explode('v=',$result_videoclip[0]['links']));
	
?>

<iframe width="100%" class="" height="300" src="https://www.youtube.com/embed/<?=$id_video?>" frameborder="0" allowfullscreen></iframe>
