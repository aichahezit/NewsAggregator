<?php

/* TODO
 * - duplicates
 *
 * */

//source feed
$sources = ["http://rss.cnn.com/rss/cnn_topstories.rss", "http://feeds.bbci.co.uk/news/rss.xml"];
//$url = "http://rss.cnn.com/rss/cnn_topstories.rss";


foreach($sources as $url) {
//load xml into DOMobject
    $dom = new DOMDocument;
    $dom->load($url);

    if (!$dom) {
        echo 'Error while parsing the document';
        exit;
    }

//gets all children of the xml tag (using simpleXML)
    $items = simplexml_import_dom($dom);

//prints feed items using simpleXMLobject
    for ($i = 0; $i < 10; $i++) {
        echo "<p>Item $i<br />";
        echo "Title: " . $items->channel->item[$i]->title . "<br /><br/>";
        echo "Description: " . $items->channel->item[$i]->description . "<br /><br/>";
        echo "Src: " . $items->channel->item[$i]->link . "<br /><br/>";
        echo "Date: " . $items->channel->item[$i]->pubDate . "<br /><br/>";
        echo "GUID: " . $items->channel->item[$i]->guid . "<br /><br/>";
        echo "Number of tags to filter: " . sizeof($items->channel->item[$i]->category);
        for ($j = 0; $j < sizeof($items->channel->item[$i]->category); $j++) {
            $tags[] = $items->channel->item[$i]->category[$j];
        }
        echo "</p>";
    }

}

?>