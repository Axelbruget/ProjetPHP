
<?php

require_once("Gateways/NewsGateway.php");


$url = "http://tonyarchambeau.com/feed/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($url);
$newsGateway = new NewsGateway();






foreach ($rss->channel->item as $item){

    $i = $newsGateway->getNombreDeNews();

    $datetime = date_create($item->pubDate);
    $date = date_format($datetime, "Y-m-d H:i:s");

    echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';

    $news = new News($i,$date,$item->title,$item->link,$item->description);
    //var_dump($news);

    $newsGateway->insertNews($news);
}


?>
