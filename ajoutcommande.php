<?PHP
include "../entities/commande.php";
include "../core/commandec.php";
$commande=null;
$commandeC=new commandec();

if ( isset($_POST['id_utilisateur']) and isset($_POST['date_expedition']) and isset($_POST['quantite_expedition']) and isset($_POST['prix_expedition']) )
{
$commande=new commande($_POST['id_utilisateur'],$_POST['date_expedition'],$_POST['quantite_expedition'],$_POST['prix_expedition']);


$commandeC->ajoutercommande($commande);
header('Location: ajoutcommande.php');

}
else{
	echo "vérifier les champs";
}
//*/

?>
<HTML>
<head>
</head>
<body>
<form method="POST" >
<table>


<tr>
<td>id_utilisateur</td>
<td><input type="text" name="id_utilisateur"></td>
</tr>
<tr>
<td>date_expedition</td>
<td><input type="date" name="date_expedition"></td>
</tr>
<tr>
<td>quantite_expedition</td>
<td><input type="text" name="quantite_expedition"></td>
</tr>
<tr>
<td>prix_expedition</td>
<td><input type="text" name="prix_expedition"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>
</table>
</form>
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
</HTMl>
