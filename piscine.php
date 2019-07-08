<?php
require_once ("controleur/controleur.class.php");
$unControleur = new Controleur ("localhost", "bdd", "root", "");




$url = "fluxRss.xml"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($url);
echo '<ul>';
foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
echo "</br>le retard est de : ".  $item->retard ;
 //insertion dans la table retard
 $unControleur ->insertRetard ($item->pubDate, $item->description, $item->link , $item->retard );
}
echo '</ul>';
?>
