<?php
/**
 * Created by Nishen Peiris.
 * User: root
 * Date: 10/10/18
 * Time: 1:47 AM
 */
require_once("../../config/db-connection.php");

// let's get the current time stamp
$current_time = time();
$current_time = date("Y-m-d H:i:s");

// Let's load all available food offerings
$sql = "SELECT id, title, description, category, pick_up_location, ready_time, pick_up_time, email, phone_number FROM share_food.food_offering WHERE is_available = 1 AND pick_up_time > '$current_time' ORDER BY ready_time";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Let's display food offerings to user
    while ($row = $result->fetch_assoc()) {
        echo "Title: " . $row["title"];
        echo " | ";
        echo "Description: " . $row["description"];
        echo " | ";
        echo "Category: " . $row["category"];
        echo " | ";
        echo "Pick-up location: " . $row["pick_up_location"];
        echo " | ";
        echo "Finished cooking at: " . $row["ready_time"];
        echo " | ";
        echo "Fresh till: " . $row["pick_up_time"];
        echo " | ";
        echo "email: " . $row["email"];
        echo " | ";
        echo "Phone number: " . $row["phone_number"];
        echo " | ";
        echo "<a href=\"view-order-details.php?id=" . $row["id"] . "\">Order now</a>";
        echo "<br>";
        echo "========================================================================================================";
        echo "<br>";
    }
}
$conn->close();