@extends('layouts.admin')

@section('title')
   <title>Latest News:: Listing</title>
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
            <li class="active">Latest News - Listing</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Latest News <i class="fa fa-angle-right"></i> Listing</h2>
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
                   @if($setting = Helper::hasSetting('news'))
                        {!!$setting->line1!!}
                    @else  
                      <h1 class="entry-title">Latest News</h1>
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
                     @if($setting = Helper::hasSetting('news'))
                        {!!$setting->line2!!}
                    @else  
                      <h2 class="light bordered main-title">Latest <span>News</span></h2>
                    @endif
                    </div>
                  </div>
                  <aside class="col-md-4">
                   
                      <!-- Archives
                             ============================================= -->
                      <div class="sidebar-widget clearfix"> 
                      <div contenteditable="true" id='line3'>
                     @if($setting = Helper::hasSetting('news'))
                        {!!$setting->line3!!}
                    @else  
                        <h2 class="bordered light">News <span>Archives</span></h2>
                    @endif
                      </div>
                      <!-- upcoming events start -->
                   <div contenteditable="true" id='line4'>
                     @if($setting = Helper::hasSetting('news'))
                        {!!$setting->line4!!}
                    @else  
                      <h2 class="bordered light">Upcoming <span>Events</span></h2>
                    @endif
                    </div>
                      <!-- health calendar start -->
                     <div contenteditable="true" id='line5'>
                     @if($setting = Helper::hasSetting('news'))
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
                <div class="form-actions none-bg"> <a href='javascript:void(0)' class="btn btn-red preview_line">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <a href='javascript:void(0)' class="btn btn-blue save_line" type="news">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp; <a href='javascript:void(0)' class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Latest News Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href='javascript:void(0)' data-target="#modal-add-news" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
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
                  <div id="modal-add-news" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title">Add New News</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                            <form class="form-horizontal" action="/admin/latest_news/add" method="post" enctype="multipart/form-data" onsubmit="return getContent('add_details','details_add') ">
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    <input type="checkbox" checked="checked" name="status" />
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">News Title <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" placeholder="eg. Pemeriksaan Kesihatan &amp; Suntikan Vaksin" name='title' required="">
                                </div>
                              </div>
                             <input type="hidden" name='details' id='details_add'>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Short Description <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <textarea  rows="2" class="form-control" placeholder="eg. Suntikan vaksin Meninggococcal Meningitis merupakan salah satu peraturan Haji Kerajaan Arab Saudi yang perlu." name='short_description' required=""></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">News Date <span class="require">*</span></label>
                                <div class="col-md-4">
                                  <div class="input-group">
                                    <input type="text" data-date-format="dd/mm/yyyy" placeholder="eg. 22 Mar, 2016" class="datepicker-default form-control" name='date' required="" />
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Upload News Image <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <div class="xs-margin"></div>
                                  <input id="exampleInputFile2" type="file" name="image" required="" accept=".gif, .jpg, .png, .jpeg"  />
                                  <span class="help-block">(Image dimension: 530 x 384 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">News Image Alt Text</label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" placeholder="eg. Pemeriksaan Kesihatan &amp; Suntikan Vaksin" name='alt'>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">News Content </label>
                                <div class="col-md-9"> note to programmer: please follow 100% front end style, including the list style in below fckeditor.
                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                  <div contenteditable="true"  id='add_details'>
                                        <article class="blog-item blog-full-width blog-detail">
                                        <div class="blog-thumbnail"> <img alt="Pemeriksaan Kesihatan &amp; Suntikan Vaksin" src="/images/news_detail/img_Pemeriksaan_Kesihatan_Suntikan_Vaksin.jpg"> </div>
                                        <div class="blog-content">
                                          <p>Suntikan vaksin Meninggococcal Meningitis merupakan salah satu peraturan Haji Kerajaan Arab Saudi yang perlu dipauthi. Hospital Pakar KPJ Sentosa KL menawarkan pemeriksaan kesihatan &amp; suntikan vaksin oleh Pegawai Kesihatan dengn harga pakej* yang berpatutan kepada bakal jemaah Haji dan Umrah.</p>
                                          <h5 class="text-danger">RM 145.00 @ Seorang</h5>
                                          <h5 class="text-danger">RM 250.00 @ 2 Orang</h5>
                                          <p>*Untuk masa terhad sahaja.</p>
                                          <p>Untuk temu janji, sila hubungi kami di talian (03) 4042-7166 (Ext.110) atau email ke <a href="mailto:kpjsentosa@kpjsentosa.com">kpjsentosa@kpjsentosa.com</a> </p>
                                        </div>
                                      </article>
                                    </div>
                                  <!-- end contenteditable -->
                                </div>
                              </div>
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;   <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
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
                            <div class="col-md-offset-4 col-md-8"> <a href="javascript:void(0)" class="btn btn-red all_del" val='news'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <div class="col-md-offset-4 col-md-8"> <a href="/admin/action_delete/all/news" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <th><a >Status</a></th>
                            <th><a >News Title</a></th>
                            <th><a >News Date</a></th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $i = $news->perPage() * ($news->currentPage()-1);?>
                     @foreach($news as $key=>$nw)
                          <tr>
                            <td><span style="display: none;">{{$key+1}}</span><input type="checkbox" class="edit_nw del" val="{{$nw->id}}" id='nw_{{$nw->id}}' /></td>
                            <td>{{++$i}}</td>
                            <td>
                            	@if($nw->status)
                            		<span class="label label-sm label-success">Active</span>
                            	@else
                            		<span class="label label-sm label-danger">InActive</span>
                            	@endif
                            </td>
                            <td>{{$nw->title}}</td>
                            <td>{{$nw->date}}</td>
                            <td><a href='javascript:void(0)' data-hover="tooltip" data-placement="top" data-target="#modal-edit-news-{{$nw->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$nw->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                <!--Modal Edit news start-->
                                <div id="modal-edit-news-{{$nw->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog modal-wide-width">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label3" class="modal-title">Edit News</h4>
                                      </div>
                                      <div class="modal-body">
                                        <div class="form">
                                          <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/admin/latest_news/{{$nw->id}}/edit" onsubmit="getContent('det_edit_{{$nw->id}}', 'de_edit_{{$nw->id}}')">
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Status</label>
                                              <div class="col-md-9">
                                                <div data-on="success" data-off="primary" class="make-switch">
                                                  <input type="checkbox" {{$nw->status?"checked='checked'":''}} name="status" />
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">News Title <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="eg. Pemeriksaan Kesihatan &amp; Suntikan Vaksin" value="{{$nw->title}}" name="title" required="">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Short Description <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                                <textarea name="short_description" rows="2" class="form-control" placeholder="eg. Suntikan vaksin Meninggococcal Meningitis merupakan salah satu peraturan Haji Kerajaan Arab Saudi yang perlu.">{{$nw->short_description}}</textarea>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">News Date <span class="require">*</span></label>
                                              <div class="col-md-4">
                                                <div class="input-group">
                                                  <input type="text" data-date-format="dd/mm/yyyy" class="datepicker-default form-control" placeholder="eg. 22 Mar, 2016" value="{{$nw->date}}" name="date" />
                                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">Upload News Image <span class='require'>*</span></label>
                                              <div class="col-md-9">
                                                <div class="xs-margin"></div>
                                                <div class="del_item_div_{{$nw->id}}">
                                                <img src="{{$nw->image}}" alt="{{$nw->alt}}" class="img-responsive"><br/>
                                                <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-image-{{$nw->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                <!--Modal delete image start-->
                                                <div id="modal-delete-image-{{$nw->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                        <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this image? </h4>
                                                      </div>
                                                      <div class="modal-body">
                                                        <p><img src="{{$nw->image}}" alt="{{$nw->alt}}" class="img-responsive"></p>
                                                        <div class="form-actions">
                                                          <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red del_item" type='image' model='news' input='image_{{$nw->id}}' hide_div='del_item_div_{{$nw->id}}' model_id='{{$nw->id}}'> Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                                <!-- modal delete end -->
                                                <div class="xs-margin"></div>
                                                <input id="image_{{$nw->id}}" type="file" name="image" accept=".gif, .jpg, .png, .jpeg"  />
                                                <span class="help-block">(Image dimension: 530 x 384 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="col-md-3 control-label">News Image Alt Text</label>
                                              <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="eg. Pemeriksaan Kesihatan &amp; Suntikan Vaksin" value="{{$nw->alt}}" name="alt">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="inputContent" class="col-md-3 control-label">News Content</label>
                                              <div class="col-md-9"> 
                                                <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                                <input type="hidden" name="details" id='de_edit_{{$nw->id}}'>
                                                <div contenteditable="true" id='det_edit_{{$nw->id}}'>
                                                    {!! $nw->details !!}
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
                                <div id="modal-delete-{{$nw->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this news? </h4>
                                      </div>
                                      <div class="modal-body">
                                        <p><strong>#{{$key+1}}:</strong> {{$nw->title}}</p>
                                        <div class="form-actions">
                                          <div class="col-md-offset-4 col-md-8"> <a href='/admin/action_delete/{{$nw->id}}/news' class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                          &nbsp;Showing {{ $news->firstItem() }} - {{ $news->lastItem() }} of {{ $news->total() }} entries
                        </div>
                      </div>
                      <div class="col-md-7 col-sm-12">
                        <div class="paging_bootstrap pull-right">

                            <?php echo $news->render()?>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
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
      $('.lem_latest').addClass('active');
      $('#index-banner_info').add('.dataTables_length').add('#DataTables_Table_0_info').add('.dataTables_paginate').add('#index-banner_length').hide();
  </script>

@stop
