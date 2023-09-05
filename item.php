
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

    