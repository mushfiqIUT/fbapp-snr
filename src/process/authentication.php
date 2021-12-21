<?php
/**
 * @author: imon
 * @since: 1/12/14 7:44 PM
 */

require("fbConfig.php");

$config = array(
    'appId' => '624830547552783',
    'secret' => 'dc316428a4836477815b3498d8c4fe72',
    'fileUpload' => true
);

$facebook = new Facebook($config);

$user = null;
$user = $facebook->getUser();

$params = array(
    'scope' => 'email,publish_stream,photo_upload,user_birthday,user_location,user_likes'
);

$loginUrl = $facebook->getLoginUrl($params);

if ($user) {
    //TODO: query in db if user id already exists
    $user_exists = false;
    if (!$user_exists) {
        try {
            $user_profile = $facebook->api('/me');

            $id = $user_profile['id'];
            $name = $user_profile['name'];
            $gender = $user_profile['gender'];
            $birthday = $user_profile['birthday'];
            $mail = $user_profile['email'];
            $location = $user_profile['location']['name'];

            //TODO: save user info in db

        } catch (FacebookApiException $e) {
            error_log($e);
            $user = null;
        }
    }

    $logoutUrl = $facebook->getLogoutUrl();
}

if (!$user) {
    echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
    exit;
}