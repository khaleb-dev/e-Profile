<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./library/css/bootstrap.min.css">
	<script type="text/javascript" src="./library/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="./library/js/bootstrap.min.js"></script>
	<script type="text/javascript">

		function signupForm(){

			$('#signup-form').load('signup.php');

		};
	</script>
</head>
<body>

<!--<?php
	//echo "Hello PHP";

?>-->

<div class="container">
	<div class="row">
		<div class="col-sm-5">
			<div class="panel panel-primary">
				<div class="panel-heading">Login</div>
					<div class="panel-body">
						<form action="" method="POST">
							<div class="input-group input-group-sm">
								<span class="input-group-addon">Username</span>
								<input type="text" name="username" class="form-control" placeholder="Enter Username" />
							</div>
							<br />
							<div class="input-group input-group-sm">
								<span class="input-group-addon">Password</span>
								<input type="text" name="pswd" class="form-control" placeholder="Enter Password" />
							</div>
							<br />
							<button type="submit" value="Login" class="btn btn-sm btn-primary">Login</button>
						</form>
					</div>
			</div>

			<div style="text-align: center;">
				<span>Don't have Account?</span><br /><br />
				<button value="Sign Up" onclick="signupForm()" class="btn btn-sm btn-primary">Sign Up Now</button>
			</div>
		</div>
		<div class="col-sm-5" id="signup-form">
			
		</div>
	</div>
</div>



</body>
</html>