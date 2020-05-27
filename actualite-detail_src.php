<?php

	/*if(empty($_GET['id'])) header('location: actualites.php');

	

	//informations de l'actualité
	$objActu = new actualites();
	$tabWhere[0] = array("actualitesid", "=", $_GET['id']);
	$tabActu = $objActu->GetList($tabWhere);

	if(count($tabActu) < 1) header('location:'.SITE_URL.'/expertises-immobilieres-'.COM_PRINCIPALE.'.html');
	$actualite = $tabActu[0];
	$tabWhere = array();

	// evite que deux lien pointe sur cette page
	$myUrl = GenererLienV2('actualite',$actualite->actualitesId, $actualite->titre, PREFIXE_LIEN_V2);
	if($myUrl != $_SERVER["REQUEST_URI"]){
		header('Status: 301 Moved Permanently', false, 301);   
		header('Location: '.$myUrl);
		die;
	}
	
	$TITLE = $actualite->titre.' | '.NOM_APPLI;
	$KEYWORS = 'Diagnostics immobiliers '.COM_PRINCIPALE.' '.NOM_APPLI;
	$DESCRIPTION = '';
*/
	include("configuration.php");
?>

<?php include('tpl/head.tpl.php');?>
<?php include('tpl/valid.tpl.php');?>
<?php include("tpl/haut.tpl.php"); ?>
<?php
    $sql  = 'SELECT * FROM actualites WHERE actualitesid='.$_GET['id'];
    $COMM = query($sql);
    while ($data = mysql_fetch_array($COMM)) {
    ?>
    <section class="blog-single-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                <div class="blog-post">
                    <div class="single-blog-post wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1200ms">
                        <div class="img-holder">
                            <img src="images/actualite/blog-single-1.jpg" alt="Awesome Image">
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><?php echo $data["titre"];?></h3>
                            <?php echo $data["contenu"];?>
                        </div>
                        <div class="blog-single-quote-box">
                            <div class="quote-icon">
                                <img src="images/actualite/quote-icon.png" alt="Quote Icon">
                            </div>
                            <h2><i class="fa fa-quote-left" aria-hidden="true"></i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words. which don't look.<i class="fa fa-quote-right right" aria-hidden="true"></i></h2>
                        </div>
                        <div class="text">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        </div>
                        <div class="blog-single-img-box">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-image">
                                        <img src="images/actualite/blog-single-image-1.jpg" alt="Awesome Image">    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-image">
                                        <img src="images/actualite/blog-single-image-2.jpg" alt="Awesome Image">    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-text">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        </div>
                    </div>
                    <div class="social-share-box">
                        <h6>Share :</h6>
                        <ul class="social-links-style1">
                            <li>
                                <a href="#"><i class="fa fa-facebook fb" aria-hidden="true"></i></a> 
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus gplus" aria-hidden="true"></i></a> 
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter tw" aria-hidden="true"></i></a> 
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-skype skyp" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-rss rss" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>   
                </div>   
            </div>
            <!--Start sidebar Wrapper-->
            <div class="col-xl-4 col-lg-5 col-md-9 col-sm-12">
                <div class="sidebar-wrapper">
                    <!--Start sidebar categories Box-->
                    <div class="sidebar-categories-box wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1200ms">
                        <div class="categories-title">
                            <h3>All Categories</h3>
                        </div>
                        <ul class="categories clearfix">
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">Javascript</a></li>
                            <li><a href="#">PSD Design</a></li>
                            <li><a href="#">CMS</a></li>
                            <li><a href="#">e-Commerce</a></li>
                        </ul>
                        <div class="more-categories">
                            <a href="#"><span class="flaticon-plus"></span>More Categories</a>
                        </div>
                    </div>
                    <!--End sidebar categories Box-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
                        <div class="popular-tag-box">
                            <div class="title">
                                <h3>Popular Tag</h3>
                            </div>
                            <ul class="popular-tag">
                                <li><a href="#">Isabella</a></li>
                                <li><a href="#">Samantha</a></li>
                                <li><a href="#">Emily</a></li>
                                <li><a href="#">Isabella</a></li>
                                <li><a href="#">Grace</a></li>
                                <li><a href="#">Alexa</a></li>
                                <li><a href="#">Madison</a></li>
                                <li><a href="#">Peyton</a></li>
                                <li><a href="#">Knedy</a></li>
                                <li><a href="#">Alexa</a></li>
                                <li><a href="#">Peyton</a></li>
                            </ul>     
                        </div>
                        <div class="project-box">
                            <div class="title">
                                <h3>Project</h3>
                            </div>
                            <ul class="project-lists">
                                <li><a href="#">Deily Projects <span>50</span></a></li>
                                <li><a href="#">County Projects <span>60</span></a></li>
                                <li><a href="#">Foren Projects <span>70</span></a></li>
                                <li><a href="#">High <span>80</span></a></li>
                                <li><a href="#">Top Projects <span>90</span></a></li>
                            </ul>     
                        </div>
                        <div class="ratting-box">
                            <div class="title">
                                <h3>Ratting</h3>
                            </div>
                            <ul class="ratting-lists">
                                <li><a href="#">Show All <span>50</span></a></li>
                                <li><a href="#">1 star and higher <span>60</span></a></li>
                                <li><a href="#">2 stars and higher <span>70</span></a></li>
                                <li><a href="#">3 stars and higher <span>80</span></a></li>
                                <li><a href="#">4 stars and higher <span>90</span></a></li>
                            </ul>     
                        </div>
                    </div>
                    <!--End single sidebar-->
                    <div class="sidebar-bottom-box wow fadeInUp animated" data-wow-delay="0.5s" data-wow-duration="1200ms">
                        <div class="img-holder">
                            <img src="images/actualite/sidebar-img-bg.jpg" alt="Awesome Image">
                            <div class="overlay-style-one bg1"></div>
                            <div class="overlay">
                                <a href="#"><span class="flaticon-plus"></span></a>
                            </div>
                        </div>    
                    </div>
                  
                </div>    
            </div>
            <!--End Sidebar Wrapper--> 
        </div>
        
    </div>
</section>
<?php }?>
<?php include("tpl/bas.tpl.php"); ?>
