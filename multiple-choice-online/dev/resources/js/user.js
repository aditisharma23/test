$(document).ready(function(){
   setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
   setTimeout(function(){ $('.alert-success').hide(); }, 5000);
});

$('.applyamount').click(function(){
    $('.amountss').hide();
    $('.applyamountform')[0].reset();
   $(".applyamountform").validate().resetForm();
});

$('.applyamountform').validate({
   rules: {
        amount: {
            required: true,
                digits: true,
            }, 
        
       
       },
       messages: {
            amount: {
                digits: 'Inavlid amount',
            }, 
       },
       submitHandler: function(form) {
       $('.submitapply').attr('disabled',true);
       $('.submitapply').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
       submitform('applyamountform','submitapply');
          
       }
});

$('.submitapply').click(function(){
  $('.applyamountform').validate();
});

$('.profileupdate').validate({
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
                digits: true,
                 minlength: 10,
                 maxlength:11
            }, 
        newpassword: {
           minlength: 6,
           maxlength:12, 
        },
        conpassword: {
         minlength: 6,
           maxlength:12,
            equalTo : "#newpassword"
        },
       },
       messages: {
          name:{
                required: 'Name is Required',
            },
             lname:{
                required: 'Last Name is Required',
            },
             email:{
                required: 'Email is Required',
                email: 'Please enter valid email'
            },
            phone: {
                digits: 'Inavlid phone number'
            }, 
       },
       submitHandler: function(form) {
       $('.profileupdatebtn').attr('disabled',true);
       $('.profileupdatebtn').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
       submitform('profileupdate','profileupdatebtn');
          
       }
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
                       }
                       else
                       {
                         $('.'+btn).html('Submit');   
                       }
                         
                    }
                    if(data.erro==101)
                    {
                        if(form =='applyamountform')
                        {
                            $('#myModalapply').hide();
                            $('body').removeClass('modal-open');
                            $('.modal-backdrop').remove();
                            $(".as1").html(data.message);
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide(); }, 5000);
                       setTimeout(function(){ window.location.reload(); }, 1000);
                             window.location.reload();
                        }
                        if(form !='profileupdate')
                        {
                            $('.'+form)[0].reset();
                        }
                        
                      
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
                           }else
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