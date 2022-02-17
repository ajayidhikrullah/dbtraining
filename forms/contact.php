<?php

session_start();

include('../assets/vendor/php-email-form/db.php');

 /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address

  // $receiving_email_address = 'contact@example.com';
  // $receiving_email_address = 'info@zainservicesltd.co.uk';



  // grab the data from users in frontend


//instantiate SignUpController class goes

//Run error handlers and user signup

//going back to landing page or front page












try{

    $fullname = $_POST['fullName'];
    $email = $_POST['email'];
    $sbj = $_POST['subject'];
    $msg = $_POST['message'];


    $sql = "INSERT INTO contact (fullName, email, `subject`, `message`) VALUES ('$fullname', '$email', '$sbj', '$msg');";
    

  if ($dbCon->query($sql) === TRUE) {
      echo header("Location:http://localhost/z_serv");
      $_SESSION['contact_submitted'] = true;

    } else {
      echo 'Error inserting data ' . $sql . '<br>' . $dbCon->error;
    }

  $dbCon->close();

}
  catch (\Exception $e){
  var_dump('oops!!!!!!!!!');exit;
}
    
?>
