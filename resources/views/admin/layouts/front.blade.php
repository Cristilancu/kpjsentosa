<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <base href="" />
	<!-- Basic Page Needs
 
     ================================================== -->
	 
	 <meta charset="utf-8">
	 
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
	 <link rel="icon" type="image/png" href="/images/favicon.png">
	
	 @yield('title')
    
     <meta name="description" content="">
    
     <meta name="keywords" content="">
    
     <meta name="author" content="">

	 
	 <!-- Mobile Specific Metas
    
     ================================================== -->
    
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    
     <meta name="format-detection" content="telephone=no">

	 
	 <!-- Web Font
	 ============================================= -->
	 <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">
	
	
	<!-- CSS
    
     ================================================== -->
	 
	 
	<!-- Color
	============================================= -->
	<link rel="stylesheet" id="color" href="/css/blue.css">
    
	
	<!-- Medicom Style
	============================================= -->
    <link rel="stylesheet" href="/css/medicom.css">

	
	<!-- This page
	============================================= -->
    <link href="/css/revolution_style.css" rel="stylesheet">
	<link href="/css/settings.css" rel="stylesheet">
	
	
	<!-- Bootstrap
	============================================= -->
    <link rel="stylesheet" href="/css/bootstrap.css">


	<!-- Skin
	============================================= -->
	<link href="/css/light.css" rel="stylesheet">	

	  @if(Session::has('message'))
     <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    @endif
     

    
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


	
	<!-- Header Scripts
    
    ================================================== -->
	
	<script src="/js/modernizr-2.6.2.min.js"></script>
    
    <!-- for popup onload-->

    
	</head>
    <body onLoad="autoClick();" class="fixed-header">
        <!-- for popup onload -->
        @if($setting=Helper::hasSetting('popup')) 
         <a class="fancybox-media" id="onload" href="{{$setting->details}}"></a>
        @else
        <a class="fancybox-media" id="onload" href="/images/promotion_packages/img_love_your_liver_campaign_large.jpg"></a>
        @endif
    
        
<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">
    
				
		<!-- Header
		============================================= -->
		<header id="header" class="medicom-header medical-nav">
		
			<!-- Top Row
			============================================= -->
			<div class="solid-row"></div>
        
			<div class="container">
				
				
				<!-- Primary Navigation
				============================================= -->
				<nav class="navbar navbar-default" role="navigation">
				
					<!-- Brand and toggle get grouped for better mobile display
					============================================= -->
					
					<div class="navbar-header">
						
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
						
						<a class="navbar-brand" href="/"><img src="/images/index/logo.png" alt="" title=""></a>
					
					</div>
				
					
					<div class="collapse navbar-collapse navbar-right" id="primary-nav">
						
						<ul class="nav navbar-nav">
							
							<li class="active lem lem_home">
								<a href="/"><i class="fa fa-plus"></i>Home</a>						
								
							</li>
							
							<li class="lem lem_visitors">
								<a href="/patients_visitors"><i class="fa fa-plus"></i>Patients &amp;<br/> Visitors</a>
								
							</li>
						  
							<li class="lem lem_services">
								<a href="services_procedures"><i class="fa fa-plus"></i>Services &amp;<br/> Procedures</a>
								
							</li>
						  
							<li class="lem lem_screening">
								<a href="/screening_packages"><i class="fa fa-plus"></i>Screening &amp;<br/> Packages</a>
								
							</li>
						  
							<li class="lem lem_partners">
								<a href="/gp_partners"><i class="fa fa-plus"></i>GPs &amp;<br/> Partners</a>
								
							</li>
						  
							<li class="lem lem_doctors">
								<a href="/find_doctor"><i class="fa fa-plus"></i>Find<br/> Doctor</a>
								
							</li>
						  
						  
							<li class="last lem lem_contact">
								<a href="/contact_us"><i class="fa fa-plus"></i>Contact<br/> Us</a>
								
							</li>
						  
						</ul>
						
					</div>
					
				</nav>

			</div>

    </header>




@yield('content')


