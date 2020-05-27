
<section class="relative" >
    <div class="ass-box text-center" style="margin-top:150px; ">
        <div style="color: #3f3f3f;font-size: 23px;margin-bottom: 15px;font-weight: 600;">
            Certification <span style="color:#73b12c"> &amp; </span> assurance
        </div>
        <div>
            <img src="images/ass-1.png" alt="Diagnostic immobilier Amiens 80000">
            <img class="logo-assurance" src="images/logo-ass.png"  style="width: 100px;"  alt="DPE Amiens 80000">
        </div>
    </div>
</section>

    <section id="bottom">
        <div class="container wow fadeInDown fin" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="widget">
                        <h3>Contactez-nous</h3>
						<ul>
                            <li><p>2020 &copy; FL EXPERTISE<br>15 rue de Péronne<br>62450 baupaume</p></li>
                            <li><p>Tel. 06 42 43 75 70<br>Mail. contact@fl-expertise.com</p></li>
                            <li>
								<p>RCS. 880 740 626<br>
								<a href="<?php echo SITE_URL ?>/mentions-legales.html">Mentions légales</a><br>
									Politiques de confidentialité
								</p>
							</li> 
						</ul>
                    </div>    
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="widget">
                        <h3>Nos services</h3>
                        <ul>
                            <li><a href="<?php echo SITE_URL ?>/actualites.php">. Actualité</a></li>
                            <li><a href="<?php echo SITE_URL ?>/temoignages.php">. Témoignages</a></li>
                            <li><a href="<?php echo SITE_URL ?>/secteur-intervention.php">. Secteur d'intervention</a></li>
                            <li><a href="<?php echo SITE_URL ?>/paiement.php">. Paiement en ligne</a></li>
                            <li><a href="<?php echo SITE_URL ?>/demande-devis.php">. Demande de devis</a></li>
                            <li><a href="<?php echo SITE_URL ?>/contact.php">. Contact</a></li>                          
                        </ul>
                    </div>    
                </div>

                <div class="col-md-5 col-sm-12">
                    <div class="diag-list">
					<h3>Diagnostic immobilier<span> autour de baupaume</span></h3>
                    <?php 
                        $sql  = 'SELECT * FROM communes c, urls u, activites a WHERE a.activitesid = u.aid AND c.communesid = u.cid';
                        $COMM = query($sql);
                        while ($row = mysql_fetch_array($COMM)) {
                            echo '<a href="'.SITE_URL.'/'.$row["url"].'">'.ucfirst($row["libelle"]).' '.ucfirst($row["commune"]).'</a>, '; 
                        }
                    ?>
					</div>
                </div>
				
            </div>
        </div> 
		<div class="footer-bottom">
        <div class="container">
            <div class="outer-box">
                <div class="copyright-text">
                    <p>Création web : <a href="https://www.arobiz.com" target="_blank">www.arobiz.com <img src="images/arobiz.png" style="margin-top: -7px;margin-left: 15px;" alt="Etat des lieux Amiens 80000"></a></p></div>  
            </div>    
        </div>    
    </div>
    
    </section>
	<button class="scroll-top scroll-to-target" data-target="html">
        <span class="icon-angle"></span>
    </button>
    <script src="js/jquery.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/jquery.bootstrap-touchspin.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.enllax.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/map-script.js"></script>
    <script src="js/nouislider.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/lazyload.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/index.js"></script>
    <!--
    <script src="js/jquery.js"></script>
	<script src="js/aos.js"></script>
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/isotope.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script> 	
	<script src="js/jquery.bxslider.min.js"></script> 
	<script src="js/nouislider.js"></script>  
    <script src="js/wow.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/slick.js"></script> 
	<script src="js/lazyload.js"></script>
    <script src="js/main.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/custom.js"></script>
    -->
    <script>
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches
        $(".next").click(function(){
            if(animating) return false;
            animating = true;
    
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
    
            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
            //show the next fieldset
            next_fs.show(); 
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
            next_fs.css({'left': left, 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".previous").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".submit").click(function(){
    return false;
})
    </script>
  
<?php include("ajax_liencontenu_sogexpert.js.php"); ?>
</body>
</html>
