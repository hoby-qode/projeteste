<?php include('head.tpl.php');
    include("haut.tpl.php");
    ?>
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
    
    <section id="recent-works">
        <div class="container">
            <div class="wow fadeInDown">
                <h2>
                    <span class="bold">Nos témoignages</span> les plus récents
                    <a class="pull-right" href="<?php echo SITE_URL ?>/livre-d-or.php">Consulter tous nos avis<i class="fa fa-long-arrow-right"></i></a>
                </h2>
            </div>
            <div class="row">
                <?php
                $sql  = 'SELECT * FROM livredor l, contact c  WHERE l.contactid=c.contactid ORDER BY l.livredorid LIMIT 3';
                $COMM = query($sql);
                while ($data = mysql_fetch_array($COMM)) {
                ?>
                <div class="card col-md-4 wow fadeInDown">
                    <div class="box-part text-center">
                        <i class="fa fa-quote-left fa-3x"  aria-hidden="true"></i>
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
                        <a href="<?php echo SITE_URL ?>/livre-d-or-detail.php?id=<?php echo $data["livredorid"];?>">Lire le témoignage<i class="fa fa-long-arrow-right"></i></a> 
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
	
	
