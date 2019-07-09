<?php 
require_once("../modele/leModele.php");
class leControleur
{
    private $unModele;
    public function __construct($server,$bdd,$user,$mdp)
    {
        //instanciation de la class modele
        $this->unModele = new leModele($server,$bdd,$user,$mdp);
    }

    public function verifCon($login, $mdp)
    {
        // on peu controler les donnees 
        return $this->unModele->verifCon($login,$mdp);
    }
    public function selectMatiere()
    {
        return $this->unModele->selectMatiere();
    }
    public function selectMoyTransport()
    {
        return $this->unModele->selectMoyTransport();
    }
    public function insertEmprunter($table, $id, $envoi)
    {
        return $this->unModele->insertEmprunter($table, $id, $envoi);
    }
    public function selectretard()
    {
        return $this->unModele->selectretard();
    }
    public function selectemprunter()
    {
        return $this->unModele->selectemprunter();
    }
    public function selectNote($id_produit)
    {
        return $this->unModele->selectNote($id_produit);
    }
     public function insertRetard($tab)
    {
        return $this->unModele->insertRetard($tab);
    }
     public function selectEtudiant()
    {
        return $this->unModele->selectEtudiant();
    }
    public function selectEtudiantt()
    {
        return $this->unModele->selectEtudiantt();
    }
    public function selectClasse()
    {
        return $this->unModele->selectClasse();
    }
    public function selectSlam()
    {
        return $this->unModele->selectSlam();
    }
    public function selectSisr()
    {
        return $this->unModele->selectSisr();
    }
    public function selectInscrire()
    {
        return $this->unModele->selectInscrire();
    }
    public function selectTicket()
    {
        return $this->unModele->selectTicket();
    }
    public function selectTicketSup($id_partenaire)
    {
        return $this->unModele->selectTicketSup($id_partenaire);
    }
    public function selectProduit()
    {
        return $this->unModele->selectProduit();
    }
    public function selectPromos()
    {
        return $this->unModele->selectPromos();
    }
    public function selectPartenaire()
    {
        return $this->unModele->selectPartenaire();
    }

    public function insert($table, $tab)
      {
        $this->unModele->insert($table, $tab);
      }
      public function delete($table, $tab)
      {
        $this->unModele->delete($table, $tab);
      }
      public function update($table, $tab)
      {
        $this->unModele->update($table, $tab);
      }
      public function insertNote($tab)
      {
        $this->unModele->insertNote($tab);
      }
      public function updateNote($tab,$id_note)
      {
        $this->unModele->updateNote($tab,$id_note);
      }
      public function selectAttribut()
      {
          return $this->unModele->selectAttribut();
      }
      public function selectAttribut1()
      {
          return $this->unModele->selectAttribut1();
      } 
       public function selectAttribut2()
      {
          return $this->unModele->selectAttribut2();
      }
      public function selectMoyenne()
      {
          return $this->unModele->selectMoyenne();
      }
      public function calculeMoyenne()
      {
          return $this->unModele->calculeMoyenne();
      }
}