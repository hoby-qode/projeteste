<?php include('head.tpl.php');
    include("haut.tpl.php");
    ?>
<!--
    <section class="content-page pb-50 pt-50">
        <div class="auto-container ">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title text-left">
                        <div class="clearfix">
                            <div class="pull-left">
                                <h1><?php echo $TEXT['titre'] ?></h1>
								<?php echo $TEXT['code'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
    <section id="baner" style="background-image: url(images/ban-1.png);"></section>
    <section id="feature" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="texte">
                        <h1><?php echo $TEXT['titre'] ?></h1>
                        <?php echo $TEXT['code'] ?> 
                    </div>
                </div>
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
                        <div class="video-holder-box" id="box-image3" style="background-image:url(images/video-gallery.jpg);"> <!--  -->
                            <!-- <img src="images/terre.jpg" alt="Awesome Image">-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="service-style2-area style3">
        <div class="container">
            <div class="wow fadeInDown">
                <h2>Vendeur / Baileur <br>Retrouvez vos obligations : </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="single-service-style2">
                        <div class="img-holder">
                            <img src="images/int1.png" alt="Awesome Image">
                            <div class="static-content">
                                <div class="title">
                                    <h3><a href="<?php echo SITE_URL ?>/mesurer-surface-habitable-application-loi-boutin-location-i5.html">Loi Boutin</a></h3>
                                </div>
                                <div class="icon">
                                    <a href="<?php echo SITE_URL ?>/mesurer-surface-habitable-application-loi-boutin-location-i5.html"><span class="flaticon-plus"></span></a>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="icon">
                                        <span>
                                            <img src="images/int4.png" style="width: auto;" alt="Diagnostic immobilier Péronne 80200">
                                        </span>
                                    </div>
                                    <div class="text-holder">
                                        <div class="title">
                                            <h3><a href="<?php echo SITE_URL ?>/mesurer-surface-habitable-application-loi-boutin-location-i5.html">Loi Boutin</a></h3>
                                        </div>      
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="single-service-style2">
                        <div class="img-holder">
                            <img src="images/int2.png" alt="Awesome Image">
                            <div class="static-content">
                                <div class="title">
                                    <h3><a href="<?php echo SITE_URL ?>/superficie-loi-carrez-mentionner-documents-vente-i10.html">Loi Carrez</a></h3>
                                </div>
                                <div class="icon">
                                    <a href="<?php echo SITE_URL ?>/superficie-loi-carrez-mentionner-documents-vente-i10.html"><span class="flaticon-plus"></span></a>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="icon">
                                        <span>
                                            <img src="images/int4.png" style="width: auto;" alt="Etat des lieux Péronne 80200">
                                        </span>
                                    </div>
                                    <div class="text-holder">
                                        <div class="title">
                                            <h3><a href="<?php echo SITE_URL ?>/superficie-loi-carrez-mentionner-documents-vente-i10.html">Loi Carrez</a></h3>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="single-service-style2">
                        <div class="img-holder">
                            <img src="images/int3.png" alt="Awesome Image">
                            <div class="static-content">
                                <div class="title">
                                    <h3><a href="<?php echo SITE_URL ?>/securite-electrique-installations-interieures-electricite-anciennes-i7.html">Diagnostic éléctricité</a></h3>
                                </div>
                                <div class="icon">
                                    <a href="<?php echo SITE_URL ?>/securite-electrique-installations-interieures-electricite-anciennes-i7.html"><span class="flaticon-plus"></span></a>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="icon">
                                        <span>
                                            <img src="images/int5.png" alt="Amiante avant travaux Péronne 80200">
                                        </span>
                                    </div>
                                    <div class="text-holder">
                                        <div class="title">
                                            <h3><a href="<?php echo SITE_URL ?>/securite-electrique-installations-interieures-electricite-anciennes-i7.html">Diagnostic éléctricité</a></h3>
                                        </div>      
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
			<div class="row" style="display:none;">

                <?php
                $act  = 'SELECT * FROM actualites LIMIT 2';
                $res = query($act);
                while ($data = mysql_fetch_array($res)) {
                ?>
                <div class="card col-md-4 wow fadeInDown">
                    <?php echo $data["lien"];?>
                    <div class="card-block">
                        <h5 class="text-bold"><a href="<?php echo SITE_URL ?>/actualite-detail.php?id=<?php echo $data["actualitesid"];?>"><?php echo $data["titre"];?></a></h5>
                    </div>
                    <div class="card-block overflow-string">
                       <?php echo $data["contenu"] ?>
                    </div>
                </div>
                <?php }?>
            </div>
			
			
			
        </div>
    </section>
	
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
	
<?php include("bas.tpl.php"); ?>
	
	
