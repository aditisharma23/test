@include('admin/layouts.app2')
 <style>
             [type="radio"]:disabled:checked + label:after
             {
             background-color: #26a69a !important;
             }
            .js-example-basic-single{
                width: 100%;
            } 
             </style>
             <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  float:left;
}
.switch input {     
  opacity: 0;
  width: 0;
  height: 0;
}
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}
.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 16px 16px 16px 16px;
}
input:checked + .slider {
  background-color: #2196F3;
}
input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}
input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}
.slider.round:before {
  border-radius: 50%;
}
span.slider {
    border-radius: 16px 16px 16px 16px;
}
</style>

 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid ">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
 
                    <div class="col-md-12 ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Testimonials</li>
                        </ol>
                        <a href="{{url('admin/add_testimonial')}}" class="btn btn-info btn-rounded float-right btn-sm m-0"><i class="mdi mdi-plus"></i> Add Testimonial</a>
                    </div>
                    <!-- <div class=""> -->
                        <!-- <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
                    <!-- </div> -->
                </div>

               
                <!-- ============================================================== -->
                <!-- Projects of the month -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                           <h4 class="card-title"><span class="lstick"></span>List of Testimonials</h4></div>
                           
                                </div>
                                <div id="product_container">
                                    
                                @include('admin.testimonial2')
                                </div>
               
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
           

         

@include('admin/layouts.footer')
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
            
            $("#product_container").empty().html(data);
            location.hash = page;
            jQuery(".checkb").click(function(){
   var id = $(this).attr('data-id');
   var uid ='0';
        if(this.checked == true)
        {
            var value = '1';
        }else
        {
             var value ='0';
        }
        var table='testimonials';
        var column= 'status';
      var url = "{{ url('check-exists-update2') }}"+"/"+table+"/"+id+"/"+column+"/"+value+"/"+uid;

      

      $.ajax({
        url: url,
        async: false,
        success: function(data){
          //if(data.trim()) exists = true;
          if(data=='1')
          {
              if(value=='1')
              {
                $(".as1").html('Testimonials activated successfully!!');
                $(".as1").show();  
                setTimeout(function(){  $(".as1").hide(); }, 3000);
              }else
              {
                $(".as1").html('Testimonials deactivated successfully!!');
                $(".as1").show();  
                setTimeout(function(){  $(".as1").hide(); }, 3000);
              }
          }else
          {
            $(".dg1").html('Error to update user status!');
             $(".dg1").show();  
             setTimeout(function(){  $(".dg1").hide();; }, 3000);
          }
             
        }
      });

      
});
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
              alert('No response from server');
        });
}
  </script>
<script>
      jQuery(".checkb").click(function(){
   var id = $(this).attr('data-id');
   var uid ='0';
        if(this.checked == true)
        {
            var value = '1';
        }else
        {
             var value ='0';
        }
        var table='testimonials';
        var column= 'status';
      var url = "{{ url('check-exists-update2') }}"+"/"+table+"/"+id+"/"+column+"/"+value+"/"+uid;

      

      $.ajax({
        url: url,
        async: false,
        success: function(data){
          //if(data.trim()) exists = true;
          if(data=='1')
          {
              if(value=='1')
              {
                $(".as1").html('Testimonials activated successfully!!');
                $(".as1").show();  
                setTimeout(function(){  $(".as1").hide(); }, 3000);
              }else
              {
                $(".as1").html('Testimonials deactivated successfully!!');
                $(".as1").show();  
                setTimeout(function(){  $(".as1").hide(); }, 3000);
              }
          }else
          {
            $(".dg1").html('Error to update user status!');
             $(".dg1").show();  
             setTimeout(function(){  $(".dg1").hide();; }, 3000);
          }
             
        }
      });

      
});
 
</script>
