<?php include('head.tpl.php');?>
<?php include("haut.tpl.php"); ?>

    <section class="content-page pb-50 pt-50">
        <div class="auto-container ">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title text-left">
                        <div class="clearfix">
                            <div class="pull-left">
                                <h1><?php echo $TEXT['titre'] ?></h1>
								<?php echo $TEXT['code'] ?>
								<?php if($COMM){?>
									<h2 class="commune">Diagnostic immobilier <?php echo $COMM['commune'] ?></h2>
									<?php echo $COMM['description'] ?>
								<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
			
<?php include("bas.tpl.php"); ?>
