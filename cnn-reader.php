<?php
$reader= new XMLReader();
$reader->open("http://rss.cnn.com/rss/edition_meast.rss");
echo "<h2>CNN RSS</h2>";
echo "<table border=1>";
while ($reader->read())
{
    if ($reader->nodeType == XMLReader::ELEMENT && $reader->localName == "item")
    {
        $item = new SimpleXMLElement($reader->readOuterXml());
        echo "<tr>" ;
        echo "<td><a href='" .$item->guid . "'>". $item->title  . "</td>" ;
        echo "<td>" . $item->description  . "</td>" ;
        echo "<td>" . $item->pubDate  . "</td>" ;
        echo "</tr>" ;
    }
}

?>
