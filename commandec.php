<?PHP
include "../config.php";
class commandec {
function affichercommande ()
	{
		try{
				$pdo=config::getConnexion();
				$query= $pdo ->prepare(
						'SELECT * FROM commande'
				);
				$query->execute();
	 $result = $query->fetchAll();
		}
		catch(PDOException $e){
				$e->getMessage();
		}

		  foreach($result as $rows)
			{ 	echo "<tr><td>" . $rows['id_commande']. "</td><td>".$rows['id_utilisateur']."</td><td>" .$rows['date_expedition']."</td><td>" .$rows['quantite_commande']."</td><td>" .$rows['prix_commande']
					."</td><td>" ."<a href=modifiercommande.php?id=".$rows['id_commande'].">MODIF</a>"
					."</td><td>"."<a href=supprimercommande.php?id=".$rows['id_commande'].">DELETE</a>"."</td></tr>";

	}
	echo("</table>");

	}

	function ajoutercommande($commande){
		$sql="insert into commande (id_utilisateur,date_expedition,quantite_commande,prix_commande) values (:id_utilisateur,:date_expedition,:quantite_commande,:prix_commande)";
		$db = config::getConnexion();
	  $query=$db->prepare($sql);
		$query->execute([
        'id_utilisateur'=>$commande->getid_utilisateur(),
        'date_expedition'=>$commande->getdate_expedition(),
        'quantite_commande'=>$commande->getquantite_commande(),
        'prix_commande'=>$commande->getprix_commande()
				]);




	}

	function affichercommandes(){
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimercommande($id_commande){
		$sql="DELETE FROM commande where id_commande= :id_commande";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_commande',$id_commande);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}





	function modifiercommande($commande,$id){
		$sql="UPDATE commande SET  id_utilisateur=:id_utilisateur,date_expedition=:date_expedition,quantite_commande=:quantite_commande,prix_commande=:prix_commande WHERE id_commande=:id";


		$db=config::getConnexion();
		$query=$db->prepare($sql);
		$query->execute([

			'id_utilisateur'=>$commande->getid_utilisateur(),
			'date_expedition'=>$commande->getdate_expedition(),
			'quantite_commande'=>$commande->getquantite_commande(),
			'prix_commande'=>$commande->getprix_commande(),
										'id' => $id
								]);







	}




	function recuperercommande($id_commande){
		$sql="SELECT * from commande where id_commande=$id_commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListecommandes($id_utilisateur){
		$sql="SELECT * from commande where id_utilisateur=$id_utilisateur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>
