<?PHP
include 'C:\xampp\htdocs\prod\config.php';
class ProduitCore {
function afficherProduit ($produit){
		echo "reference: ".$produit->getreference()."<br>";
		echo "nom_produit: ".$produit->getnom_produit()."<br>";
		echo "description: ".$produit->getdescription()."<br>";
		echo "prix: ".$produit->getprix()."<br>";
		echo "id_categorie: ".$produit->getid_categorie()."<br>";}
function ajouterProduit($produit)
   { 
    $sql="insert into produit (reference,nom_produit,description,prix,id_categorie) values (:reference,:nom_produit,:description,:prix,:id_cat)";
    $db = config::getConnexion();
    try
    {
        $req=$db->prepare($sql);
                $reference=$produit->getreference();
        $nom_produit=$produit->getnom_produit();
        $description=$produit->getdescription();
        $prix=$produit->getprix();
        $cat=$produit->getid_categorie();
      
                $req->bindValue(':reference',$reference);
    $req->bindValue(':nom_produit',$nom_produit);
    $req->bindValue(':description',$description);
    $req->bindValue(':prix',$prix);
                $req->bindValue(':id_cat',$cat);

       
            $req->execute();
        }
        
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
}


     function afficherproduits()
  {
    $sql="SElECT * From produit ORDER BY prix";
    $db = config::getConnexion();
    try
      {
    $liste=$db->query($sql);
    return $liste;
      }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        } }
	function supprimerProduit($reference){
		$sql="DELETE FROM produit where reference=:reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierProduit($produit,$reference){
		$sql="UPDATE produit SET reference=:reference,nom_produit=:nom_produit,description=:description,prix=:prix,id_categorie=:id_categorie WHERE reference=:reference";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
        $reference=$produit->getreference();
        $nom_produit=$produit->getnom_produit();
        $description=$produit->getdescription();
        $prix=$produit->getprix();
        $id_categorie=$produit->getid_categorie();
		$datas = array(':reference'=>$refreence, ':reference'=>$refrence, ':nom_produit'=>$nom_produit,':description'=>$description,':prix'=>$prix,':id_categorie'=>$id_categorie);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':nom_produit',$nom_produit);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':id_categorie',$id_categorie);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererProduit($reference){
		$sql="SELECT * from produit where reference=$reference";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherListeProduit($reference){
		$sql="SELECT * from produit where reference=$reference";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function rechercherListeProduitAvancer($reference){
		$sql="SELECT * from produit where reference LIKE '".$reference."%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>