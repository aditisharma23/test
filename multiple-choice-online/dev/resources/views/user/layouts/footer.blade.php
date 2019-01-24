 </div>
</div>
</div>
</div>

</div>
</div> <!--======== SCRIPT FILES =========-->
<style>
    .modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    outline: 0;
}
</style>
<!-- tab1 -->
<div class="modal fade alltestsectiomodal" id="myModal1" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <!--div class="modal-header border-0">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div-->
            <div class="modal-body">
                <h3>1.<span> Where did the real Boston Tea Party take place?</span></h3>
                <div class="form-group">

                    <select class="test " multiple="multiple">
                        <optgroup>
                            <option value="1">New york</option>
                            <option value="2">Washington dc</option>
                            <option value="3">Boston</option>
                            <option value="4">Philadelphia</option>

                        </optgroup>

                    </select>
                </div>

                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-Success">Submit</button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade bs-example-modal-md user-delete-btn modal-overlay" tabindex="-1" role="dialog" id="deletek" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header border-0">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Are you sure</h4>
        </div>
        
        <input type="hidden" id="delparam1">
        <input type="hidden" id="delparam2">
        
        <div class="modal-body">
            <i class="mdi mdi-close"></i>
            <div class="alert alert-success as12" style="display:none;"></div>
               @csrf  
                
		    <p>Do you really want to delete these records? This process cannot be undone.</p>
        </div>
        
        <div class="modal-footer">    
            <ul>
    			 <a href="javascript:void(0);" class="btn btn-primary delete_confirm">Delete</a>
    			 <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a>
    			 
    		 </ul>	
        </div>

        </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
 
 <div class="modal fade bs-example-modal-md user-delete-btn" tabindex="-1" role="dialog" id="delte_notification" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header p-0 border-0">
<!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button-->
</div>
<input type="hidden" id="dataids">
<input type="hidden" id="datastatus">
<div class="modal-body text-center">
<i class="mdi mdi-close"></i>
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"><h1>Are you sure</h1>
											  <p class="changetext"></p>
                                             <ul>
											 <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
											 <a href="javascript:void(0);" class="btn btn-danger requestaction2">Submit</a>
											 </ul>											  
                                          
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

    <script src="{{url('/')}}/resources/views/user/js/jquery.min.js"></script>
    <script src="{{url('/')}}/resources/js/validation.js"></script>
    <script src="{{url('/')}}/resources/views/user/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/resources/views/user/js/materialize.min.js"></script>
    <script src="{{url('/')}}/resources/js/user.js"></script>
    <!--script src="{{url('/')}}/resources/views/user/js/custom.js"></script-->
	<script src="{{url('/')}}/resources/views/user/js/jquery.dataTables.min.js"></script>
  <script src="{{url('/')}}/resources/views/user/js/dataTables.bootstrap.min.js"></script>
  	<script src="{{url('/')}}/resources/views/user/js/fSelect.js"></script>
  	<script src="{{url('/')}}/resources/views/user/js/jquery-steps.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
  <script src="{{url('/')}}/resources/js/searchable_selectbox.js"></script>
<script> 
 $(document).ready(function() {
    $('#discount1').DataTable({
         "order": [],
    });
} );
</script>
<script>
(function($) {
$(function() {
$('.test').fSelect();
});
})(jQuery);
</script>

<script>
    var frmInfo = $('#frmInfo');
    var frmInfoValidator = frmInfo.validate();

    var frmLogin = $('#frmLogin');
    var frmLoginValidator = frmLogin.validate();

    var frmMobile = $('#frmMobile');
    var frmMobileValidator = frmMobile.validate();

    $('#demo').steps({
      onChange: function (currentIndex, newIndex, stepDirection) {
        console.log('onChange', currentIndex, newIndex, stepDirection);
        // tab1
        if (currentIndex === 3) {
          if (stepDirection === 'forward') {
            var valid = frmLogin.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmLoginValidator.resetForm();
          }
        }

        // tab2
        if (currentIndex === 1) {
          if (stepDirection === 'forward') {
            var valid = frmInfo.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmInfoValidator.resetForm();
          }
        }

        // tab3
        if (currentIndex === 4) {
          if (stepDirection === 'forward') {
            var valid = frmMobile.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmMobileValidator.resetForm();
          }
        }

        return true;

      },
      onFinish: function () {
        alert('Wizard Completed');
      }
    });
  </script>
	
