<?PHP
include "../core/ProduitCore.php";
isset($_GET['reference']);
$produit1C=new ProduitCore();
$listeProduits=$produit1C->rechercherListeProduitAvancer($_POST['reference'] );
//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>reference</td>
<td>nom_produit</td>
<td>description</td>
<td>prix</td>
<td>id_categorie</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeProduits as $row){
	?>
	<tr>
	<td><?PHP echo $row['reference']; ?></td>
	<td><?PHP echo $row['nom_produit']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><?PHP echo $row['id_categorie']; ?></td>
	
	
	
	
	
	<td><form method="POST" 
	action="supprimerProduit.php">
	<input type="submit" name="supprimer" 
	value="supprimer">
	<input type="hidden" value="<?PHP echo $row['reference']; ?>" name="reference">
	</form>
	</td>
	<td><a href="modifierProduit.php?reference=
	<?PHP echo $row['reference']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}

?>
</table>