<?php
/**
 * Created by Nishen Peiris.
 * User: root
 * Date: 10/4/18
 * Time: 10:29 AM
 */
$servername = "localhost";
$username = "root";
$password = "gvt123";
$dbname = "share_food";

// Let's create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Let's check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}