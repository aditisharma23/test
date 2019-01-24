@include('admin/layouts.app2')
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
                            <li class="breadcrumb-item active">Withdraw</li>
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
                                        <h4 class="card-title"><span class="lstick"></span>Withdraw Requests</h4>
                                    </div>
                                </div>
                                
                             <span id="success_msg"></span>
                                <div class="table-responsive">
                                    <table id="myTable1" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Wallet balance</th>
                                                 <th>Request amount</th>
                                                 <th>Request comment</th>
                                                  <th>Request Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="htmlss">
                                            @if(!empty($applyrequests))
                                            @forelse($applyrequests as $c)
                                            <tr id="remove-{{$c->requestid}}">
                                            <td><?=$c->name;?><?=' '.$c->lname;?></td>
                                            <td><?=$c->email;?></td>
                                            <td>$ <?=$c->walletamount;?></td>
                                            <td>$ <?=$c->requestamount;?></td>
                                            <td>@if(!empty($c->requestcomment)) <?=$c->requestcomment;?> @endif</td>
                                            <td><?php if($c->requestatus=='0'){ ?> <span class="badge bg-danger">Pending</span>
                                            <?php } elseif($c->requestatus=='1'){ ?>
                                            <span class="badge bg-danger">Decline</span>
                                           <?php  }else{?> <span class="badge bg-success">Approve</span> <?php } ?></td>
                                            <td class="padding-left-0">
                       <?php if($c->requestatus=='0'){ ?> <a href="javascript:void(0);" data-id="{{$c->requestid}}"  data-status="2" data-toggle="modal" data-target="#approve_withdraw"  class="btn-info mr-1 withdrawreq"><i data-toggle="tooltip" title="Approve" class="mdi mdi-check"></i></a> <?php } ?>
                <a href="{{url('admin/request_detail')}}/{{$c->requestid}}" data-toggle="tooltip" title="View" class="btn-info mr-1"><i class="mdi mdi-eye"></i></a>
               <?php if($c->requestatus=='0'){ ?> <a href="javascript:void(0);"  data-id="{{$c->requestid}}"  data-status="1"  data-toggle="modal" data-target="#approve_withdraw" class="btn-danger mr-1 withdrawreq"><i data-toggle="tooltip" title="Decline" class="mdi mdi-minus-circle-outline"></i></a>  <?php } ?>
                                             </td>
                                            </tr>
                                            @empty
                                            <tr>
                                            <td>No records found</td>
                                            </tr>
                                            @endforelse
                                           @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                </div>

            </div>
         
          @include('admin/layouts.footer')

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
                               