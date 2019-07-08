<?php
    foreach ($result as $unResultat)
    {
        echo"<table class=' table table-bordered'>";
    echo" <tr><th width='60%'>Liste des élèves de slam</th></th>
    " ;       if($_SESSION['prenom'] == $unResultat['auteur'] || $_SESSION['nom'] == "admin" && $unResultat['id_telephone'] == $id_produit)
    {
        echo "<th width='10%'>Supprimer commentaire</th>";
    }echo"</tr>";
    echo "<tr>
         <td width='70%' height='100px'>".$unResultat['commentaire']."</td>
         <td>".$unResultat['score']." sur 5 </td> ";
         $tot = $tot + $unResultat['score'];
         echo"</table>
         </form> </td>         
         </tr>";
         }
    }
    echo "</table>"; 

?>
