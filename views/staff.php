<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login - Club System Website</title>
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
            <li>
                <a href="application.php"><span>R</span>egister</a>
            </li>
            <li class="selected">
                <a href="staff.php"><span>L</span>ogin</a>
            </li>
        </ul>
    </div>
</div>
<div class="body">

    <div>
        <div>
            <div>
                <div class="staff">
                    <h2>Go to Your Account</h2>
                    <div class="first">
<!--                        <h3><span>L</span>ogin <span>A</span>s:</h3>-->
                        <form action="index.php?do=logined" method="post" style="margin-top: 50px">
                            <input type="email" value="" name="email" placeholder="Please enter your Email here" onblur="this.value=!this.value? " Username"
                            :this.value;" onfocus="this.select()" onclick="this.value=""; " required >
                            <input type="password" value="" name="password" placeholder="Please enter your Password here">
                            <select name="select" class="custom-select" >
                                <option value="" selected disabled label="Login As"></option>
                                <option value="Member">Member</option>
                                <option value="Coach">Coach</option>
                                <option value="Admin">Admin</option>
                            </select>
                            <input type="submit" id="submit" value="Login" required >
                        </form>
                    </div>
                    <div>
                        <h3>Hey There!</h3>
                        <p>
                            An Admin? Then you know what to do 😎. <br/><br/>
                            Welcome back If you're a member. Please login through the form on the left.<br/>
                            Otherwise, you can join us now <strong>from the Link below</strong>
                        </p>
                        <a style="margin-top: -10px" href="application.php">Apply Now</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

</body>

</html>