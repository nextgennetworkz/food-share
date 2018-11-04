<header>
    <!--bootstrap nav bar from w3schools-->
    <nav class="navbar navbar-default page_header">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo clearfix">
                    <a href="index.php"> <img src="/food-share/images/Save_Food.png" class="img-responsive"></a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right links">
                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"' ?>><a
                                href="/food-share/web/index.php">Home</a></li>
                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'view-all-food-offerings.php') echo 'class="active"' ?>>
                        <a href="/food-share/web/browse-food-offerings/view-all-food-offerings.php">Available Food</a>
                    </li>
                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'offer-food.php') echo 'class="active"' ?>><a
                                href="/food-share/web/create-food-offering/offer-food.php">Share Food</a></li>

                    <!-- Let's show sign in/up, or login options accordingly -->
                    <?php
                    if (!isset($_SESSION['login_user'])) {
                        echo "<li><a href=\"/food-share/web/#join\">Join With Us</a></li>";
                        echo "<li><a href=\"/food-share/web/sign-in/sign-in.php\">Sign In to My Account</a></li>";
                    } else {
                        ?>
                        <li <?php if (basename($_SERVER['PHP_SELF']) == 'profile') echo 'class="active"' ?>>
                            <a href="/food-share/web/profile/profile.php"><?php echo $_SESSION['login_user']; ?></a>
                        </li>
                        <li><a href="/food-share/resources/sign-out.php">Sign out</a></li>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>