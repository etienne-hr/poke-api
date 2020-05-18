<?php

    //import 

    include './config.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex Etienne Haller</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <button class="all-js starter-hidden" type="submit"><img src="./images/pokeball.png" alt="all pokemon"></button>
        <button class="button-fire-js" type="submit"><img src="./images/fire.png" alt="type fire"></button> 
        <button class="button-grass-js" type="submit"><img src="./images/grass.png" alt="type grass"></button>
        <button class="button-water-js" type="submit"><img src="./images/water.png" alt="type water"></button>
        <button class="button-normal-js" type="submit"><img src="./images/normal.png" alt="type normal"></button>
        <button class="button-bug-js" type="submit"><img src="./images/bug.png" alt="type bug"></button>
        <button class="button-flying-js" type="submit"><img src="./images/flying.png" alt="type flying"></button>
        <button class="button-poison-js" type="submit"><img src="./images/poison.png" alt="type poison"></button>
        <button class="button-electric-js" type="submit"><img src="./images/electric.png" alt="type electric"></button>
        <button class="button-ground-js" type="submit"><img src="./images/ground.png" alt="type ground"></button>
    </header>
    <form class="search-bar" action="#" method="get">
        <input type="text" name="pokemon">
        <button type="submit"><img src="./images/mini-pokeball.png" alt="rechercher"></button>
    </form>
    <div class="pokemon-grid"> 
        <?php
            
            include './poke-api.php'
            
        ?>
    </div>

    <script src="script.js"></script>
</body>
</html>





