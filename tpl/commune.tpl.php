<?php include('head.tpl.php');?>
<?php include("haut.tpl.php"); ?>
<!--
    <section class="content-page pb-50 pt-50">
        <div class="auto-container ">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title text-left">
                        <div class="clearfix">
                            <div class="pull-left">
                                <h1><?php echo ucfirst($COMM['libelle']).' '.$COMM['commune'] ?> - <?php echo $COMM['cp']?> </h1>
								<?php echo $COMM['description'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
<section id="feature" >
        <div class="container">
            <div class="row">
                <!--<div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="about-style1-image-box">
                        <div class="shape zoom-fade"></div>
                        <div class="image-box1">
                            <img src="images/about.png" alt="Awesome Image">
                        </div>
                        <div class="image-box2">
                            <img src="images/terre.jpg" alt="Awesome Image">
                        </div>
                        <div class="video-holder-box" style="background-image:url(images/video-gallery.jpg);">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="texte">
                        <h1>Titre de la</br>page d'<span>acceuil</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                    </div>
                </div>-->
				
                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="about-style1-image-box">
                        <div class="shape zoom-fade"></div>
                        <div class="image-box1" id="box-image1">
                            <!--<img src="images/about.png" alt="Awesome Image">-->
                        </div>
                        <div class="image-box2" id="box-image2">
                            <!--<img src="images/terre.jpg" alt="Awesome Image">-->
                        </div>
                        <!--<div class="video-holder-box" style="background-image:url(images/video-gallery.jpg);">-->
						<div class="video-holder-box" id="box-image3">
                            <!-- <img src="images/terre.jpg" alt="Awesome Image">-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="texte">
                        <h1><?php echo ucfirst($COMM['libelle']).'<span>'.$COMM['commune'] .'</span>'?> - <?php echo $COMM['cp']?> </h1><br />
                        <?php echo $COMM['description'] ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap dashed">
                            <h2>Reactivité</h2>
                            <img src="images/icon_1.jpg" alt="Réactivité">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap dashed">
                            <h2>Service après vente</h2>
                            <img src="images/icon_2.jpg" alt="Service">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap dashed">
                            <h2>Conseil</h2>
                            <img src="images/icon_3.jpg" alt="Conseil">
                        </div>
                    </div>
                
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <h2>15 ans d'experience</h2>
                            <img src="images/icon_4.jpg" alt="Expérience">
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>
    
    <section id="recent-works">
        <div class="container">
            <div class="wow fadeInDown">
                <h2><span class="bold">Nos témoignages</span> les plus récents</h2>
            </div>
            <div class="row">
                <div class="card col-md-4 wow fadeInDown">
                    <div class="box-part text-center">
                        <i class="fa fa-quote-left fa-3x" id="quote" aria-hidden="true"></i>
                        <div class="title">
                            <h4>Prénom NOM</h4>
                            <p class="date">12/09/2019</p>
                            <p class="rate">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </p>
                        </div>
                        <div class="text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                        </div>
                        <a href="<?php echo SITE_URL ?>">Lire le témoignage<i class="fa fa-long-arrow-right"></i></a> 
                    </div>
                </div>
                <div class="card col-md-4 wow fadeInDown">
                    <div class="box-part text-center">
                        <i class="fa fa-quote-left fa-3x" id="quote" aria-hidden="true"></i>
                        <div class="title">
                            <h4>Prénom NOM</h4>
                            <p class="date">12/09/2019</p>
                            <p class="rate">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </p>
                        </div>
                        <div class="text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                        </div>
                        <a href="<?php echo SITE_URL ?>/livre-d-or.php">Lire le témoignage<i class="fa fa-long-arrow-right"></i></a> 
                    </div>
                </div>
                <div class="card col-md-4 wow fadeInDown">
                    <div class="box-part text-center">
                        <i class="fa fa-quote-left fa-3x" id="quote" aria-hidden="true"></i>
                        <div class="title">
                            <h4>Prénom NOM</h4>
                            <p class="date">12/09/2019</p>
                            <p class="rate">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </p>
                        </div>
                        <div class="text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                        </div>
                        <a href="<?php echo SITE_URL ?>/livre-d-or.php">Lire le témoignage<i class="fa fa-long-arrow-right"></i></a> 
                    </div>
                </div>
            </div>
            <div class="wow fadeInDown actualité">
                <h2>Decouvrez toutes nos<br>dernières<span> actualités</span></h2>
            </div>
            <div class="row">
                <div class="card col-md-4 wow fadeInDown">
                    <img class="card-img-top" src="images/actualite.jpg" alt="actualité">
                    <div class="card-block">
                        <h5 class="text-bold"><a href="#">Titre de</br>l'actualité</a></h5>
                    </div>
                </div>
                <div class="card col-md-4 wow fadeInDown">
                    <img class="card-img-top" src="images/actualite.jpg" alt="actualité">
                    <div class="card-block">
                        <h5 class="text-bold"><a href="#">Titre de</br>l'actualité</a></h5>
                    </div>
                </div>
                <div class="card col-md-4 wow fadeInDown">
                    <a href="#"><img class="card-img-top" src="images/facture.jpg" alt="facture"></a>
                </div>
            </div>
        </div>
    </section>
<?php include(APPLI_SRC."/osm_commune.php");?>
	
<?php include("bas.tpl.php"); ?>

	<script>
		let body = document.body;
		let imgc = document.getElementsByClassName('image-detail');
		//let imgcp = document.getElementById('img-cp');
		imgc[0].setAttribute('style', 'width:100%');
		//imgcp.append(ok[0]);
		
		
		
		let img1 = document.getElementsByClassName('img1');
		let img2 = document.getElementsByClassName('img2');
		let img3 = document.getElementsByClassName('img3');
		
		let bimg1 = document.getElementById('box-image1');
		let bimg2 = document.getElementById('box-image2');
		let bimg3 = document.getElementById('box-image3');
		
		img1[0].removeAttribute('style');		
		img2[0].removeAttribute('style');		
		//img3[0].removeAttribute('style');
		let srcimg = img3[0].getAttribute('src');
		bimg1.append(img1[0]);
		bimg2.append(img2[0]);
		//bimg3.append(img3[0]);
		bimg3.setAttribute('style',"background-image:url('" + srcimg + "');position: absolute;  bottom: 0; right: 0; width: 250px; height: 80%; overflow: hidden;  background-position: center top;  background-attachment: inherit; background-size: cover;");;
				
		img3[0].remove();
		
	</script>
	
