<?php

	include('configuration.php');
	$pages = queryO('SELECT url FROM urls');
	$actus = queryO('SELECT actualitesid, titre, date FROM actualites');

	header("Content-Type: application/xml; charset=utf-8");
	
	echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<?php
	if(count($pages)) foreach($pages as $row){echo "\t".'<url><loc>'.SITE_URL.'/'.$row->url.'</loc><changefreq>monthly</changefreq><priority>0.5</priority></url>'."\n";}
	if(count($actus)) foreach($actus as $row){echo "\t".'<url><loc>'.SITE_URL.GenererURL('actu',$row->actualitesid,$row->titre).'</loc><changefreq>monthly</changefreq><lastmod>'.date('Y-m-d', strtotime($row->date)).'</lastmod><priority>0.5</priority></url>'."\n";}
?>

</urlset>