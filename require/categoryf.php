<?php

//kontrola jadra
if(!defined('_core')){exit;}

//nastaveni strankovani
$artsperpage=10;

//titulek, obsah
$content="";
if(_template_autoheadings){
  $content.='<h3><span class="cole"></span>'.$title.'<span class="cori"></span></h3>';
}

$content.='<div class="intersection left_column">';

if (sizeof($tree)>1) {
  //$percol=ceil(count(mysql_result(mysql_query("SELECT count(*) FROM `"._mysql_prefix."-categories` WHERE parent=".$id),0))/3);
  $x=1;
  $content.='<table class="tabcompcat">';
  foreach ($tree as $key=>$value) {
    if ($x==1){$content.='<tr>';}
  	if ($key!=$id and $value['parent']==$id){
      $counter=_getCount($key);
      $content.='<td><a href="'._linkCat($key).'">'.$value['title'].'</a> ('.$counter.')</td>';
      if ($x==3){$content.='</tr>';$x=0;}
      $x++;
    }
  }
  $content.='</tr></table><div class="clear"></div>';
  $content.="<div class='hr'><hr /></div>";
}

$content.="<div class='wherecomp'>";
$rid=$_GET['rid']*1;
$cities=_getCities();
$bc_arr=_breadcrumbs('cities',$rid);
$bc_arr=array_reverse($bc_arr);
foreach ($bc_arr as $key=>$value) {
	$breadcrumbs.='<li>'.($rid!=$value['id'] ? '<a href="'._addGetToLink(_indexOutput_url,'rid='.$value['id']).'">'.$value['title'].'</a>':$value['title']).'</li>';
}
unset($_SESSION['breadcrumbs']);
$content.='<div class="breadcrumbs"><ul>';
if ($rid!=0){
  $content.='<li><a href="'._indexOutput_url.'">Česká Republika</a></li>'.$breadcrumbs;
}
else{
  $content.='<li>Česká Republika</li>';
}
$content.='</ul></div>';
foreach ($cities as $key=>$value) {
  if($value['parent']!=$rid)continue;
	$content.='<a href="'._addGetToLink(_indexOutput_url,'rid='.$value['id']).'">'.str_replace(' ','&nbsp;',$value['title']).'</a>&nbsp;&nbsp;&nbsp; ';
}
$content.="</div>";
$content.="<div class='hr'><hr /></div>";

$regions=_getChildren('cities',$rid);
unset($_SESSION['children']);

$cond[]="f.confirmed=1 ";
$cond[]="c.catid IN (".implode(',',array_keys($tree)).") ";
$cond[]="(f.region IN (".implode(',',array_keys($regions)).") OR b.region IN (".implode(',',array_keys($regions)).")) ";
$sql="SELECT c.*,f.*,t.price as price
        FROM `"._mysql_prefix."-companies` f
        LEFT JOIN `"._mysql_prefix."-compcats` c
          ON f.id=c.cid
        LEFT JOIN `"._mysql_prefix."-tariffs` t
          ON f.tarif=t.id
        LEFT JOIN `"._mysql_prefix."-branches` b
          ON f.id=b.company
        WHERE ".implode(' AND ',$cond)."
        GROUP BY f.title
        ORDER BY price desc";
//$content.=$sql;
$arts=mysql_query($sql);
$paging=_resultPaging(_addGetToLink(_indexOutput_url,'rid='.$rid), $artsperpage, mysql_num_rows($arts));
$paged_arts=mysql_query($sql." ".$paging[1]);
  if(mysql_num_rows($paged_arts)!=0){
    if(_pagingmode==1 or _pagingmode==2){$content.=$paging[0];}
    while($art=mysql_fetch_array($paged_arts)){$content.=_companyPreview($art);}
    if(_pagingmode==2 or _pagingmode==3){$content.='<br />'.$paging[0];}
  }
  else{
    $content.=$_lang['companies.nofirms'];
  }

$content.='</div>';
$content.='<div class="intersection right_column">';
$content.='<div class="box">
            <h3><span class="cole"></span>Akční nabídky<span class="cori"></span></h3>
            <div class="action_offer">';
$content.=_parseHCM('[hcm]jv_actions[/hcm]');
$content.='</div>
          </div>';
$content.='</div>';

?>