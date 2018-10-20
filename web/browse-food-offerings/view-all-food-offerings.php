<?php

include("../header.php");
include("../main-nav.php");

require_once("../../config/db-connection.php");

// let's get the current time stamp
$current_time = time();
$current_time = date("Y-m-d H:i:s");

// Let's load all available food offerings
$sql = "SELECT id, title, description, category, pick_up_location, ready_time, pick_up_time, email, phone_number, image FROM share_food.food_offering WHERE is_available = 1 AND pick_up_time > '$current_time' ORDER BY ready_time";
$result = $conn->query($sql);
?>
    <section id="available-foods">
        <div class="container list-items">
            <h1>available food items</h1>
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-sm-4">
                <div class="food-item">
                    <div class="item-name">
                        <span><?php echo $row['title']; ?></span>
                    </div>
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']) ?>" class="img-responsive"/>
                    <div class="middle">
                        <p>Category: <?php echo $row['category']; ?></p><br>
<!--                        <p>Description: --><?php //echo $row['description']; ?><!--</p><br>-->
                        <p>Expire Date: <?php echo $row['pick_up_time']; ?></p><br>
                        <p>Pick-up Location: <?php echo $row['pick_up_location']; ?></p><br>
<!--                        <p>Finished cooking at: --><?php //echo $row['ready_time']; ?><!--</p><br>-->
<!--                        <p>Phone : --><?php //echo $row['phone_number']; ?><!--</p><br>-->
                        <a href="/food-share/web/browse-food-offerings/view-order-details.php?id=<?php echo $row['id']; ?>"> Order now</a>
                    </div>
                </div>
            </div>
                <?php
            }
            $conn->close();
            ?>
        </div>
    </section>
<?php
//
//if ($result->num_rows > 0) {
//    // Let's display food offerings to user
//    while ($row = $result->fetch_assoc()) {
//        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>';
//        echo " | ";
//        echo "Title: " . $row["title"];
//        echo " | ";
//        echo "Description: " . $row["description"];
//        echo " | ";
//        echo "Category: " . $row["category"];
//        echo " | ";
//        echo "Pick-up location: " . $row["pick_up_location"];
//        echo " | ";
//        echo "Finished cooking at: " . $row["ready_time"];
//        echo " | ";
//        echo "Fresh till: " . $row["pick_up_time"];
//        echo " | ";
//        echo "email: " . $row["email"];
//        echo " | ";
//        echo "Phone number: " . $row["phone_number"];
//        echo " | ";
//        echo "<a href=\"view-order-details.php?id=" . $row["id"] . "\">Order now</a>";
//
//    }
//}
//
//$conn->close();
//
//?>

<?php include("../footer.php"); ?>