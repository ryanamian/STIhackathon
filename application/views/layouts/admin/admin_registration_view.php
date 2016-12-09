		<div id="cancel_view">
			<?php
				$check_login = $this->session->userdata('renee_salud_admin');
				$s = $this->session->userdata('renee_salud_admin');
				$data['user_level'] =  $s['user_level'];

				if($data['user_level'] == 'staff'){
					echo '<div id="status1" class="alert alert-success">You don\'t have access to this. Only administrator</div>';
				}else{
			?>
			<div id="box">
				<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/delivery.png">Delivery List
				</div>
				<div class="box-panel">
					<div class="well">
						<br> <br>
						<h2>Please Sign Up!</h2>
						<hr class="colorgraph">

						<?php
		

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

						?>

						<div id="reg">
							<form  id="registration_form" action="<?php echo base_url();?>admin/create_user" method="POST" class="form-vertical">
								<div id="first">
									<div id="adjust">
										<div class="form-group">
											<div class="col-md-4">
												<label for="fname">First name: </label>
												<input type="text" class="form-control" id="fname" name="fname" placeholder="Type your first name here..." />
											</div>
										</div>
									</div>

									<div class="form-group">
										<div  class="col-md-4">
											<label for="lname">Last name: </label>
											<input type="text" class="form-control" id="lname" name="lname" placeholder="Type your last name here..." />
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-3">
											<label>Gender: </label><br>
											<select id="gen" name="gen" class="form-control">
												<option value="">Choose here...</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
										</div>
									</div>
								</div>


								<div id="second">
									<div id="adjust2">
										<div class="form-group">
											
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-3">
											<label for="age">Birthdate: </label>
											<input type="text" data-provide="datepicker" class="birthdate form-control" type="text" id="birthdate" name="birthdate" placeholder="Pick Birthdate">
											<!-- <input type="date" class="form-control"  placeholder="Birthdate..." /> -->
										</div>

										<script type="text/javascript">
											$(document).ready(function(){

										       	$('.birthdate').datepicker({
										       		format: 'yyyy-mm-dd',
										       		todayHighlight: true,
										        	autoclose: true,
										        	startDate: '-80y',
			    									endDate: '-18y'
										   
										    		/*beforeShowDay: function(date){
												        
												        var curr_date = d.getDate() + 3;
												        var curr_month = d.getMonth() + 1; //Months are zero based
												        var curr_year = d.getFullYear();
												        var formattedDate = curr_date + "/" + curr_month + "/" + curr_year

												        if ($.inArray(formattedDate, active_dates) != -1){
												        	return {
												              classes: 'activeClass'
												           	};
												        }
												     	return;*/
											    });
										    })
										</script>
									</div>					

									<div class="form-group">
										<div class="col-md-5">
											<label for="address">Address: </label>
											<input type="text" class="form-control" id="address" name="address" placeholder="Type your Address here..." />
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-2">
											<label for="address">City: </label>
											<input type="text" class="form-control" id="city" name="city" placeholder="Type your City..." />
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-2">
											<label for="address">Zip code: </label>
											<input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Type Zip Code" />
										</div>
									</div>
								
								</div>


								<div id="third">
									<div id="adjust3">
										<div class="form-group">
											<div class="col-md-2">
												<label for="number">Phone number: +63</label>

												<input type="number" maxlength="10" minlength="10" class="form-control" id="number" name="number" placeholder="Type your phone number here..." />
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-5">
											<label for="email">Email: </label>
											<input type="text" class="form-control" id="email" name="email" placeholder="Type your email here..." />
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-5">
											<label for="cemail">Confirm Email: </label>
											<input type="text" class="form-control" id="cemail" name="cemail" placeholder="Confirm your email here..." />
										</div>
									</div>
								</div>


								<div id="fourth">
									<div id="adjust4">
										<div class="form-group">
											<div class="col-md-4">
												<label for="password">Password: </label>
												<input type="password" class="form-control" id="password" name="password" placeholder="Type your password here..." />
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-4">
											<label for="cpassword">Confirm Password: </label>
											<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm password here..." />
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-4">
											<label for="cpassword">User level:</label>
											<select name="user_level" class="form-control">
												<option value="">Choose...</option>
												<option value="staff">Staff</option>
												<option value="admin">Admin</option>
											</select>
										</div>
									</div>
									
								</div>

									
									<input type="submit" value="Sign up" class="btn btn-success" id="signup" />
								<br>
							</form>
						</div>
					</div>	
				</div>
			</div>
			<?php
				}

			?>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		var validator = $("#registration_form").bootstrapValidator({
			framework: 'bootstrap',

			feedbackIcons: {
				valid: "glyphicon glyphicon-ok",
				invalid: "glyphicon glyphicon-remove",
				validating: "glyphicon glyphicon-refresh"
			},
			fields: {
				fname: {	
					validators: {
						notEmpty: {
							message: 'First name is required'
						}
					}
				},

				lname: {
					validators: {
						notEmpty: {
							message: 'Last name is required'
						}
					}
				},
				gen: {
					validators: {
						notEmpty: {
							message: 'Gender is required'
						}
					}
				},

				birthdate: {
					validators: {
						notEmpty: {
							message: 'Age is required'
						}
					}
				},


				address: {
					validators: {
						notEmpty: {
							message: 'Address is required'
						}
					}
				},

				city: {
					validators: {
						notEmpty: {
							message: 'City is required'
						}
					}
				},

				zip_code: {
					validators: {
						notEmpty: {
							message: 'Zip code is required'
						}
					}
				},

				number: {
					validators: {
						notEmpty: {
							message: 'Phone number is required'
						},

						stringLength: {
							min : 10, 
							max: 10,
							message: "Invalid number"
						},

						remote: {
							message: 'This phones is already exist',
							url: 'check_number',
							type: 'POST'
						}

					}
				},

				email: {
					validators: {
						notEmpty: {
							message: 'Email is required'
						},

						emailAddress: {
							message: 'Invalid Email Address'
						},

						remote: {
							message: 'This email is already exist',
							url: 'check_email',
							type: 'POST'
						}
					}
				},

				cemail: {
					validators: {
						notEmpty: {
							message: 'Confirm your Email'
						},

						identical: {
							field: 'email',
							message: "Email didn't match!"
						},

						emailAddress: {
							message: 'Invalid Email Address'
						}

						
					}
				},

				password: {
					validators: {
						notEmpty: {
							message: 'Password is required'
						},
						stringLength: {
							min: 6,
							max: 20,
							message: 'Minimum of 6 charactes'
						}
					}
				},

				cpassword: {
					validators: {
						notEmpty: {
							message: 'Re-type your password'
						},

						identical: {
							field: 'password',
							message: "Password didn't match!"
						},

						stringLength: {
							min: 6,
							message: 'Password minimum of 6 characters'
						}
					}
				},
				user_level: {
					validators: {
						notEmpty: {
							message: 'Password is required'
						}
						
					}
				},
			}
		});
	});

</script>