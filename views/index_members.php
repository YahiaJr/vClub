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
        <a href="index_members.php" id="logo"><img src="images/logo.png" alt="logo"></a>
        <ul>
            <li class="selected">
                <a href="index_members.php"><span>H</span>ome</a>
            </li>
            <li>
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
    <?php include '../controllers/cn.php'; ?>

    <div>
        <div class="featured">
            <img src="images/member.jpeg" alt="" width="596px" height="375px">
            <div>
                <div>
                    <h3 style="margin-top: 7px"><span>H</span>ey! <span>C</span>heck <span>O</span>ur <span>N</span>ews!
                    </h3>
                    <?php
                        $sql = 'SELECT `m_best` FROM `user` WHERE `email` = "' . $_SESSION['email'] . '"';
                        if ($result = mysqli_query($GLOBALS['conn'], $sql)) {
                            $row = mysqli_fetch_assoc($result);
                            if ($row['m_best'] == 0) {
                                echo '<p>
                                    Soon, we are going to release the next features in our club website that includes:<br><br>
                                    <strong style="margin-left: 9px">•</strong> Activities Time-table.<br>
                                    <strong style="margin-left: 9px">•</strong> Membership renewal Offers.<br>
                                    <strong style="margin-left: 9px">•</strong> Parties &amp Trips schedules<br>
                                    <strong style="margin-left: 9px">•</strong> Performance improvements.<br>
                                    </p>';
                            } else {
                                echo '
                                             <p style="margin-top: -20px">
                                                Soon, we are going to release the next features in our club website that includes:<br>
                                                <strong style="margin-left: 9px">•</strong> Activities Time-table.<br>
                                                <strong style="margin-left: 9px">•</strong> Membership renewal Offers.<br>
                                            </p>
                                            <h4><strong>Congratulations</strong>: <em>BEST in Class</em> </h4>
                                            <br>
                                            <img src="images/bic.png" alt="Best In Class" width="200px" height="115px" style="border:none;margin: -15px 47px">';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div>
                    <div class="section">
                        <h2>Welcome Back!</h2>
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
<div class="s">
    <b>Breakfasts for 350 Calories or Less</b>
    <div class="n">
        <img src="images/s.jpg" alt="topic">
    </div>
    <div class="z">
        Breakfasts for 350 Calories or Less
        <details>
            <summary>read more</summary>
            Red Pepper &amp; Goat Cheese Frittata
            179 calories
            A frittata is a baked omelet, far easier because it lacks that pesky step of flipping it.

            Download a FREE Best Breakfast Recipe Cookbook!

            Serve with:
            • Fresh papaya, cubed, ½ cup
            27 calories
            • Nonfat latte, 12 oz.
            130 calories
            TOTAL: 336 calories
        </details>
    </div>

</div>
<div class="s">
    <b> Lunches for 400 Calories or Less</b>
    <div class="n">
        <img src="images/o.jpg" alt="topic">
    </div>
    <div class="z">
        Lunches for 400 Calories or Less
        <details>
            <summary>read more</summary>
            What does a 400-calorie lunch look like?
            Most people will lose weight on a daily diet of 1,500 calories, which is the total calorie count for all
            the food pictured here. And keeping your lunch to 400 calories, or less, will help you keep your diet on
            track. These light lunch menus deliver some protein and fiber to keep you feeling satisfied, yet leave
            room for a healthy mid-afternoon snack. Download a Free Low-Calorie Lunch Cookbook!
        </details>
    </div>

</div>

<div class="s">
    <b> Snacks for 250 Calories or Less</b>
    <div class="n">
        <img src="images/m.jpg" alt="topic">
    </div>
    <div class="z">
        Snacks for 250 Calories or Less
        <details>
            <summary>read more</summary>
            Healthy and satisfying snacks that fill you up for under 250 calories.
            Snacking can be a healthy way to add more nutrients to your diet, energize you throughout the day and
            keep you from overeating at your next meal. However, snacks have calories too and if you don’t keep them
            in check, too many can lead to weight gain. We keep that in mind and these delicious snacks, including
            cheesy popcorn and chili pecans, clock in under 250 calories per serving. Download a FREE Healthy Snack
            Recipe Cookbook!
        </details>
    </div>

</div>

<div class="s">
    <b> 500-Calorie Dinners: Soups</b>

    <div class="n">
        <img src="images/n.jpg" alt="topic">
    </div>
    <div class="z">
        500-Calorie Dinners: Soups
        <details>
            <summary>read more</summary>
            If you are trying to feel full on fewer calories, learn to love soups.
            Research has shown that people who start a meal with soup eat 20 percent fewer calories over the course
            of their meal.
            But donot just think of soup as a starter. These hearty soups include beans, chicken, fish or lean beef
            so they are substantial enough to be a main course. Browse through these soup recipes to choose your
            main dish, then pick from the suggested side dishes, desserts or drinks to round out your 500-calorie
            meal.
        </details>
    </div>

</div>

<div class="s">
    <b> 500-Calorie Dinners: Soups</b>

    <div class="n">
        <img src="images/a.jpg" alt="topic">
    </div>
    <div class="z">
        500-Calorie Dinners: Soups
        <details>
            <summary>read more</summary>
            If you"re trying to feel full on fewer calories, learn to love soups.
            Research has shown that people who start a meal with soup eat 20 percent fewer calories over the course
            of their meal. But don"t just think of soup as a starter.
            These hearty soups include beans, chicken, fish or lean beef so they"re substantial enough to be a main
            course. Browse through these soup recipes to choose your main dish,
            then pick from the suggested side dishes, desserts or drinks to round out your 500-calorie meal.
        </details>

    </div>

</div>
<div class="s">
    <b> 500-Calorie Dinners: Soups</b>

    <div class="n">
        <img src="images/b.jpg" alt="topic">
    </div>
    <div class="z">
        500-Calorie Dinners: Soups
        <details>
            <summary>read more</summary>
            If you"re trying to feel full on fewer calories, learn to love soups.
            Research has shown that people who start a meal with soup eat 20 percent fewer calories over the course
            of their meal. But don"t just think of soup as a starter.
            These hearty soups include beans, chicken, fish or lean beef so they"re substantial enough to be a main
            course. Browse through these soup recipes to choose your main dish,
            then pick from the suggested side dishes, desserts or drinks to round out your 500-calorie meal.
        </details>
    </div>
</div>

<?php include './footer.php'; ?>
</body>
</html>