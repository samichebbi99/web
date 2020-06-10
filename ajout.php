<?PHP
include "produit.php";
include "ProduitCore.php";

if (isset($_POST['reference']) and isset($_POST['nom_produit']) and isset($_POST['description']) and isset($_POST['prix']) and isset($_POST['id_categorie'])){
$produit1=new produit($_POST['reference'],
$_POST['nom_produit'],$_POST['description'],
$_POST['prix'],$_POST['id_categorie']);
$produit1C=new ProduitCore();
$produit1C->ajouterProduit($produit1);
header('Location: afficherProduit.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>