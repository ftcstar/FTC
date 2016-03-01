<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>FTC Star - connects fans with celebrities</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/header-second-bar.css">
	<link rel="stylesheet" href="assets/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js_imported/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js_imported/jquery.leanModal.min.js"></script> 
	<link type="text/css" rel="stylesheet" href="Style/login.css" />

	<header class="header-two-bars">
	<div class="header-first-bar">

		<div class="header-limiter">
			<h1><a href="index.php">FTC <span>Star</span></a></h1>
		</div>

	</div>

        <nav class="navbar navbar-default">
  			<div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
			      </button>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="index.php">Home</a></li>
			        <li><a href="#">Actors</a></li>
			        <li><a href="#">Movies</a></li> 
			        <li><a href="#">Fan Club</a></li>
			        <li><a href="aboutus.php">About US</a></li> 
			        <li><a href="#modal" id="modal_trigger">Login/Signup</a></li> 

			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			        <form class="navbar-form navbar-left">	
              			<input class="form-control" type="text" placeholder="Search...">
		            	<input class="form-control" type="button" value="Search" name="Search"  />
		            </form>
			      </ul>
			    </div>
  			</div>
		</nav>

		<div id="modal" class="popupContainer" style="display:none;">
                <header class="popupHeader">

                        <div class="action_btns">
                            <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
	                        <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
                        </div>

                </header>

                <section class="popupBody">
                 
                        <!-- Username & Password Login form -->
                        <div class="user_login">
                                <form>
                                        <label>Email / Phone Number</label>
                                        <input type="text" />
                                        <br />

                                        <label>Password</label>
                                        <input type="password" />
                                        <br />

                                        <div class="action_btns">
                                                <div class="one_full"><a href="#" class="btn btn_red" onclick="alert('Login successful..!')">Login</a></div>
                                        </div>
                                </form>

                                <a href="#" class="forgot_password" onclick="alert('Recovary link sent to your mail..!')">Forgot password?</a>
								<a id="sign_up" href="#" class="forgot_password">Don't have an account? Sign-up now </a>
                        </div>

                        <!-- Register Form -->
                        <div class="user_register">
                                <form>
                                        <label>First Name</label>
                                        <input type="text" />
										<br />
										
										<label>Last Name</label>
                                        <input type="text" />
                                        <br />
										
                                        <label>Email Address</label>
                                        <input type="email" />
                                        <br />
										
										<label>Mobile Number</label>
                                        <input type="tel" />
                                        <br />

                                        <label>Password</label>
                                        <input type="password" />
                                        <br />							
                                        <div class="action_btns">
                                                <div class="one_full"><a href="#" class="btn btn_red" onclick="alert('Registration successful..!')">Sign-Up</a></div>
                                        </div>
                                </form>
                        </div>
                </section>
        </div>
    </header>
    <script type="text/javascript">

		$("#modal_trigger").leanModal({top : 150, overlay : 0.6 });

		$(function(){

			$("#modal_trigger").click(function(){
				$(".user_register").hide();
				$(".user_login").show();
				return true;
			});

			// Calling Login Form
			$("#login_form").click(function(){
				$(".user_login").show();
				$(".user_register").hide();
				return false;
			});

			// Calling Register Form
			$("#register_form").click(function(){
				$(".user_register").show();
				$(".user_login").hide();
				return false;
			});

			$("#sign_up").click(function(){
				$(".user_register").show();
				$(".user_login").hide();
				return false;
			});
		})
    </script>
</head>
