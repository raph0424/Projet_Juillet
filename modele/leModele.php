<?php
class leModele {
    private $unPdo;
    public function __construct($server, $bdd, $user, $mdp)
    {
        $this->unPdo = null;
        
        try
        {
            $this->unPdo = new PDO("mysql:host=".$server.";dbname=".$bdd,$user,$mdp);
        }
        catch(PDOExecption $exp)
        {
            echo "Erreur de connexion à la base données";
            echo $exp->getMessage();
        }
    }

    public function verifCon($login, $mdp)
    {
        if($this->unPdo!=null)
        {
            $requete ="select * from etudiant where login=:login and mdp=:mdp;";
            $donnees = array(":login"=>$login,":mdp"=>$mdp);
            $select = $this->unPdo->prepare($requete);
            $select->execute($donnees);
            $resultat = $select->fetch();
            return $resultat;
        }
    }
/*
    Insert
*/
public function insert($table, array $tab)
 {
    if ($this->unPdo == null)
     {
        return;
     }
    //Template
    $insert_format = 'insert into %s (%s) values (%s)';
    //rendre ces variables en tableau
    $colonnes = $parametres = $valeurs = [];
    //Remplire les champs
    foreach ($tab as $colonne => $valeur)
    {
        $parametre = ':' . $colonne;
        //echo $colonne ;
        $colonnes[] = $colonne;
        $parametres[] = $parametre;
        $valeurs[$parametre] = $valeur;
    }
    //ordonner 
    $sql = sprintf(
            $insert_format,
            $table,
            implode($colonnes, ', '),
            implode($parametres, ', '));
            $statement = $this->unPdo->prepare($sql);
            $statement->execute($valeurs);
           // echo $sql;
           //var_dump( $valeurs);
}

public function insertRetard($tab)
{
    if ($this->unPdo == null)
     {
        return;
     }
     $requete = "insert into retard values (null, :date, :retard, :description, :idtrans)";
     $statement = $this->unPdo->prepare($requete);
            $statement->execute($tab);
     
}
/*
    Delete
*/

public function delete($table, array $tab)
{
    if ($this->unPdo == null)
    {
        return;
    }

    $delete_format = 'delete from %s where (%s) = (%s)';
    $colonnes = $parametres = $valeurs = [];
    foreach ($tab as $colonne => $valeur)
    {
        $parametre = ':' . $colonne;
        //echo $colonne ;
        $colonnes[] = $colonne;
        $parametres[] = $parametre;
        $valeurs[$parametre] = $valeur;
    }
    $sql = sprintf(
            $delete_format,
            $table,
            implode($colonnes, ', '),
            implode($parametres, ', '));
    //echo $sql;
    $statement = $this->unPdo->prepare($sql);
    $statement->execute($valeurs);
}

/*
    Updaute
*/
public function update($table, array $tab, array $id)
{
    if ($this->unPdo == null)
    {
        return;
    }

    $update_format = 'update %s set (%s) = (%s) where %s = %s';
    $colonnes = $parametres = $valeurs = [];
    foreach ($tab as $colonne => $valeur)
    {
        $parametre = ':' . $colonne;
        //echo $colonne ;
        $colonnes[] = $colonne;
        $parametres[] = $parametre;
        $valeurs[$parametre] = $valeur;
    }
    $sql = sprintf(
            $update_format,
            $table,
            implode($colonnes, ', '),
            implode($parametres, ', '),
            $id);
    //echo $sql;
    $statement = $this->unPdo->prepare($sql);
    $statement->execute($valeurs);
}

public function selectMatiere()
{
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from matiere;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);

