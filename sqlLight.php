<?php


function createTable($db){
    
    $sql = 
       "CREATE TABLE RECIPE(
       ID              INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
       NAME            TEXT    NOT NULL,
       TYPE            TEXT    NOT NULL,
       INSTRUCTIONS    TEXT    NOT NULL,
       INGREDIENTS     TEXT    NOT NULL,
       NOTES           TEXT,
       COMMENTS        TEXT,
       NUTRITION       TEXT)";


    $response = $db->exec($sql);
    
    if(!$response){
       echo $db->lastErrorMsg();
    } 
    else {
       echo "Table created successfully\n";
    }
    
    return true;
}

function insert($db, $data){
    
    $sql = "INSERT INTO RECIPE (ID, NAME, TYPE, INSTRUCTIONS, INGREDIENTS, NOTES, COMMENTS, NUTRITION)
        VALUES (NULL,$data);";
    
    funcEchoOutput($sql);
    
    $response = $db->exec($sql);
    
    
    
//      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
//      VALUES (1, 'Paul', 32, 'California', 20000.00 );
//
//      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
//      VALUES (2, 'Allen', 25, 'Texas', 15000.00 );VAULES
//
//      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
//      VALUES (3, 'Teddy', 23, 'Norway', 20000.00 );
//
//      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
//      VALUES (4, 'Mark', 25, 'Rich-Mond ', 65000.00 );
    
}
