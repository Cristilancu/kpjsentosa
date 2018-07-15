@extends('layouts.admin')

@section('title')
 <title>Feedback:: Listing</title>
  @stop


@section('content')


        

        <!--END SIDEBAR MENU--><!--BEGIN PAGE WRAPPER-->
      <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
        
        <div class="page-header-breadcrumb">
          <div class="page-heading hidden-xs">
            <h1 class="page-title">Contacts</h1>
          </div>
          
          <!-- InstanceBeginEditable name="EditRegion1" -->
          <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="/admin">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li>Contacts &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li class="active">Feedback - Listing</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Feedback <i class="fa fa-angle-right"></i> Listing</h2>
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
                  @if($setting = Helper::hasSetting('feedback'))
                        {!!$setting->line1!!}
                    @else  
                      <h1 class="entry-title">Contact Us</h1>
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
                  @if($setting = Helper::hasSetting('feedback'))
                        {!!$setting->line2!!}
                    @else  
                    <h2 class="light bordered">Map &amp; <span>Direction</span></h2>
                  @endif
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <!-- Map
                                    ============================================= -->
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31869.680998370222!2d101.69736!3d3.17083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5093028faadba857!2sSentosa+Medical+Centre!5e0!3m2!1sen!2s!4v1467355139378" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                      note to programmer: the "Edit Google Map" button is only appeared in admin. This is the function for admin to update the google map here. The edit google map function is to use "Geocoding". Please do not display this button in front end.
                      <div class="clearfix"></div>
                      <a href='javascript:void(0)' data-target="#modal-edit-map" data-toggle="modal">
                      <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                      </a>
                      <div class="clearfix"></div>
                    </div>
                    <!-- end col-md-12 -->
                    <div class="clearfix"></div>
                    <div class="height40"></div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">

                      <div contenteditable="true"  id='line3'>
                      @if($setting = Helper::hasSetting('feedback'))
                        {!!$setting->line3!!}
                    @else  
                        <h2 class="light bordered">Contact <span>Us</span></h2>

                     
                      <!-- Get in Touch Widget
                                    ============================================= -->
                      <div class="get-in-touch-widget boxed">
                       
                          <h5>KPJ Sentosa Medical Centre</h5>
                      
                     
                          <ul class="list-unstyled">
                            <li><i class="fa fa-phone"></i>(03) 4043-7166</li>
                            <li><i class="fa fa-print"></i>(03) 4043-7761</li>
                            <li><i class="fa fa-globe"></i><a href="http://www.kpjsentosa.com">www.kpjsentosa.com</a></li>
                            <li><i class="fa fa-map-marker"></i>36 Jalan Cemor, Kompleks Damai, 50400 Kuala Lumpur, Malaysia.</li>
                          </ul>
                        </div>
                      
                  @endif
                  </div>
                      <!-- Social
                                    ============================================= -->
                      <div contenteditable="true" id='line4'>
                      @if($setting = Helper::hasSetting('feedback'))
                        {!!$setting->line4!!}
                    @else  
                        <ul class="social-rounded">
                          <li><a href="https://www.facebook.com/KPJ-Sentosa-KL-Specialist-Hospital-Events-109237816094300/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#." target="_blank"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#." target="_blank"><i class="fa fa-google-plus"></i></a></li>
                          <li><a href="#." target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                    @endif
                    </div>
                    <!-- end col-md-4 -->
                    <div class="col-md-8">

                      <div contenteditable="true" id='line5'>
                      @if($setting = Helper::hasSetting('feedback'))
                        {!!$setting->line5!!}
                    @else  
                        <h2 class="light bordered">Feedback &amp; <span>Enquiry</span></h2>
                      @endif
                      </div>
                      <!-- Contact Form
                                    ============================================= -->
                    </div>
                    <!-- end col-md-8 -->
                  </div>
                </div>
                <!-- end portlet body -->
                <!-- save button start -->
                <div class="form-actions none-bg"> <a href="javascript:void(0)" class="btn btn-red preview_line">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <a href="javascript:void(0)" class="btn btn-blue save_line" type="feedback">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp; <a href='javascript:void(0)' class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div>
              <!--Modal Edit Google Map start-->
              <div id="modal-edit-map" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                        <form class="form-horizontal" action="/admin/save_line" method="post">
                      <?php $gmap = Helper::hasSetting('google_map');?>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Search Google Map <span class='require'>*</span></label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address" class=" form-control" placeholder="Enter Address" value="{{$gmap?$gmap->line:'36 Jalan Cemor, Kompleks Damai, 50400 Kuala Lumpur, Malaysia.'}}" />
                              <div class="margin-top-10px">
                                <input type="button" id="gmap_geocoding_btn" class="btn btn-dark" value="Search" name="line1" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Embed Google Map URL</label>
                            <div class="col-md-9">
                              <textarea class="form-control" name="line2">{{$gmap?$gmap->line2:'Enter Google Map URL'}}</textarea>
                              
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> note to programmer: after click the search button above, please display the correct google map here for previewing.
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                    <iframe src="{{$gmap?$gmap->line2:'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31869.680998370222!2d101.69736!3d3.17083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5093028faadba857!2sSentosa+Medical+Centre!5e0!3m2!1sen!2s!4v1467355139378'}}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <input type="hidden" name="model" value="google_map">
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Online Feedback Listing</div>
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
                        <!--   <p><strong>#1:</strong> 30 Sept, 2014 - Hock Lim</p> -->
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red all_del" val='feedback' take_four='yes'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <div class="col-md-offset-4 col-md-8"> <a href="/admin/action_delete/all/feedback" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th width="1%"><input type="checkbox" class="del_all" /></th>
                          <th>#</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Name</th>
                          <th>Category</th>
                          <th>Subject</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i = $feedbacks->perPage() * ($feedbacks->currentPage()-1);?>
                           @foreach($feedbacks as $key=>$feedback)
                        <tr>
                          <td><span style="display: none;">{{$key+1}}</span><input type="checkbox" class="del" val="{{$feedback->id}}" /></td>
                          <td>{{++$i}}</td>
                          <td>  @if($feedback->status)
                                <span class="label label-sm label-success">Active</span>
                              @else
                                <span class="label label-sm label-danger">InActive</span>
                              @endif</td>
                          <td>{{date('jS M, Y', strtotime($feedback->created_at))}}</td>
                          <td>{{$feedback->name}}</td>
                          <td>{{$feedback->category}}</td>
                          <td>{{$feedback->subject}}</td>
                          <td><a href='javascript:void(0)' data-hover="tooltip" data-placement="top" data-target="#modal-view-details-{{$feedback->id}}" data-toggle="modal" title="View Details"><span class="label label-sm label-yellow"><i class="fa fa-search"></i></span></a> <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$feedback->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                              <!--Modal view details start-->
                              <div id="modal-view-details-{{$feedback->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog modal-wide-width">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label3" class="modal-title">View Details</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form action="#" class="form-horizontal">
                                        <div class="form-body pal">
                                          <h3 class="block-heading">General</h3>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="inputFirstName" class="col-md-4 control-label">Name:</label>
                                                <div class="col-md-8">
                                                  <p class="form-control-static">{{$feedback->name}}</p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="inputEmail" class="col-md-4 control-label">Email:</label>
                                                <div class="col-md-8">
                                                  <p class="form-control-static"><a href="mailto:hock@webqom.com">{{$feedback->email}}</a></p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="inputPhone" class="col-md-4 control-label">Contact Number:</label>
                                                <div class="col-md-8">
                                                  <p class="form-control-static">{{$feedback->phone}}</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <h3 class="block-heading">Feedback / Comments / Enquiries</h3>
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label for="inputPostCode" class="col-md-2 control-label">Category:</label>
                                                <div class="col-md-10">
                                                  <p class="form-control-static">{{$feedback->category}}</p>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label for="inputPostCode" class="col-md-2 control-label">Subject:</label>
                                                <div class="col-md-10">
                                                  <p class="form-control-static">{{$feedback->subject}}</p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label for="inputPostCode" class="col-md-2 control-label">Your Message :</label>
                                                <div class="col-md-10">
                                                  <p class="form-control-static">{{$feedback->message}}</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                          <div class="col-md-offset-5 col-md-8"> <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Close &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <!--END MODAL view details-->
                              <!--Modal delete start-->
                              <div id="modal-delete-{{$feedback->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this feedback? </h4>
                                    </div>
                                    <div class="modal-body">
                                      <p><strong>#{{$key+1}}:</strong> {{date('jS, M Y', strtotime($feedback->created_at))}} - {{$feedback->name}} </p>
                                      <div class="form-actions">
                                        <div class="col-md-offset-4 col-md-8"> <a href="/admin/action_delete/{{$feedback->id}}/feedback" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                          <td colspan="8"></td>
                        </tr>
                      </tfoot>
                    </table>
                    <div class="row">
                      <div class="col-md-5 col-sm-12">
                        <div class="dataTables_info">
                          &nbsp;Showing {{ $feedbacks->firstItem() }} - {{ $feedbacks->lastItem() }} of {{ $feedbacks->total() }} entries
                        </div>
                      </div>
                      <div class="col-md-7 col-sm-12">
                        <div class="paging_bootstrap pull-right">

                            <?php echo $feedbacks->render()?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end table responsive -->
              
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- end portlet -->
            </div>
          </div>
        </div>



           <!--Modal delete all items start-->
 
@stop


@section('end_scripts')

  <script type="text/javascript">
      $('.lem').removeClass('active');
      $('.lem_contact').addClass('active');
      $('#index-banner_info').add('.dataTables_length').add('#DataTables_Table_0_info').add('.dataTables_paginate').add('#index-banner_length').hide();
  </script>

@stop
