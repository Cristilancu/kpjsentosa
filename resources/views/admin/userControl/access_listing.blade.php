@extends('layouts.admin')

@section('title')
    <title>KPJ Advisor Series :: Listing</title>
@stop

@section('content')
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->

        <div class="page-header-breadcrumb">
            <div class="page-heading hidden-xs">
                <h1 class="page-title">Access Control</h1>
            </div>

            <!-- InstanceBeginEditable name="EditRegion1" -->
            <ol class="breadcrumb page-breadcrumb">
                <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
                <li>Access Control &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
                <li class="active">Access - Listing</li>
            </ol>
            <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Access <i class="fa fa-angle-right"></i> Listing</h2>
                    <div class="clearfix"></div>
                    @if(Session::has('message'))
                        <div id="success" class="alert alert-success alert-dismissable" >
                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                            <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                            <p>{{ Session::get('message') }}.</p>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="alert alert-danger alert-dismissable" style="display: none">
                        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                        <i class="fa fa-times-circle"></i> <strong>Error!</strong>
                        <p>The information has not been saved/updated. Please correct the errors.</p>
                    </div>
                    @if ($lastUpdate->last_update !== null)
                        <div class="pull-left"> Last updated: <span class="text-blue updated_date">{{date('d M, Y @ h:i a', strtotime($lastUpdate->last_update))}}</span> </div>
                    @endif
                    <div class="clearfix"></div>
                    <p></p>
                    <div class="clearfix"></div>
                </div>
                <!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="portlet">
                        <div class="portlet-header">
                            <div class="caption">Access Listing</div>
                            <br/>
                            <p class="margin-top-10px"></p>
                            <a href="#"  class="btn btn-success editLink" id="addLink" data-target="#modal-add-user" data-toggle="modal" >Add New Access &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Delete</button>
                                <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#" data-target="#modal-delete-selected" data-toggle="modal">Delete selected item(s)</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                                </ul>
                            </div>
                              <a href="#" class="btn btn-blue">Export to CSV &nbsp;<i class="fa fa-share"></i></a>  
                            <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                            <!--Modal add new user start-->
                            <div id="modal-add-user" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog modal-wide-width">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                            <h4 id="modal-login-label3" class="modal-title">Add New Access</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form">
                                                <form class="form-horizontal"action="/admin/users/store" method="post">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Status</label>
                                                        <div class="col-md-9">
                                                            <div data-on="success" data-off="primary" id="addLinkCheck" class="make-switch">
                                                                <input type="checkbox" checked="checked" name="status" value="1"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Name <span class='require'>*</span></label>
                                                        <div class="col-md-6">
                                                            <input name="name" type="text" class="form-control" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Role <span class='require'>*</span></label>
                                                        <div class="col-md-3">
                                                            <select class="form-control" name="role_id" required>
                                                                @foreach($roles as $role)
                                                                    <option name="role_id" value="{{$role->id}}" >{{$role->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Email Address <span class='require'>*</span></label>
                                                        <div class="col-md-6">
                                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                                <input name="email" type="email" placeholder="Email Address" class="form-control" required/></div>
                                                            <span class="help-block">Email address is your login ID.</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="control-label col-md-3">Password <span class='require'>*</span></label>

                                                        <div class="col-md-6">
                                                            <div class="input-icon"><i class="fa fa-key"></i>
                                                                <input name="password" class="password" type="password" placeholder="Password" class="form-control" required/><span class="text-10px">(Password length should be between 6-12 characters)</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password" class="control-label col-md-3">Confirm Password <span class='require'>*</span></label>
                                                        <div class="col-md-6">
                                                            <div class="input-icon"><i class="fa fa-key"></i>
                                                                <input class="confirm_password" type="password" placeholder="Confirm Password" class="form-control" required/><span class="text-10px">(Password length should be between 6-12 characters)</span>
                                                            </div>
                                                            <div class="message"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class="control-label col-md-3">Permission &amp; Access Pages</label>
                                                        <div class="col-md-9 margin-top-5px">
                                                            <div class="text-blue border-bottom">You can select multiple pages from the below section.</div>
                                                            <div class="margin-top-10px"><strong>Pages:</strong></div>
                                                            <div class="checkbox-list">
                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="home"/>&nbsp; Home</label>
                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="patients_visitors"/>&nbsp; Patients &amp; Visitors</label>
                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="services_procedures"/>&nbsp; Services &amp; Procedures</label>
                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="screening_packages"/>&nbsp; Screening &amp; Packages</label>

                                                            </div>
                                                            <div class="checkbox-list">
                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="gps_partners"/>&nbsp; GPs &amp; Partners</label>
                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="contact_us"/>&nbsp; Contact Us / Feecback &amp; Enquiry</label>
                                                            </div>
                                                            <div class="margin-top-10px"><strong>Find Doctor:</strong></div>
                                                            <div class="checkbox-list">
                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="find_doctor"/>&nbsp;  Find Doctor</label>
                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="consultant_appointments"/>&nbsp; Consultant Appointments</label>

                                                            </div>

                                                            <!--<div class="checkbox-list margin-top-10px">
                                                                <label class="checkbox-inline"><input id="inlineCheckbox1" type="checkbox" value="All Pages"/>&nbsp; All Pages</label>
                                                                <label class="checkbox-inline"><input id="inlineCheckbox2" type="checkbox" value="Index"/>&nbsp; Index</label>
                                                                <label class="checkbox-inline"><input id="inlineCheckbox3" type="checkbox" value="Careers"/>&nbsp; Promotions</label>
                                                                <label class="checkbox-inline"><input id="inlineCheckbox3" type="checkbox" value="Careers"/>&nbsp; Dining</label>
                                                                <label class="checkbox-inline"><input id="inlineCheckbox3" type="checkbox" value="Careers"/>&nbsp; Facilities</label>
                                                                <label class="checkbox-inline"><input id="inlineCheckbox3" type="checkbox" value="Careers"/>&nbsp; Contact</label>

                                                            </div>
                                                            <div class="margin-top-10px"><strong>Rooms:</strong></div>
                                                            <div class="checkbox-list">
                                                                <label class="checkbox-inline"><input id="inlineCheckbox1" type="checkbox" value="Rooms &amp; Suites"/>&nbsp; Rooms &amp; Suites</label>
                                                                <label class="checkbox-inline"><input id="inlineCheckbox2" type="checkbox" value="Apartments"/>&nbsp; Apartments</label>

                                                            </div>

                                                            <div class="margin-top-10px"><strong>Events &amp; Meetings:</strong></div>
                                                            <div class="checkbox-list">
                                                                <label class="checkbox-inline"><input id="inlineCheckbox1" type="checkbox" value="Weddings"/>&nbsp; Weddings</label>
                                                                <label class="checkbox-inline"><input id="inlineCheckbox2" type="checkbox" value="Events &amp; Meetings"/>&nbsp; Events &amp; Meetings</label>
                                                            </div>

                                                            <div class="margin-top-10px"><strong>About Us:</strong></div>
                                                            <div class="checkbox-list">
                                                                <label class="checkbox-inline"><input id="inlineCheckbox1" type="checkbox" value="About Ritz Garden Hotel"/>&nbsp; About Ritz Garden Hotel</label>
                                                                <label class="checkbox-inline"><input id="inlineCheckbox2" type="checkbox" value="Gallery"/>&nbsp; Gallery</label>
                                                            </div>-->




                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-5 col-md-8"> <button  class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END MODAL add new user -->
                            <!--Modal delete selected items start-->
                            <div id="modal-delete-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                            <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-actions">
                                                <div class="col-md-offset-4 col-md-8"> <button class="btn btn-red" id ="delete_all_selected_users">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal delete selected items end -->
                            <!--Modal delete all items start-->
                            <div id="modal-delete-all" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                            <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-actions">
                                                <div class="col-md-offset-4 col-md-8"> <button class="btn btn-red" id="delete_all_users">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal delete all items end -->
                        </div>
                        <div class="portlet-body">
                            <div class="clearfix"></div>
                            <div class="table-responsive mtl">
                                <table id="example1" class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th width="1%"><input type="checkbox" id="userParent" /></th>
                                        <th>#</th>
                                        <th><a>ID</a></th>
                                        <th><a>Name</a></th>
                                        <th><a>Email</a></th>
                                        <th><a>Created Date</a></th>
                                        <th><a>Role</a></th>
                                        <th><a>Status</a></th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $key=>$user)

                                        <tr>

                                        <td><input type="checkbox" class="userchildren users" data-id="{{$user->id }}"/></td>
                                        <td>{{++$key}}</td>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>{{$user->role['name']}}</td>
                                        <td>
                                            @if($user->status)
                                                <span class="label label-sm label-success">Active</span>
                                            @else
                                                <span class="label label-sm label-danger">InActive</span>
                                            @endif

                                        </td>
                                        <td><a  href="#"  data-hover="tooltip" data-placement="top" data-target="#modal-edit-user-{{$user->id}}" data-toggle="modal"  title="Edit" class="editLink" ><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a>
                                            <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$user->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                            <!--Modal edit administrator start-->
                                            <div id="modal-edit-user-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                <div class="modal-dialog modal-wide-width">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                            <h4 id="modal-login-label3" class="modal-title">Edit Access</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form">
                                                                <form class="form-horizontal" action="/admin/users/{{$user->id}}/update" method="post">
                                                                    <div class="form-group">
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <label class="col-md-3 control-label">Status</label>
                                                                        <div class="col-md-9">
                                                                            <div data-on="success" data-off="primary" class="status">
                                                                                <input type="checkbox" name="status"
                                                                                       @if($user->status == 1)
                                                                                       checked="checked"
                                                                                       @endif
                                                                                       value="1"
                                                                                />                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Name <span class='require'>*</span></label>
                                                                        <div class="col-md-6">
                                                                            <input name="name" type="text" class="form-control" value="{{$user->name}}" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Role <span class='require'>*</span></label>
                                                                        <div class="col-md-3">
                                                                            <select class="form-control" name="role_id" required>
                                                                                @foreach($roles as $role)
                                                                                    <option name="role_id" value="{{$role->id}}" @if($role->id == $user->role_id) selected="selected" @endif>{{$role->name}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Email Address <span class='require'>*</span></label>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                                                <input name="email" type="email" placeholder="Email Address" class="form-control" value="{{$user->email}}" required/></div>
                                                                            <span class="help-block">Email address is your login ID.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="password" class="control-label col-md-3">Password </label>

                                                                        <div class="col-md-6">
                                                                            <div class="input-icon"><i class="fa fa-key"></i>
                                                                                <input name="password" class="password" type="password" placeholder="Password" class="form-control"  value="" /><span class="text-10px">(Password length should be between 6-12 characters)</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="password" class="control-label col-md-3">Confirm Password</label>
                                                                        <div class="col-md-6">
                                                                            <div class="input-icon"><i class="fa fa-key"></i>
                                                                                <input class="confirm_password" type="password" placeholder="Confirm Password" class="form-control" value=""/><span class="text-10px">(Password length should be between 6-12 characters)</span>
                                                                            </div>
                                                                            <div class="message"></div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Permission &amp; Edit Pages</label>
                                                                        <div class="col-md-9 margin-top-5px">
                                                                            <div class="text-blue border-bottom">You can select multiple pages from the below section.</div>
                                                                            <div class="margin-top-10px"><strong>Pages:</strong></div>
                                                                            <div class="checkbox-list">
                                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="home" @if($user->hasPermission($user, 'home')) checked="checked" @endif/>&nbsp; Home</label>
                                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="patients_visitors" @if($user->hasPermission($user, 'patients_visitors')) checked="checked" @endif/>&nbsp; Patients &amp; Visitors</label>
                                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="services_procedures" @if($user->hasPermission($user, 'services_procedures')) checked="checked" @endif/>&nbsp; Services &amp; Procedures</label>
                                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="screening_packages" @if($user->hasPermission($user, 'screening_packages')) checked="checked" @endif/>&nbsp; Screening &amp; Packages</label>

                                                                            </div>
                                                                            <div class="checkbox-list">
                                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="gps_partners" @if($user->hasPermission($user, 'gps_partners')) checked="checked" @endif/>&nbsp; GPs &amp; Partners</label>
                                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="contact_us" @if($user->hasPermission($user, 'contact_us')) checked="checked" @endif/>&nbsp; Contact Us / Feecback &amp; Enquiry</label>
                                                                            </div>
                                                                            <div class="margin-top-10px"><strong>Find Doctor:</strong></div>
                                                                            <div class="checkbox-list">
                                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="find_doctor" @if($user->hasPermission($user, 'find_doctor')) checked="checked" @endif/>&nbsp;  Find Doctor</label>
                                                                                <label class="checkbox-inline"><input  name="permission[]" type="checkbox" value="consultant_appointments" @if($user->hasPermission($user, 'consultant_appointments')) checked="checked" @endif/>&nbsp; Consultant Appointments</label>

                                                                            </div>

                                                                            <!--<div class="checkbox-list margin-top-10px">
                                                                                <label class="checkbox-inline"><input id="inlineCheckbox1" type="checkbox" value="All Pages"/>&nbsp; All Pages</label>
                                                                                <label class="checkbox-inline"><input id="inlineCheckbox2" type="checkbox" value="Index"/>&nbsp; Index</label>
                                                                                <label class="checkbox-inline"><input id="inlineCheckbox3" type="checkbox" value="Careers"/>&nbsp; Promotions</label>
                                                                                <label class="checkbox-inline"><input id="inlineCheckbox3" type="checkbox" value="Careers"/>&nbsp; Dining</label>
                                                                                <label class="checkbox-inline"><input id="inlineCheckbox3" type="checkbox" value="Careers"/>&nbsp; Facilities</label>
                                                                                <label class="checkbox-inline"><input id="inlineCheckbox3" type="checkbox" value="Careers"/>&nbsp; Contact</label>

                                                                            </div>
                                                                            <div class="margin-top-10px"><strong>Rooms:</strong></div>
                                                                            <div class="checkbox-list">
                                                                                <label class="checkbox-inline"><input id="inlineCheckbox1" type="checkbox" value="Rooms &amp; Suites"/>&nbsp; Rooms &amp; Suites</label>
                                                                                <label class="checkbox-inline"><input id="inlineCheckbox2" type="checkbox" value="Apartments"/>&nbsp; Apartments</label>

                                                                            </div>

                                                                            <div class="margin-top-10px"><strong>Events &amp; Meetings:</strong></div>
                                                                            <div class="checkbox-list">
                                                                                <label class="checkbox-inline"><input id="inlineCheckbox1" type="checkbox" value="Weddings"/>&nbsp; Weddings</label>
                                                                                <label class="checkbox-inline"><input id="inlineCheckbox2" type="checkbox" value="Events &amp; Meetings"/>&nbsp; Events &amp; Meetings</label>
                                                                            </div>

                                                                            <div class="margin-top-10px"><strong>About Us:</strong></div>
                                                                            <div class="checkbox-list">
                                                                                <label class="checkbox-inline"><input id="inlineCheckbox1" type="checkbox" value="About Ritz Garden Hotel"/>&nbsp; About Ritz Garden Hotel</label>
                                                                                <label class="checkbox-inline"><input id="inlineCheckbox2" type="checkbox" value="Gallery"/>&nbsp; Gallery</label>
                                                                            </div>-->




                                                                        </div>
                                                                    </div>
                                                                    <div class="form-actions">
                                                                        <div class="col-md-offset-5 col-md-8"> <button  class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--END MODAL edit administrator -->
                                            <!--Modal delete start-->
                                            <div id="modal-delete-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                            <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this access? </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><strong>#{{$key}}:</strong> {{$user->name}}</p>
                                                            <form class="form-horizontal" action="/admin/users/{{$user->id}}/delete" method="post">

                                                            <div class="form-actions">
                                                                <div class="col-md-offset-5 col-md-8"> <button  class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="9"></td>
                                    </tr>
                                    </tfoot>
                                </table>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end porlet -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
@stop

@section('end_scripts')
        <script type="text/javascript">

        $('.lem').removeClass('active');
        $('.lem_administrators_list').addClass('active');
        $(document).ready(function() {

            $(document).on('click','.editLink',function(e) {
                if(!$(".status").hasClass('make-switch')) {
                    $(".status").addClass("make-switch");
                    $("#addLinkCheck").removeClass("make-switch");

                    var head= document.getElementsByTagName('head')[0];
                    var script= document.createElement('script');
                    script.src= '/admin_html/vendors/bootstrap-switch/js/bootstrap-switch.min.js';
                    head.appendChild(script);
                }
            });
            $(document).on('click','#addLink',function(e) {
                if($("#addLinkCheck").hasClass("make-switch")) {
                    $("#addLinkCheck").addClass("make-switch");
                }
            });
            $('#userParent').on('click', function(e) {
                if($(this).is(':checked',true))
                {
                    $(".userchildren").prop('checked', true);
                } else {
                    $(".userchildren").prop('checked',false);
                }

            });
            $('#delete_all_selected_users').on('click', function(e) {
                var allusers = [];
                $(".users:checked").each(function() {
                    allusers.push($(this).attr('data-id'));
                });
                if(allusers.length <=0)
                {
                    alert("Please select row.");
                }  else {
                    var join_selected_values = allusers.join(",");
                    $.ajax({
                        url: '/admin/users/deleteSelected',
                        type: 'post',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            console.log(data);
                            $(".users:checked").each(function() {
                                $("#modal-delete-selected").modal('hide');
                                $(this).parents("tr").remove();
                            });
                        },
                        error: function (data) {
                            console.log(data.responseText);
                        }
                    });
                    $.each(allusers, function( index, value ) {
                        $('table tr').filter("[data-row-id='" + value + "']").remove();
                    });
                }
            });
            $('#delete_all_users').on('click', function(e) {
                var allusers = [];
                $(".users").each(function() {
                    allusers.push($(this).attr('data-id'));
                });
                $.ajax({
                    url: '/admin/users/deleteAll',
                    type: 'post',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        $(".users").each(function() {
                            $("#modal-delete-all").modal('hide');
                            $(this).parents("tr").remove();
                        });
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });
                $.each(allusers, function( index, value ) {
                    $('table tr').filter("[data-row-id='" + value + "']").remove();
                });
            });
        });
        $('.password, .confirm_password').on('keyup', function () {
            if ($('.password').val() == $('.confirm_password').val()) {
                $('.message').html('Matching').css('color', 'green');
                $('form').unbind('submit');

            } else{
                $("form").submit(function(e){
                    e.preventDefault();
                });
                $('.message').html('Not Matching').css('color', 'red');
            }

        });
    </script>
@endsection
