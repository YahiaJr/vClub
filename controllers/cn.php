<?php
    include "../models/admin.php";
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

        //Add a member to database
        if ($_GET['do'] == 'login') {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $birthdate = $_POST['birthdate'];
            $phone = $_POST['phone'];
            //$m_sport = $_POST['m_sport'];
            switch ($_POST['m_sport']) {
                case 'Swimming':
                    $m_sport = "Swimming";
                    break;
                case 'Football':
                    $m_sport = "Football";
                    break;
                case 'Fitness':
                    $m_sport = "Fitness";
                    break;
            }
            $op = new admin();
            $op->Add_member($fname, $lname, $email, $password, $birthdate, $phone, $m_sport);
        }
    }