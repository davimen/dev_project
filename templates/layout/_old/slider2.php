
    <!-- Insert to your webpage before the </head> -->
     
    <script src="js/sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="js/sliderengine/amazingslider-1.css">
    <script src="js/sliderengine/initslider-1.js"></script>
    
    
<?php  
	$d->reset();
	$sql= "select * from #_photo where hienthi=1 and com='slider' order by stt,id desc ";
	$d->query($sql);
	$slide_show = $d->result_array();
	
		
	$d->reset();
    $sql = "select photo,ten_$lang,tenkhongdau,id,mota_$lang from #_baiviet where type='tin-tuc'  and noibat >0  order by stt,id desc limit 0,3";
    $d->query($sql);
    $result_newsHot = $d->result_array();
	
	
?>

<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1349px;margin:0px auto;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><img src="images/02.jpg" alt="02"  title="02" />
                </li>
                <li><img src="images/03.jpg" alt="03"  title="03" />
                </li>
                <li><img src="images/04.jpg" alt="04"  title="04" />
                </li>
                <li><img src="images/7386818628423440.jpg" alt="7386818628423440"  title="7386818628423440" />
                </li>
                <li><img src="images/slider.png" alt="slider"  title="slider" />
                </li>
                <li><img src="images/01.jpg" alt="01"  title="01" />
                </li>
                <li><img src="images/02.jpg" alt="02"  title="02" />
                </li>
                <li><img src="images/03.jpg" alt="03"  title="03" />
                </li>
                <li><img src="images/04.jpg" alt="04"  title="04" />
                </li>
                <li><img src="images/7386818628423440.jpg" alt="7386818628423440"  title="7386818628423440" />
                </li>
                <li><img src="images/slider.png" alt="slider"  title="slider" />
                </li>
                <li><img src="images/01.jpg" alt="01"  title="01" />
                </li>
                <li><img src="images/02.jpg" alt="02"  title="02" />
                </li>
                <li><img src="images/03.jpg" alt="03"  title="03" />
                </li>
                <li><img src="images/04.jpg" alt="04"  title="04" />
                </li>
                <li><img src="images/7386818628423440.jpg" alt="7386818628423440"  title="7386818628423440" />
                </li>
                <li><img src="images/slider.png" alt="slider"  title="slider" />
                </li>
                <li><img src="images/01.jpg" alt="01"  title="01" />
                </li>
                <li><img src="images/02.jpg" alt="02"  title="02" />
                </li>
                <li><img src="images/03.jpg" alt="03"  title="03" />
                </li>
                <li><img src="images/04.jpg" alt="04"  title="04" />
                </li>
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="images/02-tn.jpg" alt="02" title="02" /></li>
                <li><img src="images/03-tn.jpg" alt="03" title="03" /></li>
                <li><img src="images/04-tn.jpg" alt="04" title="04" /></li>
                <li><img src="images/7386818628423440-tn.jpg" alt="7386818628423440" title="7386818628423440" /></li>
                <li><img src="images/slider-tn.png" alt="slider" title="slider" /></li>
                <li><img src="images/01-tn.jpg" alt="01" title="01" /></li>
                <li><img src="images/02-tn.jpg" alt="02" title="02" /></li>
                <li><img src="images/03-tn.jpg" alt="03" title="03" /></li>
                <li><img src="images/04-tn.jpg" alt="04" title="04" /></li>
                <li><img src="images/7386818628423440-tn.jpg" alt="7386818628423440" title="7386818628423440" /></li>
                <li><img src="images/slider-tn.png" alt="slider" title="slider" /></li>
                <li><img src="images/01-tn.jpg" alt="01" title="01" /></li>
                <li><img src="images/02-tn.jpg" alt="02" title="02" /></li>
                <li><img src="images/03-tn.jpg" alt="03" title="03" /></li>
                <li><img src="images/04-tn.jpg" alt="04" title="04" /></li>
                <li><img src="images/7386818628423440-tn.jpg" alt="7386818628423440" title="7386818628423440" /></li>
                <li><img src="images/slider-tn.png" alt="slider" title="slider" /></li>
                <li><img src="images/01-tn.jpg" alt="01" title="01" /></li>
                <li><img src="images/02-tn.jpg" alt="02" title="02" /></li>
                <li><img src="images/03-tn.jpg" alt="03" title="03" /></li>
                <li><img src="images/04-tn.jpg" alt="04" title="04" /></li>
            </ul>
        
        </div>
    </div>
    <!-- End of body section HTML codes -->



