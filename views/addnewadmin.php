<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add new Admin</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script>
        function bob() {
            alert('Admin registered succefully');
        }
    </script>
</head>
<body>
<div class="header">
    <div>
        <a href="index_admin.php" id="logo"><img src="images/logo.png" alt="logo"></a>
        <ul>
            <li>
                <a href="index_admin.php"><span>H</span>ome</a>
            </li>
            <li class="selected">
                <a href="addnewadmin.php"><span>A</span>dd new admin</a>
            </li>
            <li>
                <a href="addnewmember.php"><span>A</span>dd new Member </a>
            </li>
            <li>
                <a href="admin_messages.php"><span>v</span>iew <span>M</span>essages</a>
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
    <?php
        include '../controllers/cn.php';
    ?>
    <div>
        <div>
            <div>
                <div class="application">
                    <h2>add new admin </h2>

                    <form action='index_admin.php?do=add_new_admin' method='post'>
                        <div>
                            <table>
                                <tr>
                                    <td><label for="fname"><span>F</span>irst name:</label></td>
                                    <td><input type="text" name="ad_fname" required></td>
                                </tr>
                                <tr>
                                    <td><label for="lname"><span>L</span>ast name:</label></td>
                                    <td><input type="text" name="ad_lname" required></td>
                                </tr>
                                <tr>
                                    <td><label for="tel-number"><span>T</span>el. <span>N</span>umber:</label></td>
                                    <td><input type="numbers" name="ad_phone" required></td>
                                </tr>
                                <tr>
                                    <td><label for="salary"><span>S</span>alary:</label></td>
                                    <td><input type="numbers" name="ad_salary" required></td>
                                </tr>
                                <tr>
                                    <td><label for="email"><span>E</span>mail <span>A</span>ddress:</label></td>
                                    <td><input type="email" name="ad_email" required></td>
                                </tr>
                                <tr>
                                    <td><label for="password"><span>P</span>ass. <span>W</span>ord:</label></td>
                                    <td><input type="password" name="ad_password" required></td>
                                </tr>
                            </table>
                            <input type="submit" id="submit" value="Register">
                        </div>
                    </form>
                    <br>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>

</body>

</html>
