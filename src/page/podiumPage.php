<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="author" content="Mushimu">
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript, Facebook">
<meta name="description" content="Break The Silence Facebook App">

<script type="text/javascript">
    function showFrontLayer() {
        document.getElementById('bg_mask').style.visibility='visible';
        document.getElementById('frontlayer').style.visibility='visible';
    }
    function hideFrontLayer() {
        document.getElementById('bg_mask').style.visibility='hidden';
        document.getElementById('frontlayer').style.visibility='hidden';
    }
    
    // Grab a handle to the audio
    var audioPlayer = document.getElementById("audio"); 
    //alert(audioPlayer);
    // Turn off the default controls 
    audioPlayer.controls = false;
    
    function togglePlayPause() { 
    	 //alert ('play button clicked');
    	// audio.play(); 
        var playpause = document.getElementById("playpause"); 
        if (audioPlayer.paused || audioPlayer.ended) {
        	playpause.title = "pause";
        	playpause.innerHTML = "pause"; 
        	audioPlayer.play(); 
        } else { 
        	playpause.title = "play"; 
        	playpause.innerHTML = "play"; 
        	audioPlayer.pause(); 
        } 
    }  
            
</script>

<style type="text/css">

    #bg_mask {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        margin-top: 0px;
        width: 400px;
        height: 300px;
        background-color: red;
        z-index: 0;
        visibility: hidden;
    } 

    #frontlayer {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
       // margin: 70px 140px 175px 140px;
        padding : 30px;
        width: 400px;
        height: 300px;
        background-color: pink;
        visibility: hidden;
        border: 1px solid black;
        z-index: 100;
    }

</style>

<title>Podium Page</title>
</head>
<body onload="showFrontLayer();">

 <div id="baselayer">
 	<div id="controls"> 
 		<button id="playpause" title="play" onclick="togglePlayPause()">Play</button>
 	</div>
 
 	<audio id="audio" controls>
		<source src="../img/sample.mp3" type="audio/mpeg"/>
		<!--<embed height="50" width="100" src="http://facebook.appsbd.org/breakTheSilence/src/img/sample.mp3">-->
	</audio>

        
    <div id="bg_mask">
        <div id="frontlayer"><br/><br/>
           Welcome to the app!! Raise your voice use senora :P !!
           <input type="button" value="Hide front layer" onclick="hideFrontLayer();"/>
        </div>
    </div>
 </div>
	
</body>
</html>