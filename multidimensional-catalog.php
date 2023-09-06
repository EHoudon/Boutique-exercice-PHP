<?php

$products = [
    [
        'name' => 'Végétarien',
        'price' => 8,
        'picture_url' => 'images\Végétarien.webp',
        'weight' => 400,
        'description' => 'Gluten free!!',
        'discount' => 20,
    ],
    [
        'name' => 'Bacon',
        'price' => 12,
        'picture_url' => 'images\Bacon.webp',
        'weight' => 420,
        'description' => 'Comme Kevin!',
        'discount' => null,
    ],
    [
        'name' => 'Double',
        'price' => 14,
        'picture_url' => 'images\Double.webp',
        'weight' => 500,
        'description' => 'Salade, Tomates, Oignons, Chef!',
        'discount' => null,
    ],
    [
        'name' => 'Cheese',
        'price' => 11,
        'picture_url' => 'images\Cheese.webp',
        'weight' => 450,
        'description' => 'Pour encore plus de dégoulinance..',
        'discount' => 10,
    ],

];

// print_r($products);


// echo $products[0]['name'];
// echo $products[1]['name'];
// echo "<br>";
// var_dump($products[0]);
// echo "<br>";



// for ($i = 0; $i < count($products); $i++) {
//     echo $products[$i]['name'] . ' qui coute ' . ' ' . $products[$i]['price'] . '€ | ';
// }
// echo "<br>";

// foreach ($products as $product) {
//     echo $key . ' ' . $product['name'] . ' qui coute ' . $product['price'] . '€ |';
// }
// echo "<br>";

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

<!-- <?php
foreach ($products as $product) :
?>
    <div>
        <h3>
            Burger <?php echo $product['name']; ?>
        </h3>
        <p>
            <?php echo $product['price']; ?>
            €
        </p>
        <img src=<?php echo $product['picture_url']; ?>>
    </div>
<?php 
endforeach;
?> -->










<!-- <div>
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
</div> -->