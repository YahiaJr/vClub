<?php
    include "../models/admin.php";
    include_once "../models/person.php";
    include_once "../models/login.php";
    include_once "../models/app_user.php";
    include_once "../models/coach.php";

    if ($_GET) {

//Login_Logic
        if ($_GET['do'] == 'logined') {
            
            //Member
            if (isset($_POST['select'])) {
                if ($_POST['select'] == 'Member') {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $UserInfo = new login();
                    $check = $UserInfo->login_member($email, $password);
                    if ($check) {
                        session_start();
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        header("location:index_members.php");
                    } else {
                        header("location:index.php");
                    }
                }
            }
            
            //Admin
                if (isset($_POST['select'])) {
                    if ($_POST['select'] == 'Admin') {
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $UserInfo = new login();
                        $check = $UserInfo->login_admin($email, $password);
                        if ($check) {
                            session_start();
                            $_SESSION['email'] = $email;
                            $_SESSION['password'] = $password;
                            header("location:index_admin.php");
                        } else {
                            header("location:index.php");
                        }
                    }
                }

            //Coach
            if (isset($_POST['select'])) {
                if ($_POST['select'] == 'Coach') {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $UserInfo = new login();
                    $check = $UserInfo->login_coach($email, $password);
                    if ($check) {
                        session_start();
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        header("location:index_coach.php");
                    } else {
                        header("location:index.php");
                    }
                }
            }
        }
//Visitor_Logic
        //Add_Contact_Messages##
        if ($_REQUEST['do'] == 'contact') {
            $c_name = $_POST['c_name'];
            $c_email = $_POST['c_email'];
            $c_message = $_POST['c_message'];
            ##Differentiate Between Visitors & Members
            if (isset($_SESSION['email'])) {
                $is_member = 1;
            } else {
                $is_member = 0;
            }
            $op = new App_user();
            $op->Add_message($is_member, $c_name, $c_email, $c_message);
        }

        //Filtering_Time-Table##
        if (isset($_POST['filtertt'])) {
            $op = new App_user();
            $op->filter();
        }

//Admin_Logic
        //Adding New Users
            ##Add_NEW_MEMBERS## // Same Logic used by (admin and visitor member application)
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
    
            ##ADD_NEW_ADMINS##
            if ($_GET['do'] == 'add_new_admin') {
                $fname = $_POST['ad_fname'];
                $lname = $_POST['ad_lname'];
                $phone = $_POST['ad_phone'];
                $salary = $_POST['ad_salary'];
                $email = $_POST['ad_email'];
                $pass = $_POST['ad_password'];
    
                $op = new admin();
                $op->Add_admin($fname, $lname, $phone, $salary, $email, $pass);
            }
            
        ##ADD_NEW_Coaches##
        if ($_GET['do'] == 'add_new_coach') {
            $fn = $_POST['co_fname'];
            $ln = $_POST['co_lname'];
            switch ($_POST['co_sport']) {
                case 'Swimming':
                    $co_sport = "Swimming";
                    break;
                case 'Football':
                    $co_sport = "Football";
                    break;
                case 'Fitness':
                    $co_sport = "Fitness";
                    break;
            }
            $email = $_POST['co_email'];
            $pass = $_POST['co_password'];
            $salary = $_POST['co_salary'];
            
            $op = new admin();
            $op->Add_coach($fn, $ln, $co_sport, $email, $pass, $salary);
        }

//Coach_Logic
    ##List_Members##
    if (isset($_POST['filtermm'])) {
        $op = new coach();
        $op->mem_Filter();
    }

    ##Rate_Best_Trainee
    if ($_GET['do'] == 'rate') {
        $b_email = $_POST['b_email'];
        switch ($_POST['b_sport']) {
            case 'Swimming':
                $b_sport = "Swimming";
                break;
            case 'Football':
                $b_sport = "Football";
                break;
            case 'Fitness':
                $b_sport = "Fitness";
                break;
        }
        $op = new coach();
        $op->rate_Best($b_email, $b_sport);
    }
}