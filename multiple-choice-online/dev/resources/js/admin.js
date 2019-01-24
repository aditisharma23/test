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

$('.profileupdatebtn').click(function(){
   $('.profileupdate').validate(); 
});

$('.loginscontent').validate({
   rules: {
        lr_title: {
                required: true,
            },   
        rl_title: {
                required: true
            },
       },
       messages: {
       },
       submitHandler: function(form) {
       $('.loginregistercontentbtn').attr('disabled',true);
       $('.loginregistercontentbtn').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
       submitformcontent('loginscontent','loginregistercontentbtn');
          
       }
});

function submitformcontent(form,btn)
{
     var data = new FormData('.'+form);
    data.append('l_side_content', CKEDITOR.instances['editor1'].getData());
    data.append('r_side_content', CKEDITOR.instances['editor2'].getData());
    var other_data = $('.'+form).serializeArray();
    $.each(other_data,function(key,input){
        data.append(input.name,input.value);
    });
   
     var url = $('.'+form).attr('data-next');
        var action = $('.'+form).attr('data-action');
         $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: action,
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                dataType:'json',
                success: function (data) {
                  if(data.erro==202)
                    {
                      $(".dg1").html(data.message);
                       $(".dg1").show();
                       setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                       
                         $('.'+btn).html('Save');   
                    }
                    if(data.erro==101)
                    {
                      
                      $(".as1").html(data.message);
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                           
                             $('.'+btn).html('Save');   
                          
                      
                       if(url!='')
                       {
                        setTimeout(function(){  window.location.href= url; }, 3000);
                         
                       }
                       
                      
                    }
                },
            }); 
}

$('.loginregistercontentbtn').click(function(){
    var messageLength1 = CKEDITOR.instances['editor1'].getData().replace(/<[^>]*>/gi, '').length;
     var messageLength2 = CKEDITOR.instances['editor2'].getData().replace(/<[^>]*>/gi, '').length;
         var x='0';
    if( !messageLength1 ) {
           $('.editor1').show();
           var x='1';
        }else
        {  
           $('.editor1').hide();  
        }
        if( !messageLength2 ) {
           $('.editor2').show();
           var x='1';
        }else
        {
           $('.editor2').hide(); 
        }
        if(x=='1')
        { 
             
            	return false;
        }
        if(x!='1')
        { 
             $('.loginscontent').submit();
        }else
        { 
         return true;
        
            $('.loginscontent').submit();
        }
});

$('.editprofile').validate({
   rules: {
        name: {
                required: true,
            },   
        lname: {
                required: true
            },
            email: {
                required: true,
                email : true
            },
            phone: {
               digits : true,
               minlength:10,
               maxlength:11
            }
       },
       messages: {
          name:{
                required: 'First name is required',
            },
             lname:{
                required: 'Last name is required',
            },
             email: {
                required: 'Email is required',
                email : 'Please enter valid email'
            },
            phone: {
                digits: 'Inavlid phone number'
            }, 
       },
       submitHandler: function(form) {
       $('.editprofilebtn').attr('disabled',true);
       $('.editprofilebtn').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
       submitform('editprofile','editprofilebtn');
          
       }
});

$('.editprofilebtn').click(function(){
    $('.editprofile').validate();
});


$('.editpassword').validate({
   rules: {
        oldpassword: {
                required: true,
            },
        newpassword: {
            required: true,
           minlength: 6,
           maxlength:12, 
        },
        conpassword: {
         required: true,
         minlength: 6,
           maxlength:12,
            equalTo : "#newpassword"
        },
       },
       messages: {
          oldpassword:{
                required: 'Old Password is Required',
            },
             newpassword:{
                required: 'New password is Required',
            },
        conpassword: {
        required: 'Confirm Password is Required',
        equalTo : 'Confirm password must be same as new password'
        }, 
        
       },
       submitHandler: function(form) {
       $('.editpasswordbtn').attr('disabled',true);
       $('.editpasswordbtn').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
       submitform('editpassword','editpasswordbtn');
          
       }
}); 

