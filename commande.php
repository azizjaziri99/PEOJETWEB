<?PHP
class commande{
	private $id_commande;
	private $id_utilisateur;
	private $date_expedition;
	private $quantite_commande;
	private $prix_commande;
	function __construct($id_utilisateur,$date_expedition,$quantite_commande,$prix_commande){
	
		$this->id_utilisateur=$id_utilisateur;
		$this->date_expedition=$date_expedition;
		$this->quantite_commande=$quantite_commande;
		$this->prix_commande=$prix_commande;
	}

	function getid_commande(){
		return $this->id_commande;
	}
	function getid_utilisateur(){
		return $this->id_utilisateur;
	}
	function getdate_expedition(){
		return $this->date_expedition;
	}
	function getquantite_commande(){
		return $this->quantite_commande;
	}
	function getprix_commande(){
		return $this->prix_commande;
	}



	function setid_utilisateur($id_utilisateur){
		$this->id_utilisateur=$id_utilisateur;
	}
	function setpreid_utilisateur($preid_utilisateur){
		$this->preid_utilisateur=$preid_utilisateur;
	}
	function setdate_expedition($date_expedition){
		$this->date_expedition=$date_expedition;
	}
	function setquantite_commande($quantite_commande){
		$this->quantite_commande=$quantite_commande;
	}
	function setprix_commande($prix_commande){
		 $this->prix_commande=$prix_commande;
	}


}

?>
