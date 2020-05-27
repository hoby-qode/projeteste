<?php 
	include("configuration.php");
	include('tpl/head.tpl.php');
	include("tpl/haut.tpl.php");  

	$sql  = 'SELECT lat, lng, commune, u.url FROM communes c, urls u WHERE u.cid = c.communesid AND u.tid IN(0,1)';
	$COMM = queryO($sql);
	foreach($COMM as $i=>$val){
		$COMM[$i]->data = array(
			'ville' => '<img src="/favicon.png" />'.$val->commune,
			'url' => SITE_URL.'/'.$val->url
		);
		$lats[] = $val->lat; 
		$lngs[] = $val->lng; 
	}
	$center = array((array_sum($lats)/count($lats)),(array_sum($lngs)/count($lngs)));
	$zoom = 9;

?>
<!--
 <section class="content-page pb-50 pt-50">
        <div class="auto-container ">
            <div class="row">
                <div class="col-12">
					<h1>Secteur d'interventions</h1>
					<?php include(APPLI_SRC."/secteur-intervention.php");?>
	              </div>
            </div>
        </div>
    </section>
	-->
	<!--<section class="about-style1-area">
		<div class="container">
			<div class="row">
				 <div class="col-xl-6 col-lg-12">
					<div class="title">
						<h1>
							Titre de la page 
							<br>diagnostic <span class="titleb">amiante</span>
						</h1>   
					</div>
					<div class="inner-contant">
						<p>Donec scelerisque dolor id nunc dictum, interdum gravida mauris rhoncus. Aliquam at ultrices nunc. In sem leo, fermentum at lorem in, porta finibus mauris. Aliquam consectetur, ex in gravida porttitor,</p>
						<p>Donec scelerisque dolor id nunc dictum, interdum gravida mauris rhoncus. Aliquam at ultrices nunc. In sem leo, fermentum at lorem in, porta finibus mauris.</p>
						<p>Donec scelerisque dolor id nunc dictum, interdum gravida mauris rhoncus. Aliquam at ultrices nunc. In sem leo, fermentum at lorem in, porta finibus mauris. Aliquam consectetur, ex in gravida porttitor,</p>
						<p>Donec scelerisque dolor id nunc dictum, interdum gravida mauris rhoncus. Aliquam at ultrices nunc. In sem leo, fermentum at lorem in, porta finibus mauris.</p>
						<p>Donec scelerisque dolor id nunc dictum, interdum gravida mauris rhoncus. Aliquam at ultrices nunc. In sem leo, fermentum at lorem in, porta finibus mauris. Aliquam consectetur, ex in gravida porttitor,</p>
					</div>  
				</div> 
				<div class="col-xl-6 col-lg-12 sary">
					<div class="about-style1-image-box clearfix">
						<div class="shape zoom-fade"></div>
						<div class="image-box1">
							<img src="images/interne/interne_contenu2.jpg" alt="Awesome Image">
						</div>
						<div class="image-box2">
							<img src="images/interne/interne_contenu3.jpg" alt="Awesome Image">
						</div>
						<div class="video-holder-box" style="background-image:url(images/about/video-gallery.jpg);">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->   
<!--End About Style1 Area-->   

