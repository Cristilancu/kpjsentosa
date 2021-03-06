@extends('layouts.admin')

@section('content')
<div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
        
  <div class="page-header-breadcrumb">
    <div class="page-heading hidden-xs">
      <h1 class="page-title">CMS Pages</h1>
    </div>
    
    <!-- InstanceBeginEditable name="EditRegion1" -->
    <ol class="breadcrumb page-breadcrumb">
      <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
      <li>CMS Pages &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
      <li><a href="patients_visitors_list.html">Patients &amp; Visitors Listing</a> &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
      <li class="active">For Patients | Room Rates - Details</li>
    </ol>
    <!-- InstanceEndEditable --></div>
  <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
  <!-- InstanceBeginEditable name="EditRegion2" -->
  <div class="page-content">
    <div class="row">
      <div class="col-lg-12">
        <h2>For Patients | Room Rates <i class="fa fa-angle-right"></i> Details</h2>
        <div class="clearfix"></div>
        @if(Session::has('message'))
              <div class="alert alert-success alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>{{Session::get('message')}}</p>
              </div>
        @endif
        @if(Session::has('error'))
              <div class="alert alert-danger alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-times-circle"></i> <strong>Error!</strong>
                <p>{{Session::get('error')}}</p>
              </div>
        @endif
        @if( Session::has('errors') )
          <div class="alert alert-danger alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
          <ul>
             @foreach($errors->all() as $error) 
                <li>{{$error}}</li>
             @endforeach
          </ul>
          </div>
        @endif

        <div id="success" class="alert alert-success alert-dismissable" style="display:none;">
          <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
          <i class="fa fa-check-circle"></i> <strong>Success!</strong>
          <p>The information has been saved/updated successfully.</p>
        </div>
        
        <!-- @include('common.alerts') -->


        <div class="pull-left"> Last updated: <span class="text-blue updated_date">{{date('d M, Y @ h:i a', strtotime($patient->updated_at))}}</span> </div>
        <div class="clearfix"></div>
        <p></p>
        <ul id="myTab" class="nav nav-tabs">
          <li class="active"><a href="#general" data-toggle="tab">General / Description</a></li>
          <li><a href="#room-rates" data-toggle="tab">Room Rates</a></li>
          <li><a href="#admission-deposit" data-toggle="tab">Admission Deposit</a></li>
        </ul>
        
        <div id="myTabContent" class="tab-content">
          
          <div id="general" class="tab-pane fade in active">
            <div class="portlet">
              <div class="portlet-header">
                <div class="caption">General</div>
                <div class="tools"> <i class="fa fa-chevron-up"></i> </div>

              </div>
              
              
              <div class="portlet-body">
                <div class="row">
                      <div class="col-md-12">
                        
                          <form class="form-horizontal">
                                      <div class="form-group">
                                          <label class="col-md-3 control-label">Status <span class="text-red">*</span></label>
                                          <div class="col-md-6">
                                            <div data-on="success" data-off="primary" class="make-switch">
                                                
                                              <input type="checkbox" name="details_status" id="details_status" class="active_status"
                                                  @if($patient->details_status == 1)
                                                    checked="checked"                                   
                                                  @endif
                                                 
                                              />
                                            </div>
                                          </div>
                                      </div>
                          </form>        
                     
                     
                      </div><!-- end col-md-12 -->

                    </div><!-- end row -->
                
                <div class="clearfix"></div>
              </div><!-- end portlet body -->
              
              <div class="portlet-header">
                <div class="caption">Content Description</div>
                <div class="clearfix"></div>
                 <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                <div class="tools"> <i class="fa fa-chevron-up"></i> </div>

              </div>
              
              <div class="portlet-body">
                 <div class="row">
                     <div class="col-md-12">
                        
                        <div contenteditable="true" id="general_description">
                          {!! $patient->general_desc !!}
                        </div>         
                     
                     
                    </div><!-- end col-md-12 -->

                  </div><!-- end row -->
                
                  <div class="clearfix"></div>
              </div><!-- end portlet body -->
              
              
              <!-- save button start -->
          <div class="form-actions none-bg">
             <a href="#preview_save_general" id="preview_save_general" class="btn btn-red save_preview" data-id="{{ $patient->id }}" data-url ="{{ url('/admin/patient_edit_details',$patient->id) }}">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; 
             <a href="#publish online" class="btn btn-blue save_preview" data-id="{{ $patient->id }}" data-url ="{{ url('/admin/patient_edit_details',$patient->id) }}">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp; 
             <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
          <!-- save button end -->                    
          </div>
            <!-- end portlet -->
            <!-- end general/ description -->
            
            
         
            
          </div>
          <!-- end tab general -->
          
          
          <div id="room-rates" class="tab-pane fade">
            
            <div class="portlet">
            
                <div class="portlet-header">
                    <div class="caption">Room Rates</div>
                    <div class="clearfix"></div>
                    <span class="text-blue text-15px">You can edit the text by clicking the content below. </span>
                    <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
    
                  </div>
                  
                  <div class="portlet-body">
                    <div class="row">
                          <div class="col-md-12">
                              
                              <div contenteditable="true" id="room_rate_description">                             
                                {!! $patient->room_rate_desc !!}                                                                                           
                              </div>
                                       
                                
                          </div>
                          <!-- end col-md-12 -->

                        </div>
                        <!-- end row -->
                
                <div class="clearfix"></div>
              </div><!-- end portlet body -->
              
              <!-- save button start -->
          <div class="form-actions none-bg">
          <a href="#preview in browser/not yet published" id="room_rate_description" data-id="{{ $patient->id }}" data-url ="{{ url('/admin/patient_edit_details',$patient->id) }}" class="btn btn-red save_preview">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp;
              <a href="#preview in browser/not yet published" id="room_rate_description" data-id="{{ $patient->id }}" data-url ="{{ url('/admin/patient_edit_details',$patient->id) }}" class="btn btn-blue save_preview">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp;

             <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
          <!-- save button end -->
              
            </div><!-- end portlet -->
            
              
            <div class="portlet">
              <div class="portlet-header">
                <div class="caption">Room Rates Listing</div>
                <br/>
                <p class="margin-top-10px"></p>
                <a href="#" data-target="#modal-add-ward" data-toggle="modal" class="btn btn-success">Add New Ward &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Delete</button>
                  <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="#" data-target="#modal-delete-selected-ward1" id="delete-selected-ward" data-toggle="modal">Delete selected item(s)</a></li>
                    <li class="divider"></li>
                    <li><a href="#" data-target="#modal-delete-all-ward" data-toggle="modal">Delete all</a></li>
                  </ul>
                </div>
                 
                <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                <!--Modal Add New start-->
                <div id="modal-add-ward" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                  <div class="modal-dialog modal-wide-width">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                        <h4 id="modal-login-label3" class="modal-title">Add New Ward</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form">
                          <form class="form-horizontal" action="{{ route('admin.room_rate.store') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="hidden" name="patient_list_id" value="{{$patient->id}}">
                            <div class="form-group">
                              <label class="col-md-3 control-label">Status</label>
                              <div class="col-md-9">
                                <div data-on="success" data-off="primary" class="make-switch">
                                  <input type="hidden" name="room_rate_status" value="0">
                                  <input type="checkbox" checked="checked" name="room_rate_status" value="1"/>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-3 control-label">Ward Title <span class='require'>*</span></label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="eg. Standard Ward" name="title">
                              </div>
                            </div>
                            <div class="form-actions">
                              <div class="col-md-offset-5 col-md-8">
                                 <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>
                                 &nbsp; 
                                 <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--END MODAL Add New-->
                <!--Modal delete selected items start-->
                <div id="modal-delete-selected-ward" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                        <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                      </div>
                      <div class="modal-body">
                          <div id="room_rate_selected"></div>
                          
                          <div class="form-actions">
                              <div class="col-md-offset-4 col-md-8">
                                  <button class="btn btn-red delete_room_rate_selected" data-url="{{ route('admin.room_rate.destroy') }}">Yes &nbsp;<i class="fa fa-check"></i></button>
                                   &nbsp;
                                    <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal delete selected items end -->
                <!-- modal delete selected error -->
                <div id="modal-delete-selected-ward-error" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger">
                                    <p>Please select at least one item for delete</p>
                                </div>
                        
                        <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8">
                                <button class="btn btn-red pull-right" data-dismiss="modal">Close &nbsp;</button>
                            </div>
                        </div>
                    </div>
                      </div>
                    </div>
                  </div>
                <!-- modal delete selected error end -->
                <!--Modal delete all items start-->
                <div id="modal-delete-all-ward" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                        <h4 id="modal-login-label4" class="modal-title">
                          <a href=""><i class="fa fa-exclamation-triangle"></i></a>
                           Are you sure you want to delete all items? 
                          </h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-actions">
                          <div class="col-md-offset-4 col-md-8"> 

                            <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; 
                            <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal delete all items end -->
              </div>
              <div class="portlet-body">
                <div class="form-inline pull-left">
                  <!--<div class="form-group">
                    <select name="select" class="form-control">
                      <option>10</option>
                      <option>20</option>
                      <option selected="selected">30</option>
                      <option>50</option>
                      <option>100</option>
                    </select>
                    &nbsp;
                    <label class="control-label">Records per page</label>
                  </div>-->
                </div>
                <div class="clearfix"></div>
                <br/>
                <br/>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th width="1%"><input type="checkbox" id="room_rate_chk"/></th>
                          <th>#</th>
                          <th>Status</th>
                          <th>Ward Title</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if (count($room_rates)>0)

                          @foreach ($room_rates as $key=>$room_rate)
                          <tr>
                              <td>
                                  <input type="checkbox"  class="room_rate_chk"  data-id="{{$room_rate->id }}" data-title="{{ $room_rate->title }}"/>
                              </td>
                              <td>{{$key+1}}</td>
                              <td>
                                  @if($room_rate->room_rate_status == 1)
                                  <span class="label label-sm label-success">Active</span>
                                @else
                                    <span class="label label-sm label-danger">Inactive</span>
                                @endif
                              </td>
                              <td>{{ $room_rate->title }}</td>
                              <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-ward-{{$room_rate->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a>
                                <a href="/admin/room_detail/{{$room_rate->id}}" data-hover="tooltip" data-placement="top" title="Add Ward Details" ><span class="label label-sm label-warning"><i class="fa fa-plus"></i></span></a>
                                <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-ward-{{$room_rate->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                  <!--Modal Edit ward start-->
                                  <div id="modal-edit-ward-{{$room_rate->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                    <div class="modal-dialog modal-wide-width">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                          <h4 id="modal-login-label3" class="modal-title">Edit Ward</h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="form">
                                              <form class="form-horizontal" action="{{ route('admin.room_rate.update', $room_rate->id) }}" method="post" enctype="multipart/form-data">
                                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                                                  <input type="hidden" name="_method" value="post">
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Status</label>
                                                <div class="col-md-9">
                                                  <div data-on="success" data-off="primary" class="make-switch">
                                                      <input type="hidden" name="room_rate_status" value="0">   
                                                      <input type="checkbox" name="room_rate_status" 
                                                          @if($room_rate->room_rate_status == 1)
                                                            checked="checked"                                   
                                                          @endif
                                                          value="1"
                                                      />
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Ward Title <span class='require'>*</span></label>
                                                <div class="col-md-9">
                                                 <input type="text" class="form-control" name="title" placeholder="eg. Standard Ward" value="{{ $room_rate->title}}">
                                                </div>
                                              </div>
                                                                                
                                              <div class="form-actions">
                                                <div class="col-md-offset-5 col-md-8">
                                                   <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>
                                                   &nbsp; 
                                                   <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!--END MODAL Edit ward-->
                                  <!--Modal delete start-->
                                  <div id="modal-delete-ward-{{$room_rate->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this ward? </h4>
                                        </div>
                                        <div class="modal-body">
                                          <p><strong>#{{$key+1}}:</strong> {{ $room_rate->title}}</p>
                                        <form class="form-horizontal" action="{{ route('admin.room_rate.destroys', $room_rate->id) }}" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                                                <input type="hidden" name="_method" value="DELETE">
                                          <div class="form-actions">
                                            <div class="col-md-offset-4 col-md-8"> 
                                              <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-floppy-o"></i></button>
                                              &nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                          </div>
                                        </form>
                                          <!--
                                          <div class="form-actions">
                                            <div class="col-md-offset-4 col-md-8"> <a href="{{ route('admin.room_rate.destroy') }}?id" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                          </div>
                                        -->
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- modal delete end -->
                              </td>
                            </tr>
                          @endforeach
                            
                        @endif
                       
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="5"></td>
                        </tr>
                      </tfoot>
                    </table>
                </div><!-- end table responsive -->
                <div class="tool-footer text-right">
                    <p class="pull-left">Showing {{$room_rates->count()>0 ? $room_rates->firstItem():$room_rates->count()}} to {{$room_rates->lastItem()}}
                        of  {{$room_rates->total()}} entries</p>
                  
                </div>
                <div class="clearfix"></div>
              </div>
            </div><!-- end portlet -->
            
          </div>
          <!-- end tab room rates -->
          
          <div id="admission-deposit" class="tab-pane fade">
            <div class="portlet">
            
                <div class="portlet-header">
                    <div class="caption">Admission Deposit</div>
                    <div class="clearfix"></div>
                    <span class="text-blue text-15px">You can edit the text by clicking the content below. </span>
                    <div class="tools"> <i class="fa fa-chevron-up"></i> 
                    </div>
                  </div>
                  
                  <div class="portlet-body">
                    <div class="row">
                          <div class="col-md-12">                              
                              <div contenteditable="true" id="admission_description">
                                {!! $patient->admission_desc !!}                                                              
                              </div>                                                                       
                          </div>
                          <!-- end col-md-12 -->
                        </div>
                        <!-- end row -->
                
                <div class="clearfix"></div>
              </div><!-- end portlet body -->
              
              <!-- save button start -->
          <div class="form-actions none-bg">
             <a href="#preview in browser/not yet published" id="admission_description" data-id="{{ $patient->id }}" data-url ="{{ url('/admin/patient_edit_details',$patient->id) }}"  class="btn btn-red save_preview">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp;
              <a href="#preview in browser" class="btn btn-blue save_preview" data-id="{{ $patient->id }}" data-url ="{{ url('/admin/patient_edit_details',$patient->id) }}">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp;
              <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
              <!-- save button end -->              
            </div><!-- end portlet -->                                        
           <div class="portlet">
              <div class="portlet-header">
                <div class="caption">Minimum Admission Deposit Listing</div>
                <br/>
                <p class="margin-top-10px"></p>
                <a href="#" data-target="#modal-add-deposit" data-toggle="modal" class="btn btn-success">Add New Deposit &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Delete</button>
                  <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="#" data-target="#modal-delete-selected-deposit" data-toggle="modal">Delete selected item(s)</a></li>
                    <li class="divider"></li>
                    <li><a href="#" data-target="#modal-delete-all-deposit" data-toggle="modal">Delete all</a></li>
                  </ul>
                </div>
                 
                <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                <!--Modal Add New start-->
                <div id="modal-add-deposit" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                  <div class="modal-dialog modal-wide-width">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                        <h4 id="modal-login-label3" class="modal-title">Add New Deposit</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form">
                          <form class="form-horizontal" action="{{ route('admin.admission_deposit.store') }}" method="post">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                             <input type="hidden" name="patient_list_id" value="{{$patient->id}}">
                            <div class="form-group">
                              <label class="col-md-3 control-label">Status</label>
                              <div class="col-md-9">
                                <div data-on="success" data-off="primary" class="make-switch">
                                  <input type="hidden" name="status" value="0">
                                  <input type="checkbox" checked="checked" name="status" value="1"/>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-3 control-label">Type of Cases <span class='require'>*</span></label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="eg. Medical Cases" name="case_type">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-3 control-label">Initial Deposit <span class='require'>*</span></label>
                              <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="eg. RM 3,000" name="initial_deposit">
                              </div>
                            </div>
                           
                            <div class="form-actions">
                              <div class="col-md-offset-5 col-md-8">
                                <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;
                                <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--END MODAL Add New-->
                <!--Modal delete selected items start-->
                <div id="modal-delete-selected-deposit" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                        <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                      </div>
                      <div class="modal-body">
                        <div id="admission_deposit_selected"></div>          
                          <div class="form-actions">
                              <div class="col-md-offset-4 col-md-8">
                                <button class="btn btn-red delete_admission_deposit_selected" data-url="{{ route('admin.admission_deposit.destroy_all') }}">Yes &nbsp;<i class="fa fa-check"></i></button>
                                &nbsp;
                                <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal delete selected items end -->
                <!--Modal delete all items start-->
                <div id="modal-delete-all-deposit" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                        <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-actions">
                          <div class="col-md-offset-4 col-md-8">
                            <button class="btn btn-red delete_admission_deposit_selected" data-url="{{ route('admin.admission_deposit.destroy_all') }}">Yes &nbsp;<i class="fa fa-check"></i></button>
                            &nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal delete all items end -->
              </div>
              <div class="portlet-body">
                <div class="form-inline pull-left">
                </div>
                <div class="clearfix"></div>
                <br/>
                <br/>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th width="1%"><input type="checkbox" id="admission_deposit_chk"/></th>
                          <th>#</th>
                          <th>Status</th>
                          <th>Types of Cases</th>
                          <th>Initial Deposit</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if (count($admission_deposits)>0)
                        @foreach ($admission_deposits as $key=>$admission_deposit)
                        <tr>
                          <td>
                              <input type="checkbox"  class="admission_deposit_chk"  data-id="{{$admission_deposit->id }}" data-title="{{ $admission_deposit->case_type }}"/>
                          </td>
                          <td>{{$key+1}}</td>
                          <td>
                              @if($admission_deposit->status == 1)
                              <span class="label label-sm label-success">Active</span>
                            @else
                                <span class="label label-sm label-danger">Inactive</span>
                            @endif
                          </td>
                          <td>{{$admission_deposit->case_type}}</td>
                          <td>{{$admission_deposit->initial_deposit}}</td>
                          <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-deposit-{{$admission_deposit->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> 
                            <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-deposit-{{$admission_deposit->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                              <!--Modal Edit deposit start-->
                              <div id="modal-edit-deposit-{{$admission_deposit->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog modal-wide-width">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label3" class="modal-title">Edit Deposit</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form">
                                        <form class="form-horizontal" action="{{ route('admin.admission_deposit.update', $admission_deposit->id) }}" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                                            <input type="hidden" name="_method" value="post">
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Status</label>
                                            <div data-on="success" data-off="primary" class="make-switch">
                                                <input type="hidden" name="status" value="0">   
                                                <input type="checkbox" name="status" 
                                                    @if($admission_deposit->status == 1)
                                                      checked="checked"                                   
                                                    @endif
                                                    value="1"
                                                />
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Type of Cases <span class='require'>*</span></label>
                                            <div class="col-md-9">
                                             <input type="text" class="form-control" placeholder="eg. Medical Cases" name="case_type" value="{{ $admission_deposit->case_type}}">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Initial Deposit <span class='require'>*</span></label>
                                            <div class="col-md-9">
                                             <input type="text" class="form-control" placeholder="eg. RM 3,000.00" name="initial_deposit" value="{{ $admission_deposit->initial_deposit}}">
                                            </div>
                                          </div>                                                                           
                                          <div class="form-actions">
                                            <div class="col-md-offset-5 col-md-8">
                                              <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>
                                              &nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <!--END MODAL Edit ward-->
                              <!--Modal delete start-->
                              <div id="modal-delete-deposit-{{$admission_deposit->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this deposit? </h4>
                                    </div>
                                    <div class="modal-body">
                                      <p>{{$admission_deposit->case_type}}</p>
                                      <p>{{$admission_deposit->initial_deposit}}</p>
                                      <form class="form-horizontal" action="{{ route('admin.admission_deposit.destroy', $admission_deposit->id) }}" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                                            <input type="hidden" name="_method" value="DELETE">
                                      <div class="form-actions">
                                        <div class="col-md-offset-4 col-md-8"> 
                                          <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-floppy-o"></i></button>
                                          &nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                      </div>
                                    </form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <!-- modal delete end -->
                          </td>
                        </tr>
                        @endforeach
                        @endif
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="6"></td>
                        </tr>
                      </tfoot>
                    </table>
                </div><!-- end table responsive -->
                <div class="tool-footer text-right">
                   <p class="pull-left">Showing {{$admission_deposits->count()>0 ? $admission_deposits->firstItem():$admission_deposits->count()}} to {{$admission_deposits->lastItem()}}
                        of  {{$admission_deposits->total()}} entries</p>
                </div>
                <div class="clearfix"></div>
              </div>
            </div><!-- end portlet -->          
          </div>
          <!-- end tab admission deposit -->          
        </div><!-- end all tabs -->
      </div>
    </div>
  </div>
  <!-- InstanceEndEditable -->
  <!--END CONTENT-->
@stop

@section('end_scripts')
    <script>
        $('.lem').removeClass('active');
        $('.lem_patients').addClass('active');
      $(document).ready(function(){     
        $(".save_preview").on('click', function(){
          var url = $(this).data('url');
          var id = $(this).attr('data-id');          
          var token = $('meta[name="csrf-token"]').attr('content');
          var general_desc = $("#general_description").html();
          var room_rate_desc = $("#room_rate_description").html();
          var admission_desc = $('#admission_description').html();
          var details_status = 0;
          
          
          $(".active_status:checked").each(function(){
            details_status = 1;
          });
          console.log(details_status);
          $.ajax({
                url: $(this).data('url'),
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                  general_desc:general_desc,
                  room_rate_desc:room_rate_desc,
                  admission_desc:admission_desc,
                  details_status:details_status,
                  _method:'POST',
                  _token:token
                  },
                success: function (data) {
                    if (data['success']) {
                        $("#success").css('display','block');
                        $("#danger").css('display','none');
                        $('.updated_date').html('');
                        $('.updated_date').html(data['date']);

                        console.log(data['success']);  
                    } else if (data['error']) {
                        $("#success").css('display','none');
                        $("#danger").css('display','black');
                        alert(data['error']);
                    } else {
                        alert('Whoops Something went wrong!!');
                    }
                },
                error: function (data) {
                    alert(data.responseText);
                }
            });
        });// preview save general


        // Room Rate 
        $("#room_rate_chk").on('click', function(){
            if($(this).is(':checked', true)){
              $(".room_rate_chk").prop('checked', true);
            }else{
              $(".room_rate_chk").prop('checked', false);
            }
        });

        $("#admission_deposit_chk").on('click', function(){
            if($(this).is(':checked', true)){
              $(".admission_deposit_chk").prop('checked', true);
            }else{
              $(".admission_deposit_chk").prop('checked', false);
            }
        });

        $("#delete-selected-ward").on('click', function(){
          var room_rate_val = [];
          $(".room_rate_chk:checked").each(function(){
            room_rate_val.push($(this).attr('data-id'));    
          });
          if(room_rate_val.length <=0){
            $("#modal-delete-selected-ward-error").modal();
          }else{
            $("#modal-delete-selected-ward-error").modal('hide');
            $("#modal-delete-selected-ward").modal();
          }

          var_room_titles = [];
          $(".room_rate_chk:checked").each(function(){
            var_room_titles.push($(this).attr('data-title'));
            var join_selected_room_rate_title = var_room_titles.join("<br>");
            $("#room_rate_selected").html(join_selected_room_rate_title);
          });
        });

        $('.delete_room_rate_selected').on('click', function(e) {
    var room_rate_val = [];      
    $(".room_rate_chk:checked").each(function() {  
        room_rate_val.push($(this).attr('data-id'));        
    });  
    if(room_rate_val.length <=0)  
    {  
        alert("Please select row.");  
    }  else {                   
            var join_selected_values = room_rate_val.join(",");          
            $.ajax({
                url: $(this).data('url'),
                type: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: 'ids='+join_selected_values,
                success: function (data) {
                    if (data['success']) {
                        $(".room_rate_chk:checked").each(function() {  
                            $(this).parents("tr").remove();                            
                                $("#modal-delete-selected-ward").modal('hide');                            
                        });
                    } else if (data['error']) {
                        alert(data['error']);
                    } else {
                        alert('Whoops Something went wrong!!');
                    }
                },
                error: function (data) {
                    alert(data.responseText);
                }
            });
          $.each(room_rate_val, function( index, value ) {
              $('table tr').filter("[data-row-id='" + value + "']").remove();
          });      
    }  
});


$('.delete_admission_deposit_selected').on('click', function(e)
{
    var admission_deposit_val = [];      
    $(".admission_deposit_chk:checked").each(function() {  
        admission_deposit_val.push($(this).attr('data-id'));        
    });  
    if(admission_deposit_val.length <=0)  
    {  
        alert("Please select row.");  
    }
    else
    {                   
      var join_selected_values = admission_deposit_val.join(",");          
      $.ajax({
          url: $(this).data('url'),
          type: 'DELETE',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: 'ids='+join_selected_values,
          success: function (data)
          {
              if (data['success'])
              {
                  $(".admission_deposit_chk:checked").each(function() {  
                      $(this).parents("tr").remove();                            
                          $("#modal-delete-selected-deposit").modal('hide');                            
                  });
                  $('#modal-delete-all-deposit').modal('hide');
              } else if (data['error']) {
                  alert(data['error']);
              } else {
                  alert('Whoops Something went wrong!!');
              }
          },
          error: function (data) {
              alert(data.responseText);
          }
      });
    $.each(admission_deposit_val, function( index, value ) {
        $('table tr').filter("[data-row-id='" + value + "']").remove();
    });      
  }  
});


$('[data-toggle=confirmation]').confirmation({
    rootSelector: '[data-toggle=confirmation]',
    onConfirm: function (event, element) {
        element.trigger('confirm');
    }
});

      });
    </script>
@stop