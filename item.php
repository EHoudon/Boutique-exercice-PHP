<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <header>
        <?php include('header.php'); ?>
    </header>

    <main>
        <?php
        $nom = "solo";
        $prix = 10;
        $imageBurger = "images\cristi-ursea-y-nD1b0bnc0-unsplash.jpg";
        $altBurger = "Burger moutarde";
        ?>

        <div>
            <?php echo "burger $nom"; ?>
        </div>
        <div>
            <?php echo "seulement $prix £"; ?>
        </div>
        <div>

            <img src=<?php echo $imageBurger; ?> alt=echo $altBurger; width="10%" height="10%">
        </div>
    </main>

    <footer>
        <?php include('footer.php'); ?>
    </footer>

</body>

</html>