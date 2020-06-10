<?PHP
include "categorie.php";
include "CategorieCore.php";

if (isset($_POST['reference']) and isset($_POST['nom_categorie'])){
$categorie1=new Categorie($_POST['reference'],
$_POST['nom_categorie']);
$categorie1C=new CategorieCore();
$categorie1C->ajouterCategorie($categorie1);
header('Location:afficherCategorie.php');

	
}else{
	echo "vérifier les champs";
}
//*/

?>