<!DOCTYPE html>
<html lang="en" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link href="{{url('/')}}/resources/css/owl.carousel.css" rel="stylesheet">
    <link href="{{url('/')}}/resources/css/owl.theme.css" rel="stylesheet">
    <link href="{{url('/')}}/resources/css/owl.transitions.css" rel="stylesheet">
    <link href="{{url('/')}}/resources/css/mobiriseicons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/resources/css/materialdesignicons.min.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/resources/css/bootstrap.min.css" />
    <link href="{{url('/')}}/resources/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="{{url('/')}}/resources/css/font-awesome.css">
</head>
<?php 


$options = App\Options::getoption();

 $lr_title='';
 $rl_title=''; 
 $l_side_content='';
 $r_side_content=''; ?>
@if(!empty($options))
 <?php 
 
  foreach($options as $option)
  {
       if($option->coulmn_name == 'lr_title')
      {
         $lr_title= $option->coulmn_value; 
      }
       if($option->coulmn_name == 'rl_title')
      {
         $rl_title= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'l_side_content')
      {
         $l_side_content= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'r_side_content')
      {
         $r_side_content = $option->coulmn_value; 
      }
     
  }
  
 ?>

@endif
<style>
    .error{
        color:red;
    }
    .alert-danger,.alert-success {  position: fixed;
        max-width: 50%;
        width: 100%;
        top: 45%;
        left: 16%;
        margin: auto;
        z-index: 111111;
        box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.15);
        text-align: center;
        right: 0;
      }
</style>
    <body class="signupbgcolor">
	
<section class="signupsection">
            <div class="container">
                <div class="row"><div class="alert alert-danger dg1" style="display:none;"></div>
    <div class="alert alert-success as1" style="display:none;"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
