 
</div>
</div>
</div>
</body>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker3.css">

<script>
    $(document).ready(function(){

       	$('.datepicker').datepicker({
       		format: 'mm-dd-yyyy',
       		todayHighlight: true,
        	autoclose: true,
    		startDate: '+3d',
    		endDate: '+30d'
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




	$("#img_01").elevateZoom({cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 
   	$("#img_02").elevateZoom({cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 

	$("#img_03").elevateZoom({cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 
	$("#img_04").elevateZoom({cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 

	$("#available_color").change(function(){
		var id = $(this).val();
		window.location.href = '<?php echo base_url(). 'view/product?colorID=';?>' + id;
	});

</script>

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
			}
		});
	});

</script>
</html>
