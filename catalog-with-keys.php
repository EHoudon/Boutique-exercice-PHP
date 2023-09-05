<?php
$Végétarien = [
    'name' => 'Végétarien',
    'price' => 8,
    'picture_url' => 'images\Végétarien.webp',
];

$Bacon = [
    'name' => 'Bacon',
    'price' => 12,
    'picture_url' => 'images\Bacon.webp',
];

$Double = [
    'name' => 'Double',
    'price' => 14,
    'picture_url' => 'images\Double.webp',
];

$Cheese = [
    'name' => 'Cheese',
    'price' => 11,
    'picture_url' => 'images\Cheese.webp',
];

foreach ($Végétarien as $Végé) {
    echo "$Végé \n";
}

?>

<div>
<h3>
    Burger <?php echo $Végétarien['name']; ?> 
</h3 >
<p>
    <?php echo $Végétarien['price']; ?>
    €
</p>
<img src=<?php echo $Végétarien['picture_url']; ?>>
</div>

<div>
<h3>
Burger <?php echo $Bacon['name']; ?> 
</h3 >
<p>
    <?php echo $Bacon['price']; ?>
    €
</p>
<img src=<?php echo $Bacon['picture_url']; ?>>
</div>

<div>
<h3>
Burger   <?php echo $Double['name']; ?> 
</h3 >
<p>
    <?php echo $Double['price']; ?>
    €
</p>
<img src=<?php echo $Double['picture_url']; ?>>
</div>

<div>
<h3>
Burger   <?php echo $Cheese['name']; ?> 
</h3 >
<p>
    <?php echo $Cheese['price']; ?>
    €
</p>
<img src=<?php echo $Cheese['picture_url']; ?>>
</div>