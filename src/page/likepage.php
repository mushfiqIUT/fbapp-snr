<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="author" content="Mushimu">
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript, Facebook">
<meta name="description" content="Break The Silence Facebook App">

<!--
<link rel="stylesheet" type="text/css" href="stylesheet/style.css" />

<script type="text/javascript" src="javascript/jquery.js"></script>
<script type="text/javascript" src="javascript/bjqs-1.3.min.js"></script>
<script type='text/javascript' src='javascript/jquery.simplemodal.js'></script>
<script type="text/javascript" src="javascript/webpers.js"></script>
<script src="javascript/class2_slide.js" type="text/javascript"></script>-->
<!-- 
	font-family: 'Noto Sans', sans-serif;
-->
<title>Like Us</title>
</head>
<body>
<div id="fb-root"></div>
<script type="text/javascript" src="https://connect.facebook.net/en_US/all.js"></script>
<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
	         	appId  : '624830547552783',
	         	status : true, // check login status
	         	cookie : true, // enable cookies to allow the server to access the session
	         	xfbml  : true,  // parse XFBML	  
	    });
	    
	FB.Canvas.setAutoGrow();
    // Additional initialization code such as adding Event Listeners goes here
    FB.Event.subscribe('edge.create', function(href, widget) {
    	//alert('You liked the URL: ' + response);
		window.top.location.href = 'https://apps.facebook.com/breakthesilence';
	});
    
  };

</script>

	<div style="width: 100%; height: 450px; overflow:hidden;">
	<p> Please like Mushimo </p>
	<div class="fb-like-box" data-href="https://www.facebook.com/mushimoApp" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>
	</div>
	
</body>
</html>