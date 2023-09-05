<?php

$products = [
    [
        'name' => 'Végétarien',
        'price' => 8,
        'picture_url' => 'images\Végétarien.webp',
    ],
    [
        'name' => 'Bacon',
        'price' => 12,
        'picture_url' => 'images\Bacon.webp',
    ],
    [
        'name' => 'Double',
        'price' => 14,
        'picture_url' => 'images\Double.webp',
    ],
    [
        'name' => 'Cheese',
        'price' => 11,
        'picture_url' => 'images\Cheese.webp',
    ],

];

// print_r($products);


// echo $products[0]['name'];
// echo $products[1]['name'];
// echo "<br>";
// var_dump($products[0]);
// echo "<br>";



for ($i = 0; $i < count($products); $i++) {
    echo $products[$i]['name'] . ' qui coute ' . ' ' . $products[$i]['price'] . '€ | ' ;
}
echo "<br>";

foreach ($products as $product) {
    echo $key . ' ' . $product['name'] . ' qui coute ' . $product['price'] . '€ |';
}
echo "<br>";

// $i = 0;
// while (isset($Burgers[$i])) {
//     echo "L'élément $i est $Burgers[$i]<br />";
//     $i++;
// }
// echo "<br>";

// $i = 0;
// do {
//     echo "$Burgers[$i] <br />";
//     $i++;
// } while ($i < count($Burgers));

?>

<?php
foreach ($products as $product) :
    ?>
<div>
    <h3>
        Burger <?php echo $products[1]['name']; ?>
    </h3>
    <p>
        <?php echo $products[0]['price']; ?>
        €
    </p>
    <img src=<?php echo $products[0]['picture_url']; ?>>
</div>
<?php endforeach; ?>
    









<div>
    <h3>
        Burger <?php echo $products[0]['name']; ?>
    </h3>
    <p>
        <?php echo $products[0]['price']; ?>
        €
    </p>
    <img src=<?php echo $products[0]['picture_url']; ?>>
</div>

<div>
    <h3>
        Burger <?php echo $products[1]['name']; ?>
    </h3>
    <p>
        <?php echo $products[1]['price']; ?>
        €
    </p>
    <img src=<?php echo $products[1]['picture_url']; ?>>
</div>

<div>
    <h3>
        Burger <?php echo $products[2]['name']; ?>
    </h3>
    <p>
        <?php echo $products[2]['price']; ?>
        €
    </p>
    <img src=<?php echo $products[2]['picture_url']; ?>>
</div>

<div>
    <h3>
        Burger <?php echo $products[3]['name']; ?>
    </h3>
    <p>
        <?php echo $products[3]['price']; ?>
        €
    </p>
    <img src=<?php echo $products[3]['picture_url']; ?>>
</div>