$('.editpasswordbtn').click(function(){
    $('.editpassword').validate();
});

$('.contactus').validate({
   rules: {
        c_title: {
                required: true,
            },   
        c_email: {
                required: true,
                email: true
            }, 
            c_address: {
                required: true,
            }, 
            c_conno: {
                required: true,
                digits: true,
                 minlength: 10,
                 maxlength:11
            }, 
            c_line2: {
                required: true,
            }, 
       },
       messages: {
          c_title:{
                required: 'Title is Required',
            },
             c_email:{
                required: 'Email is Required',
                email: 'Please enter valid email'
            },
             c_address: {
                 required: 'Address is Required',
            }, 
            c_conno: {
                 required: 'Phone number is Required',
                digits: 'Inavlid phone number'
            }, 
            c_line2: {
              required: 'Contact Info is Required',
            }, 
       },
       submitHandler: function(form) {
       $('.sbtconatct').attr('disabled',true);
       $('.sbtconatct').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
       submitform('contactus','sbtconatct');
          
       }
});

$('.sbtconatct').click(function(){
    $('.contactus').validate();
});

$('.faqs').validate({
   rules: {
        f_title: {
                required: true,
            },   
        f_line2: {
                required: true
            }, 
       },
       messages: {
          f_title:{
                required: 'Title is Required',
            },
             f_line2:{
                required: 'Text for any questions is Required',
            },
       },
       submitHandler: function(form) {
       $('.faqsbtn').attr('disabled',true);
       $('.faqsbtn').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
       submitform('faqs','faqsbtn');
          
       }
});

$('.faqsbtn').click(function(){
    $('.faqs').validate();
});

$('.addfaqs').validate({
   rules: {
        questions: {
                required: true,
            },   
        answer: {
                required: true
            }, 
       },
       messages: {
          questions:{
                required: 'Question is Required',
            },
             answer:{
                required: 'Answer is Required',
            },
       },
       submitHandler: function(form) {
       $('.addfaqsbtn').attr('disabled',true);
       $('.addfaqsbtn').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
       submitform('addfaqs','addfaqsbtn');
          
       }
});
$('.addfaqsbtn').click(function(){
    $('.addfaqs').validate();
});
$('.addfaqs1').validate({
   rules: {
        questions: {
                required: true,
            },   
        answer: {
                required: true
            }, 
       },
       messages: {
          questions:{
                required: 'Question is Required',
            },
             answer:{
                required: 'Answer is Required',
            },
       },
       submitHandler: function(form) {
       $('.addfaqsbtn1').attr('disabled',true);
       $('.addfaqsbtn1').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
       submitform('addfaqs1','addfaqsbtn1');
          
       }
});
$('.addfaqsbtn1').click(function(){
    $('.addfaqs1').validate();
});

$('.addabout').validate({
   rules: {
        a_title: {
                required: true,
            },   
        a_head1: {
                required: true
            },
        a_head2: {
          required: true
        },
        a_content2: {
          required: true
        },
        a_head3: {
          required: true
        },
        a_content3: {
          required: true
        },
        a_head4: {
          required: true
        },
        a_head5: {
          required: true
        },
        a_head6: {
          required: true
        },
        a_head7: {
          required: true
        },
        a_head8: {
          required: true
        },
        a_head9: {
          required: true
        },
        a_head10: {
          required: true
        },
        a_head11: {
          required: true
        },
        a_head12: {
          required: true
        },
       },
       messages: {
       },
       submitHandler: function(form) {
       $('.addaboutbtn').attr('disabled',true);
       $('.addaboutbtn').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
        submitform2('addabout','addaboutbtn');
          
       }
});

