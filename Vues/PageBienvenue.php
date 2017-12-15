
<?php

require_once("Gateways/NewsGateway.php");


$url = "http://tonyarchambeau.com/feed/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($url);
$i = 0;
$newsGateway = new NewsGateway();

foreach ($rss->channel->item as $item){
    $datetime = date_create($item->pubDate);
    $date = date_format($datetime, 'd M Y, H\hi');

    echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';

    $news = new News($i,$date,utf8_decode($item->title),$item->link,$item->description);
    //var_dump($news);
    $newsGateway->insertNews($news);
    $i++;
}


?>
