<?PHP
class livraison{
	private $id_livraison;
	private $id_commande;
	private $id_livreur;
	private $adresse;
	function __construct($id_commande,$id_livreur,$adresse){
	
		$this->id_commande=$id_commande;
		$this->id_livreur=$id_livreur;
		$this->adresse=$adresse;
	}

	function getid_livraison(){
		return $this->id_livraison;
	}
	function getid_commande(){
		return $this->id_commande;
	}
	function getid_livreur(){
		return $this->id_livreur;
	}
	function getadresse(){
		return $this->adresse;
	}
	



	function setid_commande($id_commande){
		$this->id_commande=$id_commande;
	}
	function setpreid_commande($preid_commande){
		$this->preid_commande=$preid_commande;
	}
	function setid_livreur($id_livreur){
		$this->id_livreur=$id_livreur;
	}
	function setadresse($adresse){
		$this->adresse=$adresse;
	}
	


}

?>
