<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en" itemscope itemtype="http://schema.org/Product"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Stylopedia</title>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<meta name="author" content="humans.txt">
<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
<!--Facebook Metadata /-->
<meta property="fb:page_id" content=""/>
<meta property="og:image" content=""/>
<meta property="og:description" content=""/>
<meta property="og:title" content=""/>
<!--Google+ Metadata /-->
<meta itemprop="name" content="">
<meta itemprop="description" content="">
<meta itemprop="image" content="">
<!-- Mobile viewport optimized: j.mp/bplateviewport -->
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
<!-- CSS: implied media=all -->
<!-- CSS concatenated and minified via ant build script-->
<!-- <link rel="stylesheet" href="css/minified.css"> -->
<!-- CSS imports non-minified for staging, minify before moving to production-->
<link rel="stylesheet" href="css/imports.css">
<!-- SocialWidget.css - Prasad -->
<link rel="stylesheet" href="css/SocialWidget.css">
<!-- end CSS-->
<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
<!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
<script src="js/libs/modernizr-2.0.6.min.js"></script>
<!-- font -->
<link href='../../fonts.googleapis.com/css@family=Oswald_3A400,300,700' rel='stylesheet' type='text/css'>
<link href='../../fonts.googleapis.com/css@family=Droid+Serif_3A400italic,700italic' rel='stylesheet' type='text/css'>
<link href='../../fonts.googleapis.com/css@family=Ubuntu' rel='stylesheet' type='text/css'>
<meta name="robots" content="noindex,nofollow">
</head>
<body>
<!-- Facebook - Prasad -->
<div id="fb-root"></div>
<header>
<div class="container">
	<section class="row">
	<!--LOGO -->
	<div class="four columns">
			<img src="preview/logo.png" class="logo" alt="logo">
	</div>
	<!--END LOGO -->
	<!-- NAVIGATION -->
	<div class="eight columns">
		<nav id="navigationmain">
		<ul id="menu">
			<li class="active"><a href="index.php">HOME</a></li>
			<li><a href="">MY STYLE</a>
			<ul>
				<li><a href="features.php">SOCIAL MEDIA FEEDS</a></li>
				<li><a href="rss.php">RSS FEEDS</a></li>
			</ul>
			<li><a href="itemwide.php">TRENDS & SHOPPING</a>
			<li><a href="">FASHION</a>
			<ul>
				<li><a href="portfoliostripe.php">FASHION SHOWS</a></li>
				<li><a href="">FASHION PARTIES</a></li>
				<li><a href="portfoliodrag.php">FASHION MEDIA</a></li>
				<li><a href="">FASHION MAGAZINES</a></li>
			</ul>
			</li>
			<li><a href="blogsingle.php">BLOG</a></li>
			<li><a href="about.php">ABOUT</a></li>
		</ul>
		</nav>
		<!-- END NAVIGATION -->
	</div>
	</section>
</div>
</header>
<div class="container" style="background:url(preview/nir1.jpg);background-position:top-left;">
	<section class="row largetoppadding bigbottompadding">
	<div class="six columns smallbottompadding leftpadding" style="background-color:rgba(0,0,0,0.5);">
		<h1 class="italic whitetext">Welcome to Stylopedia.</h1>
		<h6 class="whitetext">We create out of this world experiences for out of this world brands and activate them across all digital media.</h6>
	</div>
	</section>
</div>
<!-- CONTACT CONTAINER -->
<div class="container" style="background:url(img/stripes.png);">
	<section class="row white">
	<div class="seven columns leftpadding bigpadding" data-role="form">
		<h3 class="extrabold blacktext midbottommargin">GET IN TOUCH</h3>
		<p class="meta">
			Please fill out the form below to get in touch. We aim to respond to all enquiries within 3 working days.
		</p>
		<form method="post" action="#" id="contactform">
			<div class="row">
				<dl class="field eight columns">
					<dd><label for="name">Your name*</label></dd>
					<dt class="text"><input type="text" name="name" id="name"/>
					</dt>
					<dd class="msg">You filled this out wrong.</dd>
				</dl>
			</div>
			<div class="row">
				<dl class="field eight columns">
					<dd><label for="email">Your E-mail*</label></dd>
					<dt class="text"><input type="text" name="email" id="email"/>
					</dt>
					<dd class="msg">You filled this out wrong.</dd>
				</dl>
			</div>
			<div class="row">
				<dl class="field eight columns">
					<dd><label for="email">Subject</label></dd>
					<dt class="text"><input type="text" name="subject" id="subject"/>
					</dt>
					<dd class="msg">You filled this out wrong.</dd>
				</dl>
			</div>
			<dl class="field row">
				<dd><label for="message">Your message*</label></dd>
				<dt class="textarea">
				<textarea name="message" id="message"></textarea></dt>
				<dd class="error msg">You filled this out wrong.</dd>
			</dl>
			<div class="row">
				<input class="submit three columns" type="button" value="Submit" id="submit"/>
			</div>
		</form>
		<!-- END FORM -->
		<div class="row midpadding" id="success">
		</div>
	</div>
	<!-- SIDEBAR -->
	<div class="four columns push_one grey sidebar">
		<div class="twelve columns smallmargin">
			<h5 class="blacktext extrabold smallbottompadding">COME FIND US</h5>
			<p class="meta">
				1130 E Helen St<br>
				Tucson, AZ 85721<br/><br/>
				1 (123) 456 7890<br/>
				<span class="extrabold"></span>contact@stylopedia.com
			</p>
		</div>
		<div class="twelve columns blackhorizontal midmargin">
		</div>
		<!--<div class="twelve columns smallmargin">
			<h5 class="blacktext extrabold smallbottompadding">PROJECT PLANNER</h5>
			<p class="meta">
				We have prepared a project planner to get to know you and your project better.
			</p>
			<a href="../projectplanner.php" class="button">Get Started</a>
		</div>-->
	</div>
	</section>
