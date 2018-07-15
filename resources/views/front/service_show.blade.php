@extends('layouts.front')

@section('title')
    <title>{{ strip_tags($service->title)}}</title>
  @stop


@section('content')
	 <section class="sub-page-banner9 text-center" data-stellar-background-ratio="0.3">
      <div class="overlay"></div>
      <div class="container">
        <h1 class="entry-title">Specialty</h1>
        <!--<p>Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile.</p>-->
      </div>
    </section>
    <!-- InstanceEndEditable -->
    <!-- Sub Page Content-->
    		<!-- InstanceBeginEditable name="EditRegion2" -->
    		<div id="sub-page-content" class="no-padding-bottom clearfix">
    	
				
				<!-- about us Start -->
			    <div class="container">
					
					<h2 class="light bordered main-title"><span>{{ strip_tags($service->title)}}</span></h2>
                    
                    <div class="row">
					
						<div class="col-md-12">								  

							{!!$service->details !!}
                            <!-- accordion start -->

                                <?php
                                $needle   = "Helpful Information for Patients";
                                ?>

                                @if(!empty($helpful_info))
                                    <h5>Helpful Information for Patients</h5>
                                @endif
                                <div class="panel-group" id="accordion_new">
                                    @foreach($helpful_info as $key=>$info)
                                        <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title {{$key==0?'active':''}}">
                                            <a data-toggle="collapse" data-parent="#accordion_new" href="#collapse-{{$info['id']}}">
                                              <span><i class="fa {{$key==0?'fa-plus fa-minus':'fa-plus'}}"></i></span>{{$info['title']}}</a>
                                          </h4>
                                        </div>

                                        <div id="collapse-{{$info['id']}}" class="panel-collapse collapse {{$key==0?'in':''}}">
                                          <div class="panel-body">
                                                {!! $info['details'] !!}
                                          </div>
                                        </div>
                                      </div>
                                        <!-- end panel default -->
                                    @endforeach
                                </div>
                                <!-- end accordion -->
						</div><!-- end col-md-12 -->
					</div><!-- end row -->
                </div><!-- end container -->
              
              
              <!-- Our Doctors List	-->
				<section class="doctors-list">

                    <div class="container">
						
						<h2 class="light bordered">Doctor <span>Profile</span></h2>

						<ul class="list-unstyled owl-carousel row" id="our-doctors-list">
							@if($service->id == 12)
							<li>

								<div class="doctors-img"><img src="{{asset('/images/find_doctor/img_Mohd_Rapi_Abd_Rahman.jpg')}}" width="234" alt="Dr Mohd Rapi Abd Rahman">
                                    <!--<ul class="list-unstyled social2">
                                        <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>-->
                                    <div class="height10"></div>
                                    <div class="text-center">
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                    </div>
                                    <div class="height10"></div>
                                </div>

                                <div class="doctors-detail">
                                    <h4>Dr Mohd Rapi Abd Rahman <span>Resident Consultant</span></h4>
                                    <p><label class="heading">Speciality</label><label class="detail">Anaesthesiology</label></p>
                                    <p><label class="heading">Degrees</label><label class="detail">BScMed (UKM), MD (UKM), M.Med Anaes (UKM), Fellowship in Cardiothoracic Anaesthesia and Transplant (Newcastle, UK)</label></p>
                                    <p><label class="heading">Experience</label><label class="detail">-</label></p>
                             		<p><label class="heading">Details</label><label class="detail">-</label></p>
                              		<p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                                </div>
							
								
							</li>
							
							<li>
								
								<div class="doctors-img"><img src="{{asset('/images/find_doctor/img_Mohd_Yani_Bin_Bahari.jpg')}}" width="234" alt="Dr Mohd Yani Bahari">
                                    <!--<ul class="list-unstyled social2">
                                        <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>-->
                                    <div class="height10"></div>
                                    <div class="text-center">
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                    </div>
                                    <div class="height10"></div>
                                </div>
                                
                                <div class="doctors-detail">
                                    <h4>Dr Mohd Yani Bahari <span>Resident Consultant</span></h4>
                                    <p><label class="heading">Speciality</label><label class="detail">Anaesthesiology</label></p>
                                    <p><label class="heading">Degrees</label><label class="detail">MBBS (Mal), M.Med (Anaes) (UKM)</label></p>
                                    <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              		<p><label class="heading">Details</label><label class="detail">-</label></p>
                              		<p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                                </div>
                                                                
							</li>
							
							<li>
								
								<div class="doctors-img"><img src="{{asset('/images/find_doctor/img_Hariyah_Binti_Yusop.jpg')}}" width="234" alt="Dr Hariyah binti Yusop">
                                    <!--<ul class="list-unstyled social2">
                                        <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>-->
                                    <div class="height10"></div>
                                    <div class="text-center">
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                    </div>
                                    <div class="height10"></div>
                                </div>
                                
                                <div class="doctors-detail">
                                    <h4>Dr Hariyah binti Yusop <span>Resident Consultant</span></h4>
                                    <p><label class="heading">Speciality</label><label class="detail">Anaesthesiology</label></p>
                                    <p><label class="heading">Degrees</label><label class="detail">M.D (UKM), M.Med (Anaesthesiology)</label></p>
                                    <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              		<p><label class="heading">Details</label><label class="detail">-</label></p>
                              		<p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                                </div>
							
								
							</li>
							
							@endif
                            @if($service->id == 13)
                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Mohinder_Singh.jpg')}}" width="234" alt="Dato Dr Mohinder Singh" title="">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>

                                        </div>


                                        <div class="doctors-detail">
                                            <h4>Dato Dr Mohinder Singh<span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Cardiology</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS, MRCP (UK), FRCPI, Dip Cardiology (Lond)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Monday-Friday: 8.30am-12.30pm / 2.00pm-3.30pm<br/>Saturday: 8.30am-12.30pm</label></p>
                                        </div>

                                    </li>
                            @endif
                            <!--@if($service->id == 14)
                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_not_available.jpg')}}" width="234" alt="">
                                            <ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Please provide info. <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Dermatology</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">Please provide info.</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">Please provide info.</label></p>
                                            <p><label class="heading">Details</label><label class="detail">Please provide info.</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Please provide info.</label></p>
                                        </div>


                                    </li>
                            @endif-->

                            @if($service->id == 15)
                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Muhamad_Noorhisyam_Salleh_Ajak.jpg')}}" width="234" alt="Dr Muhamad Noorhisyam Salleh Ajak" title="">
                                            <!--<ul class="list-unstyled social2" style="text-align: center !important;">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>


                                        <div class="doctors-detail">
                                            <h4>Dr Muhamad Noorhisyam Salleh Ajak<span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Ear, Nose &amp; Throat (Head &amp; Neck) Surgery</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">M.B.B.S, M.S (ORL &amp; Head and Neck Surgery)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Monday - Friday: 10.00am-12.30pm / 2.00pm-5.00pm<br/>Saturday: 10.00am-12.30pm</label></p>
                                        </div>

                                    </li>

                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Vijay_Khanijow.jpg')}}" width="234" alt="Dr Vijay Khanijow">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Vijay Khanijow <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Ear, Nose &amp; Throat (Head &amp; Neck) Surgery</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS (Mal), FRCS (Ed), AM</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                                        </div>


                                    </li>

                                @endif

                            @if($service->id == 16)

                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Mohan_Arasu.jpg')}}" width="234" alt="Dr Mohan Arasu">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Mohan Arasu <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">General Medicine</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS (Mal), MRCP (UK)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Monday-Friday: 10.00am-1.30pm<br/>Saturday: 10.00am-12.00pm</label></p>
                                        </div>


                                    </li>

                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Lim_Kim_Meng.jpg')}}" width="234" alt="Dr Lim Kim Meng">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Lim Kim Meng <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">General Medicine</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS (India) and Master of Internal Medicine, UM.</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Monday-Friday: 9.00am-12.30pm / 2.00pm-5.00pm<br/>Saturday: 9.00am-12.30pm</label></p>
                                        </div>


                                    </li>
                            @endif

                            @if($service->id == 17)
                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Chan_Weng_Chiew.jpg')}}" width="234" alt="Dr Chan Weng Chiew">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Chan Weng Chiew <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">General Surgery</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS (Mal), FRCS (Edin)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Tuesday &amp; Thursday: 9.30am-12.30pm / 2.00pm-5.00pm<br/>Saturday: 9.30am-12.30pm</label></p>
                                        </div>


                                    </li>

                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Ng_Soong_Lek.jpg')}}" width="234" alt="Dr Ng Soong Lek">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Ng Soong Lek  <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">General Surgery</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS (Mys), FRCS (Edin)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Monday, Wednesday &amp; Friday: 9.00am-12.30pm / 2.30pm-5.00pm</label></p>
                                        </div>


                                    </li>


                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_KA_Rangammal.jpg')}}" width="234" alt="Dr K.A. Rangammal">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr K.A. Rangammal <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">General Surgery</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS (B.H.U., India), FRCS (Ire), DMAS (Delhi), AMM</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Monday, Wednesday &amp; Friday: 9.30am-12.30pm / 2.00pm-5.00pm<br/>Tuesday &amp; Thursday: 2.00pm-5.00pm<br/>Saturday: 9.30am-12.30pm</label></p>
                                        </div>


                                    </li>


                                   <!-- <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_not_available.jpg')}}" width="234" alt="Dr S Sivabalan">
                                            <ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr S Sivabalan  <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">General Surgery</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS (MDS), FRCS</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                                        </div>


                                    </li>-->

                                @endif

                            @if($service->id == 18)

                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Thein_Soo_Sun.jpg')}}" width="234" alt="Dr Thein Soo Sun">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Thein Soo Sun <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Gastroenterology</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS(Manipal), MMed(Internal Medicine)(UKM,CMIA(Mal),AM(Mal) Fellowship in Gastroenterology (Malaysia)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                                        </div>


                                    </li>
                            @endif

                            <!--@if($service->id == 19)
                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Andi_Anggeriana.jpg')}}" width="234" alt="Dr Andi Anggeriana Andi Asri">
                                            <ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Andi Anggeriana Andi Asri <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Gynae-Oncology</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MD, MMED Obs and Gynae (UM), CGO (Singapore), Certified Gynaecological Oncologist</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">Please provide info.</label></p>
                                            <p><label class="heading">Details</label><label class="detail">Please provide info.</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Please provide info.</label></p>
                                        </div>


                                    </li>
                            @endif

                            @if($service->id == 20)
                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_not_available.jpg')}}" width="234" alt="">
                                            <ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Please provide info. <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Internal Medicine</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">Please provide info.</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">Please provide info.</label></p>
                                            <p><label class="heading">Details</label><label class="detail">Please provide info.</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Please provide info.</label></p>
                                        </div>


                                    </li>
                            @endif-->

                            @if($service->id == 21)
                                    <li>
                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Sharmila_Datuk_Karuthu.jpg')}}" width="234" alt="Dr Shamila Datuk Karuthu" title="">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>
                                        <div class="doctors-detail">
                                            <h4>Dr Shamila Datuk Karuthu<span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Kidney/Nephrology</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBChB ( Shef,UK), MRCP (UK), ABIM (USA), Nephrology (UPENN, USA)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Monday-Friday: 9.00am-12.30pm / 2.00pm-5.00pm<br/>Saturday: 9.00am-12.30pm</label></p>
                                        </div>



                                    </li>

                                @endif

                            @if($service->id == 22)
                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Rahimah_S_Shah.jpg')}}" width="234" alt="Dr Rahimah S Shah">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Rahimah S Shah <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Neurology</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS (Mal), MRCP (UK)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Monday-Friday: 10.30am-12.30pm / 2.00pm-2.30pm<br/>Saturday: 10.30am-12.30pm</label></p>
                                        </div>


                                    </li>
                            @endif

                            <!--@if($service->id == 23)
                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_not_available.jpg')}}" width="234" alt="">
                                            <ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Please provide info. <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Neurosurgery</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">Please provide info.</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">Please provide info.</label></p>
                                            <p><label class="heading">Details</label><label class="detail">Please provide info.</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Please provide info.</label></p>
                                        </div>


                                    </li>


                                @endif-->

                            @if($service->id == 24)
                                    <!--<li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Andi_Anggeriana.jpg')}}" width="234" alt="Dr Andi Anggeriana Andi Asri">
                                            <ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Andi Anggeriana Andi Asri <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Obstetric &amp; Gynaecology</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MD, MMED Obs and Gynae (UM), CGO (Singapore), Certified Gynaecological Oncologist</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                                        </div>


                                    </li>-->

                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Lam_Num_Fatt.jpg')}}" width="234" alt="Dr Lam Num Fatt">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Lam Num Fatt <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Obstetric &amp; Gynaecology</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MD (UKM), MRCOG (Lond)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Monday, Wednesday &amp; Thursday: 9.00am-12.30pm / 2.00pm-5.00pm<br/>Saturday: 9.00am-12.30pm</label></p>
                                        </div>

                                    </li>

                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Liew_Yuh_Ming.jpg')}}" width="234" alt="Dr (MDM) Liew Yuh Ming">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr (MDM) Liew Yuh Ming <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Obstetric &amp; Gynaecology </label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS, Master Obstetrician and Gynaecology(UKM)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Tuesday, Wednesday &amp; Friday: 8.30am-12.30pm / 2.00pm-4.00pm<br/>Saturday: 8.30am-12.30pm</label></p>
                                        </div>


                                    </li>

                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Yogaraj_Ramanathan.jpg')}}" width="234" alt="Dr Yogaraj Ramanathan">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Yogaraj Ramanathan <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Obstetric &amp; Gynaecology </label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS(Mysore), MRCOG, FRCOG(LONDON)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Monday &amp; Saturday: 9.00am-12.30pm<br/>Wednesday: 9.00am-12.30pm / 2.00pm-5.00pm</label></p>
                                        </div>


                                    </li>
                            @endif

                            @if($service->id == 25)
                            		<li>
                                    	
                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Ahmad_Norsharid.jpg')}}" width="234" alt="Dr Ahmad Norsharid" title="">
                                        <!--<ul class="list-unstyled social2">
                                            <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>-->
                                        <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        
        
                                    </div>
                                    
                                    
                                    <div class="doctors-detail">
                                        <h4>Dr Ahmad Norsharid<span>Resident Consultant</span></h4>
                                        <p><label class="heading">Speciality</label><label class="detail">Orthopedic &amp; Spine Surgery</label></p>
                                        <p><label class="heading">Degrees</label><label class="detail">-</label></p>
                                        <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                        <p><label class="heading">Details</label><label class="detail">-</label></p>
                                        <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                                    </div>
                                        
                                    </li>
                                    
                                    <!--<li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Abdul_Jamal.jpg')}}" width="234" alt="Dr Abdul Jamal">
                                            <ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Abdul Jamal <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Orthopaedic &amp; Trauma Surgery</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MB (UKM), MS ORTHO (UKM), AM, CMIA, Fellowship in Arthroplasty and Anthroscopy (Aus)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                                        </div>


                                    </li>-->

                                    

                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Leong_Kin_Khan.jpg')}}" width="234" alt="Dr Leong Kin Khan">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Leong Kin Khan <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Orthopaedic &amp; Trauma Surgery</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MD (UKM), MS (ORTH)(UKM), FRCS (Edin), FRCS (Ire), FICS (USA)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                                        </div>


                                    </li>

                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Jagjit_Singh.jpg')}}" width="234" alt="Dr Jagjit Singh">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Jagjit Singh <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Orthopaedic &amp; Trauma Surgery</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS (S'pore), FRCS (Edin), AM (Mal), LLB (Hons)(Lond)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Monday, Wednesday &amp; Friday: 2.00pm-5.00pm<br/>Tuesday &amp; Thursday: 9.00am-12.30pm / 2.00pm-5.00pm<br/>Saturday: 9.00am-12.30pm</label></p>
                                        </div>


                                    </li>
                            @endif

                            @if($service->id == 26)
                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Mohd_Harris_Lu.jpg')}}" width="234" alt="Dr Mohd Harris Lu">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Mohd Harris Lu <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Ophthalmology</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS, FRCS (Glasg), FRCOphth (UK)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Monday, Wednesday &amp; Friday: 10.00am-12.30pm / 2.00pm-4.00pm<br/>Saturday: 10.00am-12.30pm</label></p>
                                        </div>


                                    </li>


                                @endif

                            @if($service->id == 27)

                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Chong_Soo_Lim.jpg')}}" width="234" alt="Dr Chong Soo Lim">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Chong Soo Lim<span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Paediatrics</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS (Mal), MRCP (UK), DCH (Lond)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Monday-Friday: 10.00am-12.30pm / 2.00pm-4.30pm<br/>Saturday: 10.00am-12.30pm</label></p>
                                        </div>


                                    </li>

                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Padmanapan.jpg')}}" width="234" alt="Dr Padmanapan Karupiah">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Padmanapan Karupiah <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Paediatrics</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS (Madras), MRCP (UK), DCH (Lond)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Monday-Friday: 10.00am-12.30pm / 2.00pm-5.00pm<br/>Saturday: 10.00am-12.30pm</label></p>
                                        </div>

                                    </li>
                            @endif

                            <!--@if($service->id == 28)
                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_not_available.jpg')}}" width="234" alt="">
                                            <ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Please provide info.<span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Psychiatry</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">Please provide info.</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">Please provide info.</label></p>
                                            <p><label class="heading">Details</label><label class="detail">Please provide info.</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Please provide info.</label></p>
                                        </div>


                                    </li>


                                @endif-->

                            @if($service->id == 29)
                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Abd_Samad_Bin_Sakijan.jpg')}}" width="234" alt="Dato Dr Abd Samad Bin Sakijan">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dato Dr Abd Samad Bin Sakijan <span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Radiology</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS (Malaya), DMRD (Lond), FRCR (UK)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                                        </div>


                                    </li>
                            @endif

                            @if($service->id == 30)
                                    <li>

                                        <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Vikramjit_Singh_Saren.jpg')}}" width="234" alt="Dr Vikramjit Singh Saren">
                                            <!--<ul class="list-unstyled social2">
                                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>-->
                                            <div class="height10"></div>
                                            <div class="text-center">
                                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                                            </div>
                                            <div class="height10"></div>
                                        </div>

                                        <div class="doctors-detail">
                                            <h4>Dr Vikramjit Singh Saren<span>Resident Consultant</span></h4>
                                            <p><label class="heading">Speciality</label><label class="detail">Urology</label></p>
                                            <p><label class="heading">Degrees</label><label class="detail">MBBS (Man), M. Surgery (Mal), M.B Urology (Board Cert'd), FRCS (Urology), Glasgow, Fellowship in Uro-Oncology (Adeline, Aust)</label></p>
                                            <p><label class="heading">Experience</label><label class="detail">-</label></p>
                                            <p><label class="heading">Details</label><label class="detail">-</label></p>
                                            <p><label class="heading">Clinic Hours</label><label class="detail">Monday-Thursday: 9.00am-12.30pm / 2.30pm-5.00pm<br/>Saturday: 9.00am-12.30pm</label></p>
                                        </div>


                                    </li>

                                @endif
						</ul>
                    </div>
					
				</section>
                
                
                
                <!-- Find Health Information -->
	@include('common.health_info')     
  			  	
			
		  </div>
    		<!-- InstanceEndEditable -->
    		<!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
    
	
@stop


@section('end_scripts')

   <script type="text/javascript">
          $('.lem').removeClass('active')
          $('.lem_services').addClass('active')
          jQuery('#accordion_new .panel-title a').click(function(e) {
              jQuery(this).parent().find('span i').toggleClass('fa-minus');
              jQuery(this).parent(".panel-title").parent(".panel-heading").parent(".panel-default").siblings(".panel-default").find('.panel-title a span i').removeClass('fa-minus');
          });
          jQuery('#accordion_new .panel-title').click(function(e) {
              jQuery(this).toggleClass('active');
              jQuery(this).parent(".panel-heading").parent(".panel-default").siblings(".panel-default").find('.panel-title').removeClass('active');
          });
      </script>
@stop
