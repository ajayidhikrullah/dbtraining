<?php
session_start();


// try{

    if(isset($_POST['submit'])){    
        // grab d data 
        $fullname = $_POST['fullName'];
        $email = $_POST['email'];
        $sbj = $_POST['subject'];
        $msg = $_POST['message'];

//instantiate the ContactUsController class

include "../classes/dbh.classes.php";
include '../classes/contact.classes.php';
include '../classes/contact_contr.classes.php';

$contactus = new ContactUsContr($fullname, $email, $sbj, $msg);



// run error

$contactus->contactError();



// goback to landing page if no error
header('Location: ../../index.php?');
    }
?>