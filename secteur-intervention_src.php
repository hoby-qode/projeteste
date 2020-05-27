<?php 
	include("configuration.php");
	include('tpl/head.tpl.php');
	include("tpl/haut.tpl.php");  

	$sql  = 'SELECT lat, lng, commune, u.url FROM communes c, urls u WHERE u.cid = c.communesid AND u.tid IN(0,1)';
	$COMM = query($sql);
	foreach($COMM as $i=>$val){
		$COMM[$i]->data = array(
			'ville' => '<img src="/favicon.png" />'.$val->commune,
			'url' => SITE_URL.'/'.$val->url
		);
		$lats[] = $val->lat; 
		$lngs[] = $val->lng; 
	}
	$center = array((array_sum($lats)/count($lats)),(array_sum($lngs)/count($lngs)));
	$zoom = 9;
	while ($data = mysql_fetch_array($COMM)) {
	// on affiche les résultats
	echo 'commune : '.$data['commune'].'<br />';
	echo 'lng : '.$data['lng'].'<br />';
	echo 'lat : '.$data['lat'].'<br /><br />';
	}
?>

 <section class="content-page pb-50 pt-50">
	<div class="auto-container ">
		<div class="row">
			<div class="col-12">
				<h1>Secteur d'interventions</h1>
				<?php include(APPLI_SRC."/secteur-intervention.php");?>
			  </div>
		</div>
	</div>
</section>

<?php include("tpl/bas.tpl.php"); ?>
