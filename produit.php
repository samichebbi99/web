<?php
class produit
{
	private $reference;
	private $nom_produit;
    private $description;
	private $prix;
	private $id_categorie;




	function __construct($reference,$nom_produit,$description,$prix,$id_categorie)
	{
		$this->reference=$reference;
		$this->nom_produit=$nom_produit;
		$this->description=$description;
		$this->prix=$prix;
		$this->id_categorie=$id_categorie;
	
		
	}
function getreference(){
	return $this->reference;
}

function getnom_produit()
{
	return $this->nom_produit;
}

function getdescription()
{
	return $this->description;
}
function getprix(){
	return $this->prix;
}
function getid_categorie(){
	return $this->id_categorie;
}



function setref_produit($reference)
{
	 $this->reference=$reference;
}

function setnom_produit($nom_produit)
{
	 $this->nom_categorie=$nom_categorie;
}


function setdescription($description)
{
	 $this->description=$description;
}
function setprix($prix)
{
	 $this->prix=$prix;
}
function setid_categorie($id_categorie)
{
	 $this->id_categorie=$id_categorie;
}


}
?>



