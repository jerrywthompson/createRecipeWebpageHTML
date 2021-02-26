<?php


class DB_Connect {
    
//    public $database;

    function __construct($dbFile) {
        $database = new SQLite3($dbFile); 
        return $database;
//        $this->$database;
    }
    
    function getDatabase() {
        return $this->database;
    }
}


//class pi {
//      public static $value = "ajdfklj";
//      
////        function __construct($dbFile) {
////        $db = new SQLite3($dbFile);        
////        $this->database = $db;
//////        $value = new SQLite3($dbFile);
////          
////    }
//  
//
//    echo pi::$value;
//   
//  
//}



?>
