<?php

/**
 * Description of recipe
 *
 * @author jerry
 */


class Recipe {

    // Properties
    public $name;
    public $image_path;
    public $type;
    public $instructions;
    public $ingredients;
    public $notes;
    public $comments;
    public $nutrition;
    
    
    
    //$recipe = new stdClass;
//$recipe->name = $_POST["recipeName"];
//$recipe->type = $_POST["recipeType"];
//$recipe->instructions = $_POST["instructions"];
//$recipe->ingredients = $_POST["ingredients"];
//$recipe->notes = $_POST["notes"];
//$recipe->comments = $_POST["notes"];
//$recipe->nutrition = $_POST["nutrition"];
    
    function __construct() {
        $this->name = $_POST["name"];
        $this->image_path = $image_path;
        $this->type = $_POST["type"];
        $this->instructions = $_POST["instructions"];
        $this->ingredients = $_POST["ingredients"];
        $this->notes = $_POST["notes"];
        $this->comments =  $_POST["comments"];
        $this->nutrition =  $_POST["nutrition"];
    }

    // Methods

    function getName() {
        return $this->name;
    }
    function getImage_Path() {
        return $this->image_path;
    }

    function getType() {
        return $this->type;
    }

    function getInstructions() {
        return $this->instructions;
    }

    function getIngredients() {
        return $this->ingredients;
    }

    function getNotes() {
        return $this->notes;
    }

    function getComments() {
        return $this->comments;
    }

    function getNutrition() {
        return $this->nutrition;
    }

    function setName(): void {
        $this->name = $name;
    }
    function setImage_Path($image_path): void {
        $this->imagePath = $image_path;
    }

    function setType($type): void {
        $this->type = $type;
    }

    function setInstructions($instructions): void {
        $this->instructions = $instructions;
    }

    function setIngredients($ingredients): void {
        $this->ingredients = $ingredients;
    }

    function setNotes($notes): void {
        $this->notes = $notes;
    }

    function setComments($comments): void {
        $this->comments = $comments;
    }

    function setNutrition($nutrition): void {
        $this->nutrition = $nutrition;
    }

}
    