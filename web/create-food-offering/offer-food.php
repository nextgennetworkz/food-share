<head>
    <style type="text/css">
        #map {
            width: 700px;
            height: 500px;
        }
    </style>
    <!--<script async defer type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvkniffw2aFnkkYd4omeJOMPVBSqW_QGM&callback=initMap"></script>-->
    <script async defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
</head>

<?php
include('../../resources/session.php');
include("../header.php");
include("../main-nav.php"); ?>

<section class="offer-food">
    <div class="container ">
        <div class="offer-form">
            <h2>Share Foods</h2>
            <form action="offer-food-process.php" method="post" enctype="multipart/form-data">
                <div class="form-wrp">
                    <label>Title</label><br>
                    <input type="file" id="uploaded-file" name="uploaded-file" required="required">
                </div>
                <div class="form-wrp">
                    <label>Title</label><br>
                    <input type="text" placeholder="Enter Title" id="title" name="title" required="required">
                </div>
                <div class="form-wrp">
                    <label>Description</label><br>
                    <input type="text" placeholder="Enter Description" id="description" name="description"
                           required="required">
                </div>
                <div class="form-wrp">
                    <label>Category</label><br>
                    <select placeholder="Select Food Category" id="category" name="category" required="required">
                        <option value="Fruits">Fruits</option>
                        <option value="Vegetables">Vegetables</option>
                        <option value="Protein">Protein</option>
                        <option value="Dairy">Dairy</option>
                        <option value="Grains">Grains</option>
                        <option value="Oils">Oils</option>
                    </select>
                </div>
                <div class="form-wrp">
                    <label>Approximate pick-up location</label><br>
                    <div id="map"></div>
                    <input type="text" id="lat" name="lat" readonly="readonly" hidden="hidden">
                    <input type="text" id="lng" name="lng" readonly="readonly" hidden="hidden">
                </div>
                <div class="form-wrp">
                    <label>Ready time</label><br>
                    <input type="datetime-local" placeholder="Enter ready time" id="ready-time" name="ready-time"
                           required="required">
                </div>
                <div class="form-wrp">
                    <label>Pick-up time</label><br>
                    <input type="datetime-local" placeholder="Enter Pick-up time" id="pick-up-time" name="pick-up-time"
                           required="required">
                </div>
                <div class="form-wrp">
                    <label>e-mail address</label><br>
                    <input type="email" placeholder="Enter email address" id="email" name="email"
                           required="required">
                </div>
                <div class="form-wrp">
                    <label>Phone number</label><br>
                    <input type="number" placeholder="Enter phone number" id="phone-number" name="phone-number"
                           required="required">
                </div>
                <button>Offer Now</button>
            </form>
            <script type="text/javascript" src="../../resources/js/map.js"></script>
        </div>
    </div>
</section>

<?php include("../footer.php"); ?>