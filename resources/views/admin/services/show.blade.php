@extends('layouts.admin')

@section('title')
   <title>Specialty | <?php echo strip_tags($service->title); ?>:: Edit</title>
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
            <li><a href="/admin/services">Services &amp; Procedures Listing</a> &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li class="active">Specialty | <?php echo strip_tags($service->title); ?> - Edit</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Specialty | <?php echo strip_tags($service->title); ?><i class="fa fa-angle-right"></i> Edit</h2>
              <div class="clearfix"></div>
              		@include('common.alerts')
             
              <div class="clearfix"></div>
              <p></p>
              <form action="/admin/services/{{$service->id}}/add_details" method="post" onsubmit="getContent('line3', 'det'); getContent('line2', 'tit')">
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Info</div>
                  <div class="clearfix"></div>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
                <div class="portlet-body"> 
                  <div contenteditable="true" id="line1">
                      <h1 class="entry-title">Specialty</h1>
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
                    <h2 class="light bordered main-title">{!!$service->title!!}</h2>
                  </div>
                  
                <input type="hidden" name="title" id='tit'>

                  <div class="row">
					
						<div class="col-md-12">
                <input type="hidden" name="details" id='det'>
						    <div contenteditable="true" id='line3'>                          

              @if($service->details)
                  {!!$service->details!!}
              @else  <div class="media pull-right"><img src="/images/service_procedures/img_not_available.jpg" width="467" class="img-rounded" alt="Anaesthesiology"></div>

                              <h5>Your Anaesthesiologist</h5>
                              <p>He is a specialist who is specially trained to provide the following services:- </p>  
                            
                              <h5>Pre-operative Assessment</h5>   
                              <p>When patient has to undergo an operation, the anaesthesiologist visits the patient to reassure him and discuss the type of anaesthesia to be used. He also identifies any other concurrent medical conditions, which may affect the anaesthetic and takes steps to stabilize these conditions. He may also order a sedative the night before surgery to allow the patient a restful sleep. </p>
                            
                              <h5>Anaesthesia for Surgical Procedures</h5>
                              <p>Most patient scheduled for an operation are fearful of pain and wrought with anxiety. The anaesthesiologist's role is to ensure that a patient has no pain throughout the procedure. He may do so by the following techniques:-</p>
                            
                                <ul class="list-unstyled">
                                    <li>
                                        <h6><i class="fa fa-check"></i> General Anaesthesia</h6>
                                        <p>The patient is asleep and is unaware of the operation until its over when the anaesthesiologist will wake him up. </p>                                
                                    </li>
                                    <li>
                                        <h6><i class="fa fa-check"></i> Regional Anaesthesia</h6>
                                        <p>The patient is awake but feels no pain because the operative site, e.g. Hand or legs is made pain free. If the patient is anxious, the anaesthesiologist may make the patient calm or sleepy by the administration of appropriate drugs. </p>                                
                                    </li>
                                    <li>
                                        <h6><i class="fa fa-check"></i> Local Anaesthesia</h6>
                                        <p>The patient is also awake. This procedure is performed by inject of local anaesthetic medication to numb only a small area of nerves at the site where the surgeon plans to operate such as for cataract surgery. </p>                                
                                    </li>
                                </ul>
                                
                                <h5>Post-operative Management</h5>
                                <p>After the operation, the patient may feel pain for a day or two. The anaesthesiologist can help to relief the pain by several measures. One modern method is the use of a computer-aided device, which delivers a pain killer every time the patient presses a button. The patient is therefore in full control of his own pain relief.</p>
                                
                                <h5>Obstetric Pain Relief</h5>
                                <p>It is now possible to deliver a baby without labour pain. The anaesthesiologist can perform an epidural to give Pain relief throughout the entire labour and until the baby is delivered. </p>
                                
                                <h5>Emergency Management and Resuscitation</h5>
                                <p>A seriously ill patient can suddenly stop breathing or develop a cardiac arrest. The anaesthesiologist is part of the team who will resuscitate such a patient and restore him to life. This setting can happen in the Accident &amp; Emergency Department when a patient is just admitted and occasionally in others parts of the hospital. </p>
                                
                                <h5>Management of Critically Ill Patients in the Inetnsive Care Unit (ICU)</h5>
                                <p>Very ill patients need cardio-respiratory support in the intensive care ward. Such as patients have an unstable blood circulation and unable to breath well. the also have poor nutrition and need very close monitoring. Here, the anaesthesiologist acts as an intensivist and breathes for the patients with the help of a life support machine (ventilator) until the patient's condition improves. </p>
                                
                                <h5>Helpful Information for Patients</h5>
            @endif
                                  
					
						</div><!-- end col-md-12 -->
						
						
					</div><!-- end row -->
                  
                </div><!-- end portlet body -->
                <!-- save button start -->
                <div class="form-actions none-bg"> <a href="#" class="btn btn-red preview_line">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button  class="btn btn-blue " type="helpful_info">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href='javascript:void(0)' class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
              </form>
                <!-- save button end -->
              </div>
              </div>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Helpful Information for Patients Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href='javascript:void(0)' data-target="#modal-add-info" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
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
                  <div id="modal-add-info" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title">Add New Helpful Information</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                            <form class="form-horizontal" method="post" action="/admin/services/{{$service->id}}/helpful_info" onsubmit="return getContent('details_info_{{$service->id}}', 'det_info_{{$service->id}}')">
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    <input type="checkbox" checked="checked" name="status" />
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" placeholder="eg. Why must I fast before an operation? " name="title" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Helpful Info Content</label>
                                <div class="col-md-9"> 
                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                  <input type="hidden" name='details' id='det_info_{{$service->id}}'>
                                      <div contenteditable="true" id='details_info_{{$service->id}}'>
                                        <p>When an operation is scheduled under a general anaesthetic, the anaesthesiologist requires the patient to be fasted for at least 4 hours. An empty stomach is important during the induction of an anaesthetic to prevent any food debris from entering the patient's lungs when he is unconscious. Aspiration of stomach contents into the lungs can be fatal. This is why it is important that a patient should NOT eat before an operation. </p>

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
                  <div id="modal-delete-selected" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                          
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red all_del" val="helpful_info">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <div class="col-md-offset-4 col-md-8"> <a href='/admin/action_delete/all/helpful_infos' class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                  <div class="table-responsive">
                      <table class="table table-hover table-striped">
                        <thead>
                          <tr>
                            <th width="1%"><input type="checkbox" class="del_all" /></th>
                            <th>#</th>
                            <th>Status</th>
                            <th>Title</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                  @foreach($service->helpful_infos as $key=>$info)

                          <tr>
                            <td><span style="display: none;">{{$key+1}}</span><input type="checkbox" class="del" val="{{$info->id}}" /></td>
                            <td>{{$key+1}}</td>
                            <td>  @if($info->status)
                                <span class="label label-sm label-success">Active</span>
                              @else
                                <span class="label label-sm label-danger">InActive</span>
                              @endif</td>
                            <td>{{$info->title}}</td>
                            <td><a href='javascript:void(0)' data-hover="tooltip" data-placement="top" data-target="#modal-edit-info-{{$info->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$info->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                <!--Modal Edit help info start-->
                                <div id="modal-edit-info-{{$info->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog modal-wide-width">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label3" class="modal-title">Edit Helpful Information</h4>
                                      </div>
                                      <div class="modal-body">
                                        <div class="form">
                                          <form class="form-horizontal" method="post" action="/admin/services/{{$service->id}}/helpful_info/edit/{{$info->id}}" onsubmit="getContent('details_info_edit_{{$info->id}}', 'det_info_edit_{{$info->id}}')">
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Status</label>
                                              <div class="col-md-9">
                                                <div data-on="success" data-off="primary" class="make-switch">
                                                  <input type="checkbox" {{$info->status?"checked='checked'":''}} name="status" />
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                               <input type="text" class="form-control" name="title_edit" placeholder="eg. Why must I fast before an operation?" value="{{$info->title}}" required="">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputContent" class="col-md-3 control-label">Helpful Info Content</label>
                                                <div class="col-md-9">
                                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                                  <input type="hidden" name='details_edit' id='det_info_edit_{{$info->id}}'>
                                                  <div contenteditable="true" id='details_info_edit_{{$info->id}}'>
                                                    @if($info->details)
                                                      {{ preg_replace('/(?:<|&lt;)\/?([a-zA-Z]+) *[^<\/]*?(?:>|&gt;)/', '', $info->details) }}
                                                    @endif
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
                              <!--END MODAL Edit vacancy-->
                                <!--Modal delete start-->
                                <div id="modal-delete-{{$info->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this information? </h4>
                                      </div>
                                      <div class="modal-body">
                                        <p><strong>#1:</strong>{{$info->title}}</p>
                                        <div class="form-actions">
                                          <div class="col-md-offset-4 col-md-8"> <a href='/admin/action_delete/{{$info->id}}/health_info' class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
              </div>
              <!-- end portlet -->
            </div>
          </div>
        </div>

@stop

@section('end_scripts')

  <script type="text/javascript">
      $('.lem').removeClass('active');
      $('.lem_services').addClass('active');
  </script>

@stop
