<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 10/14/18
 * Time: 5:56 PM
 */

/**
 * The method to send mail
 *
 * @param $receipient
 * @param $subject
 * @param $message
 */
function sendMail($receipient, $subject, $message)
{
    // use wordwrap() if lines are longer than 70 characters
    $message = wordwrap($message, 70);

    // send email
    mail($receipient, $subject, $message);
}