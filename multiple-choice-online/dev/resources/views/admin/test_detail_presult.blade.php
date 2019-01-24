   <div class="row">
                        <?php 
                        if(isset($_GET['page']))
                        {
                             //$i=$_GET['page']; 
                        $offset = ($_GET['page'] - 1)  * 10;
                        $i = $offset + 1;
                        }else
                        {
                             $i=1; 
                        }
                       
                        ?>
                       
                        @forelse($questions11 as $a)
                        <div class="col-md-12">
                            <div class="tab-inn detail-page px-0 py-3">
                                <h3>Q{{$i++}}. <span>{{$a->question}}</span></h3>
                                <div class="row ans-options">
                                <div class="col-md-6 relative">
                                <?php if($a->oranswer != $a->answer){if($a->answer== '1'){?>
                                <p <?php echo 'class="wrong"';?>>{{$a->optiona}} <?php if($a->oranswer == '1'){ echo '<span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span>';}?></p>
                                <?php  }else{?>
                                <?php if($a->oranswer=='1'){ ?>
                                <p class="correct">{{$a->optiona}}<span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span></p>
                                <?php }else{?>
                                <p>{{$a->optiona}}</p>
                                <?php } ?>
                                <?php  }}else{?>
                                <p <?php if($a->oranswer == '1'){ echo 'class="correct"';}?>>{{$a->optiona}}<?php if($a->oranswer == '1'){ echo '<span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span>';}?></p>
                                <?php } ?>
                                </div>
                                <div class="col-md-6 relative">
                                <?php if($a->oranswer != $a->answer){if($a->answer== '2'){?>
                                <p <?php echo 'class="wrong"';?>>{{$a->optionb}} <?php echo '<span class="ansreport"><i class="fa fa-times" aria-hidden="true"></i> Wrong Answer</span>';?> </p>
                                <?php  }else{?>
                                 <?php if($a->oranswer=='2'){ ?>
                                <p class="correct">{{$a->optionb}}<span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span></p>
                                <?php }else{?>
                                 <p>  {{$a->optionb}}</p>
                                <?php
                                }?>
                                <?php  }}else{?>
                                <p <?php if($a->oranswer == '2'){ echo 'class="correct"';}?>>{{$a->optionb}}<?php if($a->oranswer == '2'){ echo '<span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span>';}?></p>
                                <?php } ?>
                                </div>
                                <div class="col-md-6 relative">
                                <?php if($a->oranswer != $a->answer){if($a->answer== '3'){?>
                                <p <?php echo 'class="wrong"';?>>{{$a->optionc}} <?php echo '<span class="ansreport"><i class="fa fa-times" aria-hidden="true"></i> Wrong Answer</span>';?> </p>
                                <?php  }else{?>
                                <?php if($a->oranswer=='3'){ ?>
                                <p class="correct">{{$a->optionb}}<span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span></p>
                                <?php }else{ ?>
                                 <p> {{$a->optionc}}</p>
                                <?php } ?>
                                <?php  }}else{?>
                                <p <?php if($a->oranswer == '3'){ echo 'class="correct"';}?>>{{$a->optionb}}<?php if($a->oranswer == '3'){ echo '<span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span>';}?></p>
                                <?php } ?>          
                                </div>
                                <div class="col-md-6 relative">
                                <?php if($a->oranswer != $a->answer){if($a->answer== '4'){?>
                                <p <?php echo 'class="wrong"';?>>{{$a->optiond}} <?php echo '<span class="ansreport"><i class="fa fa-times" aria-hidden="true"></i> Wrong Answer</span>';?> </p>
                                <?php  }else{?>
                                <?php if($a->oranswer=='4'){ ?>
                                <p class="correct">{{$a->optiond}}<span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span></p>
                                <?php }else{ ?>
                                <p>{{$a->optiond}}</p>
                                <?php } ?>
                                <?php  }}else{?>
                                <p <?php if($a->oranswer == '4'){ echo 'class="correct"';}?>>{{$a->optiond}}<?php if($a->oranswer == '4'){ echo '<span class="ansreport"><i class="fa fa-check" aria-hidden="true"></i> Correct Answer</span>';}?></p>
                                <?php } ?>   
                                </div>
                            </div>
                            <?php if(!empty($a->suggested_answer)){?>
                            <div class="suggestion mb-0">
                            <div class="row">
                                <div class="col-md-6">
                                <h4>Suggest your answer</h4>
                                <div class="form-group">
                                <input type="text" class="form-control" 
                                value="<?php if($a->suggested_answer == '1'){ echo $a->optiona;}
                                    elseif($a->suggested_answer == '2'){ echo $a->optionb; }
                                    elseif($a->suggested_answer == '3'){ echo $a->optionc; }
                                    else{ echo $a->optiond;} ?>" disabled>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Comment</h4>
                                            <div class="form-group">

                                                <textarea class="form-control" rows="1" id="comment"><?=$a->comment;?></textarea>
                                            </div>
                                        </div>

                                    </div>
                                   
                                </div> <?php } ?>

                            </div>

                        </div>
                        @empty
                        <div class="col-md-12">
                         @if(!empty($answers))
								      @foreach($answers as $key=>$answer)
								      <?php $key+=1; ?>
								      
								        <div class="row">
                                           <div class="col-md-12">
        
                                                <div class="tab-inn detail-page px-0">
                    
                                                   @if(!empty($answer->question)) <h3>Q{{$i++}}. <span>{{$answer->question}}</span></h3> @endif
                                                    <div class="row ans-options">
                                                        <div class="col-md-6 relative">
                                                            <p @if(!empty($answer->answer)) @if($answer->answer=='1') class="" @endif @endif >@if(!empty($answer->optiona)){{$answer->optiona}}@endif  </p>
                                                        </div>
                                                        <div class="col-md-6 relative">
                                                            <p @if(!empty($answer->answer)) @if($answer->answer=='2') class="" @endif @endif >@if(!empty($answer->optionb)){{$answer->optionb}}@endif </p>
                                                        </div>
                                                        <div class="col-md-6 relative">
                                                            <p @if(!empty($answer->answer)) @if($answer->answer=='3') class="" @endif @endif >@if(!empty($answer->optionc)){{$answer->optionc}}@endif </p>
                                                        </div>
                                                        <div class="col-md-6 relative">
                                                            <p @if(!empty($answer->answer)) @if($answer->answer=='4') class="" @endif @endif >@if(!empty($answer->optiond)){{$answer->optiond}}@endif </p>
                                                        </div>
                                                    </div>
                    
                    
                                                </div>
                    
                                            </div>
                                        </div>
                                    
                                    @endforeach
                                    @endif
                        </div>
                        @endforelse
                       
                        @if(!empty($questions11) && count($answers) == '0')
                        {!! $questions11->render() !!}
                        @endif
                        
                         @if(!empty($answers) && count($questions11) == '0') 
                        {!! $answers->render() !!}
                        @endif

                    </div>