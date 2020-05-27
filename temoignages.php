<?php 
include("configuration.php");
$liste_color = array('cb2424','fe8181');
$page = "temoignages";
date_default_timezone_set('Europe/Paris');

$TITLE = 'Témoignages | '.NOM_APPLI;

$avis = file_get_contents(URL_SOGEXPERT.'/api_avis?get_xml');
$xml = simplexml_load_string($avis);

if(empty($xml->avis)  || $xml->avis == 'Non activé'){
    header('Location:livre-d-or.php');
    die;
}
?>

<?php include(FILE_SRC.'/tpl/head.tpl.php'); ?>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/temoignages.css">
<?php include(FILE_SRC."/tpl/haut.tpl.php"); ?>
<section id="baner" style="background-image: url(images/ban-1.png);"></section>
<h1>
    <span class="first__mark">
        <span class="first__mark-text">Témoignages</span>
    </span>
</h1>

<?php 
$j=0;
foreach($xml->avis as $a){
    $date = new DateTime($a->date); 
    $color = $liste_color[$j%2];
?>

<div class="aviss">
    <div class="user">
        <div class="avatar" style="background-color:#<?php echo $color; ?>">
            <?php echo (substr($a->auteur, 0, 1) != ' ' ? substr($a->auteur, 0, 1) : substr($a->auteur, 1, 1) ); ?>
        </div>
        <div class="login">
            <?php echo $a->auteur; ?>								
        </div>

    </div>
    <div class="cont">
        <div class="rating-review">
            <span class="rating">
                <small class="text-gray-800"><?php echo $a->notes; ?>.00/5.00</small>
                <?php for($i = 1; $i <= 5; $i++) {                    
        if(intval($a->notes) >= $i){ ?>
                <i class="fa fa-star fa-2 full"></i>
                <?php } else { ?>
                <i class="fa fa-star fa-2 empty"></i>
                <?php } ?>
                <!-- <em>4.50/5.00</em> -->
                <?php } ?>

            </span>
        </div>

        <div class="titre" style="text-transform: uppercase;">
            <?php if(!empty($a->titre)){ ?>
            <h3 style="color:#<?php echo $color; ?>; font-weight : bold">"<?php echo $a->titre; ?>"</h3>
            <?php } ?>
        </div>
        <div style="color: #6f6f6f">
            <?php echo $a->a; ?>
        </div>
        <div>
            <small>Publié le <?php echo $date->format('d.m.Y'); ?></small>                   
        </div>

        <?php 
    if(!empty($a->reponse)) { 
        $reponse = $a->reponse;

        $dateR = new DateTime($reponse->date); ?>

        <div class="reponse">
            <div class="reponse-content">
                <div class="row no-gutters">
                    <div class="col mr-2">
                        <div class="font-weight-bold text-uppercase mb-1">
                            <?php if(!empty($reponse->titre)){ ?>
                            <h3 style="font-weight : bold">"<?php echo $reponse->titre; ?>"</h3>
                            <?php } ?>
                        </div>
                        <div class="h5 mb-0 text-gray-500"><?php echo $reponse->a ?></div>
                    </div>
                    <div class="col-auto">
                        <!--<i class="fas fa-calendar fa-2x text-gray-300"></i>-->
                    </div>
                </div>
                <div  class="row no-gutters pt-2 align-items-center">
                    <div class="col mr-2">
                        <small>Répondu le <?php echo $dateR->format('d.m.Y'); ?></small>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


<?php 
$j++;
} ?>
<div class="clear"></div>
<?php include(FILE_SRC."/tpl/bas.tpl.php"); ?>