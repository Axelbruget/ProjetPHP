
<?php

require_once("Gateways/NewsGateway.php");


$url = "http://feeds.feedburner.com/phoenixjp?format=xml"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($url,'SimpleXMLElement', LIBXML_NOCDATA);
$newsGateway = new NewsGateway();
$newsGateway->deleteAllNews();
$i = 0;

foreach ($rss->channel->item as $item) {

        if ( $i < 29 ) { // charge seulement quelques news dans la base sinon méga LONG !

            $i = $newsGateway->getNombreDeNews();

            // La date est une balise <dc:date> donc obligé de passer par cette méthode pour récupérer la date
            $dc = $item->children('http://purl.org/dc/elements/1.1/');

            $datetime = date_create($dc->date);

            $date = date_format($datetime, "Y-m-d H:i:s");
            $news = new News($i, $date, $dc->publisher, $item->link, $item->title);
            $newsGateway->insertNews($news);
        }

}



?>
