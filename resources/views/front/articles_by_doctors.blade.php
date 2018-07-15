@extends('layouts.front')



@section('title')
    <title>KPJ Advisor series</title>
@stop

@section('content')
    
    <!-- Sub Page Banner
			============================================= -->
		  <!-- InstanceBeginEditable name="EditRegion1" -->
          <section class="sub-page-banner2 text-center" data-stellar-background-ratio="0.3">
            <div class="overlay"></div>
              <div class="container">
                <h1 class="entry-title">Articles by Doctors</h1>
                <!--<p>Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile.</p>-->
              </div>
            </section>
          <!-- InstanceEndEditable -->
    <!-- Sub Page Content
			============================================= -->
    <!-- InstanceBeginEditable name="EditRegion2" -->
    <div id="sub-page-content" class="clearfix">
        
				<div class="container">
                	
					
					<div class="row blog-wrapper">
                    
						
							<div class="col-md-8 clearfix">
                            	
								<h2 class="bordered light">Articles by <span>Doctors</span></h2>
								<div class="col-md-6">
                                    <article class="blog-item blog-full-width">
                                        
                                        <div class="blog-thumbnail">
                                            <img src="images/articles_by_doctors/kesedaran_penting_hindar_kanser_serviks/img_dr_andi.jpg" alt="Kesedaran Penting Hindar Kanser Serviks">
                                        </div>
                                        <div class="blog-full-width-date">
                                            <p class="day">13</p><p class="monthyear">MAR 2016</p>
                                        </div>
                                        <div class="blog-content">
                                            <h4 class="blog-title"><a href="{{url('articlesDetails')}}">Kesedaran Penting Hindar Kanser Serviks</a></h4>
                                            <p class="blog-meta">By: <a href="#">Dr Andi Anggeriana Andi Asri</a> | Specialty: <a href="specialty_gynae_oncology.html">Gynae-Oncology</a>, <a href="specialty_orthopaedic_surgery.html">Obstetric &amp; Gynaecology</a></p>
                                            <p>Jangan pandang remeh jika didatangi darah haid lebih banyak dan berpanjangan daripada biasa. Dan jika telah menopaus tetapi tiba-tiba terdapat pendarahan seperti haid serta sakit melampau di bahagian serviks, berjumpalah doktor atau jalani ujian pap smear setahun sekali.</p>
                                            <a href="{{url('articlesDetails')}}" class="btn btn-danger btn-mini btn-rounded">READ MORE</a>
                                        </div>
                                        
                                    </article>
                                </div><!-- end col-md-6 -->


                                <div class="col-md-6 clearfix">
                                    
                                    <article class="blog-item blog-full-width">
                                        
                                        <div class="blog-thumbnail">
                                            <img src="images/articles_by_doctors/img_not_available.jpg" alt="">
                                        </div>
                                        <div class="blog-full-width-date">
                                            <p class="day">28</p><p class="monthyear">FEB 2016</p>
                                        </div>
                                        <div class="blog-content">
                                            <h4 class="blog-title"><a href="{{url('articlesDetails')}}">Sample Article Title by Doctor</a></h4>
                                            <p class="blog-meta">By: <a href="#">Dr Name</a> | Specialty: <a href="#">Sample text</a></p>
                                            <p>Sample text, sample text, sample text, sample text. Sample text, sample text, sample text, sample text. Sample text, sample text, sample text, sample text. Sample text, sample text, sample text, sample text. Sample text, sample text, sample text, sample text. </p>
                                            <a href="{{url('articlesDetails')}}" class="btn btn-danger btn-mini btn-rounded">READ MORE</a>
                                        </div>
                                        
                                    </article>
                                    
                                    
                                </div><!-- end col-md-6 -->
                            
                       	   </div><!-- end col-md-8 -->
                            
                            
                            
                           <!-- Sidebar
                            ============================================= -->
                            <aside class="col-md-4">
                                
                                    
                                    <!-- Archives
                                    ============================================= -->
                                    <div class="sidebar-widget clearfix">
                                        
                                        <h2 class="bordered light">Article <span>Archives</span></h2>
                                        
                                        <ul class="archives">
                                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>2015</a> (3)</li>
                                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>2014</a> (0)</li>
                                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>2013</a> (0)</li>
                                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>2012</a> (0)</li>
                                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>2011</a> (0)</li>
                                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>2010</a> (0)</li>
                                        </ul>
                                        
                                    </div>
                                    
                                    
                                    <!-- upcoming events start -->
                                    <h2 class="bordered light">Latest <span>News</span></h2>
                                    <div class="panel-group" id="accordion">
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title active">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                              <span><i class="fa fa-plus fa-minus"></i></span>Pemeriksaan Kesihatan &amp; Suntikan Vaksin
                                            </a>
                                          </h4>
                                        </div>
                                        
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                          <div class="panel-body">
                                            <p>One of Kuala Lumpur's first private hospitals made a historic change today, changing its name from Sentosa Medical Centre to KPJ Sentosa KL Specialist Hosiptal (KPJ Sentosa).</p>
                                            {{--<a href="">- Read More</a>--}}
                                          </div>
                                        </div>
                                      </div>
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                              <span><i class="fa fa-plus"></i></span>Our brand new Labour Ward at KPJ Sentosa KL Specialist Hospital                                    
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                          <div class="panel-body">
                                            <p>Planning for your delivery soon, our comfortable and cosy should fit your requirement. With comfortable waiting lounge.</p>
                                            {{--<a href="news_detail.html">- Read More</a>--}}
                                          </div>
                                        </div>
                                      </div>
                                      
                                      <div class="clearfix margin-bottom-20"></div>
                                      <p class="text-center"><a href="{{url('latest_news')}}" class="btn btn-danger btn-mini btn-rounded">View All News</a></p>
                                      <div class="clearfix margin-bottom-40"></div>
                                      <!-- end upcoming events -->
                                       
                                    </div><!-- end accordion -->
                                    
                                    
                                    <!-- health calendar start -->
                                    <h2 class="bordered light">Health <span>Calendar</span></h2>
                                    
                                    <div class="panel-group" id="accordion-visitor">
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title active">
                                            <a data-toggle="collapse" data-parent="#accordion-visitor" href="#collapseThree">
                                              <span><i class="fa fa-plus fa-minus"></i></span>Sample Title for Health Event 1
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse in">
                                          <div class="panel-body">
                                            <p>Sample text, sample text, sample text, sample text, sample text...</p>
                                            {{--<a href="health_calendar_detail.html">- Read More</a>--}}
                                          </div>
                                        </div>
                                      </div>
                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion-visitor" href="#collapseFour">
                                              <span><i class="fa fa-plus"></i></span>Sample Title for Health Event 2
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse">
                                          <div class="panel-body">
                                            <p>Sample text, sample text, sample text, sample text, sample text...</p>
                                            {{--<a href="health_calendar_detail.html">- Read More</a>--}}
                                          </div>
                                        </div>
                                      </div>
                                    
                                    </div><!-- end accordion -->
                                    
                                    <!-- end health calendar -->
                                      
                                                        
                          </aside>  
                            
  
							
						</div><!-- end row -->
						
					</div><!-- end container -->
                    
                    
		
        
    
  
			</div><!--end sub-page-content-->
    <!-- InstanceEndEditable -->
    <!--end sub-page-content-->
    
    
	<div class="solid-row"></div>
    
@stop