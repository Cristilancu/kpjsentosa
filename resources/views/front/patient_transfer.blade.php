@extends('layouts.front')


@section('title')
    <title>Patient Transfers</title>
  @stop

@section('content')

<!-- Sub Page Banner
			============================================= -->
		  <!-- InstanceBeginEditable name="EditRegion1" -->
          <section class="sub-page-banner10 text-center" data-stellar-background-ratio="0.3">
            <div class="overlay"></div>
              <div class="container">
                <h1 class="entry-title">Patient Transfer</h1>
                <!--<p>Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile.</p>-->
              </div>
            </section>
          <!-- InstanceEndEditable -->
    <!-- Sub Page Content
			============================================= -->
    <!-- InstanceBeginEditable name="EditRegion2" -->
    <div id="sub-page-content" class="no-padding-bottom clearfix">
    	
				
				<!-- patient transfer Start
				============================================= -->
			    <div class="container">
					
					<h2 class="light bordered main-title">Patient <span>Transfer</span></h2>
                    
                    <div class="row">
					
						<div class="col-md-7">
						
							<p>Patient transfer is service that allows patient transfer to Sentosa Specialist Hospital due to medical needs. It can be made upon patient request or hospital due to inadequate medical services for specific medical needs.</p>
                            
                            <div class="panel-group" id="accordion">
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title active">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                              <span><i class="fa fa-plus fa-minus"></i></span><h4>For Patients</h4></a>
                                          </h4>
                                        </div>
                                        
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                          <div class="panel-body">
                                            <h5>Via referral from doctor</h5>
                            				<p>Please bring the referral letter from your doctor together with any information given by your doctor from your previous visits.</p>
                            				<p class="text-danger">* Arrangement to Sentosa Specialist Hospital has to be done by the individual or the hospital of transfer.</p>
                                          </div>
                                        </div>
                                      </div><!-- end panel default -->
                                      
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                              <span><i class="fa fa-plus"></i></span><h4>For Health Professionals</h4>
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                          <div class="panel-body">
                                          	 <h5>Through telephone referral</h5>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check"></i> Please call Sentosa Specialist Hospital (03) 4043-7166 to enquire for bed and admission availability.</li>
                                                <li><i class="fa fa-check"></i> OR Please call to the specialist doctor's office or A&amp;E service to check for service, bed, and admission availability.</li>
                                                <li><i class="fa fa-check"></i> Please provide a referral letter and a copy of patient's medical record.</li>
                                            </ul>
                                            <p>For more information regarding patient transfer, please contact our Customer Service at ext. 1288.</p>
                                            <p class="text-danger">* Arrangement to Sentosa Specialist Hospital has to be done by the individual or the hospital of transfer.</p>
                                          </div>
                                        </div>
                                        
                                      </div><!-- end panel default -->
                                      
                                      
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                              <span><i class="fa fa-plus"></i></span><h4>Ambulance Services</h4>
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                          <div class="panel-body">
                                          	 <p>Sentosa Medical Center has embarked on Ambulance Services effective July 2011. We provide immediate first aid services to patients, transportation to hospital for adults and infant with portable incubator and vertilator facilities and also shuttle patients from hospital to airport and pick up.</p>
                            				 <p>Any further information please call our direct line : (03) 4043-7166 for assistance / booking for ambulance services.</p>
                                          </div>
                                        </div>
                                        
                                      </div><!-- end panel default -->
                                      
                                      
                                       
                                      
                                      
                                    </div><!-- end accordion -->
                            
					
						</div><!-- end col-md-7 -->
						
						<div class="col-md-5">
						
							<div class="item">
								<img src="images/patient_transfer/img.jpg" width="467" class="img-rounded" alt="Patient Transfer">
							</div>
						
						</div><!-- end col-md-5 -->
					
					</div><!-- end row -->
					
					
                    				
				
			  </div><!-- end container -->
              <div class="height40"></div>
              
              
              <!-- Find Health Information
                ============================================= -->
              
              @include('common.health_info')
  			  	
			
		  </div>
    <!-- InstanceEndEditable -->
    <!--end sub-page-content-->
    
    
	<div class="solid-row"></div

@stop



 @section('end_scripts')
      <script type="text/javascript">
          $('.lem').removeClass('active')
          $('.lem_doctor').addClass('active')
      </script>
 @stop