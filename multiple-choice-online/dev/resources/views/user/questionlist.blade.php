@include('user/layouts.app2')

<div class="sb2-2">
            <!--== breadcrumbs ==-->
            <div class="sb2-2-2">
                <ul>
                    <li><a href="{{url('/home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre">Questions List
                    </li>

                </ul>
            </div>
    

            <!--== User Details ==-->
            <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>Questions List</h4>

                            </div>
                            <div class="tab-inn table-responsive ">
                                <div class="table-desi">
                                    <table class="table table-hover" id="discount1">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Course</th>
                                                <th>Chapter</th>
                                                <th>Subject</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                    
                                            @if(!empty($questions))
                                            @forelse($questions as $u)
                                            <tr id="tr<?=$u->id;?>">
                                                
                                            <td><h6><?php echo date('d/m/Y', strtotime($u->created_at)); ?></h6></td>
                                            <td><h6><?php if(!empty($u->course))
                                                           {
                                                              foreach($courses as $course)
                                                              {
                                                                  if($u->course==$course->id)
                                                                  {
                                                                      echo $course->name;
                                                                  }
                                                              }
                                                           }else
                                                           {
                                                               echo '--------';
                                                           }
                                            
                                            ?></h6></td>
                                            <td><?php if(!empty($u->chapter))
                                                           {
                                                              foreach($chapter as $chapte)
                                                              {
                                                                  if($u->chapter==$chapte->id)
                                                                  {
                                                                      echo $chapte->name;
                                                                  }
                                                              }
                                                           }else
                                                           {
                                                               echo '--------';
                                                           }
                                            
                                            ?></td>
                                            <td><?php if(!empty($u->subject))
                                                           {
                                                              foreach($subject as $subjec)
                                                              {
                                                                  if($u->subject==$subjec->id)
                                                                  {
                                                                      echo $subjec->name;
                                                                  }
                                                              }
                                                           }else
                                                           {
                                                               echo '--------';
                                                           }
                                            
                                            ?></td>
                                            <td>
                                            <a href="{{url('user/editquestion/'.$u->id)}}" ><i class="fa fa-pencil"></i></a>
                                            <a href="{{url('user/viewquestion/'.$u->id)}}" ><i class="fa fa-eye" style="background:#2ba9e3 !important;"></i></a>
                                            <a href="javascript:void(0);" data-url-param1="pre_questiondetails" data-url-param2="{{$u->id}}" class="deletes" data-toggle="modal" data-target="#deletek">
                                            <i class="fa fa-trash" style="background:#d9534f !important;"></i></a>
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
                            </div>
                                
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>






@include('user/layouts.footer')
