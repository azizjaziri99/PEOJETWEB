<?PHP
include "../core/commandec.php";


?>

<!DOCTYPE HTML>
<html>
<body>

<table border="1">
<tr>
<td>id_commande</td>
<td>id_utilisateur</td>
<td>date_expedition</td>
<td>quantite_commande</td>
<td>prix_commande</td>
</tr>

<?php $commande1c=new commandec();
		$commande1c->afficherCommande();
?>
