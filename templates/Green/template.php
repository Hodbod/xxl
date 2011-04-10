<?php if(!defined('_core')){exit;}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php _templateHead(); ?>
</head>

<body>

<div id="outer">

  <!-- header -->
	<div id="header">
		<h1><a href="./"><?php echo _title; ?></a></h1>
		<h2><?php echo _description; ?></h2>
	</div>
	
 <!-- page -->
	<div id="page">
	<div id="page-pad">

    <!-- content -->
		<div id="content">
			<div id="content-pad">
<?php _templateContent(); ?>
			</div>
		</div>
	
		<!-- column -->
		<div id="column">
		<div id="column-pad">
<?php _templateBoxes(1); ?>
		</div>
		</div>

  <div class="cleaner"></div>
	</div>
	</div>
	
	<!-- footer -->
	<div id="footer">
		<p>Designed by <a href="http://www.freecsstemplates.org/" target="_blank" rel="nofollow">Free CSS Templates</a><?php _templateLinks(true); ?></p>
	</div>

</div>

</body>
</html>