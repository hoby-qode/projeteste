<?php
	include("configuration.php");
	include(APPLI_SRC."/inc/phpmail.class.php");
	
	if(!empty($_POST['envoyer']) && $_SESSION['captcha'] != $_POST['captcha']) $tabErreurForm[] = "<li>Le code anti-spam est incorrect.</li>";
	include(APPLI_SRC."/contact.php");
	if(isset($_POST['formContact'])){
		$data=array("secret"=>"SECRET_KEY", "response"=>$_POST["g-recaptcha-response"]);

		$urlCap = "https://www.google.com/recaptcha/api/siteverify?" . http_build_query($data);
		$response=file_get_contents($urlCap);
		$captcha=  json_decode($response);
		if($captcha->success!="1"){
			$tabErreurForm[] = "<li>Valider le captcha anti-robot.</li>";
		}
	}
	
	$TITLE = 'Contacter votre prestataire sur '.COM_PRINCIPALE.' | '.NOM_APPLI;

?>
<?php include('tpl/head.tpl.php');?>
<?php include('tpl/valid.tpl.php');?>
<?php include("tpl/haut.tpl.php"); ?>
		
<section id="baner" style="background-image: url(images/ban-2.png);"></section><section class="contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="single-contact-info-box text-center">
                    <div class="icon"><img src="images/contact/contact_icon1.png" alt="Téléphone"></div>
                    <div class="title">
                        <h3>Téléphone</h3>
                        <p>
                            <a href="tel:06 42 43 75 70">06 42 43 75 70</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="single-contact-info-box text-center">
                    <div class="icon"><img src="images/contact/contact_icon2.png" alt="Adresse"></div>
                    <div class="title">
                        <h3>Adresse</h3>
                        <p>25 Rue de la Croix Saint-Jacques<br> 62450 Bapaume</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="single-contact-info-box text-center">
                    <div class="icon"><img src="images/contact/contact_icon3.png" alt="Mail"></div>
                    <div class="title">
                        <h3>Mail</h3>
                        <p>
                            contact(at)fl-expertises(dot)com
                        </p>
                    </div>
                </div>
            </div>  
                 
        </div>
    </div>
</section>
<!--End Contact Info Area-->

<section class="contact-form-area">
    <div class="container">
        <div class="row clearfix">

            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="contact-form">
                    <div class="title text-center">
                        <h1>
                            Une question, un devis?<br>
                            Laissez nous vos <span>coordonnées</span> ci-dessous.
                        </h1>
                    </div>
<?php
if(empty($info)){
?>                        
                    <form id="form-Contact" name="formContact" class="default-form2" action="#" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-box"> 
                                    <p>Votre société</p>  
                                    <input type="text" name="societe" id="societe" value="<?php echo stripslashes($_POST['societe']);?>" placeholder="Votre société" required="">
                                </div>      
                            </div>
                            <div class="col-md-4">
                                <div class="input-box">
                                    <p>Nom</p>   
                                    <input type="text" name="nom" value="<?php echo stripslashes($_POST['nom']);?>" placeholder="Votre nom" required="required" id="nom">
                                </div>      
                            </div>
                            <div class="col-md-4">
                                <div class="input-box">
                                    <p>Prénom</p>   
                                    <input type="text" name="prenom"  id="prenom" value="<?php echo stripslashes($_POST['prenom']);?>" placeholder="Votre prénom" required="required">
                                </div>       
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-box">
                                    <p>Téléphone</p>   
                                    <input type="text" name="telephone" value="<?php echo stripslashes($_POST['telephone']);?>" placeholder="Votre téléphone" id="telephone">
                                </div>       
                            </div>
                            <div class="col-md-6">
                                <div class="input-box">
                                    <p>Mail</p>   
                                    <input type="email" name="email" value="<?php echo stripslashes($_POST['email']);?>" placeholder="Votre e-mail" id="email" required="required">
                                </div>      
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="input-box"> 
                                    <p>Message</p>      
                                    <textarea name="message" id="message" placeholder="Votre message"><?php echo stripslashes($_POST['message']); ?></textarea>
                                </div>      
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <p class="pt-2 pb-2 text-center">
                                    En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de la demande de contact et de la relation commerciale qui peut en découler.
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="pt-4 pb-4 mb-4">
                                    <div class="kaptcha text-center">
                                        <script src='https://www.google.com/recaptcha/api.js?render=_6LfwjbIUAAAAAKJIGfv174A47nLG_-_7q23aeBcQ'></script>
                                        <div class="g-recaptcha" data-sitekey="6LfwjbIUAAAAAKJIGfv174A47nLG_-_7q23aeBcQ"></div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-md-4"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="button-box text-center btn_envoyer">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="btn-one" type="submit" data-loading-text="">Envoyer <span class="flaticon-next"></span></button>    
                                </div>  
                            </div>
                            <div class="col-md-4"></div>
                        </div> 
                    </form>
                </div>
            </div>
            
            <div class="col-xl-12 text-center mb-4">
                <?php 
                echo $info;
                if(!empty($admin->societe)) echo "<strong>", $admin->societe, "</strong><br />";
                if(!empty($admin->adresse)) echo  $admin->adresse,"<br />";
                if(!empty($admin->codepostal)) echo  $admin->codepostal," ", $admin->ville,"<br />";
                if(!empty($admin->telephone)) echo  "T&eacute;l. ",$admin->telephone,"<br />";
                if(!empty($admin->googlemap)):
                ?>
                    <div class="text-center" style="margin-top:30px;margin-bottom:30px;width:100%">
                        <iframe src="<?php echo $admin->googlemap ?>"  height="600" style="border:0; width:100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
            </div>
            <?php Endif; ?>
        </div>
    </div>

<?php } else {  ?>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center mb-4">
                <?php 
                echo "<p>Votre demande a bien été enregistrée et nous vous en remercions.</p>
                        <p>Nous allons vous contacter dans les plus brefs délais.</p>";
                if(!empty($admin->societe)) echo "<strong>", $admin->societe, "</strong><br />";
                if(!empty($admin->adresse)) echo  $admin->adresse,"<br />";
                if(!empty($admin->codepostal)) echo  $admin->codepostal," ", $admin->ville,"<br />";
                if(!empty($admin->telephone)) echo  "T&eacute;l. ",$admin->telephone,"<br />";
                if(!empty($admin->googlemap)):
                ?>
                    <div class="text-center" style="margin-top:30px;width:100%">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2893.0676312461865!2d-1.5049750845065246!3d43.52178237912605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2smg!4v1589014862521!5m2!1sfr!2smg"   height="600" frameborder="0" style="border:0; width:100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
            </div>
            <?php Endif; ?>
        </div>
    </div>
    
<?php
}
?>    
</section>

<?php include("tpl/bas.tpl.php"); ?>
