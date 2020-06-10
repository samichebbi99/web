<?PHP
include "../core/ProduitCore.php";
$produit1C=new ProduitCore();
$listeProduits=$produit1C->afficherProduits();
//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
	                            <th>ref</th>
                                <th>product name</th>
                                <th>description</th>
                                <th>price</th>
                                <th>id cat</th>
                                <th>image</th>

<?PHP
foreach($listeProduits as $row){

                       echo '
                                <tr>
                                <td><span class="">'.$row["reference"].'</span></td>
                                <td><span class="">'.$row["nom_produit"].'</span></td>
                                <td><span class="">'.$row["prix"].'</span></td>
                                <td><span class="">'.$row["description"].'</span></td>
                                <td><span class="">'.$row["id_categorie"].'</span></td>

                                <td><img src="'.$row['image'].'"> </img></td>
                                </tr>
                            ';}?>
                        </table>
	
	
	
	


