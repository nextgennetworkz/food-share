<?php
/**
 * Created by Nishen Peiris.
 * User: root
 * Date: 10/10/18
 * Time: 1:38 AM
 */
session_start();

require_once("../../config/db-connection.php");
require_once("../../resources/show-alert.php");
require_once("../../resources/redirect.php");

// Let's extract request parameters
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$preferred_category = $_POST["preferred_category"];
$email_address = $_POST["email_address"];

// Let's update user profile
$sql = "UPDATE share_food.user SET first_name = '$first_name', last_name = '$last_name', preferred_category = '$preferred_category' WHERE email_address = '$email_address'";
if ($conn->query($sql) === TRUE) {
    // Let's display success message
    displayAlert("Your profile update request has been processed successfully.");
} else {
    displayAlert("Error updating profile: " . $conn->error);
}
$conn->close();

// Let's redirect to view-all-food-offerings.php
redirect('../', false);