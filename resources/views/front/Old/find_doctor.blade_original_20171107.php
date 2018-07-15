@extends('layouts.front')

 @section('title')
    <title>Find a doctor</title>
  @stop

@section('content')
  {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
  {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>--}}
  {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{----}}
 <!-- Sub Page Banner
			============================================= -->
			<section class="sub-page-banner2 text-center" data-stellar-background-ratio="0.3">
				
				<div class="overlay"></div>
				
		  <div class="container">
					<h1 class="entry-title">Find Doctor</h1>
					<!--<p>Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile.</p>-->
				</div>
				
			</section>

	
	
    		<!-- Sub Page Content
			============================================= -->

    		<div id="sub-page-content" class="clearfix">
              
              <!-- find doctor
                ============================================= -->
              <section class="no-bg-img clearfix">
                <div class="container">
                  <h2 class="light bordered">Find <span>Doctor</span></h2>
                  
                  <!-- end row -->
                </div>
                <!-- end container -->
              </section>
              <div class="container">
                <!-- BEGIN Doctor SECTION -->
                <section class="gallery no-padding">
                  <h5 class="pull-left"><span>Filter by Specialty</span></h5>
                  <!-- GALLERY NAV -->
                  <div class="gallery-filter-nav">
                    <div class="filter active" data-filter="all">All Doctors</div>
                    -
                    <div class="filter" data-filter=".anaesthesiology">Anaesthesiology</div>
                    -
                    <div class="filter" data-filter=".cardiology">Cardiology</div>
                    -
                    <div class="filter" data-filter=".dermatology">Dermatology</div>
                    -
                    <div class="filter" data-filter=".ent-otorhinolaryngology">Ear, Nose &amp; Throat (Head &amp; Neck) Surgery</div>
                    -
                    <div class="filter" data-filter=".gastroenterology">Gastroenterology</div>
                    -
                    <div class="filter" data-filter=".general-medicine">General Medicine</div>
                    -
                    <div class="filter" data-filter=".general-surgery">General Surgery</div>
                    -
                    <div class="filter" data-filter=".gynae-oncology">Gynae-Oncology</div>
                    -
                    <div class="filter" data-filter=".internal-medicine">Internal Medicine</div>
                    -
                    <div class="filter" data-filter=".nephrology">Nephrology</div>
                    -
                    <div class="filter" data-filter=".neurology">Neurology</div>
                    -
                    <div class="filter" data-filter=".neurosurgery">Neurosurgery</div>
                    -
                    <div class="filter" data-filter=".obstetric-gynaecology">Obstetric &amp; Gynaecology</div>
                    -
                    <div class="filter" data-filter=".orthopaedic-surgery">Orthopaedic &amp; Trauma Surgery</div>
                    -
                    <div class="filter" data-filter=".orthopedic-spine">Orthopedic / Spine Surgery</div>
                    -
                    <div class="filter" data-filter=".ophthalmology">Ophthalmology</div>
                    -
                    <div class="filter" data-filter=".paediatrics">Paediatrics</div>
                    -
                    <div class="filter" data-filter=".psychiatry">Psychiatry</div>
                    -
                    <div class="filter" data-filter=".radiology-imaging">Radiology</div>
                    -
                    <div class="filter" data-filter=".urology">Urology</div>
                    - </div>
                  <div id="Container-gallery">
                    <ul class="four-column-gallery clearfix">
                      
                      <li class="mix anaesthesiology Dr_Mohd_Yani_Bin">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Mohd_Yani_Bin_Bahari.jpg')}}" alt="Dr Mohd Yani Bin Bahari - Anaesthesiology (Resident Consultant)"> <a href="images/find_doctor/img_Mohd_Yani_Bin_Bahari.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Mohd Yani Bin Bahari - Anaesthesiology (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_anaesthesiology.html">Dr Mohd Yani Bin Bahari</a><span>Anaesthesiology</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Mohd_Yani_Bin">Dr Mohd Yani Bin Bahari</a><span>Anaesthesiology</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix anaesthesiology Dr_Mohd_Rapi_Abd">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Mohd_Rapi_Abd_Rahman.jpg')}}" alt="Dr Mohd Rapi Abd Rahman - Anaesthesiology (Resident Consultant)"> <a href="images/find_doctor/img_Mohd_Rapi_Abd_Rahman.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Mohd Rapi Abd Rahman - Anaesthesiology (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_anaesthesiology.html">Dr Mohd Rapi Abd Rahman</a><span>Anaesthesiology</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Mohd_Rapi_Abd">Dr Mohd Rapi Abd Rahman</a><span>Anaesthesiology</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      
                      <li class="mix anaesthesiology Dr_Hariyah_Binti">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Hariyah_Binti_Yusop.jpg')}}" alt="Dr Hariyah Binti Yusop - Anaesthesiology (Resident Consultant)"> <a href="images/find_doctor/img_Hariyah_Binti_Yusop.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Hariyah Binti Yusop - Anaesthesiology (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_anaesthesiology.html">Dr Hariyah Binti Yusop</a><span>Anaesthesiology</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Hariyah_Binti">Dr Hariyah Binti Yusop</a><span>Anaesthesiology</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix cardiology Dato_Dr_Mohinder">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Mohinder_Singh.jpg')}}" alt="Dato Dr Mohinder Singh - Cardiology (Resident Consultant)"> <a href="images/find_doctor/img_Mohinder_Singh.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dato Dr Mohinder Singh - Cardiology (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_cardiology.html">Dato Dr Mohinder Singh</a><span>Cardiology</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dato_Dr_Mohinder">Dato Dr Mohinder Singh</a><span>Cardiology</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix ent-otorhinolaryngology Dr_Vijay_khanijow">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Vijay_Khanijow.jpg')}}" alt="Dr Vijay Khanijow - Ear, Nose &amp; Throat (Head &amp; Neck) Surgery (Resident Consultant)"> <a href="images/find_doctor/img_Vijay_Khanijow.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Vijay Khanijow - Ear, Nose &amp; Throat (Head &amp; Neck) Surgery (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_ent_otorhinolaryngology.html">Dr Vijay Khanijow</a><span>Ear, Nose &amp; Throat (Head &amp; Neck) Surgery</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Vijay_khanijow">Dr Vijay Khanijow</a><span>Ear, Nose &amp; Throat (Head &amp; Neck) Surgery</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix ent-otorhinolaryngology Dr_Muhamad_Noorhisyam">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Muhamad_Noorhisyam_Salleh_Ajak.jpg')}}" alt="Dr Muhamad Noorhisyam Salleh Ajak - Ear, Nose &amp; Throat (Head &amp; Neck) Surgery (Resident Consultant)"> <a href="images/find_doctor/img_Muhamad_Noorhisyam_Salleh_Ajak.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Muhamad Noorhisyam Salleh Ajak - Ear, Nose &amp; Throat (Head &amp; Neck) Surgery (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_ent_otorhinolaryngology.html">Dr Muhamad Noorhisyam Salleh Ajak</a><span>Ear, Nose &amp; Throat (Head &amp; Neck) Surgery</span>--}}
                             <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Muhamad_Noorhisyam">Dr Muhamad Noorhisyam Salleh Ajak</a><span>Ear, Nose &amp; Throat (Head &amp; Neck) Surgery</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      
                      <li class="mix ophthalmology Dr_Mohd_Harris">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Mohd_Harris_Lu.jpg')}}" alt="Dr Mohd Harris Lu - Ophthalmology (Resident Consultant)"> <a href="images/find_doctor/img_Mohd_Harris_Lu.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Mohd Harris Lu - Ophthalmology (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_ophthalmology.html">Dr Mohd Harris Lu</a><span>Ophthalmology</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Mohd_Harris">Dr Mohd Harris Lu</a><span>Ophthalmology</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix gastroenterology Dr_Thein_Soo">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Thein_Soo_Sun.jpg')}}" alt="Dr Thein Soo Sun - Gastroenterology (Resident Consultant)"> <a href="images/find_doctor/img_Thein_Soo_Sun.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Thein Soo Sun - Gastroenterology (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_gastroenterology.html">Dr Thein Soo Sun</a><span>Gastroenterology</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Thein_Soo">Dr Thein Soo Sun</a><span>Gastroenterology</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix general-medicine Dr_Mohan_Arasu">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Mohan_Arasu.jpg')}}" alt="Dr Mohan Arasu - General Medicine (Resident Consultant)"> <a href="images/find_doctor/img_Mohan_Arasu.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Mohan Arasu - General Medicine (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_general_medicine.html">Dr Mohan Arasu</a><span>General Medicine</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Mohan_Arasu">Dr Mohan Arasu</a><span>General Medicine</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix general-medicine Dr_Lim_Kim">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Lim_Kim_Meng.jpg')}}" alt="Dr Lim Kim Meng - General Medicine (Resident Consultant)"> <a href="images/find_doctor/img_Lim_Kim_Meng.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Lim Kim Meng - General Medicine (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_general_medicine.html">Dr Lim Kim Meng</a><span>General Medicine</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Lim_Kim">Dr Lim Kim Meng</a><span>General Medicine</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      
                      <li class="mix general-surgery Dr_Ng_Soong">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Ng_Soong_Lek.jpg')}}" alt="Dr Ng Soong Lek - General Surgery (Resident Consultant)"> <a href="images/find_doctor/img_Ng_Soong_Lek.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Ng Soong Lek - General Surgery (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_general_surgery.html">Dr Ng Soong Lek</a><span>General Surgery</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Ng_Soong">Dr Ng Soong Lek</a><span>General Surgery</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix general-surgery Dr_Chan_Weng">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Chan_Weng_Chiew.jpg')}}" alt="Dr Chan Weng Chiew - General Surgery (Resident Consultant)"> <a href="images/find_doctor/img_Chan_Weng_Chiew.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Chan Weng Chiew - General Surgery (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_general_surgery.html">Dr Chan Weng Chiew</a><span>General Surgery</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Chan_Weng">Dr Chan Weng Chiew</a><span>General Surgery</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                       
                      <li class="mix general-surgery Dr_S_Sivabalan">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Sivabalan.jpg')}}" alt="Dr S Sivabalan - General Surgery (Resident Consultant)"> <a href="images/find_doctor/img_Sivabalan.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr S Sivabalan - General Surgery (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_general_surgery.html">Dr S Sivabalan</a><span>General Surgery</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_S_Sivabalan">Dr S Sivabalan</a><span>General Surgery</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix general-surgery Dr_K_A">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_KA_Rangammal.jpg')}}" alt="Dr K. A. Rangammal - General Surgery (Resident Consultant)"> <a href="images/find_doctor/img_KA_Rangammal.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr K. A. Rangammal - General Surgery (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_general_surgery.html">Dr K. A. Rangammal</a><span>General Surgery</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_K_A">Dr K. A. Rangammal</a><span>General Surgery</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      
                      <li class="mix nephrology Dr_Sharmila_Datuk">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Sharmila_Datuk_Karuthu.jpg')}}" alt="Dr Shamila Datuk Karuthu - Kidney/Nephrology (Resident Consultant)"> <a href="images/find_doctor/img_Sharmila_Datuk_Karuthu.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Shamila Datuk Karuthu - Kidney/Nephrology (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_gynae_oncology.html">Dr Shamila Datuk Karuthu</a><span>Kidney/Nephrology</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Sharmila_Datuk">Dr Shamila Datuk Karuthu</a><span>Kidney/Nephrology</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix neurology Dr_Rahimah_S">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Rahimah_S_Shah.jpg')}}" alt="Dr Rahimah S Shah - Neurology (Resident Consultant)"> <a href="images/find_doctor/img_Rahimah_S_Shah.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Rahimah S Shah - Neurology (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_neurology.html">Dr Rahimah S Shah</a><span>Neurology</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Rahimah_S">Dr Rahimah S Shah</a><span>Neurology</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      
                      <li class="mix obstetric-gynaecology Dr_Lam_Num">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Lam_Num_Fatt.jpg')}}" alt="Dr Lam Num Fatt - Obstetric &amp; Gynaecology (Resident Consultant)"> <a href="images/find_doctor/img_Lam_Num_Fatt.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Lam Num Fatt - Obstetric &amp; Gynaecology (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_obstetric_gynaecology.html">Dr Lam Num Fatt</a><span>Obstetric &amp; Gynaecology</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Lam_Num">Dr Lam Num Fatt</a><span>Obstetric &amp; Gynaecology</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix obstetric-gynaecology Dr_Liew_Yuh">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Liew_Yuh_Ming.jpg')}}" alt="Dr (MDM) Liew Yuh Ming - Obstetric &amp; Gynaecology (Resident Consultant)"> <a href="images/find_doctor/img_Liew_Yuh_Ming.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr (MDM) Liew Yuh Ming - Obstetric &amp; Gynaecology (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_obstetric_gynaecology.html">Dr (MDM) Liew Yuh Ming</a><span>Obstetric &amp; Gynaecology</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Liew_Yuh">Dr (MDM) Liew Yuh Ming</a><span>Obstetric &amp; Gynaecology</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li> 
                      <li class="mix obstetric-gynaecology Dr_Yogaraj">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Yogaraj_Ramanathan.jpg')}}" alt="Dr Yogaraj Ramanathan - Obstetric &amp; Gynaecology (Resident Consultant)"> <a href="images/find_doctor/img_Yogaraj_Ramanathan.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Yogaraj Ramanathan - Obstetric &amp; Gynaecology (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_obstetric_gynaecology.html">Dr Yogaraj Ramanathan</a><span>Obstetric &amp; Gynaecology</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Yogaraj">Dr Yogaraj Ramanathan</a><span>Obstetric &amp; Gynaecology</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix obstetric-gynaecology Dr_Andi_Asri">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Andi_Anggeriana.jpg')}}" alt="Dr Andi Anggeriana Andi Asri - Obstetric &amp; Gynaecology (Resident Consultant)"> <a href="images/find_doctor/img_Andi_Anggeriana.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Andi Anggeriana Andi Asri - Obstetric &amp; Gynaecology (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_obstetric_gynaecology.html">Dr Andi Anggeriana Andi Asri</a><span>Obstetric &amp; Gynaecology</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Andi_Asri">Dr Andi Anggeriana Andi Asri</a><span>Obstetric &amp; Gynaecology</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix orthopaedic-surgery Dr_Jagjit_Singh">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Jagjit_Singh.jpg')}}" alt="Dr Jagjit Singh - Orthopaedic &amp; Trauma Surgery (Resident Consultant)"> <a href="images/find_doctor/img_Jagjit_Singh.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Jagjit Singh - Orthopaedic &amp; Trauma Surgery (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_orthopaedic_trauma_surgery.html">Dr Jagjit Singh</a><span>Orthopaedic &amp; Trauma Surgery</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Jagjit_Singh">Dr Jagjit Singh</a><span>Orthopaedic &amp; Trauma Surgery</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix orthopaedic-surgery Dr_Leong_Kin">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Leong_Kin_Khan.jpg')}}" alt="Dr Leong Kin Khan - Orthopaedic &amp; Trauma Surgery (Resident Consultant)"> <a href="images/find_doctor/img_Leong_Kin_Khan.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Leong Kin Khan - Orthopaedic &amp; Trauma Surgery (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_orthopaedic_trauma_surgery.html">Dr Leong Kin Khan</a><span>Orthopaedic &amp; Trauma Surgery</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Leong_Kin">Dr Leong Kin Khan</a><span>Orthopaedic &amp; Trauma Surgery</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix orthopedic-spine Dr_Ahmad">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Ahmad_Norsharid.jpg')}}" alt="Dr Ahmad Norsharid - Orthopedic / Spine Surgery (Resident Consultant)"> <a href="images/find_doctor/img_Ahmad_Norsharid.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Ahmad Norsharid - Orthopedic / Spine Surgery (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_orthopedic_spine_surgery.html">Dr Ahmad Norsharid</a><span>Orthopedic / Spine Surgery</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Ahmad">Dr Ahmad Norsharid</a><span>Orthopedic / Spine Surgery</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix paediatrics Dr_Chong_Soo">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Chong_Soo_Lim.jpg')}}" alt="Dr Chong Soo Lim - Paediatrics (Resident Consultant)"> <a href="images/find_doctor/img_Chong_Soo_Lim.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Chong Soo Lim - Paediatrics (Resident Consultant)" ></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_paediatrics.html">Dr Chong Soo Lim</a><span>Paediatrics</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Chong_Soo">Dr Chong Soo Lim</a><span>Paediatrics</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix paediatrics Dr_Padmanapan">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Padmanapan.jpg')}}" alt="Dr Padmanapan Karupiah - Paediatrics (Resident Consultant)"> <a href="images/find_doctor/img_Padmanapan.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Padmanapan Karupiah - Paediatrics (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_paediatrics.html">Dr Padmanapan Karupiah</a><span>Paediatrics</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Padmanapan">Dr Padmanapan Karupiah</a><span>Paediatrics</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix radiology-imaging Dr_Abd_Samad">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Abd_Samad_Bin_Sakijan.jpg')}}" alt="Dato Dr Abd Samad Bin Sakijan - Radiology (Resident Consultant)"> <a href="images/find_doctor/img_Abd_Samad_Bin_Sakijan.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dato Dr Abd Samad Bin Sakijan - Radiology (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_radiology.html">Dato Dr Abd Samad Bin Sakijan</a><span>Radiology</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Abd_Samad">Dato Dr Abd Samad Bin Sakijan</a><span>Radiology</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                      <li class="mix urology Dr_Vikramjit_Singh">
                        <div class="gallery-item">
                          <div class="gallery-item-thumb"> <span class="overlay"></span> <img src="{{asset('images/find_doctor/img_Vikramjit_Singh_Saren.jpg')}}" alt="Dr Vikramjit Singh Saren - Urology (Resident Consultant)"> <a href="images/find_doctor/img_Vikramjit_Singh_Saren.jpg" data-fancybox-group="portfolio" class="hover-button-plus fancybox" title="Dr Vikramjit Singh Saren - Urology (Resident Consultant)"></a> </div>
                          <div class="gallery-item-info">
                            {{--<p><a href="front_html/doctor_profile_urology.html">Dr Vikramjit Singh Saren</a><span>Urology</span>--}}
                            <p><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#Dr_Vikramjit_Singh">Dr Vikramjit Singh Saren</a><span>Urology</span>
                            <div class="text-primary small">(Resident Consultant)</div>
                            <p></p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- Modal -->
                  <div id="Dr_Mohd_Rapi_Abd" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Anaesthesiology</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Mohd_Rapi_Abd_Rahman.jpg')}}" width="234" alt="Mohd Rapi Abd Rahman" title="">
							  
                              <div class="height10"></div>
                              <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="height10"></div>

                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>Dr Mohd Rapi Abd Rahman<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Anaesthesiology</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">BScMed (UKM), MD (UKM), M.Med Anaes (UKM), Fellowship in Cardiothoracic Anaesthesia and Transplant (Newcastle, UK)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                            </div>

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Mohd_Yani_Bin" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Anaesthesiology</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Mohd_Yani_Bin_Bahari.jpg')}}" width="234" alt="Dr Mohd Yani Bin Bahari" title="">
                              <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>
                            </div>

                            <div class="doctors-detail">
                              <h4>Dr Mohd Yani Bin Bahari<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Anaesthesiology</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS (Mal), M.Med (Anaes) (UKM)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                            </div>

                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Hariyah_Binti" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Anaesthesiology</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Hariyah_Binti_Yusop.jpg')}}" width="234" alt="Dr Hariyah Binti Yusop " title="">
                              <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>Dr Hariyah Binti Yusop <span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Anaesthesiology</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">M.D (UKM), M.Med (Anaesthesiology)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                            </div>

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dato_Dr_Mohinder" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Cardiology</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Mohinder_Singh.jpg')}}" width="234" alt="Dato Dr Mohinder Singh" title="">
                              <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
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
                        </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Muhamad_Noorhisyam" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Ear, Nose &amp; Throat (Head &amp; Neck) Surgery</h4>
                        </div>
                        <div class="modal-body">

                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Muhamad_Noorhisyam_Salleh_Ajak.jpg')}}" width="234" alt="Dr Muhamad Noorhisyam Salleh Ajak" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
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

                          </div>

                        </div>

                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="Dr_Vijay_khanijow" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Ear, Nose &amp; Throat (Head &amp; Neck) Surgery</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Vijay_Khanijow.jpg')}}" width="234" alt="Dr Vijay Khanijow" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>Dr Vijay Khanijow<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Ear, Nose &amp; Throat (Head &amp; Neck) Surgery</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS (Mal), FRCS (Ed), AM</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                            </div>

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Mohd_Harris" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Ophthalmology</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Mohd_Harris_Lu.jpg')}}" width="234" alt="Dr Mohd Harris Lu" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>Dr Mohd Harris Lu<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Ophthalmology</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS, FRCS (Glasg), FRCOphth (UK)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">Monday, Wednesday &amp; Friday: 10.00am-12.30pm / 2.00pm-4.00pm<br/>Saturday: 10.00am-12.30pm</label></p>
                            </div>

                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Thein_Soo" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Gastroenterology</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Thein_Soo_Sun.jpg')}}" width="234" alt="Dr Thein Soo Sun" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>Dr Thein Soo Sun<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Gastroenterology</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS(Manipal), MMed(Internal Medicine)(UKM,CMIA(Mal),AM(Mal) Fellowship in Gastroenterology (Malaysia)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                            </div>

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Mohan_Arasu" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: General Medicine</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Mohan_Arasu.jpg')}}" width="234" alt="Dr Mohan Arasu" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>Dr Mohan Arasu<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">General Medicine</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS (Mal), MRCP (UK)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">Monday-Friday: 10.00am-1.30pm<br/>Saturday: 10.00am-12.00pm</label></p>
                            </div>

                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Lim_Kim" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: General Medicine</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Lim_Kim_Meng.jpg')}}" width="234" alt="Dr Lim Kim Meng" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>
                            </div>

                            <div class="doctors-detail">
                              <h4>Dr Lim Kim Meng<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">General Medicine</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS (India) and Master of Internal Medicine, UM.</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">Monday-Friday: 9.00am-12.30pm / 2.00pm-5.00pm<br/>Saturday: 9.00am-12.30pm</label></p>
                            </div>

                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  
                  <div id="Dr_Chan_Weng" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: General Surgery</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Chan_Weng_Chiew.jpg')}}" width="234" alt="Dr Chan Weng Chiew" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>Dr Chan Weng Chiew<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">General Surgery</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS (Mal), FRCS (Edin)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">Tuesday &amp; Thursday: 9.30am-12.30pm / 2.00pm-5.00pm<br/>Saturday: 9.30am-12.30pm</label></p>
                            </div>

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Ng_Soong" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: General Surgery</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Ng_Soong_Lek.jpg')}}" width="234" alt="Dr Ng Soong Lek" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>Dr Ng Soong Lek<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">General Surgery</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS (Mys), FRCS (Edin)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">Monday, Wednesday &amp; Friday: 9.00am-12.30pm / 2.30pm-5.00pm</label></p>
                            </div>

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_K_A" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: General Surgery</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_KA_Rangammal.jpg')}}" width="234" alt="Dr K. A. Rangammal" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>
                            </div>

                            <div class="doctors-detail">
                              <h4>Dr K. A. Rangammal<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">General Surgery</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS (B.H.U., India), FRCS (Ire), DMAS (Delhi), AMM</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">Monday, Wednesday &amp; Friday: 9.30am-12.30pm / 2.00pm-5.00pm<br/>Tuesday &amp; Thursday: 2.00pm-5.00pm<br/>Saturday: 9.30am-12.30pm</label></p>
                            </div>

                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_S_Sivabalan" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: General Surgery</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Sivabalan.jpg')}}" width="234" alt="Dr S Sivabalan" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>
                            </div>

                            <div class="doctors-detail">
                              <h4>Dr S Sivabalan<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">General Surgery</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS (MDS), FRCS</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                            </div>

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Andi_Anggeriana" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Gynae-Oncology</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Andi_Anggeriana.jpg')}}" width="234" alt="Dr Andi Anggeriana Andi Asri" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>Dr Andi Anggeriana Andi Asri<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Gynae-Oncology</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MD, MMED Obs and Gynae (UM), CGO (Singapore), Certified Gynaecological Oncologist</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                            </div>

                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Sharmila_Datuk" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Nephrology</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Sharmila_Datuk_Karuthu.jpg')}}" width="234" alt="Dr Shamila Datuk Karuthu" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
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

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Rahimah_S" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Neurology</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Rahimah_S_Shah.jpg')}}" width="234" alt="Dr Rahimah S Shah" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>Dr Rahimah S Shah<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Neurology</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS (Mal), MRCP (UK)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">Monday-Friday: 10.30am-12.30pm / 2.00pm-2.30pm<br/>Saturday: 10.30am-12.30pm</label></p>
                            </div>

                          </div>



                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Andi_Asri" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Obstetric-Gynaecology</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Andi_Anggeriana.jpg')}}" width="234" alt="Dr Andi Anggeriana Andi Asri" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>Dr Andi Anggeriana Andi Asri<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Obstetric &amp; Gynaecology</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MD, MMED Obs and Gynae (UM), CGO (Singapore), Certified Gynaecological Oncologist</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                            </div>

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Lam_Num" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Obstetric-Gynaecology</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Lam_Num_Fatt.jpg')}}" width="234" alt="Dr Lam Num Fatt" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>Dr Lam Num Fatt<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Obstetric &amp; Gynaecology</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MD (UKM), MRCOG (Lond)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">Monday, Wednesday &amp; Thursday: 9.00am-12.30pm / 2.00pm-5.00pm<br/>Saturday: 9.00am-12.30pm</label></p>
                            </div>

                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Liew_Yuh" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Obstetric-Gynaecology</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Liew_Yuh_Ming.jpg')}}" width="234" alt="Dr (MDM) Liew Yuh Ming" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>
                            </div>

                            <div class="doctors-detail">
                              <h4>Dr (MDM) Liew Yuh Ming<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Obstetric &amp; Gynaecology</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS, Master Obstetrician and Gynaecology(UKM)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">Tuesday, Wednesday &amp; Friday: 8.30am-12.30pm / 2.00pm-4.00pm<br/>Saturday: 8.30am-12.30pm</label></p>
                            </div>

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Yogaraj" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Obstetric-Gynaecology</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Yogaraj_Ramanathan.jpg')}}" width="234" alt="Dr Yogaraj Ramanathan" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>
                            </div>

                            <div class="doctors-detail">
                              <h4>Dr Yogaraj Ramanathan<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Obstetric &amp; Gynaecology</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS(Mysore), MRCOG, FRCOG(LONDON)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">Monday &amp; Saturday: 9.00am-12.30pm<br/>Wednesday: 9.00am-12.30pm / 2.00pm-5.00pm </label></p>
                            </div>

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Abdul_Jamal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Orthopaedic-Surgery</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Abdul_Jamal.jpg')}}" width="234" alt="Dr Abdul Jamal">
                              <ul class="list-unstyled social2" style="text-align: center">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>
                            </div>

                            <div class="doctors-detail">
                              <h4>Dr Abdul Jamal <span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Orthopaedic &amp; Trauma Surgery</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MB (UKM), MS ORTHO (UKM), AM, CMIA, Fellowship in Arthroplasty and Anthroscopy (Aus)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                            </div>

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Lee_Woo" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Orthopaedic-Surgery</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_not_available.jpg')}}" width="234" alt="Dr Lee Woo Guan" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>Dr Lee Woo Guan<span>Visiting Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Orthopaedic &amp; Trauma Surgery</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS(UM), MMed(Singapore), FRCS(Ed), Fellowship In Trauma and Sports Injury (Mississippi)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                            </div>

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Leong_Kin" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Orthopaedic-Surgery</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Leong_Kin_Khan.jpg')}}" width="234" alt="Dr Leong Kin Khan" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>
                            </div>

                            <div class="doctors-detail">
                              <h4>Dr Leong Kin Khan<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Orthopaedic &amp; Trauma Surgery</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MD (UKM), MS (ORTH)(UKM), FRCS (Edin), FRCS (Ire), FICS (USA)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                            </div>

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Jagjit_Singh" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Orthopaedic-Surgery</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Jagjit_Singh.jpg')}}" width="234" alt="Dr Jagjit Singh" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>
                            </div>

                            <div class="doctors-detail">
                              <h4>Dr Jagjit Singh<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Orthopaedic &amp; Trauma Surgery</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS (S'pore), FRCS (Edin), AM (Mal), LLB (Hons)(Lond)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">Monday, Wednesday &amp; Friday: 2.00pm-5.00pm<br/>Tuesday &amp; Thursday: 9.00am-12.30pm / 2.00pm-5.00pm<br/>Saturday: 9.00am-12.30pm</label></p>
                            </div>

                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Ahmad" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Orthopedic-Spine</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Ahmad_Norsharid.jpg')}}" width="234" alt="Dr Ahmad Norsharid" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
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

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Chong_Soo" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Paediatrics</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Chong_Soo_Lim.jpg')}}" width="234" alt="Dr Chong Soo Lim" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
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

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Padmanapan" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Paediatrics</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Padmanapan.jpg')}}" width="234" alt="Dr Padmanapan" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>Dr Padmanapan Karupiah<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Paediatrics</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS (Madras), MRCP (UK), DCH (Lond)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">Monday-Friday: 10.00am-12.30pm / 2.00pm-5.00pm<br/>Saturday: 10.00am-12.30pm</label></p>
                            </div>

                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Abd_Samad" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Radiology-Imaging</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Abd_Samad_Bin_Sakijan.jpg')}}" width="234" alt="Dato Dr Abd Samad Bin Sakijan" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                              <div class="text-center">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeueYc4RXkhLeXeknup1KMRRPqXQ64VfghygjWZJ2nHgXGNIg/viewform" class="btn btn-sm btn-default">Get Appointment</a>
                              </div>
                              <div class="height10"></div>

                            </div>


                            <div class="doctors-detail">
                              <h4>Dato Dr Abd Samad Bin Sakijan<span>Resident Consultant</span></h4>
                              <p><label class="heading">Speciality</label><label class="detail">Radiology</label></p>
                              <p><label class="heading">Degrees</label><label class="detail">MBBS (Malaya), DMRD (Lond), FRCR (UK)</label></p>
                              <p><label class="heading">Experience</label><label class="detail">-</label></p>
                              <p><label class="heading">Details</label><label class="detail">-</label></p>
                              <p><label class="heading">Clinic Hours</label><label class="detail">-</label></p>
                            </div>

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div id="Dr_Vikramjit_Singh" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Doctor Profile:: Urology</h4>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-12 padding-bottom-60 clearfix">

                            <div class="doctors-img"><img src="{{asset('images/find_doctor/img_Vikramjit_Singh_Saren.jpg')}}" width="234" alt="Dr Vikramjit Singh Saren" title="">
                               <ul class="list-unstyled social2" style="text-align: center !important;">
                                <li><a href="#." class="fb"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
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

                          </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer" style="text-align: center !important;">
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:none !important;">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>

                  <!-- End Modal -->
                </section>
                <!-- END GALLERY SECTION -->
              </div>
    		  <!-- end container -->
              
              
              
              
              
            </div>

    		<!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
    

@stop


 @section('end_scripts')
      <script type="text/javascript">
          $('.lem').removeClass('active')
          $('.lem_doctors').addClass('active')
      </script>
 @stop