$('.editsubcription').validate({
   rules: {
        title: {
                required: true,
            },   
        price: {
                required: true
            },
        month: {
          required: true
        },
        currency: {
          required: true
        },
       
       },
       messages: {
       },
       submitHandler: function(form) {
    var messageLength1 = CKEDITOR.instances['editor1'].getData().replace(/<[^>]*>/gi, '').length;
       
        if( !messageLength1 ) {
           $('.editor1').show();
           var x='1';
        }else
        {  
           $('.editor1').hide();
            $('.editsubcriptionbtn').attr('disabled',true);
            $('.editsubcriptionbtn').html('<i class="fa fa-spinner fa-spin"></i> Processing...');
            
             if(parseInt($('.referrel_amount').val()) > parseInt($('#price').val()))
        {
            $(".dg1").html("Please enter amount less then plan price!");
                $(".dg1").show();  
                setTimeout(function(){ $('.dg1').hide();}, 
            3000);
             $('.editsubcriptionbtn').attr('disabled',false);
            $('.editsubcriptionbtn').html('Save');
            return;
           
        }else
        {
            submitformsubscrip('editsubcription','editsubcriptionbtn');
        }
        }
          
       }
});


$('.editsubcriptionbtn').click(function(){
    
    $('.editsubcription').validate();
});

function submitformsubscrip(form,btn)
{
    // var data = $('.'+form).serialize();
     var data = new FormData('.'+form);
    data.append('description', CKEDITOR.instances['editor1'].getData());
    var other_data = $('.'+form).serializeArray();
    $.each(other_data,function(key,input){
        data.append(input.name,input.value);
    });
     var url = $('.'+form).attr('data-next');
        var action = $('.'+form).attr('data-action');
         $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: action,
                data: data,
                contentType: false,
                cache: false,
                processData:false,
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
                          $('.'+btn).html('Save'); 
                       }else
                       {
                         $('.'+btn).html('Save');   
                       }
                         
                    }
                    if(data.erro==101)
                    {
                      
                      $(".as1").html(data.message);
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                           if(form=='contactus')
                           {
                              $('.'+btn).html('Save'); 
                           }else
                           {
                             $('.'+btn).html('Save');   
                           }
                      
                       if(url!='')
                       {
                        setTimeout(function(){  window.location.href= url; }, 3000);
                         
                       }
                       
                      
                    }
                },
            }); 
}

