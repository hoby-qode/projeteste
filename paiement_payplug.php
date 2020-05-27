<?php
	include_once("configuration.php");
	include_once(APPLI_SRC."/inc/phpmail.class.php");
	include_once(APPLI_SRC."/paiement_payplug.php");
	
	$NOINDEX = true;
	$TITLE = 'Paiement en ligne | '.NOM_APPLI;
?>
<?php include_once('tpl/head.tpl.php');?>
<?php include_once('tpl/valid.tpl.php');?>
<?php include_once("tpl/haut.tpl.php"); ?>
<h1>Paiement</h1>

<?php
if(sizeof($tabErreurForm) > 0) {
	echo "<ul class='ulErrorPayplug'>";
		foreach($tabErreurForm as $error) {
			 echo "$error";
		}
	echo "</ul><br />";
}
echo $info;
if(!isset($_GET["valider"])){
?>
<style>
#payplug_bloc fieldset{padding:10px;}
#payplug_bloc legend{font-size: 14px;}
#payplug_bloc .row{margin:15px 0;width: 100%!important; }
#payplug_bloc .row label{width : 160px; font-weight:bold;line-height:30px;display: inline-block; text-align:right;}
#payplug_bloc .center{text-align:center;}
#payplug_bloc .text{line-height:30px; border-radius:10px;width: 250px; padding:0 10px;height:30px;}
#payplug_bloc .btn{line-height:30px; margin-top: 5px; border: 1px solid #ccc; background-color: #f6f6f6; font-weight: bold; cursor: pointer; border-radius:10px; padding:0 15px;text-transform: uppercase;}
#payplug_bloc .btn:hover{ background-color: #ccc;}
.ulErrorPayplug{ color: #b94a48; background-color: #f2dede; border-color: #eed3d7; border-radius:10px;line-height:30px; padding:5px 10px; font-size:14px; font-weight: bold;}
.title h3{
    color: #000000;
    font-size: 24px;
    line-height: 30px;
    font-weight: 400;
}

</style>
<section id="baner" style="background-image: url(images/ban-1.png);"></section>
<section class="contact-form-area">
    <div class="container">
		<div class="row clearfix">
			<div class="col-xl-12 col-lg-12 col-md-12">
				<div class="contact-form">
					<div class="title text-center">						
						<h3>Vous pouvez r&eacute;gler votre facture en ligne via ce formulaire s&eacute;curis&eacute;</h3>
						<h3><img src="http://www.arobiz.com/files/images/payplug_cb.png" /></h3>
						<h3>Les donn&eacute;es transmises via ce formulaires sont crypt&eacute;es.</h3>
					</div>
					<div class="inner-box">	
						<form class="default-form2" action="paiement_payplug.php" method="POST" name="formulaire" id="payplug_bloc">
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<div class="input-box"> 
										<p>Num&eacute;ro facture : &nbsp;&nbsp;</p>
										<input id="num_facture" name="num_facture" type="text" value="<?php echo $_POST['num_facture'];?>" />
									</div> 
								</div>
								<div class="col-md-4"></div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<div class="input-box"> 
										<p>Email : &nbsp;&nbsp;</p>
										<input id="email" name="email" type="email" value="<?php echo $_POST['email'];?>" required="required" />
									</div> 
								</div>
								<div class="col-md-4"></div>
							</div>
							<input id="firstName" name="firstName" type="hidden" />
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<div class="input-box"> 
										<p>Nom : &nbsp;&nbsp;</p>
										<input id="lastName" name="lastName" type="text" value="<?php echo $_POST['lastName'];?>" required="required" />
									</div> 
								</div>
								<div class="col-md-4"></div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<!--<div class="input-box"> -->
										
										<!--<input id="amount" name="amount" type="text"  value="<?php echo $_POST['amount'];?>" required="required" /> <strong>&euro;</strong>-->
										<div class="input-group">
											<p>Montant : &nbsp;&nbsp;</p>
										  <input type="text" id="amount" name="amount" type="text"  value="<?php echo $_POST['amount'];?>" required="required" />
										  <div class="input-group-append">
											<span class="input-group-text">&euro;</span>
										  </div>
										</div>
									
									<!-- </div> -->
								</div>
								<div class="col-md-4"></div>
							</div>
							<input id="ipnUrl" name="ipnUrl" type="hidden" value="http://<?php echo $_SERVER['SERVER_NAME'];?>/paiement_payplug.php?ipn" />
							<input id="cancelUrl" name="cancelUrl" type="hidden" value="http://<?php echo $_SERVER['SERVER_NAME'];?>/paiement_payplug.php?annule" />
							<input id="returnUrl" name="returnUrl" type="hidden" value="http://<?php echo $_SERVER['SERVER_NAME'];?>/paiement_payplug.php?valider" />
                            
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="button-box text-center btn_envoyer">
										<!--<input type="submit" value="Confirmer" name="paiement_payplug" class='btn' />-->
										<!--<input id="paiement_payplug" type="submit" value="" name="paiement_payplug" class='form-control' type="hidden" />-->
                                        <button class="btn-one btn-lg" type="submit" name="paiement_payplug" data-loading-text="">Confirmer</button>    
                                    </div>  
                                </div>
                                <div class="col-md-4"></div>
                            </div> 
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
}
?>

<?php include_once("tpl/bas.tpl.php"); ?>