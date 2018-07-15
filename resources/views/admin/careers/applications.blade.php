@extends('layouts.admin')

@section('title') 
<title>Online Job Applicants:: Listing</title>
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
            <li>Careers &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li class="active">Online Job Applicants - Listing</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Job Vacancies <i class="fa fa-angle-right"></i> Listing</h2>
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
                <div class="portlet-body">
                  	
                 
                  
                  <div contenteditable="true" id='line1'>
                   @if($setting = Helper::hasSetting('applications'))
                        {!!$setting->line1!!}
                    @else  
                     <h1 class="entry-title">Careers</h1>
                    @endif
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
                <div class="portlet-body">
                  
                  	<div contenteditable="true" id='line2'>
                     @if($setting = Helper::hasSetting('applications'))
                        {!!$setting->line2!!}
                    @else  
                    	<h2 class="light bordered main-title">Online Job <span>Application</span></h2>
                    @endif
                    </div>
                    
                </div><!-- end portlet body -->
              
              	<!-- save button start -->
                <div class="form-actions none-bg"> <a href="#" class="btn btn-red preview_line">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <a href="#publish online" class="btn btn-blue save_line" type="applications">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp; <a href='javascript:void(0)' class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div>
              
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Online Job Applicants Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                 
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href='javascript:void(0)' data-target="#modal-delete-selected" data-toggle="modal">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href='javascript:void(0)' data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
				  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                 
                  <!--Modal delete selected items start-->
                  <div id="modal-delete-selected" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                        
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red all_del" val='application' take_four='yes'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete selected items end -->
                  <!--Modal delete all items start-->
                  <div id="modal-delete-all" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href='/admin/action_delete/all/applications' class="btn btn-red ">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete all items end -->
                </div>
                <div class="portlet-body">
             
                  <div class="clearfix"></div>
                  <br/>
                  <br/>
                  <div class="table-responsive">
                      <table class="table table-hover table-striped">
                        <thead>
                          <tr>
                            <th width="1%"><input type="checkbox" class="del_all" /></th>
                            <th>#</th>
                            <th>Status</th>
                            <th>Date Applied</th>
                            <th>Applicant Name</th>
                            <th>Position Applied</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $i = $applications->perPage() * ($applications->currentPage()-1);?>
                    @foreach($applications as $key=>$app)
                        @if(isset($app->first_name) && isset($app->last_name) && isset($app->career->title)  && isset($app->gender) )
                          <tr>
                            <td><span style="display: none;">{{$key+1}}</span><input type="checkbox" class="del" val="{{$app->id}}" /></td>
                            <td>{{++$i}}</td>
                            <td> <span class="label label-sm label-success">Active</span>
                             </td>
                            <td>{{date('d M, Y', strtotime($app->created_at))}}</td>
                            <td>@if(isset($app->first_name)){{$app->first_name}}@endif  @if(isset($app->last_name)) {{$app->last_name}}@endif</td>
                            <td>{{$app->career->title}}</td>
                            <td><a href='javascript:void(0)' data-hover="tooltip" data-placement="top" data-target="#modal-view-details-{{$app->id}}" data-toggle="modal" title="View Details"><span class="label label-sm label-yellow"><i class="fa fa-search"></i></span></a> <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$app->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                <!--Modal view details start-->
                                <div id="modal-view-details-{{$app->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog modal-wide-width">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label2" class="modal-title">View Applicant Details</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form action="#" class="form-horizontal">
                                                  
                                                        <div class="form-body pal">
                                                            <h3 class="block-heading">Personal</h3>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="inputFirstName" class="col-md-4 control-label">Position Applied:</label>
                            
                                                                        <div class="col-md-8"><p class="form-control-static">{{$app->career->title}}</p></div>
                                                                    </div>	
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="inputFirstName" class="col-md-4 control-label">Name:</label>
    
                                                                        <div class="col-md-8"><p class="form-control-static">{{$app->first_name}} {{$app->last_name}}</p></div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="inputLastName" class="col-md-4 control-label">Gender:</label>
    
                                                                        <div class="col-md-8"><p class="form-control-static">{{$app->gender}}</p></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="inputBirthday" class="col-md-4 control-label">Age:</label>
    
                                                                        <div class="col-md-8"><p class="form-control-static">{{$app->age}}</p></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="inputEmail" class="col-md-4 control-label">Address:</label>
    
                                                                        <div class="col-md-8"><p class="form-control-static">{{$app->address}}</p></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="inputPhone" class="col-md-4 control-label">Contact Number:</label>
    
                                                                        <div class="col-md-8"><p class="form-control-static">{{$app->phone}}</p></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="inputEmail" class="col-md-4 control-label">Email:</label>
    
                                                                        <div class="col-md-8"><p class="form-control-static"><a href="mailto:{{$app->email}}">{{$app->email}}</a></p></div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
    
                                                            <!-- CV start -->
                                                            <h3 class="block-heading">Attached CV</h3>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="inputPostCode" class="col-md-4 control-label">Applicant CV:</label>
    
                                                                        <div class="col-md-8">
                                                                            <p class="form-control-static"><a href='{{$app->cv}}' target="_blank">{{$app->formated_time}}</a></p></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end CV-->
                                                        </div>
                                                        <div class="form-actions">
                                                            <div class="col-md-offset-5 col-md-8"> 
                                                                <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Close &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                          </div>
                                                    </form>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <!--END MODAL view details-->
                                <!--Modal delete start-->
                                <div id="modal-delete-{{$app->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this applicant? </h4>
                                      </div>
                                      <div class="modal-body">
                                        <p><strong>#{{$key+1}}: </strong>{{$app->first_name}} {{$app->last_name}}                               </p>
    
                                        <div class="form-actions">
                                          <div class="col-md-offset-4 col-md-8"> <a href='/admin/action_delete/{{$app->id}}/application' class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <!-- modal delete end -->                        
                             </td>
                          </tr>
                        @else
                            <tr>
                                <td><span style="display: none;">{{$key+1}}</span><input type="checkbox" class="del" val="{{$app->id}}" /></td>
                                <td>{{++$i}}</td>
                                <td>
                                    <span class="label label-sm label-success">Active</span>
                                </td>
                                <td colspan="4"><label>Whoops ! Something you entered, that can not be fetched.</label></td>
                            </tr>
                        @endif
                     @endforeach
                        </tbody>
                        <tfoot>
                         
                      </table>
                      <div class="row">
                          <div class="col-md-5 col-sm-12">
                              <div class="dataTables_info">
                                  &nbsp;Showing {{ $applications->firstItem() }} - {{ $applications->lastItem() }} of {{ $applications->total() }} entries
                              </div>
                          </div>
                          <div class="col-md-7 col-sm-12">
                              <div class="paging_bootstrap pull-right">

                                  <?php echo $applications->render()?>
                              </div>
                          </div>
                      </div>

                  </div><!-- end table responsive -->
              
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- end portlet -->
            </div>
          </div>
        </div>

@stop


@section('end_scripts')

  <script type="text/javascript">
      $('.lem').removeClass('active');
      $('.lem_online').addClass('active');
      $(document).ready(function() {
          $('#index-banner_info').add('.dataTables_length').add('#DataTables_Table_0_info').add('.dataTables_paginate').add('#index-banner_length').hide();
      })
  </script>

@stop
