<?php
/**
 * Created by Nishen Peiris.
 * User: root
 * Date: 10/12/18
 * Time: 7:47 AM
 */
require_once("../../config/db-connection.php");

// Let's extract ID from URL
$id = $_GET['id'];

// Let's load order info from database
$sql = "SELECT id, title, description, category, pick_up_location, ready_time, pick_up_time, is_available, email, phone_number FROM share_food.food_offering WHERE id = $id";
$result = $conn->query($sql);

$conn->close();
?>

<html>
<head>
    <title></title>
</head>
<body>
<?php
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
echo "<a href=\"confirm-order-placement.php?id=" . $row["id"] . "\">Confirm</a>";
echo "<br>";
echo "========================================================================================================";
?>
</body>
</html>
