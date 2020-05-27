<?php
// ini_set('display_errors', 1);
// ini_set('log_errors', true);
// ini_set('error_log', 'errors.log');
include('configuration.php');

$url = $_GET['s'];

$sql = 'SELECT * FROM urls WHERE url = "'.$url.'" LIMIT 1';
if(!$rs = queryRow($sql)) redirect(SITE_URL,0,301);

// page d'accueil
if($rs['cid']==1 && $rs['tid']==1){
	$sql  = 'SELECT * FROM text t, urls u WHERE t.textid = '.$rs['tid'].' AND t.textid = u.tid LIMIT 1';
	$TEXT = queryRow($sql);

	$sql  = 'SELECT * FROM communes c, urls u WHERE c.communesid = '.$rs['cid'].' AND c.communesid = u.cid LIMIT 1';
	$COMM = queryRow($sql);

	$commune = preg_replace('/\(.*\)/','',$COMM['commune']);
	$commune = ucfirst($commune);
	
	$TITLE = $TEXT['menu'].' '.$COMM['commune'].' '.$COMM['cp'].' | '.NOM_APPLI;
	$KEYWORDS = str_replace(' ',',',$TEXT['titre']);
	$DESCRIPTION = $TEXT['titre'];
	$LAT = $COMM['lat'];
	$LNG = $COMM['lng'];
	$PLACENAME = ucfirst($COMM['commune']);
	include('tpl/defaut.tpl.php');
}
// page commune
elseif(!empty($rs['cid']) && empty($rs['tid'])){
	$sql  = 'SELECT * FROM communes c, urls u, activites a WHERE a.activitesid = u.aid AND c.communesid = '.$rs['cid'].' AND c.communesid = u.cid LIMIT 1';
	$COMM = queryRow($sql);
	
	$commune = preg_replace('/\(.*\)/','',$COMM['commune']);
	$commune = ucfirst($commune);
	
	// HEAD
	$TITLE = $COMM['libelle'].' '.$COMM['commune'].' '.$COMM['cp'].' | '.NOM_APPLI;
	$KEYWORDS = str_replace(' ',',',$COMM['libelle'].' '.$COMM['commune'].' '.$COMM['cp']);
	$DESCRIPTION = $COMM['libelle'].' '.$COMM['commune'].' '.$COMM['cp'];
	$LAT = $COMM['lat'];
	$LNG = $COMM['lng'];
	$PLACENAME = ucfirst($COMM['commune']);
	include('tpl/commune.tpl.php');
}
// page activité
elseif(!empty($rs['cid']) && !empty($rs['tid'])){
	$sql  = 'SELECT * FROM text t, urls u WHERE t.textid = '.$rs['tid'].' AND t.textid = u.tid LIMIT 1';
	$TEXT = queryRow($sql);

	$sql  = 'SELECT * FROM communes c, urls u WHERE c.communesid = '.$rs['cid'].' AND c.communesid = u.cid LIMIT 1';
	$COMM = queryRow($sql);
	
	$TITLE = $TEXT['titre'].' | '.NOM_APPLI;
	$KEYWORDS = str_replace(' ',',',$TEXT['titre']);
	$DESCRIPTION = $TEXT['titre'];
	include('tpl/interne.tpl.php');
}
// mention légales
else{
	$sql  = 'SELECT * FROM text t, urls u WHERE t.textid = '.$rs['tid'].' AND t.textid = u.tid LIMIT 1';
	$TEXT = queryRow($sql);
	
	$TITLE = $TEXT['titre'].' | '.NOM_APPLI;
	$KEYWORDS = str_replace(' ',',',$TEXT['titre']);
	$DESCRIPTION = $TEXT['titre'];
	
	/* tie */
	if ($TEXT['titre'] == "Mentions légales") {
		include('tpl/diag2.tpl.php');
	}
	else {
		include('tpl/diag.tpl.php');
	}
}
