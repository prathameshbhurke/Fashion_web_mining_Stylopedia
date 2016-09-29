<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en" itemscope itemtype="http://schema.org/Product"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Montreal Responsive HTML Template</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="humans.txt">

  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

  <!--Facebook Metadata /-->
  <meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
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
						 </ul></li>
						 <li><a href="blog.php">NOTES</a>
						 <ul>
						 <li><a href="bloglist.php">NOTE LIST</a></li>
						 <li><a href="blogsingle.php">NOTE SINGLE</a></li>
						 </ul></li>
						 <li class="active"><a href="features.php">PAGES</a>
						 <ul>
						 <li><a href="features.php">FEATURES</a></li>
						 <li><a href="projectplanner.php">PLANNER</a></li>
						 <li><a href="thanks.php">THANKS</a></li>
						 </ul></li>
						 <li><a href="contact.php">CONTACT</a></li>

                        </ul>
                    </nav>
                <!-- END NAVIGATION -->
</div>

</section>

        </div>
</header>




<!-- CONTACT CONTAINER -->
<div class="container" style="background:url(img/stripes.png);">

<section class="row white bigpadding">

<section class="row bigtoppadding midbottompadding">

<h3 class="blacktext bold midbottommargin center">PROJECT PLANNER</h3>
<div class="three columns alpha centered blackhorizontal"></div>
<div class="eight columns centered smalltoppadding">
<p class="meta center">Montreal comes with a fully working project planner contact form. The completed fields from the below form are received in an email in a nice table layout.</p>
</div>
</section>

          <section class="row">
                <div class="ten columns centered smallpadding">
                    <form method="post" action="projectplanner.php" onsubmit="return CheckAll(this);" id="form1">
                        <h6 class="extrabold smallbottompadding">Hello there</h6>

                        <div class="row">
                            <dl class="field six columns">
                                <dd><label for="name">Your Name*</label></dd>

                                <dt class="text"><input type="text" id="name" name="fieldnm_1" data-form="required"></dt>

                                <dd class="msg">You filled this out wrong.</dd>
                            </dl>

                            <dl class="field six columns">
                                <dd><label for="email">Your E-mail*</label></dd>

                                <dt class="text"><input type="text" id="email" name="fieldnm_2" data-form="required"></dt>

                                <dd class="msg">You filled this out wrong.</dd>
                            </dl>
                        </div>

                        <div class="row">
                            <dl class="field six columns">
                                <dd><label for="telephone">Telephone number</label></dd>

                                <dt class="text"><input type="text" id="telephone" name="fieldnm_3"></dt>
<dd class="msg">You filled this out wrong.</dd>
                            </dl>

                            <dl class="field six columns">
                                <dd><label for="company">Company name</label></dd>

                                <dt class="text"><input type="text" id="company" name="fieldnm_4"></dt>
<dd class="msg">You filled this out wrong.</dd>
                            </dl>
                        </div>

                        <div class="row">
                            <dl class="field six columns">
                                <dd><label for="website">Website URL (if applicable)</label></dd>

                                <dt class="text"><input type="text" id="website" name="fieldnm_5"></dt>
<dd class="msg">You filled this out wrong.</dd>
                            </dl>

                            <dl class="field six columns">
                                <dd><label for="location">Your location</label></dd>

                                <dt class="text"><input type="text" id="location" name="fieldnm_6"></dt>
<dd class="msg">You filled this out wrong.</dd>
                            </dl>
                        </div>

                        <h6 class="largetoppadding smallbottompadding extrabold">Project details</h6>

                        <dl class="field row">
                            <dd><label for="message">Please describe your project concept or idea</label></dd>

                            <dt class="textarea">
                            <textarea id="message" name="fieldnm_7"></textarea></dt>
<dd class="msg">You filled this out wrong.</dd>
                        </dl>

                        <div class="row">
                            <dl class="field six columns">
                                <dd><label for="req">Project requirements</label></dd>

                                <dt class="text"><input type="text" id="req" name="fieldnm_8" placeholder="Website, Branding, Mobile App etc"></dt>
<dd class="msg">You filled this out wrong.</dd>
                            </dl>

                            <dl class="field six columns">
                                <dd><label for="start">When do you hope to start</label></dd>

                                <dt class="text"><input type="text" id="start" name="fieldnm_9" data-form="required"></dt>
