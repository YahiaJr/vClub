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
        <a href="index_coach.php" id="logo"><img src="images/logo.png" alt="logo"></a>
        <ul>
            <li class="selected">
                <a href="index_coach.php"><span>H</span>ome</a>
            </li>
            <li>
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
    <div>
        <div class="featured">
            <?php
                $sql = 'SELECT `co_sport` FROM `coach` WHERE `co_email` = "' . $_SESSION['email'] . '"';
                if ($result = mysqli_query($GLOBALS['conn'], $sql)) {
                    $row = mysqli_fetch_assoc($result);
                    switch ($row['co_sport']) {
                        case "Swimming":
                            echo '<img src = "images/coach_Swimming.jpg" alt = "" width = "596px" height = "375px" >';
                            break;
                        case "Football":
                            echo '<img src = "images/coach_Football.jpg" alt = "" width = "596px" height = "375px" >';
                            break;
                        case "Fitness":
                        default:
                            echo '<img src = "images/coach_Fitness.jfif" alt = "" width = "596px" height = "375px" >';
                            break;
                    }
                }
            ?>
            <div>
                <div>
                    <h3><span>R</span>ate <span>Y</span>our <span>T</span>rainees!</h3>
                    <p><strong>
                            Continue Rating Your Trainees and don't forget to view your updated trainees list in
                            order to be up to date with our Newest members all the time.
                        </strong>
                    </p>
                    <div style="margin:-20px 75px">
                        <ul>
                            <li style="margin:-50px 0"><a href="assign_coach.php"><span>C</span>hoose Best Trainee</a></li>
                            <li style="margin:-10px 0"><a href="list_coach.php"><span>V</span>iew Trainees List </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div>
                    <div class="section">
                        <h2><em>Next Task:</em> Choose Best Trainee.</h2>
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