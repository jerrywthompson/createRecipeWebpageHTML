<?php


function createTable(){
    
//    echo "globals: ";
//            var_dump($GLOBALS);
//    
//    $sql = 
//       "CREATE TABLE if not exists RECIPE(
//       ID               INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
//       NAME             TEXT    NOT NULL,
//       IMAGE_PATH       TEXT,
//       TYPE             TEXT    NOT NULL,
//       INSTRUCTIONS     TEXT    NOT NULL,
//       INGREDIENTS      TEXT    NOT NULL,
//       NOTES            TEXT,
//       COMMENTS         TEXT,
//       NUTRITION        TEXT)";
    
    
 

//
//    $response = $db->exec($sql);
//    
//    if(!$response){
//       echo $db->lastErrorMsg();
//    } 
//    else {
//       echo "Table created successfully\n";
//    }
//    
    return true;
}

//function insert($db, $data){
//    
//    $sql = "INSERT INTO RECIPE (ID, NAME, TYPE, IMAGE_PATH, INSTRUCTIONS, 
//        INGREDIENTS, NOTES, COMMENTS, NUTRITION) VALUES (NULL, $data);";
//    
//    funcEchoOutput($sql);
//    
//    $response = $db->exec($sql);
//    
//}
//
//function query($db, $sql){
//    
//    $results = $db->query($sql);
//    
//    while($row = $results->fetchArray(SQLITE3_ASSOC)) {
//        
////            var_dump($row);
//
//            funcEchoOutput($row);
//        
////       echo "ID = ". $row['ID'] . "\n";
////       echo "NAME = ". $row['NAME'] ."\n";
////       echo "ADDRESS = ". $row['ADDRESS'] ."\n";
////       echo "SALARY = ".$row['SALARY'] ."\n\n";
//    }
////    echo "Operation done successfully\n";
////   $db->close();
//    
//
//    
//}
