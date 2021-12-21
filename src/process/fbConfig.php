<?php
/**
 * @author: imon
 * @since: 1/12/14 7:46 PM
 */

require("libs/php-sdk/facebook.php");

$fbconfig['appBaseUrl'] =   "http://apps.facebook.com/breakthesilence/";

if (isset($_GET['code'])){
    header("Location: " . $fbconfig['appBaseUrl']);
    exit;
}
$config = array(
    'appId' => '624830547552783',
    'secret' => 'dc316428a4836477815b3498d8c4fe72',
    'fileUpload' => true,
    'cookie' => true
);

$facebook = new Facebook($config);
