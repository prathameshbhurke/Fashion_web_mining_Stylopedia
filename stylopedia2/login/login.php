<?php
//start session
session_start();

//just simple session reset on logout click
/*if($_GET["reset"]==1)
{
	session_destroy();
	header('Location: ./login.php');
}*/

// Include config file and twitter PHP Library by Abraham Williams (abraham@abrah.am)
include_once("config.php");
include_once("inc/twitteroauth.php");
?>

<html>


<head>
<title>Sign-in with Twitter</title>
<style type="text/css"></style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>

<link rel="stylesheet" type="text/css" href="login.css"></head>
<form id="form" name="form" action="login_process.php" method="POST">
	<div id="block">
		<label id="user" for="name">p</label>
		<input type="text" name="user_name" id="user_name" placeholder="Username" required/>
		<label id="pass" for="password">k</label>
		<input type="password" name="password" id="password" placeholder="Password" required />
		<input type="submit" id="submit" name="submit" value="a"/>
	</div>
</form>
<div id="option">
<?php



if(isset($_SESSION['status']) && $_SESSION['status']=='verified')
{	//Success, redirected back from process.php with varified status.
	//retrive variables
	$screenname 		= $_SESSION['request_vars']['screen_name'];
	$twitterid 			= $_SESSION['request_vars']['user_id'];
	$oauth_token 		= $_SESSION['request_vars']['oauth_token'];
	$oauth_token_secret = $_SESSION['request_vars']['a'];

	//Show welcome message
	//echo '<div class="welcome_txt">Welcome <strong>'.$screenname.'</strong> (Twitter ID : '.$twitterid.'). <a href="login.php?reset=1">Logout</a>!</div>';
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $oauth_token, $oauth_token_secret);

	//see if user wants to tweet using form.
	if(isset($_POST["updateme"]))
	{
		//Post text to twitter
		$my_update = $connection->post('statuses/update', array('status' => $_POST["updateme"]));
		die('<script type="text/javascript">window.top.location="login.php"</script>'); //redirect back to login.php
	}

	//show tweet form
	echo '<div class="floatright">';
	//echo '<div class="tweet_box">';
	echo '<form method="post" action="login.php"><table width="200" border="0" cellpadding="3">';
	echo '<tr>';
	echo '<td><textarea name="updateme" cols="60" rows="4"></textarea></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td><input type="submit" value="Tweet" /></td>';
	echo '</tr></table></form>';
	//echo '</div>';
	echo '</div>';


		/*Get latest tweets
		$my_tweets = $connection->get('statuses/user_timeline', array('screen_name' => $screenname, 'count' => 5));
		 echo '<pre>'; print_r($my_tweets); echo '</pre>';

		echo '<div class="tweet_list"><strong>Latest Tweets : </strong>';
		echo '<ul>';
		foreach ($my_tweets  as $my_tweet) {
			echo '<li>'.$my_tweet->text.' <br />-<i>'.$my_tweet->created_at.'</i></li>';
		}
		echo '</ul></div>';*/

}else{
	//login button
	echo '<div class="floatright">';
	echo '<a href="process.php"><img src="images/sign-in-with-twitter-l.png" width="191" height="38" border="0" /></a>';
		echo '</div>';
}

?>
</div>

<div id="option">
 <?php include_once "fbaccess.php";?>
<?php if(!$user) { ?>
<div class="login-box">
<div id="f-connect-button"><a href="<?=$loginUrl?>"><img src="images/f-connect.png" alt="Connect to your Facebook Account"/></a><div>
This website will <b>NOT</b> post anything to your wall or like any page automatically.
</div>
<?php } else { ?>

<script>(function(d){
  var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
  js = d.createElement('script'); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/en_US/all.js#appId=276860898991504&xfbml=1";
  d.getElementsByTagName('head')[0].appendChild(js);
}(document));</script>
<div class="fb-like" data-href="www.facebook.com/25labs" data-send="false" data-layout="box_count" data-width="55" data-show-faces="false"></div>

</div>


<div class="sponsor" style="height:292px;">
	<div id="fb-root"></div>
<script>(function(d){
  var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
  js = d.createElement('script'); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  d.getElementsByTagName('head')[0].appendChild(js);
}(document));</script>
<div class="fb-like-box" data-href="http://www.facebook.com/25labs" data-width="250" data-show-faces="true" data-stream="false" data-header="true"></div>
	</div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="footer"> 25 labs 2011 · This page is only for demonstration purpose. If you feel that it violates any copyrighted stuff, please use <a href="http://25labs.com/contact-us/" >contact form</a>.</div>

</div>

<?php } ?>

</div>






</html>


