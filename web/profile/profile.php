<?php
session_start();

include('../../resources/session.php');
include("../header.php");
include("../main-nav.php");

require_once("../../config/db-connection.php");
require_once("../../resources/show-alert.php");
require_once("../../resources/redirect.php");

// Let's load profile information from DB by email address in session
$email_address = $_SESSION["login_user"];

$sql = "SELECT first_name, last_name, phone_number, address, preferred_category FROM share_food.user WHERE email_address = '$email_address';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    displayAlert("Error while fetching profile info from database");
}

$first_name = $row['first_name'];
$last_name = $row['last_name'];
$phone_number = $row['phone_number'];
$address = $row['address'];
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
                        <label>E-mail</label><br>
                        <input type="email" id="email_address" name="email_address" required="required"
                               readonly="readonly" value="<?php echo $email_address; ?>">
                    </div>
                    <div class="form-wrp">
                        <label>First name</label><br>
                        <input type="text" placeholder="Enter first name" id="first_name" name="first_name"
                               required="required" value="<?php echo $first_name; ?>">
                    </div>
                    <div class="form-wrp">
                        <label>Last name</label><br>
                        <input type="text" placeholder="Enter your last name" id="last_name" name="last_name"
                               required="required" value="<?php echo $last_name; ?>">
                    </div>
                    <div class="form-wrp">
                        <label>Phone number</label><br>
                        <input type="text" placeholder="Enter your phone number" id="phone_number" name="phone_number"
                               required="required" value="<?php echo $phone_number; ?>">
                    </div>
                    <div class="form-wrp">
                        <label>Address</label><br>
                        <input type="text" placeholder="Enter your address" id="address" name="address"
                               required="required" value="<?php echo $address; ?>">
                    </div>
                    <div class="form-wrp">
                        <label>Category</label><br>
                        <select placeholder="Select Food Category" id="preferred_category" name="preferred_category"
                                required="required">
                            <option value="Fruits" <?php echo ("Fruits" != $preferred_category) ?: "selected" ?>>
                                Fruits
                            </option>
                            <option value="Vegetables" <?php echo ("Vegetables" != $preferred_category) ?: "selected" ?>>
                                Vegetables
                            </option>
                            <option value="Rice" <?php echo ("Rice" != $preferred_category) ?: "selected" ?>>
                                Rice
                            </option>
                            <option value="Noodles" <?php echo ("Noodles" != $preferred_category) ?: "selected" ?>>
                                Noodles
                            </option>
                            <option value="Burgers" <?php echo ("Burgers" != $preferred_category) ?: "selected" ?>>
                                Burgers
                            </option>
                            <option value="Protein" <?php echo ("Protein" != $preferred_category) ?: "selected" ?>>
                                Protein
                            </option>
                            <option value="Dairy" <?php echo ("Dairy" != $preferred_category) ?: "selected" ?>>Dairy
                            </option>
                            <option value="Grains" <?php echo ("Grains" != $preferred_category) ?: "selected" ?>>
                                Grains
                            </option>
                            <option value="Oils" <?php echo ("Oils" != $preferred_category) ?: "selected" ?>>Oils
                            </option>
                        </select>
                    </div>
                    <button>Save</button>
                </form>
            </div>
        </div>
    </section>

<?php include("../footer.php"); ?>