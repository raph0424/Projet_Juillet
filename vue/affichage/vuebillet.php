<link href="../css/shop-homepage.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container">
    <br>
    <div class="list-group">
        <?php foreach ($result2 as $Resultat) { ?> 
            <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#classe-<?php echo $Resultat['id_classe']; ?>" aria-expanded="false" aria-controls="#classe-<?php echo $Resultat['id_classe']; ?>">
                <?php echo $Resultat['Diplome']; ?></button>
            <br>
        <?php } ?>
    </div>
    
    <?php $j = 1;
    foreach ($result2 as $Resultat) { ?> 
        <div class="collapse" id="classe-<?php echo $Resultat['id_classe']; ?>">
                <?php  if($j == $Resultat['id_classe']){
             ?>
              <table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Retards</th>
    </tr>
  </thead>
  <tbody>
    
      <?php   
     
      foreach ($result1 as $unResultat) {
          if($unResultat['id_classe'] == $j){?>
    <tr>
      <td><?php echo $unResultat['Nom'] ; ?></td>
      <td><?php echo $unResultat['Prenom'] ; ?></td>
          <?php 
           $tot = 0;
           $res = "";
          foreach ($result as $resultatt){
              foreach ($results as $resultass){
              if ($resultatt['id_transport'] == $resultass['id_transport'] && $resultass['id_etudiant'] == $unResultat['id_etudiant'])
              {
                //var_dump($resultatt['duree']);
                  $tot = $tot + $resultatt['duree'];
                  $res = $tot."mn";
              }
              }
          }
          $id = $unResultat['id_etudiant'];
          ?><td width="25%"><a href='recapretard.php?id=<?php echo $id?>&tot=<?php echo $res?>'><?php echo $res ;?> </a></td>
    </tr>
      <?php } }?>
  </tbody>
</table>
             <?php } ?>
            </div>
    <?php $j++;
}
?>
