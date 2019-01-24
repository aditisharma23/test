@include('layouts.header')

<?php $f_title=''; $f_line2=''; $c_conno=''; $c_email=''; $c_address=''; $f_image=''; ?>
@if(!empty($options))
 <?php 
 
  foreach($options as $option)
  {
       if($option->coulmn_name == 'f_image')
      {
         $f_image= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'f_title')
      {
         $f_title= $option->coulmn_value; 
      }
      if($option->coulmn_name == 'f_line2')
      {
         $f_line2= $option->coulmn_value; 
      }
      
      
  }
  
 ?>

@endif
		
    <div class="contactslider slider-area" style="background-image: url({{url('public/pages/'.$f_image)}});">
        <div class="page-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(img/bg/others_bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">@if(!empty($f_title)){{$f_title}}@endif</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/faq')}}" style="color:white">@if(!empty($f_title)){{$f_title}}@endif</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>		

<section class="faq-mainsection what-we-do sp-two">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
						<div class="faqcollapse">
									  			
						 @include('presult')
						
						
						</div>

						            </div>
									
					<div class="col-lg-4">				
							<div class="faqrighttext text-center">
							
							<h2>Any Question ?</h2>
							<a href="#">
							<i class="fa fa-question" aria-hidden="true"></i>
							</a>
							<p>@if(!empty($f_line2)){{$f_line2}}@endif</p>
							</div>
					</div>				
									
									
        </div>
    </div>	
</section>		

	
      @extends('layouts.footer')
      
      <script>
 $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                getData(page);
            }
        }
    });
$(document).ready(function()
{
     $(document).on('click', '.pagination a',function(event)
    {
        $('li').removeClass('active');
        $(this).parent('li').addClass('active');
        event.preventDefault();
        var myurl = $(this).attr('href');
       var page=$(this).attr('href').split('page=')[1];
       getData(page);
    });
});
function getData(page){
        $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            datatype: "html",
            // beforeSend: function()
            // {
            //     you can show your loader 
            // }
        })
        .done(function(data)
        {
            console.log(data);
            
            $("#faqcollapse").empty().html(data);
            location.hash = page;
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
              alert('No response from server');
        });
}
  </script>
      