<?php
/*--- kontrola jadra ---*/
if(!defined('_core')) {
    exit;
}

/*--- vystup ---*/
$module = _uniForm("login", array('return' => 'mod', 'returnpath' => null));
$module = $module[0];

//moznosti
if(_loginindicator) {
    $module .= "<h2>".$_lang['global.choice']."</h2>\n<ul>\n";

    //pole polozek (adresa, titulek, podminky pro zobrazeni)
    $items = array(array("index.php?m=settings", $_lang['mod.settings'], true), array("index.php?m=profile&amp;id="._loginname, $_lang['mod.settings.profilelink'], true), array("index.php?m=messages", $_lang['mod.messages']." [".mysql_result(mysql_query("SELECT COUNT(id) FROM `"._mysql_prefix."-messages` WHERE receiver="._loginid." AND readed=0"), 0)."]", _messages), array("admin/", $_lang['admin.title'], _loginright_administration));

    //vypis
    foreach($items as $item) {
        if($item[2]) {
            $module .= "<li><a href='".$item[0]."'>".$item[1]."</a></li>\n";
        }
    }

    $module .= "</ul>\n";
}

?>