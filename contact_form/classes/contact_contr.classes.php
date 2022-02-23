<?php
session_start();
    class ContactUsContr extends ContactUs{
        private $fullName;
        private $email;
        private $subject;
        private $message;

        public function __construct($fullName, $email, $subject, $message){
            $this->fullName = $fullName;
            $this->email = $email;
            $this->subject = $subject;
            $this->message = $message;
        }


        public function contactError(){
            if ($this->emptyInput()){
                return true;
                exit();
            }

            if($this->invalidEmail() == false){
                //echo 'invalid email ooo';
            // header('Location: ../index.php?error=invalidEmail');
            }

            $this->setContact($this->fullName, $this->email, $this->subject, $this->message);
        }

        //error handler to check for empty input
        private function emptyInput(){
            $result = false;
            if(empty($this->fullName) || empty($this->email) || empty($this->subject) || empty($this->message)){
                $result = true;
            }
            return $result;
        }

        //error handler for invalid email
        private function invalidEmail(){
            $result;
            if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }

    }


?>