<?php include('head.tpl.php');
    include("haut.tpl.php");
    ?>
<section class="main-slider style1">
    <div class="slider-box">
        <!-- Banner Carousel -->
        <div class="banner-carousel owl-theme owl-carousel">
            <!-- Slide -->
            <div class="slide">
                <div class="image-layer" style="background-image:url(images/slide1.jpg)"></div>
                <div class="auto-container">
                    <div class="content">
                        <h2>Votre diagnostiqueur immobilier<br> Sur Baupaume & Les Haut-de-France</h2>
                        <div class="btns-box">
                            <a href="<?php echo SITE_URL ?>/contact.php" class="btn-two">Nous Contacter</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide -->
            <div class="slide">
                <div class="image-layer" style="background-image:url(images/slide2.jpg)"></div>
                <div class="auto-container">
                    <div class="content">
                        <h2>Vente ou location<br> Quels sont les diagnostics obligatoires?</h2>
                        <div class="btns-box">
                            <a href="<?php echo SITE_URL ?>/obligations-proprietaires-avant-vendre-bien-i9.html" class="btn-two">Vente</a>
                            <a href="<?php echo SITE_URL ?>/obligations-proprietaires-bailleurs-avant-location-i8.html" class="btn-one">Location <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide -->
            <div class="slide">
                <div class="image-layer" style="background-image:url(images/slide3.jpg)"></div>
                <div class="auto-container">
                    <div class="content">
                        <h2>Avant travaux ou démolition<br>Nous effectuons les contrôles obligatoires</h2>
                        <div class="btns-box">
                            <a href="<?php echo SITE_URL ?>/proteger-population-exposee-amiante-avant-travaux-ou-demolition-i12.html" class="btn-two">En Savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
    <section id="feature" >
        <div class="formulaire">
        <form id="regForm" action="#" method="post" class="form-wrapper" >
            <h2>DEMANDER VOTRE DEVIS GRATUIT:</h2>
            <div class="tab">
                <div class="row">
                    <div class="col-md-2">
                        <p class="title">Vous realisez :</p>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="radio" name="radio" id="r4" <?php echo !isset($_POST['typebien']) || $_POST['typebien']=='vente' ? 'checked="checked"' :'' ?>>
                                <label for="r4">
                                    <i class="flaticon-supermarket"> </i><span>Une vente</span>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="radio" id="r5" <?php echo $_POST['typebien']=='location' ? 'checked="checked"' :'' ?>>
                                <label for="r5">
                                    <i class="flaticon-inclined-key"> </i><span>Une location</span>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="radio" id="r6" <?php echo $_POST['typebien']=='autre' ? 'checked="checked"' :'' ?>>
                                <label for="r6">
                                    <i class="flaticon-helmet-1"> </i><span>Autre</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <p class="title">Votre type de bien :</p>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="radio" name="r2" id="r7" checked>
                                <label for="r7">
                                    <i class="flaticon-house"> </i><span>Une maison</span>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="r2" id="r8">
                                <label for="r8">
                                    <i class="flaticon-building"> </i><span>Un appartement</span>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="r2" id="r9">
                                <label for="r9">
                                    <i class="flaticon-chair"> </i><span>Un autre bien</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab">
                <div class="row">
                    <div class="col-md-3">
                        <p class="title">Votre code postal</p>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="code-postal" placeholder="entrer votre code postal" value="<?php echo $_POST['codepostal']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p class="title">Votre Nom</p>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nom" placeholder="entrer votre nom" value="<?php echo $_POST['codepostal']; ?>">
                    </div>
                </div>
            </div>
            <div class="tab">
                <div class="row">
                    <div class="col-md-3">
                        <p class="title">Votre numero de téléphone</p>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="code-postal" placeholder="entrer votre numero de téléphone" value="<?php echo $_POST['telephone']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p class="title">Votre Adresse email</p>
                    </div>
                    <div class="col-md-9">
                        <input type="email" name="nom" required="required" placeholder="entrer votre adresse email" value="<?php echo $_POST['email']; ?>">
                    </div>
                </div>
            </div>
			<div class="bouton">
				<input class="bouton devis"  type="button" id="prevBtn" onclick="nextPrev(-1)" value="<         Retour">
				<!--<a href="#"  id="prevBtn" onclick="nextPrev(-1)">
					Retour
				</a>-->
				<input class="bouton devis"  type="button" id="nextBtn" onclick="nextPrev(1)" value="Suivant         >">
				<!--<a href="#"  id="nextBtn" onclick="nextPrev(1)">
					Suivant 
				</a><img style="float: right;margin-top: 15px;" src="images/icons-3.png" alt="Etat des lieux Cambrai 59400"> -->
			</div>
