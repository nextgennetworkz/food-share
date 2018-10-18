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
                    <li class="active"><a href="/food-share/web/index.php">Home</a></li>
                    <li><a href="#available-foods">Available Foods</a></li>
                    <li><a href="/food-share/web/create-food-offering/offer-food.php">Share Foods</a></li>

                    <!-- Let's show sign in/up, or login options accordingly -->
                    <?php
                    if (!isset($_SESSION['login_user'])) {
                        echo "<li><a href=\"#join\">Join With Us</a></li>";
                        echo "<li><a href=\"/food-share/web/sign-in/sign-in.php\">Sign In to My Account</a></li>";
                    } else {
                        echo "<li><a href=\"/food-share/resources/sign-out.php\">Sign out</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>