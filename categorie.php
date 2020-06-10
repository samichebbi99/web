<?PHP
class Categorie{
	private $reference;
	private $nom_categorie;
	function __construct($reference,$nom_categorie){
		$this->reference=$reference;
		$this->nom_categorie=$nom_categorie;
	}
	
	function getref(){
		return $this->reference;
	}
	function getNomcat(){
		return $this->nom_categorie;
	}

	function setref($reference){
		$this->reference=$reference;
	}
	function setNomcat($nom_categorie){
		$this->nom_categorie;
	}
	
}

?>