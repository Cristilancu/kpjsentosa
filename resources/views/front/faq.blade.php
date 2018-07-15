@extends('layouts.front')

 @section('title')
    <title>Faq</title>
  @stop
@section('content')
	  <!-- Sub Page Banner
			============================================= -->
		  <!-- InstanceBeginEditable name="EditRegion1" -->
          <section class="sub-page-banner3 text-center" data-stellar-background-ratio="0.3">
            <div class="overlay"></div>
              <div class="container">
                <h1 class="entry-title">FAQ</h1>
              </div>
            </section>
          <!-- InstanceEndEditable -->
    <!-- Sub Page Content
			============================================= -->
    <!-- InstanceBeginEditable name="EditRegion2" -->
    <div id="sub-page-content" class="no-padding-bottom clearfix">
    	
				
				<!-- faq Start
				============================================= -->
			    <div class="container">
					
					<h2 class="light bordered main-title">Frequently Asked <span>Questions</span></h2>
                    
                    <div class="row">
					
						<div class="col-md-7">
						                            
                            <div class="panel-group" id="accordion">
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title active">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                              <span><i class="fa fa-plus fa-minus"></i></span>During admission, what kind of personal belongings should I bring?</a>
                                          </h4>
                                        </div>
                                        
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                          <div class="panel-body">
                                            <p>You may bring a small bag of toiletteries, hairbrush, robe and slippers. It is good if you could label you belongings. Whenever possible, please leave your valuable things such as jewelry at home. Sentosa will not take the responsilibility for any lost items but we will make every effort to find them. If your item is lost, please inform our nurse on-duty immediately.</p>
                                          </div>
                                        </div>
                                      </div><!-- end panel default -->
                                      
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                              <span><i class="fa fa-plus"></i></span>Do you have a screening packages?
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                          <div class="panel-body">
                                          	 <p>Yes, we do have 3 Executive Medical Screening Packages, ranging from RM150 - RM550. However, we can customize the package that suit individual needs.</p>
                                          </div>
                                        </div>
                                        
                                      </div><!-- end panel default -->
                                      
                                      
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                              <span><i class="fa fa-plus"></i></span>Do I have to place any deposit for my admission?
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                          <div class="panel-body">
                                          	 <p>Yes. Please refer to our Minimum Deposit page for further detail.</p>
                                          </div>
                                        </div>
                                        
                                      </div><!-- end panel default -->
                                      
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                              <span><i class="fa fa-plus"></i></span>Do I have to make any appointment to see the specialist?
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse">
                                          <div class="panel-body">
                                          	 <p>It is good if you can. Otherwise, we do accept walk-in patients to our hospital and it will be based on first come first serve.</p>
                                          </div>
                                        </div>
                                        
                                      </div><!-- end panel default -->
                                      
                                      
                                       
                                      
                                      
                                    </div><!-- end accordion -->
                            
					
						</div><!-- end col-md-7 -->
						
						<div class="col-md-5">
						
							<div class="item">
								<img src="/images/patient_transfer/img.jpg" width="437" class="img-rounded" alt="Patient Transfer">
							</div>
						
						</div><!-- end col-md-5 -->
					
					</div><!-- end row -->
					
					
                    				
				
			  </div><!-- end container -->
    
              
           @include('common.health_info')
            
    <!-- InstanceEndEditable -->
    <!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
    
@stop