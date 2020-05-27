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
	include(APPLI_SRC."/demande-devis.php");
	
	$NOINDEX = true;
	$TITLE = 'Demande de devis | '.NOM_APPLI;
?>
<?php include('tpl/head.tpl.php');?>
<?php include('tpl/valid.tpl.php');?>
<script src="<?php echo APPLI_URL; ?>/js/fonctions.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">//<![CDATA[
    jQuery(document).ready(function(){
        // binds form submission and fields to the validation engine
        jQuery("#devisform").validationEngine('attach');
    });
//]]></script>

<?php include("tpl/haut.tpl.php"); ?>
<h1>Demande de devis</h1>
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
			if($etape3) echo $info;
			else {
				?>
				<p style="display:none">
					En remplissant le formulaire ci-dessous vous identifiez rapidement quels sont les diagnostics<br />
					obligatoires à réaliser avant la vente ou la location de votre bien.<br />Nous envoyons votre demande à des professionnels qui vous préciseront ensuite<br />le tarif de vos diagnostics immobiliers.
				</p>

				<div id="content_middle">
					<div class="middle_top"></div>
						<div class="middle">
						<?php if(!$etape2) { ?>
							<form id="devisform" name="devisform" class="appnitro"  method="post" action="demande-devis.php" >
								<fieldset>
									<legend>Etape 1/2 : Votre bien immobilier</legend>
									<br />
									<div id="divDiagnotics" style="display:none">
										<table id="tabDiagnostics">
											<tr id="diag_carrez">
												<td></td>
												<td >Loi Carrez <input type="hidden" name="diagnostics[carrez]" id="fieldCarrez" value="" /></td>
											</tr>
											<tr id="diag_plomb">
												<td></td>
												<td>Plomb <input type="hidden" name="diagnostics[plomb]" id="fieldPlomb" value="" /></td>
											</tr>
											<tr id="diag_gaz">
												<td></td>
												<td>Diagnostic Gaz <input type="hidden" name="diagnostics[gaz]" id="fieldGaz" value="" /></td>
											</tr>
											<tr id="diag_elec">
												<td></td>
												<td>Diagnostic Electricité <input type="hidden" name="diagnostics[elec]" id="fieldElec" value="" /></td>
											</tr>
											<tr id="diag_amiante">
												<td></td>
												<td>Amiante <input type="hidden" name="diagnostics[amiante]" id="fieldAmiante" value="" /></td>
											</tr>
											<tr id="diag_termites">
												<td></td>
												<td>Diagnostic Termites <input type="hidden" name="diagnostics[termites]" id="fieldTermites" value="" /></td>
											</tr>
											<tr id="diag_dpe">
												<td></td>
												<td>Performance énergétique <input type="hidden" name="diagnostics[dpe]" id="fieldDPE" value="" /></td>
											</tr>
											<tr id="diag_ernt">
												<td></td>
												<td>Etats des risques naturels <input type="hidden" name="diagnostics[ernt]" id="fieldERNT" value="" /></td>
											</tr>
											<tr id="diag_surface">
												<td></td>
												<td>Surface habitable pour location <input type="hidden" name="diagnostics[surface]" id="fieldSurface" value="" /></td>
											</tr>
											<tr id="diag_pret">
												<td></td>
												<td>Prêt à taux 0% <input type="hidden" name="diagnostics[pret]" id="fieldPret" value="" /></td>
											</tr>
										</table>
									</div>
									<ul>
										<li id="li_transaction" >
											<label class="description" for="typetransaction">Vous souhaitez :</label>
												<input   id="typetransaction_vente" name="typetransaction" type="radio" value="vente"  />
												&nbsp;Vendre&nbsp;
												<input id="typetransaction_location" name="typetransaction" type="radio" value="location"  />
												&nbsp;Louer&nbsp;
												<?php /*<input id="typetransaction_achat" name="typetransaction" type="radio" value="achat"  />
												&nbsp;Acheter&nbsp;*/?>
												<div class="clearer"></div>
												<?php /*&nbsp;&nbsp;&nbsp;<input type="checkbox" name="immoverifie" value="oui"/>&nbsp;&nbsp;
												Je n'ai pas encore vendu mon bien et je souhaite que mon annonce<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;soit diffusée gratuitement sur Immo Vérifié : <a href="http://www.immoverifie.com" title="Immoverifie.com">en savoir plus</a>
												<div class="clearer"></div> */?>
										</li>

										<li id="li_type">
											<label class="description" for="typebien">Quel est le type du bien ?</label>
											<select class="select medium" id="typebien" name="typebien">
												<option value=""> - - - </option>
												<option value="appartement">Un appartement</option>
												<option value="maison">Une maison</option>
												<option value="local commercial">Un local commercial</option>
												<option value="parties communes">Des parties communes</option>
												<option value="terrain">Un terrain</option>
												<option value="cave">Une cave</option>
												<option value="garage">Un garage</option>
												<option value="autre">Autre</option>
											</select>
										</li>

										<li id="li_nbpiece">
											<label class="description" for="nbpieces">Nombre de pi&egrave;ces</label>
											<select id="nbpieces" class="select medium" name="nbpieces">
												<option value=""> - - </option>
												<option value="0">Chambre (&lt;12m&sup2;)</option>
												<option value="1">Studio</option>
												<option value="2">2 pi&egrave;ces</option>
												<option value="3">3 pi&egrave;ces</option>
												<option value="4">4 pi&egrave;ces</option>
												<option value="5">5 pi&egrave;ces</option>
												<option value="6">6 pi&egrave;ces</option>
												<option value="7">7 pi&egrave;ces</option>
												<option value="8">8 pi&egrave;ces</option>
												<option value="9">9 pi&egrave;ces</option>
												<option value="10">10 pi&egrave;ces</option>
											</select>
										</li>

										<li id="li_surface">
											<label class="description" for="surface">Surface</label>
											<input id="surface" name="surface"  class="text" type="text" value="" style='width: 100px' /> m&sup2;
										</li>

									   <li id="li_annee" >
											<label class="description" for="annee" >Année de construction</label>
											<select  class="select medium" id="annee" name="annee">
												<option value=""> - - - </option>
												<option value="Avant Janvier 1949">Avant Janvier 1949</option>
												<option value="Avant Juillet 1997">Avant Juillet 1997</option>
												<option value="Après Juillet 1997">Après Juillet 1997</option>
												<option value="Ne sais pas">Je ne sais pas</option>
											</select>
										</li>

										<li id="li_typechauffage" >
											<label class="description" for="typechauffage" >Type de chauffage</label>
											<select  id="typechauffage" class="select medium" name="typechauffage">
												<option value=""> - - - </option>
												<option value="Gaz">Gaz</option>
												<option value="Electrique">Electrique</option>
												<option value="Bois">Bois</option>
												<option value="Fioul">Fioul</option>
												<option value="Autre">Autre</option>
												<option value="Ne sais pas">Je ne sais pas</option>
											</select>
										</li>

										<li id="li_copropriete"  >
											<label class="description" for="copropriete">Dans le cadre d'une copropriété ?</label>
											<input id="copropriete_oui" name="copropriete"  type="radio" value="oui"  />
											&nbsp;Oui&nbsp;
											<input id="copropriete_non" name="copropriete" type="radio" value="non" />
											&nbsp;Non&nbsp;
											<input id="copropriete_nc" name="copropriete" type="radio" value="nc" />
											&nbsp;Je ne sais pas&nbsp;
										</li>

										<li id="li_codepostal"  >
											<label class="description" for="codepostal">Code postal du bien</label>
											<input id="codepostal" name="codepostal"  class="validate[required] text" type="text"  value="" style='width: 100px' />
										</li>
										
										<li id="li_ville"  >
											<label class="description" for="ville">Ville</label>
											<input id="ville" name="ville"  type="text"  value="<?php echo $_POST['ville']; ?>"  class="text medium" />
										</li>

										<li id="li_delai" >
											<label class="description" for="delai" >Délai d'intervention souhaitée ?</label>
											<select  id="delai" class="select medium" name="delai">
												<option value=""> - - - </option>
												<option value="Des que possible">Dès que possible</option>
												<option value="Sous 7 jours">Sous 7 jours</option>
												<option value="Sous 15 jours">Sous 15 jours</option>
												<option value="Dans le mois">Dans le mois</option>
												<option value="Ne sais pas">Je ne sais pas</option>
											</select>
										</li>

										<li>
											<input  name="host" type="text" value=""  style="visibility:hidden" />
											<br />
											<div align="center"><input  class="btnDPE" type="submit"  name="envoyer" value="Etape 2/2 : Vos coordonnées" /></div>
										</li>
									</ul>
								</fieldset>
							</form>
						<?php } else { ?>
							<form id="devisform" name="devisform" class="appnitro"  method="post" action="demande-devis.php">
								<fieldset>
									<legend>Etape 2/2 : Vos coordonnées</legend>
									<br />
									<fieldset id="fieldDiagnostics">
										<legend>Diagnostics obligatoires</legend>
										<table id="recapDiagnostic">
											<tr>
												<td>
													<span>
														<input id="diag_carrez" name="diag[]" class="element checkbox" type="checkbox" value="loi carrez" <?php if(in_array("loi carrez", $_POST['diag']) || $_POST['diagnostics']['carrez'] == "ok") echo " checked "; ?> />
														<label class="choice" for="diag_carrez">Loi Carrez</label>
													</span>
												</td>
												<td>
													<span>
														<input id="diag_plomb" name="diag[]" class="element checkbox" type="checkbox" value="plomb" <?php if(in_array("plomb", $_POST['diag']) || $_POST['diagnostics']['plomb'] == "ok") echo " checked "; ?>  />
														<label class="choice" for="diag_plomb">Plomb</label>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<span>
														<input id="diag_gaz" name="diag[]" class="element checkbox" type="checkbox" value="diagnostic gaz" <?php if(in_array("diagnostic gaz", $_POST['diag']) || $_POST['diagnostics']['gaz'] == "ok") echo " checked "; ?> />
														<label class="choice" for="diag_gaz">Diagnostic Gaz</label>
													</span>
												</td>
												<td>
													<span>
														<input id="diag_electricite" name="diag[]" class="element checkbox" type="checkbox" value="diagnostic &eacute;lectricit&eacute;" <?php if(in_array("diagnostic &eacute;lectricit&eacute;", $_POST['diag']) || $_POST['diagnostics']['elec'] == "ok") echo " checked "; ?> />
														<label class="choice" for="diag_electricite">Diagnostic Electricit&eacute;</label>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<span>
														<input id="diag_amiante" name="diag[]" class="element checkbox" type="checkbox" value="amiante" <?php if(in_array("amiante", $_POST['diag']) ||  $_POST['diagnostics']['amiante'] == "ok") echo " checked "; ?> />
														<label class="choice" for="diag_amiante">Amiante</label>
													</span>
												</td>
												<td>
													<span>
														<input id="diag_termites" name="diag[]" class="element checkbox" type="checkbox" value="diagnostic termites" <?php if(in_array("diagnostic termites", $_POST['diag']) || $_POST['diagnostics']['termites'] == "ok") echo " checked "; ?> />
														<label class="choice" for="diag_termites">Diagnostic Termites</label>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<span>
														<input id="diag_dpe" name="diag[]" class="element checkbox" type="checkbox" value="performance &eacute;nerg&eacute;tique" <?php if(in_array("performance &eacute;nerg&eacute;tique", $_POST['diag']) || $_POST['diagnostics']['dpe'] == "ok") echo " checked "; ?> />
														<label class="choice" for="diag_dpe">Performance Energ&eacute;tique</label>
													</span>
												</td>
												<td>
													<span>
														<input id="diag_ernt" name="diag[]" class="element checkbox" type="checkbox" value="etats des risques naturels" <?php if(in_array("etats des risques naturels", $_POST['diag']) ||  $_POST['diagnostics']['ernt'] == "ok") echo " checked "; ?>  />
														<label class="choice" for="diag_ernt">Etats des risques naturels</label>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<span>
														<input id="diag_pret" name="diag[]" class="element checkbox" type="checkbox" value="pr&ecirc;t &agrave; taux 0%" <?php if(in_array("pr&ecirc;t &agrave; taux 0%", $_POST['diag']) || $_POST['diagnostics']['pret'] == "ok") echo " checked "; ?>  />
														<label class="choice" for="diag_pret">Pr&ecirc;t &agrave;  taux 0%</label>
													</span>
												</td>
												<td colspan="3">
													<span>
														<input id="diag_surface" name="diag[]" class="element checkbox" type="checkbox" value="surface habitable pour location" <?php if(in_array("surface habitable pour location", $_POST['diag']) ||  $_POST['diagnostics']['surface'] == "ok") echo " checked "; ?> />
														<label class="choice" for="diag_surface">Surface habitable pour location</label>
													</span>
												</td>
											</tr>
										</table>
									</fieldset>

									<ul>
										<li id="li_civilite" >
											<label class="description" for="civilite">Civilit&eacute; </label>
											<div>
												<input id="civilite_mr" name="civilite"  type="radio" value="Mr" <?php if($_POST['civilite'] == "Mr") echo "checked"; ?> />
												&nbsp;Mr&nbsp;
												<input id="civilite_mme" name="civilite" type="radio" value="Mme" <?php if($_POST['civilite'] == "Mme") echo "checked"; ?> />
												&nbsp;Mme&nbsp;
												<input id="civilite_mlle" name="civilite" type="radio" value="Mlle" <?php if($_POST['civilite'] == "Mlle") echo "checked"; ?> />
												&nbsp;Mlle&nbsp;
											</div>
										</li>

										<li id="li_2" >
											<label class="description" for="nom">Nom <span class="required">*</span></label>
											<span>
												<input id="nom" name= "nom" class="element text validate[required]" maxlength="255" size="20" value="<?php echo $_POST['nom']; ?>"/>
											</span>
										</li>

										<li id="li_4" >
											<?php /*
											<label class="description" for="localisation">Localisation <span class="required">*</span></label>
											<span><label>Code postal</label></span>
											<span><label>Ville</label></span>
											*/?>
											<input type="hidden"  id="codepostal" name="codepostal"   value="<?php echo $_POST['codepostal'];  ?>"/>
											<input type="hidden"  id="ville_demandeur" name="ville_demandeur" class="element text" maxlength="255" size="14" value="<?php echo stripslashes($_POST['ville']); ?>"/>
											<?php if(!$errorCP &&1==2) {?>
												<input type="hidden" id="codepostal_demandeur" name="codepostal" class="element text" maxlength="255" size="9" value="<?php echo $_POST['codepostal']; ?>"/>
											<?php } ?>
										</li>

										<li id="li_5" >
											<label class="description" for="nom">T&eacute;l&eacute;phone <span class="required">*</span></label>
											<span>
												<input id="telephone" name="telephone" class="element text validate[required] large" type="text" maxlength="255" value="<?php echo $_POST['telephone']; ?>"/>
											</span>
										</li>

										<li id="li_6" >
											<label class="description" for="email">E-mail <span class="required">*</span></label>
											<span>
												<input id="email" name="email" class="element text large validate[required,custom[email]] " type="text" maxlength="255" value="<?php echo $_POST['email']; ?>"/>
											</span>
										</li>

										<li>
											<input  name="host" type="text" value=""  style="visibility:hidden" />
											<div align="center"><input id="btn_comparer" class="button_text btnDPE" type="submit"  name="saveDevis" value="Envoyer votre demande" /></div>
										</li>
									</ul>
								</fieldset>
							</form>
				<?php 	}
			} ?>
		</td>
	</tr>
</table>
<?php include("tpl/bas.tpl.php"); ?>
