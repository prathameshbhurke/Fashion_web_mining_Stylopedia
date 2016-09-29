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
	        border: 7px solid #d5d5d5;
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
	</style>

<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
<!-- CSS: implied media=all -->
<!-- CSS concatenated and minified via ant build script-->
<!-- <link rel="stylesheet" href="css/minified.css"> -->
<!-- CSS imports non-minified for staging, minify before moving to production-->
<link rel="stylesheet" href="css/imports.css">
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
<script src="js/dynamicgrid/jquery.finalTilesGallery.js"  type="text/javascript"></script>
<script src="js/dynamicgrid/vendor/jquery-1.9.1.min.js"></script>
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
			<li><a href="about.php">ABOUT</a></li>
			<li><a href="portfoliobasic.php">PORTFOLIO</a>
			<ul>
				<li><a href="portfoliodrag.php">FOLIO DRAG</a></li>
				<li><a href="portfoliostripe.php">FOLIO STRIPE</a></li>
				<li><a href="portfoliogridblack.php">FOLIO BLACK</a></li>
				<li><a href="portfoliogridwhite.php">FOLIO WHITE</a></li>
				<li><a href="portfoliogridblock.php">FOLIO BLOCK</a></li>
				<li><a href="itembasic.php">ITEM BASIC</a></li>
				<li><a href="itemfull.php">ITEM FULL</a></li>
				<li><a href="itemwide.php">ITEM WIDE</a></li>
			</ul>
			</li>
			<li><a href="blog.php">NOTES</a>
			<ul>
				<li><a href="bloglist.php">NOTE LIST</a></li>
				<li><a href="blogsingle.php">NOTE SINGLE</a></li>
			</ul>
			</li>
			<li class="active"><a href="features.php">PAGES</a>
			<ul>
				<li><a href="features.php">FEATURES</a></li>
				<li><a href="projectplanner.php">PLANNER</a></li>
				<li><a href="thanks.php">THANKS</a></li>
			</ul>
			</li>
			<li><a href="contact.php">CONTACT</a></li>
		</ul>
		</nav>
		<!-- END NAVIGATION -->
	</div>
	</section>
</div>
</header>
<div class="container bigpadding" style="background:url(img/stripes.png);">
</div>
<div class="container white bigpadding">
	<section class="row largepadding">
	<section id="final-tg">
	    <div class="ftg-items">
	    	<article class="tile ftg-set-1">
                <a href="preview/trends/toptrends/gucci.jpg">
                    <img class="item" src="preview/trends/toptrends/gucci.jpg" />
                    <div class="caption">
                        <p>Photo title</p>
                    </div>
                </a>
            </article>
	    	<article class="tile ftg-set-1">
                <a href="preview/trends/toptrends/VictoriasSecret.jpg">
                    <img class="item" src="preview/trends/toptrends/VictoriasSecret.jpg" />
                    <div class="caption">
                        <p>Photo title</p>
                    </div>
                </a>
            </article>
	    	<article class="tile ftg-set-1">
                <a href="preview/trends/toptrends/Dior.jpg">
                    <img class="item" src="preview/trends/toptrends/Dior.jpg" />
                    <div class="caption">
                        <p>Photo title</p>
                    </div>
                </a>
            </article>
	    	<article class="tile ftg-set-1">
                <a href="preview/trends/toptrends/DolceGabbana.jpg">
                    <img class="item" src="preview/trends/toptrends/DolceGabbana.jpg" />
                    <div class="caption">
                        <p>Photo title</p>
                    </div>
                </a>
            </article>
	    	<article class="tile ftg-set-1">
                <a href="preview/trends/toptrends/Burberry.jpg">
                    <img class="item" src="preview/trends/toptrends/Burberry.jpg" />
                    <div class="caption">
                        <p>Photo title</p>
                    </div>
                </a>
            </article>
	    	<article class="tile ftg-set-1">
                <a href="preview/trends/toptrends/chanel.jpg">
                    <img class="item" src="preview/trends/toptrends/chanel.jpg" />
                    <div class="caption">
                        <p>Photo title</p>
                    </div>
                </a>
            </article>
	    	<article class="tile ftg-set-1">
                <a href="preview/trends/toptrends/adidas.jpg">
                    <img class="item" src="preview/trends/toptrends/adidas.jpg" />
                    <div class="caption">
                        <p>Photo title</p>
                    </div>
                </a>
            </article>
	    	<article class="tile ftg-set-1">
                <a href="preview/trends/toptrends/chanel.jpg">
                    <img class="item" src="preview/trends/toptrends/chanel.jpg" />
                    <div class="caption">
                        <p>Photo title</p>
                    </div>
                </a>
            </article>
	    </div>
	</section>
	<!--<div class="eight columns centered">
		<h2 class="center italic midbottompadding">Thank you</h2>
		<p class="center meta">
			Thank you for your interest in working with us. We have received your project request. We aim to respond to all enquiries within 3 working days.
		</p>
		<section class="row">
		<div class="four columns push_two">
			<a href="#" class="secondbutton icon-facebook">&nbsp; check on facebook</a>
		</div>
		<div class="four columns">
			<a href="#" class="secondbutton icon-twitter">&nbsp; follow on twitter</a>
		</div>
		</section>
	</div>-->
