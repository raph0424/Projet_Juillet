<?php
        echo"<table class=' table table-bordered'>";
        echo" <tr><th>Liste des élèves de sisr/th></th>";
    foreach ($result as $unResultat)
    {
        echo"<table class=' table table-bordered'>";

    echo "<tr>
         <td>".$unResultat['Nom']."</td>
         <td>".$unResultat['Prenom']."</td> ";
         echo"</table>
         </form> </td>         
         </tr>";
         
    }

    echo "</table></table>"; 

?>
