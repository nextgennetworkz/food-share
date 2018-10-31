<!--
Created by Nishen Peiris.
User: root
Date: 10/12/18
Time: 7:47 AM-->

<head>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
    </style>

    <script async defer type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsPprUpfG8KJ0jizQNtg47uUpgE3RbSW4&callback=initMap"></script>
</head>

<?php
include('../../resources/session.php');
include("../header.php");
include("../main-nav.php");

require_once("../../config/db-connection.php");

// Let's extract ID from URL
$id = $_GET['id'];

// Let's load order info from database
$sql = "SELECT id, title, description, category, lat, lng, ready_time, pick_up_time, quantity, is_available, email, phone_number, image FROM share_food.food_offering WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
$lat = $row['lat'];
$lng = $row['lng'];

$conn->close();
?>

<section class="food-details">
    <div class="container">
        <h1>Food Item Details</h1>
        <div class="col-sm-6">
            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']) ?>" class="img-responsive"/>
        </div>
        <div class="col-sm-6">
            <p><label>Title:</label> <?php echo $row['title']; ?></p>
            <p><label>Category:</label> <?php echo $row['category']; ?></p>
            <p><label>Description:</label> <?php echo $row['description']; ?></p>
            <p><label>Pick-up time:</label> <?php echo $row['pick_up_time']; ?></p>
            <p><label>Pick-up Location:</label>
            <div id="map"></div>
            </p>
            <p><label>Ready time:</label> <?php echo $row['ready_time']; ?></p>
            <p><label>Quantity:</label> <?php echo $row['quantity']; ?></p>
            <p><label>Email :</label> <?php echo $row['email']; ?></p>
            <p><label>Phone :</label> <?php echo $row['phone_number']; ?></p>

            <input type="text" id="lat" name="lat" value="<?php echo $lat; ?>" hidden="hidden">
            <input type="text" id="lng" name="lng" value="<?php echo $lng; ?>" hidden="hidden">

            <div class="confirm">
                <a href="/food-share/web/browse-food-offerings/confirm-order-placement.php?id=<?php echo $row['id']; ?>">Confirm</a>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="../../resources/js/map.read.only.js"></script>
</section>

<?php include("../footer.php"); ?>