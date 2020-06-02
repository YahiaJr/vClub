<?php

    include "connection.php";
    include_once "person.php";


    class App_user extends person
    {

        //Contact Form logic #can be used for any contact form in the future#
        public function Add_message($is_member, $c_name, $c_email, $c_message)
        {
            $contact = "INSERT INTO `contact`(`is_member`,`name`, `email`, `message`) 
        VALUES ('$is_member','$c_name', '$c_email','$c_message')";
            $val = mysqli_query($GLOBALS['conn'], $contact);
            echo '<script>alert("Your message received successfully!\n We\'ll be in touch soon.");</script>';
        }
    }
