<?php

    include "connection.php";
    include_once "person.php";


    class coach extends App_user
    {
        //adding filter view for members
        public function mem_Filter()
        {
            $sql = 'SELECT `fname`, `lname`, `email`, `phone`, `m_sport`, `m_best` FROM `user` WHERE m_sport = "' . $_POST['filtermm'] . '"';
            $result = mysqli_query($GLOBALS['conn'], $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr class=\"filterr\">";
                echo "<td class=\"filterr\">" . $row['fname'] . "</td>";
                echo "<td class=\"filterr\">" . $row['lname'] . "</td>";
                echo "<td class=\"filterr\">" . $row['email'] . "</td>";
                echo "<td class=\"filterr\">" . $row['phone'] . "</td>";
                echo "<td class=\"filterr\">" . $row['m_sport'] . "</td>";
                switch ($row['m_best']) {
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
        //removing the filter and view all data
        public function mem_No_Filter()
        {
            $sql = 'SELECT `fname`, `lname`, `email`, `phone`, `m_sport`, `m_best` FROM `user`';
            $result = mysqli_query($GLOBALS['conn'], $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr class=\"filterr\">";
                echo "<td class=\"filterr\">" . $row['fname'] . "</td>";
                echo "<td class=\"filterr\">" . $row['lname'] . "</td>";
                echo "<td class=\"filterr\">" . $row['email'] . "</td>";
                echo "<td class=\"filterr\">" . $row['phone'] . "</td>";
                echo "<td class=\"filterr\">" . $row['m_sport'] . "</td>";
                switch ($row['m_best']) {
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
        
        //Assign best member
        public function rate_Best($b_email, $b_sport)
        {
            $sql = 'SELECT `email`, `m_sport`, `m_best` FROM `user`  WHERE `email` = "' . $b_email . '"';
            $val = mysqli_query($GLOBALS['conn'], $sql);
            $row = mysqli_fetch_array($val);
            if($row['m_sport'] != $b_sport) {
                echo '<script>alert("Please check Your Data Carefully!");</script>';
            }else{
                $update = 'UPDATE `user` SET `m_best` = 1 WHERE `email` = "' . $b_email . '" AND `m_sport` = "' . $b_sport . '"';
                mysqli_query($GLOBALS['conn'], $update);
                echo '<script>alert("Trainee has been rated successfully!");</script>';
            }
        }
    }