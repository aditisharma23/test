@include('user/layouts.app2')
 <style>
[type="checkbox"]:not(:checked), [type="checkbox"]:checked {
 position: absolute; 
 left: 34px; 
 opacity: 5; 
}
         </style>
<div class="sb2-2">
            <!--== breadcrumbs ==-->
            <div class="sb2-2-2">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="javascript:void(0);"> Questions List</a>
                    </li>

                </ul>
            </div>
    

            <!--== User Details ==-->
            <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title margin-bottom-box">
                                <h4>Recent Test</h4>

                            </div>
                            <div class="del-all-check">
                                <input type="checkbox" id="selectAllDomainList"> <button type="button" class="btn btn-info btn-rounded  btn-sm m-0 deletes user-delete" >Delete All</button>
                            </div>
                            
                                <div class="box-inn-sp margin-top-box notify-table" id="product_container">
                            
                                 
                                @include('user/notification2')
                                </div>
                                
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>


<input type="hidden" name="modalsss" class="modalsss" data-toggle="modal" data-target="#delte_notification">



@include('user/layouts.footer')
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
      $('.modalsss').trigger('click');
 
}else
{
    $('.dg1').html('Please Select the notification which you want to delete');
    $('.dg1').show();
     setTimeout(function(){ $('.dg1').hide(); }, 3000);
}
});
</script>
<style>
.btn.btn-info.btn-rounded.btn-sm.m-0.deletes.user-delete {

    display: inline-block;
    margin-left: 75px;
    background: #33d085 !important;
    border-color: #33d085 !important;
    padding: 4px 12px !important;
    border-radius: 43px !important;
    font-size: 14px !important;
    margin-top: 5px;
}
    </style>
</style>