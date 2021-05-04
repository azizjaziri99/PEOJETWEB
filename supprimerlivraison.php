<?PHP
include "../core/livraisonc.php";
$livraisonsC=new livraisonc();

if (isset($_GET["id"])){
	$id = $_GET['id'];
	$livraisonsC->supprimerlivraison($id);
	header('Location: ajoutlivraison.php');
}

?>






?>
