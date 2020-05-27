<?php 
	include("configuration.php");
	include('tpl/head.tpl.php');
	include("tpl/haut.tpl.php");  

	$sql  = 'SELECT lat, lng, commune, description, u.url FROM communes c, urls u WHERE u.cid = c.communesid AND u.tid IN(0,1)';
	$COMM = query($sql);
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
	// $result = "";
	$result1 = "";
	$nr = 0;	
	
	while ($data = mysql_fetch_array($COMM)) {	
		
			// $result = $result . '<div class="slide">
				// <div class="single-testimonial-style1">
					// <div class="text">'.$data['description'].
					// '</div> 
					// <div class="client-info">
						// <div class="icon-box">
							// <span class="flaticon-engineer-1"></span>
						// </div>
						// <div class="title-box">
							// <h3>Diagnostic '.$data['commune']. '</h3>'.
							' <p>' .$data['url']. '</p>'.
						// '</div>
					// </div>   
				// </div>
			// </div>';
			
			
							
		  $nr++;
		  if( $nr == 1 ) {
			  
			$result1 = $result1 . '<div class="item active">
					<div class="title">
						<h1><span class="titleb">Diagnostic '.$data['commune'] . '</span></h1>'. // .$data['url'].'
					'</div>
					<div class="inner-contant">'
						.$data['description'].
					'</div>
				</div>';
			
		  }
		  
			$result1 = $result1 . '<div class="item">
					<div class="title">
						<h1><span class="titleb">Diagnostic '.$data['commune'] . '</span></h1>'. // .$data['url'].'
					'</div>
					<div class="inner-contant">'
						.$data['description'].
					'</div>
				</div>';
		  
		
	
	};

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
	<!--
<section class="testimonial-style1-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="testimonial-style1-title-box" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="70">
                    <div class="sec-title">
                        <p>Our Global Work Industries!</p>
                        <div class="big-title"><h1>What Our Client Says Feedback?</h1></div>
                    </div>    
                </div>    
            </div>   
            <div class="col-md-6 col-sm-6">
                <div class="single-vertical-carousel">
					<?php  echo $result ?>			
                </div>
            </div> 
              
        </div>
    </div>
</section>

	-->
	<section id="baner" style="background-image: url(images/ban-1.png);"></section>
	<section class="about-style1-area">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 wow">
					<div id="about-carousel-slider" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
						
							<?php echo $result1 ?>
							
							<a class="carousel-control-prev" href="#about-carousel-slider" role="button" data-slide="prev">
							  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							  <span class="sr-only">Précédent</span>
							</a>
							<a class="carousel-control-next" href="#about-carousel-slider" role="button" data-slide="next">
							  <span class="carousel-control-next-icon" aria-hidden="true"></span>
							  <span class="sr-only">Suivant</span>
							</a>
						 <!--  <a class="left carousel-control hidden-xs" href="#about-carousel-slider" data-slide="prev">
							<i class="fa fa-angle-left"></i> 
						  </a>
						  
						  <a class=" right carousel-control hidden-xs"href="#about-carousel-slider" data-slide="next">
							<i class="fa fa-angle-right"></i> 
						  </a> -->
						</div>				
					</div> 				
				</div> 
				<div class="col-md-6 col-sm-6 wow sary">
					<div class="about-style1-image-box clearfix">
						<div class="shape zoom-fade"></div>
						<div class="image-box1">
							<img src="images/interne/interne_contenu2.jpg" alt="Awesome Image">
						</div>
						<div class="image-box2">
							<img src="images/interne/interne_contenu3.jpg" alt="Awesome Image">
						</div>
						<div class="video-holder-box" style="background-image:url(images/interne/interne_image1_4.jpg);">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>   
<!--End About Style1 Area-->  
	
