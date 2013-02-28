<?php
header('Content-type: text/html; charset=utf-8');
$rss = simplexml_load_file("http://www.aljazeerasport.net/Services/Rss/?PostingId=2008101816253979473");
echo "<h2>CNN RSS</h2>";
echo "<table border=1>";
foreach ($rss->channel->item as $item)
{
    echo "<tr>" ;
    echo "<td><a href='" .$item->guid . "'>". $item->title  . "</td>" ;
    echo "<td>" . $item->description  . "</td>" ;
    echo "<td>" . $item->pubDate  . "</td>" ;
    echo "</tr>" ;
}

?>
