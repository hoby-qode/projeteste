<?php 
	include("configuration.php");
	$TITLE = 'Avis diagnostiqueur '.COM_PRINCIPALE.' | '.NOM_APPLI;
	include('tpl/head.tpl.php');

    $avis = file_get_contents(URL_SOGEXPERT.'/api_avis?get_xml');
    $xml = simplexml_load_string($avis);

    if(!empty($xml->avis)  && $xml->avis != 'Non activé'){
        header('Location:temoignages.php');
        die;
    } ?>
<?php include('tpl/valid.tpl.php');?>

<script >//<![CDATA[
    jQuery(function($){
        // binds form submission and fields to the validation engine
        $("#linkSign").click(function(){
			$(".infoForm, .ulError").hide();
			$("#formLivre").slideToggle();
		});
    });
//]]>
</script>

<?php
	include(APPLI_SRC."/inc/phpmail.class.php");
	// if(isset($_POST['captcha']) && $_POST['captcha'] != $_SESSION['captcha']){$tabErreurForm[] = '<li>Le code anti-spam est incorrect.</li>';}
	include(APPLI_SRC."/livre-d-or.php");

	$_SESSION[APPLI_URL]['captcha']['nb1'] = rand(0,10);
	$_SESSION[APPLI_URL]['captcha']['nb2'] = rand(1,10);
	
	//Liste des messages
	$objLivre = new livredor();
	$nbMessage = 0;
	$tabWhere[0] = array("statut", "=", 1);
	$tabLivre = $objLivre->GetList($tabWhere, "date", false);
	$nbMessage = count($tabLivre);
	$tabWhere = array();
	
	$TITLE = 'Avis diagnostiqueur '.COM_PRINCIPALE.' '.NOM_APPLI;
	$KEYWORS = 'Diagnostiqueur immobilier '.COM_PRINCIPALE.' '.NOM_APPLI;
	$DESCRIPTION = 'En savoir plus sur vos diagnostiqueurs de '.COM_PRINCIPALE;
?>

<?php include("tpl/haut.tpl.php"); ?>
<section class="testimonial-page-area">
    <div class="container">
        <div class="sec-title text-center">
            <h3>Témoignages clients</h3>
        </div>
	</div>
</section>

<section class="content-page">
   	<div class="form">
   		<h4><a href="javascript:void(0)" title="Déposer un avis" id="linkSign">Cliquez ici pour déposer un avis</a><br /><br /></h4>
		<form action="#" method="post" enctype="multipart/form-data" id="formLivre" class="appnitro formLivre"  style="display:none">
		<br />
		<input type="text" name="societe" id="societe" class="text" placeholder="Votre société" value="<?php echo stripslashes($_POST['societe']); ?>"/>
		<input type="text" name="nom" id="nom" class="text" placeholder="Votre nom*" value="<?php echo stripslashes($_POST['nom']); ?>"/>
		<input type="email" name="email" id="email" class="text" placeholder="Votre e-mail*" value="<?php echo stripslashes($_POST['email']); ?>"/>
		<input type="text" name="url"  id="url" class="text" placeholder="Votre site : https://" value="<?php echo stripslashes($_POST['url']); ?>" />
		<textarea name="message" id="message" required="required" class="textarea" placeholder="Votre message*"></textarea>
		<input type="text" name="verificateur" class="text text-input" placeholder="Combien font <?php echo $_SESSION[APPLI_URL]['captcha']['nb1'].' + '.$_SESSION[APPLI_URL]['captcha']['nb2'] ?>"/>
					<input type="submit" name="envoyer" class="btnDPE" value="Envoyer votre message"  />
		</form>
	</div>
</section>
<?php
	if($nbMessage < 1) echo "<span class='info'>Aucun témoignage pour le moment</span>";
	else{
		if($nbMessage > 1) $s="s";
					?>				
	<section id="recent-works">
        <div class="container">
            <div class="wow fadeInDown">
                <h2><span class="bold">Nos témoignages</span></h2>
            </div>
            <div class="row">
					
					<?php
					foreach($tabLivre as $cle=>$message) {
						$objContact = new contact();
						$tabContact = array();
						$tabWhere[0] = array("contactId", "=",$message->contactid);
						$tabContact = $objContact->GetList($tabWhere);
						$contact = $tabContact[0];
						$tabWhere = array();
						?>
						
				
				<div class="card col-md-4 wow fadeInDown">
                    <div class="box-part text-center">
                        <i class="fa fa-quote-left fa-3x" aria-hidden="true"></i>
                        <div class="title">
							<h4><?php echo AfficheNom($contact->societe, $contact->nom); ?> </h4>
							<p class="date"> <?php echo date("d/m/Y à H:i", strtotime($message->date)); ?></p>
							<p class="rate">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </p>
							<div class="text">
								<span><?php echo nl2br($message->contenu); ?></span>
							</div>
							<?php if(!empty($message->url)) 
							echo "<br /><a href=\"livre-d-or-detail.php?id=".$message->livredorId.
								"\" title='Voir le site' style='text-decoration: none' target='_blank' >
								Lire le témoignage<i class='fa fa-long-arrow-right'></i>
							</a>"; ?>
						</div>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</section>		
	<?php
	}
?>
<?php include("tpl/bas.tpl.php"); ?>
