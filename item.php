<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
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

        <div class="infoProduit">
            <div>
                <?php echo "burger $nom"; ?>
            </div>
            <div>
                <?php echo "seulement $prix £"; ?>
            </div>
            <div>
                <img class="photoBurger" src=<?php echo $imageBurger; ?> alt=echo $altBurger; >
            </div>
        </div>
    </main>

    <footer>
        <?php include('footer.php'); ?>
    </footer>

</body>

</html>