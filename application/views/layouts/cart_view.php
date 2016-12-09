<div class="col-md-9" id="cart" >
    <div id="text">

        <?php
            echo date("Y-m-d");
            $grand_total = 0;
            $cart_check = $this->cart->contents();            
            if(empty($cart_check)) {
                echo 'To add products to your shopping cart click on "Add to Cart" Button'; 
            }
        ?>
    </div>
         
    <div class="table-responsive">
        <table id="table_cart_view" class="table table-hover table table-striped">
            <thead>
                <?php
             
                if ($cart = $this->cart->contents()): ?>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Custom Size</th>
                        <th>Qty</th>
                        <th>Amount</th>
                        <th>Cancel Product</th>
                    </tr>
            </thead>

            <?php
            
                //echo form_open('cart/update_cart');
                
                $i = 1;

                foreach ($cart as $item):
                    echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                    echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                    echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                    echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                    echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
            ?>
                    <tr>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td>
                            <?php echo $item['name']; ?>
                        </td>
                        <td>
                            <?php echo '&#8369;' . number_format($item['price'], 2); ?>
                        </td>
                        
                        <td>

                            <?php
                                if($this->cart->has_options($item['rowid']) == true){
                                    
                                    foreach($this->cart->product_options($item['rowid']) as $option_name => $option_value) {
                                            

                                            
                                            if(strpos($option_value, '-') == TRUE){

                                            }else{
                                                echo $option_value. '<br>';
                                            }

                                        foreach($sizes as $object){
                                            if($option_value == $object->sizeID){
                                                echo $object->size.'<br>';
                                            }
                                            
                                        }
                                    }        
                                }
                            ?>

                        </td>
                        <td>
                            <?php

                                echo $item['qty'];

                                /*echo '<select name="cart['. $item['id']. '][qty]" class="form-control">';
                                for($a = 1; $a <= $item['max']; $a++){
                                    if($a == $item['qty']) {
                                        echo '<option value="'.$a.'" selected>'.$a.'</option>';
                                    }else{
                                        echo '<option value="'.$a.'">'.$a.'</option>';
                                    }
                                        
                                }
                                echo '</select>';*/
                            ?>
                        </td>
                            <?php $grand_total = $grand_total + $item['subtotal']; ?>
                        <td>
                            <?php echo '&#8369;' .$item['subtotal']?>
                        </td>

                        <td>
                              
                            <?php 
                                $path = "<img src='" . base_url() . "images/cart_cross.jpg' width='25px' height='20px'>";
                                echo anchor('cart/remove/' . $item['rowid'], $path);
                            ?>
                        </td>
                    <?php endforeach; ?>
                </tr>    
            </table>
            <div id="message_date"></div>
                <div id="order_total" class="col-md-12 "></div>
                    Order Total: &#8369;<?php             
                   echo number_format($grand_total, 2);?></b></td>
                </div>

                <div class="col-md-12" id="deposit">
                    Deposit: 
                </div>

                <div class="col-md-12" id="total_amount">
                    Total payment: 
                </div>
            
       
            <?php //submit button. ?>
            <!-- <input type="submit" class ='fg-button teal' value="Update Cart"> -->
            <?php echo form_close(); ?>
            
            <!-- "Place order button" on click send "billing" controller  -->
                            
            <?php endif; ?>    
         <?php
         if ($cart = $this->cart->contents()): ?>
    

        <form id="checkout_form" method="POST" action="<?php echo base_url();?>cart/check_out">
            <input type="hidden" name="total"  id="total" value="<?php echo $grand_total.'.00';?>">
            <input type="hidden" name="client_orderid" id="client_orderid" value="order-00001">
            <input type="hidden" name="order_desc" id="order_desc" value="Test Order Description">
            <input type="hidden" name="first_name" id="first_name" value="<?php echo $first_name;?>">
            <input type="hidden" name="last_name" id="lastname" value="<?php echo $last_name;?>">
            
            <input type="hidden" name="address1" id="address1" value="<?php echo $address1;?>">
            <input type="hidden" name="city" id="city" value="<?php echo $city;?>">
            <input type="hidden" name="zip_code" id="zip_code" value="<?php echo $zip_code;?>">
            <input type="hidden" name="country" id="country" value="PH">
            <input type="hidden" name="phone" id="phone" value="<?php echo $phone;?>">

            
            <input type="hidden" name="amount" id="amount" value="<?php echo $grand_total.'.00';?>">
            <input type="hidden" name="email" id="email" value="<?php echo $email;?>">
            <input type="hidden" name="currency" id="currency" value="PHP">
            <input type="hidden" name="ipaddress" id="ipaddress" value="65.153.12.232">
            <input type="hidden" name="redirect_url" id="redirect_url" value="http://reneesaludfashion.esy.es/success.php">
            <input type="hidden" name="server_callback_url" id="server_callback_url" value="http://reneesaludfashion.esy.es/callback.php">

            <div class="col-md-12">
                Delivery date: <input type="text" id="datepicker" data-provide="datepicker" class="datepicker" type="text" name="date">
            </div>
            <div class="col-md-12">
                <input type="checkbox" id="agreement"> I agree in terms and condition...<a href="<?php echo base_url();?>view/terms_and_conditions">Click here to view</a><br>
            </div>
            <div id="note" class="col-md-5"><b>Note: <br>1.</b> 3-5 days considered as Rent. So you need to pay the deposit and renting price.</i><br>
                                        <b>2.</b> 6-30 days considered as Reserve. So you need to pay the deposit only. If you want to continue to rent you must settle the remaining balance 3 days before the delivery date or else it will considered as cancel.<br>
                                        <b>3.</b> Please read terms and conditions.
            </div>
            <div class="col-md-12"> 
                <a href="clear_cart" class="fg-button teal btn sm-btn">Clear Cart</a>
                 <a id="checkout_btn" class ="fg-button teal btn sm-btn" disabled>Checkout</a>
                        <?php
                            
                            echo    '<div id="checkout" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                            <!-- Modal content-->
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    
                                                    <h4 class="modal-title">Proceed Payment</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <div id="cancel_all_status"></div>
                                                    <form enctype="multipart/form-data" id="regcat" method="POST" class="form-vertical">
                                                        <div id="wew">
                                                            <div id="cancel_message">
                                                                You want to proceed payment?
                                                                <div id="redirect_btn"><input type="submit" id="payment_submit" class ="btn btn-success sm-btn" value="Yes"><a id="redirect_cancel" type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</a></div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>';
                        ?>

                
            </div>
        </form>
    <?php endif; ?>     
    </div>
    <script type="text/javascript">
        $(document).ready(function(){

            $("#checkout_btn").click(function(){

                var date = $("#datepicker").val();
                var agreement=$("#agreement").is(":checked");
                if(date == ''){

                    var html = '<div id="date_status" class="alert alert-danger">Please pick delivery date</div>';
                    $("#date_status").remove();
                    $("#message_date").append(html);
                }else if( agreement == false){
                    var html = '<div id="date_status" class="alert alert-danger">Please check terms and condition</div>';
                    $("#date_status").remove();
                    $("#message_date").append(html);
                }else{
                    $('#checkout_btn').removeAttr('disabled');
                    $("#checkout").modal('show');
                }
            });

            $("#agreement").click(function(){
                var agreement=$("#agreement").is(":checked");
                if( agreement== true){
                    $('#checkout_btn').removeAttr('disabled');
                }else{
                    $('#checkout_btn').attr('disabled', true);
                }
            });

            $("#checkout_form").submit(function(evt){
                evt.preventDefault();

                
                
                var url = $(this).attr('action');
                var postData = $(this).serialize();

                $.post(url, postData, function(o){
                    var redirect = o["redirect-url"];
                    window.location.href = redirect;
                }, 'json');
            });

            $("#datepicker").change(function(){
                var date = $("#datepicker").val();
                var revise_date = date.replace(/-/g, "/");
                var today = new Date();
                today.setDate(today.getDate()+5)
                var day = today.getDate();
                var month = today.getMonth() + 1;
                var year = today.getFullYear();
                
                if(day < 10){
                    day = 0 + "" + day;
                }

                if(month < 10){
                    month = 0 + "" + month;
                }


                //var full = month + "/" + day + "/" + year;
                var full = year+ "/" + month + "/" + day;
                var d1 = new Date(revise_date);
                //var d1 = new Date(date);
                var d2 = new Date(full);
                if(d1 <= d2){
                    var amount = $("#total").val();
                    var total = amount * 2;

                    var grand_total = total;
                
                    $("#deposit").empty();
                    $("#deposit").append('Deposit: &#8369;' + amount);
                    $("#amount").val(grand_total+'.00');
                    $("#total_amount").empty();
                    $("#total_amount").append('Total payment: &#8369;' + grand_total);

                }else{
                    var grand_total = $("#total").val();
                    $("#deposit").empty();
                    $("#deposit").append('Deposit: None');
                    $("#amount").val(grand_total);
                    $("#total_amount").empty();
                    $("#total_amount").append('Total payment: &#8369;' + grand_total);
                }
            });
        });
    </script>