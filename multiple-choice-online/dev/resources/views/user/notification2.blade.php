                <div class="table-responsive">
                <table id="" class="table table-striped">
                <thead>
                    
                <tr>
                    <th colspan="1"></th>
                    <th colspan="1"></th>
                    <th colspan="3"></th>
                    
                </tr>
                </thead>
                <tbody>
                @if(count($notifications) > 0)
                @foreach($notifications as $notification)
                
                    <tr @if($notification->status=='1') style="background-color:#33d085; color:white;" @endif  id="tr{{$notification->id}}">
                    <td ><input type="checkbox" class="checkboxes" name="checkboxeses" value="{{$notification->id}}"></td>
                    <td style="width:50px;" data-id="{{$notification->id}}" data-url="{{url($notification->url)}}" class="viewnotifications"><span class="round">
                   <?php  $img = App\User::getdetailsuserret2(array('id'=>$notification->from_id),'profile');
                   ?>
                    @if(!empty($img))
                    <img src="{{url('/')}}/public/profile/{{$img}}"alt="user" width="50">											
                    @else
                    <img src="{{url('/')}}/uploads/Dummy-image.jpg"alt="user" width="50">											
                    @endif
                    
                    </span></td>
                    <td data-id="{{$notification->id}}" data-url="{{url($notification->url)}}" class="viewnotifications" colspan="2"><a href="javascript:void(0);"  style="text-decoration: none !important;color:#fff;">
                        <?php echo $notification->description; ?>
                     </a></td>
                     <td data-id="{{$notification->id}}" data-url="{{url($notification->url)}}" class="viewnotifications"><i class="fa fa-clock-o" aria-hidden="true"></i> {{\Carbon\Carbon::createFromTimeStamp(strtotime($notification->created_at))->diffForHumans()}} </td>
                </tr>
                
                @endforeach
                @else
                <tr>
                    <td colspan="5">No notifications found.. !</td>
                    </tr>
                @endif
                </tbody>
                </table>
                    @if(!empty($notifications))
                    {!! $notifications->render() !!}
                    @endif
                </div>