<?php

if (elgg_is_logged_in()) forward('activity');

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>SWhite Theme</title>
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="mod/swhite/css/style.css" />
		<script src="mod/swhite/js/modernizr.custom.63321.js"></script>
                
                
                
        <link rel="stylesheet" type="text/css" href="mod/swhite/css/style_1.css" />
	</head>
        
	<body>
		<div class="container">	
			<!-- Codrops top bar -->
			<div class="codrops-top clearfix" style="background-color: #656565;">
                        
				<a href="http://tympanus.net/Development/SliderPagination/" style="color: #f5f6f5;"><strong>Terms of Use</strong></a>
				<span class="right"><a href="http://tympanus.net/codrops/?p=13218" style="color: #f5f6f5;"><strong>Privacy</strong></a></span>
			</div><!--/ Codrops top bar -->
	                        <?php
        echo elgg_view('page/elements/messages', array('object' => $_SESSION['msg']));
        
        unset($_SESSION['msg'])
        ;?>
        		<header class="clearfix">
        
				<h1>SWhite Theme<span></span></h1>
			</header>
			<div class="main">
				<div id="mi-slider" class="mi-slider">
					<ul>
												
                                        <li>
                                        <h4>
                                        <section class="main">
				<form method="post" action="action/login" class="form-2">
                                        <?php
$ts = time();
$token = generate_action_token($ts);
?>
<input type="hidden" name="__elgg_token" value="<?php echo $token; ?>"/>
<input type="hidden" name="__elgg_ts" value="<?php echo $ts; ?>" />


					<h1><span class="log-in">Log in</span> <span class="sign-up"></span></h1>
					<p class="float">
						<label for="login"><i class="icon-user"></i>Username</label>
						<input type="text" name="username" placeholder="Username or email" class="elgg-input-text login-textarea">
					</p>
					<p class="float">
						<label for="password"><i class="icon-lock"></i>Password</label>
						<input type="password" name="password" placeholder="Password" class="showpassword" class="elgg-input-password login-textarea" >
					</p>
					<p class="clearfix"> 
						  
						<input type="submit" name="submit" value="Log in" action="action/login" >
                                                        
					</p>
				</form>​​
			</section>
                                        
                                        </h4>
                                        </li>
					</ul>
					<ul><center>
                                        <li>
                                                <h4>
                                        
                                                                                <section class="main">
				<form class="form-2"action="action/register" class="elgg-form">
					<?php
					$ts = time();
$token = generate_action_token($ts);
?>
<input type="hidden" name="__elgg_token" value="<?php echo $token; ?>"/>
<input type="hidden" name="__elgg_ts" value="<?php echo $ts; ?>" />
					<h1><span class="log-in">Sign Up</span> <span class="sign-up"></span></h1>
					<p class="float">
						<label for="login"><i class="icon-user"></i>Display name</label>
						<input type="text" name="name" placeholder="Display name">
					</p>
					<p class="float">
						<label for="password"><i class="icon-lock"></i>Email address</label>
						<input type="text" name="email" placeholder="Email" >
					</p>
                                        
                                        <p class="float">
						<label for="login"><i class="icon-user"></i>Username</label>
						<input type="text" name="username" placeholder="Username">
					</p>
                                        <p class="float">
						<label for="login"><i class="icon-user"></i>Password</label>
						<input type="password" name="password" placeholder="Password">
					</p>
					<p class="float">
						<label for="password"><i class="icon-lock"></i>Repeat Password</label>
						<input type="password" name="password2" placeholder="Repeat Password" class="showpassword">
					</p>
                                        
					<p class="clearfix"> 
						  <input type="hidden" name="friend_guid" />
<input type="hidden" name="invitecode" />
<input type="hidden" value="register" name="action" />
						<input type="submit" name="submit" value="Sign up">
					</p>
				</form>​​
			</section>

                                        
                                        
                                                        
                                                </h4>
                                        </li>
	
					</ul>
					
					<nav>
						<a href="#">Login</a>
						<a href="#">Register</a>
						
						
					</nav>
				</div>
			</div>
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="mod/swhite/js/jquery.catslider.js"></script>
		<script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
		</script>
	</body>
</html>