<!--Start Service Style2 Area-->
	<section class="service-style2-area service-page2" style="background-image: url(images/contenu/image_font.jpg);">
		<div class="container service-box">
			<div class="sec-title text-center">
				<div class="big-title black-clr">
					<h1>Vendeur / Bailleur</h1>
					<h1>Rétrouvez vos obligations</h1>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xl-4 col-lg-4">
					<div class="single-service-style2">
						<div class="img-holder">
							<img src="images/services/amiante.jpg" alt="Awesome Image">
							<div class="static-content">
								<div class="title">
									<h3><a href="#">Diagnostic Amiante</a></h3>
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
											<h3><a href="services-single.html">Diagnostic Amiante</a></h3>
										</div> 
										<p></p>
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>
				
				<div class="col-xl-4 col-lg-4">
					<div class="single-service-style2">
						<div class="img-holder">
							<img src="images/services/dep.jpg" alt="Awesome Image">
							<div class="static-content">
								<div class="title">
									<h3><a href="#">Diagnostic DEP</a></h3>
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
											<h3><a href="services-single.html">Diagnostic DEP</a></h3>
										</div> 
										<p></p>
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>
				
				<div class="col-xl-4 col-lg-4">
					<div class="single-service-style2">
						<div class="img-holder">
							<img src="images/services/elec.jpg" alt="Awesome Image">
							<div class="static-content">
								<div class="title">
									<h3><a href="#">Diagnostic électricité</a></h3>
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
											<h3><a href="services-single.html">Diagnostic électricité</a></h3>
										</div> 
										<p></p>
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div> 
			</div> 
			
			<div class="row">
				<div class="col-xl-4 col-lg-4">
					<div class="single-service-style2">
						<div class="img-holder">
							<img src="images/services/carrez.jpg" alt="Awesome Image">
							<div class="static-content">
								<div class="title">
									<h3><a href="#">Loi Carrez</a></h3>
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
											<h3><a href="services-single.html">Loi Carrez</a></h3>
										</div> 
										<p></p>
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>
				
				<div class="col-xl-4 col-lg-4">
					<div class="single-service-style2">
						<div class="img-holder">
							<img src="images/services/erp.jpg" alt="Awesome Image">
							<div class="static-content">
								<div class="title">
									<h3><a href="#">ERP</a></h3>
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
											<h3><a href="services-single.html">ERP</a></h3>
										</div> 
										<p></p>
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>
				
				<div class="col-xl-4 col-lg-4">
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
				</div> 
			</div> 
						
			<div class="row">
				<div class="col-xl-4 col-lg-4">
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
					</div>
				</div>
				
				<div class="col-xl-4 col-lg-4">
					<div class="single-service-style2">
						<div class="img-holder">
							<img src="images/services/boutin.jpg" alt="Awesome Image">
							<div class="static-content">
								<div class="title">
									<h3><a href="#">Loi Boutin</a></h3>
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
											<h3><a href="services-single.html">Loi Boutin</a></h3>
										</div> 
										<p></p>
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>
				
				<div class="col-xl-4 col-lg-4">
					<!--<div class="single-service-style2">
						<div class="img-holder">
							<img src="images/services/elec.jpg" alt="Awesome Image">
							<div class="static-content">
								<div class="title">
									<h3><a href="#">Diagnostic électricité</a></h3>
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
											<h3><a href="services-single.html">Diagnostic électricité</a></h3>
										</div> 
										<p></p>
									</div>
								</div>
							</div>
						</div> 
					</div> -->
				</div>
			</div> 
			
		 </div>
	 </section>  
<!--End Service Style2 Area-->

<?php include("tpl/bas.tpl.php"); ?>

<script type="text/javascript">//<![CDATA[

        
/////////////////////////////
//Universal Code for All Owl Carousel Sliders
/////////////////////////////

if ($('.rinbuild-carousel').length) {
        $(".rinbuild-carousel").each(function (index) {
        var $owlAttr = {},
        $extraAttr = $(this).data("options");
        $.extend($owlAttr, $extraAttr);
        $(this).owlCarousel($owlAttr);
    });
}


// Main Slider Carousel
if ($('.banner-carousel').length) {
    $('.banner-carousel').owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        loop:true,
        margin:0,
        nav: false,
        singleItem:true,
        smartSpeed: 500,
        autoplay: true,
        autoplayTimeout:6000,
        navText: [ '<span class="fas fa-angle-left"></span>', '<span class="fas fa-angle-right"></span>' ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1024:{
                items:1
            }
        }
    });    		
}



// Main Slider Carousel
if ($('.product-image-carousel').length) {
    $('.product-image-carousel').owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        loop: false,
        margin: 10,
        dots: false,
        nav: true,
        singleItem:true,
        smartSpeed: 1000,
        autoplay: 6000,
        autoplayTimeout:6000,
        navText: [ '<span class="fas fa-angle-left"></span>', '<span class="fas fa-angle-right"></span>' ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1024:{
                items:4
            }
        }
    });    		
}

//]]></script>