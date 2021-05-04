<?PHP
include "../core/commandec.php";
$commandesC=new commandec();

if (isset($_GET["id"])){
	$id = $_GET['id'];
	$commandesC->supprimercommande($id);
	header('Location: ajoutcommande.php');
}

?>






?>
