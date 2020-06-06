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
    </style>
    <meta charset="UTF-8">
    <title>Search - Coach Access</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div class="header">
    <div>
        <a href="index_coach.php" id="logo"><img src="images/logo.png" alt="logo"></a>
        <ul>
            <li>
                <a href="index_admin.php"><span>H</span>ome</a>
            </li>
            <li>
                <a href="addnewadmin.php"><span>A</span>dd new admin</a>
            </li>
            <li>
                <a href="addnewcoach.php"><span>A</span>dd new coach </a>
            </li>
            <li>
                <a href="addnewmember.php"><span>A</span>dd new Member </a>
            </li>
            <li class="selected">
                <a href="admin_messages.php"><span>M</span>essages </a>
            </li>
            <?php
                session_start();
                if (isset($_SESSION['email']))
                    echo " <br><br> <li style='margin-left: -470px; margin-top: 8px'><a href='../models/logout.php'>Logout</a></li> ";
                echo '<li class="user-profile" style="margin-left: -350px; margin-top: 8px"><a href="#">' . $_SESSION['email'] . '</a></li>';
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Messages</th>
                        <th>Memeber</th>
                    </tr>
                    <?php
                        include '../models/admin.php';
                        $op = new admin();
                        $op->view_Msg();

                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include './footer.php'; ?>
</body>
</html>