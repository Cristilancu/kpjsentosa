@extends('layouts.admin')

@section('title')
<title>Index Banners:: Listing</title>
  @stop
@section('content')
<?php   $th =[
            'option5'=>'',
            'option6'=>'Find Doctor',
            'option7'=>'Get Direction' ,          
            'option9'=>'Get Appointment',

        ];;?>

   <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
        
        <div class="page-header-breadcrumb">
          <div class="page-heading hidden-xs">
            <h1 class="page-title">Banners</h1>
          </div>
          
          <!-- InstanceBeginEditable name="EditRegion1" -->
          <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="/Wadmin">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li>Banners &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
            <li class="active">Index Banners - Listing</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" --> 
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Index Banners <i class="fa fa-angle-right"></i> Listing</h2>
              <div class="clearfix"></div>
            @include('common.alerts')
              <div class="clearfix"></div>
              <p></p>
              <div class="clearfix"></div>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Index Banners Listing</div>
                  <p class="clearfix margin-top-10px"></p>
                  <a href="javascript:void(0)" data-target="#modal-add-new" data-toggle="modal" class="btn btn-success">Add New Banner &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="javascript:void(0)" data-target="#modal-delete-selected" data-toggle="modal">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="javascript:void(0)" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
<div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal Add New Banner start-->
                  <div id="modal-add-new" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title">Add New Banner</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                            <form class="form-horizontal" method="post" action="/admin/index_banner/add" enctype="multipart/form-data">
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-6">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    <input type="checkbox" checked="checked" name='status'/>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group ">
                                <label class="col-md-3 control-label">Title <span class="require">*</span></label>
                                <div class="col-md-6">
                                  <input id="text" type="text" class="form-control" placeholder="eg. Care for Life" name="title" required="">
                                </div>
                              
                              </div>
                              note to programmer: above is an example of error message display if the field is not entered correctly. please apply to all other fields in all pages.
                              <div class="form-group">
                                <label class="col-md-3 control-label">Upload Banner <span class="require">*</span></label>
                                <div class="col-md-9">
                                  <div class="text-15px margin-top-10px">
                                    <input id="exampleInputFile2" type="file" name="image" accept=".gif, .jpg, .png, .jpeg"  />
                                    <br/>
                                    <span class="help-block">(Image dimension: 1900 x 682 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Banner Alt Text </label>
                                <div class="col-md-6">
                                  <input id="text" type="text" class="form-control" placeholder="eg. Care for Life" name="alt">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Start Date to End Date</label>
                                <div class="col-md-6">
                                  <div class="input-group input-daterange">
                                    <input type="text" name="start" class="form-control" />
                                    <span class="input-group-addon">to</span>
                                    <input type="text" name="end" class="form-control"/>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Display Order <span class="require">*</span></label>
                                <div class="col-md-2">
                                  <input type="text" class="form-control" placeholder="1" name='display_order' required>
                                </div>
                                <div class="col-md-9 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                              </div>
                              <h5 class="border-bottom">Banner Text &amp; Icon Position</h5>
                              <p class="text-blue">Please choose <strong>ONE</strong> of the following options for adding the banner text and icon.</p>
                              <div class="form-group">
                                <label class="col-md-3 control-label">
                                  <input type="radio" name="align" value='left' checked="checked" id='l1'>
                                  Text and icon align left or</label>
                                <div class="col-md-9" id='h1'>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label"> Banner Heading Text</label>
                                    <div class="col-md-9">
                                      <input id="text" type="text" class="form-control" placeholder="eg. Care for Life" name='heading_left'>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label"> Banner Sub Heading Text</label>
                                    <div class="col-md-9">
                                      <textarea name="sub_heading_left" class="form-control" placeholder="eg. Together we continuously care for society."></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Upload Icon Image </label>
                                    <div class="col-md-9">
                                      <div class="xs-margin"></div>
                                      <input id="exampleInputFile2" type="file" name="image_left" accept=".png" />
                                      <span class="help-block">(Image dimension: 80 x 80 pixels, PNG only, Max. 1MB) </span> </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Icon Image Alt Text</label>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" placeholder="eg. Heart" name="alt_left">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Enable Link Button</label>
                                    <div class="col-md-6">
                                      <div class="xss-margin"></div>
                                      <div class="radio-list">
                                        <label>
                                          <input id="inlineCheckbox1" type="radio" value="option5"  name="text_left" />
                                          &nbsp; None</label>
                                        <label>
                                          <input id="inlineCheckbox1" type="radio" value="option9"  name="text_left" />
                                          &nbsp; Get Appointment</label>
                                        <label>
                                          <input id="inlineCheckbox1" type="radio" value="option6"  name="text_left" checked="checked"  />
                                          &nbsp; Find Doctor</label>
                                        <label>
                                          <input id="inlineCheckbox1" type="radio" value="option7"  name="text_left" />
                                          &nbsp; Get Direction</label>
                                        <label>
                                          <input id="inlineCheckbox4" type="radio" value="option8"  name="text_left" />
                                          &nbsp; Others, please specify:</label>
                                        <input type="text" class="form-control" name="other_left">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputFirstName" class="col-md-3 control-label">URL Link</label>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" value="" placeholder="http://example.com"  name="website_left">
                                      note to programmer: pls give an example of how the sub pages link looks like if we want to set it here.
                                      <div class="xss-margin"></div>
                                      <div class="text-blue text-12px">You can specify the button link to the sub pages.</div>
                                    </div>
                                  </div>
                                </div>
                                <!-- end col-md-9 -->
                              </div>
                              <p class="border-bottom"></p>
                              <div class="form-group" >
                                <label class="col-md-3 control-label">
                                  <input type="radio" name="align" value='right' id='l2' >
                                  Text and icon align center</label>
                                <div class="col-md-9" id='h2'>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label"> Banner Heading Text</label>
                                    <div class="col-md-9">
                                      <input id="text" type="text" class="form-control" placeholder="eg. Sentosa Medical Center" name="heading_right"> 
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label"> Banner Sub Heading Text</label>
                                    <div class="col-md-9">
                                      <textarea  class="form-control" placeholder="eg. Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile." name="sub_heading_right"></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Upload Icon Image </label>
                                    <div class="col-md-9">
                                      <div class="xs-margin"></div>
                                      <input id="exampleInputFile2" type="file" name="image_right" accept=".png" />
                                      <span class="help-block">(Image dimension: 106 x 106 pixels, PNG only, Max. 1MB) </span> </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Icon Image Alt Text</label>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" placeholder="eg. Emergency Services" name="alt_right">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Enable Link Button</label>
                                    <div class="col-md-6">
                                      <div class="xss-margin"></div>
                                      <div class="radio-list">
                                        <label>
                                          <input id="inlineCheckbox1" type="radio" value="option5"  name="text_right" />
                                          &nbsp; None</label>
                                        <label>
                                          <input id="inlineCheckbox1" type="radio" value="option9" name="text_right"/>
                                          &nbsp; Get Appointment</label>
                                        <label>
                                          <input id="inlineCheckbox1" type="radio" value="option6" name="text_right" checked="checked" />
                                          &nbsp; Find Doctor</label>
                                        <label>
                                          <input id="inlineCheckbox1" type="radio" value="option7" name="text_right"/>
                                          &nbsp; Get Direction</label>
                                        <label>
                                          <input id="inlineCheckbox4" type="radio" value="option8" name="text_right"/>
                                          &nbsp; Others, please specify:</label>
                                        <input type="text" class="form-control" name="other_right">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputFirstName" class="col-md-3 control-label">URL Link</label>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" value="" placeholder="http://example.com"  name="website_right">
                                      note to programmer: pls give an example of how the sub pages link looks like if we want to set it here.
                                      <div class="xss-margin"></div>
                                      <div class="text-blue text-12px">You can specify the button link to the sub pages.</div>
                                    </div>
                                  </div>
                                </div>
                                <!-- end col-md-9 -->
                              </div>
                              <div class="clearfix"></div>
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New banner -->
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
                            <div class="col-md-offset-4 col-md-8"> <a href="javascript:void(0)" class="btn btn-red all_del" val='index_banner'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <div class="col-md-offset-4 col-md-8"> <a href="/admin/action_delete/all/index_banners" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete all items end -->
                </div>
                <div class="portlet-body">
                
                  <div class="pull-right"> <a href="javascript:void(0)" class="btn btn-danger ups">Update Display Order &nbsp;<i class="fa fa-refresh"></i></a> </div>
                  <div class="clearfix"></div>
                  <div class="table-responsive mtl">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th width="1%"><input type="checkbox" class="del_all" /></th>
                          <th>#</th>
                          <th>Status</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <th width="12%">Display Order</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                @foreach($indexes as $key=>$id)
                        <tr>
                          <td><span style="display: none">{{$key+1}}</span><input type="checkbox" class="del" val='{{$id->id}}' /></td>
                          <td>{{$key+1}}</td>
                          <td>@if($id->status)
                              <span class="label label-xs label-success">Active</span></td>
                              @else
                              <span class="label label-xs label-danger">Inactive</span></td>
                              @endif
                          <td>{{$id->title}}</td>
                          <td><img src="{{$id->image}}" alt="{{$id->alt}}" class="img-responsive" width="190" height="68"></td>
                          <td>{{date('d M, Y', strtotime(Helper::changeDate($id->start)))}}</td>
                          <td>{{date('d M, Y', strtotime(Helper::changeDate($id->end)))}}</td>
                          <td><span style="display: none;">{{$key+1}}</span><input type="text" class="form-control udp val_{{$key}}" value="{{$id->display_order}}" vid='{{$id->id}}'></td>
                          <td><a href="javascript:void(0)" data-hover="tooltip" data-placement="top" data-target="#modal-edit-banner-{{$id->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="javascript:void(0)" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$id->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                              <!--Modal Edit banner start-->
                              <div id="modal-edit-banner-{{$id->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog modal-wide-width">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label3" class="modal-title">Edit Banner</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form">
                                        <form class="form-horizontal" action="/admin/index_banner/{{$id->id}}/edit" method="post" enctype="multipart/form-data">
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Status</label>
                                            <div class="col-md-6">
                                              <div data-on="success" data-off="primary" class="make-switch">
                                                <input type="checkbox" name="status" {{$id->status?"checked='checked'":''}}  />
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Title <span class="require">*</span></label>
                                            <div class="col-md-6">
                                              <input id="text" type="text" class="form-control" placeholder="eg. Care for Life" value="{{$id->title}}" name="title">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Banner Alt Text </label>
                                            <div class="col-md-6">
                                              <input id="text" type="text" class="form-control" placeholder="eg. Care for Life" value="{{$id->alt}}" name="alt">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Upload Banner <span class="require">*</span></label>
                                            <div class="col-md-9">
                                            <div class="clearfix"></div>
                                            <div class="del_item_div_{{$id->id}}">
                                              <div class="text-15px margin-top-10px"> <img src="{{$id->image}}" alt="Care for Life" class="img-responsive"><br/>
                                                  <a href="javascript:void(0)" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-image-{{$id->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                  <!--Modal delete start-->
                                                  <div id="modal-delete-image-{{$id->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this image? </h4>
                                                        </div>
                                                        <div class="modal-body"> <img src="{{$id->image}}" alt="Care for Life" class="img-responsive"><br/>
                                                            <div class="form-actions">
                                                              <div class="col-md-offset-4 col-md-8"> <a href="javascript:void(0)" class="btn btn-red del_item" type='image' model='index_banner' input='image_{{$id->id}}' hide_div='del_item_div_{{$id->id}}' model_id='{{$id->id}}'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                                </div>
                                              </div>
                                                <!-- modal delete end -->
                                                  <div class="xs-margin"></div>
                                                <input id="image_{{$id->id}}" type="file" name="image" accept=".gif, .jpg, .png, .jpeg"  />
                                                  <br/>
                                                  <span class="help-block">(Image dimension: 1900 x 682 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                            </div>
                        
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Start Date to End Date</label>
                                            <div class="col-md-6">
                                              <div class="input-group input-daterange">
                                                <input type="text" name="start" class="form-control" value="{{$id->start}}"/>
                                                <span class="input-group-addon">to</span>
                                                <input type="text" name="end" class="form-control" value="{{$id->end}}"/>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Display Order <span class="require">*</span></label>
                                            <div class="col-md-2">
                                              <input type="text" class="form-control" placeholder="1" value="{{$id->display_order}}" name="display_order">
                                            </div>
                                            <div class="col-md-9 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                                          </div>
                                          <h5 class="border-bottom">Banner Text &amp; Icon Position</h5>
                                          <p class="text-blue">Please choose <strong>ONE</strong> of the following options for adding the banner text and icon.</p>
                                              <div class="form-group">
                                <label class="col-md-3 control-label">
                                  <input type="radio" name="align" value='left' checked="checked"  {{$id->align=='left'?'checked':''}} onclick='show_hide_div({{$id->id}},1)'>
                                  Text and icon align left or</label>
                                <div class="col-md-9" id='h1_edit_{{$id->id}}' style="{{$id->align=='left'?'':'display:none'}}">
                                  <div class="form-group">
                                    <label class="col-md-3 control-label"> Banner Heading Text</label>
                                    <div class="col-md-9">
                                      <input id="text" type="text" class="form-control" placeholder="eg. Care for Life" name='heading_left' value="{{$id->align=='left'?$id->header:''}}">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label"> Banner Sub Heading Text</label>
                                    <div class="col-md-9">
                                      <textarea name="sub_heading_left" class="form-control" placeholder="eg. Together we continuously care for society.">
                                        {{$id->align=='left'?$id->sub_header:''}}
                                      </textarea>
                                    </div>
                                  </div>
                                      <div class="form-group">
                                                <label class="col-md-3 control-label">Upload Icon Image </label>
                                                <div class="col-md-9">
                                                    <div class="xs-margin"></div>
                                             @if($id->align=='left' && $id->image_2)
                                              <div class="del_item_div_icon_{{$id->id}}">
                                                  <img src="{{$id->image_2}}" alt="{{$id->alt_2}}" class="img-responsive bg-default"><br/>
                                                  <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-icon-{{$id->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                  <!--Modal delete icon start-->
                                                  <div id="modal-delete-icon-{{$id->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this icon image? </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                          <p><img src="{{$id->image_2}}" alt="{{$id->alt_2}}" class="img-responsive bg-default"></p>
                                                          <div class="form-actions">
                                                            <div class="col-md-offset-4 col-md-8"> <a href="javascript:void(0)" class="btn btn-red del_item" type='image_2' model='index_banner' input='image_{{$id->align}}_{{$id->id}}' hide_div='del_item_div_icon_{{$id->id}}' model_id='{{$id->id}}'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              @endif

                                                  <!-- modal delete end -->
                                                  <div class="xs-margin"></div>
                                                  <input id="image_left_{{$id->id}}" type="file" name="image_left" accept=".png"/>
                                                  <span class="help-block">(Image dimension: 80 x 80 pixels, PNG only, Max. 1MB) </span> </div>
                                              </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Icon Image Alt Text</label>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" placeholder="eg. Heart" name="alt_left" value="{{$id->align=='left'?$id->alt_2:''}}">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Enable Link Button</label>
                                    <div class="col-md-6">
                                      <div class="xss-margin"></div>
                                      <div class="radio-list">
                                         @foreach($th as $ky=>$value)
                                        <label>
                                          <input id="inlineCheckbox1" type="radio" value="{{$ky}}"  name="text_left" {{$value==$id->text?'checked':''}} />
                                          &nbsp; {{$value?$value:'None'}}</label>
                                         @endforeach
                                        <label>
                                    
                                          <input id="inlineCheckbox4" type="radio" value="option8" name="text_left" {{($id->align=='left'&&$id->slug)?'checked':''}} />
                                          &nbsp; Others, please specify:</label>
                                        <input type="text" class="form-control" name="other_left" value=" {{($id->align=='left'&&$id->slug)?$id->text:''}}">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputFirstName" class="col-md-3 control-label">URL Link</label>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control"  placeholder="http://example.com"  name="website_left" value="{{$id->align=='left'?$id->website:''}}">
                                      note to programmer: pls give an example of how the sub pages link looks like if we want to set it here.
                                      <div class="xss-margin"></div>
                                      <div class="text-blue text-12px">You can specify the button link to the sub pages.</div>
                                    </div>
                                  </div>
                                </div>
                                <!-- end col-md-9 -->
                              </div>
                              <p class="border-bottom"></p>
                              <div class="form-group" >
                                <label class="col-md-3 control-label">
                                  <input type="radio" name="align" value='right'  {{$id->align=='right'?'checked':''}} onclick='show_hide_div({{$id->id}},2)'>
                                  Text and icon align center</label>
                                <div class="col-md-9" id='h2_edit_{{$id->id}}' style="{{$id->align=='right'?'':'display:none'}}">
                                  <div class="form-group">
                                    <label class="col-md-3 control-label"> Banner Heading Text</label>
                                    <div class="col-md-9">
                                      <input id="text" type="text" class="form-control" placeholder="eg. Sentosa Medical Center" name="heading_right" value=" {{$id->align=='right'?$id->header:''}}"> 
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label"> Banner Sub Heading Text</label>
                                    <div class="col-md-9">
                                      <textarea class="form-control" placeholder="eg. Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile." name="sub_heading_right"> {{$id->align=='right'?$id->sub_header:''}}</textarea>
                                    </div>
                                  </div>
                                    <div class="form-group">
                                                <label class="col-md-3 control-label">Upload Icon Image </label>
                                                <div class="col-md-9">
                                                  <div class="xs-margin"></div>
                                      @if($id->align=='right' && $id->image_2)
                                              <div class="del_item_div_icon_{{$id->id}}">
                                                  <img src="{{$id->image_2}}" alt="{{$id->alt_2}}" class="img-responsive bg-default"><br/>
                                                  <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-icon-{{$id->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                  <!--Modal delete icon start-->
                                                  <div id="modal-delete-icon-{{$id->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this icon image? </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                          <p><img src="{{$id->image_2}}" alt="{{$id->alt_2}}" class="img-responsive bg-default"></p>
                                                          <div class="form-actions">
                                                            <div class="col-md-offset-4 col-md-8"> <a href="javascript:void(0)" class="btn btn-red del_item" type='image_2' model='index_banner' input='image_{{$id->align}}_{{$id->id}}' hide_div='del_item_div_icon_{{$id->id}}' model_id='{{$id->id}}'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              @endif
                                                  <!-- modal delete end -->
                                                  <div class="xs-margin"></div>
                                                  <input id="image_right_{{$id->id}}" type="file" name="image_right" accept=".png"/>
                                                  <span class="help-block">(Image dimension: 80 x 80 pixels, PNG only, Max. 1MB) </span> </div>
                                              </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Icon Image Alt Text</label>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" placeholder="eg. Emergency Services" name="alt_right" value=" {{$id->align=='right'?$id->alt_2:''}}"> 
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Enable Link Button</label>
                                    <div class="col-md-6">
                                      <div class="xss-margin"></div>
                                      <div class="radio-list">
                                      @foreach($th as $ky=>$value)
                                        <label>
                                          <input id="inlineCheckbox1" type="radio" value="{{$ky}}"  name="text_right" {{$value==$id->text?'checked':''}} />
                                          &nbsp; {{$value?$value:'None'}}</label>
                                         @endforeach
                                        <label>
                                    
                                          <input id="inlineCheckbox4" type="radio" value="option8" name="text_right" {{($id->align=='right'&&$id->slug)?'checked':''}} />
                                          &nbsp; Others, please specify:</label>
                                        <input type="text" class="form-control" name="other_right" value=" {{($id->align=='right'&&$id->slug)?$id->text:''}}">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputFirstName" class="col-md-3 control-label">URL Link</label>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control"  placeholder="http://example.com"  name="website_right" value=" {{$id->align=='right'?$id->website:''}}" >
                                      note to programmer: pls give an example of how the sub pages link looks like if we want to set it here.
                                      <div class="xss-margin"></div>
                                      <div class="text-blue text-12px">You can specify the button link to the sub pages.</div>
                                    </div>
                                  </div>
                                </div>
                                            <!-- end col-md-9 -->
                                          </div>
                                          <div class="clearfix"></div>
                                          <div class="form-actions">
                                            <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <!--END MODAL Edit Montage-->
                              <!--Modal delete start-->
                              <div id="modal-delete-{{$id->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this banner? </h4>
                                    </div>
                                    <div class="modal-body">
                                      <p><strong>#{{$key +1}}:</strong> {{$id->title}}</p>
                                      <div class="form-actions">
                                        <div class="col-md-offset-4 col-md-8"> <a href="/admin/action_delete/{{$id->id}}/index_banner" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <!-- modal delete end -->
                          </td>
                @endforeach
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="9"></td>
                        </tr>
                      </tfoot>
                    </table>
                 
                    <div class="clearfix"></div>
                  </div>
                  <!-- end table responsive -->
                </div>
              </div>
              <!-- end portlet -->
            </div>
            <!-- end col-lg-12 -->
          </div>
          <!-- end row -->
        </div>

  @stop


  @section('end_scripts')
    <script type="text/javascript">
        $('.lem').removeClass('active')
        $('.lem_banners').addClass('active');
    </script>

    <script type="text/javascript">
        $('#l1').click(function(){
            $('#h2').hide();
            $('#h1').show();
        })

        $('#l2').click(function(){
            $('#h1').hide();
            $('#h2').show();
        })

        $('#h2').hide();
    </script>


    <script type="text/javascript">
        $('.ups').click(function(){

          @if(isset($key))
             var k = {{$key}}
          @endif
           
           
          for(i=0; i<=k; i++){
                 var id = $('.val_'+i).attr('vid');
                var val = $('.val_'+i).val();

              $.ajax({
                  url:'/admin/index_banner/update_display/'+id+'/'+val,
                  success:function(){
                
                    if(i == (k+1)){
                      
                         window.location = '/admin/reload';
                         
                    }
                  }
              })
            }
            
        })
    </script>

    <script type="text/javascript">
        function show_hide_div(id,type){
            $('#h1_edit_'+id).hide();
            $('#h2_edit_'+id).hide();
            $('#h'+type+'_edit_'+id).show();
        }
    </script>
  @stop