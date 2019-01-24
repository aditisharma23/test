@include('user/layouts.app2')

<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{url('/home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre">Referral
            </li>
            
        </ul>
    </div>	
    
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Referral List</h4>

                    </div>
                    <div class="tab-inn table-responsive ">
                        <div class="table-desi">
                            <table class="table table-hover" id="discount1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Refer Date</th>
                                        <th>Registered</th>
                                        <th>Amount Earned</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(!empty($reffered))
                                   @foreach($reffered as $reffer)
                                    <tr>
                                        <td>{{App\User::getdetailsuserret($reffer->friend_id,$reffer->friend_email)}}</td>
                                        <td>{{$reffer->friend_email}}</td>
                                        <td>{{date('d/m/Y',strtotime($reffer->created_at))}}</td>
                                        <td>@if($reffer->status=='1') <span class="badge bg-success">Yes</span>
                                        @else
                                        <span class="badge bg-danger">No</span> @endif
                                        </td>
                                        <td>@if($reffer->status=='1') {{$reffer->amount}} @else 0 @endif</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>	

@include('user/layouts.footer')