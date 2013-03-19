<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Peter Maynard</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/layout.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
		<meta name="description" content="Peter Maynard, is a Computer Science Student in Aber UK.  Currently working as a freelance web designer.  With an intrest in computer networks and system administration."/>
		<meta name="keywords" content="Pete, Peter Maynard, Maynard, Computer Science, Aber, UK, Linux Administration, CISCO, CCNA, Freelance Web Design, Pembrokeshire, Wales"/>
		<!-- Stats -->		
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-21206115-2']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>

		<!-- Internet Defense League -->
		<script type="text/javascript">
		    window._idl = {};
		    _idl.variant = "banner";
		    (function() {
			var idl = document.createElement('script');
			idl.type = 'text/javascript';
			idl.async = true;
			idl.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'members.internetdefenseleague.org/include/?url=' + (_idl.url || '') + '&campaign=' + (_idl.campaign || '') + '&variant=' + (_idl.variant || 'banner');
			document.getElementsByTagName('body')[0].appendChild(idl);
		    })();
		</script>

		<!-- Shadow box -->
		<link rel="stylesheet" type="text/css" href="JQuery/shadowbox/shadowbox.css">
		<script type="text/javascript" src="JQuery/shadowbox/shadowbox.js"></script>
		<script type="text/javascript">
		Shadowbox.init();
		</script>

		<!-- Twitter and RSS feed -->
		<script language="javascript" src="JQuery/jquery.min.js" type="text/javascript"></script>
		<script language="javascript" src="JQuery/jquery.tweet.js" type="text/javascript"></script> 
		<script src="https://www.google.com/jsapi?key=ABQIAAAAUf60oiCG4ga-q9198B6tRhRKhT-f9vheZeSnwoM-_yj4CudIWRQQ0VrD447PNiM_fWa59OWuooMKNQ" type="text/javascript"></script>
		<script type="text/javascript">
		
		$(document).ready(function(){
			$(".tweet").tweet({
				username: "pgmaynard",
				join_text: "auto",
				avatar_size: 0,
				count: 3,
				auto_join_text_default: "",
				auto_join_text_ed: "",
				auto_join_text_ing: "",
				auto_join_text_reply: "",
				auto_join_text_url: "",
				loading_text: "Loading..."
			});
		});
		
		google.load("feeds", "1");
		function OnLoad() {
			var feedControl = new google.feeds.FeedControl();
			feedControl.setNumEntries(6);
			feedControl.addFeed("http://nationpigeon.com/feed");
			feedControl.draw(document.getElementById("feed"));
		}
		google.setOnLoadCallback(OnLoad);
		</script>


	</head>
	<body>

		<div class="wrapper">

			<div class="header">
				<h1><a href="index.php">Peter Maynard</a></h1>
				<ul class="left">
					<li><a target="_BLANK" href="https://www.facebook.com/pgmaynard"><img alt="Facebook" border=0 src="images/facebook.png"/></a>
					<a target="_BLANK" href="http://uk.linkedin.com/pub/peter-maynard/27/7b3/bb"><img alt="LinkedIn" border=0 src="images/linkedin.png"/></a>
					<a target="_BLANK" href="https://twitter.com/pgmaynard"><img alt="Twitter" border=0 src="images/twitter.png"/></a>
					<a target="_BLANK" href="https://www.last.fm/user/intel17"><img alt="lastfm" border=0 src="images/lastfm.png"/></a></li>
				</ul>
			</div>
			
			<div class="menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php?p=blog">Blog</a></li>
					<li><a href="index.php?p=cv">CV</a></li>
					<li><a href="index.php?p=portfolio">Portfolio</a></li>
				</ul> 
			</div>
			<?php 
			if(isset($_GET['p'])){
			switch($_GET['p']){
				case "cv":
					require_once("cv.php"); 
				break;
				case "portfolio":
					require_once("portfolio.php"); 
				break;
				case "blog":
					require_once("blog.php"); 
				break;
				default: require_once("home.php");
				break;
			}
			}else{ require_once("home.php");}?>

			<br/>
			<div class="clear"></div>
			<div class="push"></div>

		</div>

		<div class="footer">
			<div class="element">
				<ul class="left">
					<h2>Navigation</h2>
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php?p=blog">Blog</a></li>
					<li><a href="index.php?p=cv">CV</a></li>
					<li><a href="index.php?p=portfolio">Portfolio</a></li>
				</ul>

				<ul class="left">
					<h2>Twitter</h2>
					<li><div class="tweet"></div></li>
				</ul>
			</div>
			<div class="copyright">Copyright &copy; 2006 &mdash; 2012 <a href="http://petermaynard.co.uk/" title="Peter Maynard">Peter Maynard</a></div>
		</div>
		
	</body>
</html>
