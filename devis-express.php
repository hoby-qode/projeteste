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
	include(APPLI_SRC."/devis-express.php");
	
	$TITLE = 'Demande de devis express | '.NOM_APPLI;
?>
<?php include('tpl/head.tpl.php');?>
<?php include('tpl/valid.tpl.php');?>
<meta name="robots" content="noindex, nofollow" />
<script src="<?php echo APPLI_URL; ?>/js/fonctions.js" type="text/javascript" charset="utf-8"></script>


<?php include("tpl/haut.tpl.php"); ?>
<section id="baner" style="background-image: url(images/ban-1.png);"></section>
    <section class="">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                	<div class="sec-title" >	
						<h1>Devis Express</h1>
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
                </div>
            </div>
        </div>
    </section>
				<?php if(empty($info)) { ?>
                <section style="background:linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));">
					<form id="formContact" name="devisform" method="post" action="devis-express.php">
					  	<ul id="progressbar">
					    	<li class="active">Type de transaction</li>
					    	<li>Vos coordonnés</li>
					    	<li>Details personnels</li>
					  	</ul>
					  	<fieldset>
					    	<h2 class="fs-title">Quel est le type de transaction ?</h2>
					    	<h3 class="fs-subtitle">étape 1</h3>
					    	<input id="r4" type="radio" name="radio" <?php echo !isset($_POST['typebien']) || $_POST['typebien']=='vente' ? 'checked="checked"' :'' ?>/>
					    	<label for="r4">
					        une vente
					    	</label>
					    	<input id="r5" type="radio" name="radio" <?php echo $_POST['typebien']=='location' ? 'checked="checked"' :'' ?>/>
					    	<label for="r5">
					        	une location
					    	</label>
					    	<input id="r6" type="radio" name="radio" <?php echo $_POST['typebien']=='autre' ? 'checked="checked"' :'' ?>/>
					    	<label for="r6">
					        	Autre
					    	</label>
					    	<input type="button" name="next" class="next action-button" value="Suivant" />
					  	</fieldset>
					  	<fieldset>
					    	<h2 class="fs-title">Vos coordonnées</h2>
					    	<h3 class="fs-subtitle">étape 2</h3>
					    	<input type="text" name="codepostal" id="codepostal" required="required" placeholder="Votre code postal" value="<?php echo $_POST['codepostal']; ?>"/>
					    	<input type="text" name="nom" id="nom" required="required" class="text" placeholder="Votre nom" value="<?php echo $_POST['codepostal']; ?>" />
					    	<input type="button" name="previous" class="previous action-button" value="Retour" />
					    	<input type="button" name="next" class="next action-button" value="Suivant" />
					  	</fieldset>
					  	<fieldset>
					    	<h2 class="fs-title">Détails personnels</h2>
					    	<h3 class="fs-subtitle">étape 3</h3>
					    	<input id="telephone" name="telephone"  class=" text medium" type="text"  placeholder="Votre numero téléphone" value="<?php echo $_POST['telephone']; ?>"/>
					    	<input id="email" name="email" required="required"  class="text medium" type="email" placeholder="Votre adresse email"  value="<?php echo $_POST['email']; ?>" />
					    	<div class="row">
								<p style="padding:5px;font-size:12px;">En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de la demande de contact et de la relation commerciale qui peut en découler. </p>
							</div>
					    	<input type="button" name="previous" class="previous action-button" value="Retour" />
					    	<input class="btnDPE" type="submit" class="submit action-button" name="submit" value="Valider la demande" />
					  	</fieldset>
					</form>
				</section>	
				<?php } else echo $info; ?>
<?php include("tpl/bas.tpl.php"); ?>
