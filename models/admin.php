<?php

    include "connection.php";
    include_once "person.php";

    class admin extends person
    {
        public function view_Msg()
        {
            $sql = 'SELECT `is_member`,`name`, `email`, `message` FROM `contact`';
            $result = mysqli_query($GLOBALS['conn'], $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr class=\"filterr\">";
                echo "<td class=\"filterr\">" . $row['name'] . "</td>";
                echo "<td class=\"filterr\">" . $row['email'] . "</td>";
                echo "<td class=\"filterr\">" . $row['message'] . "</td>";
                switch ($row['is_member']){
                    case 0:
                        echo '<td class="filterr">➖</td>';
                        break;
                    case 1:
                        echo '<td class="filterr">✅</td>';
                        break;
                }
                echo "</tr>";
            }
        }
        
        //adding members by admin ##Same Logic used by the Register Form in Visior view##
        public function Add_member($mfname, $mlname, $m_email, $m_password, $m_birthdate, $m_phone, $m_sport)
        {
            $add_query = "INSERT INTO `user`(`fname`, `lname`, `email`, `password`, `birthdate`, `phone`, `m_sport`) 
        VALUES ('$mfname', '$mlname','$m_email', '$m_password', '$m_birthdate' , '$m_phone' , '$m_sport')";
            $val = mysqli_query($GLOBALS['conn'], $add_query);
        }

        //creating new admins
        public function Add_admin($fname, $lname, $phone, $salary, $email, $password)
        {
            $add_query = "INSERT INTO `admin`(`ad_fname`, `ad_lname`, `ad_phone`, `ad_salary`, `ad_email`, `ad_password`)
      VALUES ('$fname' , '$lname' , '$phone' , '$salary' , '$email' , '$password')";
            $val = mysqli_query($GLOBALS['conn'], $add_query);
        }
    }
    ?>
