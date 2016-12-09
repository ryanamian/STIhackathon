<div id="report_rent_view">
	
	<div id="box">

		<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/rent.png"> Rent report</div>
			<div class="box-panel">
				<form method="POST" id="rent_form" action="<?php echo base_url();?>sales/overallpost">
					<div id="message_error"></div>
					<div class="col-md-5 col-md-offset-5">
						<?php
							if(isset($from) && isset($to)){
							}else{
								$from = '';
								$to = '';
							}

						?>
					
						Date Range:

						<div class="input-group input-daterange">

						   <input type="text" id="from" name="from" class="form-control date" value="<?php echo $from;?>" placeholder="From date">
						    <div class="input-group-addon">
						        <span class="glyphicon glyphicon-calendar"></span>
						    </div>
						
						    <input type="text" id="to" name="to" class="form-control date" value="<?php echo $to;?>" placeholder="To date">
						    <div class="input-group-addon">
						        <span class="glyphicon glyphicon-calendar"></span>
						    </div>
						</div>

					</div>

					<div class="col-md-1">
						<input type="submit" id="report_rent_btn" class="btn btn-info btn-sm" value="Search">
					</div>

					<div class="col-md-1">
						<a href="<?php echo base_url();?>reports/rent_reports" id="report_rent_btn" class="btn btn-danger btn-sm">Clear</a>
					</div>
				</form>
	    	</div>
		</div>
			<div id="report_rent_table" class="row">
			    

			    <div class="row">
					<div class="col-md-2 col-md-offset-10">
						
						<?php
							if(isset($date1) && isset($date2)){

								echo '<a href="'. base_url() . 'reports/report_rent_download/' . $date1 . '/' . $date2 . '" class="btn btn-success">View Sales transaction</a>';	
							}else{
								echo '<a href="'. base_url() . 'sales/overall_reports" class="btn btn-success">View Sales Transaction</a>';
							}
						
							
						?>
					</div>
				</div>
			</div>
			<div id="loading_modal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog">

				    <div class="modal-content">
				    	<div class="modal-body">
				    		 Please wait.....<div class="loader"></div>
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
			
	</div><!--Closing-->
</div><!--Closing-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker3.css">

<script>
	$(document).ready(function(){
		$('.input-daterange').datepicker({

			endDate: 'today',
			todayHighlight: true,
	        todayBtn: "linked"
	    });

	    $('.input-daterange date').each(function() {
	    	$(this).datepicker("clearDates");
		});


		$("#rent_form").submit(function(evt){
	        evt.preventDefault();
	        
	        var from = $("#from").val();
	        var to = $("#to").val();

	        if(from == '' || to == ''){
	        	var error = '<div id="error_status" class="alert alert-success"><strong>Please pick Date</strong></div>';
	        	$("#message_error").empty();
	        	$("#message_error").append(error);
	        }else{
	        	$("#message_error").empty();
	        	var url = $(this).attr('action');
		        var postData = $(this).serialize();
		        $('#loading_modal').modal('show');
		        $.post(url, postData, function(o){
		            var result = o.result;
		            if(result == '1'){
		            	var redirect = o.redirect;
		            	window.location.href = redirect;
		            	/*var html = o.html;
		            	$("#report_cancel_table").empty();
		            	$("#report_cancel_table").html(html);
		            	$('#loading_modal').modal('hide');*/
		            }
		            
		        }, 'json');
	        }

	        
	    });

	    
	});

    

</script>