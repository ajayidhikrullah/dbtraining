<?php
    class ContactUs extends Dbh{
        protected function setContact($fullName, $email, $subject, $message){
            $stmt = $this->connect()->prepare('INSERT INTO contacts (fullName, email, `subject`, `message`) VALUES (?, ?, ?, ?);');

            if(!$stmt->execute(array($fullName, $email, $subject, $message))){
                $stmt = null;
                // header('Location: ../index.php?error=failedO');
                echo "<div class='btn btn-danger'>Error submitting your data. Few seconds...</div>";
                exit();
            }
            $stmt = null;
    }
}


