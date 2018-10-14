<?php
/**
 * Created by Nishen Peiris.
 * User: root
 * Date: 10/9/18
 * Time: 1:19 AM
 */
include('../../resources/session.php');

require_once("../../config/db-connection.php");
require_once("../../resources/show-alert.php");
require_once("../../resources/redirect.php");

// Let's extract request parameters
$title = $_POST["title"];
$description = $_POST["description"];
$category = $_POST["category"];
$pick_up_location = $_POST["pick-up-location"];
$pick_up_time = $_POST["ready-time"];
$ready_time = $_POST["pick-up-time"];
$email = $_POST["email"];
$phone_number = $_POST["phone-number"];

$sql = "INSERT INTO share_food.food_offering (title, description, category, pick_up_location, ready_time, pick_up_time, email, phone_number, is_available) VALUES ('$title', '$description', '$category', '$pick_up_location', '$ready_time', '$pick_up_time', '$email', '$phone_number', '1')";

if ($conn->query($sql) === TRUE) {
    // Let's display success message
    displayAlert("New food offering created successfully");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Let's redirect to browse food offerings page
redirect('../browse-food-offerings/view-all-food-offerings.php', false);
exit();