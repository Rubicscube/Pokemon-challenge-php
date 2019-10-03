<?php
$pokemon = $_POST ['input-field'];
$url = "https://pokeapi.co/api/v2/pokemon/"; // path to your JSON file
$data = file_get_contents($url . '/' . $pokemon); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
$evolutions = $characters->species->url;

$evolutiondata = file_get_contents($evolutions);
$evolutiondecode = json_decode($evolutiondata);
$pokemonurl = $evolutiondecode->evolves_from_species->url;

$evolutionimage = file_get_contents($pokemonurl);

$urldecode = json_decode($evolutionimage);

$urlalmostfinale = $urldecode->varieties[0]->pokemon->url;


$urlfinale = file_get_contents($urlalmostfinale);
$finalimagedata = json_decode($urlfinale);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png"
          href="data:image/jpeg;base64,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">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="stylesheet.css">

    <title>Poke dex</title>
</head>
<body>
<div id="CONTAINER" class="container m-5 p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="input-field">

                <form id="search" method="post">
                    <input id="pokemon" type="text" name="input-field" placeholder="Enter name or ID">
                    <button id="run" class="button" type="submit">Search</button>
                </form>


            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div id="info">
                <div class="pokeID">
                    <span>#<?php echo $characters->id ?></span><span id="id"></span>
                </div>
                <h1 id="name"><?php echo $characters->name ?></h1>
                <div class="pokemonimage m-5 p-5">

                    <img id="main-pokemon" src="<?php echo $characters->sprites->front_default ?>">
                    <button id="front">front</button>
                    <button id="back">back</button>
                    <button id="shiny">shiny</button>
                    <button id="shiny-back">shiny-back</button>

                </div>
                <div id="evolutions">
                    <p>Evolution of <?php echo $evolutiondecode->evolves_from_species->name ?> </p>
                    <img id="pre-evolution" src=" <?php echo $finalimagedata->sprites->front_default ?>">
                    <p id="preName" href=""></p>
                </div>
                <div class="arrows">
                    <button id="prev">&lt;</button>
                    <button id="next">&gt;</button>

                </div>
            </div>
        </div>
        <div class="col-md-4">

            <div id="information-pokemon">

                <p class="info">Info</p>
                <p>Type:<?php echo $characters->types [0]->type->name ?></p>
                <ul id="type">

                </ul>
                <p>Height:<?php echo $characters->height ?> <span id="height"></span></p>

                <p>Weight:<?php echo $characters->weight ?> <span id="weight"></span></p>

                <p>HP:<?php echo $characters->stats[5]->base_stat ?> <span id="hp"></span></p>


            </div>

        </div>
        <div class="col-md-4">
            <div id="Moves">

                <p class="movement">Moves <br> <?php echo $characters->moves[0]->move->name ?>
                    <br>
                    <?php echo $characters->moves[1]->move->name ?>
                    <br>
                    <?php echo $characters->moves[2]->move->name ?>
                    <br>
                    <?php echo $characters->moves[3]->move->name ?>
                    <br>
                    <?php echo $characters->moves[4]->move->name ?>
                    <br>
                    <?php echo $characters->moves[5]->move->name ?>

                </p>
                <ul id="move-list">


                </ul>
            </div>

        </div>
    </div>


</div>


</body>
</html>