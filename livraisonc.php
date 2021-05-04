<?PHP
include "../config.php";
class livraisonc {
function afficherlivraison ()
	{
		try{
				$pdo=config::getConnexion();
				$query= $pdo ->prepare(
						'SELECT * FROM livraison'
				);
				$query->execute();
	 $result = $query->fetchAll();
		}
		catch(PDOException $e){
				$e->getMessage();
		}

		  foreach($result as $rows)
			{ 	echo "<tr><td>" . $rows['id_livraison']. "</td><td>".$rows['id_commande']."</td><td>" .$rows['id_livreur']."</td><td>" .$rows['adresse']
					."</td><td>" ."<a href=modifierlivraison.php?id=".$rows['id_livraison'].">MODIF</a>"
					."</td><td>"."<a href=supprimerlivraison.php?id=".$rows['id_livraison'].">DELETE</a>"."</td></tr>";

	}
	echo("</table>");

	}

	function ajouterlivraison($livraison){
		$sql="insert into livraison (id_commande,id_livreur,adresse) values (:id_commande,:id_livreur,:adresse)";
		$db = config::getConnexion();
	  $query=$db->prepare($sql);
		$query->execute([
        'id_commande'=>$livraison->getid_commande(),
        'id_livreur'=>$livraison->getid_livreur(),
        'adresse'=>$livraison->getadresse()
        
				]);




	}

	function afficherlivraisons(){
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerlivraison($id_livraison){
		$sql="DELETE FROM livraison where id_livraison= :id_livraison";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_livraison',$id_livraison);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}





	function modifierlivraison($livraison,$id){
		$sql="UPDATE livraison SET  id_commande=:id_commande,id_livreur=:id_livreur,adresse=:adresse WHERE id_livraison=:id";


		$db=config::getConnexion();
		$query=$db->prepare($sql);
		$query->execute([

			'id_commande'=>$livraison->getid_commande(),
			'id_livreur'=>$livraison->getid_livreur(),
			'adresse'=>$livraison->getadresse(),
										'id' => $id
								]);







	}




}