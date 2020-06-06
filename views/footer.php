<div class="footer">
    <div>

        <div>
            <h4>LATEST BLOG</h4>
            <ul>
                <li>
                    <p>
                        <a href="#"> If you're trying to feel full on fewer calories, learn to love soups.</a>
                    </p>
                    <span>11/07/2011</span>
                </li>

            </ul>
        </div>
        <div class="connect">
            <h4>FOLLOW US:</h4>
            <a href="http://facebook.com" class="facebook">Facebook</a> <a href="http://twitter.com" class="twitter">Twitter</a>
            <a href="http://google.com" class="google">Google+</a>
        </div>

    </div>
    <div class="flogo">

        <?php //Go to Home Page From footer logo
            switch (basename($_SERVER['PHP_SELF'])) {
                //member pages
                case "index_members.php":
                case "contact_member.php":
                case "search_member.php":
                    echo '<a href="index_members.php" id="logo"><img style="margin-top: -60px" src="images/logo.png" alt="logo"></a>';
                    break;
                //admin_pages
                case "index_admin.php":
                case "addnewadmin.php":
                case "addnewmember.php":
                case "search_admin.php":
                    echo '<a href="index_admin.php" id="logo"><img style="margin-top: -60px" src="images/logo.png" alt="logo"></a>';
                    break;
                //Coach pages
                case "index_coach.php":
                case "contact_coach.php":
                case "assign_coach.php":
                case "list_coach.php":
                    echo '<a href="index_coach.php" id="logo"><img style="margin-top: -60px" src="images/logo.png" alt="logo"></a>';
                    break;
                //default
                default:
                echo '<a href="index.php" id="logo"><img style="margin-top: -60px" src="images/logo.png" alt="logo"></a>';
            }
        ?>
    </div>
</div>