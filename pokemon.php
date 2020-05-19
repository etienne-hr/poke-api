<?php
    include './config.php';

    $pokemon = $_GET['pokemon'];

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://pokeapi.co/api/v2/pokemon/'.$pokemon.'');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    $data = json_decode($result);

    
    $name = $data->name;

    $height = $data->height;

    $weight = $data->weight;

    $stats = $data->stats[5]->base_stat;

    $pokemonImage = $data->sprites->front_default;

    $typeZero = $data->types[0]->type->name;

    if(isset($data->types[1]))
        {   
            $typeOne = $data->types[1]->type->name;
        }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script src="script.js"></script>
</body>
</html>
