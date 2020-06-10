<?PHP
include "core/ProduitCore.php";
$produitC=new ProduitCore();
if (isset($_POST["reference"])){
	$produitC->supprimerProduit($_POST["reference"]);
	header('Location: afficherProduit.php');
}

?>