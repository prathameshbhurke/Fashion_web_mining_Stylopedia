<?php

include("lib/ShopStyle/API.php");
include("lib/ShopStyle/Query/IQuery.php");
include("lib/ShopStyle/Query/BasicQuery.php");

function enc($text)
{
    return htmlspecialchars($text, null, 'utf-8');
}

//decide if the search has already been performed.
if (isset($_REQUEST["searchCmd"]) && ($_GET["searchCmd"] == "Search")) {
    $searchFlag = true;
} else {
    $searchFlag = false;
}

// pager attributes
$selfUrl = $_SERVER['PHP_SELF'];
$perPage = isset($_REQUEST["perPage"]) ? $_GET["perPage"] : 20;
$currentPage = isset($_REQUEST["page"]) ? $_GET["page"] : 1;
$offset = ($currentPage - 1) * $perPage;

if ($searchFlag) {
    //get the query string
    $queryStr = $_GET["searchString"];
} else {
    // defaut it to blue pants, if no search string given.
    $queryStr = "";
}

//create a new instance of shopstyle object, with only partner id and accepting default values for others.
$shopstyle = new ShopStyle\API('sugar');
//invoke search with parameters passed in
$result = $shopstyle->search($queryStr, $perPage, $offset);

//calculate pager attributes
$totalCount = $result->metadata->total; //total number of results available in Shopstyle for the queryString
$resultCount = count($result->products); //count of resultset that we are dealing with now

function getPageUrl($url, $page, $query, $perPage)
{
    $data = array(
        'page' => $page,
        'searchString' => $query,
        'perPage' => $perPage,
        'searchCmd' => 'Search'
    );

    return $url . '?' . http_build_query($data);
}
?>

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

<style>

body {
    color: #000000;
    font-family: verdana, arial, helvetica, sans-serif;
    font-size: 8pt;
}

.productImage {
    padding: 0;
    margin: 0;
    float: left;
    height: 300px;
}

.strike {
    text-decoration: line-through;
    font-size: 8pt;
}

.salePrice {
    text-decoration: none;
    text-align: center;
    font-size: 8pt;
}

.img {
    border: none;
    padding: 0;
    margin: 0;
    height: 430px;
}

.td {
    padding: 0;
    margin: 0;
    text-align: center;
}

.prodDesc {
    font-size: 8pt;
    height: 2.2em;
}

.pager {
    font-size: 8pt;
    height: 1em;
    float: right;
}

.pager span {
    margin-right: 5px;
}

.pager a {
    margin-right: 3px
}

.results {
    display: block;
    border: 1px none;
    padding: 0;
    margin: 5px;
}

.clear {
    clear: both;
}

.thumb {
    text-align: center;
    vertical-align: middle;
    max-width: 210px;
}

.info {
    float: left;
    margin: 5px;
}


</style>

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
<div class="smallsidepadding white">
<div class="bigtoppadding"></div>
<div class="bigtoppadding"></div>

<form method="get" action="<?php echo enc($selfUrl);?>">
    <label for="search">Show me something in : </label>
    <input type="text" name="searchString" id="search"
           value="<?php echo enc($queryStr) ?>"/>
    <input type="submit" name="searchCmd" value="Search"/>
</form>

<span class="info">
    Your search for <b><i><?=enc($queryStr)?></i></b>
    resulted in <?=number_format($totalCount)?> results
</span>

<?php if ($totalCount) : ?>
<span class="pager">
    <span>
        <?=number_format($currentPage)?>
        of
        <?=number_format(ceil($totalCount / $perPage))?>
    </span>
    <span>
        <?php if ($currentPage != 1): ?>
            <a href="<?=getPageUrl($selfUrl, ($currentPage - 1), $queryStr, $perPage) ?>">Prev</a>
        <?php endif ?>

        <?php if ($currentPage < ceil($totalCount / $perPage)): ?>
            <a href="<?=getPageUrl($selfUrl, ($currentPage + 1), $queryStr, $perPage) ?>">Next</a>
        <?php endif ?>
    </span>
<span>
<div class="clear"></div>

<div class="results">
    <?php foreach ($result->products as $product): ?>
        <table class="productImage" style="width:<?=$product->image->sizes->XLarge->width?>px;">
            <tr>
                <td class="thumb td">
                    <a href="<?=$product->clickUrl?>">
                        <img class="img" src="<?=$product->image->sizes->XLarge->url?>"/>
                    </a>
                </td>
            </tr>
            <tr>
                <td class="td" style="background-color:white;">
                    <div class="prodDesc">
                        <?=enc($product->name)?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="td">
                    <div class=prodDesc><a href="<?=$product->clickUrl?>">Buy Now</a></div>
                </td>
            </tr>
        </table>
    <?php endforeach ?>

</div>
<div class="clear"></div>
    <?php endif ?>





<!--
<div class="container bigpadding" style="background:url(img/stripes.png);">
	<section class="row white midleftpadding">
		<h3 class="blacktext bold bigmargin center">TRENDS & SHOPPING</h3>
		<div class="container twelve columns midtoppadding bigbottompadding">
			<form id="" action="<?php echo enc($selfUrl);?>" method="get">
				<div class="row">
					<dl class="field eight columns">
						<dt class="text"><input type="text" name="searchString" id="search" placeholder="Show me something in" value="<?php echo enc($queryStr) ?>"></input>
						</dt>
					</dl>
					<dl><input class="submit three columns" type="button" value="Submit" id="submit"/></dl>
				</div>
			</form>
		</div>

	<span class="info">
    	Your search for <b><i><?=enc($queryStr)?></i></b>
    	resulted in <?=number_format($totalCount)?> results
	</span>

	<?php if ($totalCount) : ?>
	<span class="pager">
		<span>
			<?=number_format($currentPage)?>
			of
			<?=number_format(ceil($totalCount / $perPage))?>
		</span>
		<span>
			<?php if ($currentPage != 1): ?>
				<a href="<?=getPageUrl($selfUrl, ($currentPage - 1), $queryStr, $perPage) ?>">Prev</a>
			<?php endif ?>

			<?php if ($currentPage < ceil($totalCount / $perPage)): ?>
				<a href="<?=getPageUrl($selfUrl, ($currentPage + 1), $queryStr, $perPage) ?>">Next</a>
			<?php endif ?>
		</span>
	<span>


	<div class="results">
		<?php foreach ($result->products as $product): ?>
			<table class="productImage" style="width:<?=$product->image->sizes->XLarge->width?>px;">
				<tr><td class="thumb">
					<a href="<?=$product->clickUrl?>">
						<img src="<?=$product->image->sizes->XLarge->url?>"/>
					</a>
				</td></tr>
				<tr><td>
					<div class="prodDesc">
						<?=enc($product->name)?>
					</div>
				</td></tr>
				<tr><td>
					<div class=prodDesc><a href="<?=$product->clickUrl?>">Buy Now</a></div>
				</td></tr>
			</table>
		<?php endforeach ?>
	</div>

	<?php endif ?>

	</section>
</div>-->
<!-- end of #container -->
</div>
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