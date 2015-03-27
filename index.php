<!DOCTYPE html>
<html>	
<head>
<title>Peg Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Bootstrap Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.min.js"></script>
</head>
<body>
<script>$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$('.login-form').fadeOut('slow', function(c){
	  		$('.login-form').remove();
		});
	});	  
});
</script>
 <!--SIGN UP-->
		<div class="login-form">
			<div class="close"> </div>
					<div class="head-info">
						<h1><span>P</span>.<span>E</span>.<span>G</span>. - Log In</h1>
						</div>
						<div class="strip">
					</div>
				<form name="form1" method="post" action="checklogin.php">
				<ul class="form" method="post" >
					<li>
					<input type="text" class="email" placeholder="user name" name="myusername"  required/><a href="#" class=" icon user"></a>
					</li>
					<li>
					<input type="password" class="password" placeholder="password" name="mypassword" required/><a href="#" class=" icon lock"></a>
					</li>
					<div class="p-container">
					<a href="#" class="hvr-bounce-to-bottom"><input name="Submit" type="submit" value='LOGIN' /></a>
					<div class="clear"> </div>
					</div>
				</ul>
				</form>
				<div class="social-icons">
							<div class="but-bottom">
					<div class="p-container">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember Me</label>
					</div>
							<a href="#" class="trouble"><p>Forgot Password ?</p></a><div class="clear"> </div></div>
							
							<div class="clear"> </div>
				</div>
				<div class="sign-up">
					<a href="#" class="sign-left">Want new account ?</a>
					<a  class="signup play-icon popup-with-zoom-anim" href="#small-dialog2">Sign Up</a>
					<!-- pop-up-box -->
				<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
				<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!--//pop-up-box -->
<div id="small-dialog2" class="mfp-hide">
				<div class="signup">
					<h3>Signup</h3>
					<h4>Let's get started</h4> 
					<input type="text" class="email" placeholder="User name" required/>
					<input type="text" class="email" placeholder="Email adress" required/>
					<input type="password" placeholder="Password" required/>
					<input type="submit"  value="Signup"/>
				</div>
			</div>	
			<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
		</div>

					<div class="clear"> </div>
				</div>
 <!--/SIGN UP-->
 	
		</div>
</body>
</html>