<!--Start Service Style2 Area-->
	<!--<section class="service-style2-area service-page2">
		<div class="container service-box">
			<div class="sec-title text-center">
				<div class="big-title black-clr">
					<h1>Vendeur / Bailleur</h1>
					<h1>Rétrouvez vos obligations</h1>
				</div>
			</div>
			<div class="row">-->
				<!--Start Single Service Style2-->
				<!--<div class="col-xl-4 col-lg-4">
					<div class="single-service-style2">
						<div class="img-holder">
							<img src="images/services/amiante.jpg" alt="Awesome Image">
							<div class="static-content">
								<div class="title">
									<h3><a href="#">Diagnostic amiante</a></h3>
								</div>
								<div class="icon">
									<a href="#"><span class="flaticon-plus"></span></a>
								</div>
							</div>
							<div class="overlay-content">
								<div class="inner-content">
									<div class="icon"><span class="flaticon-helmet-1"></span></div>
									<div class="text-holder">
										<div class="title">
											<h3><a href="services-single.html">Diagnostic amiante</a></h3>
										</div> 
										<p></p>
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>-->
				<!--End Single Service Style2-->
				<!--Start Single Service Style2-->
				<!--<div class="col-xl-4 col-lg-4">
					<div class="single-service-style2">
						<div class="img-holder">
							<img src="images/services/gaz.jpg" alt="Awesome Image">
							<div class="static-content">
								<div class="title">
									<h3><a href="#">Diagnostic Gaz</a></h3>
								</div>
								<div class="icon">
									<a href="#"><span class="flaticon-plus"></span></a>
								</div>
							</div>
							<div class="overlay-content">
								<div class="inner-content">
									<div class="icon"><span class="flaticon-helmet-1"></span></div>
									<div class="text-holder">
										<div class="title">
											<h3><a href="services-single.html">Diagnostic Gaz</a></h3>
										</div> 
										<p></p>
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>-->
				<!--End Single Service Style2-->
				<!--Start Single Service Style2-->
				<!--<div class="col-xl-4 col-lg-4">
					<div class="single-service-style2">
						<div class="img-holder">
							<img src="images/services/plomb.jpg" alt="Awesome Image">
							<div class="static-content">
								<div class="title">
									<h3><a href="#">Diagnostic Plomb</a></h3>
								</div>
								<div class="icon">
									<a href="#"><span class="flaticon-plus"></span></a>
								</div>
							</div>
							<div class="overlay-content">
								<div class="inner-content">
									<div class="icon"><span class="flaticon-helmet-1"></span></div>
									<div class="text-holder">
										<div class="title">
											<h3><a href="services-single.html">Diagnostic Plomb</a></h3>
										</div> 
										<p></p>
									</div>
								</div>
							</div>
						</div> 
					</div>-->
				<!--</div> -->
				<!--End Single Service Style2-->  
			<!-- </div>  -->
		 <!--</div>  -->
	 <!--</section>  -->
<!--End Service Style2 Area-->
<!--
<div class="container">
    <div class="row">
        certification
    </div>
</div>-->
<!--<section id="feature">
	<div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                    <div class="texte">
                        <h1>Titre de la<br>page d'<span>acceuil</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                    <img src="images/maison.jpg" class="image">
                </div>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                        <div class="feature-wrap dashed">
                            <h2>Reactivité</h2>
                            <img src="images/icon_1.jpg">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                        <div class="feature-wrap dashed">
                            <h2>Service après vente</h2>
                            <img src="images/icon_2.jpg">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                        <div class="feature-wrap dashed">
                            <h2>Conseil</h2>
                            <img src="images/icon_3.jpg">
                        </div>
                    </div>
                
                    <div class="col-md-3 col-sm-6 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                        <div class="feature-wrap">
                            <h2>15 ans d'experience</h2>
                            <img src="images/icon_4.jpg">
                        </div>
                    </div>
                </div>
            </div>    
        </div>-->
		
		<section id="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                    <div class="texte">
                        <h1>Titre de la<br>page d'<span>acceuil</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">
                    <img src="images/maison.jpg" class="image">
                </div>
            </div>   
        </div>
    </section>
	<section id="recent-workss">
        <div class="container">
            
            <div class="wow fadeInDown actualité animated" style="visibility: visible; animation-name: fadeInDown;">
               <h1>Vendeur / Bailleur</h1>
			   <h1>Rétrouvez vos obligations</h1>
            </div>
            <div class="row">
                <div class="card col-md-4 wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                    <img class="card-img-top" src="images/interne/amiante.jpg">
                    <div class="card-block">
                        <h5 class="text-bold"><a href="">Titre de<br>l'actualité</a></h5>
                    </div>
                </div>
                <div class="card col-md-4 wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                    <img class="card-img-top" src="images/interne/erp.png">
                    <div class="card-block">
                        <h5 class="text-bold"><a href="">Titre de<br>l'actualité</a></h5>
                    </div>
                </div>
                <div class="card col-md-4 wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                    <img class="card-img-top" src="images/interne/dep.png">
                    <div class="card-block">
                        <h5 class="text-bold"><a href="">Titre de<br>l'actualité</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include("tpl/bas.tpl.php"); ?>
