<?php

$reader= new XMLReader();
$reader->open("survey.xml");
while ($reader->read())
{
    if ($reader->nodeType == XMLReader::ELEMENT && $reader->localName == "client")
    {
        $client = new SimpleXMLElement($reader->readOuterXml());
        echo "Client Name:" . $client->info->name ;
        echo "<br/>";
        echo "Client Mobile:" . $client->info->mobile ;
        echo "<br/>";
        foreach ($client->products->product as $product)
        {
            echo "product with id = " . $product['id'] . " has rating = " . $product->rating;
            echo "<br/>";
        }
        echo "<hr/>";
    }
}

?>
