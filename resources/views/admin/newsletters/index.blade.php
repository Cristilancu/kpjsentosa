@extends('layouts.admin')

@section('title')
   <title>Newsletter Subscribers:: Listing</title>
  @stop


@section('content')

<div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
        
        <div class="page-header-breadcrumb">
          <div class="page-heading hidden-xs">
            <h1 class="page-title">Promotions</h1>
          </div>
          
          <!-- InstanceBeginEditable name="EditRegion1" -->
          <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="/admin">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li>Promotions &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
            <li class="active">Newsletter Subscribers - Listing</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Newsletter Subscribers <i class="fa fa-angle-right"></i> Listing</h2>
              <div class="clearfix"></div>
         	@include('common.alerts')
 
              <div class="clearfix"></div>
              <p></p>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">News Alert Subscribers Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href='javascript:void(0)' data-target="#modal-add-subscriber" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href='javascript:void(0)' data-target="#modal-delete-selected" data-toggle="modal">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href='javascript:void(0)' data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>&nbsp;
                  <a href='javascript:void(0)' class="btn btn-blue" id='export'>Export to CSV &nbsp;<i class="fa fa-share"></i></a>  
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal Add New Subscriber start-->
                  <div id="modal-add-subscriber" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title">Add New Subscriber</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                            <form class="form-horizontal" method="post" action="/admin/newsletters/add">
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-6">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    <input type="checkbox" checked="checked" name='status'/>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Name <span class="require">*</span></label>
                                <div class="col-md-6">
                                  <div class="input-icon"> <i class="fa fa-user"></i>
                                      <input id="inputUsername" type="text" class="form-control" placeholder="eg. Hock Lim" name="name" />
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Email <span class="require">*</span></label>
                                <div class="col-md-6">
                                  <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                      <input type="text" class="form-control" placeholder="eg. hock@webqom.com" name="email" />
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
                  <!--END MODAL Add New Subscriber-->
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
                            <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red all_del" val='newsletters'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <div class="col-md-offset-4 col-md-8"> <a href="/admin/action_delete/all/newsletters" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                    <table class="table table-hover table-striped" id="table_export">
                      <thead>
                        <tr>
                          <th width="1%"><input type="checkbox" class="del_all"  /></th>
                          <th>#</th>
                          <th>Status</th>
                          <th><a href="#">Name</a></th>
                          <th><a href="#">Email</a></th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i = $newsletters->perPage() * ($newsletters->currentPage()-1);?>
                    @foreach($newsletters as $key=>$nw)
                        <tr class="record-{{$nw->id}}" type='news'>
                          <td><span style="display: none;">{{$key+1}}</span><input type="checkbox" val='{{$nw->id}}' class="del" /></td>
                          <td>{{++$i}}</td>
                         <td>  @if($nw->status)
                                <span class="label label-sm label-success">Active</span>
                              @else
                                <span class="label label-sm label-danger">InActive</span>
                              @endif</td>
                          <td>{{$nw->name}}</td>
                          <td><a href="mailto:{{$nw->email}}">{{$nw->email}}</a></td>

                          <td><a href='javascript:void(0)' data-hover="tooltip" data-placement="top" data-target="#modal-edit-subscriber-{{$nw->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href='javascript:void(0)' data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$nw->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                              <!--Modal Edit Subscriber start-->
                              <div id="modal-edit-subscriber-{{$nw->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog modal-wide-width">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label3" class="modal-title">Edit Subscriber</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form">
                                        <form class="form-horizontal" method='post' action='/admin/newsletters/{{$nw->id}}/edit'>
                                          <div class="form-group" >
                                            <label class="col-md-3 control-label">Status</label>
                                            <div class="col-md-6">
                                              <div data-on="success" data-off="primary" class="make-switch">
                                                <input type="checkbox" {{$nw->status?'checked="checked"':''}}  name="status" />
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Name <span class="require">*</span></label>
                                            <div class="col-md-6">
                                              <div class="input-icon"> <i class="fa fa-user"></i>
                                                  <input id="name" name="name" type="text" class="form-control" placeholder="eg. Hock Lim" value="{{$nw->name}}"/>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Email <span class="require">*</span></label>
                                            <div class="col-md-6">
                                              <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                  <input type="text" name="email" class="form-control" placeholder="eg. hock@webqom.com" value="{{$nw->email}}"/>
                                              </div>
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
                            <!--END MODAL Edit Subscriber-->
                              <!--Modal delete start-->
                              <div id="modal-delete-{{$nw->id}}" question_quiz role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this subscriber? </h4>
                                    </div>
                                    <div class="modal-body">
                                      <p><strong>#{{$key+1}}:</strong> {{$nw->name}} {{$nw->email}}</p>
                                      <div class="form-actions">
                                        <div class="col-md-offset-4 col-md-8"> <a href='/admin/action_delete/{{$nw->id}}/newsletters' class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                          &nbsp;Showing {{ $newsletters->firstItem() }} - {{ $newsletters->lastItem() }} of {{ $newsletters->total() }} entries
                        </div>
                      </div>
                      <div class="col-md-7 col-sm-12">
                        <div class="paging_bootstrap pull-right">

                            <?php echo $newsletters->render()?>
                        </div>
                      </div>
                    </div>
              
                    <div class="clearfix"></div>
                  </div>
                  <!-- end table responsive -->
                </div>
              </div>
            </div>
          </div>
        </div>

        @stop


        @section('end_scripts')

  <script type="text/javascript">
      $('.lem').removeClass('active');
      $('.lem_newsletter').addClass('active');
  </script>

  <script type="text/javascript" src='/admin_html/js/FileSaver.js/FileSaver.js'></script>
  <script type="text/javascript" src='/admin_html/js/TableCSVExport/jquery.TableCSVExport.js'></script>

<script>
$("#export").click(function(){
  var file_name = 'newsletters_listing';
$("#table_export").TableCSVExport({header:['puff','id','yea','Name','Email','action'], columns:['Name','Email'], delivery: 'download',        filename: 'newsletters_listing.csv',showHiddenRows:true});


});
$('#table_export_info').add('.dataTables_paginate').add('.dataTables_length').hide();
</script>

@stop
