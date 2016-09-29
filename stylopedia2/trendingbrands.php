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
<title>Montreal Responsive HTML Template</title>
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
<!--Prasad - Start - Dynamic grid-->
<style>
html { font-family: Arial, sans-serif; background: #111; }
#final-tg  { width: 80%; margin: 10px auto; display: block; }

#final-tg ul { margin: 0; padding: 0; height: 50px; }
#final-tg li { list-style-type: none; }
#final-tg li a { color: #ccc; float: left; margin: 0 20px 0 0; padding: 5px 10px; text-decoration: none; }
#final-tg li a:hover, #final-tg li a.selected { background: #333; color: #fff; }

#final-tg .tile .caption {
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	background: url(images/opaque.png);
	font-family: cursive;
	opacity:0;
	transition: all .3s;
	height: 100%;
}
#final-tg .tile > * {
	border: 0px solid #d5d5d5;
	border-radius: 4px;
}
#final-tg .tile a:hover .caption {
	opacity:1;
}
#final-tg .tile .caption p {
	margin:10px;
	color: #fff;
	font-size: 14px;
}
.load {
	width: 300px;
	display: block;
	margin: 20px auto;
	color: #fff;
	text-decoration: none;
	background: #333;
	padding: 10px;
	text-align: center;
}
h1 { color: #fff; }
h2 { color: yellow; font-size: 16px; }


.ftg-social {
display: none;
position: absolute;
bottom: 10px;
right: 10px;
}

</style>
<!--Prasad - End - Dynamic grid-->
<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
<!-- CSS: implied media=all -->
<!-- CSS concatenated and minified via ant build script-->
<!-- <link rel="stylesheet" href="css/minified.css"> -->
<!-- CSS imports non-minified for staging, minify before moving to production-->
<link rel="stylesheet" href="css/imports.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<!--Prasad - Start - Dynamic grid-->
<link rel="stylesheet" href="css/dynamicgrid/dynamicgrid.css">
<!--Prasad - End - Dynamic grid-->
<!-- end CSS-->
<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
<!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
<script src="js/libs/modernizr-2.0.6.min.js"></script>
<!--Prasad - Start - Dynamic grid-->
        <script src="js/dynamicgrid/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/dynamicgrid/jquery.finalTilesGallery.js"></script>
<!--Prasad - End - Dynamic grid-->
<!-- font -->
<link href='../fonts.googleapis.com/css@family=Oswald_3A400,300,700' rel='stylesheet' type='text/css'>
<link href='../fonts.googleapis.com/css@family=Droid+Serif_3A400italic,700italic' rel='stylesheet' type='text/css'>
<link href='../fonts.googleapis.com/css@family=Ubuntu' rel='stylesheet' type='text/css'>
<meta name="robots" content="noindex,nofollow">

</head>
<body>
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
			<li><a href="index.php">HOME</a></li>
			<li><a href="">MY STYLE</a>
			<ul>
				<li><a href="features.php">SOCIAL MEDIA FEEDS</a></li>
				<li><a href="rss.php">RSS FEEDS</a></li>
			</ul>
			<li><a href="itemwide.php">TRENDS & SHOPPING</a>
			<li class="active"><a href="">FASHION</a>
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
<div class="container bigpadding" style="background:url(img/stripes.png);">
</div>
<div class=" black nopadding">
	<section id="final-tg">
<?php
$con=mysqli_connect("localhost","root","","test");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM brandrating ORDER BY rating DESC");
$count = 0;
while($row = mysqli_fetch_array($result)) {
	echo '<article class="tile ftg-set-2">
			<a href="preview/trends/toptrends/' . $row['image_url'] . '">
				<img class="item" src="preview/trends/toptrends/' . $row['image_url'] . '" />
				<div class="caption">
					<p>Photo title</p>
				</div>
			</a>
			</article>';
  $count++;
}

mysqli_close($con);
?>
</section>
</div>


<script>

	//instantiate Final Tiles Gallery
	$("#final-tg").finalTilesGallery({
		minTileWidth: 300,
		margin: 10,
		onComplete: function () {

			//collect new photos on button click
			$(".load").click(function (e) {
				e.preventDefault();

				//call your ajax page or service
				$.get("ajax-content.html", { page: currentPage }, function (html) {

					//get the instance
					var instance = $("#final-tg").data("finalTilesGallery");

					//add elements to the instance
					instance.addElements(html);

					//increment current page
					if(++currentPage == totalPages) {

						//no more pages, so remove the load button
						$(".load").remove();
					}
				});
			});
		}
	});
</script>
</body>
</html>