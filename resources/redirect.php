<?php
/**
 * Created by Nishen Peiris.
 * User: root
 * Date: 10/10/18
 * Time: 1:38 AM
 */

/**
 * The function to redirect to a given URL
 * @param $url
 * @param bool $permanent
 */
function redirect($url, $permanent = false)
{
    echo '<script language="javascript">';
    echo 'window.location.href=\'admin/ahm/panel\';';
    echo '</script>';
    exit();
}
