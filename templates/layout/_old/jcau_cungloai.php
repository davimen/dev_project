<script type="text/javascript" language="javascript" src="js/jquery.carouFredSel-6.2.0-packed.js"></script>
<script type="text/javascript" language="javascript">
    $(function() {
        $('#foo4').carouFredSel({
            width: 1200,
            height: 'auto',
            prev: '#prev13',
            next: '#next13',
            auto: true,
            scroll: 1
        });
    });
</script>
<style type="text/css" media="all">
.list_carousel_4 {
	width: 1200px;
	float:left;
	position:relative;
	border:1px solid #dedede;
}
.list_carousel_4 ul {
	margin: 0;
	width: 1200px;
	padding: 0;
	list-style: none;
	display: block;
}
.list_carousel_4 li {
	display: block;
	float: left;
	width:200px;
	padding: 20px;
}
.list_carousel_4.responsive {
	width: auto;
	margin-left: 0;
}
.clearfix {
	float: none;
	clear: both;
}

.prev13{ width: 41px; height: 36px; position: absolute; z-index: 10; background: url(images/left.png) no-repeat; top: 50px; left: 20px;}
.next13{ width: 41px; height: 36px; position: absolute; z-index: 10; background: url(images/right.png) no-repeat; top: 50px; right: 20px;}
</style>
<div class="list_carousel_4">
	<a href="#prev14" id="prev14" class="prev14"></a>
	<a href="#next14" id="next14" class="next14"></a>
    <div class="clearfix"></div>
	<ul id="foo4">
    <?php for($j=0,$count_ch=count($product);$j<$count_ch;$j++){?>
		<li class="item_hot">
		<a href="san-pham/<?=$product[$j]['id']?>/<?=$product[$j]['tenkhongdau']?>.html">
		<?php if($product[$j]['giacu']!=0){?>
			<span class="giamgia_hot">-<?=giamgia($product[$j]['giacu'],$product[$j]['giaban'])?></span>
		<?php } ?>
			<img src="<?=_upload_product_l.$product[$j]['thumb']?>" alt="<?=$product[$j]['ten_'.$lang]?>" />
            <h3><?=$product[$j]['ten_'.$lang]?></h3>
            <p class="giaban">Giá : <?php if($product[$j]['giaban']==0) echo _lienhe; else echo number_format ($product[$j]['giaban'],0,",",",")." VNĐ";?></p>
            <?php if($product[$j]['giacu']!=0){?>
            <p class="giacu">Giá cũ : <?php if($product[$j]['giacu']==0) echo _lienhe; else echo number_format ($product[$j]['giacu'],0,",",",")." VNĐ";?></p>
            <?php } ?>
            
        </a>
        </li>
	<?php } ?>
	</ul>
</div>
        
        
        
		
