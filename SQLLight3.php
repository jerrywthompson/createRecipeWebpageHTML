<?php

include_once 'echoOutput.php';
include_once 'SQL.php';

class SQLLight3 {

    public $db;

    function __construct() {
        $dbFile = 'db/recipe.db';
        $database = new SQLite3($dbFile);
        $this->db = $database;
    }

    public function execute($sql) {

        $db = $this->db;

        $response = $db->exec($sql);

        if (!$response) {
            echo $db->lastErrorMsg();
        } else {
            echo "Command successfully executed:\n  $sql\n";
        }
    }

    function insert($sql) {

        $db = $this->db;

        $response = $db->exec($sql);

        if (!$response) {
            echo $db->lastErrorMsg();
        } else {
            printf("Command successfully executed:</br>  $sql\n");
        }
    }

    function query($sql) {

        $db = $this->db;

        $results = $db->query($sql);

        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {

            funcEchoOutput($row);

            //       echo "ID = ". $row['ID'] . "\n";
            //       echo "NAME = ". $row['NAME'] ."\n";
            //       echo "ADDRESS = ". $row['ADDRESS'] ."\n";
            //       echo "SALARY = ".$row['SALARY'] ."\n\n";
        }
    }

    function close() {

        $db = $this->db;
        $db->close();
    }

}
