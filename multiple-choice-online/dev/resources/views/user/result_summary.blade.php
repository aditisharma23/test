
            <div class="sb2-2-2">
                <ul>
                    <li><a href="{{url('/home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="javascript:void(0);">Test Summary</a>
                    </li>
                </ul>
            </div>
            <div class="sb2-2-3">
                <div class="box-inn-sp">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="tab-inn detail-page">

 
                                <div class="row ans-options">
                                    <div class="col-md-12">
									<h3 class="tableheading">Your Answer</h3>
									<table class="table table-border-none">
									  <thead>
										<tr>
										  <th scope="col">Question No.</th>
										  <th scope="col">Your Answer</th>
										  <th scope="col">Correct Answer</th>
										 
										</tr>
									  </thead>
									  <tbody>
									      @if(!empty($realanswers))
									      @foreach($realanswers as $key=> $realanswer)
									      <?php 
									      $key +=1;
									       $result2= '';
									       if($realanswer->realanswer=='1')
									         {
									             $result2='a';
									         }
									         if($realanswer->realanswer=='2')
									         {
									              $result2='b';
									         }
									         if($realanswer->realanswer=='3')
									         {
									             $result2='c';
									         }
									         if($realanswer->realanswer=='4')
									         {
									             $result2='d';
									         }
									      
									          $result= '';
									         if($realanswer->myanswer=='1')
									         {
									             $result='a';
									         }
									         if($realanswer->myanswer=='2')
									         {
									              $result='b';
									         }
									         if($realanswer->myanswer=='3')
									         {
									             $result='c';
									         }
									         if($realanswer->myanswer=='4')
									         {
									             $result='d';
									         }
									      ?>
										<tr>
										
										  <td>{{$key}}</td>
										  <td @if($realanswer->myanswer == $realanswer->realanswer) class="correcttdlight" @else class="wrongtd" @endif >{{$result}}. @if($realanswer->myanswer=='1'){{$realanswer->optiona}}@endif
										  @if($realanswer->myanswer=='2'){{$realanswer->optionb}}@endif
										  @if($realanswer->myanswer=='3'){{$realanswer->optionc}}@endif
										  @if($realanswer->myanswer=='4'){{$realanswer->optiond}}@endif</td>
										  <td class="correcttd">{{$result2}}. @if($realanswer->realanswer=='1'){{$realanswer->optiona}}@endif
										  @if($realanswer->realanswer=='2'){{$realanswer->optionb}}@endif
										  @if($realanswer->realanswer=='3'){{$realanswer->optionc}}@endif
										  @if($realanswer->realanswer=='4'){{$realanswer->optiond}}@endif
										  </td>
										</tr>
										@endforeach
										@endif
										<!--tr>
										
										  <td>2</td>
										  <td class="wrongtd">a. Second Position</td>
										  <td class="correcttd">b. Third position</td>
										</tr>
										<tr>
										
										  <td>3</td>
										  <td class="correcttdlight">a. The hole is 6 cubic yards</td>
										  <td class="correcttd">a. The hole is 6 cubic yards</td>
										</tr>
										<tr>
										
										  <td>4</td>
										  <td class="wrongtd">a. Tallahassee
                                                        </td>
										  <td class="correcttd">d. Tampa bay</td>
										</tr>
										<tr>
										
										  <td>5</td>
										  <td class="correcttdlight">c. Califorinia</td>
										  <td class="correcttd">c. Dubai</td>
										</tr>
										<tr>
										
										  <td>6</td>
										  <td class="wrongtd">b. New York</td>
										  <td class="correcttd">c. Boston</td>
										</tr>
										<tr>
										
										  <td>7</td>
										  <td class="correcttdlight">d. Tallahassee</td>
										  <td class="correcttd">d. Tallahassee</td>
										</tr>
										<tr>
										
										  <td>8</td>
										  <td class="correcttdlight">a. Third Position</td>
										  <td class="correcttd">a. Third Position</td>
										</tr>
										<tr>
										
										  <td>9</td>
										  <td class="wrongtd">d. Califorinia</td>
										  <td class="correcttd">a. Dubai</td>
										</tr-->


										
									  </tbody>
									  
									  <tfoot>
										<tr>
										
										  <td></td>
										  <td>Your Score</td>
										  <td>{{$scores[0]->correct_answers}}/@if($scores[0]->total_questions !=''){{$scores[0]->total_questions}}@endif</td>
										</tr>									  
									  </tfoot>									  
									</table>
                                </div>


                            </div>

                        </div>

                     

                    
                       


                    </div>
                </div>
            </div>
        </div>
