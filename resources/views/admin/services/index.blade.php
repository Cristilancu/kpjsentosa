@extends('layouts.admin')

@section('title')
    <title>Services &amp; Procedures:: Listing</title>
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
            <li class="active">Services &amp; Procedures - Listing</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Services &amp; Procedures <i class="fa fa-angle-right"></i> Listing</h2>
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
                    @if($setting = Helper::hasSetting('services'))
                        {!!$setting->line1!!}
                    @else  
                      <h1 class="entry-title">Services &amp; Procedures</h1>
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
                    @if($setting = Helper::hasSetting('services'))
                        {!!$setting->line2!!}
                    @else                    
                    <h2 class="light bordered main-title"><span>Specialties</span></h2>
                    @endif
                  </div>
                </div>
                <!-- end portlet body -->
                <!-- save button start -->
                <div class="form-actions none-bg"> <a href="javascript:void(0)" class="btn btn-red preview_line" id='preview_line'>Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <a href="javascript:void(0)" class="btn btn-blue save_line" id="save_line" type='services'>Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp; <a href='javascript:void(0)' class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Specialties Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href='javascript:void(0)' data-target="#modal-add-specialty" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
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
                  <div id="modal-add-specialty" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title">Add New Specialty</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                            <form class="form-horizontal" action="/admin/services/add" enctype="multipart/form-data" method="post">
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    <input type="checkbox" checked="checked" name="status" />
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Specialty Title <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" placeholder="eg. Anesthesiology" name="title" required="" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Short Description <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <textarea name="description" rows="2" class="form-control" id="inputContent" required=""></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Upload Icon Image <span class='require'>*</span></label>
                                 <div class="col-md-9">
                                  	<div class="xs-margin"></div>
                                 	   <input id="exampleInputFile2" type="file" name="image" required="" accept=".png"  />
                                       <span class="help-block">(Image dimension: 48 x 48 pixels, PNG only, Max. 1MB) </span>
                                  </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label">Icon Image Alt Text</label>
                                <div class="col-md-9">
                                  <input type="text" name="alt" class="form-control" placeholder="eg. Anesthesiology" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Also show this speciality on:</label>
                                <div class="col-md-9">
                                  <div class="margin-top-10px">
                                    <input id="isFeatured" name="isFeatured" type="checkbox" checked="checked">
                                    Featured Services
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"> <button  class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
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
                  <div id="modal-delete-selected" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                     
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red all_del" val='service'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <div class="col-md-offset-4 col-md-8"> <a href='/admin/action_delete/all/services' class="btn btn-red " val=''>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <th>Specialty Title</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $i = $services->perPage() * ($services->currentPage()-1);?>
                    @foreach($services as $key=>$ser)
                          <tr>
                            <td><span style="display: none;">{{$key+1}}</span><input type="checkbox" class="del" val="{{$ser->id}}" /></td>
                            <td>{{++$i}}</td>
                            <td>  @if($ser->status)
                                <span class="label label-sm label-success">Active</span>
                              @else
                                <span class="label label-sm label-danger">InActive</span>
                              @endif</td>
                            <td>{!! preg_replace('/(?:<|&lt;)\/?([a-zA-Z]+) *[^<\/]*?(?:>|&gt;)/', '', $ser->title) !!}</td>
                            <td><a href='javascript:void(0)' data-hover="tooltip" data-placement="top" data-target="#modal-edit-specialty-{{$ser->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="/admin/services/{{$ser->id}}" data-hover="tooltip" data-placement="top" title="Add/Edit Specialty Details"><span class="label label-sm label-warning"><i class="fa fa-plus"></i></span></a> <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$ser->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                <!--Modal Edit specialty start-->
                                <div id="modal-edit-specialty-{{$ser->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog modal-wide-width">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label3" class="modal-title">Edit Specialty</h4>
                                      </div>
                                      <div class="modal-body">
                                        <div class="form">
                                          <form class="form-horizontal" method="post" action="/admin/services/{{$ser->id}}/edit" enctype="multipart/form-data">
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Status</label>
                                              <div class="col-md-9">
                                                <div data-on="success" data-off="primary" class="make-switch">
                                                  <input type="checkbox" {{$ser->status?"checked='checked'":''}} name="status" />
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Specialty Title <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                               <input type="text" class="form-control" placeholder="eg. Anesthesiology" value="{{$ser->title}}" required="" name="title">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Short Description <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                                <textarea name="description" rows="2" class="form-control" id="inputContent" required="">{{$ser->description}}</textarea>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Upload Icon Image <span class="require">*</span></label>
                                                <div class="col-md-9">
                                                    <div class="xs-margin"></div>
                                                    <img src="{{$ser->image}}" alt="Anesthesiology" class="img-responsive bg-default"><br/>
                                                    <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-icon-{{$ser->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                    <!--Modal delete icon start-->
                                                    <div id="modal-delete-icon-{{$ser->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                              <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this icon image? </h4>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                    <p><img src="{{$ser->image}}" alt="{{$ser->alt}}" class="img-responsive bg-default"></p>
                                                                    <div class="form-actions">
                                                                      <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div>
                                                          <!-- modal delete end -->
    
                                                          <div class="xs-margin"></div> 
                                                                
                                                            <input id="exampleInputFile2" type="file" name="image" accept=".png" />
                                                            
                                                            <span class="help-block">(Image dimension: 48 x 48 pixels, PNG only, Max. 1MB) </span>
                                                        </div>
                                                      </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Icon Image Alt Text</label>
                                                <div class="col-md-9">
                                                  <input type="text" class="form-control" placeholder="eg. Anesthesiology" name="alt" value="{{$ser->alt}}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Also show this speciality on:</label>
                                              <div class="col-md-9">
                                                <div class="margin-top-10px">
                                                  <input id="isFeatured" name="isFeatured" type="checkbox" @if($ser->isFeatured) {{'checked="checked"'}} @endif>
                                                  Featured Services
                                                   </div>
                                              </div>
                                            </div>


                                            <div class="form-group">


                                            <div class="form-actions">
                                              <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                            </div>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <!--END MODAL Edit vacancy-->
                                <!--Modal delete start-->
                                <div id="modal-delete-{{$ser->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this specialty? </h4>
                                      </div>
                                      <div class="modal-body">
                                        <p><strong>#{{$key+1}}:</strong> {{$ser->title}}</p>
                                        <div class="form-actions">
                                          <div class="col-md-offset-4 col-md-8"> <a href="/admin/action_delete/{{$ser->id}}/service" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                       
                      </table>
                    <div class="row">
                      <div class="col-md-5 col-sm-12">
                        <div class="dataTables_info">
                          &nbsp;Showing {{ $services->firstItem() }} - {{ $services->lastItem() }} of {{ $services->total() }} entries
                        </div>
                      </div>
                      <div class="col-md-7 col-sm-12">
                        <div class="paging_bootstrap pull-right">

                            <?php echo $services->render()?>
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
        <!-- InstanceEndEditable -->

@stop


@section('end_scripts')

  <script type="text/javascript">
      $('.lem').removeClass('active');
      $('.lem_services').addClass('active');
      $(document).ready(function() {
          $('#index-banner_info').add('.dataTables_length').add('#DataTables_Table_0_info').add('.dataTables_paginate').add('#index-banner_length').hide();
      })
  </script>

@stop
