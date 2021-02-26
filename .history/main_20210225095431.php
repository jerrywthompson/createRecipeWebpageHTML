<?php

include("echoOutput.php");
include("sqlLight.php");

$recipe = new stdClass;
$recipe->name = $_POST["recipeName"];
$recipe->type = $_POST["recipeType"];
$recipe->instructions = $_POST["instructions"];
$recipe->ingredients = $_POST["ingredients"];
$recipe->notes = $_POST["notes"];
$recipe->comments = $_POST["comments"];
$recipe->nutrition = $_POST["nutrition"];

$image = $_POST["image"];

funcEchoOutput($image);
funcEchoOutput('hey');

$dbFile = 'db/recipes.db';
$db = new SQLite3($dbFile);


createTable($db);



$ctr = 0;
foreach($recipe as $key => $value) {
    if ($ctr == 0){
      $recipeData .= "'$value'";
    } 
    else { 
        $recipeData .= ",'$value'" ;  
    }
    $ctr += 1;
}


insert($db, $recipeData);


query($db, "SELECT * from recipe;")



//
//funcEchoOutput($ids);
//
//var_dump($recipe);
//var_dump(get_object_vars($recipe));
//
//
//
//funcEchoOutput(get_object_vars($recipe));
//funcEchoOutput($recipe);
//
//$json = json_encode($recipe);
//echo $json;
//
//
//funcEchoOutput($json);
//funcEchoOutput($recipeName);
//funcEchoOutput($recipeType);
//funcEchoOutput($instructions);
//funcEchoOutput($ingredients);
//funcEchoOutput($notes);
//funcEchoOutput($comments);

html = "<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>$recipeName</title>
    </head>
    <style>

    #bannerimage {
      width: 100%;
      padding: 10px;
      background: url('data:image/jpg;base64,$recipeImage') 50% / cover;
      height: 100px;
      background-position: center;
    }

    .sidenav {
      width: 400px;
      position: fixed;
      z-index: 1;
      top: 150px;
      left: 10px;
      background: #eee;
      overflow-x: hidden;
      padding: 8px 0;
    }

    .sidenav a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 25px;
      color: #2196F3;
      display: block;
    }

    .sidenav a:hover {
      color: #064579;
    }
    
    .sidenav2 {
      width: 400px;
      position: fixed;
      z-index: 1;
      top: ${ingredientsLength}px;
      left: 10px;
      background: #eee;
      overflow-x: hidden;
      padding: 8px 0;
    }

    .sidenav2 a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 25px;
      color: #2196F3;
      display: block;
    }

    .sidenav2 a:hover {
      color: #064579;
    }

    .main {
      margin-left: 425px; /* Same width as the sidebar + left position in px */
      margin-right: -350px:
      font-size: 28px; /* Increased text to enable scrolling */
      padding: 0px 10px;
    }

    @media screen and (max-height: 1450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }

    </style>
    <body>
        <div id='bannerimage'>
                <p>
                    <center><font size='12' color='white'><b>$recipeName</b></font></center>
                </p>
        </div>
        <div class='sidenav'>
            <p>
                <center>
                    <h1>
                        <b>
                            Ingredients
                        </b>
                    </h1>
                </center>
            </p>
            <ul>
                $formattedIngredients
            </ul>
        </div>
        <div class='sidenav2'>
            <p>
                <center>
                    <h1>
                        <b>
                            Nutrition
                        </b>
                    </h1>
                </center>
            </p>
            <p>
                $nutrition
            </p>
        </div>
        <div class='main'>
            <h1><b>Instructions</b></h1>
            <ul>
                $formattedInstructions
            </ul>
        </div>
    </body>
</html>";





?>