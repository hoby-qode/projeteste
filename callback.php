<?php
	include("configuration.php");
	include(APPLI_SRC."/inc/phpmail.class.php");
	include(APPLI_SRC."/callback.php");
	$TITLE = '.Demande de devis express | '.NOM_APPLI;
?>
<?php include('tpl/head.tpl.php');?>
<?php include('tpl/valid.tpl.php');?>
<meta name="robots" content="noindex, nofollow" />
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
				<form id="devisform" name="devisform" class="appnitro"  method="post" action="callback.php" >
					<fieldset>
						<legend>Remplissez ce formulaire pour être recontacté</legend>
						<br />
						<ul>
							<li><br />
								<label class="description" for="nom">Votre nom</label>
								<input id="nom" name="nom"  class="validate[required] text medium" type="text"  value="<?php echo $_POST['nom']; ?>" />
							</li>
							
							<li>
								<label class="description" for="telephone">Votre téléphone</label>
								<input id="telephone" name="telephone"  class=" text medium  validate[required]" type="text"  value="<?php echo $_POST['telephone']; ?>" />
							</li>
							
							<li>
								<label class="description" for="codepostal">Votre code postal</label>
								<input id="codepostal" name="codepostal"  class=" text medium validate[required]" type="text"  value="<?php echo $_POST['codepostal']; ?>" />
							</li>

							<li>
								<input  name="host" type="text" value=""  style="visibility:hidden" />
								<div align="center"><input  class="btnDPE" type="submit"  name="envoyer" value="Valider" /></div>
							</li>
						</ul>
					</fieldset>
				</form>
			<?php } else echo $info; ?>
			</div>
		</td>
	</tr>
</table>

<?php include("tpl/bas.tpl.php"); ?>
