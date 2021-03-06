<?php if(!defined('_core')){exit;}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Design by Hotdog
Name       : Nowhere 
Version    : 1.1
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> <?php _templateTitle(); ?> </title>
<meta name="keywords" content="" />
<meta name="Small Window " content="" />
<link href="templates/nowhere/default.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="../nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="./libs/jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="./remote/javascript.php"></script>
<script type="text/javascript" src="./libs/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript" src="./remote/colorbox.php"></script>
<link href="./libs/colorbox/colorbox.css" rel="stylesheet" type="text/css" />
</head>
 <body>

<!-- start header -->
<div id="header">
<div id="logo">
	<h1><a href="http://www.cmszk.tym.cz"><?php echo _title; ?>   </a></h1>
	<p><?php echo _description; ?></p>
</div>
<div id="menu">
<?php _templateUserMenu(); ?>
</div>
 
        
       <div id="slider-wrapper">
            <div id="slider" class="nivoSlider">
                <img src="templates/nowhere/images/banner/Banner_1.jpg" alt="" />
                <img src="templates/nowhere/images/banner/Banner_1A.jpg" alt="" />
                <img src="templates/nowhere/images/banner/Banner_2.jpg" alt="" />   
                <img src="templates/nowhere/images/banner/Banner_2A.jpg" alt="" />
                <img src="templates/nowhere/images/banner/Banner_3.jpg" alt="" /> 
                <img src="templates/nowhere/images/banner/Banner_3A.jpg" alt="" /> 
                <img src="templates/nowhere/images/banner/Banner_4.jpg" alt="" /> 
                <img src="templates/nowhere/images/banner/Banner_4A.jpg" alt="" /> 
                <img src="templates/nowhere/images/banner/Banner_5.jpg" alt="" /> 
                <img src="templates/nowhere/images/banner/Banner_5A.jpg" alt="" /> 
                <img src="templates/nowhere/images/banner/Banner_6.jpg" alt="" /> 
                <img src="templates/nowhere/images/banner/Banner_6A.jpg" alt="" /> 
                <img src="templates/nowhere/images/banner/Banner_7.jpg" alt="" /> 
                <img src="templates/nowhere/images/banner/Banner_7A.jpg" alt="" /> 
                <img src="templates/nowhere/images/banner/Banner_8.jpg" alt="" /> 
                <img src="templates/nowhere/images/banner/Banner_8A.jpg" alt="" /> 
                                                                                  
            </div>
        
      </div>


    <script type="text/javascript" src="templates/nowhere/scripts/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="../nivo-slider/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript" src="../nivo-slider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    


</div>


<!-- start page -->
<div id="page">

<!-- start sidebar -->
	<div id="sidebar1" class="sidebar">
		<ul>
			<li>
			        <?php _templateBoxes(1); ?>
			</li>	
    </ul>
			
	</div>
	
  
  <!-- start obsah -->
  <div id="obsah1" class="obsah">
		<ul>
			<li>
			       <?php _templateContent(); ?> 
			</li>	
    </ul>
			
	</div>
	<!-- end obsah -->
	
	
	
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<div id="footer">
	<p>&copy; 2011 <a href="mailto:hotdog@email.cz">Hotdog</a></p>
</div>
</body> 
</html>

