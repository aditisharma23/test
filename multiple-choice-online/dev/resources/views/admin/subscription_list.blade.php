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
                            <li class="breadcrumb-item active">Payments</li>
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
                                        <h4 class="card-title"><span class="lstick"></span>Payments</h4>
                                    </div>
                                </div>
                                
                             <span id="success_msg"></span>
                                <div class="table-responsive">
                                    <table id="myTable1" class="table table-striped">
                                        <thead>
                                            <tr>
                                                 <th>Transaction Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Package</th>
                                                 <th>Amount</th>
                                                 <th>Expiry</th>
                                                 
                                            </tr>
                                        </thead>
                                        <tbody id="htmlss">
                                            @if(!empty($transactions))
                                            @forelse($transactions as $c)
                                            <tr id="remove-{{$c->id}}">
                                                <td><?php if($c->amount != '0' && $c->transaction_id =='0'){ ?> Wallet <?php  } else if($c->transaction_id =='0'){ ?> Free
                                            <?php }else{ ?> {{$c->transaction_id}} <?php } ?></td>
                                            <td><?=$c->name;?><?=' '.$c->lname;?></td>
                                            <td><?=$c->email;?></td>
                                            <td> <?=$c->title;?></td>
                                            <td>$ <?=$c->amount;?></td>
                                            <td><?=$c->expiry;?></td>
                                            
                                           
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
                               