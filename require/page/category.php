<?php
//kontrola jadra
if(!defined('_core')) {
    exit;
}

//nastaveni strankovani
$artsperpage = $query['var2'];
switch($query['var1']) {
    case 1:
        $artorder = "time DESC";
        break;
    case 2:
        $artorder = "id DESC";
        break;
    case 3:
        $artorder = "title";
        break;
    case 4:
        $artorder = "title DESC";
        break;
}

//titulek, obsah
$title = $query['title'];
$content = "";
if(_template_autoheadings) {
    $content .= "<h1>".$query['title']._linkRSS($id, 4)."</h1>\n"._parseHCM($query['content'])."\n<div class='hr'><hr /></div>\n\n";
} else {
    $content .= _linkRSS($id, 4);
    if($query['content'] != "") {
        $content .= _parseHCM($query['content'])."<div class='hr'><hr /></div>";
    }
}

//vypis clanku
$arts_cond = "(home1=".$id." OR home2=".$id." OR home3=".$id.") AND "._sqlArticleFilter()." ORDER BY ".$artorder;
$paging = _resultPaging(_indexOutput_url, $artsperpage, "articles", $arts_cond);
$arts = mysql_query("SELECT id,title,author,perex,time,comments,readed FROM `"._mysql_prefix."-articles` WHERE ".$arts_cond." ".$paging[1]);

if(mysql_num_rows($arts) != 0) {
    if(_pagingmode == 1 or _pagingmode == 2) {
        $content .= $paging[0];
    }
    while($art = mysql_fetch_assoc($arts)) {
        $content .= _articlePreview($art, $query['var3'] == 1);
    }
    if(_pagingmode == 2 or _pagingmode == 3) {
        $content .= '<br />'.$paging[0];
    }
} else {
    $content .= $_lang['misc.category.noarts'];
}

?>