            // exection de la requete
            $select->execute();

            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
    public function selectProduit()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from produit;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);

            // exection de la requete
            $select->execute();

            // extraction des données
            $result = $select->fetchAll();
            return $result;
        }
    }
    
     public function selectEtudiant()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from etudiant where roles = 'Role_Stud';";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);

            // exection de la requete
            $select->execute();

            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
    public function selectEtudiantt()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from etudiant where id_etudiant= :id_etudiant;";
            // preparation de la requete avant execution
            $donnee = array(":id_etudiant"=>$_SESSION['id_etudiant']);
            $select = $this->unPdo->prepare($requete);

            // exection de la requete
            $select->execute($donnee);

            // extraction des données
            $resultat = $select->fetchAll();
            return $resultat;
            
        }
    }
    public function selectMoyTransport()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from moy_de_transport ;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);

            // exection de la requete
            $select->execute();

            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
    
    public function insertEmprunter($table, $id, $envoi)
    {
    if ($this->unPdo == null)
     {
        return;
     }
     foreach($envoi as $value){
         
     
     $requete = "insert into ".$table." values (:id_etudiant, :idtransport)";
     $tab = array(":id_etudiant"=>$id,":idtransport"=>$value);
     $statement = $this->unPdo->prepare($requete);
           $statement->execute($tab);
     }
    }
    public function selectretard()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from retard;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);

            // exection de la requete
            $select->execute();

            // extraction des données
            $result = $select->fetchAll();
            return $result;
        }
    }
    public function selectemprunter()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from emprunter;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);

            // exection de la requete
            $select->execute();

            // extraction des données
            $result = $select->fetchAll();
            return $result;
        }
    }
    
    public function selectMoyenne()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select n.Valeur, n.id_etudiant, n.id_matiere, m.libelle, m.coef, e.nom, e.prenom 
            from note n, matiere m, etudiant e 
            where m.id_matiere = n.id_matiere and n.id_etudiant = e.id_etudiant and n.id_etudiant = :id_etudiant;";
            // preparation de la requete avant executionid_etudiant = :id_etudiant
            $donnee = array(":id_etudiant"=>$_SESSION['id_etudiant']);
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute($donnee);
            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
    public function calculeMoyenne()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select avg(Valeur) as moyenne from note where id_etudiant = :id_etudiant";
            // preparation de la requete avant execution
            $donnee = array(":id_etudiant"=>$_SESSION['id_etudiant']);
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute($donnee);
            // extraction des données
            $results = $select->fetch();
            return $results;
            
        }
    }

    public function selectSlam()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "
            select e.id_etudiant, e.Nom, e.Prenom, e.Date_naiss, c.Libelle, c.Salle, c.Diplome 
            from etudiant e, classe c 
            where e.id_classe = c.id_classe and e.id_classe = 2;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);

            // exection de la requete
            $select->execute();

            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
    public function selectSisr()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "
            select e.id_etudiant, e.Nom, e.Prenom, e.Date_naiss, c.Libelle, c.Salle, c.Diplome 
            from etudiant e, classe c 
            where e.id_classe = c.id_classe and e.id_classe = 1;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);

            // exection de la requete
            $select->execute();

            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
    public function selectClasse()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from classe;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);

            // exection de la requete
            $select->execute();

            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
    public function selectInscrire()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from inscrire;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);

            // exection de la requete
            $select->execute();

            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
    public function selectPromos()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from promos;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);

            // exection de la requete
            $select->execute();

            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
    
    public function selectPartenaire()
{
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from partenaire;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);

            // exection de la requete
            $select->execute();

            // extraction des données
            $result = $select->fetchAll();
            //var_dump($result);
            return $result;
        

        }
    }

    public function selectAttribut()
    {
        if ($this->unPdo != null) {
                // selection de toutes les données
                $requete = "SELECT * from attribut where designation = 'poids' and id_telephone = 1;";
                // preparation de la requete avant execution
                // $donnees = array(":telephone"=>$_SESSION['id_telephone']);
                $select = $this->unPdo->prepare($requete);
                // exection de la requete
                $select->execute();
                // extraction des données
                $result = $select->fetchAll();
                return $result;
            }
        }
        public function selectAttribut1()
        {
            if ($this->unPdo != null) {
                    // selection de toutes les données
                    $requete = "SELECT * from attribut where designation = 'taille ecran' and id_telephone = 1;";
                    // preparation de la requete avant execution
                    // $donnees = array(":telephone"=>$_SESSION['id_telephone']);
                    $select = $this->unPdo->prepare($requete);
                    // exection de la requete
                    $select->execute();
                    // extraction des données
                    $result = $select->fetchAll();
                    return $result;
                }
            }
            public function selectAttribut2()
            {
                if ($this->unPdo != null) {
                        // selection de toutes les données
                        $requete = "SELECT * from attribut where designation = 'couleur' and id_telephone = 1;";
                        // preparation de la requete avant execution
                        // $donnees = array(":telephone"=>$_SESSION['id_telephone']);
                        $select = $this->unPdo->prepare($requete);
                        // exection de la requete
                        $select->execute();
                        // extraction des données
                        $result = $select->fetchAll();
                        return $result;
                    }
                }

                public function insertNote($tab)
                {
                   if($this->unPdo!=null)
                   {
                       $requete ="insert into note values(null, :auteur, :score, :commentaire, :id_personne, :id_telephone)";
                       $donnees = array(":auteur"=>$_SESSION['prenom'],":score"=>$tab['score'],":commentaire"=>$tab['commentaire'],":id_personne"=>$_SESSION['id_personne'],":id_telephone"=>$tab['id_telephone']);
                       $insert = $this->unPdo->prepare($requete);
                       $insert->execute($donnees);
                   } 
                }


                
            

            public function selectNote($id_produit)
            {
                if($this->unPdo != null)
                {
                    $requete = "select * from note where id_telephone = :id_telephone;";
                    $donnees = array(":id_telephone"=>$id_produit);                    
                    $select = $this->unPdo->prepare($requete);
                    $select->execute($donnees);
                    $resultat = $select->fetchAll();
                    return $resultat;
                }
            }

    public function selectTicket()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from ticket;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute();
            // extraction des données
            $result = $select->fetchAll();
            return $result;
        }
    }
    public function selectTicketSup($id_partenaire)
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from ticket where :id_partenaire = id_partenaire;";
            $donnees = array(":id_partenaire"=>$id_partenaire);                    
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute($donnees);
            // extraction des données
            $result = $select->fetchAll();
            return $result;
        }
    }

    public function updateNote($tab, $id_note)
{
    if($this->unPdo!=null)
    {
            $requete ="update note set score = :score, commentaire = :commentaire where id_note = :id_note;";
            $donnees = array(":score"=>$tab['score'],":commentaire"=>$tab['commentaire'],":id_note"=>$id_note);
            $insert = $this->unPdo->prepare($requete);
            $insert->execute($donnees);
            var_dump($requete);

    }
}

}