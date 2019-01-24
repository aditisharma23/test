
<script>
$(document).ready(function(){
setTimeout(function(){ $('.alert-success').hide(); }, 5000); 
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
    $(function() {
        $('#myTable').DataTable({
            "order": []
        });
         $('#myTable1').DataTable({
             "order": []
         });
         $('#myTable2').DataTable({
             "order": []
         });
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
               /* "order": [
                    [2, 'asc']
                ],*/
                "order": [],
               // "ordering": false,
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            

            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
         $('body').on('click', '.delete_request', function() {
        $("#param1").val( $(this).attr('data-url-param1') );
        $("#param2").val( $(this).attr('data-url-param2') );
    });
     $('body').on('click', '.delete_request1', function() {
        $("#param11").val( $(this).attr('data-url-param1') );
        $("#param22").val( $(this).attr('data-url-param2') );
    });
    $('body').on('click', '.delete_request111', function() {
        $("#param111").val( $(this).attr('data-url-param1') );
        $("#param222").val( $(this).attr('data-url-param2') );
    });
    $('body').on('click', '.delete_request112', function() {
        $("#param112").val( $(this).attr('data-url-param1') );
        $("#param223").val( $(this).attr('data-url-param2') );
    });
    
    
    
    
     $('body').on('click', '.deletes', function() {
        $("#delparam1").val( $(this).attr('data-url-param1') );
        $("#delparam2").val( $(this).attr('data-url-param2') );
    });
    
     $('body').on('click', '#Option11', function() {
           $('#Optionaa').addClass("correctans");
           $('#Optionbb').removeClass("correctans");
           $('#Optioncc').removeClass("correctans");
           $('#Optiondd').removeClass("correctans");
    });
      $('body').on('click', '#Option22', function() {
           $('#Optionaa').removeClass("correctans");
           $('#Optionbb').addClass("correctans");
           $('#Optioncc').removeClass("correctans");
           $('#Optiondd').removeClass("correctans");
    });
      $('body').on('click', '#Option33', function() {
           $('#Optionaa').removeClass("correctans");
           $('#Optionbb').removeClass("correctans");
           $('#Optioncc').addClass("correctans");
           $('#Optiondd').removeClass("correctans");
    });
      $('body').on('click', '#Option44', function() {
           $('#Optionaa').removeClass("correctans");
           $('#Optionbb').removeClass("correctans");
           $('#Optioncc').removeClass("correctans");
           $('#Optiondd').addClass("correctans");
    });
    
    
    
    
    
    
    
    
    
     $('body').on('click', '.deleteses', function() {
        $("#delparamsubs1").val( $(this).attr('data-url-param1') );
        $("#delparamsubs2").val( $(this).attr('data-url-param2') );
    });
     
     $('.editquestion').click(function(){
         var id=$(this).attr('data-id');
         var testid=$(this).attr('data-testid');
        ///// alert(id);
        var url="{{ url('admin/editquestion') }}/"+id+'/'+testid;
         $('#edit').modal('show').find('.modal-body').load(url); 
          
         
     });
$('.viewquestion').click(function()
{
var id=$(this).attr('data-id');
var testid=$(this).attr('data-testid');
var url="{{ url('admin/getdeta') }}/"+id+'/'+testid;
$('#viewquestionpop').modal('show').find('.modal-body').load(url); 
});
   $('body').on('change','.cat_country',function() {
        
       var id=$(this).val();
        $.ajax({
           type: "POST",
           url: "{{ url('admin/substate') }}/"+id,
          data : {"_token":"{{ csrf_token() }}"},
           
           success: function(data)
           {
              $('.state_country').html(data);
              
           }
        });
        
    });
        
     $('body').on('change','.subcat',function() {
       var id=$(this).val();
        $.ajax({
           type: "POST",
           url: "{{ url('admin/subchapter') }}/"+id,
          data : {"_token":"{{ csrf_token() }}"},
           
           success: function(data)
           {
              $('.subchapter').html(data);
              
           }
        });
        
    });   
         
         
         
    $('body').on('change','.category',function() {
        
       var id=$(this).val();
        $.ajax({
           type: "POST",
           url: "{{ url('admin/subcat') }}/"+id,
          data : {"_token":"{{ csrf_token() }}"},
           
           success: function(data)
           {
              $('.subcat').html(data);
              
           }
        });
        
    });
    
    
    
     $('body').on('click', '.delete_confirmed11', function() {
      
        var param1 = $("#param11").val();
        var param2 = $("#param22").val();
        
        $.ajax({
           type: "POST",
           url: "{{ url('admin/delete1') }}/"+param1+"/"+param2,
          data : {"_token":"{{ csrf_token() }}"},
           
           success: function(data)
           {
             
               if(data == 1){
                   
                     $(".dg1").html("Record deleted successfully !");
                       $(".dg1").show();  
                       setTimeout(function(){ $('.alert-danger').hide();
                      }, 
                       3000);
                       $("#remove-"+param2).remove();
                 if(param1=='users' || param1=='pre_questiondetails' || param1=='question_answers')
                 {
                 setTimeout(function(){ window.location.reload();
                      }, 3000);  
                 }
                 $('#delete_que').modal('hide');
              
                 
                  $('#myTable').destroy();
                 $('#myTable').DataTable({
                     "ordering": false
                 });
               }
           }
        });
    });
    
    $('body').on('click', '.delete_confirmed', function() {
        $('.delete_confirmed').attr('disabled',true);
        $('.delete_confirmed').html('Processing......');
        var param1 = $("#param1").val();
        var param2 = $("#param2").val();
        $.ajax({
          type: "POST",
          url: "{{ url('admin/delete') }}/"+param1+"/"+param2,
          data : {"_token":"{{ csrf_token() }}"},
          success: function(data)
           {
               $('.delete_confirmed').attr('disabled',false);
                $('.delete_confirmed').html('Delete');
                $('#delete_country').modal('hide');
                $(".dg1").html("Record deleted successfully !");
                $(".dg1").show();  
                $("#remove-"+param2).remove();
                $('#myTable1').DataTable().destroy();
                $('#myTable').DataTable().destroy();
                $('#htmlss').html(data);
                $('#myTable1').DataTable({
                    "ordering": false
                });
                $('#myTable').DataTable({
                    "ordering": false
                });
                setTimeout(function(){ $('.dg1').hide();}, 
            3000);
             setTimeout(function(){ window.location.reload();}, 
            3000);
           }
        });
    });
    
    
    
     $('body').on('click', '.delete_confirmed111', function() {
        $('.delete_confirmed111').attr('disabled',true);
        $('.delete_confirmed111').html('Processing......');
        var param1 = $("#param111").val();
        var param2 = $("#param222").val();
        $.ajax({
          type: "POST",
          url: "{{ url('admin/delete111') }}/"+param1+"/"+param2,
          data : {"_token":"{{ csrf_token() }}"},
          success: function(data)
           {
               $('.delete_confirmed111').attr('disabled',false);
                $('.delete_confirmed111').html('Delete');
                $('#delete_country111').modal('hide');
                $(".dg1").html("Record deleted successfully !");
                $(".dg1").show();  
                $("#remove-"+param2).remove();
                $('#myTable1').DataTable().destroy();
                $('#myTable').DataTable().destroy();
                $('#htmlss').html(data);
                $('#myTable1').DataTable({
                    "ordering": false
                });
                $('#myTable').DataTable({
                    "ordering": false
                });
                setTimeout(function(){ $('.dg1').hide();}, 
            3000);
             setTimeout(function(){ window.location.reload();}, 
            3000);
           }
        });
    });
    
    
      $('body').on('click', '.delete_confirmed112', function() {
        $('.delete_confirmed112').attr('disabled',true);
        $('.delete_confirmed112').html('Processing......');
        var param1 = $("#param112").val();
        var param2 = $("#param223").val();
        $.ajax({
          type: "POST",
          url: "{{ url('admin/delete112') }}/"+param1+"/"+param2,
          data : {"_token":"{{ csrf_token() }}"},
          success: function(data)
           {
               $('.delete_confirmed112').attr('disabled',false);
                $('.delete_confirmed112').html('Delete');
                $('#delete_country112').modal('hide');
                $(".dg1").html("Record deleted successfully !");
                $(".dg1").show();  
                $("#remove-"+param2).remove();
                $('#myTable1').DataTable().destroy();
                $('#htmlss').html(data);
                $('#myTable1').DataTable({
                    "ordering": false
                });
                setTimeout(function(){ $('.dg1').hide();}, 
            3000);
           }
        });
    });
    
    
     $('body').on('keyup', '.referrel_amount', function() {
        if(parseInt($(this).val()) > parseInt($('#price').val()))
        {
            $(".dg1").html("Please enter amount less then plan price!");
                $(".dg1").show();  
                setTimeout(function(){ $('.dg1').hide();}, 
            3000);
           
        }
     });
    $('body').on('click', '.delete_confirm', function() {
       
        var param1 = $("#delparam1").val();
        var param2 = $("#delparam2").val();
      
        $.ajax({
           type: "POST",
           url: "{{ url('admin/delete') }}/"+param1+"/"+param2,
          data : {"_token":"{{ csrf_token() }}"},
           
           success: function(data)
           {
             
               if(data == 1){
                  $('#deletek').modal('hide');
                 $(".as1").show();
                 $(".as1").text("Record deleted successfully.");
                 
                 $("#tr"+param2).remove();
                 $('#myTable').destroy();
                 $('#myTable').DataTable({
                     "ordering": false
                 });
                 setTimeout( function(){ 
                   
                  $(".as1").css("display", "none");
                 }, 5000);
               }
           }
        });
    });
    
    $('body').on('click', '.delete_confirmsubecribe', function() {
       
        var param1 = $("#delparamsubs1").val();
        var param2 = $("#delparamsubs2").val();
      
        $.ajax({
           type: "POST",
           url: "{{ url('admin/deletesusbscribe') }}/"+param1+"/"+param2,
          data : {"_token":"{{ csrf_token() }}"},
           
           success: function(data)
           {
             
             
                  $('#deleteked').modal('hide');
                 $(".as1").show();
                 $(".as1").text("Record deleted successfully.");
                 
                 $("#tr"+param2).remove();
                 //$('#myTable').destroy();
                 //$('#myTable').DataTable();
                
                    $('#myTables').DataTable().destroy();
                      $('#htmlss').html(data);
                  
                    
                    $('#myTables').dataTable({
                        "ordering": false
                    });
                 setTimeout( function(){ 
                   
                  $(".as1").css("display", "none");
                 }, 5000);
                 setTimeout( function(){ 
                   
                 window.location.reload();
                 }, 3000);
               }
           
        });
    });
      $(function() {
        $(document).ready(function() {
            
             $("form[name='addquestion1']").validate({
		      rules: {
		      question: "required",
		      country: "required",
		      course: "required",
		      year: "required",
		      optiona: "required",
		       optionb: "required",
		        optionc: "required",
		         optiond: "required",
		          answer: "required",
		         },
		      submitHandler: function(form) {
		       $('.sbtconatct').attr('disabled',true);
                $('.sbtconatct').html('<i class="fa fa-spinner fa-spin"></i> Processing...');   
		      var id = $("#id").val();
		    
				    var formData = new FormData(form);
				     $.ajax({
			            type:'POST',
			            url: "{{ route('admin.add_question') }}",
			            data:formData,
			            cache:false,
			            contentType: false,
			            processData: false,
			            success:function(data){
$('.sbtconatct').attr('disabled',false);
$('.sbtconatct').html('Save');
if(data == 1){
				           
				     $(".as1").html("Saved successfully...!");
                       $(".as1").show();  
                       $('#myModal').modal('hide');
                       setTimeout(function(){ $('.alert-success').hide();
                       location = "{{ route('admin.questions') }}";}, 
                       5000);
				          
				           	 
				           	
				           	
				          }
			            }
			        });
			
		
				}
		    
		     });
             $("form[name='addquestion']").validate({
		      rules: {
		      question: "required",
		      country: "required",
		      course: "required",
		      year: "required",
		      optiona: "required",
		       optionb: "required",
		        optionc: "required",
		         optiond: "required",
		          answer: "required",
		         },
		      submitHandler: function(form) {
		      var id = $("#id").val();
		    
				    var formData = new FormData(form);
				     $.ajax({
			            type:'POST',
			            url: "{{ route('admin.add_question') }}",
			            data:formData,
			            cache:false,
			            contentType: false,
			            processData: false,
			            success:function(data){
			               // alert(data);
							//$('.proccessload').html('Submit');
						  if(data == 1){
				           
				            $(".as1").html("Saved successfully...!");
                       $(".as1").show();  
                       $('#myModal').modal('hide');
                       setTimeout(function(){ $('.alert-success').hide();
                       location = "{{ route('admin.questions') }}";}, 
                       5000);
				          }
			            }
			        });
			
		
				}
		    
		     });
            
            
            
            
           $("form[name='addcountry']").validate({
		      rules: {
		      name: "required",
		         },
		      submitHandler: function(form) {
		           $('.sbtconatct').attr('disabled',true);
                     $('.sbtconatct').html('<i class="fa fa-spinner fa-spin"></i> Processing...');
		      var countryname = $("#c_name").val();
		      var id = $("#id").val();
		     if(id==''){
		      var exists = check_exists('country', 'name', countryname);
		      }
		      else{
		      var id = $("#id").val();
		      var exists = check_exists_update('country',id, 'name',countryname);  
		      }
		    
		      if (exists) {
					$("#emailErr").show();
					setTimeout( function(){ 
		           	 	$("#emailErr").css("display", "none");
		           	}, 3000);
		           	 $('.sbtconatct').attr('disabled',false);
                     $('.sbtconatct').html('Save');
		           	return;
				} else {
				    var formData = new FormData(form);
				     $.ajax({
			            type:'POST',
			            url: "{{ route('admin.addfilter_country_store') }}",
			            data:formData,
			            cache:false,
			            contentType: false,
			            processData: false,
			            success:function(data){
			                
				    if(data == 1){
				    $(".as1").html("Saved successfully...!");
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide();
                       location = "{{ route('admin.country') }}";}, 
                       5000);
                        $('.sbtconatct').attr('disabled',false);
                     $('.sbtconatct').html('Save');
				           	 
				          }
			            }
			        });
			
		
				}
		    
		  }   
          });
          
          
          
           $("form[name='addgrade']").validate({
		      rules: {
		      name: "required",
		         },
		      submitHandler: function(form) {
		          $('.sbtconatct').attr('disabled',true);
$('.sbtconatct').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
		      var countryname = $("#c_name").val();
		      var id = $("#id").val();
		     if(id==''){
		      var exists = check_exists('grades', 'name', countryname);
		      }
		      else{
		      var id = $("#id").val();
		      var exists = check_exists_update('grades',id, 'name',countryname);  
		      }
		    
		      if (exists) {
					$("#emailErr").show();
					setTimeout( function(){ 
		           	 	$("#emailErr").css("display", "none");
		           	}, 3000);
		           	$('.sbtconatct').attr('disabled',false);
$('.sbtconatct').html('Save');
		           	return;
				} else {
				    var formData = new FormData(form);
				     $.ajax({
			            type:'POST',
			            url: "{{ route('admin.addfilter_grade_store') }}",
			            data:formData,
			            cache:false,
			            contentType: false,
			            processData: false,
			            success:function(data){
			             $('.sbtconatct').attr('disabled',false);
$('.sbtconatct').html('Save');
						  if(data == 1){
				    $(".as1").html("Saved successfully...!");
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide();
                       location = "{{ route('admin.grade_level') }}";}, 
                       5000);
				          
				          }
			            }
			        });
			
		
				}
		    
		  }   
          });
          
          
          
           $("form[name='addcourse']").validate({
		      rules: {
		      name: "required",
		         },
		      submitHandler: function(form) {
		      $('.sbtconatct').attr('disabled',true);
               $('.sbtconatct').html('<i class="fa fa-spinner fa-spin"></i> Processing...');
		      var countryname = $("#c_name").val();
		      var id = $("#id").val();
		     if(id==''){
		      var exists = check_exists('courses', 'name', countryname);
		      }
		      else{
		      var id = $("#id").val();
		      var exists = check_exists_update('courses',id, 'name',countryname);  
		      
		      }
		    
		      if (exists) {
					$("#emailErr").show();
					setTimeout( function(){ 
		           	 	$("#emailErr").css("display", "none");
		           	}, 3000);
		           	$('.sbtconatct').attr('disabled',false);
                    $('.sbtconatct').html('Save');
		           	return;
				} else {
				    var formData = new FormData(form);
				     $.ajax({
			            type:'POST',
			            url: "{{ route('admin.addfilter_course_store') }}",
			            data:formData,
			            cache:false,
			            contentType: false,
			            processData: false,
			            success:function(data){
                        $('.sbtconatct').attr('disabled',false);
                        $('.sbtconatct').html('Save');
			               // alert(data);
							//$('.proccessload').html('Submit');
						  if(data == 1){
				             $(".as1").html("Saved successfully...!");
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide();
                       location = "{{ route('admin.course') }}";}, 
                       5000);
				           	
				          }
			            }
			        });
			
		
				}
		    
		  }   
          });
          

 $("form[name='addyear']").validate({
		      rules: {
		      name: "required",
		         },
		      submitHandler: function(form) {
$('.sbtconatct').attr('disabled',true);
$('.sbtconatct').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
		      var countryname = $("#txtboxToFilter").val();
		      var id = $("#id").val();
		      if(id==''){
		      var exists = check_exists('years', 'name', countryname);
		      }
		      else{
		      var id = $("#id").val();
		      var exists = check_exists_update('years',id, 'name',countryname);  
		      }
		    
		      if (exists) {
					$("#emailErr").show();
					setTimeout( function(){ 
		           	 	$("#emailErr").css("display", "none");
		           	}, 3000);
		           	$('.sbtconatct').attr('disabled',false);
$('.sbtconatct').html('Save');
		           	return;
				} else {
				    var formData = new FormData(form);
				     $.ajax({
			            type:'POST',
			            url: "{{ route('admin.addfilter_year_store') }}",
			            data:formData,
			            cache:false,
			            contentType: false,
			            processData: false,
			            success:function(data){
			                $('.sbtconatct').attr('disabled',false);
$('.sbtconatct').html('Save');
			               // alert(data);
							//$('.proccessload').html('Submit');
						  if(data == 1){
				           
				           $(".as1").html("Saved successfully...!");
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide();
                       location = "{{ route('admin.year') }}";}, 
                       5000);
				           	
				          }
			            }
			        });
			
		
				}
		    
		  }   
          });

