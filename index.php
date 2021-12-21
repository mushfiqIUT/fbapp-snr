<?php
/**
 * @author: imon
 * @since: 1/12/14 7:28 PM
 */
 
header('P3P: CP="CAO PSA OUR"');
header('P3P: CP="HONK"');

require("src/process/authentication.php");

if ($user) {
	try {
		$likes_page = $facebook->api("/me/likes/1396002910653043/"); //page id for like 
		
		if(empty($likes_page['data']) ) {
			/*$message = "Did not liked Mushimo";
			echo "<script type='text/javascript'>alert('$message');</script>";*/
			header('location: src/page/likepage.php');
		} else {
			header('location: src/page/podiumPage.php');
		}
			
	  } catch (FacebookApiException $e) {
		error_log($e);
		$user = null;
	  }
	  
	  
}

?>

<html>

<head>
    <title>Senora :: Home</title>
</head>

<body>
<?php
//header('location: http://facebook.appsbd.org/breakTheSilence/src/page/podiumPage.php');
/*echo 'This is a the test for senora appUser Id: ' . $id;
echo 'User name: ' . $name;
echo 'User gender: ' . $gender;
echo 'User birthday: ' . $birthday;
echo 'User email: ' . $email;
echo 'User location: ' . $location;
*/
?>
</body>

</html>