<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Membership Application</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div class="header">
    <div>
        <a href="index.php" id="logo"><img src="images/logo.png" alt="logo"></a>
        <ul>
            <li>
                <a href="index.php"><span>H</span>ome</a>
            </li>
            <li>
                <a href="contact.php"><span>C</span>ontact</a>
            </li>
            <li>
                <a href="about.php"><span>A</span>bout</a>
            </li>
            <li class="selected">
                <a href="application.php"><span>R</span>egister</a>
            </li>
            <li>
                <a href="staff.php"><span>L</span>ogin</a>
            </li>
        </ul>
    </div>
</div>
<div class="body">
    <div class="applications">
        <div>
            <div>
                <div class="application">
                    <h2>Membership Application</h2>
                    <form action='index.php?do=login' method='post'>
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