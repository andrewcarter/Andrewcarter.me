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
    
    	<script type="text/javascript" src="js/switches.js"></script>
	<script type="text/javascript">
		var collapsed = true;
		var section ="";
	</script>

<!-- All credit to http://stackoverflow.com/questions/262740/javascript-onhover-event/263194#263194 -->
	<script type="text/javascript">
    
    var HoverListener = {
        addElem: function( elem, callback, delay )
        {
            if ( delay === undefined )
            {
                    delay = 1000;
            }
            var hoverTimer;
            addEvent( elem, 'mouseover', function()
            {
                    hoverTimer = setTimeout( callback, delay );
            } );
            addEvent( elem, 'mouseout', function()
            {
                    clearTimeout( hoverTimer );
            } );
        }
    }
    /*needed as the script executes if directly called */
    function about()
    {
       switchto("about");
    }
    function cv()
    {
       switchto("CV");
    }
    function github()
    {
       switchto("github");
    }
    
    //  Generic event abstractor
    function addEvent( obj, evt, fn )
    {
        if ( typeof obj.addEventListener != undefined )
        {
            obj.addEventListener( evt, fn, false );
        }
        else if ( typeof obj.attachEvent != undefined )
        {
            obj.attachEvent( "on" + evt, fn );
        }
    }
    
    addEvent( window, 'load', function()
    {
       HoverListener.addElem( document.getElementById( 'nav_about' ), about, 200 );
       HoverListener.addElem( document.getElementById( 'nav_CV' ), cv, 200 );
       HoverListener.addElem( document.getElementById( 'nav_github' ), github, 200 );
    } );
    
    </script>

</head>

<body>
	<div id="sample_user_badge"></div>

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
    <div id="github" class="content_bubble">
    </div>
    


	
	<div id="footer">
		Lifehacker.me by <a href="http://lifehacker.com">Lifehacker</a>.
	</div>
	<div id="spacer" style="padding-bottom: 12px; float: left; clear: both;">&nbsp;</div>

</body>
      
	 <script  type="text/javascript"  src="http://code.jquery.com/jquery-1.5.1.js"></script>
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