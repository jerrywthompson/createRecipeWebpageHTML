<?php

include_once("echoOutput.php");
include_once("Recipe.php");
include_once("SQLLight3.php");
include_once 'SQL.php';

$dbFile = 'db/recipes.db';
$db = new SQLite3($dbFile);

$db = new SQLLight3();
$sql = new SQL();

$create_table_sql = $sql->create_recipe_table();
$db->execute($create_table_sql);


//
//$db = new DB_Connect($dbFile);
//funcEchoOutput($db);
//funcEchoOutput($db->database);
//funcEchoOutput($sql);
//
//
//
//funcEchoOutput($recipe);
// This is a built into PHP.  A light weight DB which can use a file for a table
//$db = new SQLite3($dbFile);
//createTable($db);




$recipe = new Recipe();

//$recipe->image_path = "images/desserts.jpg";
$recipe->image_path = "images/desserts.jpg";

$ctr = 0;
foreach ($recipe as $key => $value) {
    if ($ctr == 0) {
        $recipeData .= "'$value'";
    } else {
        $recipeData .= ",'$value'";
    }
    $ctr += 1;
}





$insert_recipe_sql = $sql->insert_recipe($recipeData);
$db->execute($insert_recipe_sql);
//insert($db, $recipeData);

$get_all_recipes = $sql->get_all_recipes();
echo $get_all_recipes;

$db->query($get_all_recipes);


//query($db, "SELECT * from recipe;");


include("recipeTemplate.php");

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




$db->close();
?>