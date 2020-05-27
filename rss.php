<?php

 /* Générer le flux RSS des actualités
  * @date 9 févr. 11
  * @author Joel ROTELLI
  * TODO
  */

  include("configuration.php");

  //Liste de toutes les actualités
$objActu = new actualites();
$nbActu = 0;
$tabActu = $objActu->GetList($tabWhere, "date", false, "0,10");
$nbActu = count($tabActu);
$tabWhere = array();


header("Content-Type: text/xml;charset=utf-8");

echo "<?xml version='1.0' encoding='utf-8' ?>";

?>

<rss version="2.0">
    <channel>
        <title><?php echo NOM_APPLI; ?></title>
        <link><?php echo SITE_URL; ?></link>
        <description>Actualites</description>
        <language>fr-FR</language>
        <managingEditor><?php echo NOM_APPLI; ?></managingEditor>
        <?php
			foreach($tabActu as $cle=>$actualite) {
				$pubDate = date("r", strtotime($actualite->date));
				?><item>
					<title><?php echo (htmlspecialchars(stripslashes($actualite->titre))); ?></title>
					<link><a href="<?php echo GenererLienV2('actualite',$actualite->actualitesId, $actualite->titre); ?>"><?php echo $actualite->titre?></a></link>
					<description><?php echo (htmlspecialchars(stripslashes($actualite->contenu))); ?></description>
					<pubDate><?php echo $pubDate; ?></pubDate>
				</item>
		<?php } ?>
	</channel>
</rss>

