<div class="col-md-9" id="cart" >
    <div id="text">

        <?php
            echo date("Y-m-d");
            $grand_total = 0;
        ?>
    </div>
         
    <div class="table-responsive">
        <table id="table_reserve_payment_view" class="table table-hover table table-striped">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Customize Size</td>
                    <td>Quantity</td>
                    <td>Amount</td>
                </tr>
            </thead>
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
                <a href="clear_cart" class="fg-button teal">Clear Cart</a>
                <input type="submit" class ='fg-button teal' value="Checkout">
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){

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