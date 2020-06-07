<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rate Best Trainee</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div class="header">
    <div>
        <a href="index_coach.php" id="logo"><img src="images/logo.png" alt="logo"></a>
        <ul>
            <li>
                <a href="index_coach.php"><span>H</span>ome</a>
            </li>
            <li class="selected">
                <a href="assign_coach.php"><span>Assign</span> Best Trainee</a>
            </li>
            <li>
                <a href="list_coach.php"><span>T</span>rainees List</a>
            </li>
            <li>
                <a href="contact_coach.php"><span>C</span>ontact Management</a>
            </li>
            <br><br>
            <li style='margin-left: -590px; margin-top: 8px'>
                <a href="search_coach.php"><span>T</span>ime-table</a>
            </li>
            <?php
                session_start();
                if (isset($_SESSION['email']))
                    echo "<li style='margin-left: -450px; margin-top: 8px'><a href='../models/logout.php'>Logout</a></li> ";
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
                    <h2>Rate the BEST Trainee</h2>
                    <form action='assign_coach.php?do=rate' method='post' >
                        <div style="margin-bottom: -20px">
                            <table>
                                <tr>
                                    <td><label for="b_email"><span>E</span>-Mail:</label></td>
                                    <td><input type="email" name="b_email" required></td>
                                </tr>
                                <tr>
                                    <td><label for="m_sport"><span>S</span>port:</label></td>
                                    <td>
                                        <select name="b_sport" class="custom-select"
                                                style="width: 250px; background-color:#9c9575">
                                            <option value="" disabled selected>Select Sport</option>
                                            <option value="Swimming">Swimming</option>
                                            <option value="Football">Football</option>
                                            <option value="Fitness">Fitness</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <input type="submit" value="Rate BEST" id="application-submit" style="margin-left: 150px">
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