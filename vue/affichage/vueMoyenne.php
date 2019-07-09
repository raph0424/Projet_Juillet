<?php
$admis = "Admis";
if($result_moy['moyenne'] < 10)
{
$admis = "Refusé";
}
        echo"<table class=' table table-bordered'>";
        foreach($resultat as $unRes)
        {
        echo" <tr><th width='100%' class='center'>Bulletin de note de ".$unRes['Nom']." ".$unRes['Prenom']."</th></table> ";}
        echo "<table class=' table table-bordered'>
                <th width='33%'>Matière</th><th width='33%'>Note</th><th>Coef</th>
        ";
    foreach ($result as $unResultat)
    {
        echo"<table class=' table table-bordered'>";

    echo "<tr>
         <td width='33%'>".$unResultat['libelle']."</td>
         <td width='33%'>".$unResultat['Valeur']."</td>
         <td>".$unResultat['coef']."</td>"
         ;
         echo"</table>
         </form> </td>         
         </tr>";
         
    }

    echo "</table></table>"; 
    echo"<table class=' table table-bordered'>
    <th>Votre Moyenne générale</th>
    </td><td width='50%'>".$result_moy['moyenne']."</td>
    <tr><th>Avis du conseil</th><td>".$admis."</td></tr>
    <tr><th>Réalisé par </th><td>Okacha Ben Ahmed</td></tr></table>";

?>

<style>


th,td {
text-align:center;
}


</style>
