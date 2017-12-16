<!DOCTYPE html>
<html>
<head>
    <title>PageConnection</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="Css/PageBienvenue.css" />
</head>
<body>

<h1>phoenixjp</h1>
<?php
/**
 * Created by PhpStorm.
 * User: Axel
 * Date: 16/12/2017
 * Time: 08:48
 */

require_once("Gateways/NewsGateway.php");
require_once("Metier/News.php");

$nbNewsParPage = 15;
$newsGateway = new NewsGateway();
$nb = $newsGateway->getNombreDeNews(); // renvoit le nombre de news dans la base

$nbPages = ceil($nb/$nbNewsParPage);


echo '<ul class="ListeNews">';

for ( $i = 0; $i<$nbNewsParPage; $i++){
    $news = $newsGateway->getNews($i); // récupère la news sous forme d'un tableau à 2 dimensions
    echo '<li>'.$news[0]['date'].' - .<a target="_blank" href="'.$news[0]['url'].'">'.$news[0]['nomSite'].' : </a><a target="_blank" href="'.$news[0]['url'].'">'.$news[0]['description'].'</a></li>';
}

echo '</ul>';

for ( $z = 1; $z<= $nbPages;$z++){
    echo '<a href="'.$z.'">'.$z.'</a> ';
}



?>

</body>

</html>
