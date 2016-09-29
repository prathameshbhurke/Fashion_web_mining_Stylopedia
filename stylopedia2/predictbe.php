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
<link href='../fonts.googleapis.com/css@family=Oswald_3A400,300,700' rel='stylesheet' type='text/css'>
<link href='../fonts.googleapis.com/css@family=Droid+Serif_3A400italic,700italic' rel='stylesheet' type='text/css'>
<link href='../fonts.googleapis.com/css@family=Ubuntu' rel='stylesheet' type='text/css'>
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
				<li><a href="flicker.php">FLICKER FEEDS</a></li>
				<li><a href="login/login.php">SIGN IN / SIGN UP</a></li>
			</ul>
			<li><a href="itemwide.php">TRENDS & SHOPPING</a>
			<ul> 
				<li><a href="itemwide.php">SHOPSENSE</a></li>
				<li><a href="predict.php">STYLE IT!</a></li>
				<li><a href="trendingbrands.php">WEEKLY TRENDS</a></li>
			</ul>
			<li><a href="">FASHION</a>
			<ul>
				<li><a href="portfoliostripe.php">FASHION SHOWS</a></li>
				<li><a href="portfoliodrag.php">FASHION MEDIA</a></li>
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
<div class="container bigpadding" style="background:url(img/stripes.png);">
</div>
<style>
.img {
	border: 2px solid grey;
    position: relative;
    float: left;
    width: 500px;
    height: 500px;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: cover;
}

