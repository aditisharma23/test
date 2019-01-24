$(document).ready(function(){
   setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
   setTimeout(function(){ $('.alert-success').hide(); }, 5000);
});


$('.startreffer').click(function(){
    $('.reffer')[0].reset();
   $(".reffer").validate().resetForm();
});

$('.reffer').validate({
   rules: {
        email: {
                required: true,
                email: true
            }, 
       },
       messages: {
         
             email:{
                required: 'Email is Required',
                email: 'Please enter valid email'
            },
       },
       submitHandler: function(form) {
           $('.checkuser').attr('disabled',true);
           $('.checkuser').html('<i class="fa fa-spinner fa-spin"></i> Processing...');
           submitform('reffer','checkuser');
       }
});

$('.checkuser').click(function(){
    $('.reffer').validate();
});

/*$('.form-control').keyup(function(){
    var form = $( ".signupform" );
   ////alert( "Valid: " + form.valid() );
   if(form.valid() == true)
   {
      var pay =$('#paypal').val();
      if(pay = 1)
      $('#paypal-button-container').show();
      $('#signup_btn').hide();
   }
   
});*/
$('.signupform').validate({
   rules: {
        name: {
                required: true,
            }, 
        lname: {
                required: true,
            }, 
        email: {
                required: true,
                email: true
            }, 
            phone: {
                 required:true,
                        number: true,
                        minlength:10,
						maxlength: 15
            }, 
             password: {
		        required: true,
		        minlength: 6,
				maxlength: 10
		      },
		      password_confirmation: {
		        required: true,
		        equalTo: "#password"
		      }
       },
       messages: {
          name:{
                required: 'First name is required',
            },
             lname: {
                required: 'Last name is required',
            },
             email:{
                required: 'Email address is required',
                email: 'Please enter valid email address'
            },
            phone: {
                 required: 'Phone number is required',
                number: 'Inavlid phone number'
            }, 
            password: {
                 required: 'Password is required',
            }, 
             password_confirmation: {
                 required: 'Confirm password is required',
            }, 
            
       },
       submitHandler: function(form) {
          
var form = $( ".signupform" );
   ////alert( "Valid: " + form.valid() );
   if(form.valid() == true)
   {
       
       
      
                 var pay =$('#package_id').val();
              
                var name = $("#name").val();
                var lname = $("#lname").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var phone = $("#phone").val();
                var country = $("#country").val();
                var pid=$('#package_id').val();
                 var transaction_id="0";
                 var status="completed";
                 var amount='0';
                 var currency='USD';
                 var action = $('.signupform').attr('data-action');
                 var nurl=$('.signupform').attr('data-nextaction');
                var check=$('.signupform').attr('data-check');
                
                if(email != ''){
                $.ajax({
                headers: {
                'X-CSRF-Token': $('input[name="_token"]').val()
                  },
                type: 'post',
                url: check,
                data: {email:email},
                dataType:'json',
                success: function (data) {
                   
                if(data.erro==202)
                {
                    
                    
                    
                if(pay == '1'){
                 $.ajax({
                     headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
                        },
                   type: "POST",
                   url: action+"/"+pid,
                   data:{
                           
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
                            package_id:pid
                        },
                   success: function(data)
                   {
                
                       
                            $(".as1").show();
                            $(".as1").text("Registered Successfully.");
                            setTimeout( function(){ 
                                $(".as1").css("display", "none");
                               
                            }, 3000);
                             setTimeout(function(){  window.location.href= nurl; }, 3000);
                      
                   }
                });    
                }
                else{
                    var paypal=$('#paypal').val();
                    if(paypal == '1'){
                    $('#paypal-button-container').show();
                    $('#signup_btn').hide();  
                    }
                    else
                    {
                    $('#signup_btn').hide();  
                    alert('Payment mode not enabled');
                    }
                    
                    
                }
                    }
                    if(data.erro==101)
                    {
                        $(".dg1").show();
                        $(".dg1").text("Email already exist.");
                       setTimeout(function(){ $('.dg1').hide(); }, 5000);
                      // $('.'+btn).attr('disabled',false);
                      return;  
                 }
                },
            }); 
        
      }
      }
      
}

});





