<?PHP
include "../entities/livraison.php";
include "../core/livraisonc.php";
$livraison=null;
$livraisonC=new livraisonc();

if ( isset($_POST['id_commande']) and isset($_POST['id_livreur']) and isset($_POST['adresse']) )
{
$livraison=new livraison($_POST['id_commande'],$_POST['id_livreur'],$_POST['adresse']);


$livraisonC->ajouterlivraison($livraison);
header('Location: ajoutlivraison.php');

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
<td>id_commande</td>
<td><input type="text" name="id_commande"></td>
</tr>
<tr>
<td>id_livreur</td>
<td><input type="date" name="id_livreur"></td>
</tr>
<tr>
<td>adresse</td>
<td><input type="text" name="adresse"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>
</table>
</form>
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
</HTMl>
