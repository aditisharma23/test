@include('admin/layouts.app2')

<div class="page-wrapper">
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  float:left;
}
.switch input {     
  opacity: 0;
  width: 0;
  height: 0;
}
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}
.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 16px 16px 16px 16px;
}
input:checked + .slider {
  background-color: #2196F3;
}
input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}
input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}
.slider.round:before {
  border-radius: 50%;
}
span.slider {
    border-radius: 16px 16px 16px 16px;
}
</style>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid ">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
 
                    <div class="col-md-12 ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Settings</li>
                        </ol>
                       
                    </div>
                    <!-- <div class=""> -->
                        <!-- <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
                    <!-- </div> -->
                </div>
<?php $aproval=''; ?>
@if(!empty($options))
 <?php 
 
  foreach($options as $option)
  {
       if($option->coulmn_name == 'aproval')
      {
         $aproval= $option->coulmn_value; 
      }
       if($option->coulmn_name == 'paypal')
      {
         $paypal= $option->coulmn_value; 
      }
       if($option->coulmn_name == 'paypal_sandbox')
      {
         $paypal_sandbox = $option->coulmn_value; 
      }
     if($option->coulmn_name == 'paypal_live')
      {
         $paypal_live  = $option->coulmn_value; 
      }
      if($option->coulmn_name == 'paypal_mode')
      {
         $paypal_mode   = $option->coulmn_value; 
      }
     
      
  }
  
 ?>

