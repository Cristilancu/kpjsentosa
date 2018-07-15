@extends('layouts.admin')

@section('title')
    <title xmlns="http://www.w3.org/1999/html">KPJ Advisor Series :: Listing</title>
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
                <li class="active">Roles - Setup</li>
            </ol>
            <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Roles <i class="fa fa-angle-right"></i> Setup</h2>
                    <div class="clearfix"></div>
                    @if(Session::has('message'))
                        <div id="success" class="alert alert-success alert-dismissable" >
                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                            <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                            <p>{{ Session::get('message') }}.</p>
                        </div>

                    @endif
                    @if ($lastUpdate->last_update !== null)
                        <div class="pull-left"> Last updated: <span class="text-blue updated_date">{{date('d M, Y @ h:i a', strtotime($lastUpdate->last_update))}}</span> </div>
                    @endif
                    <div id="danger" class="alert alert-danger alert-dismissable" style="display:none;">
                        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                        <i class="fa fa-times-circle"></i> <strong>Error!</strong>
                        <p>The information has not been saved/updated. Please correct the errors.</p>
                    </div>
                    <div class="clearfix"></div>
                    <p></p>
                    <div class="clearfix"></div>
                </div>
                <!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="portlet">
                        <div class="portlet-header">
                            <div class="caption">Roles Listing</div>
                            <br/>
                            <p class="margin-top-10px"></p>
                            <a href="#" class="btn btn-success" data-target="#modal-add-group" data-toggle="modal">Add New Role &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Delete</button>
                                <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#" data-target="#modal-delete-selected"  data-toggle="modal" id="deleteAll">Delete selected item(s)</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                                </ul>
                            </div>
                             
                            <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                            <!--Modal add new user group start-->
                            <div id="modal-add-group" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog modal-wide-width">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                            <h4 id="modal-login-label3" class="modal-title">Add New Role</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form">
                                                <form class="form-horizontal" action="/admin/roles/store" method="post">
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Status <span class="text-red">*</span></label>
                                                        <div class="col-md-6">
                                                            <div data-on="success" data-off="primary" class="make-switch">
                                                                <input type="hidden" name="status" value="0">
                                                                <input type="checkbox" checked="checked" name="status" value="1"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name" class="col-md-4 control-label">Name <span class="text-red">*</span></label>
                                                        <div class="col-md-6">
                                                            <input name="name" type="text" class="form-control" placeholder="Role Name">
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-5 col-md-8"> <button  class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END MODAL add new user group -->
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
                                                <div id="selectedError" class="alert alert-danger" style="display:none">
                                                    <p>Please select at least one item for delete</p>
                                                </div>
                                                <div id="selectedAll" class="col-md-offset-4 col-md-8" style="display:none">
                                                    <button class="btn btn-red" id ="delete_all_selected_roles">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a>
                                                </div>
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
                                            <h4 id="modal-login-label4" class=  "modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-actions">

                                                    <div class="col-md-offset-4 col-md-8"> <button class="btn btn-red" id="delete_all_roles">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <div class="table-responsive mtl">
                                <table id="example1" class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th width="1%"><input type="checkbox" id="roleParent"/></th>
                                        <th>#</th>
                                        <th><a>Name</a></th>
                                        <th><a>Status</a></th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($roles as $key=>$role)
                                        <tr>
                                        <td><input type="checkbox" class="rolechildren roles" data-id="{{$role->id }}"/></td>
                                        <td>{{++$key}}</td>
                                        <td>{{$role->name}}</td>
                                        <td>
                                            @if($role->status)
                                                <span class="label label-sm label-success">Active</span>
                                            @else
                                                <span class="label label-sm label-danger">InActive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="#" data-hover="tooltip" data-placement="top" title="Edit" data-target="#modal-edit-role-{{$role->id}}" data-toggle="modal"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$role->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                            <!--Modal edit user group start-->
                                            <div id="modal-edit-role-{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                <div class="modal-dialog modal-wide-width">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                            <h4 id="modal-login-label3" class="modal-title">Edit Role</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form">
                                                                <form class="form-horizontal" action="/admin/roles/{{$role->id}}/update" method="post">
                                                                    <div class="form-group">
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <input type="hidden" name="_method" value="post">

                                                                        <label class="col-md-4 control-label">Status <span class="text-red">*</span></label>
                                                                        <div class="col-md-6">
                                                                            <div data-on="success" data-off="primary" class="make-switch">
                                                                                <input type="hidden" name="status" value="0">
                                                                                <input type="checkbox" name="status"
                                                                                       @if($role->status == 1)
                                                                                       checked="checked"
                                                                                       @endif
                                                                                       value="1"
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="name" class="col-md-4 control-label">Name <span class="text-red">*</span></label>
                                                                        <div class="col-md-6">
                                                                            <input name="name" type="text" class="form-control" placeholder="" value="{{$role->name}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="form-actions">
                                                                        <div class="col-md-offset-5 col-md-8"> <button  class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--END MODAL edit user group -->
                                            <!--Modal delete start-->
                                            <div id="modal-delete-{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                            <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this role? </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><strong>#{{$key}}:</strong> {{$role->name}}</p>
                                                            <div class="form-actions">
                                                                <div class="col-md-offset-4 col-md-8">
                                                                    <form class="form-horizontal" action="/admin/roles/{{$role->id}}/delete" method="post">
                                                                        <div class="form-group">
                                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        </div>
                                                                        <div class="col-md-offset-5 col-md-8"> <button  class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                                    </form>
                                                            </div>
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
                                        <td colspan="6"></td>
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
        <script>

            $('.lem').removeClass('active');
            $('.lem_user_group').addClass('active');
            $(document).ready(function() {
                $('#roleParent').on('click', function(e) {
                    if($(this).is(':checked',true))
                    {
                        $(".rolechildren").prop('checked', true);
                    } else {
                        $(".rolechildren").prop('checked',false);
                    }

                });
                $('#deleteAll').on('click', function(e) {
                    var length = $(".roles:checked").length;
                        if(length <=0) {
                            $('#selectedAll').css("display", "none")

                            $('#selectedError').css("display", "block")

                        } else {
                            $('#selectedError').css("display", "none")

                            $('#selectedAll').css("display", "block")

                        }
                });
                $('#delete_all_selected_roles').on('click', function(e) {
                    var allRoles = [];
                    $(".roles:checked").each(function() {
                        allRoles.push($(this).attr('data-id'));
                    });
                    if(allRoles.length <=0)
                    {
                        alert("Please select row.");
                    }  else {
                        var join_selected_values = allRoles.join(",");
                        $.ajax({
                            url: '/admin/roles/deleteSelected',
                            type: 'post',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: 'ids='+join_selected_values,
                            success: function (data) {
                                console.log(data);
                                    $(".roles:checked").each(function() {
                                        $("#modal-delete-selected").modal('hide');
                                        $(this).parents("tr").remove();
                                    });
                            },
                            error: function (data) {
                                console.log(data.responseText);
                            }
                        });
                        $.each(allRoles, function( index, value ) {
                            $('table tr').filter("[data-row-id='" + value + "']").remove();
                        });
                    }
                });
                $('#delete_all_roles').on('click', function(e) {
                    var allRoles = [];
                    $(".roles").each(function() {
                        allRoles.push($(this).attr('data-id'));
                    });
                        $.ajax({
                            url: '/admin/roles/deleteAll',
                            type: 'post',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            success: function (data) {
                                $(".roles").each(function() {
                                    $("#modal-delete-all").modal('hide');
                                    $(this).parents("tr").remove();
                                });
                            },
                            error: function (data) {
                                alert(data.responseText);
                            }
                        });
                        $.each(allRoles, function( index, value ) {
                            $('table tr').filter("[data-row-id='" + value + "']").remove();
                        });
                });
            });
        </script>
@stop