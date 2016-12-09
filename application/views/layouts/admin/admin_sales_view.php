<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      //google.charts.load('current', {'packages':['bar']});
      //google.charts.setOnLoadCallback(drawChart);
      google.charts.load('current', {'packages':['corechart','bar']});
      google.charts.setOnLoadCallback(drawCharts);
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Months','Sales   ',{ role: 'style' }],
          <?php 
          	$num = 1;
          	$january = 0;
          	$february= 0;
          	$march = 0;
          	$april = 0;
          	$may = 0;
          	$june = 0;
          	$july = 0;
          	$august = 0;
          	$september = 0;
          	$october = 0;
          	$november = 0;
          	$december = 0;
          	
          	foreach($monthly as $object){
          		$mon = explode('-', $object->Month);
          		$mon_explode = $mon[0];
          		if($mon_explode == 1){
          			$january += $object->sales;
          		}elseif($mon_explode == 2){
          			$february += $object->sales;
          		}elseif($mon_explode == 3){
          			$march += $object->sales;
          		}elseif($mon_explode == 4){
          			$april += $object->sales;
          		}elseif($mon_explode == 5){
          			$may += $object->sales;
          		}elseif($mon_explode == 6){
          			$june += $object->sales;
          		}elseif($mon_explode == 7){
          			$july += $object->sales;
          		}elseif($mon_explode == 8){
          			$august += $object->sales;
          		}elseif($mon_explode == 9){
          			$september += $object->sales;
          		}elseif($mon_explode == 10){
          			$october += $object->sales;
          		}elseif($mon_explode == 11){
          			$november += $object->sales;
          		}elseif($mon_explode == 12){
          			$december += $object->sales;
          		}
          	}


          	foreach($cancel as $object){
          		$mon = explode('-', $object->Month_cancel);
				      $mon_explode = $mon[0];          		
          		if($mon_explode == 1){
          			$january += $object->cancel_sales;
          		}elseif($mon_explode == 2){
          			$february += $object->cancel_sales;
          		}elseif($mon_explode == 3){
          			$march += $object->cancel_sales;
          		}elseif($mon_explode == 4){
          			$april += $object->cancel_sales;
          		}elseif($mon_explode == 5){
          			$may += $object->cancel_sales;
          		}elseif($mon_explode == 6){
          			$june += $object->cancel_sales;
          		}elseif($mon_explode == 7){
          			$july += $object->cancel_sales;
          		}elseif($mon_explode == 8){
          			$august += $object->cancel_sales;
          		}elseif($mon_explode == 9){
          			$september += $object->cancel_sales;
          		}elseif($mon_explode == 10){
          			$october += $object->cancel_sales;
          		}elseif($mon_explode == 11){
          			$november += $object->cancel_sales;
          		}elseif($mon_explode == 12){
          			$december += $object->cancel_sales;
          		}
          	}

          	foreach($damage as $object){
          		$mon = explode('-', $object->Month);
          		$mon_explode = $mon[0];
          		if($mon_explode == 1){
          			$january += $object->sales;
          		}elseif($mon_explode == 2){
          			$february += $object->sales;
          		}elseif($mon_explode == 3){
          			$march += $object->sales;
          		}elseif($mon_explode == 4){
          			$april += $object->sales;
          		}elseif($mon_explode == 5){
          			$may += $object->sales;
          		}elseif($mon_explode == 6){
          			$june += $object->sales;
          		}elseif($mon_explode == 7){
          			$july += $object->sales;
          		}elseif($mon_explode == 8){
          			$august += $object->sales;
          		}elseif($mon_explode == 9){
          			$september += $object->sales;
          		}elseif($mon_explode == 10){
          			$october += $object->sales;
          		}elseif($mon_explode == 11){
          			$november += $object->sales;
          		}elseif($mon_explode == 12){
          			$december += $object->sales;
          		}
          	}


            foreach($penalty as $object){
              $mon = explode('-', $object->Month);
              $mon_explode = $mon[0];
              if($mon_explode == 1){
                $january += $object->penalty_total;
              }elseif($mon_explode == 2){
                $february += $object->penalty_total;
              }elseif($mon_explode == 3){
                $march += $object->penalty_total;
              }elseif($mon_explode == 4){
                $april += $object->penalty_total;
              }elseif($mon_explode == 5){
                $may += $object->penalty_total;
              }elseif($mon_explode == 6){
                $june += $object->penalty_total;
              }elseif($mon_explode == 7){
                $july += $object->penalty_total;
              }elseif($mon_explode == 8){
                $august += $object->penalty_total;
              }elseif($mon_explode == 9){
                $september += $object->penalty_total;
              }elseif($mon_explode == 10){
                $october += $object->penalty_total;
              }elseif($mon_explode == 11){
                $november += $object->penalty_total;
              }elseif($mon_explode == 12){
                $december += $object->penalty_total;
              }
            }

          	foreach($monthly as $object){
          		$mon = explode('-', $object->Month);

          		$mon_explode = $mon[0];
          		if($mon_explode == 1){
          			$month = 'Jan';
          		}elseif($mon_explode == 2){
          			$month = 'Feb';
          		}elseif($mon_explode == 3){
          			$month = 'Mar';
          		}elseif($mon_explode == 4){
          			$month = 'Apr';
          		}elseif($mon_explode == 5){
          			$month = 'May';
          		}elseif($mon_explode == 6){
          			$month = 'Jun';
          		}elseif($mon_explode == 7){
          			$month = 'Jul';
          		}elseif($mon_explode == 8){
          			$month = 'Aug';
          		}elseif($mon_explode == 9){
          			$month = 'Sep';
          		}elseif($mon_explode == 10){
          			$month = 'Oct';
          		}elseif($mon_explode == 11){
          			$month = 'Nov';
          		}elseif($mon_explode == 12){
          			$month = 'Dec';
          		}

          		/*foreach($cancel as $object2){
					$mon_2 = explode('-', $object2->Month_cancel);
					$mon_explode2= $mon_2[0];

					if($mon_explode2 == 1){
	          			$month2 = 'Jan';
	          		}elseif($mon_explode2 	== 2){
	          			$month2 = 'Feb';
	          		}elseif($mon_explode2 == 3){
	          			$month2 = 'Mar';
	          		}elseif($mon_explode2 == 4){
	          			$month2 = 'Apr';
	          		}elseif($mon_explode == 5){
	          			$month2 = 'May';
	          		}elseif($mon_explode2 == 6){
	          			$month2 = 'Jun';
	          		}elseif($mon_explode2 == 7){
	          			$month2 = 'Jul';
	          		}elseif($mon_explode2 == 8){
	          			$month2 = 'Aug';
	          		}elseif($mon_explode2 == 9){
	          			$month2 = 'Sep';
	          		}elseif($mon_explode2 == 10){
	          			$month2 = 'Oct';
	          		}elseif($mon_explode2 == 11){
	          			$month2 = 'Nov';
	          		}elseif($mon_explode2 == 12){
	          			$month2 = 'Dec';
	          		}else{
	          			$month2 ='';
	          		}


					if($mon_explode == $mon_explode2){
						echo '["'.$month. '",' . $object->sales .',' . $object2->cancel_sales. '],'; 
					}
				}*/

          		//echo '["'.$month. '",' . $object->sales .'],';
          		

          	}

          echo '["Jan",'.$january.', "color:#26A65B;"],';
          echo '["Feb",'.$february.', "Gold"],';
          echo '["Mar",'.$march.', "color:#26A65B"],';
          echo '["Apr",'.$april.', "color:#26A65B"],';
          echo '["May",'.$may.', "color:#26A65B"],';
          echo '["Jun",'.$june.', "color:#26A65B"],';
          echo '["Jul",'.$july.', "color:#26A65B"],';
          echo '["Aug",'.$august.', "color:#26A65B"],';
          echo '["Sep",'.$september.', "color:#26A65B"],';
          echo '["Oct",'.$october.', "color:#26A65B"],';
          echo '["Nov",'.$november.', "color:#26A65B"],';
          echo '["Dec",'.$december.', "#color:26A65B"],';

          ?>
          ]);
          /*['2014', 2000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],	
          ['2017', 1030, 540, 350]*/
        

        var options = {
          chart: {
            title: 'Monthly Sales of Renee Salud Couturier ',
            subtitle: 'Rent, Cancelled, and Damage: 2016',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }


      function drawCharts() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php

          	foreach($top_sales as $object){

          		echo '["'. $object->name .'",'. $object->total_sales .'],';
          	}

          ?>
          
        ]);

        var options = {
          title: 'Top Sales for this month',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('topsales'));

        chart.draw(data, options);
      }
    </script>


    <script type="text/javascript">
     
      
    </script>

