<?php include('curl_liencontenu_sogexpert.php'); ?>
<?php 
$sql = 'SELECT libelle FROM activites';
$acts = queryO($sql);
$nb_act = count($acts);

$sql = 'SELECT url, commune, cid, a.libelle
	FROM urls u, communes c, activites a
	WHERE u.cid = c.communesid 
	AND a.activitesid = u.aid
	AND tid = 0
	AND cid != "'.$rs['cid'].'"
	ORDER BY RAND('.$rs['id'].')';
$COMMS = queryO($sql);
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
  <title> 
  <?php echo strip_tags($TITLE);?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="X-UA-Compatible" content="IE=9">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $DESCRIPTION ?>" />
    <link rel="stylesheet" href="css/bootstrap.min-backup.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">  
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link href="<?php echo SITE_URL ?>/fav.png" rel="icon" type="image/x-icon" />
	<!-- steeve -->
	<link rel="stylesheet" href="css/actualite.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/imp.css">
	<link rel="stylesheet" href="css/custom-animate.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/owl.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/style-backup.css">
	<link rel="stylesheet" href="css/responsive2.css">
	<link rel="stylesheet" href="css/nouislider.css">
	<link rel="stylesheet" href="css/nouislider.pips.css">
	<link rel="stylesheet" href="css/imp.css">
	<link rel="stylesheet" href="css/custom-animate.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/owl.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">

	  <!-- Fixing Internet Explorer-->
   
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
   
