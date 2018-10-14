<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 10/14/18
 * Time: 12:08 PM
 */
session_start();

if (session_destroy()) {
    header("Location: sign-in.php");
}