<?php

$survey = simplexml_load_file("survey.xml");

foreach ($survey->client as $client)
{
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


/*
$x = $survey->xpath("//name");
$x = $survey->xpath("//rating");
var_dump($x);
echo $x[0];
  */
?>