$('.addaboutbtn').on('click', function(e){
   	
   			e.preventDefault();
   			
   		
    var messageLength1 = CKEDITOR.instances['editor1'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength2 = CKEDITOR.instances['editor2'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength3 = CKEDITOR.instances['editor3'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength4 = CKEDITOR.instances['editor4'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength5 = CKEDITOR.instances['editor5'].getData().replace(/<[^>]*>/gi, '').length;
    //var messageLength6 = CKEDITOR.instances['editor6'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength7 = CKEDITOR.instances['editor7'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength8 = CKEDITOR.instances['editor8'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength9 = CKEDITOR.instances['editor9'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength10 = CKEDITOR.instances['editor10'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength11 = CKEDITOR.instances['editor11'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength12 = CKEDITOR.instances['editor12'].getData().replace(/<[^>]*>/gi, '').length;
    var x='0';
    if( !messageLength1 ) {
           $('.editor1').show();
           var x='1';
        }else
        {  
           $('.editor1').hide();  
        }
        if( !messageLength2 ) {
           $('.editor2').show();
           var x='1';
        }else
        {
           $('.editor2').hide(); 
        }
        if( !messageLength3 ) {
           $('.editor3').show();
           var x='1';
        }else
        {
            $('.editor3').hide();
        }
        if( !messageLength4 ) {
           $('.editor4').show();
           var x='1';
        }else
        {
            $('.editor4').hide();
        }
        if( !messageLength5 ) {
           $('.editor5').show();
           var x='1';
        }else
        {
           $('.editor5').hide(); 
        }
       /* if( !messageLength6 ) {
           $('.editor6').show();
           var x='1';
        }else
        {
           $('.editor6').hide(); 
        } */
        if( !messageLength7 ) {
           $('.editor7').show();
           var x='1';
        }else
        {
             $('.editor7').hide();
        }
        if( !messageLength8 ) {
           $('.editor8').show();
           var x='1';
        }else
        {
             $('.editor8').hide();
        }
        if( !messageLength9 ) {
           $('.editor9').show();
           var x='1';
        }else
        {
          $('.editor9').hide();  
        }
        if( !messageLength10 ) {
           $('.editor10').show();
           var x='1';
        }else
        {
          $('.editor10').hide();  
        }
        if( !messageLength11 ) {
           $('.editor11').show();
           var x='1';
        }else
        {
            $('.editor11').hide();
        }
        if( !messageLength12 ) {
           $('.editor12').show();
           var x='1';
        }else
        {
            $('.editor12').hide();
        }
        if(x=='1')
        { 
             
            	return false;
        }if(x!='1')
        { 
             $('.addabout').submit();
        }else
        { 
         return true;
        
            $('.addabout').submit();
        }
     
});

function submitform2(form,btn)
{
    // var data = $('.'+form).serialize();
     
     var data = new FormData('.'+form);
    data.append('a_content1', CKEDITOR.instances['editor1'].getData());
    data.append('a_content2', CKEDITOR.instances['editor2'].getData());
    data.append('a_content3', CKEDITOR.instances['editor3'].getData());
    data.append('a_content4', CKEDITOR.instances['editor4'].getData());
    data.append('a_content5', CKEDITOR.instances['editor5'].getData());
    //data.append('a_content6', CKEDITOR.instances['editor6'].getData());
    data.append('a_content7', CKEDITOR.instances['editor7'].getData());
    data.append('a_content8', CKEDITOR.instances['editor8'].getData());
    data.append('a_content9', CKEDITOR.instances['editor9'].getData());
    data.append('a_content10', CKEDITOR.instances['editor10'].getData());
    data.append('a_content11', CKEDITOR.instances['editor11'].getData());
    data.append('a_content12', CKEDITOR.instances['editor12'].getData()); 
    var other_data = $('.'+form).serializeArray();
    $.each(other_data,function(key,input){
        data.append(input.name,input.value);
    });
   
     var url = $('.'+form).attr('data-next');
        var action = $('.'+form).attr('data-action');
         $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: action,
                data: data,
                contentType: false,
                cache: false,
                processData:false,
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
                          $('.'+btn).html('Save'); 
                       }else
                       {
                         $('.'+btn).html('Save');   
                       }
                         
                    }
                    if(data.erro==101)
                    {
                      
                      $(".as1").html(data.message);
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                           if(form=='contactus')
                           {
                              $('.'+btn).html('Save'); 
                           }else
                           {
                             $('.'+btn).html('Save');   
                           }
                      
                       if(url!='')
                       {
                        setTimeout(function(){  window.location.href= url; }, 3000);
                         
                       }
                       
                      
                    }
                },
            }); 
}

$('.addhome').validate({
   rules: {
        h_title: {
                required: true,
            },   
        h_head1: {
                required: true
            },
        h_head2: {
          required: true
        },
        h_head3: {
          required: true
        },
        h_head5: {
          required: true
        },
        h_head7: {
          required: true
        },
        h_head8: {
          required: true
        },
       },
       messages: {
       },
       submitHandler: function(form) {
       $('.addhomebtn').attr('disabled',true);
       $('.addhomebtn').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
        submitform3('addhome','addhomebtn');
          
       }
});

