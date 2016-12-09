

<div class="col-xs-9">
	<div class="middlebar_order">
		<div class="row">
			<div id="box">
				<div class="box-top">Renee Salud Events
				</div>
				<div class="box-panel">
					

						<?php
							foreach($events as $object){
								echo '<div class="col-md-12">';
								$id = $object->eventID;
								$image = '';
								$title = $object->event_title;
								$content = substr($object->event_content, 0, 10);
								echo '<a href="'. base_url(). 'events/' . $id .'"><img src="'. base_url().'images/admin_images/profile.png" height="100px" width="100px"><b>' . $title . '</b><br>' . $content . '</a><a href="">READ MORE</a>';
								echo '</div><br>';
							}
						?>
						
					
				</div>
			</div>
			
		</div>
	</div>
</div>

