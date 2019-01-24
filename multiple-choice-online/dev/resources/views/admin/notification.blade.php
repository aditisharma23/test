
         @include('admin/layouts.app2')
         @csrf
         <style>
[type="checkbox"]:not(:checked), [type="checkbox"]:checked {
 position: absolute; 
 left: 34px; 
 opacity: 5; 
}
         </style>
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
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
                            <li class="breadcrumb-item active">Notifications</li>
                        </ol>
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
                            <div class="card-body userdatabtn-color">
                                
                                <div class="d-flex no-block">
                                    <div>
                                        <h4 class="card-title"><span class="lstick"></span>Notifications</h4>
                                    </div>
                                </div>
                                <input type="checkbox" id="selectAllDomainList"> <button type="button" class="btn btn-info btn-rounded  btn-sm m-0 deletes" >Delete All</button>
                                <div class="box-inn-sp" id="product_container">
                                @include('admin/notification2')
                                </div>
                                <!--<div class="table-responsive">
                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                            <tr>
											    <th colspan="5">Notifications</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <td colspan="5">
                                                 </td>
                                            </tr>
                                         
                                            <tr>
                                                <td colspan="5">No notifications found.. !</td>
                                                </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>-->
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
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
              alert('No response from server');
        });
}

/*$('#selectAllDomainList').click(function() {
  var checkedStatus = this.checked;
  $('#product_container tbody tr').find('td:first :checkbox').each(function() {
    $(this).prop('checked', checkedStatus);
  });
});*/

$(document).ready(function() {
  $("#selectAllDomainList").change(function(){
    if(this.checked){
      $(".checkboxes").each(function(){
        this.checked=true;
      })              
    }else{
      $(".checkboxes").each(function(){
        this.checked=false;
      })              
    }
  });

  $(".checkboxes").click(function () {
    if ($(this).is(":checked")){
      var isAllChecked = 0;
      $(".checkboxes").each(function(){
        if(!this.checked)
           isAllChecked = 1;
      })              
      if(isAllChecked == 0){ $("#selectAllDomainList").prop("checked", true); }     
    }else {
      $("#selectAllDomainList").prop("checked", false);
    }
  });
});

$('.deletes').click(function(){

var favorite = [];
var k=0;
$.each($("input[name='checkboxeses']:checked"), function(){            
    favorite.push($(this).val());
    k++;
});

if(k != 0)
{
    if(k > 1)
      {
         $('.changetext').text('Do you really want to delete these notifications?');
      }
      if(k == 1)
      {
         $('.changetext').text('Do you really want to delete this notification?');
      }
    $('#delte_notification').modal('show');
}else
{
    $('.dg1').html('Please Select the notification which you want to delete');
    $('.dg1').show();
     setTimeout(function(){ $('.dg1').hide(); }, 3000);
}
});

  </script>