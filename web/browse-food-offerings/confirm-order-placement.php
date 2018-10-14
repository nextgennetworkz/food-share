<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 10/13/18
 * Time: 6:35 AM
 */
require_once("../../config/db-connection.php");
require_once("../../resources/show-alert.php");
require_once("../../resources/redirect.php");

// Let's extract ID from URL
$id = $_GET['id'];

// Let's update the relevant record's is_available = false
$sql = "UPDATE share_food.food_offering SET is_available = '0' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    // Let's display success message
    displayAlert("Order updated successfully");
} else {
    echo "Error updating order: " . $conn->error;
}

$conn->close();

// Let's redirect to view-all-food-offerings.php
Redirect('view-all-food-offerings.php', false);
exit();