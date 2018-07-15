@extends('layouts.admin')

@section('title')
<title>Dashboard</title>
  @stop
 

@section('content')

	        <!--END SIDEBAR MENU--><!--BEGIN PAGE WRAPPER-->
      <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
        
        <div class="page-header-breadcrumb">
          <div class="page-heading hidden-xs">
            <h1 class="page-title">Dashboard</h1>
          </div>
          
           <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="/admin">Dashboard</a>&nbsp;</li>

          </ol>
        </div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        
        <div class="page-content">
        	<div id="tab-shopping">
              <div class="row">
                <div class="col-lg-12">
                  <h2>Dashboard</h2>
                  <div class="clearfix"></div>
                       
                    @include('common.alerts')
          
              <div class="clearfix"></div>
                </div>
                <!-- end col-lg-12 -->
                
                <div class="col-lg-8">
                   
                        
                        <!-- last 5 job applicants listing start -->
                        <div class="panel panel-primary">
                                    <div class="panel-heading">Last 5 Job Applicants</div>
                                    <div class="panel-body">
                                        <table class="table table-border-dashed table-hover mbn">
                                            <thead>
                                            <tr>
                                                <th>Applicant Name</th>
                                                <th>Position Applied</th>
                                                <th>Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                            @foreach(Helper::getApplications(5) as $key=>$app)
                                            <tr>
                                                <td><span style="display: none;">{{$key+1}} </span><a >{{$app->first_name}}</a></td>
                                                <td>{{ isset($app) && !empty($app->career) ?$app->career->title : '' }}</td>
                                                <td>{{date('d M, Y', strtotime($app->created_at))}}</td>
                                            </tr>
                            @endforeach
                                        
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- End last 5 job applicants listing -->
                                
                                <!-- last 5 feedback listing start -->
                        		<div class="panel panel-primary">
                                    <div class="panel-heading">Last 5 Feedback Listings</div>
                                    <div class="panel-body">
                                        <table class="table table-border-dashed table-hover mbn">
                                            <thead>
                                            <tr>
                                                <th>Message</th>
                                                <th>Name</th>
                                                <th width="20%">Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                    @foreach(Helper::getFeedbacks(5) as $key=>$fd)
                                                <tr>
                                                    <td><span style="display: none;">{{$key+1}} </span> {{$fd->subject}}</td>
                                                    <td>{{$fd->name}}</td>
                                                <td>{{date('d M, Y', strtotime($fd->created_at))}}</td>
                                                </tr>
                                    @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- End last 5 press releases listing -->
                    </div>
        			<!-- End col-lg-8 -->
                    
                    
                    
                    
                    
                	<div class="col-lg-4">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="lifetime-sales">
                                            <div class="row">
                                                <div class="col-md-4 text-center">
                                                    <i class="fa fa-suitcase fa-4x"></i>                                                </div>
                                                <div class="col-md-8 mts">
                                                    <div class="ls-total">{{Helper::getCareers()->count()}}</span></div>
                                                    <div class="ls-title">Jobs Posted</div>
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>
                 	</div>
        			<!-- end # of job posted -->
                    
                 	<div class="col-lg-4">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="average-orders">
                                            <div class="row">
                                                <div class="col-md-4 text-center">
                                                    <i class="fa fa-users fa-4x"></i>                                                </div>
                                                <div class="col-md-8 mts">
                                                    <div class="ao-total">{{Helper::getApplications()->count()}}</div>
                                                    <div class="ao-title">Job Applicants</div>
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>
                	</div>
       				<!-- end # of job applicants --> 
                    
                    
                    <div class="col-lg-4">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="average-orders">
                                            <div class="row">
                                                <div class="col-md-4 text-center">
                                                    <i class="fa fa-file fa-4x"></i>                                                </div>
                                                <div class="col-md-8 mts">
                                                    <div class="ao-total">{{Helper::getFeedbacks()->count()}}</div>
                                                    <div class="ao-title">Feedback Listings</div>
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>
                	</div>
               	<!-- end # of feedback listings--> 
                
                <div class="col-lg-4">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="average-orders">
                                            <div class="row">
                                                <div class="col-md-4 text-center">
                                                    <i class="fa fa-bullhorn fa-4x"></i>
                                                </div>
                                                <div class="col-md-8 mts">
                                                    <div class="ao-total">{{Helper::getNews()->count()}}</div>
                                                    <div class="ao-title">News Posted</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                	</div>
                	<!-- end # of News Posted -->
                   
                    <div class="col-lg-4">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="average-orders">
                                            <div class="row">
                                                <div class="col-md-4 text-center">
                                                    <i class="fa fa-picture-o fa-4x"></i>
                                                </div>
                                                <div class="col-md-8 mts">
                                                    <div class="ao-total">{{Helper::getEvents()->count()}}</div>
                                                    <div class="ao-title">Events Posted</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                	</div>
                	<!-- end # of Events Posted--> 
                               
                            
                
                
              </div>
              <!-- end row -->
          
          </div>
          <!-- end tab-shopping-->
        </div>
        <!--END CONTENT-->
@stop