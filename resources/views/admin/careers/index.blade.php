@extends('layouts.admin')

@section('title')
<title>Job Vacancies:: Listing</title>
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
            <li>Careers &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li class="active">Job Vacancies - Listing</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Job Vacancies <i class="fa fa-angle-right"></i> Listing</h2>
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
                  @if($setting = Helper::hasSetting('careers'))
                        {!!$setting->line1!!}
                    @else
                      <h1 class="entry-title">Careers</h1>
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
                  @if($setting = Helper::hasSetting('careers'))
                        {!!$setting->line2!!}
                  @else
                    <h2 class="light bordered main-title">Job <span>Vacancies</span></h2>
                  @endif
                  </div>
                </div>
                <!-- end portlet body -->
                <!-- save button start -->
                <div class="form-actions none-bg"> <a href="javascript:void(0)" class="btn btn-red preview_line">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <a href="#" class="btn btn-blue save_line" type="careers">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp; <a href='javascript:void(0)' class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Job Vacancies Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href='javascript:void(0)' data-target="#modal-add-vacancy" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
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
                  <div id="modal-add-vacancy" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title">Add New Vacancy</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                            <form class="form-horizontal" action="/admin/careers/add_btn" method="post" onsubmit="change_things_value('change_things', 'de','re','fo');">
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    <input type="checkbox" checked="checked" name='status'/>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Job Title <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <textarea  rows="2" class="form-control" id="inputContent" placeholder="eg. MO / Consultant" name='title' required=""></textarea>
                                </div>
                              </div>
                              <!--<div class="form-group">
                                <label class="col-md-3 control-label">Job Location <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <textarea name="inputContent" rows="2" class="form-control" id="inputContent" placeholder="eg. Kuala Lumpur"></textarea>
                                </div>
                              </div>-->
                              <div class="form-group">
                                <label class="col-md-3 control-label">Post Date</label>
                                <div class="col-md-5">
                                  <div class="input-group">
                                    <input type="text" class="datepicker-default form-control" data-date-format="dd/mm/yyyy" placeholder="eg. 11 Apr, 2016" name="date" />
                                    <div class="input-group-addon"><i class="fa fa-calendar" name='date'></i></div>
                                  </div>
                                </div>
                              </div>


                              <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Job Description <span class='require'>*</span></label>
                                <div class="col-md-9"> 
                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                  <div class="acc-body">
                                      <div contenteditable="true" id='de'>
                                        <h5>Job Description:</h5>
                                    
                                        <ul class="list-unstyled">
                                          <li><i class="fa fa-check"></i> Description text.</li>
                                          <li><i class="fa fa-check"></i> Description text.</li>
                                          <li><i class="fa fa-check"></i> Description text.</li>
                                          <li><i class="fa fa-check"></i> Description text.</li>
                                          <li><i class="fa fa-check"></i> Description text.</li>
                                        </ul>
                                    </div>
                                  </div>
                                  <!-- end acc body -->
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Requirements <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                  <div class="acc-body">
                                      <div contenteditable="true" id='re'>
                                        <h5>Job Requirements:</h5>
                                    
                                        <ul class="list-unstyled">
                                          <li><i class="fa fa-check"></i> Requirements text.</li>
                                          <li><i class="fa fa-check"></i> Requirements text.</li>
                                          <li><i class="fa fa-check"></i> Requirements text.</li>
                                          <li><i class="fa fa-check"></i> Requirements text.</li>
                                          <li><i class="fa fa-check"></i> Requirements text.</li>
                                        </ul>
                                    </div>
                                  </div>
                                  <!-- end acc body -->
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Footer Content</label>
                                <div class="col-md-9">
                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                  <div class="acc-body" >
                                    <div contenteditable="true" id='fo'>
                                      <p>If you possess the requirements as stated above, you are invited to submit a comprehensive resume stating your current and expected remuneration with a recent passport sized photograph (non-returnable) and e-mail to <a href="mailto:kpjsentosa@kpjsentosa.com">kpjsentosa@kpjsentosa.com</a> before 15 July, 2016. Only short listed candidates will be notified.</p>
                                    </div>
                                  </div>
                                  <!-- end acc body -->
                                </div>
 
                                 <input id='change_things' type="hidden" name="description">
                         

                              </div>
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"> <button  class="btn btn-red" >Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
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
                            <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red all_del" val='career'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <div class="col-md-offset-4 col-md-8"> <a href='/admin/action_delete/all/careers' class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <th>Status</th>
                               <th>Job Title</th>
                            <th>Post Date</th>
                         
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $i = $careers->perPage() * ($careers->currentPage()-1);?>
                    @foreach($careers as $key=>$career)
                          <tr>
                            <td><span style="display: none;">{{$key+1}}</span><input type="checkbox" class="del" val="{{$career->id}}" /></td>
                            <td>{{++$i}}</td>
                            <td>  @if($career->status)
                                <span class="label label-sm label-success">Active</span>
                              @else
                                <span class="label label-sm label-danger">InActive</span>
                              @endif</td>
                              <td>{{$career->title}}</td>
                            <td>{{date('d M, Y', strtotime($career->created_at))}}</td>

                            <td><a href='javascript:void(0)' data-hover="tooltip" data-placement="top" data-target="#modal-edit-vacancy-{{$career->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$career->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                <!--Modal Edit vacancy start-->
                                <div id="modal-edit-vacancy-{{$career->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog modal-wide-width">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label3" class="modal-title">Edit Vacancy</h4>
                                      </div>
                                      <div class="modal-body">
                                        <div class="form">
                                          <form class="form-horizontal" action="/admin/careers/edit" method="post" onsubmit=" change_things_value('change_things_{{$career->id}}','description_{{$career->id}}','requirement_{{$career->id}}', 'footer_content_{{$career->id}}')">
                                          <input type="hidden" name="id" value="{{$career->id}}">
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Status</label>
                                              <div class="col-md-9">
                                                <div data-on="success" data-off="primary" class="make-switch">
                                                  <input type="checkbox" {{$career->status?"checked='checked'":''}} name="status" />
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Job Title <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                                <textarea name="title" rows="2" class="form-control" id="inputContent" placeholder="eg. MO / Consultant" required="">{{$career->title}}</textarea>
                                              </div>
                                            </div>
                                            <!--<div class="form-group">
                                              <label class="col-md-3 control-label">Job Location <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                                <textarea name="inputContent" rows="2" class="form-control" id="inputContent" placeholder="eg. Kuala Lumpur">Kuala Lumpur</textarea>
                                              </div>
                                            </div>-->
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Post Date</label>
                                              <div class="col-md-5">
                                                <div class="input-group">
                                                  <input type="text" class="datepicker-default form-control" data-date-format="dd/mm/yyyy" placeholder="11 Apr, 2016" value="{{$career->date}}"/>
                                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="inputContent" class="col-md-3 control-label">Job Description <span class='require'>*</span></label>
                                              <div class="col-md-9"> note to programmer: please follow 100% front end style, including the list style in below fckeditor.
                                                <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                                <div class="acc-body">
                                                    <div contenteditable="true" id='description_{{$career->id}}'>
                                                  			{!!$career->description!!}
                                                  </div>


                                                </div>
                                                <!-- end acc body -->
                                              </div>
                                            </div>
                                           <input id='change_things_{{$career->id}}' type="hidden" name="description">

                                            <div class="form-group">
                                              <label for="inputContent" class="col-md-3 control-label">Requirements <span class='require'>*</span></label>
                                              <div class="col-md-9"> note to programmer: please follow 100% front end style, including the list style in below fckeditor.
                                                <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                                <div class="acc-body">
                                                    <div contenteditable="true" id='requirement_{{$career->id}}'>
                                                   {!!$career->requirements!!}
                                                  </div>
                                                </div>
                                                <!-- end acc body -->
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="inputContent" class="col-md-3 control-label">Footer Content</label>
                                              <div class="col-md-9">
                                                <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                                <div class="acc-body">
                                                  <div contenteditable="true" id='footer_content_{{$career->id}}'>
                                                  {!!$career->footer_content!!}
                                                  </div>
                                                </div>
                                                <!-- end acc body -->
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
                              <!--END MODAL Edit vacancy-->
                                <!--Modal delete start-->
                                <div id="modal-delete-{{$career->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this vacancy? </h4>
                                      </div>
                                      <div class="modal-body">
                                        <p><strong>#{{$key+1}}:</strong> {{$career->title}}</p>
                                        <div class="form-actions">
                                          <div class="col-md-offset-4 col-md-8"> <a href='/admin/action_delete/{{$career->id}}/career' class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                          &nbsp;Showing {{ $careers->firstItem() }} - {{ $careers->lastItem() }} of {{ $careers->total() }} entries
                        </div>
                      </div>
                      <div class="col-md-7 col-sm-12">
                        <div class="paging_bootstrap pull-right">

                            <?php echo $careers->render()?>
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
        <!--END CONTENT-->
@endsection

@section('end_scripts')

  <script type="text/javascript">
      $('.lem').removeClass('active');
      $('.lem_vacancy').addClass('active');
  </script>

  <script type="text/javascript">
        function change_things_value(f, a, b, c){
    var str = $('#'+a).html() + 'this_is_yossa' + $('#'+b).html() +'this_is_yossa'+ $('#'+c).html()

            $('#'+f).val(str)


        }
        $(document).ready(function() {
            $('#index-banner_info').add('.dataTables_length').add('#DataTables_Table_0_info').add('.dataTables_paginate').add('#index-banner_length').hide();
        })
  </script>
@endsection
