<?php 	include("configuration.php"); ?>
<?php include('tpl/head.tpl.php');?>
<?php include('tpl/valid.tpl.php');?>
<?php include("tpl/haut.tpl.php"); ?>
<section id="baner" style="background-image: url(images/ban-1.png);"></section>
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
						<div class="title">
							<h1><?php echo $data["titre"];?></h1>
						</div>
						<div class="inner-contant">
							<?php echo $data["contenu"];?>
						</div> 
					</div>   
				</div>
				 
			</div>
			
		</div>
	</section>
<?php }?>
<?php include("tpl/bas.tpl.php"); ?>
