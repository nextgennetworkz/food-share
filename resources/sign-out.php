<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 10/12/18
 * Time: 8:04 AM
 */
require_once("../resources/redirect.php");

session_start();

if (session_destroy()) {
    // Let's redirect user to home page
    redirect("../web/", false);
}