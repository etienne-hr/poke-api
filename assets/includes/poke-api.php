<?php
    //import 

    include './assets/includes/config.php';

    for($pokemon = 1; $pokemon < 30; $pokemon++)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://pokeapi.co/api/v2/pokemon/'.$pokemon.'');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($result);

        $typeTwopokemon = false;
        
        //name of the pokemon 
        
        $name = $data->name;
        
        //image of the pokemon 

        $pokemonImage = $data->sprites->front_default;

        //type zero of the pokemon 

        $typeZero = $data->types[0]->type->name;
        $arrayZero = array();
        array_push($arrayZero, $typeZero);

        // type one  of the pokemon

        $arrayOne = array();

        if(isset($data->types[1]))
        {   
            $typeOne = $data->types[1]->type->name;
            array_push($arrayOne, $typeOne);
            $typeTwopokemon = true;
        }
        foreach ($arrayZero as $key => $value)
        {   
            if ($typeTwopokemon === true) 
            {
                echo '<div class="pokemon-js '.$value.'-js '.$typeOne.'-js"> 
                        <a href="pokemon.php?pokemon='.$name.'"><img src="'.$pokemonImage.'"></a>
                        <div class="pokemon-name-js">'.$name.'</div>
                        <div class="type-one-js">'.$value.' </div>
                        <div class="type-two-js">('.$typeOne.') </div>
                    </div>';
            }
            else
            {
                echo '<div class="pokemon-js '.$value.'-js"> 
                        <a href="pokemon.php?pokemon='.$name.'"><img src="'.$pokemonImage.'"></a>
                        <div class="pokemon-name-js">'.$name.'</div>
                        <div class="type-one-js">'.$value.' </div>
                    </div>';
            }

        }
    }
    

