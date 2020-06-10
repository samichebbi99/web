<?PHP
include 'inc/categorie.php';
include_once "inc/categorieC.php";
if(  isset($_POST['nom_categorie'])  and isset($_POST['ref']) ) 
{
   echo "here";

	$categorie1=new Categorie($_POST['nom_categorie']);
	$categorie1C=new CategorieC();
	$categorie1C->modifierCategorie($categorie1,$_POST['ref']);

   header('Location: categories.php');

	
}
