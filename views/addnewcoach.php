<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add New Coach</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script>
        function bob() {
            alert('Coach registered successfully');
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
            <li>
                <a href="addnewadmin.php"><span>A</span>dd new admin</a>
            </li>
            <li class="selected">
                <a href="addnewcoach.php"><span>A</span>dd new coach </a>
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
<div class="body" style="margin-bottom: -10px">
    <?php
        include '../controllers/cn.php';
    ?>
    <div>
        <div>
            <div>
                <div class="application">
                    <h2>add new coach </h2>

                    <form action='index_admin.php?do=add_new_coach' method='post'>
                        <div style="margin-left: 225px">
                            <table>
                                <tr>
                                    <td><label for="fname"><span>F</span>irst name:</label></td>
                                    <td><input type="text" name="co_fname" required></td>
                                </tr>
                                <tr>
                                    <td><label for="lname"><span>L</span>ast name:</label></td>
                                    <td><input type="text" name="co_lname" required></td>
                                </tr>
                                <tr>
                                    <td><label for="co_sport"><span>S</span>port:</label></td>
                                    <td>
                                        <select name="co_sport" class="custom-select"
                                                style="width: 250px; background-color:#9c9575">
                                            <option value="Swimming">Swimming</option>
                                            <option value="Football">Football</option>
                                            <option value="Fitness">Fitness</option>
                                        </select>
                                    </td>
                                </tr>
                                <td><label for="email"><span>E</span>mail:</label></td>
                                <td><input type="email" name="co_email" required></td>
                                </tr>
                                <tr>
                                    <td><label for="password"><span>P</span>assword:</label></td>
                                    <td><input type="password" name="co_password" required></td>
                                </tr>
                                <tr>
                                    <td><label for="salary"><span>S</span>alary:</label></td>
                                    <td><input type="numbers" name="co_salary" required></td>
                                </tr>
                            </table>
                            <input type="submit" id="submit" value="Register" style="margin-left: 200px;">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>

</body>
</html>
