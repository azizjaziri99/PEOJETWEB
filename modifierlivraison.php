
<?PHP
include "../entities/livraison.php";
include "../core/livraisonc.php";
$id = $_GET['id'];
	$livraisonc=new livraisonc();
	$pdo=config::getConnexion();
	$query= $pdo ->prepare("select * from livraison where id_livraison= '$id'");
	$query->execute();
	$result = $query->fetchAll();



	if (isset($_POST['modifier'])){
		$livraisons=new livraison($_POST['id_commande'],$_POST['id_livreur'],$_POST['adresse']);
		$livraisonc->modifierlivraison($livraisons,$id);

		header('Location: ajoutlivraison.php');
	}
?>

<!DOCTYPE HTML>
<html>
<body>
	<?php foreach($result as $rows) { ?>
<form method="POST">
<table>
<caption>Modifier livraisons</caption>
<tr>
<td>id_livraison</td>
<td><input type="number" name="id_livraison" value="<?PHP echo $rows['id_livraison'] ?>"></td>
</tr>
<tr>
<td>id_commande</td>
<td><input type="text" name="id_commande" value="<?PHP echo $rows['id_commande'] ?>"></td>
</tr>
<tr>
<td>id_livreur</td>
<td><input type="text" name="id_livreur" value="<?PHP echo $rows['id_livreur'] ?>"></td>
</tr>
<tr>
<td>adresse</td>
<td><input type="number" name="adresse" value="<?PHP echo $rows['adresse'] ?>"></td>
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
<td>id_livraison</td>
<td>id_commande</td>
<td>id_livreur</td>
<td>adresse</td>
</tr>

<?php $livraison1c=new livraisonc();
		$livraison1c->afficherlivraison();
?>






</body>
</html>
