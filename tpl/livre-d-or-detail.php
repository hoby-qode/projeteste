<?php include("configuration.php");?>
<?php include('tpl/head.tpl.php');?>
	<style>
	.title h4{
		font-size: 36px;
		line-height: 30px;
		font-weight: 600;
	}
	</style>
<?php include('tpl/valid.tpl.php');?>
<?php include("tpl/haut.tpl.php"); ?>



<?php
   // $sql  = 'SELECT c.societe, c.nom, c.date, l.contenu FROM contact c, livredor l WHERE c.contactid = l.contactid AND l.livredorid = '.$_GET['id'];
	 $sql  = 'SELECT * FROM livredor WHERE livredorid = '.$_GET['id2'];
    $COMM = query($sql);
    while ($data = mysql_fetch_array($COMM)) {
    ?>
	<section class="blog-single-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
					<div class="blog-post">	
						<div class="title">
							<!-- <h4><?php echo $data["societe"]. " " .$data["nom"] ; ?> <h4>-->
							<!-- <h3><?php echo $data["titre"];?></h3>-->
							<p class="date"> <?php echo date("d/m/Y à H:i", strtotime($data["date"])); ?></p>
						</div>
						<div class="inner-contant">
							<?php echo $data["contenu"];?>
						</div> 
					</div>   
				</div>
				 
				<div class="col-xl-4 col-lg-5 col-md-9 col-sm-12 wow sary">
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
<?php }?>
<?php include("tpl/bas.tpl.php"); ?>