<footer id="footer" class="light">
    	
		<div class="container">
        	
			<div class="row">
			
            	<div class="col-md-3">
                    
					<!-- Footer Widget
					============================================= -->
					<div class="footer-widget">
                        
						<h4><span>Site Links</span></h4>
                        
						<ul class="footer-nav list-unstyled clearfix">
                            <li><a href="/"><i class="fa fa-long-arrow-right"></i>Home</a></li>
                            <li><a href="/about-us"><i class="fa fa-long-arrow-right"></i>About Us</a></li>
                            <li><a href="/patients_visitors"><i class="fa fa-long-arrow-right"></i>Patients &amp; Visitors</a></li>
                            <li><a href="/patient_transfer"><i class="fa fa-long-arrow-right"></i>Patient Transfer</a></li>
                            <li><a href="/services_procedures"><i class="fa fa-long-arrow-right"></i>Services &amp; Procedures</a></li>
                            <li><a href="/screening_packages"><i class="fa fa-long-arrow-right"></i>Screening &amp; Packages</a></li>
                            <li><a href="/promotion_packages"><i class="fa fa-long-arrow-right"></i>Promotion Packages</a></li>
                            <li><a href="/gp_partners"><i class="fa fa-long-arrow-right"></i>GPs &amp; Partners</a></li>
                            <li><a href="/health_calendar"><i class="fa fa-long-arrow-right"></i>Health Calendar</a></li>
                            <li><a href="/kpj_advisor_series"><i class="fa fa-long-arrow-right"></i>KPJ Advisor Series</a></li>
                            <li><a href="/contact_us"><i class="fa fa-long-arrow-right"></i>Contact Us</a></li>
                            <li><a href="/latest_events"><i class="fa fa-long-arrow-right"></i>Events</a></li>
                            <li><a href="/latest_news"><i class="fa fa-long-arrow-right"></i>Latest News</a></li>
                            <li><a href="/careers"><i class="fa fa-long-arrow-right"></i>Career</a></li>
                            <li><a href="/faq"><i class="fa fa-long-arrow-right"></i>FAQ</a></li>
                        </ul>
						
                    </div>
					
                </div>
				
            	<div class="col-md-3">
				
					<!-- Footer Widget
					============================================= -->
                	<div class="footer-widget">
                        
						<h4><span>newsletter</span></h4>
                        
						<div class="newsletter clearfix">
                        
							<i class="fa fa-envelope"></i>
                            <p class="newsletter-text">Sign up with your name and email to get latest news &amp; events, promotions &amp; packages.</p>
						
						<div class="success" id="message-news" style="display:none;">Thank you! You have successfully subscribed.</div>
						<form name="newsletter_form" id="newsletter_form" method="post" action="/subscribe" onSubmit="return ">
                            <input type="text" name="name" id="news_name" placeholder="Your Name" onKeyPress="removeChecks();">
                            <input type="email" name="email" id="news_email_address" placeholder="Email Address" onKeyPress="removeChecks();">
                            <input type="submit" value="subscribe" class="btn btn-danger btn-rounded" onClick="">
                        </form>
						
                        </div>
                    </div>
					
                </div>
				
            	<div class="col-md-3">
				
					<!-- Footer Widget
					============================================= -->
					<div class="footer-widget">
						
						<h4><span>KPJ Other hospitals</span></h4>
						
						<ul class="footer-nav list-unstyled clearfix">
                            <li><a href="http://www.kpjjohor.com/" target="_blank"><i class="fa fa-long-arrow-right"></i>KPJ Johor Specialist Hospital</a></li>
                            <li><a href="http://www.kpjampang.com/" target="_blank"><i class="fa fa-long-arrow-right"></i>KPJ Ampang Puteri Specialist Hospital</a></li>
                            <li><a href="http://www.kpjselangor.kpjhealth.com.my/" target="_blank"><i class="fa fa-long-arrow-right"></i>KPJ Selangor Specialist Hospital</a></li>
                            <li><a href="http://www.kpjputeri.com/" target="_blank"><i class="fa fa-long-arrow-right"></i>Puteri Specialist Hospital</a></li>
                            <li><a href="http://www.kmc.kpjhealth.com.my/" target="_blank"><i class="fa fa-long-arrow-right"></i>Kedah Medical Centre</a></li>
                            <li><a href="http://www.kpjkuching.com/" target="_blank"><i class="fa fa-long-arrow-right"></i>Kuching Specialist Hospital</a></li>
                            <li><a href="http://www.kpjdamai.com/" target="_blank"><i class="fa fa-long-arrow-right"></i>Damai Specialist Centre</a></li>
                            <li><a href="http://kpjkajang.com/" target="_blank"><i class="fa fa-long-arrow-right"></i>KPJ Kajang Specialist Hospital</a></li>
                            <li><a href="http://www.kpjkluang.com/" target="_blank"><i class="fa fa-long-arrow-right"></i>Kluang Utama Specialist Hospital</a></li>
                            <li><a href="http://www.kpjklang.com/" target="_blank"><i class="fa fa-long-arrow-right"></i>KPJ Klang Specialist Hospital</a></li>
                            <li><a href="http://www.kpjpgsh.com/" target="_blank"><i class="fa fa-long-arrow-right"></i>Pasir Gudang Specialist Hospital</a></li>
                            <li><a href="http://www.kpjipoh.com/" target="_blank"><i class="fa fa-long-arrow-right"></i>KPJ Ipoh Specialist Hospital</a></li>
                            <li><a href="http://kpjdamansara.com/" target="_blank"><i class="fa fa-long-arrow-right"></i>KPJ Damansara Specialist Hospital</a></li>
                            <li><a href="http://www.kpjtawakkal.com/" target="_blank"><i class="fa fa-long-arrow-right"></i>KPJ Tawakkal Hospital</a></li>
                        </ul>
                        <a href="#">- View All Hospitals</a>
						
					</div>
					
                </div>
				
            	<div class="col-md-3">
                   
					<!-- Footer Widget
					============================================= -->
					<div class="footer-widget">
                    
						<h4><span>get in touch</span></h4>
                        
						<div class="contact-widget">
                        	<i class="fa fa-home"></i><p>KPJ Sentosa KL Specialist Hospital<br/>36 Jalan Cemor, Kompleks Damai, 50400 Kuala Lumpur.</p>
							<i class="fa fa-globe"></i><p><a href="http://www.kpjsentosa.com">www.kpjsentosa.com</a></p>
                            <i class="fa fa-phone"></i><p class="phone-number">(03) 4043-7166</p>
                            <i class="fa fa-print"></i><p class="phone-number">(03) 4043-7761</p>
                        </div>
						
						<ul class="social3 clearfix">
							<li><a href="https://www.facebook.com/KPJ-Sentosa-KL-Specialist-Hospital-Events-109237816094300/" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
						
                    </div>
					
                </div>
            </div>
        </div>
		
		
		<!-- Copyright
		============================================= -->
        <p class="copyright text-center">Copyright &copy; 2016 KPJ Sentosa KL Specialist Hospital. All rights reserved. Powered by: <a href="http://www.webqom.com/web_design.html" target="_blank">Web Design Malaysia</a> &amp; <a href="http://www.webqom.com/web_hosting.html" target="_blank">Web Hosting Malaysia</a>.</p>
        
		
		<!-- Footer Bottom
		============================================= -->
		<div class="container">
        	<div class="row">

            	<div class="col-md-12">
                	<p class="footer-bottom-text text-center">KPJ Sentosa KL Specialist Hospital is subject to the personal data protection principles under the Personal Data Protection Act 2010 (hereafter referred to as PDPA) with effect from 15 November 2013, which regulates the processing of personal data in commercial transactions. The terms "personal data", "processing" and "commercial transactions" shall have the meaning provided in the PDPA. <a href="privacy_policy">KPJ Privacy Policy</a> | <a href="terms_of_use">Terms of Use</a></p>
                </div>
            </div>
        </div>
		
		
    </footer>
		
		<!-- back to top -->
		<a href="#." class="back-to-top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
	
    </div><!--end #wrapper-->
	
    
	
	<!-- All Javascript 
	============================================= -->
	<script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.stellar.js"></script>
	<script src="/js/jquery-ui-1.10.3.custom.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/counter.js"></script>
    <script src="/js/waypoints.js"></script>
	<script src="/js/jquery.uniform.js"></script>
    <script src="/js/easyResponsiveTabs.js"></script>
	<script src="/js/jquery.fancybox.pack.js"></script>
	<script src="/js/jquery.fancybox-media.js"></script>
	<script src="/js/jquery.mixitup.js"></script>
	<script src="/js/forms-validation.js"></script>
	<script src="/js/jquery.jcarousel.min.js"></script>
	<script src="/js/jquery.easypiechart.min.js"></script>
	<script src="/js/scripts.js"></script>

	<!-- This page
	============================================= -->
	<script src="/js/jquery.themepunch.plugins.min.js"></script>			
    <script src="/js/jquery.themepunch.revolution.min.js"></script>
	

	   <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if(Session::has('message') || Session::has('success_message'))
    <script type="text/javascript">

    $(document).ready(function(){
          toastr.clear();
          toastr.success("{{Session::get('message')}}");
    })

    </script>
@endif

@if(Session::has('error'))
    <script type="text/javascript">

    $(document).ready(function(){
          toastr.clear();
          toastr.error("{{Session::get('error')}}");
    })

    </script>
@endif
    
	
	
    

	<script type="text/javascript">
	
	</script>

	<script type="text/javascript">
    $('.load_more').click(function(){
          var that= $(this);
          var type = $(this).attr('type');
          var page = $(this).attr('page');

          $.ajax({
              url:'/load_more?type='+type+'&page='+page,
              success:function(response){

                $(that).attr('page', parseInt(page)+1);
                $('#load_data').append(response);
              }
          })
    })
</script>
   @yield('end_scripts')

	
  </body>
</html>