<h2 class="mobile-center text-center"><a href="{{url('/')}}">{{$rl_title}}</a></h2>							
							 <div class="signupinput">
						    <div class="signupsection-in">
						<div class="row">


										<div class="col-lg-4 col-md-5 col-sm-12 paddingleft p-0">
                                   <div class="login-img  imgsignup">
										  <img src="images/home-bg-3.jpg">
										  <div class="login-textab text-center">
										                  <h3 class="logo text_custom">
														   {{$rl_title}}
														</h3>
														<?php echo $r_side_content; ?>

														<ul class="login-home">
														
														<a href="{{url('/')}}" class="btn btn-success"><i class="fa fa-home" aria-hidden="true"></i> Back To Home</a>
														</ul>
														
														</div>

										    </div>
							                 </div>
							              <div class="col-lg-8 col-md-7 col-sm-12 col-12 p-0">
										  <div class="signup-text">
										<h4 class="font-weight-bold text-capitalize features_box_title_top">Sign Up</h4>							 
										<div class="signmrtp features_border_top"></div>
										<p>Please enter your email and password details to access your account.</p>
								 <form  name="signupform" class="signupform" method="post" data-check="{{url('user/checkemail')}}" data-nextaction="{{url('/home')}}" data-action="{{ url('register_package') }}">
                                      @csrf
									  <div class="row">
									      <?php if(!empty(Session()->get('pack_id'))){ ?>
									      <?php  $get=Session()->get('pack_id'); ?>
									      <input type="hidden"  id="pack_id"  value="<?php echo $get ?>" name="package_id">
									      <?php } ?>
										<div class="form-group col-lg-6">
										  <!--input type="text" class="form-control form-control-lg" id="fst" name="firstname" 
										  placeholder="First Name"-->
										  <input id="name" type="text" class="form-control form-control-lg{{ $errors->has('name') ? ' is-invalid' : '' }}"
										  name="name" value="{{ old('name') }}" placeholder="First Name"  autofocus>
										
										 @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
										
										</div>
										<div class="form-group col-lg-6">
										      <input id="lname" type="text" class="form-control form-control-lg{{ $errors->has('lname') ? ' is-invalid' : '' }}"
										      name="lname" value="{{ old('lname') }}" placeholder="Last Name"  autofocus >
										  <!--input type="text" class="form-control form-control-lg" id="lst" name="lastname" placeholder="Last Name"--->
									
									  @if ($errors->has('lname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
									
									
										</div>
										<div class="form-group col-lg-6">
										  
									 <input id="email" type="email" placeholder="Email Address" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  @if(!empty($getdata)) disabled value="{{$getdata[0]->friend_email}}" @else value="{{ old('email') }}" @endif >

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
									
									
										</div>
										<div class="form-group col-lg-6">
							
										   <input id="phone" type="text" placeholder="Phone number" class="form-control form-control-lg{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" >

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
										</div>
										<div class="form-group col-lg-6">
										<?php	$users = DB::table('country')->where('parent','0')->select('name','id')->get();
									
											?>
												  <select class="form-control form-control-lg rounded-0 fontsizeselection" name="country"id="country">
												<option value="">Select Country..</option>
												@foreach($users as $u)
												<option value="{{$u->id}}">{{$u->name}}</option>
												@endforeach
												  </select>
											
										</div>	
										<div class="form-group col-lg-6">
										  <input type="date" class="form-control form-control-lg" id="date" name="dob" >
										</div>											
										<div class="form-group col-lg-6">
										     <input id="password" type="password" 
										     class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							
										</div>
										<div class="form-group col-lg-6">
										    
										<input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation"  placeholder="Confirm Password">    
								
										</div>

										<div class="form-group col-lg-12 mt-3">
                                         <!--a href="#" class="btn signup">Sign Up</a--->
                                  <?php if(!empty(Session()->get('pack_id'))){?>
                                   <input type="hidden" id="package_id" value="{{Session()->get('pack_id')}}">
                                  <input type="hidden" id="paypal" value="{{\App\Options::getoptionmatch1('paypal')}}">
                                  <input type="hidden" id="amount" value="{{\App\Subscription_content::getoptionmatch3(Session()->get('pack_id'))}}">
                                  <input type="hidden" id="paypal_mode" value="{{\App\Options::getoptionmatch1('paypal_mode')}}">
                                  <input type="hidden" id="paypal_sandbox" value="{{\App\Options::getoptionmatch1('paypal_sandbox')}}">
                                  <input type="hidden" id="paypal_live" value="{{\App\Options::getoptionmatch1('paypal_live')}}">
                                   
                                  <input type="hidden" id="reffertoken" @if(!empty($getdata))
                                  @if(!empty($getdata[0]->token)) value="{{$getdata[0]->token}}" @endif @endif>
                                  <input type="hidden" id="referrel_amount" @if(!empty($packagess))
                                  @if(!empty($packagess[0]->referrel_amount)) value="{{$packagess[0]->referrel_amount}}" @endif @endif>
                                  
                                  <div id="paypal-button-container" style="display:none;"></div>
                                <button type="submit"    class="btn signup sbtconatct"  id="signup_btn">
                                  Sign Up
                                </button>
                                <?php }else{ ?>
                                <input type="hidden" id="package_id" value="1">
                             	 <button type="submit"    class="btn signup sbtconatct" >
                                  Sign Up
                                </button>
                                <?php } ?>
                                
										 
										 </div>
										 <h6 class="mt-2 pl-3">Already have an account?<a href="{{url('/login')}}"> Login</a></h6>
                                        </div> 										 
									  </form>	
									  </div>
									  </div>
									  </div>
									  </div>
							 
							 </div> 

                    </div>
                 </div>
              </div>
</section>	
	

	

       <!-- JAVASCRIPTS -->
       <script src="{{url('resources/js/jquery.min.js')}}"></script>
        <script src="{{url('resources/js/popper.min.js')}}"></script>
        <script src="{{url('resources/js/bootstrap.min.js')}}"></script>
        <!--TESTISLIDER JS-->
        <script src="{{url('resources/js/owl.carousel.min.js')}}"></script>
        <script src="{{url('resources/js/masonry.pkgd.min.js')}}"></script>
        <script src="{{url('resources/js/jquery.magnific-popup.min.js')}}"></script>
      
        <script src="{{url('resources/js/jquery.easing.min.js')}}"></script>
        <script src="{{url('resources/js/custom.js')}}"></script>
         <script src="{{url('/')}}/resources/js/jquery.min.js"></script>
       <script src="{{url('/')}}/resources/js/validation.js"></script>
        <script src="{{url('/')}}/resources/js/popper.min.js"></script>
        <script src="{{url('/')}}/resources/js/bootstrap.min.js"></script>
        <!--TESTISLIDER JS-->
        <script src="{{url('/')}}/resources/js/owl.carousel.min.js"></script>
        <script src="{{url('/')}}/resources/js/masonry.pkgd.min.js"></script>
        <script src="{{url('/')}}/resources/js/jquery.magnific-popup.min.js"></script>
      
        <script src="{{url('/')}}/resources/js/jquery.easing.min.js"></script>
        <script src="{{url('/')}}/resources/js/custom.js"></script>
        <script src="{{url('/')}}/resources/js/front.js"></script>
          
    </body>
</html>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
var amount=$('#amount').val();
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
            /*$("form[name='packages']").submit();
            if ( $("form[name='packages']").valid() ){
                alert('valid');
            } else {
                alert('Not valid');
                return;
            }*/

            // Make a call to the REST api to create the payment
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

                var name = $("#name").val();
                var lname = $("#lname").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var phone = $("#phone").val();
                var country = $("#country").val();
                var pid=$('#package_id').val();
                var usertoken = $('#reffertoken').val();
                var referrel_amount = $('#referrel_amount').val();
                 var nurl=$('.signupform').attr('data-nextaction');
               
                $.ajax({
                   type: "POST",
                   url: "{{ url('register_package') }}/"+pid,
                   data:{
                            "_token": "{{ csrf_token() }}",
                            name:name, 
                            lname:lname, 
                            email:email, 
                            phone:phone,
                            password:password, 
                            country:country, 
                            transaction_id:transaction_id, 
                            status:status, 
                            amount:amount, 
                            currency:currency,
                            package_id:pid,
                            usertoken:usertoken,
                            referrel_amount:referrel_amount
                        },
                   success: function(data)
                   {
                
                       // if(data == 1){
                            $(".as1").show();
                            $(".as1").text("Registered Successfully.");
                            setTimeout( function(){ 
                                $(".as1").css("display", "none");

                               
                            }, 3000);
                            
                             setTimeout(function(){  window.location.href= nurl; }, 3000);
                            
                            
                       // }
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

</script>



