@extends('layouts.admin')

@section('title')
<title>Screening &amp; Packages:: Listing</title>
@stop
@section('content')

  <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
        
        <div class="page-header-breadcrumb">
          <div class="page-heading hidden-xs">
            <h1 class="page-title">Promotions</h1>
          </div>
          
          <!-- InstanceBeginEditable name="EditRegion1" -->
          <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li>Promotions &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
            <li class="active">Screening &amp; Packages - Listing</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Screening &amp; Packages <i class="fa fa-angle-right"></i> Listing</h2>
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
                    @if($setting = Helper::hasSetting('screening'))
                        {!!$setting->line1!!}
                    @else  
                      <h1 class="entry-title">Screening &amp; Packages</h1>
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
                    @if($setting = Helper::hasSetting('screening'))
                        {!!$setting->line2!!}
                    @else  
                    <h2 class="light bordered main-title">Screening &amp; <span>Packages</span></h2>
                    @endif
                  </div>
                </div>
                <!-- end portlet body -->
                <!-- save button start -->
                <div class="form-actions none-bg"> <a href='javascript:void(0)' class="btn btn-red preview_line">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <a href='javascript:void(0)' class="btn btn-blue save_line" type='screening'>Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp; <a href='javascript:void(0)' class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Screening &amp; Packages Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href='javascript:void(0)' data-target="#modal-add-package" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
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
                  <!--Modal Add New start-->
                  <div id="modal-add-package" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title">Add New Package</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                            <form class="form-horizontal" action="/admin/screening_packages/add" method="post" onsubmit="return getContent('details', 'det')" enctype="multipart/form-data" >
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    <input type="checkbox" checked="checked" name=="status" />
                                  </div>
                                </div>
                              </div>
                              <div class="clearfix"></div>
                              
                             
                              <div class="form-group">
                                <label class="col-md-3 control-label">Package Title <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" placeholder="eg. Wellness Screening Package 1" name='title' required="">
                                </div>
                              </div>
                              <div class="clearfix"></div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label">Short Description <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <textarea name="description" rows="2" class="form-control" placeholder="eg. General Executive Screening 1 by Wellness Doctor (MO)" required=""></textarea>
                                </div>
                              </div>
                              <div class="clearfix"></div>
                              
                              <div class="form-group">
                              	<label for="inputFirstName" class="col-md-3 control-label">Sale Price (RM) </label>
                                <div class="col-md-6">
                                	<input type="text" class="form-control" placeholder="0.00" value="0.00" name="sale_price">
                                    <div class="xss-margin"></div>
                                    <div class="text-blue text-12px">The package sale price. The package is sold to customers at this price.</div>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                              
                              <div class="form-group">
                              	<label for="inputFirstName" class="col-md-3 control-label">List Price (RM)</label>
                                <div class="col-md-6">
                                  	<input type="text" class="form-control" placeholder="0.00" value="0.00" name="cost_price">
                                    <div class="xss-margin"></div>
                                    <div class="text-blue text-12px">The package's original price.</div>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                              
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Upload Package Image <span class='require'>*</span></label>
                                 <div class="col-md-9">
                                  	<div class="xs-margin"></div>
                                 	   <input id="exampleInputFile2" name='image' type="file" required="" accept=".gif, .jpg, .png, .jpeg"  />
                                       <span class="help-block">(Image dimension: 467 x 467 pixels, JPEG/GIF/PNG only, Max. 1MB) </span>
                                  </div>
                              </div> 
                              <div class="clearfix"></div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label">Package Image Alt Text</label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" name="alt" placeholder="eg. Wellness Screening Package 1">
                                </div>
                              </div>
                              <div class="clearfix"></div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label">Upload Enlarge Package Image or</label>
                                <div class="col-md-9">
                                  <p class="text-blue border-bottom">Please choose <strong>ONE</strong> of the following options when clicking on the package image for enlarge/detailed view.</p>
                                  <div class="text-15px margin-top-10px">
                                    <input id="exampleInputFile2" name="image_large" type="file" accept=".gif, .jpg, .png, .jpeg" />
                                    <br/>
                                    <span class="help-block">(JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                </div>
                              </div>
                              <div class="clearfix"></div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label">Upload PDF or</label>
                                <div class="col-md-9">
                                  <div class="text-15px margin-top-10px">
                                    <input id="exampleInputFile2" name="pdf" type="file" accept=".pdf" />
                                    <br/>
                                  </div>
                                </div>
                              </div>
                              <div class="clearfix"></div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label">Website URL</label>
                                <div class="col-md-6">
                                  <div class="input-icon"><i class="fa fa-link"></i>
                                      <input type="text" placeholder="http://" class="form-control" name="website" />
                                      <span class="help-block">Please enter the page link to link it to the sub page.</span> </div>
                                </div>
                              </div>
                              <div class="clearfix"></div>
                              
                              <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Package Details <span class='require'>*</span></label>
                                <div class="col-md-9"> 
                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                  
                                 <input type="hidden" name="details" id='det'>
                                  <div contenteditable="true" id='details'>
                                      <h5>Physical Examination</h5>
                                        <ul class="list-unstyled">	
                                            <li><i class="fa fa-check"></i> Vision / Hearing Test </li>
                                            <li><i class="fa fa-check"></i> BMI</li>
                                            <li><i class="fa fa-check"></i> Blood Pressure</li>
                                            
                                        </ul>
                                        <h5>Chest X-ray </h5>
                                        <h5>ECG with report</h5>
                                        <h5>Blood screening (GP61M)</h5>
                                        <ul class="list-unstyled">	
                                            <li><i class="fa fa-check"></i> Kidney Function Test (Buse &amp; Creatitine)</li>
                                            <li><i class="fa fa-check"></i> Lipid Screening</li>
                                            <li><i class="fa fa-check"></i> Diabetic Screening</li>
                                            <li><i class="fa fa-check"></i> Blood Group </li>
                                            <li><i class="fa fa-check"></i> Liver Function Test</li>
                                            <li><i class="fa fa-check"></i> Rheumatoid Arthritis</li>
                                            <li><i class="fa fa-check"></i> Hepatitis A</li>
                                            <li><i class="fa fa-check"></i> Hepatitis B</li>
                                            <li><i class="fa fa-check"></i> Thyroid Screening</li>
                                            <li><i class="fa fa-check"></i> VDRL Syphilis</li>
                                            <li><i class="fa fa-check"></i> HIV screening</li>
                                            <li><i class="fa fa-check"></i> Urine FEME</li>
                                        </ul>
                                        <h5>Type Medical Report &amp; Misc.</h5>
                                    </div><!-- end contenteditable -->
                                    
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
                  <!--END MODAL Add New-->
                  <!--Modal delete selected items start-->
                  <div id="modal-delete-selected" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                       
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red all_del" val='screening_package'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href="/admin/action_delete/all/screening_packages" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <th width="1%"><input type="checkbox" class="del_all" /></th>
                            <th>#</th>
                            <th>Status</th>
                            <th>Package Title</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $i = $packages->perPage() * ($packages->currentPage()-1);?>
                     @foreach($packages as $key=>$pack)
                          <tr>
                            <td><span style="display: none;">{{$key+1}}</span><input type="checkbox" class="del" val="{{$pack->id}}" /></td>
                            <td>{{++$i}}</td>
                            <td>  @if($pack->status)
                                <span class="label label-sm label-success">Active</span>
                              @else
                                <span class="label label-sm label-danger">InActive</span>
                              @endif</td>
                            <td>{{$pack->title}}</td>
                            <td><a href='javascript:void(0)' data-hover="tooltip" data-placement="top" data-target="#modal-edit-package-{{$pack->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$pack->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                <!--Modal Edit package start-->
                                <div id="modal-edit-package-{{$pack->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog modal-wide-width">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label3" class="modal-title">Edit Package</h4>
                                      </div>
                                      <div class="modal-body">
                                        <div class="form">
                                          <form class="form-horizontal" method="post" action="/admin/screening_packages/{{$pack->id}}/edit" enctype="multipart/form-data" onsubmit="getContent('details_edit_{{$pack->id}}', 'det_edit_{{$pack->id}}')">
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Status</label>
                                              <div class="col-md-9">
                                                <div data-on="success" data-off="primary" class="make-switch">
                                                  <input type="checkbox" {{$pack->status?"checked='checked'":''}} name="status" />
                                                </div>
                                              </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Package Title <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                               <input type="text" class="form-control" placeholder="eg. Wellness Screening Package 1" value="{{$pack->title}}" required="" name="title">
                                              </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Short Description <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                                <textarea name="description" rows="2" class="form-control" placeholder="General Executive Screening 1 by Wellness Doctor (MO)" required="">{{$pack->description}}</textarea>
                                              </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            
                                            <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">Sale Price (RM) </label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="0.00" value="{{$pack->sale_price}}" name="sale_price">
                                                    <div class="xss-margin"></div>
                                                    <div class="text-blue text-12px">The package sale price. The package is sold to customers at this price.</div>
                                                 </div>
                                              </div> 
                                              <div class="clearfix"></div>
                                              
                                              <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">List Price (RM)</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="0.00" value="{{$pack->cost_price}}" name="cost_price">
                                                    <div class="xss-margin"></div>
                                                    <div class="text-blue text-12px">The package's original price.</div>
                                                 </div>
                                              </div>
                                              <div class="clearfix"></div>
                                              
                                               <div class="form-group">
                                                <label class="col-md-3 control-label">Upload Package Image <span class='require'>*</span></label>
                                                <div class="col-md-9">
                                                    <div class="xs-margin"></div>
                                                  <div class="del_item_image_{{$pack->id}}">
                                                    <img src="{{$pack->image}}" alt="{{$pack->alt}}" class="img-responsive"><br/>
                                                    <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-image-{{$pack->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                    <!--Modal delete image start-->
                                                    <div id="modal-delete-image-{{$pack->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                              <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this image? </h4>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                    <p><img src="{{$pack->image}}" alt="{{$pack->alt}}" class="img-responsive"></p>
                                                                    <div class="form-actions">
                                                                      <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red del_item" type='image' model='screening_package' input='image_{{$pack->id}}' hide_div='del_item_image_{{$pack->id}}' model_id='{{$pack->id}}'> Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div>
                                                          </div>
                                                          <!-- modal delete end -->
    
                                                          <div class="xs-margin"></div> 
                                                                
                                                            <input id="image_{{$pack->id}}" type="file" name="image" accept=".gif, .jpg, .png, .jpeg"  />
                                                            
                                                            <span class="help-block">(Image dimension: 467 x 467 pixels, JPEG/GIF/PNG only, Max. 1MB) </span>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Package Image Alt Text</label>
                                                <div class="col-md-9">
                                                  <input type="text" class="form-control" placeholder="eg. Wellness promotion Package 1" value="{{$pack->alt}}"  name="alt">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Upload Enlarge Package Image or</label>
                                                <div class="col-md-9">
                                                  <p class="text-blue border-bottom">Please choose <strong>ONE</strong> of the following options when clicking on the package image for enlarge/detailed view.</p>
                                           
                                                  <div class="text-15px margin-top-10px">

                                                       @if($pack->image_large)
                                                <div class="del_item_image_large_{{$pack->id}}"> <img src="{{$pack->image_large}}" alt="{{$pack->alt}}" class="img-responsive"><br/>
                                                      <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-enlarge-image-{{$pack->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                      <!--Modal delete start-->
                                                      <div id="modal-delete-enlarge-image-{{$pack->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                        <div class="modal-dialog">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                              <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this image? </h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p><img src="{{$pack->image_large}}" alt="Wellness promotion Package 1" class="img-responsive"></p>
                                                              <div class="form-actions">
                                                                <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red  del_item" type='image_large' model='screening_package' input='image_large_{{$pack->id}}' hide_div='del_item_image_large_{{$pack->id}}' model_id='{{$pack->id}}' >Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                  @endif
                                                    <!-- modal delete end -->
                                                      <div class="xs-margin"></div>
                                                    <input id="image_large__{{$pack->id}}" type="file" name="image_large" accept=".gif, .jpg, .png, .jpeg" />
                                                      <br/>
                                                      <span class="help-block">(JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                                </div>
                                              </div>
                                              <div class="clearfix"></div>
                                              
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Upload PDF or</label>
                                            
                                                <div class="col-md-9"> 

                                                  @if($pack->pdf)
                                              <div class="del_item_pdf_{{$pack->id}}"><a href="{{$pack->pdf}}" target="_blank">{{$pack->pdf}}</a><br/>
                                                    <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-pdf-{{$pack->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                    <!--Modal delete start-->
                                                    <div id="modal-delete-pdf-{{$pack->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                            <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this PDF? </h4>
                                                          </div>
                                                          <div class="modal-body">
                                                            <p><a href='{{$pack->pdf}}'>{{$pack->pdf}}</a></p>
                                                            <div class="form-actions">
                                                              <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red del_item" type='pdf' model='screening_package' input='pdf_{{$pack->id}}' hide_div='del_item_pdf_{{$pack->id}}' model_id='{{$pack->id}}' >Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                                                      <input id="pdf__{{$pack->id}}" type="file" name="pdf" accept=".pdf" />
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="clearfix"></div>
                                              
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Website URL</label>
                                                <div class="col-md-6">
                                                  <div class="input-icon"><i class="fa fa-link"></i>
                                                      <input type="text" placeholder="http://" class="form-control" value="{{$pack->website}}" name="website" />
                                                      <span class="help-block">Please enter the page link to link it to the sub page.</span> </div>
                                                </div>
                                              </div>
                                              <div class="clearfix"></div>
                                            
                                            <div class="form-group">
                                                <label for="inputContent" class="col-md-3 control-label">Package Details <span class='require'>*</span></label>
                                                <div class="col-md-9"> 
                                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                                  <input type="hidden" name="details" id='det_edit_{{$pack->id}}'>
                                                  <div contenteditable="true" id='details_edit_{{$pack->id}}'>
                                                        {!!$pack->details!!}
                                                    </div><!-- end contenteditable -->
                                                    
                                                </div>
                                              </div>
                                              <div class="clearfix"></div>
                                            
                                            <div class="form-actions">
                                              <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <!--END MODAL Edit package-->
                                <!--Modal delete start-->
                                <div id="modal-delete-{{$pack->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this package? </h4>
                                      </div>
                                      <div class="modal-body">
                                        <p><strong>#1:</strong> {{$pack->title}}</p>
                                        <div class="form-actions">
                                          <div class="col-md-offset-4 col-md-8"> <a href='/admin/action_delete/{{$pack->id}}/screening_package' class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                    <div class="row">
                      <div class="col-md-5 col-sm-12">
                        <div class="dataTables_info">
                          &nbsp;Showing {{ $packages->firstItem() }} - {{ $packages->lastItem() }} of {{ $packages->total() }} entries
                        </div>
                      </div>
                      <div class="col-md-7 col-sm-12">
                        <div class="paging_bootstrap pull-right">

                            <?php echo $packages->render()?>
                        </div>
                      </div>
                    </div>
                  </div><!-- end table responsive -->
                  <div class="tool-footer text-right">
                 
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- end portlet -->
            </div>
          </div>
        </div>
        <!-- InstanceEndEditable -->
        <!--END CONTENT-->

@stop

@section('end_scripts')
  <script type="text/javascript">
      $('.lem').removeClass('active');
      $('.lem_screening').addClass('active');
      $('#index-banner_info').add('.dataTables_length').add('#DataTables_Table_0_info').add('.dataTables_paginate').add('#index-banner_length').hide();

  </script>

@stop
