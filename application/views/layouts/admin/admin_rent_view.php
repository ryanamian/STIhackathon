		<div class="rent_view">
			<div id="box">
				<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/rent.png">Rent List
				</div>
				<!-- <div id="search">
					<form method="POST" action="<?php echo base_url();?>admin/search_product" class="form-vertical">
							<div class="form-group">
								<div class="col-md-3 col-md-offset-8">
									<br><input type="text" placeholder="Search" id="txtsearch" name="txtsearch" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-1">
									<br><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
								</div>
							</div>

					</form>
				</div> -->
				<div class="box-panel">
					<div id="message"></div>
					<div class="table-responsive">
					    <table id="table_rent_view" class="table table-hover table table-striped">
					        <thead>
					            <tr>
					                <th>Transcation ID</th>
					                <th>Customer</th>
					                <th>Delivery date</th>
					                <th>Action</th>
					            </tr>
					        </thead>
					        <tbody>
					        <?php
					        	foreach ($rent->result() as $row) {
									$transactionID = $row->transactionID;
									$name = $row->fname . ' ' . $row->lname;
									$delivery_date=  $row->transaction_delivery_date;
									echo'<tr>
							                <td>' . $transactionID . '</td>
							                <td>' . $name . '</td>
							                <td>' . $delivery_date . '</td>
							                <td><a href="' .base_url() .'transaction/view_order/'. $transactionID .'" class="btn btn-success btn-xs">View Order</a></td>
							            </tr>';
								}
							?>
					        </tbody>
					    </table>
					    <a id="rent_report" href="<?php echo base_url();?>reports/rent_reports">View all rent transaction</a>
					     / <a id="retrieve_report" href="<?php echo base_url();?>transaction/rent_retrieve">Retrieve rent transaction</a>
						<?php
						
							echo '<div id="page" class="col-xs-12">';
							echo $this->pagination->create_links();
							echo '</div><br />'
						?>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<?php
	$check_login = $this->session->userdata('renee_salud_admin');
	$s = $this->session->userdata('renee_salud_admin');
	$data['user_level'] =  $s['user_level'];

?>
<script>

	$("#rent_report").click(function(evt){
		evt.preventDefault();
		var url = $(this).attr('href');
		var level = '<?php echo $data["user_level"];?>';


		if(level == 'staff'){
			var html = '<div id="status1" class="alert alert-success">You don\'t have access to this. Only administrator</div>';
			$("#status1").remove();
			$("#message").append(html);

		}else if(level == 'admin'){
			window.location.href = url;
		}


	});

	$("#retrieve_report").click(function(evt){
		evt.preventDefault();
		var url = $(this).attr('href');
		var level = '<?php echo $data["user_level"];?>';


		if(level == 'staff'){
			var html = '<div id="status1" class="alert alert-success">You don\'t have access to this. Only administrator</div>';
			$("#status1").remove();
			$("#message").append(html);

		}else if(level == 'admin'){
			window.location.href = url;
		}


	});

   	$(".done_btn").click(function(evt){
   		evt.preventDefault();
   		var url = $(this).attr('href');
   		$.get(url, function(o){
			if(o.result == '1'){
				var id = o.rentID;
				$("#"+id).fadeOut(2000, function(){$(this).remove();});
				/*var html = '<div id="status1" class="alert alert-success"><strong>'+o.message+'</strong></div>';
				$("#status1").remove();
				$("#message1").append(html);
				$(".form-control-feedback").css('display','none');
				//<i class="form-control-feedback glyphicon glyphicon-remove" data-bv-icon-for="addcategory" style="display: block;"></i>
				var add = '<option value="'+ o.id + '">' + addcat + '</option>';
				$("#category").append(add);
				setTimeout(function(){
					$("#message1").fadeOut();
				}, 3000);*/
			}else{
				/*var html = '<div id="status1" class="alert alert-danger"><strong>'+o.message+'</strong></div>';
				$("#status1").remove();
				$("#message1").append(html);
				$(".form-control-feedback").css('display','none');*/
			}
   		},'json');
	});
</script>
