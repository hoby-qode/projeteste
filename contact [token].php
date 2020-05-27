<?php
	//On démarre les sessions
	session_start();
	include("configuration.php");
	include(APPLI_SRC."/inc/phpmail.class.php");
	
	if(!empty($_POST['envoyer']) && $_SESSION['captcha'] != $_POST['captcha']) $tabErreurForm[] = "<li>Le code anti-spam est incorrect.</li>";
	
	//Si le jeton est présent dans la session et dans le formulaire
	if(isset($_SESSION['token']) && isset($_SESSION['token_time']) && isset($_POST['token'])) {
		//Si le jeton de la session correspond à celui du formulaire
		if($_SESSION['token'] == $_POST['token']) {
			//Si on soumet les formulaire plusieurs fois pendant 30sec ca va bloquer
			if($_SESSION['token_time'] - time() < 30) {
				if($_SESSION['token_cpt']==0){
					$_SESSION['token_cpt']++;
					include(APPLI_SRC."/contact.php");
				}
			}
			// après 30 sec on peut resoumettre le formulaire
			else{
				$_SESSION['token_cpt'] = 0;
			}
		}
	}
	
	//On génére un jeton totalement unique (c'est capital :D)
	$_SESSION['token'] = uniqid(rand(), true);
	// incremtation de cette variable à soumission du formulaire, pour ne pas le resoumettre dans les 30sec a venir
	if(!isset($_SESSION['token_cpt'])) $_SESSION['token_cpt'] = 0;
	//On enregistre aussi le timestamp correspondant au moment de la création du token
	$_SESSION['token_time'] = time();
	
	$TITLE = 'Contacter votre diagnostiqueur immobilier sur '.COM_PRINCIPALE.' | '.NOM_APPLI;

?>
<?php include('tpl/head.tpl.php');?>
<?php include('tpl/valid.tpl.php');?>
<script type="text/javascript">//<![CDATA[
    jQuery(document).ready(function(){
        // binds form submission and fields to the validation engine
        jQuery("#formContact").validationEngine('attach');
    });
//]]></script>

<?php include("tpl/haut.tpl.php"); ?>
<h1>Contactez-nous</h1>
<table style="width:100%" id="tabGenerateur">
	<tr>
		<td>
			<br /><br />
			<form action="" method="post" enctype="multipart/form-data" id="formContact" class="appnitro">
			<?php
			/*
			###### DEBUT #######
			Champs token à ne pas supprimer!
			*/
			?>
			<input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token'];?>" />
			<?php
			/*
			###### FIN #######
			*/
			?>
			<?php if(empty($info)){ ?>
				<fieldset >
					<legend>Remplissez le formulaire ci-dessous pour nous contacter</legend>
	            	<?php
						if(sizeof($tabErreurForm) > 0) {
							echo "<ul class='ulError'>";
							foreach($tabErreurForm as $error) echo "$error";
							echo "</ul>";
						}
					?>
					<br />

					<label>Votre société :</label>&nbsp;<input type="text" name="societe" id="societe" class="text" value="<?php echo stripslashes($_POST['societe']); ?>"/>
					<div style="clear:both"></div><br />
					
					<label >Votre nom <span class='error'>*</span> :</label>&nbsp;<input type="text" name="nom" id="nom" class="text validate[required]" value="<?php echo stripslashes($_POST['societe']); ?>"/>
					<div style="clear:both"></div><br />
					
					<label >Votre prénom :</label>&nbsp;<input type="text" name="prenom" id="prenom" class="text " value="<?php echo stripslashes($_POST['prenom']); ?>" />
					<div style="clear:both"></div><br />
					
					<label>Votre e-mail <span class='error'>*</span> :</label>&nbsp;<input type="text" name="email"  id="email" class="text validate[required,custom[email]] text-input" value="<?php echo stripslashes($_POST['email']); ?>" />
					<div style="clear:both"></div><br />

					<label style="display:block; width:130px; float:left; text-align:right">Votre téléphone :</label>&nbsp;<input type="text" name="telephone"  id="telephone" class="text" value="<?php echo stripslashes($_POST['telephone']); ?> "/>
					<div style="clear:both"></div><br />

					<label>Votre message <span class='error'>*</span> :</label>&nbsp;<textarea cols="50" rows="3" name="message" id="message" class="validate[required] textarea "><?php echo stripslashes($_POST['message']); ?></textarea>
					<div style="clear:both"></div>
					
					<label><img src="/captcha.png" alt="captcha" onclick="this.src = this.src+'?t='+Math.random()" /> : </label>&nbsp;<input type="text" name="captcha" id="captcha" value="" class="text validate[required]" />
					<div style="clear:both"></div>

					<input  name="host" type="text" value=""  style="visibility:hidden" /> &nbsp;&nbsp;
					<div align="center">
						<input type="submit" name="envoyer" class="btnDPE" value="Envoyer votre message"  />
					</div>

				</fieldset>
			</form>
			<div align="center">
			<?php
				echo $info;
				if(!empty($admin->societe)) echo "<strong>", $admin->societe, "</strong><br />";
				if(!empty($admin->adresse)) echo  $admin->adresse,"<br />";
				if(!empty($admin->codepostal)) echo  $admin->codepostal," ", $admin->ville,"<br />";
				if(!empty($admin->telephone)) echo  "T&eacute;l. ",$admin->telephone,"<br />";
				if(!empty($admin->googlemap)) echo "<br />", stripslashes($admin->googlemap),"<br />";
			?>
			</div>
		<?php } else { 
			echo "<p>Votre demande a bien été enregistrée et nous vous en remercions.</p>
			<p>Nous allons vous contacter dans les plus brefs délais.</p>";
			echo '<div align="center">';
			if(!empty($admin->societe)) echo "<strong>", $admin->societe, "</strong><br />";
			if(!empty($admin->adresse)) echo  $admin->adresse,"<br />";
			if(!empty($admin->codepostal)) echo  $admin->codepostal," ", $admin->ville,"<br />";
			if(!empty($admin->telephone)) echo  "T&eacute;l. ",$admin->telephone,"<br />";
			if(!empty($admin->googlemap)) echo "<br />", stripslashes($admin->googlemap),"<br />";
			echo '</div>';
		} ?>

		</td>
	</tr>
</table>

<?php include("tpl/bas.tpl.php"); ?>
