<?php
        echo"<table class=' table table-bordered'>";
        echo" <tr><th width='100%'>Liste des élèves de developpement dans la salle 2 préparant le diplome BTS SIO SLAM</th></table>
        <table class=' table table-bordered'>
                <th width='25%'>Id</th><th width='25%'>Nom</th><th width='25%'>Prenom</th><th width='25%'>Date de naissance</th>
        ";
    foreach ($result as $unResultat)
    {
        echo"<table class=' table table-bordered'>";

    echo "<tr>";
        if(isset($_SESSION['login']) && $_SESSION['login'] == "admin")
        {
            $id = $unResultat['id_etudiant'];
            ?>
            <td width="25%"><a href='bulletin.php?id=<?php echo $id?>'><?php echo $unResultat['id_etudiant']?></a></td><?php
        }
    echo "<td width='25%'>".$unResultat['Nom']."</td>
         <td width='25%'>".$unResultat['Prenom']."</td>
         <td>".$unResultat['Date_naiss']."</td> "
         ;
         echo"</table>
         </form> </td>         
         </tr>";
         
    }

    echo "</table></table>"; 

?>