$('.contactus').validate({
   rules: {
        name: {
                required: true,
            },   
        email: {
                required: true,
                email: true
            }, 
            subject: {
                required: true,
            }, 
            phone: {
                required: true,
                digits: true,
                 minlength: 10,
                 maxlength:11
            }, 
            message: {
                required: true,
            }, 
       },
       messages: {
          name:{
                required: 'Name is Required',
            },
             email:{
                required: 'Email is Required',
                email: 'Please enter valid email'
            },
             subject: {
                 required: 'Subject is Required',
            }, 
            phone: {
                 required: 'Phone number is Required',
                digits: 'Inavlid phone number'
            }, 
            message: {
              required: 'Message is Required',
            }, 
       },
       submitHandler: function(form) {
       $('.sbtconatct').attr('disabled',true);
       $('.sbtconatct').html('<i class="fa fa-spinner fa-spin"></i> Processing...');
       submitform('contactus','sbtconatct');
          
       }
});



$('.sbtconatct').click(function(){
    $('.contactus').validate();
});

$('.contactus2').validate({
   rules: {
        name: {
                required: true,
            },   
        email: {
                required: true,
                email: true
            }, 
            subject: {
                required: true,
            }, 
            phone: {
                required: true,
                digits: true,
                 minlength: 10,
                 maxlength:11
            }, 
            message: {
                required: true,
            }, 
       },
       messages: {
          name:{
                required: 'Name is Required',
            },
             email:{
                required: 'Email is Required',
                email: 'Please enter valid email'
            },
             subject: {
                 required: 'Subject is Required',
            }, 
            phone: {
                 required: 'Phone number is Required',
                digits: 'Inavlid phone number'
            }, 
            message: {
              required: 'Message is Required',
            }, 
       },
       submitHandler: function(form) {
       $('.sbtconatct2').attr('disabled',true);
       $('.sbtconatct2').html('<i class="fa fa-spinner fa-spin"></i> Processing...');
       submitform('contactus2','sbtconatct2');
          
       }
});

$('.sbtconatct2').click(function(){
    $('.contactus2').validate();
});

$('.subscribe').validate({
   rules: {
        email: {
                required: true,
                email: true
            }, 
       },
       messages: {
         
             email:{
                required: 'Email is Required',
                email: 'Please enter valid email'
            },
       },
       submitHandler: function(form) {
       $('.subscribes').attr('disabled',true);
       $('.subscribes').html('<i class="fa fa-spinner fa-spin"></i> Processing...');
       submitform('subscribe','subscribes');
          
       }
});

$('.subscribes').click(function(){
    $('.subscribe').validate();
});

function submitform(form,btn)
{
     var data = $('.'+form).serialize();
     var url = $('.'+form).attr('data-next');
        var action = $('.'+form).attr('data-action');
         $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: action,
                data: data,
                dataType:'json',
                success: function (data) {
                  if(data.erro==202)
                    {
                      $(".dg1").html(data.message);
                       $(".dg1").show();
                       setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                       if(form=='contactus')
                       {
                          $('.'+btn).html('Submit Now'); 
                       }else if(form=='subscribe')
                       {
                          $('.'+btn).html('Subcribe');   
                       }else if(form=='contactus2')
                       {
                          $('.'+btn).html('SEND MESSAGE');   
                       }else if(form=='reffer')
                       {
                         $('.'+btn).html('SUBMIT');     
                       }
                       else
                       {
                         $('.'+btn).html('Submit');   
                       }
                         
                    }
                    if(data.erro==101)
                    {
                      $('.'+form)[0].reset();
                      $(".as1").html(data.message);
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                           if(form=='contactus')
                           {
                              $('.'+btn).html('Submit Now'); 
                           }
                           else if(form=='subscribe')
                           {
                              $('.'+btn).html('Subcribe');   
                           }else if(form=='contactus2')
                           {
                              $('.'+btn).html('SEND MESSAGE');   
                           }
                            else if(form=='reffer')
                            {
                                $('#myModalsreffer').modal('hide');

                             //$('#myModalsreffer').hide();
                             $('body').removeClass('modal-open');
                             $('.modal-backdrop').remove();
                             $('.'+btn).html('SUBMIT');     
                            }
                           else
                           {
                             $('.'+btn).html('Submit');   
                           }
                      
                       if(url!='')
                       {
                        setTimeout(function(){  window.location.href= url; }, 3000);
                         
                       }
                       
                      
                    }
                },
            }); 
}