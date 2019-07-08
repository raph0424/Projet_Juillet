<?php 
require_once("Modèle/modele.php");
class Controleur
{
    private $unModele;
    public function __construct($serveur,$bdd,$user,$mdp)
    {
        //instanciation de la class modele
        $this->unModele = new Modele($serveur,$bdd,$user,$mdp);
    }
    public function verifConnexion($login, $mdp)
    {
        // on peu controler les donnees 
        return $this->unModele->verifConnexion($login, $mdp);
    }
    public function selectUtilisateur()
    {
        $resultats = $this->unModele->selectUtilisateur();
        return $resultats;
    }
    public function insertUtilisateur($tab)
    {
        $this->unModele->insertUtilisateur($tab);
    }
    public function deleteUtilisateur($id_user)
    {
        // on peu controler l'id produit
        $this->unModele->deleteUtilisateur($id_user);
    }
    public function insert($table, $tab) {
        $this->unModele->insert($table, $tab);
      }
      public function delete($table, $tab) {
        $this->unModele->delete($table, $tab);
      }
      public function update($table, $tab) {
        $this->unModele->update($table, $tab);
      }

}
?>