<?PHP
include "inc/categorieC.php";
$categorieC=new categorieC();
if (isset($_POST["reference"])){
	$categorieC->supprimercategorie($_POST["reference"]);
	header('Location: categories.php');
}

?>