<?php include("configuration.php");?>
<?php include('tpl/head.tpl.php');?>
<?php include('tpl/valid.tpl.php');?>
<?php include("tpl/haut.tpl.php"); ?>
<section id="baner" style="background-image: url(images/ban-1.png);"></section>
<section class="service-style1-area style4 single-service-page">
    <div class="container">
        <form id="devisform" name="devisform" class="appnitro"  method="post" action="demande-devis-tieri2.php" >
            <input type="hidden" name="version_devis" value="2">
            <div id="choix-obligation" class="champ-diag">
                <div class="row">
                    <div class="col-md-4 choix-left">
                        <a href="#" id="maison_apres_1997" onClick="document.getElementById('mon_image_generale').src='images/maison_apres_1997.jpg';">Maison : Permis de construire délivré après le 01/07/1997</a> 
                        <a href="#" id="maison_entre_1949_1977" onClick="document.getElementById('mon_image_generale').src='images/maison_avant_1949.jpg';">Maison : Permis de construire délivré avant le 01/07/1997</a>
                        <a href="#" id="appartement_apres_1997" onClick="document.getElementById('mon_image_generale').src='images/appart_apres_1997.jpg';">Appartement : Permis de construire délivré après le 01/07/1997</a>
                        <a href="#" id="appartement_entre_1949_1977" onClick="document.getElementById('mon_image_generale').src='images/maison_entre_1949_1997.jpg';">Appartement : Permis de construire délivré entre 1949 et le 01/07/1997</a>
                        <a href="#" id="appartement_avant_1949" onClick="document.getElementById('mon_image_generale').src='images/appart_avant_1949.jpg';">Appartement : Permis de construire délivré avant le 01/01/1949</a>
                    </div>
                    <div class="col-md-4 choix-right">
                        <div class="img-obligation">
                            <img src="images/maison_apres_1997.jpg" id="mon_image_generale">
                            <img src="images/maison_avant_1949.jpg" id="img_maison_avant_1949" style="display: none">
                            <img src="images/maison_entre_1949_1997.jpg" id="img_maison_entre_1949_1977" style="display: none">
                            <img src="images/appart_apres_1997.jpg" id="img_appartement_apres_1997" style="display: none">
                            <img src="images/appart_entre_1949_1997.jpg" id="img_appartement_entre_1949_1977" style="display: none">
                            <img src="images/appart_avant_1949.jpg" id="img_appartement_avant_1949" style="display: none">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>Vos obligations</h3>
                        <div class="project-menu-box wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <ul class="project-filter clearfix post-filter has-dynamic-filters-counter">
                                <li data-filter=".vendre" class="active"><span class="filter-text">Vous vendez</span></li>
                                <li data-filter=".louer"><span class="filter-text">Vous louez</span></li>
                            </ul>
                        </div>
                        <div class="row filter-layout masonary-layout cvendre">
                            <div class="col-md-4 col-lg-6 col-md-6 filter-item vendre">
                                <div class="items">
                                    <div>
                                        <label for="diag_plomb" class="vendez louez">
                                            <input id="diag_plomb" name="diag[]" type="checkbox" value="plomb">
                                            Plomb
                                        </label>
                                    </div>
                                    <div>
                                        <label for="diag_dpe" class="vendez louez"> 
                                            <input id="diag_dpe" name="diag[]" type="checkbox" value="performance energetique" checked="checked">
                                            DPE
                                        </label>
                                    </div>
                                    <div>
                                        <label for="diag_ernt" class="vendez louez">
                                            <input id="diag_ernt" name="diag[]" type="checkbox" value="erp" checked="checked">
                                            ERP
                                        </label>
                                    </div>
                                    <div>
                                        <label for="diag_carrez" class="vendez">
                                            <input id="diag_carrez" name="diag[]" type="checkbox" value="loi carrez">
                                            Loi Carrez
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6 col-md-6 filter-item vendre">
                                <div class="items">
                                    <div>
                                        <label for="diag_amiante" class="vendre">
                                            <input id="diag_amiante" name="diag[]" type="checkbox" value="amiante">
                                            Amiante
                                        </label>
                                    </div>
                                    <div>
                                        <label for="diag_electricite" class="vendre louer">
                                            <input id="diag_electricite" name="diag[]" type="checkbox" value="diagnostic électricité" checked="checked">
                                            Electricité
                                        </label>
                                    </div>
                                    <div>
                                        <label for="diag_termites" class="vendre">
                                            <input id="diag_termites" name="diag[]" type="checkbox" value="diagnostic termites">
                                            Termites <small>*</small>
                                        </label>
                                    </div>
                                    <div>
                                        <label for="diag_gaz" class="vendez louez">
                                            <input id="diag_gaz" name="diag[]" type="checkbox" value="diagnostic gaz" checked="checked">
                                            Gaz
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row filter-layout masonary-layout clouer">
                            <div class="col-md-4 col-lg-6 col-md-6 filter-item louer">
                                <div class="items">
                                    <div>
                                        <label for="diag_plomb" class="vendre louer">
                                            <input id="diag_plomb" name="diag[]" type="checkbox" value="plomb">
                                            Plomb
                                        </label>
                                    </div>
                                    <div>
                                        <label for="diag_dpe" class="vendre louer"> 
                                            <input id="diag_dpe" name="diag[]" type="checkbox" value="performance energetique" checked="checked">
                                            DPE
                                        </label>
                                    </div>
                                    <div>
                                        <label for="diag_ernt" class="vendre louer">
                                            <input id="diag_ernt" name="diag[]" type="checkbox" value="erp" checked="checked">
                                            ERP
                                        </label>
                                    </div>
                                    <div>
                                        <label for="diag_dapp" class="louer">
                                            <input id="diag_DAPP" name="diag[]" type="checkbox" value="DAPP">
                                            DAPP
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6 col-md-6 filter-item louer">
                                <div class="items">
                                    <div>
                                        <label for="diag_surface" class="louer">
                                            <input id="diag_surface" name="diag[]" type="checkbox" value="surface habitable pour location">
                                            Loi Boutin
                                        </label>
                                    </div>
                                    <div>
                                        <label for="diag_electricite" class="vendre louer">
                                            <input id="diag_electricite" name="diag[]" type="checkbox" value="diagnostic électricité" checked="checked">
                                            Electricité
                                        </label>
                                    </div>
                                    <div>
                                        <label for="diag_gaz" class="vendre louer">
                                            <input id="diag_gaz" name="diag[]" type="checkbox" value="diagnostic gaz" checked="checked">
                                            Gaz
                                        </label>
                                    </div>
                                    <div>
                                        <label for="diag_edl" class="louer">
                                            <input id="diag_edl" name="diag[]" type="checkbox" value="Etat des lieux entrant/sortant">
                                            Etat des lieux entrant/sortant
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p>* <a href="http://termite.com.fr/rechercher/" target="_blank">Vérifier ici</a> si vous êtes situé dans une zone contaminée par les termites.</p>
                </div>
            </div>
            <p class="alaligne"></p>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active"><h4>Votre bien immobilier</h4></div>
                            <div class="accord-content collapsed">
                                <div class="row">
                                    <label class="description col-md-6" for="typetransaction">Vous souhaitez : </label>
                                    <div class="col-md-6">
                                    	<input id="typetransaction_vente" name="typetransaction" type="radio" value="vente" class=""  />
                                    	&nbsp;Vendre&nbsp;
                                    	<input id="typetransaction_location" name="typetransaction" type="radio" value="location"  />
                                    	&nbsp;Louer&nbsp;
                                    </div>
                                </div>
                                <div class="row">    
                                    <label class="description col-md-6" for="typebien">Type du bien : </label>
                                    <select class="select col-md-6" id="typebien" name="typebien">
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
                                </div>
                                <div class="row">
                                    <label class="description col-md-6" for="install_elec_15">Installation électrique de + de 15 ans :</label>
                                    <div class="col-md-6">
                                    <label class="radio"><input id="install_elec_15_oui" name="install_elec_15" type="radio" value="oui">
                                        &nbsp;Oui&nbsp;</label>
                                    <label class="radio"><input id="install_elec_15_non" name="install_elec_15" type="radio" value="non">&nbsp;Non&nbsp;</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="description col-md-6" for="install_elec_15">Installation gaz de + de 15 ans :</label>
                                    <div class="col-md-6">
	                                    <label class="radio"><input id="install_gaz_15_oui" name="install_gaz_15" type="radio" value="oui">
	                                        &nbsp;Oui&nbsp;</label>
	                                    <label class="radio"><input id="install_gaz_15_non" name="install_gaz_15" type="radio" value="non">
	                                    &nbsp;Non&nbsp;</label>
                                    </div>
                                </div>
                                <div class="row">    
                                    <label class="description col-md-6" for="nbpieces">Nombre de pi&egrave;ces:</label>
                                    <select id="nbpieces" class="select medium col-md-6" name="nbpieces">
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
                                </div>
                                <div class="row">
                                    <label class="description col-md-6" for="surface">Surface habitable (m&sup2;)</label>
                                    <input id="surface" name="surface" placeholder="Surface"  class="text col-md-6" type="text" value="" style='width: 100px' /> 
                                </div>
                                <div class="row">    
                                    <label class="description col-md-6" for="annee" >Année de construction</label>
                                    <select  class="select medium col-md-6" id="annee" name="annee">
                                        <option value=""> - - - </option>
                                        <option value="Avant Janvier 1949">Avant Janvier 1949</option>
                                        <option value="Avant Juillet 1997">Avant Juillet 1997</option>
                                        <option value="Après Juillet 1997">Après Juillet 1997</option>
                                        <option value="Ne sais pas">Je ne sais pas</option>
                                    </select>
                                </div>
                                <div class="row">    
                                    <label class="description col-md-6" for="typechauffage" >Chauffage</label>
                                    <select  id="typechauffage" class="select medium col-md-6" name="typechauffage">
                                        <option value=""> - - - </option>
                                        <option value="Gaz">Gaz</option>
                                        <option value="Electrique">Electrique</option>
                                        <option value="Bois">Bois</option>
                                        <option value="Fioul">Fioul</option>
                                        <option value="Autre">Autre</option>
                                        <option value="Ne sais pas">Je ne sais pas</option>
                                    </select>
                                </div>
                                <div class="row">    
                                    <label class="description col-md-6" for="gaz">Gaz</label>
                                    <select id="gaz" class="form-input col-md-6" name="typegaz">
                                        <option value="" selected="selected"> - - - </option>
                                        <option>Aucune installation</option>
                                        <option>Gaz de ville</option>
                                        <option>Gaz en citerne</option>
                                        <option>Gaz en bouteilles</option>
                                        <option value="Presence d'un compteur gaz sans abonnement">Présence d'un compteur gaz sans abonnement</option>
                                        <option>Autre</option>
                                        <option>Je ne sais pas</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <label class="description col-md-6" for="copropriete">Copropriété :</label>
                                    <div class="col-md-6">
                                        <input id="copropriete_oui" name="copropriete"  type="radio" value="oui"  />
                                        &nbsp;Oui&nbsp;
                                        <input id="copropriete_non" name="copropriete" type="radio" value="non" />
                                        &nbsp;Non&nbsp;
                                        <input id="copropriete_nc" name="copropriete" type="radio" value="nc" />
                                        &nbsp;Je ne sais pas&nbsp;
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="control-label col-md-6" for="adresse">Adresse <span class="required">*</span> :</label>
                                    <textarea id="adresse" name="adresse" class="validate[required] form-textarea col-md-6"></textarea>
                                </div>
                                <div class="row">
                                    <label class="description col-md-6" for="codepostal">Code postal :</label>
                                    <input id="codepostal" name="codepostal" placeholder="CP"  class="validate[required] text col-md-6" type="text"  value="" />
                                </div>
                                <div class="row">
                                    <label class="description col-md-6" for="ville">Ville</label>
                                    <input id="ville" name="ville"  type="text"  value="<?php echo $_POST['ville']; ?>"  class="text medium col-md-6" />
                                </div>
                                <div class="row">
                                    <label class="description col-md-6" for="delai" >Intervention :</label>
                                    <select  id="delai" class="select medium col-md-6" name="delai">
                                        <option value=""> - - - </option>
                                        <option value="Des que possible">Dès que possible</option>
                                        <option value="Sous 7 jours">Sous 7 jours</option>
                                        <option value="Sous 15 jours">Sous 15 jours</option>
                                        <option value="Dans le mois">Dans le mois</option>
                                        <option value="Ne sais pas">Je ne sais pas</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <label class="control-label col-md-6" for="delai">Intervention :</label>
                                    <select id="delai" class="form-input col-md-6" name="delai">
                                        <option value="" selected="selected"> - - - </option>
                                        <option value="Des que possible">Dès que possible</option>
                                        <option value="Sous 7 jours">Sous 7 jours</option>
                                        <option value="Sous 15 jours">Sous 15 jours</option>
                                        <option value="Dans le mois">Dans le mois</option>
                                        <option value="Ne sais pas">Je ne sais pas</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <label class="control-label col-md-6" for="comments">Précisions diverses :</label>
                                    <textarea placeholder="Exemple : liste de vos diagnostics encore valables" id="comments" name="commentaire_commande" class="form-textarea col-md-6"></textarea>
                                </div>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active"><h4>Vos coordonnées</h4></div>
                            <div class="accord-content collapsed">
                                <div class="row">
                                    <label class="control-label col-md-6" for="civilite">Civilité :</label>
                                    <div class="col-md-6">
	                                    <label class="radio"><input id="civilite_mr" name="civilite" type="radio" value="Mr"> &nbsp;Mr&nbsp;</label>
	                                    <label class="radio"><input id="civilite_mme" name="civilite" type="radio" value="Mme"> &nbsp;Mme&nbsp;</label>
	                                </div>
                                </div>
                                <div class="row">
                                    <label class="control-label col-md-6" for="nom">Nom <span class="required">*</span> :</label>
                                    <input id="nom" name="nom" class="form-input validate[required] col-md-6" maxlength="255" value="<?php echo $_POST['nom']; ?>">
                                </div>
                                <div class='row'>
                                    <label class="control-label col-md-6" for="nom">Téléphone <span class="required">*</span> :</label>
                                    <input id="telephone" name="telephone" class="form-input validate[required] col-md-6" type="text" maxlength="255">
                                </div>
                                <div class="row">
                                    <label class="control-label col-md-6" for="email">E-mail <span class="required">*</span> :</label>
                                    <input id="email" name="email" class="form-input validate[required,custom[email]] col-md-6" type="text" maxlength="255">
                                </div>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>
                </div>
            </div>
            <div class="row">
                <input name="rgpd_hidden" type="hidden" value="1">
                        <label><input type="checkbox" name="rgpd" required="">
 En soumettant ce formulaire, j'accepte que les informations saisies 
soient exploitées dans le cadre de la demande de contact et de la 
relation commerciale qui peut en découler.</label>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <input  name="host" type="text" value=""  style="visibility:hidden" />
                    <button class="btn-one" type="submit" data-loading-text="Attendez svp!!!" name="saveDevis">Envoyer votre demande</button>  
                </div>
                <div class="col-md-4"></div>
            </div>
        </form>   
    </div>
</section>
<?php include("tpl/bas.tpl.php"); ?>
