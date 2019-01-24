 <div class="table-responsive m-t-20 no-wrap">
                                    <table class="table vm no-th-brd pro-of-month">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Question</th>
												<th>Answer</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody">
                                           @if(!empty($options))
                                            @forelse($options as $u)
                                            <tr id="tr<?=$u->id;?>">
                                                
                                                <td><h6><?=$u->questions;?></h6></td>
	                                            <td><?=  $u->questions  ? $u->questions : '-----';?></td>
	                                            <td><?=  $u->answer  ? $u->answer : '-----';?></td>
                                                <td>
                      <a href="{{url('admin/add_faq/'.$u->id)}}" class="btn-info mr-1"><i class="mdi mdi-pencil"></i></a>
                   
                 <a href="javascript:void(0);" data-url-param1="faqs" data-url-param2="{{$u->id}}" class=" btn-danger deletes" data-toggle="modal" data-target="#deletek">
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
                                @if(!empty($options))
                                    {!! $options->render() !!}
                                     @endif
