<?php
    include_once "fbaccess.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
  
<body>

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


</body>
</html>