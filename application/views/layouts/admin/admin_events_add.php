
	<div id="product_view">
			
				
		<div id="box">
			<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/member.png">Add event
			</div>
			
			<div class="box-panel">
				<form method="POST" action="<?php echo base_url(); ?>admin/add_event_process">

					<div class="col-md-6">Event title <input type="" name="event_title" class="form-control" maxlength="50"></div>

					<div class="col-md-8 nopadding"><br>
						<textarea id="content_text" name="content_text" rows="10" class="form-control" maxlength="1000"></textarea> 
					</div>


					<div class="form-group">
						<div class="col-xs-6 adjust">
							<label>Upload Display picture</label>
							<input type="file" id="displaypic" name="displaypic">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-6 adjust">
							
						</div>
					</div><br>

					<div class="form-group">
						<div class="col-xs-6 adjust">
							<input type="submit" value="Submit">
						</div>
					</div>
						
				</form>
				
				
			</div>
		</div>
	</div>
</div>
