<?PHP
include "../core/livraisonc.php";


?>

<!DOCTYPE HTML>
<html>
<body>

<table border="1">
<tr>
<td>id_livraison</td>
<td>id_commande</td>
<td>id_livreur</td>
<td>adresse</td>
</tr>

<?php $livraison1c=new livraisonc();
		$livraison1c->afficherlivraison();
?>
