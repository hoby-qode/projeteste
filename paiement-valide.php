<?php
	include("configuration.php");
	$TITRE = 'paiement validé | '.NOM_APPLI;
?>
<?php include('tpl/head.tpl.php');?>
<meta name="robots" content="noindex, nofollow" />
<?php include("tpl/haut.tpl.php"); ?>

<table style="width:100%" id="tabGenerateur">
	<tr>
		<td>
			<?php include(APPLI_SRC."/paiement-valide.php"); ?>
		</td>
	</tr>
</table>

<?php include("tpl/bas.tpl.php"); ?>
