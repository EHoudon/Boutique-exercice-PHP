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

echo $products[0]['name']; 
echo $products[1]['name'];
echo "<br>";                               
var_dump($products[0]);
?>

<div>
<h3>
    Burger <?php echo $products[0]['name']; ?> 
</h3 >
<p>
    <?php echo $products[0]['price']; ?>
    €
</p>
<img src=<?php echo $products[0]['picture_url']; ?>>
</div>

<div>
<h3>
    Burger <?php echo $products[1]['name']; ?> 
</h3 >
<p>
    <?php echo $products[1]['price']; ?>
    €
</p>
<img src=<?php echo $products[1]['picture_url']; ?>>
</div>

<div>
<h3>
    Burger <?php echo $products[2]['name']; ?> 
</h3 >
<p>
    <?php echo $products[2]['price']; ?>
    €
</p>
<img src=<?php echo $products[2]['picture_url']; ?>>
</div>

<div>
<h3>
    Burger <?php echo $products[3]['name']; ?> 
</h3 >
<p>
    <?php echo $products[3]['price']; ?>
    €
</p>
<img src=<?php echo $products[3]['picture_url']; ?>>
</div>