<dd class="msg">You filled this out wrong.</dd>
                            </dl>
                        </div>

                        <div class="row">
                            <dl class="field six columns">
                                <dd><label for="launch">When do you hope to launch</label></dd>

                                <dt class="text"><input type="text" id="launch" name="fieldnm_10"></dt>
<dd class="msg">You filled this out wrong.</dd>
                            </dl>

                            <dl class="field six columns">
                                <dd><label for="budget">Your budget*</label></dd>

                                <dt class="text"><input type="text" id="budget" name="fieldnm_11" data-form="required"></dt>

                                <dd class="msg">You filled this out wrong.</dd>
                            </dl>
                        </div>

                        <h6 class="largetoppadding smallbottompadding extrabold">Design and feel</h6>

                        <dl class="field row">
                            <dd><label for="look">Please describe your desired look and feel</label></dd>

                            <dt class="textarea">
                            <textarea id="look" name="fieldnm_12" placeholder="Clean, Modern, Minimal, Fun etc"></textarea></dt><dd class="msg">You filled this out wrong.</dd>
                        </dl>

                        <dl class="field row">
                            <dd><label for="insp">Any inspiration for your project</label></dd>

                            <dt class="textarea">
                            <textarea id="insp" name="fieldnm_13" placeholder="Website or design you like etc"></textarea></dt><dd class="msg">You filled this out wrong.</dd>
                        </dl>

                        <dl class="field row">
                            <dd><label for="extra">Anything else you want us to know</label></dd>

                            <dt class="textarea">
                            <textarea id="extra" name="fieldnm_14"></textarea></dt>
<dd class="msg">You filled this out wrong.</dd>
                        </dl><input type="submit" name="Submit" value="Submit" class="submit smallradius">
                    </form>

                    <div class="eight columns centered bigtoppadding">
                        <p class="greytext italic center"><span class="blacktext">Privacy Policy:</span>&nbsp; We will never share your information with anyone. We will only contact you with regards to your enquiry.</p>
                    </div>
                </div>

         </section>
     </section>
   </div>


<footer class="black">

	<div class="container">

<div class="row bigtoppadding">


		<div class="three columns">
				<h5 class="whitetext light">Contact Us Here.</h5>
				<p class="greytext midmargin meta">786 Some Place Nice, Rd Nice<br>
				State, Big Country 7860</p>
                                 </div>

<div class="three columns">
				<h5 class="whitetext light">Or Here.</h5>
				<p class="greytext midmargin meta">p <span>(786) 9876 543 210</span><br>
				e <a href="mailto:" class="whitetext">contact@youragency.com</a></p>
                                 </div>

		<div class="three columns">
				<h5 class="whitetext light">Project Planner.</h5>
				<p class="greytext midmargin meta">We have prepared a <a href="planner.php" class="whitetext">project planner</a> to get to know your project better.</p>
		</div>

		<div class="three columns newsletter">
			<h5 class="whitetext light">Newsletter.</h5>
			<p class="smallfont">Email updates.</p>
			<form id="newsletter" action="#" method="post">
				<dl class="field row">
					<dt class="text"><input type="text" placeholder="Your Email..."/></dt>
					<dd class="msg"><span class="caret"></span>You filled this out wrong.</dd>
					</dl>
					<input type="submit" name="Submit" value="Submit" class="submit alpha four columns">

			</form>
		</div>
	</div>
	<div class="greyhorizontal midmargin"></div>
	<div class="row">
<div class="four columns">
<p class="greytext meta">© 2012 <a href="#" title="Website Design, Graphic Design, Applications &amp; Development" class="greytext meta">Montreal RSPNSV HTML</a></p>
</div>

<div class="five columns">
<p class="meta"><a href="#" class="greytext">Home</a> &nbsp; / &nbsp;
<a href="about.php" class="greytext">About</a> &nbsp; / &nbsp;
<a href="portfolio.php" class="greytext">Portfolio</a> &nbsp; / &nbsp;
<a href="blog.php" class="greytext">Blog</a> &nbsp; / &nbsp;
<a href="contact.php" class="greytext">Contact</a></p>
</div>

<div class="three columns right">
<p class="meta"><a href="#" class="greytext">Facebook</a> / &nbsp;
<a href="#" class="greytext">Twitter</a> / &nbsp;
<a href="#" class="greytext">Dribbble</a></p>
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

</body>
</html>