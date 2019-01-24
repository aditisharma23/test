@include('user/layouts.app2')

<div class="sb2-2">
            <!--== breadcrumbs ==-->
            <div class="sb2-2-2">
                <ul>
                    <li><a href="{{url('/home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"> Dashboard
                    </li>

                </ul>
            </div>
            <!--== DASHBOARD INFO ==-->
            <div class="ad-v2-hom-info">
                <div class="ad-v2-hom-info-inn">
                    <ul>
                        <li>
                            <div class="ad-hom-box ad-hom-box-1">
                                <a href="{{url('user/questionlist')}}">
                                <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-question-circle-o"></i></span>
                                <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> Total Question</p>
                                    <?php  $data['user_id']=Session()->get('userid');?>
                                    <h3>{{App\Pre_questiondetails::getdetailsuserfield22($data['user_id'],'total_questions_uploaded')}}</h3>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ad-hom-box ad-hom-box-2">
                                <a href="{{url('user/report')}}">
                                <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-file-text-o"></i></span>
                                <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> Total Test</p>
                                    <h3>{{App\Test::gettotaltest($data['user_id'])}}</h3>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="ad-hom-box ad-hom-box-3">
                                <span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>
                                <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i>Total Score</p>
                                    <h3>@if(!empty($totalquestion)) {{$correctanswers}}/{{$totalquestion}} @else 0/0 @endif</h3>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

            <!--== User Details ==-->
            <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>Recent Test</h4>

                            </div>
                            <div class="tab-inn table-responsive ">
                                <div class="table-desi">
                                    <table class="table table-hover" id="discount1">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Question</th>
                                                <th>Submitted Answer</th>
                                                <th>Suggested Answer</th>
                                               

                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                            @if(!empty($questions))
                                            @foreach($questions as $key=> $result)
                                             
                                          
                                          
                                            <tr id="tr<?=$result->id;?>">
                                                
                                             <td><span class="badge"><?php echo date('d/m/Y', strtotime($result->test_date)); ?></span></td>
                                                    <td>@if(!empty($result->total_questions)){{$result->total_questions}}@endif
                                                      </td>
													<td><?php $were1 = [['test_id','=',$result->id],['answer','!=','']] ?>
                                                        {{App\User_test_answers::getbycount($were1)}}</td>
													<td><?php $were2 = [['test_id','=',$result->id],['suggested_answer','!=','']] ?>
                                                        {{App\User_test_answers::getbycount($were2)}}</td>
                                                 
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