<!-- Circles which indicates the steps of the form: -->
		<div style="text-align:center;margin-top:40px;">
		  <span class="step"></span>
		  <span class="step"></span>
		  <span class="step"></span>
		  <span class="step"></span>
		</div>
		</form> 
		</div>
        <div class="container">
			<div class="row">
				<div class="col-xl-5 col-sm-6">
					<div class="about-style1-image-box clearfix">
						<div class="shape zoom-fade"></div>
						<div class="image-box1" id="box-image1">							
						</div>
						<div class="image-box2" id="box-image2">
						</div>
						<div class="video-holder-box" id="box-image3" style="top:50px; height:336px;">
							
						</div>
					</div>     
				</div>
				<div class="col-xl-7 col-lg-12">
					<div class="about-style1-text-box">
						  <h1><?php echo $TEXT['titre'] ?></h1>
						<div class="inner-contant">
							<?php echo $TEXT['code'] ?> 
						</div>    
					</div>  
				</div>
				
			</div>
            <div class="features">
            	<div class="row">
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap dashed">
                            <h3>Reactivité</h3>
                            <img src="images/icon_1.jpg" alt="Réactivité">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap dashed">
                            <h3>Service après vente</h3>
                            <img src="images/icon_2.jpg" alt="Service">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap dashed">
                            <h3>Conseil</h3>
                            <img src="images/icon_3.jpg" alt="Conseil">
                        </div>
                    </div>
                
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <h3>15 ans d'experience</h3>
                            <img src="images/icon_4.jpg" alt="Expérience">
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>
    
    <section id="recent-works" style="background-image:url('./images/fond-1.jpg'); background-repeat: no-repeat ;background-attachment: fixed;background-position: center top;">
		<div style="background-image:url('./images/bar_conte.jpg');  background-repeat: no-repeat ; height:250px; margin-top:0px; margin-left:0px; background-size: 100% 100%;"></div>
        <div class="container" style="margin-top:-150px;">
			<div class="row">
				<div class="wow fadeInDown col-md-6" >
					<h2 style="font-weight:400;">
						<span style="font-weight:bold;">Nos témoignages</span> les plus récents
					</h2>
				</div>
                <a  style="font-weight:300;text-align:right;color:#fff;font-size:25px" class="col-md-6" href="<?php echo SITE_URL ?>/livre-d-or.php">Consulter tous nos avis <i class="fa fa-long-arrow-right"></i></a>
            </div>
            <div class="row">
                <?php
                $sql  = 'SELECT * FROM livredor l, contact c  WHERE l.contactid=c.contactid ORDER BY l.date desc LIMIT 3';
                $COMM = query($sql);
                while ($data = mysql_fetch_array($COMM)) {
                ?>
                <div class="card col-xl-4 col-lg-4 wow fadeInDown">
					<div class="icon-part">
						<i class="fa fa-quote-left fa-3x"  aria-hidden="true"></i>
					</div>
                    <div class="box-part text-center">
                        <!-- <div class="icon-part">
							<i class="fa fa-quote-left fa-3x"  aria-hidden="true"></i>
						</div>-->
                        <div class="title">
                            <h4><?php echo $data["societe"];?></h4>
                            <p class="date"><?php echo date("d/m/Y à H:i", strtotime($data["date"])); ?></p>
                            <p class="rate">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </p>
                        </div>
                        <div class="text">
                            <span><?php echo substr($data["contenu"], 0, 80);?>...</span>
                        </div>
                        <a href="<?php echo SITE_URL ?>/livre-d-or-detail.php?id=<?php echo $data["livredorid"];?>">Lire le témoignage <i class="fa fa-long-arrow-right"></i></a> 
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="wow fadeInDown actualité">
                <h2>Decouvrez toutes nos<br>dernières<span> actualités</span></h2>
            </div>
			
			<div class="row">
					<?php
					$act  = 'SELECT * FROM actualites ORDER BY date desc LIMIT 2';
					$res = query($act);				
					while ($data = mysql_fetch_array($res)) {
					?>
					 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-3 wow" >
						<div class="single-team-member wow  fadeInUp">											
								<div style="text-align: center; float: left; background:#72B02B; color:#FFF; position:absolute; width:100px; height: 25px; margin-left: 20px; margin-top: 30px;z-index:100" >								
									<?php echo date("d/m/Y", strtotime($data["date"])); ?>
								</div>
							<a href="<?php echo SITE_URL ?>/actualite-detail.php?id=<?php echo $data["actualitesid"];?>">
							<div class="img-holder">
								<?php 
									$ximage = "#<img(.*?)(src.*?)>#is";
									preg_match_all($ximage , $data["contenu"], $result); 
									preg_match_all('/(style)=("[^"]*")/i',$result[0][0],$stimg);
									 $ximg = str_replace($stimg[0][0],'', $result[0][0]);
									 echo  $ximg ;
								?>
								
							</div>
							</a>	
							
							
							<?php echo $data["lien"];?>
								<div class="card-block">
									<h5 class="text-bold"><a href="<?php echo SITE_URL ?>/actualite-detail.php?id=<?php echo $data["actualitesid"];?>"><?php echo $data["titre"];?></a></h5>
								</div>
						</div>
					</div>
					<?php }?>
					<div class="col-xl-3 offset-xl-1 offset-lg-0 col-lg-4 col-md-4 col-sm-12">
                        <div class="paie-box text-center" style="background-image:url('images/bg-4.png');">
                            <div class="mb-3"><img src="images/paie.png" alt="Etat des lieux Albert 80300"></div>
                            <div class="text-white" style="font-weight: 600;font-size: 23px;line-height: 1.5em;">
                                Réglez votre <br> facture en ligne <br><span style="color: #73b12c;">&amp;</span> <br>en toute sécurité
                            </div>
                            <div class="text-uppercase text-white " style="font-size: 18px;padding-top: 30px;"><img style="position: relative;top: -10px;left: -30px;margin-right: -30px;" src="images/deco-1.png" alt="Amiante avant travaux Albert 80300 "> <a href="paiement_payplug.html" style="color: inherit;">cliquez ici</a></div>
                        </div>
                    </div>
			</div>
			
			
        </div>
    </section>
	
	<script>		
		
		let img1 = document.getElementsByClassName('img1');
		let img2 = document.getElementsByClassName('img2');
		let img3 = document.getElementsByClassName('img3');
		
		let bimg1 = document.getElementById('box-image1');
		let bimg2 = document.getElementById('box-image2');
		let bimg3 = document.getElementById('box-image3');
		
		img1[0].removeAttribute('style');		
		img2[0].removeAttribute('style');
		let srcimg = img3[0].getAttribute('src');
		bimg1.append(img1[0]);
		bimg2.append(img2[0]);
		bimg3.setAttribute('style',"background-image:url('" + srcimg + "');");
				
		img3[0].remove();
		
	</script>
	
<?php include("bas.tpl.php"); ?>
	
	
