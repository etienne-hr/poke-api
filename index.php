<?php

    //import 

    include './assets/includes/config.php';


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
        <button class="all-js starter-hidden" type="submit"><img src="./assets/images/pokeball.png" alt="all pokemon"></button>
        <button class="button-fire-js" type="submit"><img src="./assets/images/fire.png" alt="type fire"></button> 
        <button class="button-grass-js" type="submit"><img src="./assets/images/grass.png" alt="type grass"></button>
        <button class="button-water-js" type="submit"><img src="./assets/images/water.png" alt="type water"></button>
        <button class="button-normal-js" type="submit"><img src="./assets/images/normal.png" alt="type normal"></button>
        <button class="button-bug-js" type="submit"><img src="./assets/images/bug.png" alt="type bug"></button>
        <button class="button-flying-js" type="submit"><img src="./assets/images/flying.png" alt="type flying"></button>
        <button class="button-poison-js" type="submit"><img src="./assets/images/poison.png" alt="type poison"></button>
        <button class="button-electric-js" type="submit"><img src="./assets/images/electric.png" alt="type electric"></button>
        <button class="button-ground-js" type="submit"><img src="./assets/images/ground.png" alt="type ground"></button>
    </header>
    <div class="pokemon-grid"> 
        <?php
            
            include './assets/includes/poke-api.php'
            
        ?>
    </div>

    <script src="script.js"></script>
</body>
</html>