$('.addreferral').validate({
   rules: {
        r_title: {
                required: true,
            },   
        r_head1: {
                required: true
            },
        r_head2: {
          required: true
        },
        r_head3: {
          required: true
        },
        r_head5: {
          required: true
        },
       },
       messages: {
       },
       submitHandler: function(form) {
       $('.addreferralbtn').attr('disabled',true);
       $('.addreferralbtn').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
        submitform4('addreferral','addreferralbtn');
          
       }
});
$('.addreferralbtn').on('click', function(e){
   	
   	e.preventDefault();
    var messageLength1 = CKEDITOR.instances['editor1'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength2 = CKEDITOR.instances['editor2'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength3 = CKEDITOR.instances['editor3'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength4 = CKEDITOR.instances['editor4'].getData().replace(/<[^>]*>/gi, '').length;
    var x='0';
    if( !messageLength1 ) {
           $('.editor1').show();
           var x='1';
        }else
        {  
           $('.editor1').hide();  
        }
        if( !messageLength2 ) {
           $('.editor2').show();
           var x='1';
        }else
        {
           $('.editor2').hide(); 
        }
        if( !messageLength3 ) {
           $('.editor3').show();
           var x='1';
        }else
        {
            $('.editor3').hide();
        }
        if( !messageLength4 ) {
           $('.editor4').show();
           var x='1';
        }else
        {
            $('.editor4').hide();
        }
        
        
        if(x=='1')
        { 
             
         return false;
        }
        if(x!='1')
        { 
             $('.addreferral').submit();
        }else
        { 
          return true;
          $('.addreferral').submit();
        }
     
});
function submitform4(form,btn)
{
    // var data = $('.'+form).serialize();
     
     var data = new FormData('.'+form);
    data.append('r_content1', CKEDITOR.instances['editor1'].getData());
    data.append('r_content2', CKEDITOR.instances['editor2'].getData());
    data.append('r_content3', CKEDITOR.instances['editor3'].getData());
    data.append('r_content4', CKEDITOR.instances['editor4'].getData());
    var other_data = $('.'+form).serializeArray();
    $.each(other_data,function(key,input){
        data.append(input.name,input.value);
    });
   
     var url = $('.'+form).attr('data-next');
        var action = $('.'+form).attr('data-action');
         $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: action,
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                dataType:'json',
                success: function (data) {
                  if(data.erro==202)
                    {
                      $(".dg1").html(data.message);
                       $(".dg1").show();
                       setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                       
                         $('.'+btn).html('Save');   
                    }
                    if(data.erro==101)
                    {
                      
                      $(".as1").html(data.message);
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                           
                             $('.'+btn).html('Save');   
                          
                      
                       if(url!='')
                       {
                        setTimeout(function(){  window.location.href= url; }, 3000);
                         
                       }
                       
                      
                    }
                },
            }); 
}


$('.footercontent').validate({
   rules: {
        footer_title: {
                required: true,
            },   
       },
       messages: {
       },
       submitHandler: function(form) {
       $('.footercontentbtn').attr('disabled',true);
       $('.footercontentbtn').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
        footersubmitform('footercontent','footercontentbtn');
          
       }
});


function footersubmitform(form,btn)
{
    // var data = $('.'+form).serialize();
     
     var data = new FormData('.'+form);
    data.append('footer_content', CKEDITOR.instances['editor1'].getData());
    var other_data = $('.'+form).serializeArray();
    $.each(other_data,function(key,input){
        data.append(input.name,input.value);
    });
   
     var url = $('.'+form).attr('data-next');
        var action = $('.'+form).attr('data-action');
         $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: action,
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                dataType:'json',
                success: function (data) {
                  if(data.erro==202)
                    {
                      $(".dg1").html(data.message);
                       $(".dg1").show();
                       setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                       
                         $('.'+btn).html('Save');   
                    }
                    if(data.erro==101)
                    {
                      
                      $(".as1").html(data.message);
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                           
                             $('.'+btn).html('Save');   
                          
                      
                       if(url!='')
                       {
                        setTimeout(function(){  window.location.href= url; }, 3000);
                         
                       }
                       
                      
                    }
                },
            }); 
}

$('.footercontentbtn').on('click', function(e){
    e.preventDefault();
    var messageLength1 = CKEDITOR.instances['editor1'].getData().replace(/<[^>]*>/gi, '').length;
     var x='0';
    if( !messageLength1 ) {
           $('.editor1').show();
           var x='1';
        }else
        {  
           $('.editor1').hide();  
        }
        
        if(x=='1')
        { 
             
         return false;
        }
        if(x!='1')
        { 
             $('.footercontent').submit();
        }else
        { 
          return true;
          $('.footercontent').submit();
        }
});

