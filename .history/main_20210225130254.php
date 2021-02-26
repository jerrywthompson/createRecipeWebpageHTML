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
$image2 = "images/desserts.jpg";

$recipe->image = "images/desserts.jpg";

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


query($db, "SELECT * from recipe;");



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


$createHTML = '<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" $dbFile ="text/html; charset=windows-1252">
    <style>';





?>