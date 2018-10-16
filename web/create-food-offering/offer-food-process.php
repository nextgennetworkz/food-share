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
require_once("../../resources/send-mail.php");

// Let's validate the uploaded image
if (isset($_FILES['uploaded-file'])) {
    if ($_FILES['uploaded-file']['error'] == 0) {
        $image = $conn->real_escape_string(file_get_contents($_FILES  ['uploaded-file']['tmp_name']));
    } else {
        // Let's alert the user
        displayAlert("An error occurred while trying to upload the image");

        // Let's redirect user to offer-food page
        redirect("offer-food.php", false);
    }
} else {
    // No files uploaded, let's alert the user
    displayAlert("You must upload an image when making a donation");

    // Let's redirect user to the offer-food page
    redirect("offer-food.php", false);
}

// Let's extract request parameters
$subject = $_POST["title"];
$description = $_POST["description"];
$category = $_POST["category"];
$pick_up_location = $_POST["pick-up-location"];
$pick_up_time = $_POST["ready-time"];
$ready_time = $_POST["pick-up-time"];
$email = $_POST["email"];
$phone_number = $_POST["phone-number"];

$sql = "INSERT INTO share_food.food_offering (title, description, category, pick_up_location, ready_time, pick_up_time, email, phone_number, image, is_available) VALUES ('$subject', '$description', '$category', '$pick_up_location', '$ready_time', '$pick_up_time', '$email', '$phone_number', '$image', '1')";

if ($conn->query($sql) === TRUE) {
    // Let's display success message
    displayAlert("Your food donation addition was successfully.");

    // Let's send emails to users whose preferred category is the same as of this donation
    $sql = "SELECT first_name, last_name, email_address FROM share_food.user WHERE preferred_category = '$category';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $subject = "New donations!";

        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $first_name = $row["first_name"];
            $last_name = $row["last_name"];
            $email_address = $row["email_address"];
            $message = "Hello $first_name $last_name,\n\nThere are food donations of you preferred type\n\nPlease visit food-share for more details";

            sendMail($email_address, $subject, $message);
        }
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Let's redirect to browse food offerings page
redirect('../browse-food-offerings/view-all-food-offerings.php', false);