		<div class="member_list">		
			<div id="box">
				<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/member.png">Member list<a href="<?php echo base_url();?>admin/registration"><span class="glyphicon glyphicon-plus-sign">Add</span></a></div>

				<div id="search">
					<form method="POST" action="<?php echo base_url();?>admin/search" class="form-vertical">
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
				</div>

				<div class="box-panel">
					<br><br>
					<div class="table-responsive">
					    <table id="table_member_view" class="table table-hover table table-striped">
					        <thead>
					            <tr>
					                <th>First Name</th>
					                <th>Last Name</th>
					                <th>Email</th>
					                <th>Action</th>
					            </tr>
					        </thead>
					        <tbody>
					        <?php
					        
					        	foreach ($query->result() as $row) {
									$fname = $row->fname;
									$lname = $row->lname;
									$userid = $row->userid;
									$mname = $row->mname;
									$email = $row->email;
									echo'<tr id="' . $userid .'">
							                <td>' . $fname . '</td>
							                <td>' . $lname . '</td>
							                <td>' . $email . '</td>
							                <td><a href="' . base_url().'admin/deactivate_member?userid=' . base64_encode($userid) . '" class="delete_btn btn btn-danger btn-xs">Deactivate</a><a href="' . base_url() . 'admin/member_info/' . $userid . '" class="btn btn-success btn-xs">View</a></td>
							            </tr>';
								}
							?>
					        </tbody>
					    </table>

					    <a href="<?php echo base_url();?>admin/member_deactivate" class="btn btn-success btn-xs">View Deactivated Account</a>
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


<script>


   	$(".delete_btn").click(function(evt){
   		evt.preventDefault();
   		var url = $(this).attr('href');

	   	$.get(url, function(o){
			if(o.result == '1'){
				var id = o.userid;
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