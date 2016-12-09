<div id="report_delivery_view">
	
	<div id="box">

		<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/delivery.png"> Delivery report</div>
			<div class="box-panel">
				<form method="POST" id="delivery_form" action="<?php echo base_url();?>reports/delivery_reports_fromto/">
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
						<input type="submit" id="report_delivery_btn" class="btn btn-info btn-sm" value="Search">
					</div>
					<div class="col-md-1">
						<a href="<?php echo base_url();?>reports/delivery_reports" id="report_delivery_btn" class="btn btn-danger btn-sm">Clear</a>
					</div>
				</form>
	    	</div>
		</div>
			<div id="report_delivery_table" class="row">
			    <table id="report_cancel_list" class="table table-hover table table-striped">

			        <thead>
			            <tr>
			            	<th>Transaction ID</th>
			                <th>Customer name</th>
			                <th>Address</th>
			                <th>Delivery Status</th>
			                <th>Delivery Date</th>
			            </tr>
			        </thead>
			        <tbody>
			        	<?php 
			        		
			        		foreach ($delivery->result() as $object) {
			        			$transactionID = $object->transactionID;
			        			$name = $object->fname . ' ' . $object->lname;
			        			$delivery_status = $object->transaction_delivery_status;
			        			$address = $object->transaction_delivery_address;
			        			$delivery_date = $object->transaction_delivery_date;
			        			if($delivery_status == ''){
			        				$status = 'Pending';
			        			}else{
			        				$status =  'Delivered';
			        			}
			        			echo '<tr>
			        					<td>' . $transactionID . '</td>
						                <td>' . $name . '</td>
						                <td>' . $address . '</td>
						                <td>' . $status . '</td>
						                <td>' . $delivery_date . '</td>
				        			</tr>';
			        		}
			        	?>
			        </tbody>
			    </table>

			    <div class="row">
					<div class="col-md-2 col-md-offset-10">
						<?php
							if(isset($date1) && isset($date2)){
								echo '<a href="'. base_url() . 'reports/report_delivery_download/' . $date1 . '/' . $date2 . '" class="btn btn-success">Download This Reports</a>';	
							}else{
								echo '<a href="'. base_url() . 'reports/report_delivery_download/" class="btn btn-success">Download This Reports</a>';
							}
						?>
						
					</div>
					<?php
						echo '<div id="page" class="col-xs-12">';
						echo $this->pagination->create_links();
						echo '</div><br />';
					?>
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

			todayHighlight: true,
	        todayBtn: "linked"
	    });

	    $('.input-daterange date').each(function() {
	    	$(this).datepicker("clearDates");
		});


		$("#delivery_form").submit(function(evt){
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
		            }
		            
		        }, 'json');
	        }

	        
	    });

	    
	});

    

</script>