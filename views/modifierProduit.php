<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/produit.php";
include "../core/ProduitCore.php";
if (isset($_GET['reference'])){
	$produitC=new ProduitCore();
    $result=$produitC->recupererProduit($_GET['reference']);
	foreach($result as $row){
		$reference=$row['reference'];
		$nom_produit=$row['nom_produit'];
		$description=$row['description'];
		$prix=$row['prix'];
		$id_categorie=$row['id_categorie'];
?>
<form method="POST">
<table>
<caption>Modifier Produit</caption>
<tr>
<td>reference</td>
<td><input type="number" name="reference" value="<?PHP echo $reference ?>"></td>
</tr>
<tr>
<td>nom_produit</td>
<td><input type="text" name="nom_produit" value="<?PHP echo $nom_produit ?>"></td>
</tr>
<tr>
<td>description</td>
<td><input type="text" name="description" value="<?PHP echo $description ?>"></td>
</tr>
<tr>
<td>prix</td>
<td><input type="number" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td>id_catergorie</td>
<td><input type="number" name="id_categorie" value="<?PHP echo $id_categorie ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="reference_ini" value="<?PHP echo $_GET['reference'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new produit($_POST['reference'],$_POST['nom_produit'],$_POST['description'],$_POST['prix'],$_POST['id_categorie']);
	$produitC->modifierProduit($produit,$_POST['reference_ini']);
	echo $_POST['reference_ini'];
	header('Location: afficherProduit.php');
}
?>
</body>
</HTMl>