<?PHP

include "../core/CategorieCore.php";
include "../entities/categorie.php";?>

<form method="POST" action="ajoutProduit.php">
<label data-error="wrong" data-success="right">Name</label>
<input type="text" name="nom_produit"  placeholder="">
<label data-error="wrong" data-success="right" >Description</label>
<input type="text"  name="description"  placeholder="">
<label data-error="wrong" data-success="right" >Price</label>
<input type="number"  price="prix" name="prix"  placeholder="">
<label data-error="wrong" data-success="right" >Image</label>
<input type="file" price="prix" name="image" placeholder="">
<label data-error="wrong" data-success="right" >Categorie</label>
                                                <select name="catId" >
                                              <?php
                                              $cat=new categorieC();
                                              $list2=$cat->affichercategories();
                                              foreach($list2 as $rw)
                                                echo'
                                              <option value='.$rw['reference'].'>'.$rw['nom_categorie'].'</option>';
                                              ?>
                                            </select>	


<input type="submit" value="AJOUTER">
                                    
</form>
</body>
</HTMl>

    








