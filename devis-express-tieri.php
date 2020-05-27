<?php
	include("configuration.php");
	 
    if(defined('RDV_DIAG') && RDV_DIAG === true){
        if(isset($_POST) && sizeof($_POST) > 0){
            $_SESSION['post'] = $_POST;
            $_SESSION['post']['devis_express'] = 1;
        }
        redirect('rdv_diag.php');
        die;
    }
	include(APPLI_SRC."/inc/phpmail.class.php");
	include(APPLI_SRC."/devis-express-tieri.php");
	
	$TITLE = 'Demande de devis express | '.NOM_APPLI;
?>
<?php include('tpl/head.tpl.php');?>
<?php include('tpl/valid.tpl.php');?>
<meta name="robots" content="noindex, nofollow" />
<script src="<?php echo APPLI_URL; ?>/js/fonctions.js" type="text/javascript" charset="utf-8"></script>


<?php include("tpl/haut.tpl.php"); ?>

<section class="contact-form-area">
    <div class="container">
		<div class="row clearfix">
			<div class="col-xl-12 col-lg-12 col-md-12">
				<div class="contact-form">
					<div class="title">
                        <h3>Devis Express</h3>
                    </div>
				</div>
				
<?php
				if(sizeof($tabErreurForm) > 0) {
					echo "<ul class='ulError'>";
						foreach($tabErreurForm as $error) {
							echo "$error";
						}
					echo "</ul>";
				}
			?>				
				
				<div class="inner-box" id="devisExpress">
			<?php if(empty($info)) { ?>
					<form id="formContact" name="devisform" class="appnitro"  method="post" action="devis-express-tieri.php" >
						<p>Remplissez ce formulaire de demande de devis express</p>
						<div class="row">
							<label class="description">Quel est le type de transaction ?</label>
						</div>
						<div class="row">
							<div class=" col-md-4"><input type="radio" name="typebien" value="vente" <?php echo !isset($_POST['typebien']) || $_POST['typebien']=='vente' ? 'checked="checked"' :'' ?> />Vente</div>
							<div class=" col-md-4"><input type="radio" name="typebien" value="location" <?php echo $_POST['typebien']=='location' ? 'checked="checked"' :'' ?>/>Location</div>
							<div class=" col-md-4"><input type="radio" name="typebien" value="autre" <?php echo $_POST['typebien']=='autre' ? 'checked="checked"' :'' ?> />Autre</div>
						</div>
						<div class="row">
							<div class="col-md-3">
                                    <div class="input-box"> 
                                        <input type="text" name="codepostal" id="codepostal" required="required" class="text" placeholder="Code postal du bien" value="<?php echo $_POST['codepostal']; ?>"/>
                                    </div>      
                                </div>
							<div class="col-md-3">
                                    <div class="input-box"> 
                                        <input type="text" name="nom" id="nom" required="required" class="text" placeholder="Votre nom" value="<?php echo $_POST['nom']; ?>"/>
                                    </div>      
                                </div>
							<div class="col-md-3">
                                    <div class="input-box"> 
                                        <input id="prenom" name="prenom"  class=" text medium" type="text"  placeholder="Votre prénom" value="<?php echo $_POST['prenom']; ?>" />
                                    </div>      
                                </div>
							<div class="col-md-3">
                                    <div class="input-box"> 
                                        <input id="email" name="email" required="required"  class="text medium" type="email" placeholder="Votre adresse email"  value="<?php echo $_POST['email']; ?>" />
                                    </div>      
                                </div>
						</div>
						<div class="row">
							<p style="padding:5px;font-size:12px;">En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de la demande de contact et de la relation commerciale qui peut en découler. </p>
									<div align="center">
										<button class="btn-one" type="submit" data-loading-text="Patientez svp...">Valider la demande</button> 
							</div>
						</div>
					</form>
			<?php } else echo $info; ?>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include("tpl/bas.tpl.php"); ?>
