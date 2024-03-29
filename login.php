<?php 
include('inc/header.php');
include_once("dbcon.php");
?>
<title>Login</title>

<?php include('container.php');?>
<div class="container">	
	<div class="row">
	<div class="col s3"></div>
	<div class="col s6">
	<form class="" method="post" id="login-form">
		<h2 class="form-login-heading">Log In</h2><hr />
		<div id="error">
		</div>
		<div class="input-field col s12">
	 		<i class="material-icons prefix">email</i>
			<input type="email" class="validate" name="user_email" id="user_email"/>
			<label for="icon_prefix" data-error="wrong" data-success="right">E-mail</label>
		</div>
		
		<div class="input-field col s12">
	 		<i class="material-icons prefix">lock</i>
			<input type="password" class="validate" name="password" id="password" />
			<label for="icon_prefix" data-error="wrong" data-success="right">Password</label>
		</div>
		
		<div class="form-group input-field inline">
			<button type="submit" class="waves-effect waves-light btn" name="login_button" id="login_button">
			<i class="material-icons right">send</i>Login</button>
		</div> 
	</form>	
	</div>	
	<div class="col s3"></div>	
	</div>
</div>
<?php include('footer.php');?>