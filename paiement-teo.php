<?php
	include("configuration.php");
	include(APPLI_SRC."/inc/phpmail.class.php");
	include(APPLI_SRC."/paiement.php");
	
	$NOINDEX = true;
	$TITLE = 'Paiement en ligne | '.NOM_APPLI;
?>
<?php include('tpl/head.tpl.php');?>
<?php include('tpl/valid.tpl.php');?>


<?php include("tpl/haut.tpl.php"); ?>
<section id="baner" style="background-image: url(images/ban-1.png);"></section>
<section class="testimonial-page-area">
    <div class="container">
        <div class="sec-title text-center">
            <h1 class="h1">Paiement en ligne</h1>
        </div>
	</div>
</section>
<section class="contact-form-area">
    <div class="container">
        <!--<div class="row clearfix"> -->
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="contact-form">
                    <div class="title text-center">						
						<h3>Vous pouvez r&eacute;gler votre facture en ligne via ce formulaire sécurisé</h3>
						<h3>Les donn&eacute;es transmises via ce formulaires sont crypt&eacute;es.</h3>
                    </div>
					<div class="inner-box">	
					<?php
					if(!$pagePaiement) {
						if(sizeof($tabErreurForm) > 0) {
							echo "<ul class='ulError'>";
								foreach($tabErreurForm as $error) {
									 echo "$error";
								}
							echo "</ul>";
						}
						echo $info;
						?>
					</div>
					<div class="inner-box">		
                        <form id="formDPE" name="formulaire" class="default-form2" action="#" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
									<div class="input-box"> 
                                        <p>N&deg; de facture :&nbsp;&nbsp;</p>
										<input type="text" id="nofacture" name="nofacture" value="<?php echo $_POST['nofacture']; ?>" required="required" />
										<div class="clearer"></div>
                                    </div> 
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
									<div class="input-box"> 
                                        <p>Montant &agrave; payer :&nbsp;&nbsp;</p>
										<input type="text" id="montant" name="montant" value="<?php echo $_POST['montant']; ?>" required="required"/>&nbsp;<strong>&euro;</strong>
										<div class="clearer"></div>
                                    </div> 
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
									<div class="input-box"> 
                                        <p>Votre nom :&nbsp;&nbsp;</p>
										<input type="text" id="nom" required="required" name="nom" value="<?php echo stripslashes($_POST['nom']); ?>"/>
										<div class="clearer"></div>
                                    </div> 
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
									<div class="input-box"> 
                                        <p>E-mail :&nbsp;&nbsp;</p>
										<input type="email" id="email" name="email" value="<?php echo $_POST['email']; ?>"  required="required"/>
										<div class="clearer"></div>
                                    </div> 
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
									<div class="input-box"> 
                                        <p>Code postal :&nbsp;&nbsp;</p>
										<input type="text" id="codepostal" name="codepostal" value="<?php echo $_POST['codepostal']; ?>" required="required"/>
										<div class="clearer"></div>
                                    </div> 
                                </div>
                                <div class="col-md-4"></div>
                            </div>
							<div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
									<strong>Choisissez un moyen de paiement</strong>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
							
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<div class="label-check">
										<?php if(!empty($admin->paypal)) { ?>
										<div class="radio">
											<input type="radio" name="moyenpaiement" value="cb" id="pmOp1">
											<label for="pmOp1">Paiement par <strong> virement bancaire</strong></label>
										</div>
										<img src="imgmutu/paiementcb.gif" alt="Paiement par carte bancaire" width="150"/>
										<?php } ?>
										<?php if(!empty($admin->rib) && is_file("images/".$admin->rib)) { ?>
										<div class="radio">
											<input type="radio" name="moyenpaiement" value="virement" id="pmOp2">
											<label for="pmOp2">Paiement par <strong> virement bancaire</strong></label>
										</div>
										<?php } ?>
										<?php if(!empty($admin->ordre)) { ?>
										<div class="radio">
											<input type="radio" name="moyenpaiement" value="cheque" id="pmOp3">
											<label for="pmOp3">Paiement par <strong> chèque</strong></label>
										</div>
										<?php } ?>
									<div class="clearer"></div>							
									</div>
								</div>  
								<div class="col-md-4"></div>					
							</div>

									
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<input  name="host" type="text" value=""  style="visibility:hidden" />
									<div class="button-box text-center btn_envoyer">								
										<input type="submit" name="paiement" value="Confirmer" class='btn-one btn-lg'/>
										<!--<button class="btn-one btn-lg"  name="paiement" type="submit" >Confirmer </button>-->	
									</div>
									<!--<div align="center">
										<input type="submit" name="paiement" class="btnDPE" value="Confirmer"  />
									</div>-->						
								</div>
								<div class="col-md-4"></div>
							</div>  
						</form> 
					</div>
					<?php } else {
							if($_POST['moyenpaiement'] == "cb") { ?>
					<div class="inner-box">
						<div align="center"><strong>Cliquez sur le logo ci-dessous pour procéder au paiement</strong><br /></div>
						<div class="moyenPaiement">
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type='hidden' value="<?php echo $_POST['montant']; ?>" name="amount" />
								<input name="currency_code" type="hidden" value="EUR" />
								<input name="shipping" type="hidden" value="0.00" />
								<input name="tax" type="hidden" value="0.00" />
								<input name="return" type="hidden" value="<?php echo SITE_URL; ?>/paiement-valide.php" />
								<input name="cancel_return" type="hidden" value="<?php echo SITE_URL; ?>/paiement-annule.php" />
								<input name="notify_url" type="hidden" value="<?php echo SITE_URL; ?>/notify.php" />
								<input name="cmd" type="hidden" value="_xclick" />
								<input name="business" type="hidden" value="<?php echo $admin->paypal; ?>" />
								<input name="item_name" type="hidden" value="<?php echo $_POST['nofacture']; ?>" />
								<input name="lc" type="hidden" value="FR" />
								<input name="bn" type="hidden" value="PP-BuyNowBF" />
								<input name="custom" type="hidden" value="<?php echo $insertId2; ?>" />
								<input name="email" type="hidden" value="<?php echo $_POST['email']; ?>" />
								<input alt="Effectuez vos paiements via PayPal : une solution rapide, gratuite et sécurisée" name="submit" src="imgmutu/paiement.png" type="image" /><img src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" border="0" alt="" width="1" height="1" />
							</form>
						</div>
                    </div>
				
				
					<?php } elseif($_POST['moyenpaiement'] == "virement") { ?>
					<div class="inner-box">
						<div class="moyenPaiement">
							<div align="center"><strong>Vous avez choisi le paiement par Virement Bancaire</strong><br /></div>
							<p style="text-align:center">
								Veuillez télécharger le RIB ci-dessous pour régler votre facture.<br />
								<br />
								Facture : <strong><?php echo $_POST['nofacture'];?></strong><br />
								Montant : <strong><?php echo $_POST['montant']; ?> &euro; </strong><br /><br />
								Merci de mentionner le numéro de la facture sur l'ordre de virement.
							</p>
							<a href="download.php?file=<?php echo encode($admin->rib); ?>" target="_blank">
							<img src="imgmutu/rib.jpg" alt="RIB"  style="border:1px solid #2d2d2d;"/><br />
							Télécharger le RIB</a>
						</div>
					</div>
					
			<?php } elseif($_POST['moyenpaiement'] == "cheque") { ?>
								
				<div class="inner-box">
					<div class="moyenPaiement">
						<div align="center"><strong>Vous avez choisi le paiement par Chèque</strong><br />
							<p style="text-align:center">Veuillez envoyer votre chèque à l'adresse suivante : <br /></p>
							<div align="center">
							<p style="text-align:center">
							<?php
								echo $admin->societe,  "<br />", $admin->adresse, "<br />", $admin->codepostal," ", $admin->ville;
								echo "<br /><br /><u>Ordre du chèque :</u> ", $admin->ordre;
							?>
							</p>
							</div>
							<p style="text-align:center">
								Facture : <strong><?php echo $_POST['nofacture'];?></strong><br />
								Montant : <strong><?php echo $_POST['montant']; ?> &euro; </strong><br /><br />
								Merci de mentionner le numéro de la facture au dos du chèque.
							</p>
						</div>
					</div>
				</div>
			<?php } ?>
			<br />
			<a href="paiement.php" title="Retour à la page de paiement" id="linkBack">&laquo; Retour à la page de paiement</a>
			<div class="clearer"></div>
		<?php } ?>
            </div>
            </div>
        <!--</div>-->
    </div>
</section>

<?php include("tpl/bas.tpl.php"); ?>
