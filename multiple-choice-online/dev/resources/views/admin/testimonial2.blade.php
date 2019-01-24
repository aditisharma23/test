 <div class="table-responsive m-t-20 no-wrap">
                                    <table class="table vm no-th-brd pro-of-month">
                                        <thead>
                                            <tr>
                                               
                                                <th>Image</th>
                                                <th>Title</th>
												<th>Name</th>
												<th>Description</th>
												<th>Status</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody">
                                           @if(!empty($testimonials))
                                           
                                            @forelse($testimonials as $u)
                                            <tr id="tr<?=$u->id;?>">
                                        
                                                <td style="width:50px;"><span class="round"><img @if(!empty($u->image)) src="{{url('public/testimonials/'.$u->image)}}" @else src="{{url('resources/images/dummy.png')}}" @endif alt="user" width="50"></span></td>
                                                <td><h6><?=$u->title;?></h6></td>
	                                            <td><?=  $u->name  ? $u->name : '-----';?></td>
	                                            <td><?=  $u->description  ? $u->description : '-----';?></td>
	                                            <td>
                                                <label class="switch">
                                                  <input type="checkbox" data-id="{{$u->id}}" data-uid="{{$u->id}}"  class="checkb" @if($u->status=='1') checked  @endif >
                                                  <span class="slider"></span>
                                                </label>
                                                            </td>
	
                     <td><a href="{{url('admin/add_testimonial/'.$u->id)}}" class="btn-info mr-1"><i class="mdi mdi-pencil"></i></a>
                   
                 <a href="javascript:void(0);" data-url-param1="testimonials" data-url-param2="{{$u->id}}" class=" btn-danger deletes" data-toggle="modal" data-target="#deletek">
                 <i class="mdi mdi-delete"></i></a>
                 
                                             </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                  <td>No Records</td>
                                            </tr>
                                            @endforelse
                                            @endif
                                            
                                         
                                        </tbody>
                                    </table>
                                </div>
                                @if(!empty($testimonials))
                                    {!! $testimonials->render() !!}
                                     @endif
