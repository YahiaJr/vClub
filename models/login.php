<?php

    include "connection.php";
    include_once "person.php";


    class login extends person
    {
        //member_login_logic
        public function login_member($email, $password)
        {

            $this->email = $email;
            $this->password = $password;

            $sql = "SELECT * FROM `user` WHERE email='$this->email' AND password ='$this->password' ";
            $result = mysqli_query($GLOBALS['conn'], $sql);

            if (mysqli_num_rows($result) > 0) {
                return $result;
            } else {
                return false;
            }
        }
        
        //admin_login_logic
        public function login_admin($email, $password)
        {

            $this->email = $email;
            $this->password = $password;

            $sql = "SELECT * FROM `admin` WHERE ad_email='$this->email' AND ad_password ='$this->password' ";
            $result = mysqli_query($GLOBALS['conn'], $sql);

            if (mysqli_num_rows($result) > 0) {
                return true;
            } else {
                return false;
            }
        }

        //coach_login_logic
        public function login_coach($email, $password)
        {
            $this->email = $email;
            $this->password = $password;

            $sql = "SELECT * FROM `coach` WHERE co_email='$this->email' AND co_password ='$this->password' ";
            $result = mysqli_query($GLOBALS['conn'], $sql);

            if (mysqli_num_rows($result) > 0) {
                return true;
            } else {
                return false;
            }
        }
    }
    ?>