$("form[name='addchapter']").validate({
		      rules: {
		      name: "required",
		      parent:"required",
		      superparent:"required",
		         },
		      submitHandler: function(form) {
              $('.sbtconatct').attr('disabled',true);
                $('.sbtconatct').html('<i class="fa fa-spinner fa-spin"></i> Processing...');
		      var countryname = $("#c_name").val();
		      var id = $("#id").val();
		      if(id==''){
		      var exists = check_exists('courses', 'name', countryname);
		      }
		      else{
		      var id = $("#id").val();
		      var exists = check_exists_update('courses',id, 'name',countryname);  
		     
		      }
		    
		      if (exists) {
					$("#emailErr").show();
					setTimeout( function(){ 
		           	 	$("#emailErr").css("display", "none");
		           	}, 3000);
		           	 $('.sbtconatct').attr('disabled',false);
              $('.sbtconatct').html('Save');
		           	return;
				} else {
				    var formData = new FormData(form);
				     $.ajax({
			            type:'POST',
			            url: "{{ route('admin.addfilter_chapter_store') }}",
			            data:formData,
			            cache:false,
			            contentType: false,
			            processData: false,
			            success:function(data){
$('.sbtconatct').attr('disabled',false);
$('.sbtconatct').html('Save');
						  if(data == 1){
				            $(".as1").html("Saved successfully...!");
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide();
                       location = "{{ route('admin.chapter') }}";}, 
                       5000);
				           	
				          }
			            }
			        });
			
		
				}
		    
		  }   
          });

 $("form[name='addsubject']").validate({
		      rules: {
		      name: "required",
		      parent:"required",
		         },
		      submitHandler: function(form) {
$('.sbtconatct').attr('disabled',true);
$('.sbtconatct').html('<i class="fa fa-spinner fa-spin"></i> Processing...');
		      var countryname = $("#c_name").val();
		      var id = $("#id").val();
		      if(id==''){
		      var exists = check_exists('courses', 'name', countryname);
		      }
		      else{
		      var id = $("#id").val();
		      var exists = check_exists_update('courses',id, 'name',countryname);  
		      }
		    
		      if (exists) {
					$("#emailErr").show();
					setTimeout( function(){ 
		           	 	$("#emailErr").css("display", "none");
		           	}, 3000);
		           	 $('.sbtconatct').attr('disabled',false);
$('.sbtconatct').html('Save');
		           	return;
				} else {
				    var formData = new FormData(form);
				     $.ajax({
			            type:'POST',
			            url: "{{ route('admin.addfilter_subject_store') }}",
			            data:formData,
			            cache:false,
			            contentType: false,
			            processData: false,
			            success:function(data){
			           $('.sbtconatct').attr('disabled',false);
$('.sbtconatct').html('Save');
						  if(data == 1){
				            $(".as1").html("Saved successfully...!");
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide();
                       location = "{{ route('admin.subject') }}";}, 
                       5000);
				           	
				          }
			            }
			        });
			
		
				}
		    
		  }   
          });

          $("form[name='addstate']").validate({
		      rules: {
		      name: "required",
		      parent:"required",
		         },
		      submitHandler: function(form) {
		             $('.sbtconatct').attr('disabled',true);
                     $('.sbtconatct').html('<i class="fa fa-spinner fa-spin"></i> Porcessing...');
		      var countryname = $("#c_name").val();
		      var id = $("#id").val();
		      if(id==''){
		      var exists = check_exists('country', 'name', countryname);
		      }
		      else{
		      var id = $("#id").val();
		      var exists = check_exists_update('country',id, 'name',countryname);  
		      }
		    
		      if (exists) {
					$("#emailErr").show();
					setTimeout( function(){ 
		           	 	$("#emailErr").css("display", "none");
		           	}, 3000);
		           	$('.sbtconatct').attr('disabled',false);
                     $('.sbtconatct').html('Save');
		           	return;
				} else {
				    var formData = new FormData(form);
				     $.ajax({
			            type:'POST',
			            url: "{{ route('admin.addfilter_state_store') }}",
			            data:formData,
			            cache:false,
			            contentType: false,
			            processData: false,
			            success:function(data){
			             $('.sbtconatct').attr('disabled',false);
                     $('.sbtconatct').html('Save');
						  if(data == 1){
				            $(".as1").html("Saved successfully...!");
                       $(".as1").show();  
                       setTimeout(function(){ $('.alert-success').hide();
                       location = "{{ route('admin.state_province') }}";}, 
                       5000);
				           	
				          }
			            }
			        });
			
		
				}
		    
		  }   
          });
          });
          });
          
          
         
    function check_exists(table, column, value){
    var url = "{{ url('check-exists') }}"+"/"+table+"/"+column+"/"+value;
      var exists = false;

      $.ajax({
        url: url,
        async: false,
        success: function(data){
			//alert(data);
          if(data.trim()) exists = true;
        }
      });

      return exists;
    }
     function check_exists_update(table, id, column, value){
      var url = "{{ url('check-exists-update') }}"+"/"+table+"/"+id+"/"+column+"/"+value;

      var exists = false;

      $.ajax({
        url: url,
        async: false,
        success: function(data){
          if(data.trim()) exists = true;
        }
      });

      return exists;
    }
   