$('.pricingcontent').validate({
   rules: {
        pricing_title: {
                required: true,
            }, 
        pricing_heading: {
            required: true,
        }, 
       },
       messages: {
       },
       submitHandler: function(form) {
       $('.pricingbtn').attr('disabled',true);
       $('.pricingbtn').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
        pricingsubmitform('pricingcontent','pricingbtn');
          
       }
});


function pricingsubmitform(form,btn)
{
    // var data = $('.'+form).serialize();
     
     var data = new FormData('.'+form);
    data.append('pricing_content', CKEDITOR.instances['editor1'].getData());
    var other_data = $('.'+form).serializeArray();
    $.each(other_data,function(key,input){
        data.append(input.name,input.value);
    });
   
     var url = $('.'+form).attr('data-next');
        var action = $('.'+form).attr('data-action');
         $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: action,
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                dataType:'json',
                success: function (data) {
                  if(data.erro==202)
                    {
                      $(".dg1").html(data.message);
                       $(".dg1").show();
                       setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                       
                         $('.'+btn).html('Save');   
                    }
                    if(data.erro==101)
                    {
                      
                      $(".as1").html(data.message);
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                           
                             $('.'+btn).html('Save');   
                          
                      
                       if(url!='')
                       {
                        setTimeout(function(){  window.location.href= url; }, 3000);
                         
                       }
                       
                      
                    }
                },
            }); 
}
$('.pricingbtn').on('click', function(e){
    e.preventDefault();
    var messageLength1 = CKEDITOR.instances['editor1'].getData().replace(/<[^>]*>/gi, '').length;
     var x='0';
    if( !messageLength1 ) {
           $('.editor1').show();
           var x='1';
        }else
        {  
           $('.editor1').hide();  
        }
        
        if(x=='1')
        { 
             
         return false;
        }
        if(x!='1')
        { 
             $('.pricingcontent').submit();
        }else
        { 
          return true;
          $('.pricingcontent').submit();
        }
});
$('.addhomebtn').on('click', function(e){
   	
   	e.preventDefault();
    var messageLength1 = CKEDITOR.instances['editor1'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength2 = CKEDITOR.instances['editor2'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength3 = CKEDITOR.instances['editor3'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength4 = CKEDITOR.instances['editor4'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength5 = CKEDITOR.instances['editor5'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength7 = CKEDITOR.instances['editor7'].getData().replace(/<[^>]*>/gi, '').length;
    var messageLength8 = CKEDITOR.instances['editor8'].getData().replace(/<[^>]*>/gi, '').length;
    var x='0';
    if( !messageLength1 ) {
           $('.editor1').show();
           var x='1';
        }else
        {  
           $('.editor1').hide();  
        }
        if( !messageLength2 ) {
           $('.editor2').show();
           var x='1';
        }else
        {
           $('.editor2').hide(); 
        }
        if( !messageLength3 ) {
           $('.editor3').show();
           var x='1';
        }else
        {
            $('.editor3').hide();
        }
        if( !messageLength4 ) {
           $('.editor4').show();
           var x='1';
        }else
        {
            $('.editor4').hide();
        }
        if( !messageLength5 ) {
           $('.editor5').show();
           var x='1';
        }else
        {
           $('.editor5').hide(); 
        }
        if( !messageLength7 ) {
           $('.editor7').show();
           var x='1';
        }else
        {
             $('.editor7').hide();
        }
        if( !messageLength8 ) {
           $('.editor8').show();
           var x='1';
        }else
        {
             $('.editor8').hide();
        }
        
        if(x=='1')
        { 
             
         return false;
        }
        if(x!='1')
        { 
             $('.addhome').submit();
        }else
        { 
          return true;
          $('.addhome').submit();
        }
     
});
function submitform3(form,btn)
{
    // var data = $('.'+form).serialize();
     
     var data = new FormData('.'+form);
    data.append('h_content1', CKEDITOR.instances['editor1'].getData());
    data.append('h_content2', CKEDITOR.instances['editor2'].getData());
    data.append('h_content3', CKEDITOR.instances['editor3'].getData());
    data.append('h_content4', CKEDITOR.instances['editor4'].getData());
    data.append('h_content5', CKEDITOR.instances['editor5'].getData());
    data.append('h_content7', CKEDITOR.instances['editor7'].getData());
    data.append('h_content8', CKEDITOR.instances['editor8'].getData());
    var other_data = $('.'+form).serializeArray();
    $.each(other_data,function(key,input){
        data.append(input.name,input.value);
    });
   
     var url = $('.'+form).attr('data-next');
        var action = $('.'+form).attr('data-action');
         $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: action,
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                dataType:'json',
                success: function (data) {
                  if(data.erro==202)
                    {
                      $(".dg1").html(data.message);
                       $(".dg1").show();
                       setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                       
                         $('.'+btn).html('Save');   
                    }
                    if(data.erro==101)
                    {
                      
                      $(".as1").html(data.message);
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide(); }, 5000);
                       $('.'+btn).attr('disabled',false);
                           
                             $('.'+btn).html('Save');   
                          
                      
                       if(url!='')
                       {
                        setTimeout(function(){  window.location.href= url; }, 3000);
                         
                       }
                       
                      
                    }
                },
            }); 
}

 $('.addtestimon').validate({
   rules: {
        title: {
                required: true,
            },   
        name: {
                required: true
            },
        description: {
          required: true
        },
        status: {
          required: true
        },
       },
       messages: {
       },
       submitHandler: function(form) {
       $('.addtestimonbtn').attr('disabled',true);
       $('.addtestimonbtn').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
        submitform('addtestimon','addtestimonbtn');
          
       }
});

$('.addtestimon1').validate({
   rules: {
        title: {
                required: true,
            },   
        name: {
                required: true
            },
        description: {
          required: true
        },
        status: {
          required: true
        },
       },
       messages: {
       },
       submitHandler: function(form) {
       $('.addtestimonbtn1').attr('disabled',true);
       $('.addtestimonbtn1').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
        submitform('addtestimon1','addtestimonbtn1');
          
       }
});

$('.addtestimonbtn1').click(function(){
    $('.addtestimon1').validate();
});
$('.addtestimonbtn').click(function(){
    $('.addtestimon').validate();
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
                        if(form=='editpassword')
                        {
                          $('.'+btn).html('Update Password');   
                        }
                        else
                        {
                         $('.'+btn).html('Save');   
                        }
                       if(form=='contactus')
                       {
                          $('.'+btn).html('Save'); 
                       }
                       if(form=='editprofile')
                       {
                            $('.'+btn).html('Update Profile'); 
                       }
                      
                         
                    }
                    if(data.erro==101)
                    {
                      
                      $(".as1").html(data.message);
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide(); }, 3000);
                       $('.'+btn).attr('disabled',false);
                          if(form=='addfaqs')
                           { 
                             $('.'+form)[0].reset();
                             $('.'+btn).html('Save');   
                           }else
                           {
                               $('.'+btn).html('Save');
                           }
                           if(form=='contactus')
                           {
                              $('.'+btn).html('Save'); 
                           }
                           console.log(form);
                           if(form=='addtestimon')
                           {
                             $('.'+form)[0].reset();
                             var vl = $('#imgFileUpload').attr('data-url');
                             $('#imgFileUpload').attr('src',vl);	

                             $('.'+btn).html('Save');    
                           }
                           if(form=='editpassword')
                           {
                               $('.'+form)[0].reset();
                                $('.'+btn).html('Update Password');  
                           }
                            if(form=='editprofile')
                            {
                             $('.'+btn).html('Update Profile'); 
                            }
                           
                           
                         
                       if(url!='')
                       {
                        setTimeout(function(){  window.location.href= url; }, 3000);
                         
                       }
                       
                      
                    }
                },
            }); 
}