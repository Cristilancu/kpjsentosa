@extends('layouts.admin')

@section('title')
  <title> KPJ Advisor Series Article :: Edit </title> 
@stop
@section('content')

  <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
        
        <div class="page-header-breadcrumb">
          <div class="page-heading hidden-xs">
            <h1 class="page-title">CMS Pages</h1>
          </div>
          
          <!-- InstanceBeginEditable name="EditRegion1" -->
          <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="/admin">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li>CMS Pages &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li><a href="/admin">KPJ Advisor Series Listing</a> &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li class="active">KPJ Advisor Series Article - Edit</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>KPJ Advsior Series Article <i class="fa fa-angle-right"></i> Edit</h2>
              <div class="clearfix"></div>
            
            @include('common.alerts')
              <div class="clearfix"></div>
              <p></p>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Info</div>
                  <div class="clearfix"></div>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
             <form action="/admin/kpj/{{$kpj->id}}/edit" onsubmit="getContent('line2','tit'); getContent('line3', 'det')" method="post">
                <div class="portlet-body"> note to programmer: the heading text and sub heading text below should follow the css style 100% in front end.
                <input type="hidden" name="title" id='tit'>
                  <div contenteditable="true" id='line1'>
                      <h1 class="entry-title">KPJ Advisor Series</h1>
                  </div>
                </div>
              </div>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Content</div>
                  <div class="clearfix"></div>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
                <input type="hidden" name="details" id='det'>
                <div class="portlet-body">
                  <div contenteditable="true" id='line2' >
                  @if($kpj->slug)
                    {!!$kpj->slug!!}
                  @else
                   <h2 class="light bordered main-title"> <span>{{$kpj->title}} </span> </h2>
                  @endif
                  </div>
                  
                  <div class="row">
					
						<div class="col-md-12">
						    <div contenteditable="true" id='line3'>

						    @if($kpj->details)
						    	{!!$kpj->details!!}
						    @else

                      <div class="media pull-right"><img src="/images/service_procedures/img_not_available.jpg" width="467" class="img-rounded" alt="Anaesthesiology"></div>
                            
                            	<h5>Heading text</h5>
                           		<p>Please place your content here.</p>  
                            
                            	<h5>Heading text</h5>   
                            	<p>Please place your content here.</p>
                            
                                <ul class="list-unstyled">
                                    <li>
                                        <h6><i class="fa fa-check"></i> Bullet point style - sub heading text</h6>
                                        <p>Please place your content here.</p>                                
                                    </li>
                                     <li>
                                        <h6><i class="fa fa-check"></i> Bullet point style - sub heading text</h6>
                                        <p>Please place your content here.</p>                                
                                    </li>
                                     <li>
                                        <h6><i class="fa fa-check"></i> Bullet point style - sub heading text</h6>
                                        <p>Please place your content here.</p>                                
                                    </li>
                                     <li>
                                        <h6><i class="fa fa-check"></i> Bullet point style - sub heading text</h6>
                                        <p>Please place your content here.</p>                                
                                    </li>
                                </ul>
                                
                                <p>Please place your footer text here.</p>
                           @endif
                            </div>
                                  
					
						</div><!-- end col-md-12 -->
						
						
					</div><!-- end row -->
                  
                </div><!-- end portlet body -->
                <!-- save button start -->
                <div class="form-actions none-bg"> <a href="#" class="btn btn-red preview_line">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div><!-- end portlet -->
              </form>
            </div>
          </div>
        </div>

@stop

@section('end_scripts')
  <script type="text/javascript">
      $('.lem').removeClass('active');
      $('.lem_kpj').addClass('active');
  </script>

@stop