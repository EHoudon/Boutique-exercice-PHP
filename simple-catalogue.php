<?php
$Burgers = ['Végétarien', 'Bacon', 'Double', 'Cheese'];
sort($Burgers);
print_r($Burgers);

echo "<br>";

$last = end($Burgers);
echo nl2br("dernier produit du tableau:$last\n");
$last_key = array_key_last($Burgers);
echo "dernière clé du tableau:$last_key";




echo "<br>";
echo "Premier produit du tableau: $Burgers[1]";
echo "<br>";
$first_key = array_key_first($Burgers);
echo "Première clé du tableau: $first_key";

?>