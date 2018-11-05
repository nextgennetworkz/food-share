<?php
//session_start();
//include('../../resources/session.php');
include("../header.php");
include("../main-nav.php");

require_once("../../config/db-connection.php");
//require_once("../../resources/show-alert.php");
//require_once("../../resources/redirect.php");

// Let's load profile information from DB by email address in session
$email_address = $_SESSION["login_user"];

echo $email_address;
//$sql = "SELECT id, title, description, category, lat, lng, ready_time, pick_up_time, quantity, is_available, email, phone_number, image FROM share_food.food_offering WHERE id = 28";
//echo "GGGGGGGGGGGGGGGGG";
//$result = $conn->query($sql);
//echo "GGGGGGGGGGGGGGGGG";
//
//if ($result->num_rows > 0) {
//    $row = $result->fetch_assoc();
//}

//$sql = "SELECT first_name, last_name, preferred_category, email_address, password FROM share_food.user WHERE email_address = '$email_address';";
//$result = $conn->query($sql);
//if ($result->num_rows > 0) {
//    $row = $result->fetch_assoc();
//} else {
//    displayAlert("Error while fetching profile info from database");
//}

$first_name = $row['first_name'];
$last_name = $row['last_name'];
$preferred_category = $row['preferred_category'];
$password = $row['password'];

$conn->close();
?>

    <section class="profile-update">
        <div class="container ">
            <div class="profile-form">
                <h2>Edit profile</h2>
                <form action="profile-process.php" method="post">
                    <div class="form-wrp">
                        <label>e-mail</label><br>
                        <input type="email" placeholder="Your e-mail address" id="e_mail" name="e_mail"
                               required="required" readonly="readonly" value="<?php echo $email_address; ?>">
                    </div>
                    <div class="form-wrp">
                        <label>First name</label><br>
                        <input type="text" placeholder="Enter first name" id="first_name" name="first_name"
                               required="required" value="<?php echo $first_name; ?>">
                    </div>
                    <div class="form-wrp">
                        <label>Last name</label><br>
                        <input type="text" placeholder="Enter your ID" id="last_name" name="last_name"
                               required="required" value="<?php echo $last_name; ?>">
                    </div>
                    <div class="form-wrp">
                        <label>Category</label><br>
                        <select placeholder="Select Food Category" id="category" name="category" required="required">
                            <option value="Fruits">Fruits</option>
                            <option value="Vegetables">Vegetables</option>
                            <option value="Protein">Protein</option>
                            <option value="Dairy">Dairy</option>
                            <option value="Grains">Grains</option>
                            <option value="Oils">Oils</option>
                        </select>
                    </div>
                    <button>Save</button>
                </form>
                <script type="text/javascript" src="../../resources/js/map.js"></script>
            </div>
        </div>
    </section>

<?php include("../footer.php"); ?>