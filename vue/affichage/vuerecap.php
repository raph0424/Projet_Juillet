<?php
        echo "<table class=' table table-bordered'>";
                        foreach ($result1 as $unResultat) {
                            if($unResultat['id_etudiant'] == $_GET['id']){ 
        echo" <tr><th width='100%' class='center'>Récapitulatif retard de : ".$unResultat['Nom']." ".$unResultat['Prenom']."</th></table> ";
        echo "<table class=' table table-bordered'>
                <th width='33%'>Durée totale :</th>
        ";
        echo"<table class=' table table-bordered'>";

    echo "<tr>
         <td width='33%'>".$_GET['tot']."</td>"
         ;
         echo"</table>";   
         "</tr>";
        

    echo "</table></table>"; 
    echo"<table class=' table table-bordered'>
    <tr><th>Réalisé par </th><td>Okacha Ben Ahmed</td></tr></table>";
      ?> <a href="pdf.php?id=<?php echo $unResultat['Nom']?>&tot=<?php echo $_GET['tot']?>" class="button">convertir en pdf</a><?php

                            }
                            }
                            
?>

<style>


th,td {
text-align:center;
}


</style>
