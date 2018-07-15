@extends('layouts.admin')


@section('title')
    <title>KPJ Advisor Series :: Listing</title>
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
            <li class="active">KPJ Advisor Series - Listing</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content"> 
          <div class="row">
            <div class="col-lg-12">
              <h2>KPJ Advisor Series <i class="fa fa-angle-right"></i> Listing</h2>
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
                <div class="portlet-body"> note to programmer: the heading text and sub heading text below should follow the css style 100% in front end.
                  <div contenteditable="true" id='line1'>
                   @if($setting = Helper::hasSetting('category'))
                        {!!$setting->line1!!}
                    @else  
                      <h1 class="entry-title">KPJ Advisor Series</h1>
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
                   @if($setting = Helper::hasSetting('category'))
                        {!!$setting->line2!!}
                    @else  
                    <h2 class="light bordered main-title">Find<span> Health Information</span></h2>

                    @endif
                  </div>
                </div>
                <!-- end portlet body -->
                <!-- save button start -->
                <div class="form-actions none-bg"> <a href="#" class="btn btn-red preview_line">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <a href="#" class="btn btn-blue save_line" type="category">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp; <a href='javascript:void(0)' class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div>
              
              <ul id="myTab" class="nav nav-tabs">
                <li class="{{!Session::has('ck')?'active':''}}"><a href="#kpj-advisor-series-category-setup" data-toggle="tab">KPJ Advisor Series Category Setup</a></li>
                <li class="{{Session::has('ck')?'active':''}}"><a href="#parallax-bg-text" data-toggle="tab">Parallax Background &amp; Text</a></li>
              </ul>
              
              <div id="myTabContent" class="tab-content">
              
              	<div id="kpj-advisor-series-category-setup" class="tab-pane fade {{!Session::has('ck')?'in active':''}}">
                
               		<div class="portlet">
                        <div class="portlet-header">
                          <div class="caption">KPJ Advisor Series Category Setup</div>
                          <br/>
                          <p class="margin-top-10px"></p>
                          <a href='javascript:void(0)' data-target="#modal-add-category" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
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
                          <!--Modal Add New category start-->
                          <div id="modal-add-category" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                            <div class="modal-dialog modal-wide-width">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                  <h4 id="modal-login-label3" class="modal-title">Add New Category</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="form">
                                    <form class="form-horizontal" action="/admin/kpj/add_category" method="post" enctype="multipart/form-data" >
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Status</label>
                                        <div class="col-md-9">
                                          <div data-on="success" data-off="primary" class="make-switch">
                                            <input type="checkbox" checked="checked" name="status" />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Category Title <span class='require'>*</span></label>
                                        <div class="col-md-6">
                                           <input type="text" class="form-control" placeholder="eg. Adult Health" name="category" required=""> 
                                          
                                        </div>
                                      </div>
                                      <div class="form-group">
                                         <label class="col-md-3 control-label">Upload Icon Image <span class='require'>*</span></label>
                                         <div class="col-md-9">
                                            <div class="xs-margin"></div>
                                               <input id="exampleInputFile2" type="file" name="image" required="" accept=".png" />
                                               <span class="help-block">(Image dimension: 64 x 64 pixels, PNG only, Max. 1MB) </span>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Icon Image Alt Text</label>
                                        <div class="col-md-9">
                                          <input type="text" class="form-control" placeholder="eg. Adult Health" name="alt">
                                        </div>
                                      </div>
                                      <div class="form-actions">
                                        <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--END MODAL Add New categroy-->
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
                                    <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red all_del " val='category'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                                    <div class="col-md-offset-4 col-md-8"> <a href='/admin/action_delete/all/categories' class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                          	 <table class="table table-hover table-striped">
                            <thead>
                              <tr>
                                <th width="1%"><input type="checkbox" class="del_all" /></th>
                                <th>#</th>
                                <th>Status</th>
                                <th>Category Title</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($categories as $key=>$cat)
                              <tr>
                                <td><span style="display: none;">{{$key+1}}</span><input type="checkbox" class="del" val="{{$cat->id}}"/></td>
                                <td>{{$key+1}}</td>
                                <td> 
                             @if($cat && $cat->status)
                              <span class="label label-xs label-success">Active</span></td>
                              @else
                              <span class="label label-xs label-danger">Inactive</span></td>
                              @endif
                                </td>
                                <td>{{$cat->title}}</td>
                                <td><a href='javascript:void(0)' data-hover="tooltip" data-placement="top" data-target="#modal-edit-category-{{$cat->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-cat-{{$cat->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                    <!--Modal Edit category start-->
                                    <div id="modal-edit-category-{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                      <div class="modal-dialog modal-wide-width">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                            <h4 id="modal-login-label3" class="modal-title">Edit Category</h4>
                                          </div>
                                          <div class="modal-body">
                                            <div class="form">
                                              <form class="form-horizontal" action="/admin/kpjs/{{$cat->id}}/edit" enctype="multipart/form-data" method="post">
                                                <div class="form-group">
                                                  <label class="col-md-3 control-label">Status</label>
                                                  <div class="col-md-9">
                                                    <div data-on="success" data-off="primary" class="make-switch">
                                                      <input type="checkbox"  name="status" {{$cat->status?"checked='checked'":''}} />
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-3 control-label">Category Title <span class='require'>*</span></label>
                                                  <div class="col-md-9">
                                                   <input type="text" class="form-control" placeholder="eg. Adult Health" value="{{$cat->title}}" name="title" required="">
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                        	<label class="col-md-3 control-label">Upload Icon Image <span class="require">*</span></label>
                                            <div class="col-md-9">
                                            	<div class="xs-margin"></div>
                                                      <div class="del_item_div_{{$cat->id}}">

                                                <img src="{{$cat->image}}" alt="Adult Health" class="img-responsive bg-default"><br/>
                                                <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-icon-{{$cat->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                <!--Modal delete icon start-->
                                                <div id="modal-delete-icon-{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                          <div class="modal-dialog">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this icon image? </h4>
                                                              </div>
                                                              <div class="modal-body">
                                                                <p><img  src="{{$cat->image}}" alt="Adult Health" class="img-responsive bg-default"></p>
                                                                <div class="form-actions">
                                                                  <div class="col-md-offset-4 col-md-8"> <a href="javascript:void(0)" class="btn btn-red del_item" type='image' model='category' input='image_{{$cat->id}}' hide_div='del_item_div_{{$cat->id}}' model_id='{{$cat->id}}'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                      </div>
                                                    </div>
                                                      <!-- modal delete end -->

                                                      <div class="xs-margin"></div> 
                                                            
                                                        <input id="image_{{$cat->id}}" type="file" name="image" accept=".png" />
                            							
                                                        <span class="help-block">(Image dimension: 64 x 64 pixels, PNG only, Max. 1MB) </span>
                                                    </div>
                                                  </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Icon Image Alt Text</label>
                                                    <div class="col-md-9">
                                                      <input type="text" class="form-control" placeholder="eg. Adult Health" value="{{$cat->alt}}" name="alt">
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                  <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                </div>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  <!--END MODAL Edit vacancy-->
                                    <!--Modal delete start-->
                                    <div id="modal-delete-cat-{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                            <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this category? </h4>
                                          </div>
                                          <div class="modal-body">
                                            <p><strong>#{{$key+1}}:</strong> {{$cat->title}}</p>
                                            <div class="form-actions">
                                              <div class="col-md-offset-4 col-md-8"> <a href="/admin/action_delete/{{$cat->id}}/category" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                                <td colspan="5"></td>
                              </tr>
                            </tfoot>
                          </table>
                          </div><!-- end table responsive -->
                          
                        </div>
                      </div><!-- end portlet -->
             	
                </div><!-- end tab kpj advisor series category setup -->
                
                <div id="parallax-bg-text" class="tab-pane fade {{Session::has('ck')?'active in':''}}">
                  <div class="portlet">
                    <div class="portlet-header">
                      <div class="caption">Parallax Text Edit</div>
                       <?php $setting = Helper::hasSetting('kpj_background_text');?>
					  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                    </div>
                    <div class="portlet-body">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Status</th>
                              <th>Heading Text</th>
                              <th>Sub Heading Text</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>

                            <tr>
                              <td>1</td>
                              <td>@if($setting && $setting->status)
                              <span class="label label-xs label-success">Active</span></td>
                              @else
                              <span class="label label-xs label-danger">Inactive</span></td>
                              @endif
                              <td>{{$setting?$setting->line2:'KPJ Advisor Series'}}</td>
                              <td>{!!$setting?$setting->line3:'Sample text, sample text, sample text, sample text. Sample text, sample text, sample text, sample text. Sample text, sample text, sample text, sample text.'!!}</td>
                              <td><a href='javascript:void(0)' data-hover="tooltip" data-placement="top" data-target="#modal-edit-text" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a>
                                  <!--Modal Edit banner text start-->
                                  <div id="modal-edit-text" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                    <div class="modal-dialog modal-wide-width">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                          <h4 id="modal-login-label3" class="modal-title">Edit Parallax Background Text</h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="form">
                                            <form class="form-horizontal" action="/admin/save_preview">
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Status</label>
                                                <div class="col-md-6">
                                                  <div data-on="success" data-off="primary" class="make-switch">
                                                    <input type="checkbox"  name="status" {{($setting && $setting->status)?"checked='checked'":''}}  />
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Heading Text <span class="require">*</span> </label>
                                                <div class="col-md-9">
                                                   <input type="text" class="form-control" placeholder="eg. KPJ Advisor Series" value="{{$setting?$setting->line2:'KPJ Advisor Series'}}" required="" name="line2"> 
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Sub Heading Text <span class="require">*</span> </label>
                                                <div class="col-md-9">
                                                   <input type="text" class="form-control" placeholder="eg. Sample text, sample text, sample text, sample text. Sample text, sample text, sample text, sample text. Sample text, sample text, sample text, sample text." value="{{$setting?$setting->line3:'Sample text, sample text, sample text, sample text. Sample text, sample text, sample text, sample text. Sample text, sample text, sample text, sample text.'}}" name="line3">
                                                </div>
                                              </div>
                                              <input type="hidden" name="model" value="kpj_background_text">
                                              <div class="form-actions">
                                                <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> 
                                                </div>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!--END MODAL Edit text-->
                              </td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td colspan="5"></td>
                            </tr>
                          </tfoot>
                        </table>
                        <div class="clearfix"></div>
                      </div><!-- end table responsive -->
                    </div>
                  </div><!-- End porlet -->
                  
                  <div class="portlet">
                    <div class="portlet-header">
                      <div class="caption">Parallax Background Image Edit</div>
                      <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                    </div>
                    <div class="portlet-body">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Status</th>
                              <th>Image</th>
                              <th>Title</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody> 
                            <tr> <?php $setting = Helper::hasSetting('kpj_background');?>
                              <td>1</td>
                              <td>@if($setting && $setting->status)
                              <span class="label label-xs label-success">Active</span></td>
                              @else
                              <span class="label label-xs label-danger">Inactive</span></td>
                              @endif
                              <td><img src="{{$setting?$setting->details:'/images/parallax/advisor_series_bg.jpg'}}" class="img-responsive" width="198" height="90"></td>
                              <td>KPJ Advisor Series</td>
                              <td><a href='javascript:void(0)' data-hover="tooltip" data-placement="top" data-target="#modal-edit-background" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a>
                                  <!--Modal Edit Background image start-->
                                  <div id="modal-edit-background" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                    <div class="modal-dialog modal-wide-width">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                          <h4 id="modal-login-label3" class="modal-title">Edit Parallax Background Image</h4>
                                        </div>

                                        <div class="modal-body">
                                          <div class="form">
                                            <form class="form-horizontal" action="/admin/save_preview" enctype="multipart/form-data" method="post">
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Status</label>
                                                <div class="col-md-6">
                                                  <div data-on="success" data-off="primary" class="make-switch">
                                                    <input type="checkbox"  name="status" {{($setting && $setting->status)?"checked='checked'":''}}  />
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Title <span class="require">*</span></label>
                                                <div class="col-md-6">
                                                  <input id="text" type="text" class="form-control" placeholder="KPJ Advisor Series" value="{{$setting?$setting->line2:'KPJ Advisor Series'}}" required="" name="line2">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Upload Background Image <span class='require'>*</span></label>
                                                <div class="col-md-9">
                                                  <div class="text-15px margin-top-10px"> <img src="{{$setting?$setting->details:'/images/parallax/advisor_series_bg.jpg'}}" class="img-responsive"><br/>
                                                      <input id="exampleInputFile2" type="file" name="image"  accept=".gif, .jpg, .png, .jpeg" />
                                                      <br/>
                                                      <span class="help-block">(Image dimension: 1980 x 900 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                                </div>
                                              </div>
                                              <div class="form-actions">
                                                <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> 
                                                </div>
                                              </div>
                                              <input type="hidden" name="model" value="kpj_background">
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!--END MODAL Edit parallax background image -->
                              </td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td colspan="5"></td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- end table responsive -->
                      <div class="clearfix"></div>
                    </div>
                    <!-- end portlet body -->
                  </div><!-- end portlet -->
                  
                </div>
                <!-- end tab parallax bg image & text -->
              
              </div><!-- end tab content -->
              
              
                
              <div class="portlet">
                        <div class="portlet-header">
                          <div class="caption">KPJ Advisor Series Articles Listing</div>
                          <br/>
                          <p class="margin-top-10px"></p>
                          <a href='javascript:void(0)' data-target="#modal-add-article" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                          <div class="btn-group">
                            <button type="button" class="btn btn-primary">Delete</button>
                            <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                            <ul role="menu" class="dropdown-menu">
                              <li><a href='javascript:void(0)' data-target="#modal-delete-selected-kpj" data-toggle="modal">Delete selected item(s)</a></li>
                              <li class="divider"></li>
                              <li><a href='javascript:void(0)' data-target="#modal-delete-all-kpj" data-toggle="modal">Delete all</a></li>
                            </ul>
                          </div>
                           
                          <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                          <!--Modal Add New start-->
                          <div id="modal-add-article" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                            <div class="modal-dialog modal-wide-width">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                  <h4 id="modal-login-label3" class="modal-title">Add New Article</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="form">
                                    <form class="form-horizontal" method="post" action="/admin/kpj/add" enctype="multipart/form-data">
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Status</label>
                                        <div class="col-md-9">
                                          <div data-on="success" data-off="primary" class="make-switch">
                                            <input type="checkbox" checked="checked" name="status" />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Article Title <span class='require'>*</span></label>
                                        <div class="col-md-9">
                                          <input type="text" class="form-control" placeholder="eg. Aortic Aneurysm" name="title" required="">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Article Category <span class='require'>*</span></label>
                                        <div class="col-md-6">
                                          <select class="form-control" name="category" required="">
                                            <option disabled="">- Please select -</option>
                 									@foreach(Helper::getCategories() as $cat)
                 									<option value="{{$cat->id}}">{{$cat->title}}</option>
                 									@endforeach
                                          </select>
                                        </div>
                                      </div>
                                     

                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Article Content <span class='require'>*</span></label>
                                        <div class="col-md-9">
                                          <p class="text-blue border-bottom">Please choose <strong>ONE</strong> of the following options when adding/editing an article.</p>
                                          <div class="text-15px margin-top-10px">
                                            <input type="radio" name="customized_content" id='customized_content' onclick="change_things()"> Customized Content
                                            <br/>
                                            <span class="help-block">note to programmer: when select customized content and click save, the "plus icon button" will appear in the article listing table and it will link to kpj_advisor_series_article_edit.html for admin to add in the customized content. All other options of "upload pdf" and "website url" are disabled. If selects "upload pdf" or "website url", hide the "plus icon button" in the listing table.</span> 
                                          </div>
                                        </div>
                                      </div>
                                      
                                   <div id='change'>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Upload PDF or</label>
                                        <div class="col-md-9">
                                          <div class="text-15px margin-top-10px">
                                            <input id="exampleInputFile2" type="file" name="pdf" id='pdf' accept=".pdf" />
                                            <br/>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Website URL</label>
                                        <div class="col-md-6">
                                          <div class="input-icon"><i class="fa fa-link"></i>
                                              <input type="text" placeholder="http://" class="form-control" name="website" id='url' />
                                              <span class="help-block">Please enter the page link to link it to the sub page.</span> </div>
                                        </div>
                                      </div>
                                  </div>
                                      <div class="form-actions">
                                        <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--END MODAL Add New-->
                          <!--Modal delete selected items start-->
                          <div id="modal-delete-selected-kpj" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                  <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                                </div>
                                <div class="modal-body">
                  
                                  <div class="form-actions">
                                    <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red all_del_kpj" val='kpj'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- modal delete selected items end -->
                          <!--Modal delete all items start-->
                          <div id="modal-delete-all-kpj" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                  <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                                </div>
                                <div class="modal-body">
                                  <div class="form-actions">
                                    <div class="col-md-offset-4 col-md-8"> <a href='/admin/action_delete/all/kpjs' class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- modal delete all items end -->
                        </div>
                        <div class="portlet-body">
                         
                          <div class="table-responsive">
                              <table class="table table-hover table-striped">
                                <thead>
                          
                                  <tr>
                                    <th width="1%"><input type="checkbox" class="del_all_kpj"  /></th>
                                    <th>#</th>
                                    <th>Status</th>
                                    <th>Article Title</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   @foreach($kpjs as $key=> $cat)
                                  <tr>
                                    <td><span style="display: none;">{{$key+1}}</span><input type="checkbox" class="del_kpj" val='{{$cat->id}}' /></td>
                                    <td>{{$key+1}}</td>
                                    <td>@if($cat->status)
                              <span class="label label-xs label-success">Active</span></td>
                              @else
                              <span class="label label-xs label-danger">Inactive</span></td>
                              @endif</td>
                                    <td>{!!$cat->title!!}</td>
                                    <td><a href='javascript:void(0)' data-hover="tooltip" data-placement="top" data-target="#modal-edit-article-{{$cat->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a>

                                    @if(!$cat->pdf && !$cat->website) <a href="/admin/kpj/{{$cat->id}}" data-hover="tooltip" data-placement="top" title="Add/Edit Article"><span class="label label-sm label-warning"><i class="fa fa-plus"></i></span></a> 
                                    @endif
                                    <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-article-{{$cat->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                        <!--Modal Edit article start-->
                                        <div id="modal-edit-article-{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                          <div class="modal-dialog modal-wide-width">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                <h4 id="modal-login-label3" class="modal-title">Edit Article</h4>
                                              </div>
                                              <div class="modal-body">
                                                <div class="form">
                                                  <form class="form-horizontal" action="/admin/kpjs/{{$cat->id}}/ed" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                      <label class="col-md-3 control-label">Status</label>
                                                      <div class="col-md-9">
                                                        <div data-on="success" data-off="primary" class="make-switch">
                                                          <input type="checkbox" name="status" {{$cat->status?"checked='checked'":''}}  />
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="col-md-3 control-label">Article Title <span class='require'>*</span></label>
                                                      <div class="col-md-9">
                                                       <input type="text" class="form-control" placeholder="eg. Aortic Aneurysm" value="{{$cat->title}}" name="title">
                                                      </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Article Category <span class='require'>*</span></label>
                                                        <div class="col-md-6">
                                                          <select class="form-control" name="category">
                                                          @foreach($categories as $cp)
		                 									<option value="{{$cp->id}}" {{$cp->id==$cat->category_id?'selected':''}}>{{$cp->title}}</option>
		                 									@endforeach
                                                          </select>
                                                        </div>
                                                      </div> 
                                                    
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Article Content <span class='require'>*</span></label>
                                                        <div class="col-md-9">
                                                          <p class="text-blue border-bottom">Please choose <strong>ONE</strong> of the following options when clicking on the banner for enlarge/detailed view.</p>
                                                          <div class="text-15px margin-top-10px"> 
                                                            <input type="radio" name="customized_content" {{(!$cat->pdf && !$cat->website)?'checked="checked"':''}}> Customized Content
                                                            <br/>
                                                            note to programmer: when select customized content and click save, the "plus icon button" will appear in the article listing table and it will link to kpj_advisor_series_article_edit.html for admin to add in the customized content. All other options of "upload pdf" and "website url" are disabled. If selects "upload pdf" or "website url", hide the "plus icon button" in the listing table.
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <label class="col-md-3 control-label">Upload PDF or</label>
                                                        <div class="col-md-9"> 
                                                @if($cat->pdf)
                                                    <div class="del_item_div_{{$cat->id}}">
                                                            <a href="{{$cat->pdf}}" target="_blank">{{$cat->pdf?$cat->formated_time:''}}</a><br/>
                                                            <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-pdf" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                            <!--Modal delete start-->
                                                            <div id="modal-delete-pdf" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                              <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this PDF? </h4>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                    <p>{{$cat->formated_time}}</p>
                                                                    <div class="form-actions">
                                                                      <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red del_item" type='pdf' model='kpj' input='pdf_{{$cat->id}}' hide_div='del_item_div_{{$cat->id}}' model_id='{{$cat->id}}'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div>
                                                </div>
                                              @endif
                                                          <!-- modal delete end -->
                                                            <div class="xs-margin"></div>
                                                          <div class="text-15px margin-top-10px">
                                                              <input id="" type="file" name="pdf"  accept=".pdf" />
                                                            </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <label class="col-md-3 control-label">Website URL</label>
                                                        <div class="col-md-6">
                                                          <div class="input-icon"><i class="fa fa-link"></i>
                                                              <input type="text" name="website" placeholder="http://" class="form-control" value="{{$cat->website}}"/>
                                                              <span class="help-block">Please enter the page link to link it to the sub page.</span> </div>
                                                        </div>
                                                      </div>
                                                    <div class="form-actions">
                                                      <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                    </div>
                                                  </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <!--END MODAL Edit article-->
                                        <!--Modal delete start-->
                                        <div id="modal-delete-article-{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this article? </h4>
                                              </div>
                                              <div class="modal-body">
                                                <p><strong>#{{$key+1}}:</strong> {{$cat->title}}</p>
                                                <div class="form-actions">
                                                  <div class="col-md-offset-4 col-md-8"> <a href="/admin/action_delete/{{$cat->id}}/kpj" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                                    <td colspan="5"></td>
                                  </tr>
                                </tfoot>
                              </table>
                          </div><!-- end table responsive -->
                      
                          <div class="clearfix"></div>
                        </div>
                      </div><!-- end portlet -->
             	
              
              
            </div>
          </div>
        </div>
        <!-- InstanceEndEditable -->
        <!--END CONTENT-->
@stop


@section('end_scripts')
	<script type="text/javascript">
		function change_things(){
			$('#change').toggle();
		}
	</script>


  <script type="text/javascript">
      $('.lem').removeClass('active');
      $('.lem_kpj').addClass('active');
  </script>

@stop
