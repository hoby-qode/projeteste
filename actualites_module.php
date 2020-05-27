<?php
	@include("configuration.php");

	//Liste de toutes les actualités
	$objActu = new actualites();
	$nbActu = 0;
	$tabActu = $objActu->GetList($tabWhere, "date", false, "0,5");
	$nbActu = count($tabActu);
	$tabWhere = array();

	if($nbActu > 0) {
		if($nbActu > 1) $s="s";

		echo '<link rel="stylesheet" href="'.APPLI_URL.'/css/stylemutu.css" type="text/css"/>';
		echo "<div id='bloc_actuhome'><h3>Dernières actualités <a href='rss.php' id='linkRSS' title='Flux RSS des Actualités'><img src='imgmutu/rss.gif' alt='RSS' width='18' border='0' /></a></h3><div class='clearer'></div>";

		foreach($tabActu as $cle=>$actualite) { ?>
			<span class="lastactu"><a href="<?php echo GenererURL('actualite',$actualite->actualitesId, $actualite->titre); ?>"><?php echo $actualite->titre?></a></span>
			<br />
		<?php
		}

	}
