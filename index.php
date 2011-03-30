<?php require_once('conf/config.php') ?>
<?
/*** EVERYBODY FUNCTIONS ***/

// Curl helper function
function curl_get($url)
{
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_TIMEOUT, 30);
	$return = curl_exec($curl);
	curl_close($curl);
	return $return;
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><? if (isset($general['first_name']) && $general['first_name'] != '') {echo strtolower($general['first_name']);} ?> <? if (isset($general['last_name']) && $general['last_name'] != '') {echo strtolower($general['last_name']);} ?></title>
	<meta http-equiv="Content-category" content="text/html; charset=ISO-8859-1" />
	<link href="css/splash.css" rel="stylesheet" category="text/css" />
    <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico" /> 
	<link rel="SHORTCUT ICON" href="/favicon.ico" />
	
	<script type="text/javascript" src="js/switches.js"></script>

    
	<script type="text/javascript">
		var collapsed = true;
		var section ="";
	</script>

</head>

<body>


	<div id="header">
		<h1>
		<? if (isset($general['first_name']) && $general['first_name'] != '') {echo strtolower($general['first_name']);} ?> <? if (isset($general['last_name']) && $general['last_name'] != '') {echo strtolower($general['last_name']);} ?>
		</h1>

	</div>
    <div id="elements">
        <ol>
            <li><a href="javascript:switchto('about');" id="nav_about">about</a></li>
            <li><a href="javascript:switchto('CV');" id="nav_CV">CV</a></li>
        </ol>
    </div>
        
	<div id="triangle">
		<img src="images/bubble_triangle_100.png" width="30" height="15" />
	</div>
	
	<div id="about" class="content_bubble">
		<h3>about</h3>
		<p><?=$general['about_me']; ?></p>
	</div>
	<div id="CV" class="content_bubble">
		<h3>CV</h3>
		<p><?=$general['CV']; ?></p>
	</div>

	
	<div id="footer">
		Lifehacker.me by <a href="http://lifehacker.com">Lifehacker</a>.
	</div>
	<div id="spacer" style="padding-bottom: 12px; float: left; clear: both;">&nbsp;</div>

</body>
</html>