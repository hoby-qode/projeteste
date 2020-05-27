<?php
	include("configuration.php");
	include(APPLI_SRC."/inc/phpmail.class.php");
	include(APPLI_SRC."/generateur-etiquette-dpe.php");
	
	$NOINDEX = true;
	$TITLE = 'Générateur d\'étiquette DPE | '.NOM_APPLI;
	$KEYWORS = '';
	$DESCRIPTION = '';
?>
<?php include('tpl/head.tpl.php');?>
<?php include('tpl/valid.tpl.php');?>
<script type="text/javascript">//<![CDATA[
    jQuery(document).ready(function(){
        // binds form submission and fields to the validation engine
        jQuery("#formDPE2, #formDPE").validationEngine('attach');

    });
//]]></script>

<?php include("tpl/haut.tpl.php"); ?>

<h1>Générateur d'étiquette DPE</h1>

<table style="width:100%" id="tabGenerateur">
	<tr>
		<td>
			<form action="generateur-etiquette-dpe.php#etiquettes" method="post" enctype="multipart/form-data" id="formDPE" class="appnitro">
			<?php echo $info; ?>
				<fieldset>
					<legend>Générer une ou plusieurs étiquettes</legend>
					<br />


					<?php
						if(!empty($_POST['nbEtiquette'])){
							$nbEtiquette = $_POST['nbEtiquette'];
						}
						for($i = 1; $i<=$nbEtiquette; $i++){ ?>
		     		  			<label style="display:block; width:130px; float:left; text-align:right">Consommation :</label>&nbsp;<input type="text" value="<?php echo $_POST['consommation_dpe_'.$i]; ?>" id="consommation_dpe_<?php echo $i; ?>" name="consommation_dpe_<?php echo $i; ?>" class="text validate[required,custom[integer]] " style="width:50px" size="5" maxlength="3"/> kWhEP/m&sup2; an
		              			<br /><br />
	              		<?php } ?>

					Je souhaite générer
					<select name="nbEtiquette" onchange="window.location.replace('generateur-etiquette-dpe.php?nb=' + this.value);" class="select">
						<?php for($i=1; $i<=12; $i++){
							if($i == $nbEtiquette) $selected = ' selected="selected" ';
							else $selected = "";
							echo "<option value='$i' $selected>$i</option>\r\n";
						}?>
					</select> étiquette(s) différentes.
					<br />&nbsp;&nbsp;

					<input  name="host" type="text" value=""  style="visibility:hidden" />
					<div align="center">
						<input type="checkbox" name="genererPDF" <?php if($_POST['genererPDF'] == "on") echo " checked "; ?> />
						<small>Générer une planche A4 au format PDF<br />
						Vous souhaitez des étiquettes DPE autocollantes ? <br />
						Vous pouvez imprimer cette planche sur du papier <strong>Avery  modèle L7164-100</strong><br /><br />
						</small>
						<input type="submit" name="genererDPE" class="btnDPE" value="Générer la ou les étiquettes DPE " />
					</div>
				</fieldset>
			</form>
			<br />

			<a id="etiquettes"></a>
			<?php
				if(sizeof($tabImageFac) > 0) {
					foreach($tabImageFac as $cle=>$image) {
						if(is_file($image)) echo "<img src='$image' alt='$image' class='facsimile' />";
					}
				}
				if(!empty($pdfFAC)) echo "<div class='clearer'></div><div id='linkPDFFAC'><img src='imgmutu/pdf.png' />&nbsp;<a href='download.php?file=",encode($pdfFAC), "' title='Voir la plaquette PDF' />Voir l'aperçu de la plaquette PDF</a></div>";
			?>

			<div class="clearer"></div>

			<?php if(sizeof($tabImageFac) > 0 ){ ?>

			<form action="generateur-etiquette-dpe.php" method="post" enctype="multipart/form-data" id="formDPE2" class="appnitro">
				<br />
	            <fieldset>
	            	<legend>Recevoir la ou les étiquettes par e-mail</legend>

	            	<?php

						  if(sizeof($tabErreurForm) > 0){
							echo "<ul class='ulError'>";
								foreach($tabErreurForm as $error){
									echo "$error";
								}
							echo "</ul>";
						  }
					?>
					<br />
					<label>Votre société :</label>&nbsp;<input type="text" name="societe" id="societe" class="text" />
					<div style="clear:both"></div><br />
					<label >Votre nom :</label>&nbsp;<input type="text" name="nom" id="nom" class="text" required="required"/>
					<div style="clear:both"></div><br />
					<label>Votre e-mail :</label>&nbsp;<input type="email" name="email"  id="email" class="text text-input" required="required" />
					<div style="clear:both"></div><br />

					<label style="display:block; width:130px; float:left; text-align:right">Votre code postal :</label>&nbsp;<input type="text" name="codepostal" required="required"  id="cpostal" class="text" />
					<div style="clear:both"></div>

					<?php
						if(isset($tabImage)){
							foreach($tabImage as $cle=>$image){
								echo "<input type='hidden' name='tabImage[]' value='$image' />";
							}
						}
						echo "<input type='hidden' name='pdfNormal' value='$pdfNormal' />";
						echo "<input type='hidden' name='pdfFAC' value='$pdfFAC' />";
					?>

					&nbsp;&nbsp;

					<input  name="host" type="text" value=""  style="visibility:hidden" />
					<div align="center">
						<input type="submit" name="envoyerDPE" class="btnDPE" value="Recevoir par e-mail "  />
					</div>

				</fieldset>
			</form>
			<?php } ?>
		</td>
	</tr>
</table>

<?php include("tpl/bas.tpl.php"); ?>
