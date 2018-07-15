@extends('layouts.admin')

@section('title')
    <title>KPJ Advisor Series :: Listing</title>
@stop


@section('content')
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->

        <div class="page-header-breadcrumb">
            <div class="page-heading hidden-xs">
                <h1 class="page-title">Global Settings</h1>
            </div>

            <!-- InstanceBeginEditable name="EditRegion1" -->
            <ol class="breadcrumb page-breadcrumb">
                <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
                <li>Global Settings &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
                <li class="active">Footer - Edit</li>
            </ol>
            <!-- InstanceEndEditable --></div>
        <div class="page-content">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Footer <i class="fa fa-angle-right"></i> Edit</h2>
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
                    <div id="alert_place"></div>
                    <!--<div class="alert alert-success alert-dismissable">
                        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                        <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                        <p>The information has been saved/updated successfully.</p>
                    </div>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                        <i class="fa fa-times-circle"></i> <strong>Error!</strong>
                        <p>The information has not been saved/updated. Please correct the errors.</p>
                    </div>-->
                    <div class="pull-left"> Last updated: <span class="text-blue"><?php echo date('d M, Y @ h:ia',strtotime($footer_last_updated)); ?></span> </div>
                    <div class="clearfix"></div>
                    <p></p>
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#copyrighttext" data-toggle="tab">Copyright Text &amp; Privacy Policy</a></li>
                        <li><a href="#site-links" data-toggle="tab">Site Links</a></li>
                        <li><a href="#newsletter" data-toggle="tab">Newsletter</a></li>
                        <li><a href="#other-hospital" data-toggle="tab">KPJ Other Hospitals</a></li>
                        <li><a href="#get-in-touch" data-toggle="tab">Get In Touch</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div id="copyrighttext" class="tab-pane fade in active">
                            <div class="portlet">
                                <div class="portlet-header">
                                    <div class="caption">Copyright Text</div>
                                    <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive mtl">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($copyright as $text)
                                                <tr>
                                                    <td><?php echo htmlspecialchars_decode($text->details); ?></td>
                                                    <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-text-{{ $text->id }}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <!--<a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-1" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>-->
                                                        <!--Modal Edit copyright start-->
                                                        <div id="modal-edit-text-{{ $text->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                            <div class="modal-dialog modal-wide-width">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                        <h4 id="modal-login-label3" class="modal-title">Copyright Text Edit</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form">
                                                                            <form method="post" action="/admin/add_footer_setup/edit" id="copyrightform" class="form-horizontal copyrightform">
                                                                                <input type="hidden" name="key" value="copyright">
                                                                                <input type="hidden" name="id" value="{{ $text->id }}">
                                                                                <input type="hidden" name="submit" value="edit">
                                                                                <input type="hidden" name="detail" id="copyrightdetail" value="">
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Copyright Text</label>
                                                                                    <div class="col-md-9">
                                                                                        <div class="text-blue border-bottom">You can edit the content by clicking the text section below.</div>
                                                                                        <div class="copyrightdiv" contenteditable="true">{!!htmlspecialchars_decode($text->details)!!} </div>
                                                                                    </div>
                                                                                </div>
                                                                                <button style="display:none" id="cprform"></button>
                                                                                <div class="form-actions">
                                                                                    <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red savecopyright">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--END MODAL Edit copyright -->
                                                        <!--Modal delete start-->
                                                        <div id="modal-delete-1" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                        <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the copyright text? </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Copyright &copy; 2016 KPJ Sentosa KL Specialist Hospital. All rights reserved.</p>
                                                                        <div class="form-actions">
                                                                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                                                <td colspan="2"></td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- end table responsive -->
                                </div>
                                <!-- end portlet body -->
                            </div>
                            <!-- End porlet -->
                            <div class="portlet">
                                <div class="portlet-header">
                                    <div class="caption">Privacy Policy</div>
                                    <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive mtl">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($privacypolicy as $text)
                                                <tr>
                                                    <td><?php echo htmlspecialchars_decode($text->details); ?></td>
                                                    <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-privacy-{{ $text->id }}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <!--<a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-privacy" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>-->
                                                        <!--Modal Edit privacy policy start-->
                                                        <div id="modal-edit-privacy-{{ $text->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                            <div class="modal-dialog modal-wide-width">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                        <h4 id="modal-login-label3" class="modal-title">Privacy Policy Edit</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form">
                                                                            <form id="privacyform" class="form-horizontal privacyform" method="post" action="/admin/add_footer_setup/edit">
                                                                                <input type="hidden" name="key" value="privacypolicy">
                                                                                <input type="hidden" name="id" value="{{ $text->id }}">
                                                                                <input type="hidden" name="submit" value="edit">
                                                                                <input type="hidden" name="detail" id="privacydetail" value="">
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Privacy Policy Text</label>
                                                                                    <div class="col-md-9">
                                                                                        <div class="text-blue border-bottom">You can edit the content by clicking the text section below.</div>
                                                                                        <div contenteditable="true" class="privacydiv">{!!  html_entity_decode($text->details) !!}</div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-actions">
                                                                                    <button style="display:none" id="prcform"></button>
                                                                                    <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red saveprivacy">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--END MODAL Edit privacy policy -->
                                                        <!--Modal delete privacy policy start-->
                                                        <div id="modal-delete-privacy" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                        <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the privacy policy? </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>KPJ Sentosa KL Specialist Hospital is subject to the personal data protection principles under the Personal Data Protection Act 2010 (hereafter referred to as PDPA) with effect from 15 November 2013, which regulates the processing of personal data in commercial transactions. The terms "personal data", "processing" and "commercial transactions" shall have the meaning provided in the PDPA. KPJ Privacy Policy | Terms of Use</p>
                                                                        <div class="form-actions">
                                                                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                                                <td colspan="2"></td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- end table responsive -->
                                </div>
                                <!-- end portlet body -->
                            </div>
                            <!-- End porlet -->
                        </div>
                        <!-- end tab copyright text -->
                        <div id="site-links" class="tab-pane fade">
                            <div class="portlet">
                                <div class="portlet-header">
                                    <div class="caption">Site Links Listing</div>
                                    <br/>
                                    <p class="margin-top-10px"></p>
                                    <a href="#" data-target="#modal-add-sitelink" data-toggle="modal" class="btn btn-success editLink" id="addLink">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Delete</button>
                                        <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                        <ul role="menu" class="dropdown-menu">
                                            <!--wolf0518-->
                                            <li><a href="#" onclick="checkbox()" data-target="#modal-delete-selected-link" data-toggle="modal" id="delete_link_selected">Delete selected item(s)</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                                        </ul>
                                    </div>
                                    <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                                    <!--Modal add new site link start-->
                                    <div id="modal-add-sitelink" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                        <div class="modal-dialog modal-wide-width">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                    <h4 id="modal-login-label3" class="modal-title">Add New Site Link</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form">
                                                        <form class="form-horizontal" method="post" action="/admin/add_footer_setup/edit">
                                                            <input name="key" type="hidden" value="site_link">
                                                            <input name="submit" type="hidden" value="add">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Status</label>
                                                                <div class="col-md-6">
                                                                    <div data-on="success" data-off="primary" id="addLinkCheck" class="make-switch">
                                                                        <input type="checkbox" checked="checked" name="status" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Title </label>
                                                                <div class="col-md-6">
                                                                    <input  type="text" class="form-control" placeholder="eg. About Us" name="details">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">URL </label>
                                                                <div class="col-md-6">
                                                                    <input  type="text" name="url" class="form-control" placeholder="eg. http://www2.kpjsentosa.com.my/about-us">
                                                                </div>
                                                            </div>
                                                            <div class="form-actions">
                                                                <div class="col-md-offset-5 col-md-8"> <button  class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--whitewolf0518-->
                                    <div id="modal-delete-selected-kpj-link_error" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
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
                                    <!--END MODAL add new site link -->
                                    <!--Modal delete selected items start-->
                                    <div id="modal-delete-selected-kpj-link" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="link_selected"></div>
                                                   
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-4 col-md-8"> 
                                                            <!--wolf0518-->
                                                            <button class="btn btn-red" id="site_link" data-url="{{ url('/admin/for_kpj_link_delete_selected') }}">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                                                        <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal delete all items end -->
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive mtl">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <!--wolf0518-->
                                                <th width="1%"><input type="checkbox" id="headcheck"></th>
                                                <th>#</th>
                                                <th>Status</th>
                                                <th>Title</th>
                                                <th>URL</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($site_links as $key=>$data)
                                                <tr>
                                                    <!--wolf0518-->
                                                    <td><input type="checkbox" class="newcheck" data-id="{{$data->id }}" data-title="{{ $data->details }}"></td>
                                                    <td>{{ $data->id }}</td>
                                                    <td>
                                                        @if($data->status)
                                                            <span class="label label-sm label-success">Active</span>
                                                        @else
                                                            <span class="label label-sm label-danger">InActive</span>
                                                        @endif
                                                    </td>
                                                    </td>
                                                    <td>{{ $data->details }}</td>
                                                    <td><a href="{{ $data->line1 }}">{{ $data->line1 }}</a></td>
                                                    <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-sitelink-{{ $data->id }}" data-toggle="modal" title="Edit" class="editLink"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-sitelink-{{ $data->id }}" data-toggle="modal"  ><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                        <!--Modal Edit site link start-->
                                                        <div id="modal-edit-sitelink-{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                            <div class="modal-dialog modal-wide-width">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                        <h4 id="modal-login-label3" class="modal-title">Edit Site Link</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form">
                                                                            <form class="form-horizontal" method="post" action="/admin/add_footer_setup/edit">
                                                                                <input type ="hidden" name="key" value="site_link">
                                                                                <input type ="hidden" name="id" value="{{ $data->id }}">
                                                                                <input type ="hidden" name="submit" value="edit">
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Status</label>
                                                                                    <div class="col-md-6">
                                                                                        <div data-on="success" data-off="primary" class="status">
                                                                                            <input name="status" type="checkbox" @if ($data->status) checked="checked" @endif />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-lg-3 col-md-3 control-label">Title</label>
                                                                                    <div class="col-lg-6 col-md-6" >
                                                                                        <input style="width: 100%!important;"  type="text" class="form-control" name="details" placeholder="eg. About Us" value="{{ $data->details }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-lg-3 control-label">URL </label>
                                                                                    <div class="col-lg-6 col-md-6" >
                                                                                        <input style="width: 100%!important;"  type="text" name="url" class="form-control" placeholder="eg. http://www2.kpjsentosa.com.my/about-us" value="{{ $data->line1 }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-actions">
                                                                                    <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--END MODAL Edit site links -->
                                                        <!--Modal delete site links start-->
                                                        <div id="modal-delete-sitelink-{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                            <div class="modal-dialog">
                                                                <form class="form-horizontal" method="POST" action="/admin/add_footer_setup/edit" >
                                                                    <input type ="hidden" name="id" value="{{ $data->id }}">
                                                                    <input type ="hidden" name="submit" value="delete">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                            <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the link? </h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>{{ $data->details }}</p>
                                                                            <div class="form-actions">
                                                                                <div class="col-md-offset-4 col-md-8"> <button class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
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
                                    </div>
                                    <!-- end table responsive -->
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end site links -->
                        <div id="newsletter" class="tab-pane fade">
                            <div class="portlet">
                                <div class="portlet-header">
                                    <div class="caption">Newsletter Text Edit</div>
                                    <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive mtl">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{ $newsletter[0]->description }}</td>
                                                <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-newsletter" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <!--<a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-newsletter" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>-->
                                                    <!--Modal Edit newsletter start-->
                                                    <div id="modal-edit-newsletter" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                        <div class="modal-dialog modal-wide-width">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                    <h4 id="modal-login-label3" class="modal-title">Edit Newsletter</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form">

                                                                        <form class="form-horizontal" method="post" action="/admin/add_footer_setup/edit">
                                                                            <input type="hidden" name="key" value="newsletter" >
                                                                            <input type="hidden" name="submit" value="edit" >
                                                                            <input type="hidden" name="id" value="{{ $newsletter[0]->id }}" >
                                                                            <div class="form-group">
                                                                                <label class="col-md-3 control-label">Status</label>
                                                                                <div class="col-md-6">
                                                                                    <div data-on="success" data-off="primary" class="make-switch">
                                                                                        <input type="checkbox" checked="checked" name="status" @if ($newsletter[0]->status) checked=checked @endif>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                                                                <div class="col-md-6">
                                                                                    <textarea  name="description" class="form-control" placeholder="eg. Sign up with your name and email to get latest news &amp; events, promotions &amp; packages.">{{ $newsletter[0]->description }}</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-3 control-label">Icon <span class='require'>*</span></label>
                                                                                <div class="col-md-6">
                                                                                    <input type="text" class="form-control" id="inputContent" name="details" placeholder="eg. fa-envelope" value="{{ $newsletter[0]->details }}">
                                                                                    <div class="help-block">Please refer here for more <a href="icons.html" target="_blank">icon options.</a></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-actions">
                                                                                <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                                            </div>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--END MODAL Edit newsletter -->
                                                    <!--Modal delete start-->
                                                    <div id="modal-delete-newsletter" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this? </h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Sign up with your name and email to get latest news &amp; events, promotions &amp; packages.</p>
                                                                    <div class="form-actions">
                                                                        <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- modal delete end -->
                                                </td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="2"></td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- end table responsive -->
                                </div>
                                <!-- end portlet body -->
                            </div>
                            <!-- End porlet -->
                        </div>
                        <!-- end tab newsletter text -->
                        <div id="other-hospital" class="tab-pane fade">
                            <div class="portlet">

                                <div class="portlet-header">
                                    <div class="caption">KPJ Other Hospitals Listing</div>
                                    <br/>
                                    <p class="margin-top-10px"></p>
                                    <a href="#" data-target="#modal-add-hospital" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Delete</button>
                                        <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#" data-target="#modal-delete-selected-hospital" data-toggle="modal" id="delete_visitor_selected">Delete selected item(s)</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" data-target="#modal-delete-all-hospital" data-toggle="modal">Delete all</a></li>
                                        </ul>
                                    </div>
                                    <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                                    <!--Modal add new hospital start-->
                                    <div id="modal-add-hospital" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                        <div class="modal-dialog modal-wide-width">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                    <h4 id="modal-login-label3" class="modal-title">Add New Hospital</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form">
                                                        <form class="form-horizontal" method="post" action="/admin/add_footer_setup/edit">
                                                            <input type="hidden" name="key" value="k_p_j"/>
                                                            <input type="hidden" name="submit" value="add"/>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Status</label>
                                                                <div class="col-md-6">
                                                                    <div data-on="success" data-off="primary" class="make-switch">
                                                                        <input type="checkbox" name="status" checked="checked"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Title </label>
                                                                <div class="col-md-6">
                                                                    <input  name="details" type="text" class="form-control" placeholder="eg. KPJ Johor Specialist Hospital">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">URL </label>
                                                                <div class="col-md-6">
                                                                    <input  name="hospital_url" type="text" class="form-control" placeholder="eg. https://www.kpjjohor.com/" />
                                                                </div>
                                                            </div>
                                                            <div class="form-actions">
                                                                <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="modal-delete-selected-kpj-hospital_error" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
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

                                    <!--END MODAL add new hospital link -->
                                    <!--Modal delete selected items start-->
                                    <div id="modal-delete-selected-kpj-hospital" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="visitor_selected"></div>

                                                    <div class="form-actions">
                                                        <div class="col-md-offset-4 col-md-8">
                                                            <button class="btn btn-red delete_all_kpj_hospital" data-url="{{ url('/admin/for_kpj_hospital_delete_selected') }}">Yes &nbsp;<i class="fa fa-check"></i></button>
                                                            &nbsp;
                                                            <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal delete selected items end -->
                                    <!--Modal delete all items start-->
                                    <div id="modal-delete-all-hospital" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-actions">
                                                        <form action="{{ url('/admin/for_kpj_hospital_all_delete') }}"  method="POST">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <div class="col-md-offset-4 col-md-8">
                                                                <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>
                                                                &nbsp;
                                                                <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;
                                                                    <i class="fa fa-times-circle"></i>
                                                                </a>
                                                            </div>
                                                        </form>
                                                        <!-- <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal delete all items end -->
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive mtl">

                                        <table class="table table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <!-- <th width="1%"><input type="checkbox"></th> -->
                                                <th width="1%"><input type="checkbox" id="master_kpj_hospital"/></th>
                                                <th>#</th>
                                                <th>Status</th>
                                                <th>Title</th>
                                                <th>URL</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($k_p_j as $data)
                                                <tr>
                                                    <td>
                                                    <!-- <input type="checkbox" name="k_p_j_ids[]" id="k_p_j_id" value="{{$data->id}}"/> -->
                                                        <input type="checkbox"  class="sub_chk01"  data-id="{{$data->id }}" data-title="{{ $data->details }}"/>
                                                    </td>
                                                    <td>{{ $data->id }}</td>
                                                    <td>
                                                        @if($data->status)
                                                            <span class="label label-sm label-success">Active</span>
                                                        @else
                                                            <span class="label label-sm label-danger">InActive</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $data->details }}</td>
                                                    <td><a href="{{ $data->line1 }}">{{ $data->line1 }}</a></td>
                                                    <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-hospital-{{ $data->id }}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-hospital-{{ $data->id }}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                        <!--Modal Edit hospital start-->
                                                        <div id="modal-edit-hospital-{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                            <div class="modal-dialog modal-wide-width">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                        <h4 id="modal-login-label3" class="modal-title">Edit Hospital</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form">
                                                                            <form class="form-horizontal" method="post" action="/admin/add_footer_setup/edit">
                                                                                <input type="hidden" name="id" value="{{ $data->id }}">
                                                                                <input type="hidden" name="key" value="k_p_j">
                                                                                <input type="hidden" name="submit" value="edit">
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Status</label>
                                                                                    <div class="col-md-6">
                                                                                        <div data-on="success" data-off="primary" class="make-switch">
                                                                                            <input name="status" type="checkbox" @if($data->status)  checked="checked" @endif  />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-lg-3 col-md-3 control-label">Title</label>
                                                                                    <div class="col-lg-6 col-md-6" >
                                                                                        <input style="width: 100%!important;"  type="text" class="form-control" name="details" placeholder="eg. About Us" value="{{ $data->details }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-lg-3 control-label">URL </label>
                                                                                    <div class="col-lg-6 col-md-6" >
                                                                                        <input style="width: 100%!important;"  type="text" name="hospital_url" class="form-control" placeholder="eg. http://www2.kpjsentosa.com.my/about-us" value="{{ $data->line1 }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-actions">
                                                                                    <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--END MODAL Edit hospital -->
                                                        <!--Modal delete hospital start-->
                                                        <div id="modal-delete-hospital-{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <form method="post" action="/admin/add_footer_setup/edit">
                                                                        <input type="hidden" name="id" value="{{$data->id}}">

                                                                        <input type="hidden" name="submit" value="delete">
                                                                        <div class="modal-header">
                                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                            <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the hospital? </h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>{{ $data->line1 }}</p>
                                                                            <div class="form-actions">
                                                                                <div class="col-md-offset-4 col-md-8">
                                                                                    <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>
                                                                                    &nbsp;
                                                                                    <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
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

                                    </div>
                                    <!-- end table responsive -->
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                        <!-- end tab kpj other hospitals -->
                        <div id="get-in-touch" class="tab-pane fade">
                            <div class="portlet">
                                <div class="portlet-header">
                                    <div class="caption">Get In Touch Text Edit</div>
                                    <br/>
                                    <p class="margin-top-10px"></p>
                                    <a href="#" data-target="#modal-add-getintouch" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Delete</button>
                                        <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#" data-target="#modal-delete-selected-getintouch" data-toggle="modal">Delete selected item(s)</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" data-target="#modal-delete-all-getintouch" data-toggle="modal">Delete all</a></li>
                                        </ul>
                                    </div>
                                    <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                                    <!--Modal add new get in touch start-->
                                    <div id="modal-add-getintouch" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                        <div class="modal-dialog modal-wide-width">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                    <h4 id="modal-login-label3" class="modal-title">Add New Get In Touch</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form">
                                                        <form action="/admin/add_footer_setup/add" method="post" class="form-horizontal">
                                                            <div class="form-group">
                                                                <input type="hidden" name="tab" value="getintouch">
                                                                <label class="col-md-3 control-label">Status</label>
                                                                <div class="col-md-6">
                                                                    <div data-on="success" data-off="primary" class="make-switch">
                                                                        <input type="checkbox" name="status" checked="checked"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Icon <span class='require'>*</span></label>
                                                                <div class="col-md-6">
                                                                    <input type="text" name="icon" class="form-control" id="inputContent" placeholder="eg. fa-home">
                                                                    <div class="help-block">Please refer here for more <a href="icons.html" target="_blank">icon options.</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                                                <div class="col-md-6">
                                                                    <textarea class="form-control" name="title"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-actions">
                                                                <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a>  </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END MODAL add new get in touch -->
                                    <!--Modal delete selected items start-->
                                    <div id="modal-delete-selected-getintouch" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="alert alert-danger" role="alert">Please select at least one item for delete</div>
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal delete selected items end -->
                                    <!--Modal delete all items start-->
                                    <div id="modal-delete-all-getintouch" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal delete all items end -->
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive mtl">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th width="1%"><input type="checkbox"></th>
                                                <th>#</th>
                                                <th>Status</th>
                                                <th>Icon</th>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($getintouch as $touch)
                                                <tr>

                                                    <td><input type="checkbox"></td>
                                                    <td>{{ $touch->id }}</td>
                                                    <td>@if($touch->status)<span class="label label-sm label-success">Active</span>@else <span class="label label-sm label-danger">InActive</span>@endif</td>
                                                    <td><i class="{{ $touch->details }}"></i></td>
                                                    <td>{{ $touch->description }}</td>
                                                    <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-getintouch-{{ $touch->id }}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="javascript:void(0)" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-getintouch-{{ $touch->id }}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                        <!--Modal Edit get in touch start-->
                                                        <div id="modal-edit-getintouch-{{ $touch->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                            <div class="modal-dialog modal-wide-width">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                        <h4 id="modal-login-label3" class="modal-title">Edit Get In Touch</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form">
                                                                            <form action="/admin/add_footer_setup/edit" method="post" class="form-horizontal">
                                                                                <input type="hidden" name="id" value="{{ $touch->id }}">
                                                                                <input type="hidden" name="submit" value="edit">
                                                                                <input type="hidden" name="key" value="getintouch">
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Status</label>
                                                                                    <div class="col-md-6">
                                                                                        <div data-on="success" data-off="primary" class="make-switch">
                                                                                            <input type="checkbox" {{ $touch->status ? "checked=checked":''}} name="status" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Icon <span class='require'>*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text" name="details" class="form-control" id="inputContent" placeholder="eg. fa-home" value="{{ $touch->details }}">
                                                                                        <div class="help-block">Please refer here for more <a href="icons.html" target="_blank">icon options.</a></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <textarea name="description" class="form-control" placeholder="">{{ $touch->description }}</textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-actions">
                                                                                    <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--END MODAL Edit get in touch -->
                                                        <!--Modal delete get in touch start-->
                                                        <div id="modal-delete-getintouch-{{ $touch->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <form action="/admin/add_footer_setup/edit" method="post" class="form-horizontal">
                                                                        <input type="hidden" name="id" value="{{ $touch->id }}">
                                                                        <input type="hidden" name="submit" value="delete">
                                                                        <div class="modal-header">
                                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                            <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the info? </h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>{{ $touch->description }}</p>
                                                                            <div class="form-actions">
                                                                                <div class="col-md-offset-4 col-md-8"> <button class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
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
                                    </div>
                                    <!-- end table responsive -->
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- end portlet -->
                            <div class="portlet">
                                <div class="portlet-header">
                                    <div class="caption">Social Links Listing</div>
                                    <br/>
                                    <p class="margin-top-10px"></p>
                                    <a href="#" data-target="#modal-add-social" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Delete</button>
                                        <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#" data-target="#modal-delete-selected-social" data-toggle="modal">Delete selected item(s)</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" data-target="#modal-delete-all-social" data-toggle="modal">Delete all</a></li>
                                        </ul>
                                    </div>
                                    <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                                    <!--Modal add new social link start-->
                                    <div id="modal-add-social" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                        <div class="modal-dialog modal-wide-width">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                    <h4 id="modal-login-label3" class="modal-title">Add New Social Link</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form">
                                                        <form class="form-horizontal" method ="POST" action="/admin/add_footer_setup/edit" >
                                                            <input type="hidden" name="key" value="social_links">
                                                            <input type="hidden" name="submit" value="add">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Status</label>
                                                                <div class="col-md-6">
                                                                    <div data-on="success" data-off="primary" class="make-switch">
                                                                        <input type="checkbox" checked="checked" name="status" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" placeholder="eg. Facebook" name="description">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Icon <span class='require'>*</span></label>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" id="inputContent" placeholder="eg. fa-facebook" name="details">
                                                                    <div class="help-block">Please refer here for more <a href="../admin_html/icons_list.html" target="_blank">icon options.</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">URL <span class='require'>*</span></label>
                                                                <div class="col-md-6">
                                                                    <input type="text" name="social_url" class="form-control" placeholder="eg. https://www.facebook.com/KPJ-Sentosa-KL-Specialist-Hospital-Events-109237816094300/">
                                                                </div>
                                                            </div>
                                                            <div class="form-actions">
                                                                <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END MODAL add new social -->
                                    <!--Modal delete selected items start-->
                                    <div id="modal-delete-selected-social" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="alert alert-danger" role="alert">Please select at least one item for delete</div>
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal delete selected items end -->
                                    <!--Modal delete all items start-->
                                    <div id="modal-delete-all-social" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal delete all items end -->
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive mtl">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th width="1%"><input type="checkbox" id="socialParent"></th>
                                                <th>#</th>
                                                <th>Status</th>
                                                <th>Icon</th>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($social_links as $data)
                                                <tr>
                                                    <td><input type="checkbox" class="socialchildren"></td>
                                                    <td>{{ $data->id }}</td>
                                                    @if($data->status)
                                                        <td><span class="label label-sm label-success">Active</span></td>
                                                    @else
                                                        <td><span class="label label-sm label-danger">InActive</span></td>
                                                    @endif
                                                    <td>{{ $data->details }}</td>
                                                    <td>{{ $data->description }}</td>
                                                    <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-social-{{ $data->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-social-{{ $data->id }}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                        <!--Modal Edit social start-->
                                                        <div id="modal-edit-social-{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                            <div class="modal-dialog modal-wide-width">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                        <h4 id="modal-login-label3" class="modal-title">Edit Social</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form">
                                                                            <form class="form-horizontal" method="POST" action="/admin/add_footer_setup/edit">
                                                                                <input type="hidden" name="key" value="social_links" style="width: 100%">
                                                                                <input type="hidden" name="id" value="{{ $data->id }}" style="width: 100%">
                                                                                <input type="hidden" name="submit" value="edit">
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Status</label>
                                                                                    <div class="col-md-6">
                                                                                        <div data-on="success" data-off="primary" class="make-switch">
                                                                                            <input type="checkbox" checked="checked" style="width: 100%" name="status" @if($data->status) checked=checked @endif />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text" class="form-control"  name="description" id="inputContent" placeholder="eg. Facebook" value="{{ $data->description }}" style="width: 100%">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">Icon <span class='require'>*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input name="details" type="text" class="form-control" id="inputContent" placeholder="eg. fa-facebook" value="{{ $data->details }}" style="width: 100%">
                                                                                        <div class="help-block">Please refer here for more <a href="icons.html" target="_blank">icon options.</a></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label">URL <span class='require'>*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text" class="form-control" id="inputContent" placeholder="eg. https://www.facebook.com/KPJ-Sentosa-KL-Specialist-Hospital-Events-109237816094300/" value="{{ $data->line1 }}" name="social_url" style="width: 100%">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-actions">
                                                                                    <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--END MODAL Edit social -->
                                                        <!--Modal delete social start-->
                                                        <div id="modal-delete-social-{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                            <div class="modal-dialog">
                                                                <form method="post" action="/admin/add_footer_setup/edit">
                                                                    <input type="hidden" name="id" value="{{$data->id}}">
                                                                    <input type="hidden" name="submit" value="delete">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                            <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the social link? </h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>{{ $data->details }}</p>
                                                                            <div class="form-actions">
                                                                                <div class="col-md-offset-4 col-md-8"> <button class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- modal delete end -->
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach>
                                        </table>
                                    </div>
                                    <!-- end table responsive -->
                                </div>
                            </div>
                            <!-- end portlet -->
                        </div>
                        <!-- end tab get in touch -->
                    </div>
                    <!-- end tab content -->
                    <div class="clearfix"></div>

                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->



        <script src="/admin_html/js/jquery-1.9.1.js"></script>
        <script type="text/javascript">
            $('.lem').removeClass('active');
            $('.lem_patients').addClass('active');
            $('#index-banner_info').add('.dataTables_length').add('#DataTables_Table_0_info').add('.dataTables_paginate').add('#index-banner_length').hide();
            $(document).on('hidden.bs.modal', function (e) {
                $(e.target).removeData('bs.modal');
                refresh: true
            });

            $('.editLink').on('click', function(e) {
                if(!$(".status").hasClass('make-switch')) {
                    $(".status").addClass("make-switch");
                    $("#addLinkCheck").removeClass("make-switch");

                    var head= document.getElementsByTagName('head')[0];
                    var script= document.createElement('script');
                    script.src= '/admin_html/vendors/bootstrap-switch/js/bootstrap-switch.min.js';
                    head.appendChild(script);
                }
            });
            $('#addLink').on('click', function(e) {
                if($("#addLinkCheck").hasClass("make-switch")) {
                    $("#addLinkCheck").addClass("make-switch");
                }
            });

            $('#master_kpj_hospital').on('click', function(e) {
                if($(this).is(':checked',true))
                {
                    $(".sub_chk01").prop('checked', true);
                } else {
                    $(".sub_chk01").prop('checked',false);
                }

            });
            $('#socialParent').on('click', function(e) {
                if($(this).is(':checked',true))
                {
                    $(".socialchildren").prop('checked', true);
                } else {
                    $(".socialchildren").prop('checked',false);
                }

            });

            $("#delete_visitor_selected").on('click', function(){

                var allVisitor = [];
                $(".sub_chk01:checked").each(function() {
                    allVisitor.push($(this).attr('data-id'));
                });
                if(allVisitor.length <=0){
                    $("#modal-delete-selected-kpj-hospital_error").modal();
                }else{
                    $("#modal-delete-selected-kpj-hospital_error").modal('hide');
                    $("#modal-delete-selected-kpj-hospital").modal();
                }

                var allVisitorTitle = [];
                $(".sub_chk01:checked").each(function() {

                    allVisitorTitle.push($(this).attr('data-title'));
                    var join_selected_visitor_title = allVisitorTitle.join("<br>");

                    $("#visitor_selected").html(join_selected_visitor_title);
                });
            });

            $('.delete_all_kpj_hospital').on('click', function(e) {
                var allVisitor = [];
                $(".sub_chk01:checked").each(function() {
                    allVisitor.push($(this).attr('data-id'));
                });
                if(allVisitor.length <=0)
                {
                    alert("Please select row.");
                }  else {
                    var join_selected_values = allVisitor.join(",");
                    $.ajax({
                        url: $(this).data('url'),
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            if (data['success']) {
                                $(".sub_chk01:checked").each(function() {
                                    $(this).parents("tr").remove();
                                    $("#modal-delete-selected-visitor").modal('hide');
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
                    $.each(allVisitor, function( index, value ) {
                        $('table tr').filter("[data-row-id='" + value + "']").remove();
                    });
                }
            });
            //wolf0518
            $('#site_link').on('click', function(e) {
                var allVisitor = [];
                $(".newcheck:checked").each(function() {
                    allVisitor.push($(this).attr('data-id'));
                });
                if(allVisitor.length <=0)
                {
                    alert("Please select row.");
                }  else {
                    var join_selected_values = allVisitor.join(",");
                    $.ajax({
                        url: $(this).data('url'),
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            if (data['success']) {
                                $(".newcheck:checked").each(function() {
                                    $(this).parents("tr").remove();
                                    $("#modal-delete-selected-links").modal('hide');
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
                    $.each(allVisitor, function( index, value ) {
                        $('table tr').filter("[data-row-id='" + value + "']").remove();
                    });
                }
            });
            $("#delete_link_selected").on('click', function(){

                var allVisitor = [];
                $(".newcheck:checked").each(function() {
                    allVisitor.push($(this).attr('data-id'));
                });
                if(allVisitor.length <=0){
                    $("#modal-delete-selected-kpj-link_error").modal();
                }else{
                    $("#modal-delete-selected-kpj-link_error").modal('hide');
                    $("#modal-delete-selected-kpj-link").modal();
                }

                var allVisitorTitle = [];
                $(".newcheck:checked").each(function() {

                    allVisitorTitle.push($(this).attr('data-title'));
                    var join_selected_visitor_title = allVisitorTitle.join("<br>");

                    $("#link_selected").html(join_selected_visitor_title);
                });
            });
            $("#headcheck").on('click', function(e) {
                if ($(this).prop("checked") == true) {
                    $(".newcheck").prop("checked", true);
                }
                else {
                    $(".newcheck").prop("checked", false);  
                }                
            });
            function checkbox()
            {
              var count =$(".newcheck:checked").length;
              if(count == 0)
              {
                $('.alertdata').show();
              }
              else
              {
                $('.alertdata').hide();
              }
              console.log('das');
            }
        </script>
@stop
