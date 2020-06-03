<?php

    include "connection.php";
    include_once "person.php";


    class login extends person
    {
        //Login
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
    }