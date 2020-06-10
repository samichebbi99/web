<?PHP
include "CategorieCore.php";
include "ProduitCore.php";
$categorieC=new CategorieCore();
$produitC=new ProduitCore();


if (isset($_POST["reference"])){
		$produitC->supprimerProduit1($_POST["reference"]);
	$categorieC->supprimerCategorie($_POST["reference"]);
	header('Location: afficherCategorie.php');
}

?>