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
echo "Première clé du tableau: $first_key <br>";
echo "<br>";

for ($i = 0; $i<=count($Burgers); $i++) {
    echo "$Burgers[$i] <br />" ;
}
echo "<br>";

foreach ($Burgers as $Burger) {
    echo "$Burger <br />";
}
echo "<br>";

$i=0;
while(isset($Burgers[$i]) )
{
echo "L'élément $i est $Burgers[$i]<br />";
$i++;
}
echo "<br>";

$i = 0;
do {
    echo "$Burgers[$i] <br />";
    $i++;
} while ($i < count($Burgers));

?>