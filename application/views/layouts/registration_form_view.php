

<div id="regmain">

	<div class="container">

		<div class="well">
			<br> <br>
			<h2>Please Sign Up!</h2>
			<hr class="colorgraph">

			<div id="reg">
				<form  id="registration_form" action="<?php echo base_url();?>user/create_user" method="POST" class="form-vertical">
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
								<div class="col-md-4 col-offset-2">
									<label for="password">Password: </label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Type your password here..." />
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-4 col-offset-3">
								<label for="cpassword">Confirm Password: </label>
								<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm password here..." />
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
</body>