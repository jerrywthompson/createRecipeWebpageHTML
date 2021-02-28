<?php

class SQL {



//    function __construct($data) {
//        $this->data = $data;
//    }


    function create_recipe_table() {
        $sql = "
        CREATE TABLE if not exists RECIPES (
            ID               INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
            NAME             TEXT    NOT NULL,
            IMAGE            TEXT    NOT NULL,
            TYPE             TEXT    NOT NULL,
            INSTRUCTIONS     TEXT    NOT NULL,
            INGREDIENTS      TEXT    NOT NULL,
            NOTES            TEXT,
            COMMENTS         TEXT,
            NUTRITION        TEXT)";

        $this->sql = $sql;
        return $this->sql;
    }

    function insert_recipe($data) {
        $sql = "
            INSERT INTO RECIPES (
            ID, NAME, IMAGE, TYPE, INSTRUCTIONS, INGREDIENTS, NOTES, 
            COMMENTS, NUTRITION) 
            VALUES (NULL, $data)";

        $this->sql = $sql;
        return $this->sql;
    }

    function get_all_recipes() {
        $sql = "SELECT * from recipes";

        $this->sql = $sql;
        return $this->sql;
    }

}
