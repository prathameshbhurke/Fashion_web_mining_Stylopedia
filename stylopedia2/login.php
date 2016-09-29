<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link href="twitter_bootstrap/css/bootstrap.min.css" rel="stylesheet">

<style>
.prettyline {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>

<script src="js/dynamicgrid/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="twitter_bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript"></script>
</head>
<body>

<div class="container">
    <hr class="prettyline">
    <br>
    <center>
    <h1><b>Hello Friends!!</b></h1>
    <h3>By signing in or signing up, you would get access to many exciting features of Stylopedia.</h3>
    <h3>So, what are you wating for?</h3>
    <br>
  <button class="btn btn-primary btn-lg" href="#signup" data-toggle="modal" data-target=".bs-modal-sm">Sign In / Register</button><br><br>
  <h4><a href="index.php">Go back to the home page.</a></h3>
  </center>
  <br>
    <hr class="prettyline">
 </div>


<!-- Modal -->
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
              <!--<li class=""><a href="#why" data-toggle="tab">Why?</a></li>-->
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in" id="why">
        <p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>
        <p></p><br> Please contact <a mailto:href="JoeSixPack@Sixpacksrus.com"></a>JoeSixPack@Sixpacksrus.com for any other inquiries.<p></p>
        </div>
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal" name="signin" action="signin.php" method="post">
            <fieldset>
            <!-- Sign In Form -->

            <div class="control-group">
              <label class="control-label" for="userid">Signin with:</label>
              	<div class="buttons">
              	<div style="align:center">
					<a href=""><img src="preview/icons/SocialMedia-Facebook.png" width="auto" alt="item"></a>
					<a href=""><img src="preview/icons/SocialMedia-Twitter.png" width="auto" alt="item"></a>
					<a href=""><img src="preview/icons/SocialMedia-GooglePlus.png" width="auto" alt="item"></a>
			  	</div>
			  	</div>
            </div>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Username:</label>
              <div class="controls">
                <input required="" id="userid" name="userid" type="text" class="form-control" placeholder="Your username">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="passwordinput">Password:</label>
              <div class="controls">
                <input required="" id="passwordinput" name="passwordinput" class="form-control" type="password" placeholder="Your password">
              </div>
            </div>

            <!-- Multiple Checkboxes (inline) -->
            <div class="control-group">
              <label class="control-label" for="rememberme"></label>
              <div class="controls">
                <label class="checkbox inline" for="rememberme-0">
                  <input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
                  Remember me
                </label>
              </div>
            </div>

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="signin" class="btn btn-success">Sign In</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal"  name="signup" action="signup.php" method="post">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->

            <div class="control-group">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                	<label class="control-label" for="FirstName">First Name:</label>
                    <input class="form-control" name="firstname" placeholder="First Name" type="text"
                        required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                	<label class="control-label" for="LastName">Last Name:</label>
                    <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                </div>
            </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="Email">Email:</label>
              <div class="controls">
                <input id="Email" name="Email" class="form-control" type="text" placeholder="Your Email address" required="">
              </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Username:</label>
              <div class="controls">
                <input id="userid" name="userid" class="form-control" type="text" placeholder="Your preferred username" required="">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Password:</label>
              <div class="controls">
                <input id="password" name="password" class="form-control" type="password" placeholder="Your preferred password" required="">
              </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Re-Enter Password:</label>
              <div class="controls">
                <input id="reenterpassword" class="form-control" name="reenterpassword" type="password" placeholder="Renter password" required="">
              </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <br>
            <div class="control-group">
              <label class="control-label" for="userrole">How would you identify yourself?</label>
              <div class="controls">
                <label class="radio inline" for="userrole1">
                  <input type="radio" name="userrole" id="userrole1" value="fashionenthusiast">I am a Fashion Enthusiast</label>
                <label class="radio inline" for="userrole2">
                  <input type="radio" name="userrole" id="userrole2" value="fashiondesigner">I am a Fashion Designer</label>
                <label class="radio inline" for="userrole3">
                  <input type="radio" name="userrole" id="userrole3" value="fashiondesigner">I am a Photographer</label>
              </div>
            </div><br>

            <div class="control-group">
				<label class="control-label" for="reenterpassword">Would you like to be a premium user? <a href="">Learn more</a></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="paypal/samples/ExpressCheckout/SetExpressCheckout.html.php"><img src="preview/icons/paypal.gif" width="20%" alt="item"></a>
            </div><br>

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-success">Sign Up</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div>
</body>
</html>