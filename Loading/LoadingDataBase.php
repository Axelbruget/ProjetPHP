
<?php

require_once("Gateways/NewsGateway.php");


$url = "http://feeds.feedburner.com/phoenixjp?format=xml"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($url);
$newsGateway = new NewsGateway();
$newsGateway->deleteAllNews();
$i = 0;

foreach ($rss->channel->item as $item) {

        if ( $i < 49 ) { // charge seulement 50 news dans la base sinon méga LONG !
            $i = $newsGateway->getNombreDeNews();

            $datetime = date_create($item->pubDate);
            $date = date_format($datetime, "Y-m-d H:i:s");

            $news = new News($i, $date, $item->title, $item->link, $item->description);
            $newsGateway->insertNews($news);
        }

}



?>
