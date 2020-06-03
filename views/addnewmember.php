<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Membership Application</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div class="header">
    <div>
        <a href="index_admin.php" id="logo"><img src="images/logo.png" alt="logo"></a>
        <ul>
            <li>
                <a href="index_admin.php"><span>H</span>ome</a>
            </li>
            <li>
                <a href="addnewadmin.php"><span>A</span>dd new admin</a>
            </li>
            <li class="selected">
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
    <div class="applications">
        <div>
            <div>
                <div class="application">
                    <h2>Admin Access: Membership Application</h2>
                    <form action='index_admin.php?do=login' method='post'>
                        <div>
                            <table>
                                <tr>
                                    <td><label for="fname"><span>F</span>irst Name:</label></td>
                                    <td><input type="text" name="fname" required></td>
                                </tr>
                                <tr>
                                    <td><label for="lname"><span>L</span>ast name:</label></td>
                                    <td><input type="text" name="lname" required></td>
                                </tr>
                                <tr>
                                    <td><label for="email"><span>E</span>-Mail:</label></td>
                                    <td><input type="email" name="email" required></td>
                                </tr>
                                <tr>
                                    <td><label for="m_sport"><span>S</span>port:</label></td>
                                    <td>
                                        <select name="m_sport" class="custom-select"
                                                style="width: 250px; background-color:#9c9575">
                                            <option value="Swimming">Swimming</option>
                                            <option value="Football">Football</option>
                                            <option value="Fitness">Fitness</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <td><label for="password"><span>P</span>assword:</label></td>
                                    <td><input type="password" name="password" required></td>
                                </tr>
                                <tr>
                                    <td><label for="birthdate"><span>B</span>irthdate:</label></td>
                                    <td><input type="date" name="birthdate" required></td>
                                </tr>
                                <tr>
                                    <td><label for="phone"><span>P</span>hone <span>N</span>umber:</label></td>
                                    <td><input type="number" name="phone" required></td>
                                </tr>
                            </table>
                        </div>
                        <input type="submit" value="Sign Up" id="application-submit">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>

</body>

</html>