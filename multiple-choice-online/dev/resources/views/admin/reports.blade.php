 @include('admin/layouts.app2')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <input type="hidden" class="scrolls" value="{{$scroll}}">
        <div class="page-wrapper">
            
            <div class="container-fluid ">

                <div class="row page-titles">
 
                    <div class="col-md-12 ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Reports</li>
                        </ol>
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h3 class="card-title m-b-5"><span class="lstick"></span>User Registered</h3>
                                                <div id="sales-overview" class="p-relative" style="height:400px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title"><span class="lstick"></span>Added Questions</h4>
                                                <div>
                                                    <!--canvas id="chart1" height="150"></canvas-->
                                                    <div id="ct-chart" class=" ct-chart p-relative" style="height:150;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                </div>
                                 <div class="row">
                                <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body"> 
                                            
                                                <h4 class="card-title"><span class="lstick"></span>Test Attempted</h4>
                                                <div>
                                                    <div id="sales-overview2" class="p-relative" style="height:400px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                        
                    
                    
                    
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
          
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    @include('admin/layouts.footer')
    
    
    
    <!-- ============================================================== -->
    



    <script>
    $(document).ready(function(){
     var newUrl = "{{url('admin/reports')}}";
    window.history.replaceState({}, '', newUrl);
     var scroll = $('.scrolls').val();    
     if(scroll=='1')
     {
        $("html, body").animate({ scrollTop: $(document).height() }, 1000);
        
     }
    });
    
    $(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
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
    
   
    $(function () {
        
         var data='';
    $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: "{{url('/admin/getreports')}}",
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                dataType:'json',
                success: function (datas) {
            
			var score = [];
			var expense = [];
			var sales = [];

			for(var i in datas) {
			    if([i]=='result1')
			    {
                    Object.keys(datas[i]).forEach(function(key) {
                    var value = datas[i][key];
                    score.push(datas[i][key]);
                    });
			    }
			    
			    if([i]=='result2')
			    {
			        
                    Object.keys(datas[i]).forEach(function(key) {
                    var value = datas[i][key];
                    expense.push(datas[i][key]);
                    });
			      
			    }
			    
			    if([i]=='result3')
			    {
			        
                    Object.keys(datas[i]).forEach(function(key) {
                    var value = datas[i][key];
                    sales.push(datas[i][key]);
                    });
			      
			    }
				
			}
			
                  if(datas.result1!='')
                    {
                                      "use strict";
                    // ============================================================== 
                    // Sales overview
                    // ============================================================== 
                     new Chartist.Line('#sales-overview', {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                        , series: [
                           // datas
                         {meta:"Active Users", data: score},{meta:"Inactive Users", data: expense},{meta:"Deleted Users", data: sales}
                      ]
                    }, {
                        low: 0
                        , high:400
                        , showArea: true
                        , fullWidth: true
                        , showLine: false
                        , chartPadding: 30
                        , axisX: {
                            showLabel: true
                            , divisor: 1
                            , showGrid: false
                            , offset: 50
                        }
                        , plugins: [
                        	Chartist.plugins.tooltip()
                      	], 
                      	// As this is axis specific we need to tell Chartist to use whole numbers only on the concerned axis
                        axisY: {
                        	onlyInteger: true
                            , showLabel: true
                            , scaleMinSpace: 50 
                            , showGrid: true
                            , offset: 10,
                            labelInterpolationFnc: function(value) {
                		      return (value / 100) + 'k'
                		    },
                
                        }
                        
                    });
                       
                    }
                    
                },
            }); 
        
         $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: "{{url('/admin/agetquestiondata')}}",
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                dataType:'json',
                success: function (datas) {
                    
           var user = [];
			var admin = [];
		
			for(var i in datas) {
			    if([i]=='result12')
			    {
                    Object.keys(datas[i]).forEach(function(key) {
                    var value = datas[i][key];
                    user.push(datas[i][key]);
                    });
			    }
			    
			    if([i]=='result23')
			    {
			        
                    Object.keys(datas[i]).forEach(function(key) {
                    var value = datas[i][key];
                    admin.push(datas[i][key]);
                    });
			      
			    }
			    
				}
				
    				    var data = {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        series: [
                        user,
                        admin
                        ]
                        };
                        
                        var options = {
                        seriesBarDistance: 10
                        };
                        
                        var responsiveOptions = [
                        ['screen and (max-width: 640px)', {
                        seriesBarDistance: 5,
                        axisX: {
                        labelInterpolationFnc: function (value) {
                        return value[0];
                        }
                        }
                        }]
                        ];
                        
    
                            new Chartist.Bar('.ct-chart', data, options, responsiveOptions);
				
                     
                },
            }); 
        
      
      
       $.ajax({
          headers: {
              'X-CSRF-Token': $('input[name="_token"]').val()
          },
                type: 'post',
                url: "{{url('/admin/getattempttest')}}",
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                dataType:'json',
                success: function (datas) {
                    
                    var usertest = [];
		
			for(var i in datas) {
			    if([i]=='usertest')
			    {
                    Object.keys(datas[i]).forEach(function(key) {
                    var value = datas[i][key];
                    usertest.push(datas[i][key]);
                    });
			    }
			}
                         "use strict";
    // ============================================================== 
    // Sales overview
    // ============================================================== 
     new Chartist.Line('#sales-overview2', {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        , series: [
          {meta:"Test Attempted", data: usertest}
       
      ]
    }, {
        low: 0
        , high:400
        , showArea: true
        , fullWidth: true
        , showLine: false
        , chartPadding: 30
        , axisX: {
            showLabel: true
            , divisor: 1
            , showGrid: false
            , offset: 50
        }
        , plugins: [
        	Chartist.plugins.tooltip()
      	], 
      	// As this is axis specific we need to tell Chartist to use whole numbers only on the concerned axis
        axisY: {
        	onlyInteger: true
            , showLabel: true
            , scaleMinSpace: 50 
            , showGrid: true
            , offset: 10,
            labelInterpolationFnc: function(value) {
		      return (value / 100) + 'k'
		    },

        }
        
    });
                },
       });

    
    });
    </script>   
