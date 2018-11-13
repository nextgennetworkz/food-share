<?php
/**
 * Created by Nishen Peiris.
 * User: root
 * Date: 10/4/18
 * Time: 10:03 AM
 */
require_once("../../config/db-connection.php");
require_once("../../resources/show-alert.php");

// Let's extract request parameters
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$phone_number = $_POST["phone_number"];
$email_address = $_POST["email_address"];
$address = $_POST["address"];
$category = $_POST["category"];
$password = md5($_POST["password"]);

// Let's check if an account already exists with this email
$sql = "SELECT * FROM share_food.user WHERE email_address = '$email_address';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User account already exists with this email address, so let's alert user
    displayAlert("User account already exists with this email address!");
} else {
    // Let's insert user into database
    $sql = "INSERT INTO share_food.user (first_name, last_name, phone_number, email_address, address,  preferred_category, password) VALUES ('$first_name', '$last_name', '$phone_number', '$email_address', '$address', '$category', '$password');";

    if ($conn->query($sql) === TRUE) {
        // Let's display success message
        displayAlert("New user created successfully");

        // Let's redirect to login page
        header("Location: ../sign-in/sign-in.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();