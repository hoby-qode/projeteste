<?php
	//On démarre les sessions
	session_start();
	//Maintenant, on affiche notre page normalement, le champ caché token en plus

	include("configuration.php");
	include(APPLI_SRC."/inc/phpmail.class.php");
	
	//Si le jeton est présent dans la session et dans le formulaire
	if(isset($_SESSION['token']) && isset($_SESSION['token_time']) && isset($_POST['token']))
	{
		//Si le jeton de la session correspond à celui du formulaire
		if($_SESSION['token'] == $_POST['token'])
		{
			//On stocke le timestamp qu'il était il y a 15 minutes
			$timestamp_ancien = time() - (15*60);
			//Si le jeton n'est pas expiré
			if($_SESSION['token_time'] >= $timestamp_ancien)
			{
				include(APPLI_SRC."/devis-express.php");
			}
		}
	}
	
	//On génére un jeton totalement unique (c'est capital :D)
	$token = uniqid(rand(), true);
	//Et on le stocke
	$_SESSION['token'] = $token;
	//On enregistre aussi le timestamp correspondant au moment de la création du token
	$_SESSION['token_time'] = time();

	
	$TITLE = 'Demande de devis express | '.NOM_APPLI;
?>
<?php include('tpl/head.tpl.php');?>
<?php include('tpl/valid.tpl.php');?>
<meta name="robots" content="noindex, nofollow" />
<script src="<?php echo APPLI_URL; ?>/js/fonctions.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">//<![CDATA[
    jQuery(document).ready(function(){
        // binds form submission and fields to the validation engine
        jQuery("#devisform").validationEngine('attach');
   });
//]]></script>

<?php include("tpl/haut.tpl.php"); ?>

<table style="width:100%" id="tabGenerateur">
	<tr>
		<td>
			<?php
				if(sizeof($tabErreurForm) > 0) {
					echo "<ul class='ulError'>";
						foreach($tabErreurForm as $error) {
							echo "$error";
						}
					echo "</ul>";
				}
			?>
			<div id="content_middle">
				<div class="middle_top"></div>
				<div class="middle">
				<?php if(empty($info)) { ?>
					<form id="devisform" name="devisform" class="appnitro"  method="post" action="devis-express.php" >
						<?php
						/*
						###### DEBUT #######
						Champs token à ne pas supprimer!
						*/
						?>
						<input type="hidden" name="token" id="token" value="<?php echo $token;?>" />
						<?php
						/*
						###### FIN #######
						*/
						?>
						<fieldset>
							<legend>Remplissez ce formulaire de demande de devis express</legend>
							<br />
							<ul>
								<li id="li_type">
									<label class="description">Quel est le type du bien ?</label>
									<input type="radio" name="typebien" value="appartement" <?php echo !isset($_POST['typebien']) || $_POST['typebien']=='appartement' ? 'checked="checked"' :'' ?> />Un appartement
									<input type="radio" name="typebien" value="maison" <?php echo $_POST['typebien']=='maison' ? 'checked="checked"' :'' ?>/>Une maison
									<input type="radio" name="typebien" value="autre" <?php echo $_POST['typebien']=='autre' ? 'checked="checked"' :'' ?> />Autre
								</li>

								<li id="li_codepostal">
									<label class="description" for="codepostal">Code postal du bien</label>
									<input id="codepostal" name="codepostal"  class="validate[required] text" type="text"  value="<?php echo $_POST['codepostal']; ?>" style='width: 100px' />
								</li>

								<li><br />
									<label class="description" for="nom">Votre nom</label>
									<input id="nom" name="nom"  class="validate[required] text medium" type="text"  value="<?php echo $_POST['nom']; ?>" />
								</li>
								
								<li>
									<label class="description" for="telephone">Votre téléphone</label>
									<input id="telephone" name="telephone"  class=" text medium" type="text"  value="<?php echo $_POST['telephone']; ?>" />
								</li>
								
								<li>
									<label class="description" for="email">Votre e-mail</label>
									<input id="email" name="email"  class="validate[required, custom[email]] text medium" type="text"  value="<?php echo $_POST['email']; ?>" />
								</li>

								<li>
									<input  name="host" type="text" value=""  style="visibility:hidden" />
									<div align="center"><input  class="btnDPE" type="submit"  name="envoyer" value="Valider la demande" /></div>
								</li>
							</ul>
						</fieldset>
					</form>
				<?php } else echo $info; ?>
				</div>
			</div>
		</td>
	</tr>
</table>

<?php include("tpl/bas.tpl.php"); ?>
