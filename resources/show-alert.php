<?php

/**
 * The function to pop up alert box with the given message
 * @param $message
 */
function displayAlert($message)
{
    echo '<script language="javascript">';
    echo 'alert("Mock alert box!")';
    echo '</script>';
}