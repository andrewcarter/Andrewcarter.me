<?php require_once('conf/config.php') ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Chris Marsh</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="css/splash.css" rel="stylesheet"/>
    <!-- CSS for GitHub Badge Widget: implied media="all" -->
	<link rel="stylesheet" href="js/jquery.github_badge.css?v=1" />
    
	<script  type="text/javascript"  src="http://code.jquery.com/jquery-1.5.1.js"></script>
	<script type="text/javascript" src="js/switches.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
        
	<script type="text/javascript">
		var collapsed = true;
		var section ="";
	</script>

	<script type="text/javascript">
			var flashvars = {d: "IzMEb42tv1i*fh8C9hZsMQ"};
			var params = {
				movie: "https://acrobat.com/Clients/current/ADCMainEmbed.swf",
				quality: "high",
				wmode: "transparent",
				bgcolor: "#202020",
				allowScriptAccess: "sameDomain",
				allowFullScreen: "true"
				
				};
			var attributes = {
				movie: "https://acrobat.com/Clients/current/ADCMainEmbed.swf",
				quality: "high",
				wmode: "transparent",
				bgcolor: "#202020",
				allowScriptAccess: "sameDomain",
				allowFullScreen: "true",
				loop: "false",
				align: "middle"
				
				};
			attributes.id = "CV";
			swfobject.embedSWF("https://acrobat.com/Clients/current/ADCMainEmbed.swf", "CV_content", "680", "1000", "9.0.0", false, flashvars, params, attributes);
			
		</script>
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
		<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

</head>

<body>
	<div id="header">
		<h1>
		CHRIS MARSH
		</h1>

	</div>
    <div id="elements">
        <ol>
            <li><a href="javascript:switchto('about');" id="nav_about">about</a></li>
            <li><a href="javascript:switchto('CV');" id="nav_CV">CV</a></li>
            <li><a href="javascript:switchto('github');" id="nav_github">github</a></li>
            <li><a href="javascript:switchto('gallery');" id="nav_gallery">publications</a></li>
        </ol>
    </div>
        
	<div id="triangle">
		<img src="images/bubble_triangle_100.png" width="30" height="15" />
	</div>
	
	<div id="about" class="content_bubble">
		<h3>about</h3>
            <p>I am currently a masters student in Physical Geography at the <a href="http://www.usask.ca/">University of Saskatchewan</a> in Saskatchewan, Canada 
            working with <a href="http://www.usask.ca/geography/faculty/pomeroy/index.htm">John Pomeroy</a> and  <a href="http://www.cs.usask.ca/~spiteri/">Raymond Spiteri</a>. I have an interest in hydrological modelling and related fieldwork.
            I  have  a B.Sc. in Physical Geography Honours with Computer science and Math minors.                   
            </p>
	</div>
	<div id="CV" class="content_bubble">
    	<div id="CV_content">
            <p><a href="2011-marsh-CV.pdf">If you don't have Flash installed, or wish to download the PDF file, click here.</a></p>

			<!--<iframe src="http://docs.google.com/viewer?url=chrismarsh.ca%2Ftest%2F2011-marsh-CV.pdf&embedded=true" width="700" height="500" style="border: none;"></iframe> -->
            <!--<object data="2011-marsh-CV.pdf?#zoom=75&scrollbar=1&toolbar=0&navpanes=0" type="application/pdf" width="100%" height="100%"> -->
		</div>
    </div>
    
    <div id="github" class="content_bubble">
    </div>
    

    <div id="gallery"  class="content_bubble">
    <p><a href="http://docs.google.com/viewer?url=chrismarsh.ca%2Ftest%2F2011-marsh-CV.pdf&embedded=true?iframe=true&width=100%&height=100%" rel="prettyPhoto[iframes]">CV</a></p>
   <p><a href="http://docs.google.com/viewer?url=chrismarsh.ca%2Ftest%2FTR-2009-02.pdf&embedded=true?iframe=true&width=100%&height=100%" rel="prettyPhoto[iframes]">Marsh, C.B., Spiteri R.J., Davison B. Improved MESH efficiency via parallelization and code optimization. University of Saskatchewan Technical report 2009-02</a></p>
     
    	<p><a href="http://docs.google.com/viewer?url=chrismarsh.ca%2Ftest%2Fmarsh_ip3_poster.pdf&embedded=true?iframe=true&width=100%&height=100%" rel="prettyPhoto[iframes]">Marsh C.B., Spiteri R.J., Davison B. Improved MESH efficiency via parallelization and code optimization. Poster session presented at: IP3/WC2N Annual conference; 2009 Oct14-17; Lake Louise, Alberta, Canada</a></p>
   <p> <a href="http://docs.google.com/viewer?url=chrismarsh.ca%2Ftest%2FMarsh_2007_IUGG.pdf&embedded=true?iframe=true&width=100%&height=100%" rel="prettyPhoto[iframes]">Marsh C.B., Pohl S., Liston G.E. Impact of increased shrub density on snow accumulation and melt in the Arctic tundra. Poster session presented at: IUGG; 2007; Perugia, Italy</a></p>


    </div>


	<div id="footer">
		Lifehacker.me by <a href="http://lifehacker.com">Lifehacker</a>.
	</div>
	<div id="spacer" style="padding-bottom: 12px; float: left; clear: both;">&nbsp;</div>

	<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
	</script>


</body>
      

	<!-- Script for GitHub Badge Widget -->
	<script src="http://www.chrismarsh.ca/test/js/jquery.github_badge.js"></script>

    <script>
          $("#github").GitHubBadge({
			login: "chrismarsh",
			sorting: "ascending", // ascending or descending for repos (user badge) and issues (project badge)
			theme: "github", // adds value as class for entire badge
			animate_style: "slide" //slideDown or show
            });
	</script>
</html>