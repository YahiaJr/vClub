<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            overflow-x: hidden
        }

        .filtert {
            width: 70%;
            border-collapse: collapse;
            font-size: 18px;
            margin: 20px auto;
        }

        .filtert, .filterr, th {
            border: 3px solid #252525;
            padding: 5px;
            text-align: center;
            color: #333;
            text-transform: capitalize
        }

        p {
            position: absolute;
            right: 60px;
            font-weight: bold;
            font-size: 20px;
            color: #666
        }

        form input[type="submit"] {
            width: auto;
            margin-top: 5px;
            border-radius: 5px;
            font-weight: bold;
            font-style: oblique;
            background-color: #7c79d7;
            /*border: px solid #333;*/
            color: #fff;
            /*font-size: 17px;*/
        }
    </style>
    <meta charset="UTF-8">
    <title>Search - Member Access</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<div class="header">
    <div>
        <a href="index_members.php" id="logo"><img src="images/logo.png" alt="logo"></a>
        <ul>
            <li>
                <a href="index_members.php"><span>H</span>ome</a>
            </li>
            <li>
                <a href="contact_member.php"><span>C</span>ontact Management</a>
            </li>
            <li class="selected">
                <a href="search_member.php"><span>T</span>ime-table</a>
            </li>
            <?php
                session_start();
                if (isset($_SESSION['email']))
                    echo " <li><a href='../models/logout.php'>Logout</a></li> ";
                echo '<li class="user-profile"><a href="#">' . $_SESSION['email'] . '</a></li>';
            ?>
        </ul>
    </div>
</div>
<div class="body">
    <div>
        <div>
            <div>
                <table class="filtert">
                    <tr class="filterr">
                        <th> Game</th>
                        <th> Day</th>
                        <th> Time</th>
                    </tr>
                    <?php
                        include '../controllers/cn.php';
                        if(isset($_POST['filtertt'])==0 || $_POST['filtertt']=="remove_Filter"){
                            $op = new App_user();
                            $op->no_Filter();
                        }
                    ?>
                </table>
                <form style="margin-left:auto;margin-right:auto;text-align: center;margin-top: auto;"
                      action="search_member.php?do=filter" method="post">
                    <select class="custom-select" id="filtertt" name="filtertt"
                            style="background-color:#6B755A">
                        <option value="" disabled selected>Filter</option>
                        <option value="Fitness">Fitness</option>
                        <option value="Football">Football</option>
                        <option value="Swimming">Swimming</option>
                        <option value="remove_Filter">Remove Filter</option>
                    </select><br>
                    <input type="submit" value="Filter Now">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include './footer.php'; ?>
</body>

</html>