@endif
               
                <!-- ============================================================== -->
                <!-- Projects of the month -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div>
                                        <h4 class="card-title"><span class="lstick"></span>Settings</h4>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12 col-12">
                                        <ul class="nav nav-tabs profile-tab" role="tablist">
                                            
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#Question">Questions</a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#menu1">Payment Gateway</a>
                                            </li>
                                            <!--li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                                            <li><a data-toggle="tab" href="#menu3">Menu 3</a></li-->
                                        </ul>
                        
                                        <div class="tab-content">
                                            <div id="Question" class="tab-pane active" role="tabpanel">
                                            
                                              <form method="POST" data-next="" class="contactus" data-action="{{url('admin/addoptions')}}"  class="mt-4"> 
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                          @csrf
                                                           <input type="hidden" name="pages" value="Settings">
                                                           <div class="form-group my-4">
                                                                 <label class="switch">
                                                                  <input type="checkbox" class="checkb" @if(!empty($aproval)) @if($aproval=='1') checked  @endif @endif>
                                                                  <span class="slider"></span>
                                                                </label>
                                                                
                                                                <label class="ml-3 mt-2">Approval</label>
                                                            </div>
                                                            </div>
                                                            <input type="hidden" name="aproval" class="aproval" @if(!empty($aproval)) value="{{$aproval}}" @else value="0" @endif>
                                                            
                                                            <div class="form-group col-12">
                                                              <button class="btn btn-info font-14 sbtconatct">Save</button>  
                                                            </div>
                                                        </div>
                                                   
                                                </form>
                                          
                                           
                                            </div>
                                           
                                            <div id="menu1" class="tab-pane" role="tabpanel">
                                                 <form method="POST" data-next="" class="contactus" data-action="{{url('admin/addoptions')}}"  class="mt-4"> 
                                                            <div class="row">
                                                               
                                                                  @csrf
                                                                   <input type="hidden" name="pages" value="Settings">
                                                                   <!--div class="form-group mb-0">
                                                                       <label>Paypal</label>
                                                                         <label class="switch">
                                                                          <input type="checkbox" class="checkb" @if(!empty($paypal)) @if($paypal=='1') checked  @endif @endif>
                                                                          <span class="slider"></span>
                                                                        </label>
                                                                    </div---->
                                                                  
                                                     <div class="col-md-6">
                            						   <fieldset class="form-group mt-4 mb-3">
                            						     
                                                            <label class="switch">
                                						       <input type="checkbox" class="checkpaypal" @if(!empty($paypal)) @if($paypal=='1') checked  @endif @endif>
                                						        <span class="slider"></span>
                        						            </label>
                        						            
                            						        <label class="ml-3 mt-2">Paypal</label>
                                                          </fieldset>
                            						</div>    
                            						<input type="hidden" value="<?=$paypal_mode;?>" class="payMod">
                                                 	<div class="col-md-12 paypal_mode"  @if(!empty($paypal)) @if($paypal=='1')  style="display:block;"   @endif @else  style="display:none;" @endif>
                            						   <fieldset class="form-group mb-2">
                            						      <label for="site_title">Paypal Mode</label>
                            						      <br>
                                                        <input type="radio"   name="paypal_mode"  id="sand" value="0" {{ ($paypal_mode=='0') ? 'checked' : '' }} style="display:inline;"><label class="font-12 pl-3" for="sand">&nbsp;&nbsp; Sandbox &nbsp;&nbsp; </label>
                                                        
                                                        <input type="radio" name="paypal_mode" id="live" value="1" {{ ($paypal_mode=='1') ? 'checked' : '' }} style="display:inline;"><label class="font-12 pl-3" for="live">&nbsp;&nbsp; Live  </label>
                            						      
                            						  </fieldset>
                            						</div>
                            						<div class="col-md-12 paypal_sandbox" 
                                                    @if(!empty($paypal))
                            						@if($paypal=='1')
                            						@if($paypal_mode=='0') 
                            						
                            				      	style="display:block;" 
                            				      	
                            				      	@else  style="display:none;" @endif
                            				      	@else style="display:none;" @endif
                            				      	@else style="display:none;" @endif
                            				      		>
                            						   <fieldset class="form-group mb-3">
                            						      <label for="site_title">Paypal Sandbox Client ID</label>
                            						      <input type="text" class="form-control"  name="paypal_sandbox" placeholder="Paypal Sandbox Client ID" value="{{ $paypal_sandbox }}">
                            						  </fieldset>
                            						</div>
                            						
                            						<div class="col-md-12 paypal_live"  @if(!empty($paypal))
                            						@if($paypal=='1')
                            						@if($paypal_mode=='1') 
                            						
                            				      	style="display:block;" 
                            				      	
                            				      	@else  style="display:none;" @endif
                            				      	@else style="display:none;" @endif
                            				      	@else style="display:none;" @endif>
                            						   <fieldset class="form-group mb-3">
                            						      <label for="site_title">Paypal Live Client ID</label>
                            						      <input type="text" class="form-control" name="paypal_live"  placeholder="Paypal Live Client ID" value="{{ $paypal_live }}">
                            						  </fieldset>
                            						</div>
                            						
                            					
                                                        <input type="hidden" name="paypal" class="paypal" @if(!empty($paypal)) value="{{$paypal}}" @else value="0" @endif>
                                                        <div class="form-group col-12">
                                                          <button class="btn btn-info font-14 sbtconatct">Save</button>  
                                                        </div>
                                                    </div>
                                               
                                            </form>
                                                
                                            </div>
                                            <!--div id="menu2" class="tab-pane fade">
                                            <h3>Menu 2</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                            </div>
                                            <div id="menu3" class="tab-pane fade">
                                            <h3>Menu 3</h3>
                                            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                            </div-->
                                        </div>
                                    </div>
                                </div>
               
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
           

         

@include('admin/layouts.footer')
<script>
jQuery(".checkb").click(function(){
   
        if(this.checked == true)
        {
            $('.aproval').val('1');
        }else
        {
             $('.aproval').val('0');
        }
        
});

jQuery("#sand").click(function(){
              $('.paypal_live').hide();
              $('.paypal_sandbox').show();
        
});
jQuery("#live").click(function(){
              $('.paypal_live').show();
              $('.paypal_sandbox').hide();
        
});
jQuery(".checkpaypal").click(function(){
   
        if(this.checked == true)
        {
            $('.paypal').val('1');
            $('.paypal_mode').show();
            if($('.payMod').val() == '0'){
              $('.paypal_sandbox').show();
            }
            else{
              $('.paypal_live').show();  
            }
        }else
        {
             $('.aproval').val('0');
              $('.paypal_mode').hide();
             $('.paypal_live').hide();
              $('.paypal_sandbox').hide();
        }
        
});
</script>
