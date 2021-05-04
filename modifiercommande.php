
<?PHP
include "../entities/commande.php";
include "../core/commandec.php";
$id = $_GET['id'];
	$commandec=new commandec();
	$pdo=config::getConnexion();
	$query= $pdo ->prepare("select * from commande where id_commande= '$id'");
	$query->execute();
	$result = $query->fetchAll();



	if (isset($_POST['modifier'])){
		$commandes=new commande($_POST['id_utilisateur'],$_POST['date_expedition'],$_POST['quantite_commande'],$_POST['prix_commande']);
		$commandec->modifiercommande($commandes,$id);

		header('Location: ajoutcommande.php');
	}
?>

<!DOCTYPE HTML>
<html>
<body>
	<?php foreach($result as $rows) { ?>
<form method="POST">
<table>
<caption>Modifier commandes</caption>
<tr>
<td>id_commande</td>
<td><input type="number" name="id_commande" value="<?PHP echo $rows['id_commande'] ?>"></td>
</tr>
<tr>
<td>id_utilisateur</td>
<td><input type="text" name="id_utilisateur" value="<?PHP echo $rows['id_utilisateur'] ?>"></td>
</tr>
<tr>
<td>date_expedition</td>
<td><input type="text" name="date_expedition" value="<?PHP echo $rows['date_expedition'] ?>"></td>
</tr>
<tr>
<td>quantite_commande</td>
<td><input type="number" name="quantite_commande" value="<?PHP echo $rows['quantite_commande'] ?>"></td>
</tr>
<tr>
<td>prix_commande</td>
<td><input type="text" name="prix_commande" value="<?PHP echo $rows['prix_commande'] ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>

</table>
</form>
<?php } ?>
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






</body>
</html>
