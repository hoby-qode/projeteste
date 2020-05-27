<?php
include('configuration.php');

/* 
* Personalisation 
*/

$TID = 1; // textid
$CID = 10; // communesid (0 si pas de commune associée)
$TITLE = 'Mon_titre | '.NOM_APPLI;
$KEYWORDS = 'Mes_mots_cle';
$DESCRIPTION = 'Ma_description';

/*
* Ne plus toucher
*/

$sql  = 'SELECT * FROM text t, urls u WHERE t.textid = '.$TID.' AND t.textid = u.tid LIMIT 1';
$TEXT = queryRow($sql);

if($CID){
	$sql  = 'SELECT * FROM communes c, urls u WHERE c.communesid = '.$CID.' AND c.communesid = u.cid LIMIT 1';
	if($COMM = queryRow($sql)){
		$commune = preg_replace('/\(.*\)/','',$COMM['commune']);
		$commune = ucfirst($commune);
		$LAT = $COMM['lat'];
		$LNG = $COMM['lng'];
		$PLACENAME = ucfirst($COMM['commune']);
	}
}

include('diags.php');
$sql = 'SELECT tid FROM urls, ordre WHERE principale = 1 AND tid = o1 ORDER BY o'.($TEXT['textid']%20).' ASC';
$activites = queryO($sql);
foreach($activites as $row){
	if($row->tid != 1) $_acts[] = $diags[$row->tid]['title'];
	$acts[] = $diags[$row->tid]['title'];
}
$nb_act = count($_acts);


include('tpl/defaut.tpl.php');
