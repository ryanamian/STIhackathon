<?php 
		if(!isset($_SESSION['email'])){
			
		}else{
			header('Location:index.php');
		}
?>



	<div class="container signin_container">
 		<div class="panel panel-default">
 			<div class="panel-heading">Login</div>
 			<div class="panel-body">
 			<?php
 			$login=(isset($_GET['error'])) ? (int)$_GET['error']:0;
 			if($login > 0){
 				
 				echo '<div class="alert alert-danger">
  						<center><strong>'.base64_decode($message).'</strong></center>
						</div>';
 			}
 			?>
 				<form id="registration" method="POST" class="form-horizontal" action="<?php echo base_url();?>user/signin_process?error=<?php echo $login; ?>">
 					<div class="form-group">
 						<label class="col-md-2 control-label" for="email">Email</label>
 						<div class="col-md-4">
 							<input type="text" class="form-control" id="email" name="email" placeholder="Your email address" />
 							
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