<?php
/**
 * Created by Nishen Peiris.
 * User: root
 * Date: 10/12/18
 * Time: 7:47 AM
 */
include('../../resources/session.php');
include("../header.php");
include("../main-nav.php");

require_once("../../config/db-connection.php");

// Let's extract ID from URL
$id = $_GET['id'];

// Let's load order info from database
$sql = "SELECT id, title, description, category, pick_up_location, ready_time, pick_up_time, is_available, email, phone_number, image FROM share_food.food_offering WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
$conn->close();
?>
<section class="food-details">
    <div class="container">
        <h1>Food Item Details</h1>
        <div class="col-sm-6">
            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']) ?>" class="img-responsive"/>
        </div>
        <div class="col-sm-6">
            <p><label>Title:</label> <?php echo $row['title']; ?></p>
            <p><label>Category:</label> <?php echo $row['category']; ?></p>
            <p><label>Description:</label> <?php echo $row['description']; ?></p>
            <p><label>Expire Date:</label> <?php echo $row['pick_up_time']; ?></p>
            <p><label>Pick-up Location:</label> <?php echo $row['pick_up_location']; ?></p>
            <p><label>Finished cooking at:</label> <?php echo $row['ready_time']; ?></p>
            <p><label>Email :</label> <?php echo $row['email']; ?></p>
            <p><label>Phone :</label> <?php echo $row['phone_number']; ?></p>
            <div class="confirm">
                <a href="/food-share/web/browse-food-offerings/confirm-order-placement.php?id=<?php echo $row['id']; ?>">Confirm</a>
            </div>
        </div>

    </div>
</section>
<?php include("../footer.php"); ?>
