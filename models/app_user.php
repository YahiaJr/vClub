<?php
    include "connection.php";
    include_once "person.php";
    
    class App_user extends person
    {

        //Filtering_Time-Table
        public function filter()
        {
            $sql = 'SELECT `game`, `day`, `time` FROM `time_table` WHERE game = "' . $_POST['filtertt'] . '"';
            $result = mysqli_query($GLOBALS['conn'], $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr class=\"filterr\">";
                echo "<td class=\"filterr\">" . $row['game'] . "</td>";
                echo "<td class=\"filterr\">" . $row['day'] . "</td>";
                echo "<td class=\"filterr\">" . $row['time'] . "</td>";
                echo "</tr>";
            }
        }

        public function no_Filter()
        {
            $sql = 'SELECT `game`, `day`, `time` FROM `time_table`';
            $result = mysqli_query($GLOBALS['conn'], $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr class=\"filterr\">";
                echo "<td class=\"filterr\">" . $row['game'] . "</td>";
                echo "<td class=\"filterr\">" . $row['day'] . "</td>";
                echo "<td class=\"filterr\">" . $row['time'] . "</td>";
                echo "</tr>";
            }
        }

        //Contact Form logic #can be used for any contact#
        public function Add_message($is_member, $c_name, $c_email, $c_message)
        {
            $contact = "INSERT INTO `contact`(`is_member`,`name`, `email`, `message`) 
        VALUES ('$is_member','$c_name', '$c_email','$c_message')";
            $val = mysqli_query($GLOBALS['conn'], $contact);
            echo '<script>alert("Your message received successfully!\n We\'ll be in touch soon.");</script>';
        }
    }
