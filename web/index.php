<?php
session_start();

include("header.php");
include("main-nav.php");
?>

    <section id="home" class="main-slider-sec " xmlns="http://www.w3.org/1999/html">
        <div class="home-button">
            <button onclick="window.location.href='/food-share/web/create-food-offering/offer-food.php'">Share Foods Now</button>
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

    <section id="available-foods">
        <div class="container">
            <h1>available food items</h1>
            <div class="col-sm-4">
                <div class="food-item">
                    <div class="item-name">
                        <span>Butter Chicken</span>
                    </div>
                    <img src="../images/butter%20chicken.jpg" class="img-responsive ">
                    <div class="middle">
                        <p>Category: www</p><br>
                        <p>Expire Date: 2018.12.12</p><br>
                        <p>Location: Ratnapura</p><br>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="food-item">
                    <div class="item-name">
                        <span>Burger</span>
                    </div>
                    <img src="../images/burger.jpg" class="img-responsive">
                    <div class="middle">
                        <p>Category: www</p><br>
                        <p>Expire Date: 2018.12.12</p><br>
                        <p>Location: Ratnapura</p><br>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="food-item">
                    <div class="item-name">
                        <span>Cheese Cake Cups</span>
                    </div>
                    <img src="../images/cheese%20cake%20cups.jpg" class="img-responsive">
                    <div class="middle">
                        <p>Category: www</p><br>
                        <p>Expire Date: 2018.12.12</p><br>
                        <p>Location: Ratnapura</p><br>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="food-item">
                    <div class="item-name">
                        <span>Cup Cakes</span>
                    </div>
                    <img src="../images/cupcakes.jpg" class="img-responsive">
                    <div class="middle">
                        <p>Category: www</p><br>
                        <p>Expire Date: 2018.12.12</p><br>
                        <p>Location: Ratnapura</p><br>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="food-item">
                    <div class="item-name">
                        <span>Meat balls</span>
                    </div>
                    <img src="../images/meatballs.jpg" class="img-responsive">
                    <div class="middle">
                        <p>Category: www</p><br>
                        <p>Expire Date: 2018.12.12</p><br>
                        <p>Location: Ratnapura</p><br>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="food-item">
                    <div class="item-name">
                        <span>Crusted Lamb</span>
                    </div>
                    <img src="../images/crusted%20lamb.jpg" class="img-responsive">
                    <div class="middle">
                        <p>Category: www</p><br>
                        <p>Expire Date: 2018.12.12</p><br>
                        <p>Location: Ratnapura</p><br>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
            <button onclick="window.location.href='/food-share/web/browse-food-offerings/view-all-food-offerings.php'"class="view-all">View All Items</button>
        </div>
    </section>

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
                                <option value="Vegetables">Vegetables</option>
                                <option value="Protein">Protein</option>
                                <option value="Dairy">Dairy</option>
                                <option value="Grains">Grains</option>
                                <option value="Oils">Oils</option>
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