<?php
	include("configuration.php");

	// Numero de page (1 par defaut)
	if( isset($_GET['page']) && is_numeric($_GET['page']) ) $page = $_GET['page'];
	else $page = 1;

	// Nombre d'info par page
	$pagination = 5;
	
	$limit_start = ($page - 1) * $pagination;

	//Liste de toutes les actualités
	$objActu = new actualites();
	$nbActu = 0;
	$tabActu = $objActu->GetList($tabWhere, "date", false, "$limit_start, $pagination");
	$totalActu = $objActu->GetList($tabWhere, "date", false);
	$nbActu = count($tabActu);
	$tabWhere = array();

	$nb_pages = ceil(count($totalActu) / $pagination);

	$sql  = 'SELECT * FROM communes WHERE communesid = '.($page%20+1).' LIMIT 1';
	$COMM = queryRow($sql);
	
	$commune = empty($COMM['commune'])?COM_PRINCIPALE:$COMM['commune'];

	$TITLE = 'Actualités '.$commune.' | '.NOM_APPLI;
	$KEYWORDS = 'Actualités '.$commune.' | '.NOM_APPLI;
	$DESCRIPTION = 'Les actualités '.NOM_APPLI.' sur les diagnostics immobiliers de '.$commune;

?>
<?php include('tpl/head.tpl.php');?>
<?php include('tpl/valid.tpl.php');?>
<link rel="alternate" href="rss.php" type="application/rss+xml" title="Actualités" />
<?php include("tpl/haut.tpl.php"); ?>
<!--
    <section class="content-page pb-50 pt-50">
        <div class="auto-container ">
            <div class="row">
                <div class="col-12">
                	<div class="sec-title" >	
						<h1 class="h1">Actualités </h1>
                	</div>
					<div id="a_messages">
						<?php
							if($nbActu < 1) echo "<p class='info'>Aucune actualité sur le diagnostic immobilier sur ".COM_PRINCIPALE."</p>";
							else{
								if($nbActu > 1) $s="s";

								foreach($tabActu as $cle=>$actualite) { ?>
									<div class="blocmessage">
										<?php
											preg_match( '#<img .* src="(.*)".*>#isU', $actualite->contenu, $matches );
											if($matches[1]){
												?>
													<div style="float:left;"><img src="<?php echo $matches[1];?>" style="max-height:130px; margin-right:1rem;" alt="<?php echo $actualite->titre?>" /></div>
												<?php
											}
										?>
										<h3 class="auteur"><a href="<?php echo GenererLienV2('actualite',$actualite->actualitesId, $actualite->titre, PREFIXE_LIEN_V2); ?>"><?php echo $actualite->titre?></a></h3>
										<p class="message"><?php echo TronquerTexte(strip_tags($actualite->contenu), 300); ?></p>
										<br style="clear:both;"/>
									</div>
								<?php
								}
							}
						?>
					</div>

					<?php echo '<div class="pagination">' . pagination($page, $nb_pages, substr(PREFIXE_LIEN_V2, 1) .COM_PRINCIPALE."-%d.html") . '</div>'; ?>
                </div>
            </div>
        </div>
    </section>
 -->
 <section id="baner" style="background-image: url(images/ban-1.png);"></section>
 <section class="blog-pagev2-area">
    <div class="container">
        <div class="row">
            <?php
                    $sql  = 'SELECT * FROM actualites';
                        $COMM = query($sql);
                        while ($data = mysql_fetch_array($COMM)) {
                    ?>
            <div class="col-md-4 col-sm-12">
                <div class="blog-post">
                    <div class="single-blog-post-style3 withbdr wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
                        <div class="quote-box">
                            <div class="icon">
                                <span class="flaticon-quotation-marks"></span>
                            </div>
                        </div>    
                        <div class="text-holder">
                            <ul class="meta-info">
                                <li><a href="<?php echo SITE_URL ?>/actualite-detail.php?id=<?php echo $data["actualitesid"];?>"><?php echo date("d/m/Y à H:i", strtotime($data["date"])); ?></a></li>
                            </ul>
                            <h3 class="blog-title"><a href="blog-single.html"><?php echo $data["titre"];?></a></h3>
                            <!--h4>In : Builder Construction</h4-->
							<?php echo TronquerTexte(strip_tags($data["contenu"]), 300); ?>
                            <p>...</p>
                            <div class="button-box">
                                <div class="readmore">
                                    <a class="btn-one" href="<?php echo SITE_URL ?>/actualite-detail.php?id=<?php echo $data["actualitesid"];?>">Lire plus<span class="flaticon-next"></span></a>    
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>   
            </div>
            <?php }?>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <!--Styled Pagination-->
                <ul class="styled-pagination blog_pagination clearfix text-left">
                    <li><a href="#">1</a></li>
                    <li><a href="#" class="active">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
                </ul>                
                <!--End Styled Pagination-->
            </div>
        </div>
        
    </div>
</section>
<?php include("tpl/bas.tpl.php"); ?>

	<script>
		let im = document.getElementsByClassName('image-detail');
			for(var i = 0 , len =  im.length ; i < len; i++ ){
				im[i].style.display = "none";
			}
					
	</script>