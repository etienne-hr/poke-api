<?php

    include './assets/includes/config.php';

    $pokemon = $_GET['pokemon'];

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://pokeapi.co/api/v2/pokemon/'.$pokemon.'');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    $data = json_decode($result);

    if (isset($data)) 
    {
        $onlyOneType = true;
    
        $name = $data->name;
    
        $height = $data->height;
    
        $weight = $data->weight;
    
        $stats = $data->stats[5]->base_stat;
    
        $pokemonImage = $data->sprites->front_default;
    
        $typeZero = $data->types[0]->type->name;
    
        if(isset($data->types[1]))
        {   
            $typeOne = $data->types[1]->type->name;
            $onlyOneType = false;
        }
    }
    else
    {
        echo '<div class="error"><p>ERROR ! THAT POKEMON DOES NOT EXIST</p></div>
            <div class="back-button">
                <a href="./index.php"><img src="./images/pokeball.png"></a>
            </div>';
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="search-bar" action="#" method="get">
        <input type="text" name="pokemon">
        <button type="submit"><img src="./assets/images/mini-pokeball.png" alt="rechercher"></button>
    </form>
    <?php if(isset($data)) {?> 
        <div class="container">
            <h1>Pokemon Details</h1>
            <h2><?= $name ?></h2>
            <img src="<?= $pokemonImage ?>" alt="image of the pokemon">
            <p><span><?= $stats ?>-HP</span></p>
            <p><span>Type: <?= $typeZero ?></span></p>
            <?php
                if($onlyOneType === false)
                {   
                    echo '<p><span>Type 2: '.$typeOne.'</span></p>';
                }
            ?>
            <p><span>Height: <?= $height?></span></p>
            <p><span>Weight: <?= $weight?></span></p>
        </div>
        <div class="back-button">
            <a href="./index.php"><img src="./assets/images/pokeball.png"></a>
        </div>
            <?php } ?>

    <script src="script.js"></script>
</body>
</html>
