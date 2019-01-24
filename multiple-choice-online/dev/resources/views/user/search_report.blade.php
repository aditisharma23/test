 <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover reporttable" id="discount1">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Question</th>
                                                    <th>Submitted Answer</th>
                                                    <th>Suggested Answer</th>
                                                     <th>View</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($results) && count($results) > 0)
											 @forelse($results as $result)
                                                <tr>
                                                    <td><span class="badge"><?php echo date('d/m/Y', strtotime($result->test_date)); ?></span></td>
                                                    <td>@if(!empty($result->total_questions)){{$result->total_questions}}@endif
                                                      </td>
													<td><?php $were1 = [['test_id','=',$result->id],['answer','!=','']] ?>
                                                        {{App\User_test_answers::getbycount($were1)}}</td>
													<td><?php $were2 = [['test_id','=',$result->id],['suggested_answer','!=','']] ?>
                                                        {{App\User_test_answers::getbycount($were2)}}</td>
                                                    <td><a href="{{url('/user/test_detail/'.$result->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
													</td>
                                                 </tr>
                                            @empty
                                            <tr>
                                            <td colspan="5" style="text-align:center;">No Record Found!!!</td>
                                            </tr>
                                            @endforelse
                                            @else
                                            <tr>
                                            <td colspan="5" style="text-align:center;">No Record Found!!!</td>
                                            </tr>
											@endif
                                                <!--tr>
                                                    <td><span class="badge">29/7/2018</span></td>
                                                    <td>3</td>
                                                    <td>51</td>
                                                    <td>22</td>
                                                    <td><a href="detail.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
													</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="badge">19/5/2018</span></td>
                                                    <td>2</td>
                                                    <td>35</td>
                                                    <td>15</td>
                                                    <td><a href="detail.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
													</td>
                                               </tr>
												
                                                <tr>
                                                    <td><span class="badge">12/6/2018</span></td>
                                                    <td>30</td>
                                                    <td>20</td>
                                                    <td>10</td>
                                                    <td><a href="detail.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
													</td>
                                               </tr>
												
                                                <tr>
                                                    <td><span class="badge">20/7/2018</span></td>
                                                    <td>11</td>
                                                    <td>7</td>
                                                    <td>1</td>
                                                    <td><a href="detail.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
													</td>
                                               </tr>
												
                                                <tr>
                                                    <td><span class="badge">25/6/2018</span></td>
                                                    <td>2</td>
                                                    <td>5</td>
                                                    <td>21</td>
                                                    <td><a href="detail.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
													</td>
                                              </tr-->												
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                