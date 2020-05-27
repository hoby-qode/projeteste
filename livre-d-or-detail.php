<?php include("configuration.php");?>
<?php include('tpl/head.tpl.php');?>

<?php include('tpl/valid.tpl.php');?>
<?php include("tpl/haut.tpl.php"); ?>


<section id="baner" style="background-image: url(images/ban-1.png);"></section>
<?php
    $sql  = 'SELECT c.societe, c.nom, c.date, l.contenu FROM contact c, livredor l WHERE c.contactid = l.contactid AND l.livredorid = '.$_GET['id'];
    $COMM = query($sql);
    while ($data = mysql_fetch_array($COMM)) {
    ?>
	<section class="blog-single-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
					<div class="blog-post">	
						<div class="title">
							<h4 style="font-size: 36px; line-height: 30px; font-weight: 600px;"><?php echo $data["societe"]. " " .$data["nom"] ; ?> <h4>							
							<p style="font-size: 18px; line-height: 30px;"> <?php echo date("d/m/Y à H:i", strtotime($data["date"])); ?></p>
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