</div>
<footer class="black">
<div class="container">
	<div class="row bigtoppadding">
		<div class="three columns">
			<h5 class="whitetext light">Contact Us Here.</h5>
			<p class="greytext midmargin meta">
				1130 E Helen St<br>
				Tucson, AZ 85721
			</p>
		</div>
		<div class="three columns">
			<h5 class="whitetext light">Or Here.</h5>
			<p class="greytext midmargin meta">
				<span>1 (123) 456 7890</span><br>
				<a href="mailto:" class="whitetext">contact@stylopedia.com</a>
			</p>
		</div>
		<div class="three columns">
			<h5 class="whitetext light">Follow Us</h5>
			<div id="" class="social-widget midmargin">
			<div class="buttons">
				<div class="fb-follow" data-href="https://www.facebook.com/stylopedia1" data-colorscheme="light" data-layout="standard" data-show-faces="true">
				<a href="https://www.facebook.com/stylopedia1" class="facebook fb-follow" title="Facebook">Facebook</a>
				</div>
				<a href="https://twitter.com/stylopedia1" class="twitter" title="Twitter">Twitter</a>
				<a href="https://plus.google.com/b/115208767825416408073/115208767825416408073/about?hl=en" class="googleplus" title="GooglePlus">GooglePlus</a>
			</div>
			</div>
		</div>
		<div class="three columns newsletter">
			<h5 class="whitetext light">Newsletter.</h5>
			<p class="smallfont">
				Email updates.
			</p>
			<form id="newsletter" action="#" method="post">
				<dl class="field row">
					<dt class="text"><input type="text" placeholder="Your Email..."/></dt>
					<dd class="msg"><span class="caret"></span>You filled this out wrong.</dd>
					</dl>
					<input type="submit" name="Submit" value="Submit" class="submit alpha four columns">

			</form>
		</div>
	</div>
	<div class="greyhorizontal midmargin">
	</div>
	<div class="row">
		<div class="four columns">
			<p class="greytext meta">
				© 2014 <a href="#" title="Website Design, Graphic Design, Applications &amp; Development" class="greytext meta">Stylopedia
			</p>
		</div>
		<div class="five columns">
			<p class="meta">
				<a href="#" class="greytext">Home</a> &nbsp; / &nbsp; <a href="about.php" class="greytext">About</a> &nbsp; / &nbsp; &nbsp; / &nbsp; <a href="blogsingle.php" class="greytext">Blog</a> &nbsp; / &nbsp; <a href="contact.php" class="greytext">Contact</a>
			</p>
		</div>
		<div class="three columns right">
			<p class="meta">
				<a href="#" class="greytext">Facebook</a> / &nbsp; <a href="#" class="greytext">Twitter</a> / &nbsp; <a href="#" class="greytext">Dribbble</a>
			</p>
		</div>
	</div>
</div>
</footer>
<!-- JavaScript at the bottom for fast page loading -->
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
<script src="../../ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script>window.jQuery.ui || document.write('<script src="js/jquery-ui-1.8.23.custom.min.js"><\/script>')</script>
<script src="js/libs/gumby.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script type="text/javascript" src="../../maps.google.com/maps/api/js@sensor=true">
</script>
<script src="js/maps.js">
</script>
<script type="text/javascript">
//<![CDATA[
    var map;
    $(document).ready(function(){
    prettyPrint();
    map = new GMaps({
    div: '#map',
    lat: 48.8584,
    lng: 2.2946,
    });
    map.addMarker({
    lat: 48.8584,
    lng: 2.2946,
    title: 'MONTREAL Html Template',
    click: function(e){
    if(console.log)
    console.log(e);
    alert('You clicked in this marker');
    }
    });
    });
    //]]>
    </script>
<script>
$(document).ready(function(){
$('#submit').click(function(){
$.post("sendemail.php", $("#contactform").serialize(),  function(response) {
$('#success').php(response);
//$('#success').hide('slow');
});
return false;
});
});
</script>
<!-- Prompt IE 6 users to install Chrome Frame. We suggest that you not support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
    <script src="../../ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
<!-- Social Widget Rendering Javascript /-->
<!--ipt src="http://platform.twitter.com/widgets.js"></scri-->
<!--ipt src="http://connect.facebook.net/en_US/all.js#xfbml=1"></scri-->
<script type="text/javascript">
    (function() {
      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
      po.src = '../../https@apis.google.com/js/plusone.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
  </script>
<!--ipt type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27560177-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</scri-->
<!-- End Social Widget Rendering Javascript /-->
		<!-- Twitter - Prasad-->
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<!-- Facebook - Prasad-->
		<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=216597621867815";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
</body>
</html>