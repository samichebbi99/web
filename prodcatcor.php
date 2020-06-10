<?PHP
include "config.php";
class ProdCatCore {
    
    function afficherProduits(){
        $sql="SElECT * From produit inner join categorie on produit.id_categorie=categorie.reference";
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