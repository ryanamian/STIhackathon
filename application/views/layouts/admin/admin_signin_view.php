<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>


<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrapValidator.js"></script>
<link rel="stylesheet" href="css/bootstrapValidator.css">
<link rel="stylesheet" href="style.css">


<style>
.panel-body {
font-size: 1.5em;
margin-top: 50px;

}

.form-group {
	padding-top: 45px;
}
</style>
</head>

<body>

<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">Login to admin dashboard</div>
		<div class="panel-body">
		<?php
		$login=(isset($_GET['error'])) ? (int)$_GET['error']:0;

		if($login > 0){
			$message = base64_decode($_REQUEST['message']);
			echo '<div class="alert alert-danger">
					<center><strong>'.$message.'</strong></center>
				</div>';
		}
		?>
			<form id="registration" method="POST" class="form-horizontal" action="<?php echo base_url();?>admin/signin_process?error=<?php echo $login; ?>">
				<div class="form-group">
					<label class="col-md-2 control-label" for="username">Email</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="username" name="username" placeholder="Email" />
						
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label" for="password">Password</label>
					<div class="col-md-4">
						<label class="col-md-2 control-label" for="password"></label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Your password" />
					</div>
				</div>

				<div class="form-group">
					
					<div class="col-md-6 col-md-offset-2">
						<button type="submit" class="btn btn-success">Login</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>