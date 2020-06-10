<?PHP
include 'C:\xampp\htdocs\prod\config.php';
class CategorieC 
{
   	function ajouterCategorie($categorie)
   	{
		$sql="insert into categorie (reference,nom_categorie) values (:reference,:nom_categorie)";
		$db = config::getConnexion();
		try
		{
        $req=$db->prepare($sql);
        $reference=$categorie->getref();
        $nom_categorie=$categorie->getnom_categorie();
        $req->bindValue(':reference',$reference);
		$req->bindValue(':nom_categorie',$nom_categorie);
        $req->execute();
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

    }    
	
	 function affichercategories()
	{
		
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try
		{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	
	}



function modifiercategorie($categorie,$reference)
{
		$sql="UPDATE categorie SET nom_categorie=:nom_categorie WHERE reference=:reference";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
          try
        {		
        $req=$db->prepare($sql);
		$ref=$categorie->getref();
        $nomC=$categorie->getnom_categorie();
	
		$req->bindValue(':reference',$reference);
		$req->bindValue(':nom_categorie',$nomC);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e)
        {
          echo " Erreur ! ".$e->getMessage();
        }
		
}



	function supprimercategorie($reference)
  {
		$sql="DELETE FROM categorie where reference= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}