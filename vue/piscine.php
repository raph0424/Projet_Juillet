<?php
      require_once("../Controleur/leControleur.php");
$unControleur = new leControleur ("localhost", "recap", "root", "");




$url = "fluxRss.xml"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($url);
echo '<ul>';
foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'Y-m-d');
 echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
echo "</br>le retard est de : ".  $item->retard ;
 //insertion dans la table retard
    $tab = array(':date'=>$item->Date,':description'=>$item->description,':retard'=>$item->retard,':idtrans'=>$item->idtrans);
 $unControleur ->insertRetard($tab);
}
echo '</ul>';
?>
