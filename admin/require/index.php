<?php
/*--- kontrola jadra ---*/
if(!defined('_core')) {
    exit;
}

/*--- pripava promennych ---*/
$mysqlver = mysql_get_server_info();
if(mb_substr_count($mysqlver, "-") != 0) {
    $mysqlver = mb_substr($mysqlver, 0, strpos($mysqlver, "-"));
}
$software = getenv('SERVER_SOFTWARE');
if(mb_strlen($software) > 16) {
    $software = substr($software, 0, 13)."...";
}

/*--- vystup ---*/

//nacteni verze mysql
$mysqlver = @mysql_get_server_info();
if($mysqlver != null and mb_substr_count($mysqlver, "-") != 0) {
    $mysqlver = mb_substr($mysqlver, 0, strpos($mysqlver, "-"));
}

$output .= "
<table id='indextable'>


<tr valign='top'>

<td>
  <h1>".$_lang['admin.menu.index']."</h1>
   <p>".$_lang['admin.index.p']."</p>
  <p><br /><div style='text-align: center;'><img src='images/logoskp_modra.gif' alt='' width='330' height='300' /></div></p>
</td>


<td width='300'>
  <h2>".$_lang['admin.index.box']."</h2>
  <p>
  <strong>".$_lang['global.version'].":</strong> "._systemversion."<br />
  <span id='hook'></span>
  <strong>PHP:</strong> ".PHP_VERSION."<br />
  <strong>MySQL:</strong> ".$mysqlver."<br />
  </p>
  <h2>".$_lang['admin.index.box.t']."</h2>
  <ul class='net'>
  <li><a href='http://sunlight.shira.cz/' target='_blank'>".$_lang['admin.link.web']."</a></li>
  <li><a href='http://sunlight.shira.cz/feedback/docs.php' target='_blank'>".$_lang['admin.link.docs']."</a></li>
  <li><a href='http://sunlight.shira.cz/feedback/forum.php' target='_blank'>".$_lang['admin.link.forum']."</a></li>
  <li><a onclick=\"window.open('/dokumentace/','XXL Dokumentace','resizable=yes,scrollbars=yes,width=800,height=600,left=300,top=300');return false;\" href=\"#\">".$_lang['admin.link.docs.xxl']."</a></li>
  </ul>


  <tr>

</tr>
</table>

<br />
<table id='indextable'>
<tr valign='top'>
<td width='200' style='height:250px;overflow:auto;'>
<h2>".$_lang['admin.index.online']."</h2>
"._parseHCM("[hcm]users,2,5[/hcm]")."
</td>


<td width='150' style='height:250px;overflow:auto;'>
<h2>".$_lang['admin.index.reg']."</h2>
"._parseHCM("[hcm]users,1,5[/hcm]")."
</td>


<td width='300' style='height:250px;overflow:auto;'>
<h2>".$_lang['admin.index.waiting']."</h2>
"._parseHCM("[hcm]custom,articleblocked[/hcm]")."
</td>




</td>

</tr>


</table>



<script type='text/javascript'>_sysScriptLoader(_hook);</script>
";

?>