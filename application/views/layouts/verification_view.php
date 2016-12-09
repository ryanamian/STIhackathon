<div class="container verification">
	<div class="panel panel-default">
		<div class="panel-heading">Login</div>
		<div class="panel-body">
		<?php
		//$email = base64_decode($_REQUEST['id']);

		//$login=(isset($_GET['error'])) ? (int)$_GET['error']:0;

		$message = $this->session->flashdata('message');

		if($message == '1'){
			echo '<div class="alert alert-success">
					<strong>Registration Successful!</strong>
				</div>';
			
		}else if($message == '0'){
			echo '<div class="alert alert-danger">
					<strong>Error try again later or contact your administrator!</strong>
				</div>';
		}

		$message_verification = $this->session->flashdata('message_verification');

		if($message_verification == '1'){
		
			
		}else if($message_verification == '0'){
			echo '<div class="alert alert-danger">
					<strong>Invalid verification code</strong>
				</div>';
		}

		
		//echo $error;
		?>
			<form id="registration" method="POST" class="form-horizontal" action="<?php echo base_url();?>user/verification_process">
				<div class="form-group">
					<label class="col-md-2 control-label" for="email">Code</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="verificationcode" name="verificationcode" placeholder="Your verification code" />
						
					</div>
				</div>	

				<div class="form-group">
					<?php
						echo '<input type="hidden" name="email" id="email" value="'.$email.'">';
					?>
					<div class="col-md-6 col-md-offset-2">
						<button type="submit" class="btn btn-success">Verify</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>