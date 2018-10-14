<?php

require_once("../../config/db-connection.php");
require_once("../../resources/show-alert.php");

// Let's extract request parameters
$email = $_POST["email"];
$password = $_POST["password"];

// Let's check if username and password are correct
$sql = "SELECT * FROM share_food.user WHERE email_address = '$email' AND password = '$password';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Let's add username and password to session

} else {
    // Let's alert user about incorrect username and password
    displayAlert("Wrong username / password!!");
}

$conn->close();