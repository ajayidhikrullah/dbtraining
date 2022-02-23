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
        // whenever the contact error method returns true, lets create or set an error session
        if($contactus->contactError()){
            $_SESSION['InputFieldEmpty'] = true;
        }else{
            // set success message to the session
            $_SESSION['contact_submitted'] = true;
        }
        // goback to landing page
        header('Location: ../../index.php#contact');
    }
?>