<?php
    //import 

    include './config.php';

    echo '<script type="text/javascript">
            let pokemonWeight = []
          </script>';
    echo '<script type="text/javascript">
            let pokemonHeight = []
          </script>';
    echo '<script type="text/javascript">
            let pokemonImage = []
          </script>';
    echo '<script type="text/javascript">
            let pokemonName = []
          </script>';
    echo '<script type="text/javascript">
            let pokemonHp = []
          </script>';
    echo '<script type="text/javascript">
            let pokemonTypeOne = []
          </script>';
    echo '<script type="text/javascript">
            let pokemonTypeTwo = []
          </script>';

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
        $arrayPokemon = array();
        array_push($arrayPokemon, $name);


        //height 

        $height = $data->height;
        $arrayHeight = array();

        array_push($arrayHeight, $height);

        //weight

        $weight = $data->weight;
        $arrayWeight = array();
        array_push($arrayWeight, $weight);

        //HP 

        $stats = $data->stats[5]->stat->name;
        $arrayStats = array();
        array_push($arrayStats, $stats);
        
        //image of the pokemon 

        $pokemonImage = $data->sprites->front_default;
        $arrayImagepokemon = array();
        array_push($arrayImagepokemon, $pokemonImage);

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
            echo '<script type="text/javascript">
                    pokemonWeight.push("'.$weight.'")
                </script>';
            echo '<script type="text/javascript">
                    pokemonHeight.push("'.$weight.'")
                </script>';
            echo '<script type="text/javascript">
                    pokemonName.push("'.$name.'")
                </script>';
            echo '<script type="text/javascript">
                    pokemonImage.push("'.$pokemonImage.'")
                </script>';
            echo '<script type="text/javascript">
                    pokemonHp.push("'.$stats.'")
                </script>';
            echo '<script type="text/javascript">
                    pokemonTypeOne.push("'.$typeZero.'")
                </script>';
            echo '<script type="text/javascript">
                    pokemonTypeTwo.push("'.$typeOne.'")
                </script>';
    }
    

