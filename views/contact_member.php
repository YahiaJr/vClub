<?php
    include '../models/app_user.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Get Connected</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<div class="header">
    <div>
        <a href="index_members.php" id="logo"><img src="images/logo.png" alt="logo"></a>
        <ul>
            <li>
                <a href="index_members.php"><span>H</span>ome</a>
            </li>
            <li class="selected">
                <a href="contact_member.php"><span>C</span>ontact Management</a>
            </li>
            <li>
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

    <?php
        include '../controllers/cn.php';
    ?>
    <div class="contact">
        <div>
            <div>
                <div class="contact">
                    <h2>Get in Touch with our Admins</h2>
                    <div class="address">
                    </div>
                    <h3><span>F</span>or <span>A</span>ny <span>I</span>nquiries, <span>P</span>lease <span>F</span>ill
                        <span>o</span>ut <span>T</span>he <span>F</span>orm <span>B</span>elow.</h3>
                    <form action='contact_member.php?do=contact' method='POST'>
                        <table>
                            <tr>
                                <td><label for="c_name"><span>N</span>ame:</label></td>
                                <td><input type="text" name="c_name" required></td>
                            </tr>
                            <tr>
                                <td><label for="c_email"><span>E</span>mail <span>A</span>ddress:</label></td>
                                <td><input type="email" name="c_email" required></td>
                            </tr>
                            <tr>
                                <td><label for="c_message"><span>M</span>essage:</label></td>
                                <td><textarea name="c_message" cols="30" rows="10" required></textarea></td>
                            </tr>
                        </table>
                        <input type="submit" value="Send" id="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>

</body>

</html>