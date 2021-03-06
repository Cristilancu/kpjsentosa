@extends('layouts.admin')

@section('title')
<title>Latest Events:: Listing</title>
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
            <li class="active">Latest Events - Listing</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Latest Events <i class="fa fa-angle-right"></i> Listing</h2>
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
                   @if($setting = Helper::hasSetting('events'))
                        {!!$setting->line1!!}
                    @else  
                      <h1 class="entry-title">Latest Events</h1>
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
                   @if($setting = Helper::hasSetting('events'))
                        {!!$setting->line2!!}
                    @else  
                      <h2 class="light bordered main-title">Latest <span>Events</span></h2>
                  @endif
                    </div>
                  </div>
                  <aside class="col-md-4">
                    <div >
                      <!-- Archives
                             ============================================= -->
                      <div class="sidebar-widget clearfix">
                             <div contenteditable="true" id='line3'>
                     @if($setting = Helper::hasSetting('events'))
                        {!!$setting->line3!!}
                    @else  
                        <h2 class="bordered light">EVENT <span>Archives</span></h2>
                    @endif
                      </div>
                      <!-- upcoming events start -->
                   <div contenteditable="true" id='line4'>
                     @if($setting = Helper::hasSetting('events'))
                        {!!$setting->line4!!}
                    @else  
                      <h2 class="bordered light">Upcoming <span>Events</span></h2>
                    @endif
                    </div>
                      <!-- health calendar start -->
                     <div contenteditable="true" id='line5'>
                     @if($setting = Helper::hasSetting('events'))
                        {!!$setting->line5!!}
                    @else  
                      <h2 class="bordered light">Health <span>Calendar</span></h2>
                    @endif
                    </div>
                    </div>
                  </aside>
                  <div class="clearfix"></div>
                </div>
                <!-- end portlet body -->
                <!-- save button start -->
                <div class="form-actions none-bg"> <a href="javascript:void(0)" class="btn btn-red preview_line">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <a href="javascript:void(0)" class="btn btn-blue save_line" type="events">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp; <a href='javascript:void(0)' class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Latest Events Listing</div>
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
                            <form class="form-horizontal" action='/admin/events_list/add' method="post" enctype="multipart/form-data" onsubmit="return getContent('details', 'det')">
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
                                  <input type="text" class="form-control" placeholder="eg. KPJ Sentosa launches new name KPJ Sentosa KL Specialist Hospital" name="title" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Short Description <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <textarea name="description" rows="2" class="form-control" required="" placeholder="eg. One of Kuala Lumpur's first private hospitals made a historic change today, changing its name from Sentosa Medical Centre  to KPJ Sentosa KL Specialist Hosiptal (KPJ Sentosa)."></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Event Date <span class="require">*</span></label>
                                <div class="col-md-4">
                                  <div class="input-group">
                                    <input type="text" data-date-format="dd/mm/yyyy" placeholder="eg. 07 Mar, 2016" class="datepicker-default form-control" name="date" required="" />
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Upload Event Image <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <div class="xs-margin"></div> 
                                  <input id="exampleInputFile2" type="file" name="image" required="" accept=".gif, .jpg, .png, .jpeg" >
                                  <span class="help-block">(Image dimension: 530 x 384 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Event Image Alt Text</label>
                                <div class="col-md-9">
                                  <input type="text" name="alt" class="form-control" placeholder="eg. KPJ Sentosa launches new name KPJ Sentosa KL Specialist Hospital">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Event Content </label>
                                <div class="col-md-9"> note to programmer: please follow 100% front end style, including the list style in below fckeditor.
                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                <input type="hidden" name="details" id='det'>
                                  <div contenteditable="true" id='details'>
                                  <article class="blog-item blog-full-width blog-detail">
                                        <div class="blog-thumbnail"> 
                                          <img src="/images/events/KPJ_sentosa_launches_new_name/img_KPJ_sentosa_launches_new_name_large1.jpg" alt="KPJ Sentosa launches new name KPJ Sentosa KL Specialist Hospital">
                                        </div>
                                        <div class="blog-content">
                                            <p>One of Kuala Lumpur's first private hospitals made a historic change today, changing its name from Sentosa Medical Centre to KPJ Sentosa KL Specialist Hosiptal (KPJ Sentosa).</p>
                                            <p>Encik Mohd. Taufik Ismail, the hospital's Executive Director, said "The hospital has been serving patients for more than 40 years since it first opened its doors to the public in 1972. This name change is a testimony of our continued efforts to enhance and strengthen its presence in the city". </p>
                                            <p><img src="/images/events/KPJ_sentosa_launches_new_name/img_KPJ_sentosa_launches_new_name_large2.jpg" alt="KPJ Sentosa launches new name KPJ Sentosa KL Specialist Hospital"></p>
                                            <p>KPJ Sentosa is a122-bed hospital which houses an extensive range of medical and surgical specialties led by clinical experts with more than 40 years' experience in the respective discipline. Among the niche services are Gastroenterology, Gynaecological Oncology, Orthopaedic &amp; Trauma Surgery, and other minimally invasive surgeries.</p>
                                            <p>In Urology, KPJ Sentosa has taken another step forward with its state-of-the-art minimally invasive care for kidney stones such as non-invasive extracorporeal shock wave lithotripsy (ESWL), percutaneous nephrolithotomy and Ureteroscopy.</p>
                                            <p><img src="/images/events/KPJ_sentosa_launches_new_name/img_KPJ_sentosa_launches_new_name_large3.jpg" alt="KPJ Sentosa launches new name KPJ Sentosa KL Specialist Hospital"></p>
                                            <p>In 2006, Sentosa was acquired by KPJ Healthcare Berhad (KPJ), one Malaysia's leading providers of private healthcare services with 25 hospitals located nationwide. The acquisition enabled Sentosa to leverage on KPJ's integrated network of services and contribute extensively to the hospital's broader range of services.</p>
                                            <p>The hospital new name was officially launched by KPJ's President &amp; Managing Director, YBhg Dato' Amiruddin Abdul Satar.</p>
                                            <p>Also present during the event was Puan Hajjah Jasimah Hassan, Chairman of KPJ Sentosa, Mohd Taufik Ismail, Executive Director of KPJ Sentosa, Dr  Mohd Harris Lu, Medical Director of KPJ Sentosa KL, Puan Miranda Harumal, Chief Executive Officer of KPJ Sentosa KL, senior management of KPJ Healthcare Berhad, Consultants and Staff of KPJ Sentosa KL.</p>
                                            
                                            <p><img src="/images/events/KPJ_sentosa_launches_new_name/img_KPJ_sentosa_launches_new_name_large4.jpg" alt="KPJ Sentosa launches new name KPJ Sentosa KL Specialist Hospital"></p>
                                            
                                            <div class="testimonials3 text-center">
                            
                                                <span class="fa fa-quote-left pull-left"></span>
                                                  
                                                    <div class="owl-carousel text-carousel">
                    
                                                      
                                                        <div class="item">
                                                        
                                                            <div class="testimonials3-content">
                                                                <h3 class="text-danger">special promotional packages</h3>
                                                                <p><i>In conjunction with the launch, KPJ Sentosa is providing special promotional packages from 7 March until 31st May 2016 for its 4-person family wellness package, a mother and baby care package, a urological screening package and a women wellness package.</i></p>
                                                                
                                                            </div>
                                                            
                                                        </div><!-- end item -->
                                                        
     
                                                    </div>
                                                    
                                                    <span class="fa fa-quote-right pull-right"></span>
                                                    
                                                </div>
                                            
                                            
                                            <p>In 2015, KPJ Sentosa KL Specialist Hospital received the international Integrated Management System (IMS) Certification by Bureau Veritas, comprising of ISO 9001:2008 Quality System, ISO 14001:2004 Environmental Management System, and OHSAS 18001:2007 Occupational Safety &amp; Health Management System. At par with other major industry players, KPJ Sentosa KL Specialist Hospital is also fully accredited by the Malaysian Society for Quality in Health (MSQH), a national accreditation body for health care facilities and services, thus reflecting the organization’s commitment towards being a quality healthcare provider. Additionally, KPJ Sentosa KL Specialist Hospital is certified as a Baby Friendly Hospital (BFH) by Ministry of Health, Malaysia since 2014. </p>
                                                               
                                        </div>
                                      </article>
                                    </div>
                                  <!-- end contenteditable -->
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
                            <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red all_del" val='event'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <div class="col-md-offset-4 col-md-8"> <a href='/admin/action_delete/add/events' class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <th width="1%"><input type="checkbox" class="del_all" /></th>
                            <th>#</th>
                            <th><a>Status</a></th>
                            <th><a >Event Title</a></th>
                            <th><a >Event Date</a></th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $i = $events->perPage() * ($events->currentPage()-1);?>
                     @foreach($events as $key=>$ev)
                          <tr>
                            <td><span style="display: none;">{{$key+1}}</span><input type="checkbox" class="del" val="{{$ev->id}}" /></td>
                            <td>{{++$i}}</td>
                            <td>  @if($ev->status)
                                <span class="label label-sm label-success">Active</span>
                              @else
                                <span class="label label-sm label-danger">InActive</span>
                              @endif</td>
                            <td>{{$ev->title}}</td>
                            <td>{{date('d M, Y', strtotime(Helper::changeDate($ev->date)))}}</td>
                            <td><a href='javascript:void(0)' data-hover="tooltip" data-placement="top" data-target="#modal-edit-event-{{$ev->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$ev->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                <!--Modal Edit event start-->
                                <div id="modal-edit-event-{{$ev->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog modal-wide-width">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label3" class="modal-title">Edit Event</h4>
                                      </div>
                                      <div class="modal-body">
                                        <div class="form">
                                          <form class="form-horizontal" action="/admin/events_list/{{$ev->id}}/edit" method="post" onsubmit="return getContent('details_edit_{{$ev->id}}', 'det_edit_{{$ev->id}}'); " enctype="multipart/form-data">
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Status</label>
                                              <div class="col-md-9">
                                                <div data-on="success" data-off="primary" class="make-switch">
                                                  <input type="checkbox" {{$ev->status?"checked='checked'":''}} name="status" />
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Event Title <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                                <input type="text"  name='title' class="form-control" placeholder="eg. KPJ Sentosa launches new name KPJ Sentosa KL Specialist Hospital" value="{{$ev->title}}" required="">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Short Description <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                                <textarea name="description" rows="2" class="form-control" placeholder="eg. One of Kuala Lumpur's first private hospitals made a historic change today, changing its name from Sentosa Medical Centre to KPJ Sentosa KL Specialist Hosiptal (KPJ Sentosa)." required="">{{$ev->description}}</textarea>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Event Date <span class="require">*</span></label>
                                              <div class="col-md-4">
                                                <div class="input-group">
                                                  <input type="text" data-date-format="dd/mm/yyyy" class="datepicker-default form-control" placeholder="eg. 07 Mar, 2016" value="{{$ev->date}}" name="date" required="" />
                                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Upload Event Image <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                                <div class="xs-margin"></div>
                                          <div class="del_item_div_{{$ev->id}}">
                                                <img src="{{$ev->image}}" alt="{{$ev->alt}}" class="img-responsive"><br/>
                                                <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-image-{{$ev->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                <!--Modal delete image start-->
                                                <div id="modal-delete-image-{{$ev->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                        <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this image? </h4>
                                                      </div>
                                                      <div class="modal-body">
                                                        <p><img src="{{$ev->image}}" alt="{{$ev->alt}}"></p>
                                                        <div class="form-actions">
                                                          <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red del_item" type='image' model='event' input='image_{{$ev->id}}' hide_div='del_item_div_{{$ev->id}}' model_id='{{$ev->id}}'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                </div>
                                                <!-- modal delete end -->
                                                <div class="xs-margin"></div>
                                                <input id="image_{{$ev->id}}"  name='image' type="file" accept=".gif, .jpg, .png, .jpeg" />
                                                <span class="help-block">(Image dimension: 530 x 384 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Event Image Alt Text</label>
                                              <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="eg. KPJ Sentosa launches new name KPJ Sentosa KL Specialist Hospital" value="{{$ev->alt}}" name="alt">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="inputContent" class="col-md-3 control-label">Event Content</label>
                                              <div class="col-md-9"> note to programmer: please follow 100% front end style, including the list style in below fckeditor.
                                                <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                                <input type="hidden" name="details" id='det_edit_{{$ev->id}}'>
                                                <div id='details_edit_{{$ev->id}}' contenteditable="true"> 
                                                    {!!$ev->details!!}
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
                                <div id="modal-delete-{{$ev->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this event? </h4>
                                      </div>
                                      <div class="modal-body">
                                        <p><strong>#{{$key+1}}:</strong> {{$ev->title}}</p>
                                        <div class="form-actions">
                                          <div class="col-md-offset-4 col-md-8"> <a href="/admin/action_delete/{{$ev->id}}/event" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                          &nbsp;Showing {{ $events->firstItem() }} - {{ $events->lastItem() }} of {{ $events->total() }} entries
                        </div>
                      </div>
                      <div class="col-md-7 col-sm-12">
                        <div class="paging_bootstrap pull-right">

                            <?php echo $events->render()?>
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
      $('.lem_events').addClass('active');
      $('#index-banner_info').add('.dataTables_length').add('#DataTables_Table_0_info').add('.dataTables_paginate').add('#index-banner_length').hide();
  </script>

@stop
