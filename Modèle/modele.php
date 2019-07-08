<?php 
class Modele
{
    private $unPdo;
    public function __construct ($serveur, $bdd, $user, $mdp)
    {
        $this->unPdo = null;
   try
    { 
        //connexion base de donnée            
        $this->unPdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user,$mdp);
    }
    catch(PDOException $exp)
    {
        echo "Erreur de connexion à la base de données";
        //afficher le message
        echo $exp->getMessage();
    }
}

public function verifConnexion($login, $mdp)
{
    if($this->unPdo!=null)
    {
        $requete ="select * from utilisateur where login = :login and mdp =:mdp;";
        $donnees = array(":login"=>$login,":mdp"=>$mdp);
        $select = $this->unPdo->prepare($requete);
        $select->execute($donnees);
        $resultat = $select->fetch();
        return $resultat;
    }
}

/*
Utilisateur
*/
public function insertUtilisateur($tab)
{
    if($this->unPdo!=null)
    {
    $requete ="insert into utilisateur values(null, :login, :mdp, :nom, :prenom)";
    $donnees = array(":login"=>$tab['login'],":mdp"=>$tab['mdp'],
    ":nom"=>$tab['nom'], ":prenom"=>$tab['prenom']);
    $insert = $this->unPdo->prepare($requete);
    $insert->execute($donnees);
    }
}
public function deleteUtilisateur($id_user)
{
    if($this->unPdo!=null)
    {

    $requete ="delete from utilisateur where id_user = :id_user;";
    $donnees = array(":id_user"=>$id_user);
    $delete = $this->unPdo->prepare($requete);
    $delete->execute($donnees);
    }
}
public function selectUtilisateur()
{
    if($this->unPdo!=null)
    {
            //requete
            $requete = "select * from utilisateur;";
            //preparation  de la requete avant exec
            $select = $this->unPdo->prepare($requete);
            //execution requete
            $select->execute();
            //extraction donnée
            $resultats = $select->fetchAll();
            return $resultats;
    }
}

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
}


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
}
?>