.righttext {

left:700px;
}
</style>
<div class="container white bigpadding">
	<section class="row">

		<?php if($_POST['color'] == 'red' && $_POST['gender'] == 'male') { ?>
		<p>	
			<div><p style="float: left; "><img src="images/shirts/red/male/1.jpg" height="200px" width="250px" ></p>				
				<h5>Brand Name: Gucci</h5>
				<p>Chrome red goes with sand color pants! Casual yet trendy!!</p>
			</div>
			
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/red/male/4.png" height="200px" width="250px" ></p>
				<h5>Brand Name: Dolce & Gabbana</h5>
				<p>New style of suiting up! </p>
			</div>
			
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/red/male/6.jpeg" height="200px" width="250px" ></p>
				<h5>Brand Name: Nike</h5>
				<p>A sporty look is never the same without Nike! </p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/red/male/7.jpeg" height="200px" width="250px" ></p>
				<h5>Brand Name: Nike</h5>
				<p>Bleed red! The sporty look for with skin tight Nike shirt!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/red/male/8.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: DaVinci</h5>
				<p>A bowling shirt by one of the finest brands. The shirt is designed to make you feel cosy and confident!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/red/male/2.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Versace</h5>
				<p>Are you ready for the upcoming presentation? The Skin tight maroon shirt gives you a professional look! </p>
			</div>			
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/red/male/3.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Armani</h5>
				<p>The trending chrome red Armani jacket is all you need! </p>
			</div>
			
		</p>
		
		<?php } else if($_POST['color'] == 'red' && $_POST['gender'] == 'female') { ?>
		<p>	
			<div><p style="float: left; "><img src="images/shirts/red/female/1.jpg" height="200px" width="250px" ></p>				
				<h5>Brand Name: Gucci</h5>
				<p>Sexy red top by Gucci!!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/red/female/6.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dior</h5>
				<p>A simple and casual look!! </p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/red/female/4.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dolce & Gabbana</h5>
				<p>A formal look! Good for business presentations! </p>
			</div>
			
			
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/red/female/7.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Prada</h5>
				<p>A beauty by Prada!! A dress for party or a casual presentation!!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/red/female/8.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Louis Vuitton</h5>
				<p>A formal wear by Louis Vuitton, with stunning red top and formal trouser to compliment it!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/red/female/2.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Versace</h5>
				<p>A comfortable yet fashionable summer wear by Versace!!</p>
			</div>			
		</p>
		
		<?php } else if($_POST['color'] == 'white' && $_POST['gender'] == 'male') { ?>
		<p>	
			<div><p style="float: left; "><img src="images/shirts/white/male/1.jpg" height="200px" width="250px" ></p>				
				<h5>Brand Name: Gucci</h5>
				<p>A casual white shirt by Gucci!!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/white/male/2.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dior</h5>
				<p>A perfect hand crafted shirt for the perfect occasion !! </p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/white/male/3.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dolce & Gabbana</h5>
				<p>A brand that will match up with you funky look!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/white/male/4.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Prada</h5>
				<p>A plain white, Irish cotton shirt will definitely set you apart from the rest of the crowd!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/white/male/5.png" height="200px" width="250px" ></p>
				<h5>Brand Name: Louis Vuitton</h5>
				<p>Time for bowling!</p>
			</div>
		</p>
		
		<?php } else if($_POST['color'] == 'white' && $_POST['gender'] == 'female') { ?>
		<p>	
			<div><p style="float: left; "><img src="images/shirts/white/female/1.jpg" height="200px" width="250px" ></p>				
				<h5>Brand Name: Gucci</h5>
				<p>A funky top for the teenager inside you!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/white/female/2.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Puma</h5>
				<p>A casual top by Puma!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/white/female/3.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dolce & Gabbana</h5>
				<p>A simple and cute top by D&C! </p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/white/female/4.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Prada</h5>
				<p>A plain white, Irish cotton shirt will definitely set you apart from the rest of the crowd!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/white/female/5.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Louis Vuitton</h5>
				<p>A Formal and comfortable shirt by LV!</p>
			</div>
		</p>
		
		<?php } else if($_POST['color'] == 'blue' && $_POST['gender'] == 'male') { ?>
		<p>	
			<div><p style="float: left; "><img src="images/shirts/blue/male/1.jpg" height="200px" width="250px" ></p>				
				<h5>Brand Name: Gucci</h5>
				<p>A casual blue shirt by Gucci!!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/blue/male/2.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dior</h5>
				<p>A perfect hand crafted shirt for the perfect occasion !! </p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/blue/male/3.jpeg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dolce & Gabbana</h5>
				<p>A plain blue, Irish cotton shirt will definitely set you apart from the rest of the crowd!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/blue/male/4.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Prada</h5>
				<p>A brand that will match up with you funky look!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/blue/male/5.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Peter England</h5>
				<p>The professional look by Peter England!!</p>
			</div>
		</p>
		
		<?php } else if($_POST['color'] == 'blue' && $_POST['gender'] == 'female') { ?>
		<p>	
			<div><p style="float: left; "><img src="images/shirts/blue/female/1.jpg" height="200px" width="250px" ></p>				
				<h5>Brand Name: Gucci</h5>
				<p>A formal and casual shirt by Gucci!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/blue/female/2.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dior</h5>
				<p>A complete outfit for party!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/blue/female/3.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dolce & Gabbana</h5>
				<p>A dress that will make you the limelight of the evening!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/blue/female/4.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Prada</h5>
				<p>All you need is diamond necklace with this outfit to cast that impression!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/blue/female/5.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Louis Vuitton</h5>
				<p>A traditional dress by LV</p>
			</div>
		</p>
		
		
		<?php } else if($_POST['color'] == 'green' && $_POST['gender'] == 'male') { ?>
		<p>	
			<div><p style="float: left; "><img src="images/shirts/green/male/1.jpg" height="200px" width="250px" ></p>				
				<h5>Brand Name: Gucci</h5>
				<p>Summer wear by Gucci!!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/green/male/2.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dior</h5>
				<p>A casual blue shirt by Dior!!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/green/male/3.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dolce & Gabbana</h5>
				<p>A plain green, Irish cotton shirt will definitely set you apart from the rest of the crowd!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/green/male/4.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Prada</h5>
				<p>A brand that will match up with you classy look!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/green/male/5.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Peter England</h5>
				<p>The professional look by Peter England!!</p>
			</div>
		</p>
		
		<?php } else if($_POST['color'] == 'green' && $_POST['gender'] == 'female') { ?>
		<p>	
			<div><p style="float: left; "><img src="images/shirts/green/female/1.jpg" height="200px" width="250px" ></p>				
				<h5>Brand Name: Gucci</h5>
				<p>A funky and casual shirt by Gucci!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/green/female/2.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dior</h5>
				<p>Business casual by Dior!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/green/female/3.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dolce & Gabbana</h5>
				<p>A dress that will make you the limelight of the evening!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/green/female/4.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Prada</h5>
				<p>All you need is diamond necklace with this outfit to cast that impression!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/green/female/5.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Louis Vuitton</h5>
				<p>A traditional dress by LV</p>
			</div>
		</p>
		
		<?php } else if($_POST['color'] == 'black' && $_POST['gender'] == 'male') { ?>
		<p>	
			<div><p style="float: left; "><img src="images/shirts/black/male/1.jpg" height="200px" width="250px" ></p>				
				<h5>Brand Name: Gucci</h5>
				<p>Summer wear by Gucci!!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/black/male/2.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dior</h5>
				<p>A casual black shirt by Dior!!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/black/male/3.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dolce & Gabbana</h5>
				<p>A plain green, Irish cotton shirt will definitely set you apart from the rest of the crowd!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/black/male/4.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Prada</h5>
				<p>A brand that will match up with you classy look!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/black/male/5.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Peter England</h5>
				<p>The professional look by Peter England!!</p>
			</div>
		</p>
		
		<?php } else if($_POST['color'] == 'black' && $_POST['gender'] == 'female') { ?>
		<p>	
			<div><p style="float: left; "><img src="images/shirts/black/female/1.jpg" height="200px" width="250px" ></p>				
				<h5>Brand Name: Nike</h5>
				<p>A funky and casual shirt by Nike!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/black/female/2.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Puma</h5>
				<p>Casual dress by Puma!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/black/female/3.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dolce & Gabbana</h5>
				<p>All set! Lets do yoga!!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/black/female/4.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Prada</h5>
				<p>All you need is diamond necklace with this outfit to cast that impression!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/black/female/5.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Louis Vuitton</h5>
				<p>A hand crafted one peice by LV!!</p>
			</div>
		</p>

		<?php } else if($_POST['color'] == 'yellow' && $_POST['gender'] == 'male') { ?>
		<p>	
			<div><p style="float: left; "><img src="images/shirts/yellow/male/1.jpg" height="200px" width="250px" ></p>				
				<h5>Brand Name: Gucci</h5>
				<p>Summer wear by Gucci!!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/yellow/male/2.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dior</h5>
				<p>A casual yellow shirt by Dior!!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/yellow/male/3.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dolce & Gabbana</h5>
				<p>A plain light yellow, Irish cotton shirt will definitely set you apart from the rest of the crowd!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/yellow/male/4.jpeg" height="200px" width="250px" ></p>
				<h5>Brand Name: Prada</h5>
				<p>A brand that will match up with you classy look!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/yellow/male/5.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Peter England</h5>
				<p>A bright lemon yellow casual full sleeve shirt by peter england</p>
			</div>
		</p>
		
		<?php } else if($_POST['color'] == 'yellow' && $_POST['gender'] == 'female') { ?>
		<p>	
			<div><p style="float: left; "><img src="images/shirts/yellow/female/1.jpg" height="200px" width="250px" ></p>				
				<h5>Brand Name: Nike</h5>
				<p>A funky and casual shirt by Nike!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/yellow/female/2.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Puma</h5>
				<p>Casual dress by Puma!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/yellow/female/3.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dolce & Gabbana</h5>
				<p>A lemon yellow top perfectly crafted to make you look good!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/yellow/female/4.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Prada</h5>
				<p>The brand says it all, comfort and style!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/yellow/female/5.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Louis Vuitton</h5>
				<p>The long and sexy outfit by LV!</p>
			</div>
		</p>
		<?php } else if($_POST['color'] == 'purple' && $_POST['gender'] == 'male') { ?>
		<p>	
			<div><p style="float: left; "><img src="images/shirts/purple/male/1.jpg" height="200px" width="250px" ></p>				
				<h5>Brand Name: Gucci</h5>
				<p>Summer wear by Gucci!!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/purple/male/2.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: US Polo Assasin</h5>
				<p>A casual purple shirt by US Polo Assasin!!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/purple/male/3.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dolce & Gabbana</h5>
				<p>A plain purple shirt, Irish cotton shirt that will definitely set you apart from the rest of the crowd!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/purple/male/4.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Prada</h5>
				<p>A brand that will match up with you classy look!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/purple/male/5.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Peter England</h5>
				<p>A bright purple casual full sleeve shirt by peter england</p>
			</div>
		</p>
		
		<?php } else if($_POST['color'] == 'purple' && $_POST['gender'] == 'female') { ?>
		<p>	
			<div><p style="float: left; "><img src="images/shirts/purple/female/1.jpg" height="200px" width="250px" ></p>				
				<h5>Brand Name: Nike</h5>
				<p>A funky and casual shirt by Nike!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/purple/female/2.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Puma</h5>
				<p>Casual dress by Puma!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/purple/female/3.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Dolce & Gabbana</h5>
				<p>A light purple top perfectly crafted to make you look good!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/purple/female/4.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Prada</h5>
				<p>The brand says it all, comfort and style!</p>
			</div>
			<div style="clear: left;">
				<p style="float: left;"><img src="images/shirts/purple/female/5.jpg" height="200px" width="250px" ></p>
				<h5>Brand Name: Louis Vuitton</h5>
				<p>The long and sexy outfit by LV!</p>
			</div>
		</p>
	<?php } ?>

	</section>
</div>
							<!-- end of #container -->
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
											© 2014 <a href="#" title="Website Design, Graphic Design, Applications &amp; Development" class="greytext meta">Stylopedia</a>
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
							<script src="../ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
							<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
							<script src="../ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
							<script>window.jQuery.ui || document.write('<script src="js/jquery-ui-1.8.23.custom.min.js"><\/script>')</script>
							<script src="js/libs/gumby.min.js"></script>
							<script src="js/plugins.js"></script>
							<script src="js/main.js"></script>
							<!-- Prompt IE 6 users to install Chrome Frame. We suggest that you not support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
							<!--[if lt IE 7 ]>
    <script src="../ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
							<!-- Social Widget Rendering Javascript /-->
							<!--ipt src="http://platform.twitter.com/widgets.js"></scri-->
							<!--ipt src="http://connect.facebook.net/en_US/all.js#xfbml=1"></scri-->
							<script type="text/javascript">
    (function() {
      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
      po.src = '../https@apis.google.com/js/plusone.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
  </script>
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