<?php
    include_once "../models/person.php";
    include_once "../models/login.php";

    if ($_GET) {
        //Add_Contact_Messages##
        if ($_REQUEST['do'] == 'contact') {
            $c_name = $_POST['c_name'];
            $c_email = $_POST['c_email'];
            $c_message = $_POST['c_message'];
            ##Differentiate Between Visitors & Logined Users
            if (isset($_SESSION['email'])) {
                $is_member = 1;
            } else {
                $is_member = 0;
            }
            $op = new App_user();
            $op->Add_message($is_member, $c_name, $c_email, $c_message);
        }
    }