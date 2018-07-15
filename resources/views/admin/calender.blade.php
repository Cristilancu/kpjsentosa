@extends('layouts.admin')

@section('title')
<title>Health Calendar:: Listing</title>
  @stop

@section('content')

      <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
        
        <div class="page-header-breadcrumb">
          <div class="page-heading hidden-xs">
            <h1 class="page-title">News &amp; Events</h1>
          </div>
          
          <!-- InstanceBeginEditable name="EditRegion1" -->
          <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="/admin">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li>News &amp; Events &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
            <li class="active">Health calendar - Listing</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
    <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Health calendar <i class="fa fa-angle-right"></i> Listing</h2>
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
                   @if($setting = Helper::hasSetting('calender'))
                        {!!$setting->line1!!}
                    @else  
                      <h1 class="entry-title">Health calendar</h1>
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
                  <div class="col-md-8">
     <div contenteditable="true" id='line2'>
                   @if($setting = Helper::hasSetting('calender'))
                        {!!$setting->line2!!}
                    @else  
                      <h2 class="light bordered main-title">Health <span>calendar</span></h2>
                    @endif
                    </div>
                  </div>
                  <aside class="col-md-4">
                 
                      <!-- Archives
                             ============================================= -->
                      <div class="sidebar-widget clearfix">
                      <div contenteditable="true" id='line3'>
                   @if($setting = Helper::hasSetting('calender'))
                        {!!$setting->line3!!}
                    @else  
                        <h2 class="bordered light">View by <span>Month</span></h2>
                    @endif
                      </div>
                      <!-- upcoming events start -->
                      <div contenteditable="true" id='line4'>
                   @if($setting = Helper::hasSetting('calender'))
                        {!!$setting->line4!!}
                    @else 
                      <h2 class="bordered light">Latest <span>News</span></h2>
                    @endif
                    </div>
                      <!-- health calender start -->
                        <div contenteditable="true" id='line5'>
                   @if($setting = Helper::hasSetting('calender'))
                        {!!$setting->line5!!}
                    @else 
                      <h2 class="bordered light">Upcoming <span>Events</span></h2>
                    @endif
                    </div>
                    </div>
                  </aside>
                  <div class="clearfix"></div>
                </div>
                <!-- end portlet body -->
                <!-- save button start -->
                <div class="form-actions none-bg"> <a href="javascript:void(0)" class="btn btn-red preview_line">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <a href="#" class="btn btn-blue save_line" type='calender'>Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp; <a href='javascript:void(0)' class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Health calendar Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href='javascript:void(0)' data-target="#modal-add-event" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
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
                  <div id="modal-add-event" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title">Add New Event</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                            <form class="form-horizontal" action="/admin/health_calender_list/add" method="post" onsubmit="return getContent('content', 'con')" enctype="multipart/form-data" >
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    <input type="checkbox" checked="checked" name="status" />
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Event Title <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" placeholder="eg. Sample Title for Health Event 1" name="title" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Short Description <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <textarea name="description" rows="2" class="form-control" placeholder="eg. Sample text, sample text, sample text, sample text. Sample text, sample text, sample text, sample text." required="" ></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Event Date <span class="require">*</span></label>
                                <div class="col-md-4">
                                  <div class="input-group">
                                    <input type="text" name="date" data-date-format="dd/mm/yyyy" placeholder="eg. 07 Jul, 2016" class="datepicker-default form-control" required="" />
                                    <div class="input-group-addon"><i class="fa fa-calender"></i></div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Upload Event Image <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <div class="xs-margin"></div>
                                  <input id="exampleInputFile2" type="file" name="image" required="" accept=".gif, .jpg, .png, .jpeg"  />
                                  <span class="help-block">(Image dimension: 530 x 384 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Event Image Alt Text</label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" placeholder="eg. Sample Title for Health Event 1" name="alt">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Event Content </label>
                                <div class="col-md-9"> note to programmer: please follow 100% front end style, including the list style in below fckeditor.
                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                  <input type="hidden" name="details" id='con'>
                                  <div contenteditable="true" id='content'>
                                          <article class="blog-item blog-full-width blog-detail">
                                        <div class="blog-thumbnail"> 
                                          <img src="/images/events/img_not_available.jpg" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <p>Sample text, sample text, sample text, sample text. Sample text, sample text, sample text, sample text.</p>
                                            
                                           
                                        </div>
                                      </article>
                                    </div>
                                  <!-- end contenteditable -->
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
                  <div id="modal-delete-selected" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label4" class="modal-title"><a href='javascript:void(0)'><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                    
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red all_del" val='calender'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                          <h4 id="modal-login-label4" class="modal-title"><a href='javascript:void(0)'><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href='/admin/action_delete/all/health_calenders' class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <th><a href='javascript:void(0)'>Status</a></th>
                            <th><a href='javascript:void(0)'>Event Title</a></th>
                            <th><a href='javascript:void(0)'>Event Date</a></th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $i = $calenders->perPage() * ($calenders->currentPage()-1);?>
                      @foreach($calenders as $key=>$cal)
                          <tr>
                            <td><span style="display: none;">{{$key+1}}</span><input type="checkbox" class="del" val="{{$cal->id}}" /></td>
                            <td>{{++$i}}</td>
                            <td>  @if($cal->status)
                                <span class="label label-sm label-success">Active</span>
                              @else
                                <span class="label label-sm label-danger">InActive</span>
                              @endif</td>
                            <td>{{$cal->title}}</td>
                            <td>{{$cal->date}}</td>
                            <td><a href='javascript:void(0)' data-hover="tooltip" data-placement="top" data-target="#modal-edit-event-{{$cal->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$cal->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                <!--Modal Edit event start-->
                                <div id="modal-edit-event-{{$cal->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog modal-wide-width">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label3" class="modal-title">Edit Event</h4>
                                      </div>
                                      <div class="modal-body">
                                        <div class="form">
                                          <form class="form-horizontal" action="/admin/health_calender_list/{{$cal->id}}/edit" enctype="multipart/form-data" method="post" onsubmit="getContent('arts_{{$cal->id}}', 'art_{{$cal->id}}')">
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Status</label>
                                              <div class="col-md-9">
                                                <div data-on="success" data-off="primary" class="make-switch">
                                                  <input type="checkbox" {{$cal->status?"checked='checked'":''}} name="status" />
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Event Title <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="eg. Sample Title for Health Event 1" value="{{$cal->title}}" required="" name="title">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Short Description <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                                <textarea name="description" rows="2" class="form-control" placeholder="eg. Sample text, sample text, sample text, sample text. Sample text, sample text, sample text, sample text." required="">{{$cal->description}}</textarea>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Event Date <span class="require">*</span></label>
                                              <div class="col-md-4">
                                                <div class="input-group">
                                                  <input type="text" data-date-format="dd/mm/yyyy" class="datepicker-default form-control" placeholder="eg. 07 Jul, 2016" value="{{$cal->date}}" required="" name="date" />
                                                  <div class="input-group-addon"><i class="fa fa-calender"></i></div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Upload Event Image <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                                <div class="xs-margin"></div>
                                            <div class="del_item_div_{{$cal->id}}">
                                                <img src="{{$cal->image}}" alt="{{$cal->alt}}" class="img-responsive"><br/>
                                                <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-image-{{$cal->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                <!--Modal delete image start-->
                                                <div id="modal-delete-image-{{$cal->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                        <h4 id="modal-login-label4" class="modal-title"><a href='javascript:void(0)'><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this image? </h4>
                                                      </div>
                                                      <div class="modal-body">
                                                        <p><img src="{{$cal->image}}" alt="{{$cal->alt}}" class="img-responsive"></p>
                                                        <div class="form-actions">
                                                          <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red del_item" type='image' model='calender' input='image_{{$cal->id}}' hide_div='del_item_div_{{$cal->id}}' model_id='{{$cal->id}}'  >Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                                <!-- modal delete end -->
                                                <div class="xs-margin"></div>
                                                <input id="image_{{$cal->id}}" type="file" name="image" accept=".gif, .jpg, .png, .jpeg"  />
                                                <span class="help-block">(Image dimension: 530 x 384 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Event Image Alt Text</label>
                                              <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="eg. Sample Title for Health Event 1" value="{{$cal->alt}}" name="alt">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="inputContent" class="col-md-3 control-label">Event Content</label>
                                              <div class="col-md-9"> note to programmer: please follow 100% front end style, including the list style in below fckeditor.
                                                <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                                <input type="hidden" name="details" id='art_{{$cal->id}}'>
                                                <div contenteditable="true" id='arts_{{$cal->id}}'>
                                                  {!!$cal->details!!}
                                                  </div>
                                                <!-- end contenteditable -->
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
                              <!--END MODAL Edit package-->
                                <!--Modal delete start-->
                                <div id="modal-delete-{{$cal->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label4" class="modal-title"><a href='javascript:void(0)'><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this event? </h4>
                                      </div>
                                      <div class="modal-body">
                                        <p><strong>#1:</strong>{{$cal->title}}</p>
                                        <div class="form-actions">
                                          <div class="col-md-offset-4 col-md-8"> <a href='/admin/action_delete/{{$cal->id}}/calender' class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                    <div class="row">
                      <div class="col-md-5 col-sm-12">
                        <div class="dataTables_info">
                          &nbsp;Showing {{ $calenders->firstItem() }} - {{ $calenders->lastItem() }} of {{ $calenders->total() }} entries
                        </div>
                      </div>
                      <div class="col-md-7 col-sm-12">
                        <div class="paging_bootstrap pull-right">

                            <?php echo $calenders->render()?>
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
      $('.lem_health').addClass('active');
      $('#index-banner_info').add('.dataTables_length').add('#DataTables_Table_0_info').add('.dataTables_paginate').add('#index-banner_length').hide();
  </script>

@stop
