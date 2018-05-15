<?php

	$title_bar .= "Thanh Toán";
	$php_link .= '<link href="css/giohang.css" rel="stylesheet" type="text/css" />';

	$d->reset();
	$sql = "select * from #_tinh where hienthi=1 order by ten ";
	$d->query($sql);
	$tinhthanh_tt = $d->result_array();
?>