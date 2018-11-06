<?php
session_start();

include("header.php");
include("main-nav.php");

require_once("../config/db-connection.php");
?>

    <section id="home" class="main-slider-sec " xmlns="http://www.w3.org/1999/html">
        <div class="home-button">
            <button onclick="window.location.href='/food-share/web/create-food-offering/offer-food.php'">Share Food
                Now
            </button>
        </div>
        <!-- #region Jssor Slider Begin -->
        <!-- Generator: Jssor Slider Maker -->
        <!-- Source: https://www.jssor.com -->
        <div id="jssor_1"
             style="position:relative;margin:0 auto;top:0px;left:0px;width:1920px;height:864px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin"
                 style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../img/spin.svg"/>
            </div>
            <div data-u="slides"
                 style="cursor:default;position:relative;top:0px;left:0px;width:1920px;height:864px;overflow:hidden;">
                <div>
                    <img data-u="image" src="../images/1.jpg"/>
                </div>
                <div>
                    <img data-u="image" src="../images/2.jpg"/>
                </div>
                <div>
                    <img data-u="image" src="../images/3.jpg"/>
                </div>
                <div>
                    <img data-u="image" src="../images/4.jpg"/>
                </div>
                <div>
                    <img data-u="image" src="../images/5.jpg"/>
                </div>
                <div>
                    <img data-u="image" src="../images/6.png"/>
                </div>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;"
                 data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="b"
                              d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
                    </svg>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;"
                 data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                    <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                    <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;"
                 data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                    <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                    <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
                </svg>
            </div>
        </div>
    </section>

<!--    <section id="available-foods">-->
<!--        <div class="container">-->
<!---->
<!--            --><?php
//            // let's get the current time stamp
//            $current_time = time();
//            $current_time = date("Y-m-d H:i:s");
//
//            // Let's load all available food offerings
//            $sql = "SELECT id, title, description, category, pick_up_location, ready_time, pick_up_time, email, phone_number, image FROM share_food.food_offering WHERE is_available = 1 AND pick_up_time > '$current_time' ORDER BY ready_time";
//            $result = $conn->query($sql);
//            ?>
<!--            <div class="container list-items">-->
<!--                <h1>available food items</h1>-->
<!--                --><?php
//                while ($row = $result->fetch_assoc()) {
//                    ?>
<!--                    <div class="col-sm-4">-->
<!--                        <div class="food-item">-->
<!--                            <div class="item-name">-->
<!--                                <span>--><?php //echo $row['title']; ?><!--</span>-->
<!--                            </div>-->
<!--                            <img src="data:image/jpeg;base64,--><?php //echo base64_encode($row['image']) ?><!--"-->
<!--                                 class="img-responsive"/>-->
<!--                            <div class="middle">-->
<!--                                <p>Category: --><?php //echo $row['category']; ?><!--</p><br>-->
<!--                                <!--                        <p>Description: -->-->
<!--                                --><?php ////echo $row['description']; ?><!--<!--</p><br>-->-->
<!--                                <p>Expire Date: --><?php //echo $row['pick_up_time']; ?><!--</p><br>-->
<!--                                <p>Pick-up Location: --><?php //echo $row['pick_up_location']; ?><!--</p><br>-->
<!--                                <a href="/food-share/web/browse-food-offerings/view-order-details.php?id=--><?php //echo $row['id']; ?><!--">-->
<!--                                    Order now</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    --><?php
//                }
//                $conn->close();
//                ?>
<!---->
<!--                <button onclick="window.location.href='/food-share/web/browse-food-offerings/view-all-food-offerings.php'"-->
<!--                        class="view-all">View All Items-->
<!--                </button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    <section id="join">
        <div class="container">
            <div class="join-container">
                <h1>Join With Our Community...!!</h1>
                <form action="sign-up/sign-up-process.php" method="post">
                    <div class="col-sm-6">
                        <div class="form-wrp">
                            <input type="text" placeholder="Enter Your First Name" id="first_name" name="first_name"
                                   required="required">
                        </div>
                        <div class="form-wrp">
                            <input placeholder="Enter Your Email Address" type="email" id="email_address"
                                   name="email_address" required="required">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-wrp">
                            <select id="category" name="category" required="required">
                                <option selected="selected" disabled="disabled">Select your preferred food category
                                </option>
                                <option value="Fruits">Fruits</option>
                                <option value="Rice">Rice</option>
                                <option value="Noodles">Noodles</option>
                                <option value="Burgers">Burgers</option>
                                <option value="Protein">Protein</option>
                                <option value="Dairy">Dairy</option>
                                <option value="Grains">Grains</option>
                                <option value="Oils">Oils</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-wrp">
                            <input type="text" placeholder="Enter Your Last Name" id="last_name" name="last_name"
                                   required="required">
                        </div>
                        <div class="form-wrp">
                            <input type="password" placeholder="Enter Your Password" id="password" name="password"
                                   required="required">
                        </div>
                    </div>
                    <button>create my account</button>
                </form>
            </div>

        </div>

    </section>


<?php include("footer.php"); ?>