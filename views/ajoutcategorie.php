<?PHP
include '..\core\categorieCore.php';
include '..\entities\categorie.php';

if (isset($_POST['nom_categorie']))
{
$categorie1=new Categorie($_POST['nom_categorie']);

$categorie1C=new CategorieC();
$categorie1C->ajouterCategorie($categorie1);	
}else{
	echo "vérifier les champs";
}
?>