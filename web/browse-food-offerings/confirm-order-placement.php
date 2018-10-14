<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 10/13/18
 * Time: 6:35 AM
 */
include('../../resources/session.php');

require_once("../../config/db-connection.php");
require_once("../../resources/show-alert.php");
require_once("../../resources/redirect.php");
require_once("../../resources/send-mail.php");

// Let's extract ID from URL
$id = $_GET['id'];

// Let's update the relevant record's is_available = false
$sql = "UPDATE share_food.food_offering SET is_available = '0' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    // Let's display success message
    displayAlert("Order updated successfully");

    // Let's send a mail to the corresponding donor
    $sql = "SELECT title, email FROM share_food.food_offering WHERE id = $id;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $email = $row['email'];
    $title = $row['title'];
    $message = "Hello donor,\n\nYour donation of $title has been accepted.";

    sendMail($email, "Request for food", $message);

    // Let's display mail sent alert
    displayAlert("Email sent successfully");

    // Let's redirect to view-all-food-offerings page
    redirect("view-all-food-offerings.php");
} else {
    echo "Error updating order: " . $conn->error;
}

$conn->close();

// Let's redirect to view-all-food-offerings.php
redirect('view-all-food-offerings.php', false);
exit();