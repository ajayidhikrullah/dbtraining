<?php
include "contact_form/classes/dbh.classes.php";
class Admin extends Dbh{
    public function getUsers(){

        $sql = "SELECT * FROM contacts ORDER BY id DESC;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $contacts = $stmt->fetchAll();
        // var_dump($contacts);exit();
        return $contacts;       
}



}