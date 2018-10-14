<?php
include('../../resources/session.php');
?>

<!--<form action="offer-food-process.php" method="post">-->
<!--    Title: <input type="text" id="title" name="title" required="required"><br>-->
<!--    Description: <input type="text" id="description" name="description" required="required"><br>-->
<!--    Approximate pick-up location: <input type="text" id="pick-up-location" name="pick-up-location"-->
<!--                                         required="required"><br>-->
<!--    Pick-up times: <input type="text" id="pick-up-times" name="pick-up-times" required="required"><br>-->
<!--    <input type="submit" value="Submit">-->
<!--</form>-->
<?php include("../header.php"); ?>
<?php include("../main-nav.php"); ?>
<section class="offer-food">
    <div class="container ">
        <div class="offer-form">
            <h2>Share Foods</h2>
            <form action="offer-food-process.php" method="post">
                <div class="form-wrp">
                    <label>Title</label><br>
                    <input type="text" placeholder="Enter Title" id="title" name="title" required="required">
                </div>
                <div class="form-wrp">
                    <label>Description</label><br>
                    <input type="text" placeholder="Enter Description" id="description" name="description"
                           required="required">
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
                <div class="form-wrp">
                    <label>Approximate pick-up location</label><br>
                    <input type="text" placeholder="Enter Pick-up Location" id="pick-up-location"
                           name="pick-up-location" required="required">
                </div>
                <div class="form-wrp">
                    <label>Ready time</label><br>
                    <input type="datetime-local" placeholder="Enter ready time" id="ready-time" name="ready-time"
                           required="required">
                </div>
                <div class="form-wrp">
                    <label>Pick-up time</label><br>
                    <input type="datetime-local" placeholder="Enter Pick-up time" id="pick-up-time" name="pick-up-time"
                           required="required">
                </div>
                <div class="form-wrp">
                    <label>e-mail address</label><br>
                    <input type="email" placeholder="Enter email address" id="email" name="email"
                           required="required">
                </div>
                <div class="form-wrp">
                    <label>Phone number</label><br>
                    <input type="number" placeholder="Enter phone number" id="phone-number" name="phone-number"
                           required="required">
                </div>
                <button>Offer Now</button>
            </form>

        </div>

    </div>
</section>
<?php include("../footer.php"); ?>
