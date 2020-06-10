<?PHP
include "config1.php";

class CategorieCore {

    function ajouterCategorie($categorie){
        $sql="insert into categorie (reference,nom_categorie) values (:reference, :nom_categorie)";
        $db = config1::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $reference=$categorie->getref();
        $nom_categorie=$categorie->getNomcat();
        $req->bindValue(':reference',$reference);
        $req->bindValue(':nom_categorie',$nom_categorie);

        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    function afficherCategorie(){
        $sql="SElECT * From categorie";
        $db = config1::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    
    function supprimerCategorie($reference){
        $sql="DELETE FROM categorie where reference=:reference";
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

    function modifierCategorie($categorie,$reference){
        $sql="UPDATE categorie SET reference=:reference,nom_categorie=:nom_categorie WHERE reference=:reference";
        
        $db = config1::getConnexion();
try{        
        $req=$db->prepare($sql);
        $reference=$categorie->getref();
        $nom_categorie=$categorie->getNomcat();
        $datas = array(':reference'=>$reference, ':reference'=>$reference, ':nom_categorie'=>$nom_categorie);
        $req->bindValue(':reference',$reference);
        $req->bindValue(':reference',$reference);
        $req->bindValue(':nom_categorie',$nom_categorie);
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
        function recupererCategorie($reference){
        $sql="SELECT * from categorie WHERE reference=$reference";
        $db = config1::getConnexion();
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