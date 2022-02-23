<?php

class Dbh{

    private $dbServername = 'localhost';
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName = "dabartraining_db";

    protected function connect(){
        

     $dbCon = 'mysql:host=' . $this->dbServername . ';dbname=' . $this->dbName;
        $pdo = new PDO($dbCon, $this->dbUsername, $this->dbPassword);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    
    }


}
?>