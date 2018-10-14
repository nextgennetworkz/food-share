<?php
session_start();

require_once("../../config/db-connection.php");
require_once("../../resources/show-alert.php");
require_once("../../resources/redirect.php");

// Let's extract request parameters
$email = $_POST["email"];
$password = $_POST["password"];

// Let's check if username and password are correct
$sql = "SELECT * FROM share_food.user WHERE email_address = '$email' AND password = '$password';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Let's add username to session
    $login_session = $email;
    $_SESSION['login_user'] = $email;

    // Let's close database connection
    $conn->close();

    // Let's redirect user to home page
    redirect("../");
} else {
    // Let's alert user about incorrect username and password
    displayAlert("Wrong username / password!!");

    // Let's close database connection
    $conn->close();

    // Let's redirect to login page again
    redirect("sign-in.php");
}