<script>
(function($) {
    $(function() {
        $('.test').fSelect();
		  });
})(jQuery);	

jQuery(document).ready(function(){
    jQuery("#dis").click(function(){
        jQuery("#dis").hide();
    });
    
});

$('body').on('click', '.deletes', function() {
        $("#delparam1").val( $(this).attr('data-url-param1') );
        $("#delparam2").val( $(this).attr('data-url-param2') );
    });
    
$('body').on('click', '.delete_confirm', function() {
       
        var param1 = $("#delparam1").val();
        var param2 = $("#delparam2").val();
      
        $.ajax({
           type: "POST",
           url: "{{ url('user/delete') }}/"+param1+"/"+param2,
          data : {"_token":"{{ csrf_token() }}"},
           
           success: function(data)
           {
             
               if(data == 1){
                  //$('#deletek').modal('hide');
                  $('button.close').trigger('click');
                 $(".as1").show();
                 $(".as1").text("Record deleted successfully.");
                 
                 $("#tr"+param2).remove();

                 setTimeout( function(){ 
                   
                  $(".as1").css("display", "none");
                 }, 5000);
               }
           }
        });
    });
</script>



	
<script>
(function($) {
    $(function() {
        $('.test').fSelect();
    });
})(jQuery);

$(document).on('click','.openmodels',function(){
        $('#top-menu').not(this).next().removeClass('show');
        $(this).next().toggleClass('show');
    });
    $(document).on('click','.top-user-pro',function(){
        $('.openmodels').not(this).next().removeClass('show');
    });
    
    $('.viewnotifications').click(function(){
    var id = $(this).attr('data-id');
    var urls = $(this).attr('data-url');
   // alert(id+' '+status);
    
    var value ='0';
    var table='notification';
    var column= 'status';
    var url = "{{ url('check-exists-update3') }}"+"/"+table+"/"+id+"/"+column+"/"+value;

      

      $.ajax({
        url: url,
        async: false,
        success: function(data){
          if(data=='1')
          {
              window.location.href=urls;
          }
             
        }
      });

      

});

$('.requestaction2').click(function(){
    $('.requestaction2').attr('disabled',true);
    $('.requestaction2').html('Porcessing...');
    var favorite = [];
    var k=0;
    $.each($("input[name='checkboxeses']:checked"), function(){            
    favorite.push($(this).val());
    k++;
    });
    
    var url = "{{ url('/user/deletenotifications') }}";
      $.ajax({
        headers: {
          'X-CSRF-Token': $('input[name="_token"]').val()
        },
        url: url,
        type: 'post',
        data: {favorite:favorite},
        dataType:'json',
        success: function(data){
         if(data.erro==202)
            {
              $(".dg1").html(data.message);
               $(".dg1").show();
               setTimeout(function(){ $('.alert-danger').hide(); }, 5000);
                $('.requestaction').attr('disabled',false);
                $('.requestaction').html('Submit');
            }
            if(data.erro==101)
            {
                $.each($("input[name='checkboxeses']:checked"), function(){            
                var tr =$(this).val();
                      $('#tr'+tr).remove();
                });
                $('#delte_notification').hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
                $(".as1").html(data.message);
                $(".as1").show();  
                setTimeout(function(){ $('.alert-success').hide(); }, 3000);
                 $('.requestaction').attr('disabled',false);
                 $('.requestaction').html('Submit');
                  setTimeout(function(){ window.location.reload(); }, 3000);
            }
         
        }
});
});
</script>

<script>
/*$(".notifi-btn").click(function(){
  $(".notify-drop").toggleClass("show");
});*/
</script>

<script>
/*$(function(){ 
$('body').click(function(){
if( $(".notify-drop").hasClass("show") ){
      $(".notify-drop").removeClass("show");
      };
    });
});*/
</script>
<script>
$(document).bind("contextmenu",function(e) {
e.preventDefault();
});
$(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
});
</script>

</body>
</html>