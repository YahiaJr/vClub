<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home - Club System Website</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div class="header">
    <div>
        <a href="index_admin.php" id="logo"><img src="images/logo.png" alt="logo"></a>
        <ul>
            <li class="selected">
                <a href="index_admin.php"><span>H</span>ome</a>
            </li>
            <li>
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
        <div class="featured">
            <img src="images/admin.png" alt="" width="596px" height="375px">
            <div>
                <div>
                    <h3><span>R</span>esume <span>M</span>anagement <span>T</span>asks!</h3>
                    <p><strong>
                            Continue Adding Your admins colleagues and our club members in order to complete our
                            database processes.
                        </strong>
                    </p>
                    <div style="margin:0 75px">
                        <ul>
                            <li style="margin:-50px 0"><a href="addnewadmin.php"><span>A</span>dd new Admin</a></li>
                            <li style="margin:-10px 0"><a href="addnewmember.php"><span>A</span>dd new Member </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div>
                    <div class="section">
                        <h2><em>Next Task:</em> Arrange The Events.</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.
                        </p>
                        <ul>
                            <li>
                                <p>
                                    Lorem Ipsum is dummy text.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Lorem Ipsum is dummy text.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Lorem Ipsum is dummy text.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Lorem Ipsum is dummy text.
                                </p>
                            </li>
                        </ul>
                        <ul class="last">
                            <li>
                                <p>
                                    Lorem Ipsum is dummy text.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Lorem Ipsum is dummy text.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Lorem Ipsum is dummy text.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Lorem Ipsum is dummy text.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3>UPCOMING EVENTS</h3>
                        <ul>
                            <li>
                                <div>
                                    <span>11/10/2011</span>
                                    <p>
                                        This is just a place holder, so you can see what the site would look like.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <span>11/19/2011</span>
                                    <p>
                                        Praesent quis nisl in velit imper diet suscipit a id quam.
                                    </p>
                                </div>
                            </li>
                            <li class="last">
                                <div>
                                    <span>11/19/2011</span>
                                    <p>
                                        Nullam vulputate elementum consequat. Fusce leo felis, bibendum.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>
</body>
</html>