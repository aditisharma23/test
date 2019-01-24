 <div class="row"> 
                                 <?php 
                        if(isset($_GET['page']))
                        {
                            // $i=$_GET['page']; 
                              $offset = ($_GET['page'] - 1)  * 10;
                              $i = $offset + 1;
                        }else
                        {
                             $i=1; 
                        }
                       
                        ?>
                                         @if(!empty($realanswers))
									      @forelse($realanswers as $key=> $realanswer)
									      <?php 
									      $key +=1;
									      $result3='';
									      
									      if($realanswer->suggested_answer=='1')
									         {
									             $result3='A';
									         }
									         if($realanswer->suggested_answer=='2')
									         {
									              $result3='B';
									         }
									         if($realanswer->suggested_answer=='3')
									         {
									             $result3='C';
									         }
									         if($realanswer->suggested_answer=='4')
									         {
									             $result3='D';
									         }
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
                        <div class="col-md-12">

                            <div class="tab-inn detail-page">

                                <h3>Q{{$i++}}. <span>{{$realanswer->question}}</span></h3>
                                <div class="row ans-options">
                                    <div class="col-md-6 relative">
                                        <p  class=" @if($realanswer->myanswer=='1' && $realanswer->realanswer != $realanswer->myanswer ) wrong @elseif($realanswer->realanswer=='1') correct  @endif  " >{{$realanswer->optiona}} @if($realanswer->myanswer=='1' && $realanswer->realanswer != $realanswer->myanswer ) <span class="ansreport"><i class="fa fa-times" aria-hidden="true"></i> Wrong Answer </span> @endif @if($realanswer->realanswer=='1' ) <span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span> @endif </p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class=" @if($realanswer->myanswer=='2' && $realanswer->realanswer != $realanswer->myanswer) wrong @elseif($realanswer->realanswer=='2') correct @endif " >{{$realanswer->optionb}} @if($realanswer->myanswer=='2' && $realanswer->realanswer != $realanswer->myanswer ) <span class="ansreport"><i class="fa fa-times" aria-hidden="true"></i> Wrong Answer </span> @endif @if($realanswer->realanswer=='2' ) <span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span> @endif </p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class=" @if($realanswer->myanswer=='3' && $realanswer->realanswer != $realanswer->myanswer) wrong @elseif($realanswer->realanswer=='3') correct @endif " >{{$realanswer->optionc}} @if($realanswer->myanswer=='3' && $realanswer->realanswer != $realanswer->myanswer ) <span class="ansreport"><i class="fa fa-times" aria-hidden="true"></i>  Wrong Answer </span> @endif @if($realanswer->realanswer=='3' ) <span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span> @endif </p>
                                    </div>
                                    <div class="col-md-6 relative">
                                        <p class=" @if($realanswer->myanswer=='4' && $realanswer->realanswer != $realanswer->myanswer) wrong @elseif($realanswer->realanswer=='4') correct @endif "  >{{$realanswer->optiond}} @if($realanswer->myanswer=='4' && $realanswer->realanswer != $realanswer->myanswer ) <span class="ansreport"><i class="fa fa-times" aria-hidden="true"></i>  Wrong Answer  </span> @endif @if($realanswer->realanswer=='4'  ) <span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span> @endif </p>
                                    </div>
                                </div>
                                @if(!empty($realanswer->suggested_answer) && !empty($realanswer->comment))
                                <div class="suggestion">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Suggest your answer</h4>
                                            <div class="form-group">

                                                <input type="text" class="form-control" value="{{$result3}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Comment</h4>
                                            <div class="form-group">

                                                <textarea class="form-control" rows="5" id="comment">{{$realanswer->comment}}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endif

                            </div>

                        </div>
                         @empty
                       <div class="col-md-12">
                        
                        <div class="tab-inn detail-page">
                        No Question Found!!
                        </div>
                        
                        </div>
                    @endforelse
                    @endif
                    @if(!empty($realanswers))
                    {!! $realanswers->render() !!}
                    @endif
                    @if(empty($realanswers))
                    <div class="col-md-12">
                    
                    <div class="tab-inn detail-page">
                    No Question Found!!
                    </div>
                    
                    </div>
                    @endif
                    
                    </div>
