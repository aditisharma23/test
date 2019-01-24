 	@include('user/layouts.app2')
 	 <style>
[type="checkbox"]:not(:checked), [type="checkbox"]:checked {
 position: absolute; 
 left: 26px; 
 opacity: 5; 
}
         </style>
 	     <!--== BODY INNER CONTAINER ==-->
 	     
 	     <div class="sb2-2">
            <!--== breadcrumbs ==-->
            <div class="sb2-2-2">
                <ul>
                    <li><a href="{{url('/home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre">Subscription
                    </li>

                </ul>
            </div>
    
<style>
.form-group label {
    color: #333;
    font-weight:600;
}
</style> 
            <!--== User Details ==-->
            <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>Subscriptions</h4>

                            </div>
                            <div class="tab-inn table-responsive ">
                                <div class="table-desi">
                                      <div class="setcion1">
                                          <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="box-shadow:none;">
                                <div class="card-body userdatabtn-color">
                                   <!-- <div class="d-flex no-block">
                                        <div>
                                            <h4 class="card-title"><span class="lstick"></span>Subscriptions</h4>
                                        </div>
                                    </div>-->
                                    
                                    <div class="row mt-0" style="justify-content: center; display: flex;">
                                      @if(!empty($subscription))
                                      @foreach($subscription as $subscrip)
                                      <div class="col-md-4">
                                            <div class="mt-3 pricing_plan_box active pos-w-delt" @if($subscrip->id == '3') style="background:#8499f0;border:#8499f0;" @endif>
                                                <div class="lable">
                                                    <h6 class="best mb-0 text-uppercase" @if($subscrip->id == '3') style="color:#8499f0;" @endif>Popular &nbsp;Plan</h6>
                                                </div>
                                                <div class="pricing_header text-center">
                                                    <div class="price-name">
                                                        <h4 class="font-weight-bold text-white text-uppercase mb-0">@if(!empty($subscrip->title)){{$subscrip->title}}@endif</h4>
                                                        <div class="pricing_devider bg-white mx-auto mt-1"></div>
                                                    </div>
                                                    <div class="price_tag_heading mt-2">
                                                        <h3 class="font-weight-bold text-white mb-0"><sup>$</sup>@if($subscrip->price != ''){{$subscrip->price}}@endif/<span>@if($subscrip->month == '12') Year @else Month @endif </span></h3>
                                                    </div>
                                                </div>
                                                <div class="list_price_features text-white mb-0 phere">
                                                    @if(!empty($subscrip->description))<?php echo $subscrip->description; ?>@endif
                                                </div>
                                                 <input type="hidden" id="paypal" value="{{\App\Options::getoptionmatch1('paypal')}}">
                                                 <input type="hidden" @if($subscrip->id =='2') id="package" @else id="package2" @endif value="{{ $subscrip->id}}">
                                                  <input type="hidden" @if($subscrip->id =='2')  id="amount" @else  id="amount2" @endif value="{{ $subscrip->price}}">
                                                 
                                                
                                                   <input type="hidden" class="wallets"  @if(!empty($walletamount)) value="{{$walletamount}}"  @endif>
                                                  <p class="check-txt"><input type="checkbox" @if($subscrip->id =='2') class="checkclass2"  @else class="checkclass3" @endif style="opacity: 88 !important;"> use amount of {{$walletamount}} from wallet</p>
                                                 
                                                  <div class="text-center @if($subscrip->id =='2') dsr @else dsr2 @endif">
                                                    <a href="javascript:void(0);"  data-id="<?php echo $subscrip->id; ?>" class="btn btn_custom choose_plan" @if($subscrip->id == '3') style="color:#8499f0;" @endif >Choose Plan</a>
                                                  </div>
                                                 <div @if($subscrip->id =='2') id="paypal-button-container" @else id="paypal-button-container2" @endif style="display:none;"></div>
                                            </div>
                                        </div>
                                        @endforeach
                                      @else
                                      @endif
                                      
                                        
                                     </div>
                                 </div>
                             </div>
                          </div>
                            </div>
						<div class="clearfix"></div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
                @include('user/layouts.footer')
                <script src="https://www.paypalobjects.com/api/checkout.js"></script>
            	<script>
                var amount=1;
                var package=0;
                var amount2=0;
                var package2=0;
                var wallet=  0;
                var walletuse = 0;
                $('.choose_plan').click(function()
                {
             amount=$('#amount').val();
             amount11=$('#amount').val();
             package=$('#package').val();
             amount2=$('#amount2').val();
             amount22=$('#amount2').val();
             package2=$('#package2').val();
             wallet=  $('.wallets').val();
             
            if ($(".checkclass2").is(":checked")) {
                 if(parseInt(wallet) > parseInt(amount) || parseInt(wallet) == parseInt(amount))
                 {
                    wallet = wallet - amount;
                    walletuse = amount;
                    amount = '0';
                    
                    var transaction_id = '0';
                    var status = 'completed';
                    var amounts = amount11;
                    var currency = 'USD';
                    var pid=package;
                      $.ajax({
                   type: "POST",
                   url: "{{url('user/update_plan')}}",
                   data:{
                            "_token": "{{ csrf_token() }}",
                            transaction_id:transaction_id, 
                            status:status, 
                            amount:amounts, 
                            currency:currency,
                            package:pid,
                            walletuse:walletuse
                        },
                   success: function(data)
                   {
                            $(".as1").show();
                            $(".as1").text("Subscription updated Successfully.");
                             setTimeout(function(){ $('.as1').hide();
                       location = "{{ route('home') }}";}, 
                       3000);
                       
                   }
                });
                    
                    
                 }else
                 {
                     amount = amount - wallet;
                     walletuse = wallet;
                     wallet = '0';
                 }
                 $('#amount').val(amount);
            }
            
             if ($(".checkclass3").is(":checked")) {
                 if(parseInt(wallet) > parseInt(amount2) || parseInt(wallet) == parseInt(amount2))
                 {
                    wallet = wallet - amount2;
                    walletuse = amount2;
                    amount = '0';
                    
                    
                    
                     var transaction_id = '0';
                    var status = 'completed';
                    var amounts = amount22;
                    var currency = 'USD';
                    var pid=package2;
                      $.ajax({
                   type: "POST",
                   url: "{{url('user/update_plan')}}",
                   data:{
                            "_token": "{{ csrf_token() }}",
                            transaction_id:transaction_id, 
                            status:status, 
                            amount:amounts, 
                            currency:currency,
                            package:pid,
                            walletuse:walletuse
                        },
                   success: function(data)
                   {
                            $(".as1").show();
                            $(".as1").text("Subscription updated Successfully.");
                             setTimeout(function(){ $('.as1').hide();
                       location = "{{ route('home') }}";}, 
                       3000);
                       
                   }
                });
                    
                    
                    
                    
                 }else
                 {
                     amount2 = amount2 - wallet;
                     walletuse = wallet;
                      wallet = '0';
                 }
                 $('#amount2').val(amount2);
            }
                var package=$(this).attr('data-id');
                if(package == '1'){
	    	    $.ajax({
                type : 'POST',
                data: {'package':package,"_token":"{{ csrf_token() }}"},
                url: "{{url('user/update_plan')}}",
                success : function(data){
                     $('#timer').html('02:00:00');
                     $(".as1").show();
                            $(".as1").text("Subscription updated Successfully.");
                          setTimeout(function(){ $('.as1').hide();
                       location = "{{ route('home') }}";}, 
                       3000);
                },error: function(data){
                },
                });
                }else if(package == '3'){
                   
                    var paypal=$('#paypal').val();
                    if(paypal == '1')
                    {
                        if(parseInt(amount) > '0')
                        { 
                           $('.dsr2').hide();
                           $('#paypal-button-container2').show(); 
                        }
                     
                    }else
                    {
                    alert('Payment mode not enabled');
                    }
                }else
                {
                var paypal=$('#paypal').val();
                if(paypal == '1')
                { 
                    if(parseInt(amount) > '0')
                        {  
                            $('.dsr').hide();
                            $('#paypal-button-container').show(); 
                        }
                }else
                {
                alert('Payment mode not enabled');
                }
                }
                });
           
            
             package=$('#package').val();
              package2=$('#package2').val();
            paypal.Button.render({
            @if(\App\Options::getoptionmatch3('paypal_mode')=='0')
            env: 'sandbox', // sandbox | production
            @else
            env: 'production',
            @endif
            client: {
            @if(\App\Options::getoptionmatch3('paypal_mode')=='0')
                sandbox: "{{\App\Options::getoptionmatch1('paypal_sandbox')  }}",
              @else
                production: "{{ \App\Options::getoptionmatch1('paypal_live') }}",
              @endif
        },
        style: {
            layout: 'vertical',  // horizontal | vertical
            size:   'responsive',    // medium | large | responsive
            shape:  'rect',      // pill | rect
            color:  'blue'       // gold | blue | silver | black
        },

        // Show the buyer a 'Pay Now' button in the checkout flow
        commit: true,

        // payment() is called when the button is clicked
        payment: function(data, actions) {
            
          
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: amount, currency: 'USD' }
                           
                        }
                    ]
                }
            });
        },

        // onAuthorize() is called when the buyer approves the payment
        onAuthorize: function(data, actions) {

            // Make a call to the REST api to execute the payment
            return actions.payment.execute().then(function(data) {
             window.alert('Payment Complete!');

                var transaction_id = data.transactions[0].related_resources[0].sale.id;
                var status = data.transactions[0].related_resources[0].sale.state;
	            var amount = data.transactions[0].amount["total"];
	            var currency = data.transactions[0].amount["currency"];
                var pid=package;
                $.ajax({
                   type: "POST",
                   url: "{{url('user/update_plan')}}",
                   data:{
                            "_token": "{{ csrf_token() }}",
                            transaction_id:transaction_id, 
                            status:status, 
                            amount:amount, 
                            currency:currency,
                            package:pid,
                            walletuse:walletuse
                        },
                   success: function(data)
                   {
                            $(".as1").show();
                            $(".as1").text("Subscription updated Successfully.");
                             setTimeout(function(){ $('.as1').hide();
                       location = "{{ route('home') }}";}, 
                       3000);
                       
                   }
                });
            });
        },

        onCancel: function (data, actions) {
            $(".dg1").css("display", "block");
            $(".dg1").text("Payment was cancelled.");
            setTimeout( function(){ 
                $(".dg1").css("display", "none");
            }, 3000);
        },

       /* onError: function (err) {
            $(".dg1").css("display", "block");
            $(".dg1").text(err);
            setTimeout( function(){ 
                $(".dg1").css("display", "none");
            }, 3000);
        }*/

    }, '#paypal-button-container');
      paypal.Button.render({
            @if(\App\Options::getoptionmatch3('paypal_mode')=='0')
            env: 'sandbox', // sandbox | production
            @else
            env: 'production',
            @endif
            client: {
            @if(\App\Options::getoptionmatch3('paypal_mode')=='0')
                sandbox: "{{\App\Options::getoptionmatch1('paypal_sandbox')  }}",
              @else
                production: "{{ \App\Options::getoptionmatch1('paypal_live') }}",
              @endif
        },
        style: {
            layout: 'vertical',  // horizontal | vertical
            size:   'responsive',    // medium | large | responsive
            shape:  'rect',      // pill | rect
            color:  'blue'       // gold | blue | silver | black
        },

        // Show the buyer a 'Pay Now' button in the checkout flow
        commit: true,

        // payment() is called when the button is clicked
        payment: function(data, actions) {
            
           
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: amount2, currency: 'USD' }
                           
                        }
                    ]
                }
            });
        },

        // onAuthorize() is called when the buyer approves the payment
        onAuthorize: function(data, actions) {

            // Make a call to the REST api to execute the payment
            return actions.payment.execute().then(function(data) {
             window.alert('Payment Complete!');

                var transaction_id = data.transactions[0].related_resources[0].sale.id;
                var status = data.transactions[0].related_resources[0].sale.state;
	            var amount = data.transactions[0].amount["total"];
	            var currency = data.transactions[0].amount["currency"];
                var pid=package2;
                $.ajax({
                   type: "POST",
                   url: "{{url('user/update_plan')}}",
                   data:{
                            "_token": "{{ csrf_token() }}",
                            transaction_id:transaction_id, 
                            status:status, 
                            amount:amount2, 
                            currency:currency,
                            package:pid,
                            walletuse:walletuse
                        },
                   success: function(data)
                   {
                            $(".as1").show();
                            $(".as1").text("Subscription updated Successfully.");
                             setTimeout(function(){ $('.as1').hide();
                       location = "{{ route('home') }}";}, 
                       3000);
                       
                   }
                });
            });
        },

        onCancel: function (data, actions) {
            $(".dg1").css("display", "block");
            $(".dg1").text("Payment was cancelled.");
            setTimeout( function(){ 
                $(".dg1").css("display", "none");
            }, 3000);
        },

       /* onError: function (err) {
            $(".dg1").css("display", "block");
            $(".dg1").text(err);
            setTimeout( function(){ 
                $(".dg1").css("display", "none");
            }, 3000);
        }*/

    }, '#paypal-button-container2');

</script>