<div id="sales_view">
	
	<div id="box">

		<div class="box-top"><img src="<?php echo base_url();?>images/admin_images/delivery.png"> Delivery report</div>
			<div class="box-panel">
        <div class="col-md-3 col-md-offset-9"><a href="<?php echo base_url();?>sales/overall">View Overall sales</a></div>
				<div class="col-md-12" id="columnchart_material" style="width: 1000px; height: 500px;"></div>
				<div class="col-md-12"><hr class="colorgraph"></div>

				<div class="col-md-6">

				</div><br><br>
				<div class="col-md-6 col-offset-md-6">
					

				</div>

				<div class="col-md-10" id="topsales" style="width: 900px; height: 500px;"></div>
				<div class="col-md-12"><hr class="colorgraph"></div>
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
	$("#topsales_date").change(function(o){

		var month = $("#topsales_date").val();
		alert(month);
		$("#topsales").empty();

		$.get("top_sales/" + month, function(o){
			if(o.result == 1){
				var html = o.html;	
				var data = google.visualization.arrayToDataTable(html);

				 var options = {
		          title: 'Top Sales for this month',
		          is3D: true,
		        };

		        var chart = new google.visualization.PieChart(document.getElementById('topsales'));

		        chart.draw(data, options);
			}else{
				
			}
		}, 'json');		
    

	});

</script>