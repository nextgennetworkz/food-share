<?php include("../header.php"); ?>
<?php include("../main-nav.php"); ?>
    <section class="signing">
        <div class="container ">
            <div class="signing-form">
                <h2>Sign in to my account</h2>
                <form action="sign-in-process.php" method="post">
                    <div class="form-wrp">
                        <input type="text" placeholder="Enter Your Email" id="email" name="email">
                    </div>
                    <div class="form-wrp">
                        <input type="password" placeholder="Enter Your Password" id="password" name="password">
                    </div>
                    <button>SIGN IN</button>
                </form>

            </div>

        </div>
    </section>
<?php include("../footer.php"); ?>