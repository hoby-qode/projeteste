<?php

$page = "diagrdv";
include("configuration.php");
if(!(defined('RDV_DIAG') && RDV_DIAG === true)){
  redirect('demande-devis.php');
  die;
}

$NOINDEX = true;
$TITLE = 'DIAG RDV | '.NOM_APPLI;
?>

<?php include('tpl/head.tpl.php'); ?>
<?php include("tpl/haut.tpl.php"); ?>
<div class="container">
  <div class="section-title-left" style="margin-top: 30px;">
    <div class="h2">Demande de <span>devis</span></div>
  </div>
  <!-- START BLOC RDV DIAG -->
  <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" />
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
  <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript">
    var jQueryRdvDiag = jQuery.noConflict(true);
  </script>
  <script src="//t4.sogexpert.com/sogexpert/js/rdvdiag/bootstrap.min.js"></script>
  <!-- END BLOCK RDV DIAG -->


  <div id="rdv_diag_erp" headerfooter data-auto_set_content="<?php echo (isset($_GET['auto_set_content']) && $_GET['auto_set_content'] !== "")?$_GET['auto_set_content']:"rdv_diag" ?><?php echo (isset($_GET['infos']) && $_GET['infos'] !== "")?("&infos=".$_GET['infos']):"" ?><?php echo (isset($_GET['debug'])?'&debug':'') ?>"></div>
  <style>
  </style>
  <div id="loader_rdv_diag" style="display:none">
    <div class="info_screen_rdv_diag" style="background-image: url('<?php echo URL_SOGEXPERT . "/images/rdv_diag/sablier.png" ?>')">
      <div class="first center">
        <div>
          <i class="fa fa-spinner fa-pulse" style=""></i>
        </div>
      </div>
      <div class="second">
        <h2 style=""><span class="text_loading_rdvdiag">Enregistrement en cours,</span><br>merci de patienter...</h2>
      </div>
    </div>
  </div>
</div>
<link rel="stylesheet" href="css/override_erp_rdv_diag.css" />
<link  href="css/stylecss-includepam.css" rel="stylesheet" type="text/css" />


<?php include("tpl/bas.tpl.php"); ?>
