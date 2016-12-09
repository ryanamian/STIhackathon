<div id="report_cancel_view">
	
	<div id="box">

		<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/rent.png"> Rent report</div>
			<div class="box-panel">
				<form method="POST" id="cancel_form" action="<?php echo base_url();?>reports/cancel_reports_fromto/">
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
						<input type="submit" id="report_cancel_btn" class="btn btn-info btn-sm" value="Search">
					</div>

					<div class="col-md-1">
						<a href="<?php echo base_url();?>reports/cancel_reports" id="report_cancel_btn" class="btn btn-danger btn-sm">Clear</a>
					</div>
				</form>
	    	</div>
		</div>
			<div id="report_cancel_table" class="row">
			    <table id="report_cancel_list" class="table table-hover table table-striped">

			        <thead>
			            <tr>
			            	<th>Product id</th>
			                <th>Product name</th>
			                <th>Color</th>
			                <th>Size</th>
			                <th>Penalty percent</th>
			                <th>Penalty</th>
			                <th>Cancel Date</th>
			            </tr>
			        </thead>
			        <tbody>
			        	<?php 
			        		$total = 0;
			        		foreach ($cancel->result() as $object) {
			        			$prodID = $object->prodID;
			        			$name = $object->name;
			        			$color = $object->list_colorname;
			        			$size = $object->reserve_size;
			        			$penalty_percent = $object->penalty_percent;
			        			$penalty = $object->penalty;
			        			$cancel_date = $object->cancel_date;
			        			$size_convert = '';	

			        			$total = $total + $penalty;
			        			if(strpos($size, '-') == TRUE){

                                }else{
                                   $size_convert = $option_value;
                                }

	                            foreach($sizes as $object){
	                                if($size == $object->sizeID){
	                                	$size_convert = $object->size;
	                                }
	                            }

			        			echo '<tr>
			        					<td>' . $prodID . '</td>
						                <td>' . $name . '</td>
						                <td>' . $color . '</td>
						                <td>' . $size_convert . '</td>
						                <td>' . $penalty_percent . '</td>
						                <td>' . $penalty . '</td>
						                <td>' . $cancel_date . '</td>
				        			</tr>';
			        		}
			        	?>
			        </tbody>
			    </table>


			     <div class="row">
					<div class="col-md-2 col-md-offset-10">
						Total: &#8369; <?php echo number_format($total, 2);?>
					</div>
				</div>

			    <div class="row">
					<div class="col-md-2 col-md-offset-10">
						<?php
							if(isset($date1) && isset($date2)){
								echo '<a href="'. base_url() . 'reports/report_cancel_download/' . $date1 . '/' . $date2 . '" class="btn btn-success">Download This Reports</a>';	
							}else{
								echo '<a href="'. base_url() . 'reports/report_cancel_download/" class="btn btn-success">Download This Reports</a>';
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

			endDate: 'today',
			todayHighlight: true,
	        todayBtn: "linked"
	    });

	    $('.input-daterange date').each(function() {
	    	$(this).datepicker("clearDates");
		});


		$("#cancel_form").submit(function(evt){
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