<?php if(!defined('_core')){exit;}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php _templateHead(); ?>

</head>

<body>
  
<div id="shade-middle">

  <div id="splash">
   		<div id="menu"><?php _templateUserMenu(); ?></div>
  	<div id="logo">
	  	<h1><a href="./"><?php echo _title; ?></a></h1>
  		<h2><?php echo _description; ?></h2>
	  
	    <div id="frm">
        <?php echo _parseHCM("[hcm]search[/hcm]"); ?>
      </div>
    </div> 
    
  </div>

	<div id="colTwo"><?php _templateBoxes(1); ?></div> 
  <div id="col_top"></div> 
	<div id="colOne"><?php _templateContent(); ?></div>
  <div id="col_bot"></div>
  <div class="cleaner"></div>

</div>

<div class="footer_top"></div>
<div id="footer"><p>Hotdog © |<a href="http://cmszk.tym.cz/admin" title="administrace"> administrace</a></p></div>

</body>
</html>