$(document).ready(function() {
    $("#txtboxToFilter").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    
    
    
    $("#price").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    
    
    $(".referrel_amount").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    
    
    
    
});

$('.withdrawreq').click(function(){
 var status = $(this).attr('data-status');
 var id = $(this).attr('data-id');
  if(status=='2')
  {
     $('.changetext').text('Do you really want to approve this withdraw request?');
  }
  if(status=='1')
  {
     $('.changetext').text('Do you really want to decline this withdraw request?');
  }
    $('#dataids').val(id);
    $('#datastatus').val(status);
});

$('.requestaction').click(function(){
    $('.requestaction').attr('disabled',true);
    $('.requestaction').html('Porcessing...');
     var id  = $('#dataids').val();
     var status = $('#datastatus').val();
      var url = "{{ url('/admin/requestaction') }}";
      $.ajax({
        headers: {
          'X-CSRF-Token': $('input[name="_token"]').val()
        },
        url: url,
        type: 'post',
        data: {status:status,id:id},
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
                $('#approve_withdraw').hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
                $(".as1").html(data.message);
                $(".as1").show();  
                setTimeout(function(){ $('.alert-success').hide(); }, 3000);
                setTimeout(function(){ window.location.reload(); }, 3000);
                 $('.requestaction').attr('disabled',false);
                 $('.requestaction').html('Submit');
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
    
    var url = "{{ url('/admin/deletenotifications') }}";
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