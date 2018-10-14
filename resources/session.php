<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 10/12/18
 * Time: 8:04 AM
 */
include('../config/db-connection.php');

session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($conn, "SELECT email_address FROM share_food.user WHERE email_address = '$user_check' ");
$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['email_address'];

if (!isset($_SESSION['login_user'])) {
    header("location:../sign-in/sign-in.php");
}