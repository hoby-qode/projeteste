<?php
	include("configuration.php");
	include(APPLI_SRC."/inc/phpmail.class.php");

	//Bon de reduction
	$obReduc = new reduction();
	$tabReduc = array();
	$tabWhere[0] = array("reductionId", "=", 1);
	$tabReduc = $obReduc->GetList(array());
	$reduction = $tabReduc[0];
	$tabWhere = array();

	$TITLE = 'Vos diagnostics immobilier sur '.COM_PRINCIPALE.' à prix réduit | '.NOM_APPLI;
	$KEYWORS = 'diagnostics pas cher | '.NOM_APPLI;
	$DESCRIPTION = 'Bon de rédution sur vos diagnostics immobiliers avec '.NOM_APPLI;
?>

<?php include('tpl/head.tpl.php');?>
<?php include('tpl/valid.tpl.php');?>
<?php include("tpl/haut.tpl.php"); ?>

<h1>Chèque de réduction</h1>
<table style="width:100%" id="tabGenerateur">
	<tr>
		<td>
		<?php
			if(is_file("images/".$reduction->pdf)) {
				echo "<br /><div align='center'><a href='download.php?file=".encode($reduction->pdf)."' title='Télécharger notre chèque de réduction' ><img src='imgmutu/download_cheque.jpg' alt='Télécharger notre bon de réduction' style='border:1px solid #2d2d2d''></a></div>";
			}
		?>
		</td>
	</tr>
</table>

<?php include("tpl/bas.tpl.php"); ?>
