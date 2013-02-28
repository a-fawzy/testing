<?php

$reader= new XMLReader();
$reader->open("survey.xml");

  //Example 1
/*
$i = 0 ;
echo "<table border=2>" ;
while ($reader->read())
{
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>$reader->name</td>" ;
    echo "<td>$reader->value</td>";
    echo "</tr>";
    $i++;
}
*/

while($reader->read())
{
    if ($reader->nodeType == XMLReader::ELEMENT && $reader->localName == "info")
    {
        while ($reader->read())
        {
            if ($reader->localName == "name")
            {
                $reader->read();
                echo "client Name: $reader->value" ;
                echo "<br />";
                $reader->read();
            }
            if ($reader->localName == "mobile")
            {
                $reader->read();
                echo "client Mobile: $reader->value" ;
                echo "<br />";
                break ;
            }
        }
    }
}
 
?>