<!--
	<div id="gallery">
	    <div class="ftg-items">
	        <div class="tile">
	            <a class="tile-inner" href="preview/trends/toptrends/gucci.jpg">
	                <img class="item" src="preview/trends/toptrends/gucci.jpg" />
	            </a>
	        </div>
	        <div class="tile">
	            <a class="tile-inner" href="preview/trends/toptrends/VictoriasSecret.jpg">
	                <img class="item" src="preview/trends/toptrends/VictoriasSecret.jpg" />
	            </a>
	        </div>
	        <div class="tile">
	            <a class="tile-inner" href="preview/trends/toptrends/Dior.jpg">
	                <img class="item" src="preview/trends/toptrends/Dior.jpg" />
	            </a>
	        </div>
	        <div class="tile">
	            <a class="tile-inner" href="preview/trends/toptrends/DolceGabbana.jpg">
	                <img class="item" src="preview/trends/toptrends/DolceGabbana.jpg" />
	            </a>
	        </div>
	        <div class="tile">
	            <a class="tile-inner" href="preview/trends/toptrends/Burberry.jpg">
	                <img class="item" src="preview/trends/toptrends/Burberry.jpg" />
	            </a>
	        </div>
	        <div class="tile">
	            <a class="tile-inner" href="preview/trends/toptrends/chanel.jpg">
	                <img class="item" src="preview/trends/toptrends/chanel.jpg" />
	            </a>
	        </div>
	        <div class="tile">
	            <a class="tile-inner" href="preview/trends/toptrends/adidas.jpg">
	                <img class="item" src="preview/trends/toptrends/adidas.jpg" />
	            </a>
	        </div>
	        <div class="tile">
	            <a class="tile-inner" href="preview/trends/toptrends/CalvinKlein.jpg">
	                <img class="item" src="preview/trends/toptrends/CalvinKlein.jpg" />
	            </a>
	        </div>
	    </div>
	</div>
-->
	</section>
</div>
<!-- end of #container -->
<footer class="black">
<div class="container">
	<div class="row bigtoppadding">
		<div class="three columns">
			<h5 class="whitetext light">Contact Us Here.</h5>
			<p class="greytext midmargin meta">
				786 Some Place Nice, Rd Nice<br>
				 State, Big Country 7860
			</p>
		</div>
		<div class="three columns">
			<h5 class="whitetext light">Or Here.</h5>
			<p class="greytext midmargin meta">
				p <span>(786) 9876 543 210</span><br>
				 e <a href="mailto:" class="whitetext">contact@youragency.com</a>
			</p>
		</div>
		<div class="three columns">
			<h5 class="whitetext light">Project Planner.</h5>
			<p class="greytext midmargin meta">
				We have prepared a <a href="planner.php" class="whitetext">project planner</a> to get to know your project better.
			</p>
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
				© 2012 <a href="#" title="Website Design, Graphic Design, Applications &amp; Development" class="greytext meta">Montreal RSPNSV HTML</a>
			</p>
		</div>
		<div class="five columns">
			<p class="meta">
				<a href="#" class="greytext">Home</a> &nbsp; / &nbsp; <a href="about.php" class="greytext">About</a> &nbsp; / &nbsp; <a href="portfolio.php" class="greytext">Portfolio</a> &nbsp; / &nbsp; <a href="blog.php" class="greytext">Blog</a> &nbsp; / &nbsp; <a href="contact.php" class="greytext">Contact</a>
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
<!-- Prasad - Start - Dynamic Grid -->
<!--<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('#gallery').finalTilesGallery();
  });
</script>-->
	<script>
            //start with page 1
            var currentPage = 1;

            //write here how many pages you have
            var totalPages = 30;

            //instantiate Final Tiles Gallery
            $("#final-tg").finalTilesGallery({
                minTileWidth: 180,
                margin: 30,
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
<!-- Prasad - End - Dynamic Grid -->
</body>
</html>