<?php

/**
 * Description of recipe
 *
 * @author jerry
 */


class FormatData {

    // Properties
    public $name;
    public $image;
    public $type;
    public $instructions;
    public $ingredients;
    public $notes;
    public $comments;
    public $nutrition;
    
    
    
    function __construct() {
        $this->name = $_POST["name"];
        $this->image = $_POST["image"];
        $this->type = $_POST["type"];
        $this->instructions = $_POST["instructions"];
        $this->ingredients = $_POST["ingredients"];
        $this->notes = $_POST["notes"];
        $this->comments =  $_POST["comments"];
        $this->nutrition =  $_POST["nutrition"];
    }

    

    function list($data) {        
        $list = explode(PHP_EOL, $data);
        $formatted_list = "";

        foreach ($list as $row) {
            
            if ($row){
                
            $formatted_list .= "<li>$row</li>";
            }
        }
        
        $this->formatted_list = $formatted_list;
        return $this->formatted_list;
    }

// Methods

    function getName() {
        return $this->name;
    }
    function getImage() {
        return $this->image;
    }
}