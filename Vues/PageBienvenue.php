<link rel="stylesheet" href="Css/PageBienvenue.css" />

<?php
/**
 * Created by PhpStorm.
 * User: Axel
 * Date: 16/12/2017
 * Time: 08:48
 */

require_once("Gateways/NewsGateway.php");
require_once ("Metier/News.php");

$nbNewsParPage = 10;
$newsGateway = new NewsGateway();
$nb = $newsGateway->getNombreDeNews(); // renvoit le nombre de news dans la base

$nbPages = ceil($nb/$nbNewsParPage);


echo '<ol class="ListeNews">';

for ( $i = 0; $i<$nb; $i++){

    $news = $newsGateway->getNews($i); // récupère la news sous forme d'un tableau à 2 dimensions
    echo '<li><a target="_blank" href="'.$news[0]['url'].'">'.$news[0]['nomSite'].'</a> ('.$news[0]['date'].')</li>';

}

echo '</ol>';



?>