<?php
        echo"<table class=' table table-bordered'>";
        echo" <tr><th width='100%'>Liste des élèves de réseau dans la salle 1 préparant le diplome BTS SIO SISR</th></table>
        <table class=' table table-bordered'>
                <th width='33%'>Nom</th><th width='33%'>Prenom</th><th width='33%'>Date de naissance</th>
        ";
    foreach ($result as $unResultat)
    {
        echo"<table class=' table table-bordered'>";

    echo "<tr>
         <td width='33%'>".$unResultat['Nom']."</td>
         <td width='33%'>".$unResultat['Prenom']."</td>
         <td>".$unResultat['Date_naiss']."</td> "
         ;
         echo"</table>
         </form> </td>         
         </tr>";
         
    }

    echo "</table></table>"; 

?>
