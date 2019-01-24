@include('user/layouts.app2')

<style>
    label.error{
        color:red;
    }
</style>
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{url('/home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre">My Wallet
            </li>
        </ul>
    </div>	
    <inpu type="hidden" name="withdrwala" class="withdrwala" value="0">
           <div class="ad-v2-hom-info">
                <div class="ad-v2-hom-info-inn">
                    <ul>
                        <li>
                            <div class="ad-hom-box ad-hom-box-1">
                                
                                <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-question-circle-o"></i></span>
                                <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> Wallet Balance</p>
                                    <h3>$ {{$walletamount}}</h3>
                                </div>
                              
                            </div>
                        </li>
                        <li>
                            <div class="ad-hom-box ad-hom-box-2">
                               
                                <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-file-text-o"></i></span>
                                <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i>Referral Amount</p>
                                    <h3>$ {{$reffer_amount}}</h3>
                                </div>
                               
                            </div>
                        </li>
                        <li style="display:none;">
                            <div class="ad-hom-box ad-hom-box-3" >
                                <span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>
                                <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i>Withdraw Amount</p>
                                    <h3>$ {{$withdrwaamount}}</h3>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
     <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title head-style">
                        <span class="wallet-icon"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></span>
                        <h4 class="">My Transactions</h4>
                        
                        <!--h4 class="">$ {{$walletamount}}<span>Wallet Balance</span></h4> &nbsp;&nbsp;&nbsp;&nbsp; <h4 class="" style="display:none;">$ {{$withdrwaamount}}<span>Withdraw Amount</span></h4> &nbsp;&nbsp;&nbsp;&nbsp; <h4 class="" style="">$ {{$reffer_amount}}<span>Referral Amount</span></h4-->
                        <button data-toggle="modal" data-target="#myModalapply" class="applyamount btn btn-primary pull-right" style="display:none;" >Withdraw Request</button>
                    </div>
                    
                    <div class="tab-inn table-responsive " style="display:none;">
                        <div class="table-desi">
                            <table class="table table-hover" id="discount11">
                                <thead>
                                    <tr>
                                        
                                        <th>Withdraw Amount</th>
                                        <th>Request Date</th>
                                        <th>Status</th>
                                        <th>Reponse Date</th>
                                        <th>Comment</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @if(!empty($applyrequests))
                                    @foreach($applyrequests as $applyrequest)
                                    <tr>
                                        
                                        <td>$ {{$applyrequest->amount}}</td>
                                       <td>{{date('d/m/Y',strtotime($applyrequest->created_at))}}</td>
                                        <td>@if(!empty($applyrequest)) @if($applyrequest->status=='0') <span class="badge bg-danger">Pending</span> @elseif($applyrequest->status=='1') <span class="badge bg-danger">Decline</span> @else <span class="badge bg-success">Approve</span> @endif @endif</td>
                                        <td>@if(!empty($applyrequest->updated_at)) {{date('d/m/Y',strtotime($applyrequest->updated_at))}} @endif </td>
                                         <td>{{$applyrequest->comment}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    
                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                     <div class="tab-inn table-responsive ">
                                                                    <div class="table-desi">
                                                                        <?php  ////print_r($transactions);?>
                                                                        <div class="table-responsive">
                                                                            <table class="table table-hover" id="discount1" >
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>ID</th>
                                                                                    <th>Plan Name</th>
                                                                                    <th>Price</th>
                                                                                    <th>Payment Method</th>
                                                                                    <th>Expiry Date</th>



                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($transactions as $key=>$t)
                                                                                <tr>
                                                                                    <td>@if($t->amount != '0' && $t->transaction_id =='0') Wallet @elseif($t->transaction_id != 0) #{{$t->transaction_id}} @else Free @endif</td>
                                                                                    <td>{{App\Subscription_content::getname($t->package_id)}}</td>
                                                                                    <td>$<?=$t->amount;?></td>
                                                                                    <td>@if($t->package_id == '1')
                                                                                    --
                                                                                    @elseif($t->amount != '0' && $t->transaction_id =='0')
                                                                                    Wallet
                                                                                    @else
                                                                                    Card
                                                                                    @endif
                                                                                    </td>
                                                                                    <td><?php  
                                                                                    
                                                                                    if($key == '0')
                                                                                    {   $datek = App\Hours::getdetailsuserret(Session()->get('userid'),'expiry');
                                                                                        $date1 = date('M-d Y',strtotime($datek));
                                                                                    }else
                                                                                    {
                                                                                    $date = strtotime($t->created);
                                                                                    if($t->package_id == '1'){
                                                                                     $date1 = date('M-d Y',strtotime("+7 day", $date));
                                                                                     }else{
                                                                                         $date1 = date('M-d Y',strtotime("+1 month", $date)); 
                                                                                     } }
                                                                                     ?> 
                                                                                     <?=$date1;?></td>
                                                                                </tr>
                                                                                @endforeach
                                                                              </tbody>
                                                                        </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                </div>
            </div>
        </div>
    </div>
</div>	 

<!-- Modal -->
<div class="modal modal-overlay fade" id="myModalapply" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Withdraw Request</h4>
      </div>
       <form class="applyamountform" data-action="{{url('/user/applyamount')}}" data-next="" methode="post">
       <div class="modal-body">
           
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Enter Amount:</label>
                    <input type="text" name="amount" class="form-control" id="recipient-name1" onkeyup="this.value = fnc(this.value, {{$walletamount}})"/>
                   <span class="error amountss"></span>
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label">Enter Comment:</label>
                    <textarea name="comment" class="form-control" id="message-text1"></textarea>
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary submitapply">Submit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
    </div>
  </div>
</div>

@include('user/layouts.footer')    
<script type="text/javascript">
function fnc(value, max) 
{
    if(parseInt(value)  < 0 || isNaN(value)) 
    {
        $('.submitapply').attr('disabled',true);
        $('.amountss').hide();
       return ''; 
       
    }
    
    if(value.length > 0)
    {
        if(value == 0) 
    {
        $('.submitapply').attr('disabled',true);
        $('.amountss').text('Amount must be greater then 0');
       return value; 
       
    }
        if(value > max) 
        {
            $('.submitapply').attr('disabled',true); 
            $('.amountss').show();
            $('.amountss').text('Insufficient Balance you can withdraw upto $'+max);
            return value;
        }else
        {   $('.submitapply').attr('disabled',false);
         $('.amountss').hide();
          return value;
        }   
    }else
    {
         $('.amountss').hide();
    }
    return value; 
    
}
</script>
<script> 
 $(document).ready(function() {
    $('#discount11').DataTable({
         "order": [],
    });
} );
</script>