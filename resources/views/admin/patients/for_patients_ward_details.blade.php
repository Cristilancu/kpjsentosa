@extends('layouts.admin')

@section('content')
        <!--END SIDEBAR MENU--><!--BEGIN PAGE WRAPPER-->
<div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
  
  <div class="page-header-breadcrumb">
    <div class="page-heading hidden-xs">
      <h1 class="page-title">CMS Pages</h1>
    </div>
    
    <!-- InstanceBeginEditable name="EditRegion1" -->
    <ol class="breadcrumb page-breadcrumb">
      <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
      <li>CMS Pages &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
      <li><a href="patients_visitors_list.html">Patients &amp; Visitors Listing</a> &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
      <li><a href="for_patients_details_edit.html#room-rates">Room Rates Listing</a> &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
      <li class="active">Standard Ward - Details</li>
    </ol>
    <!-- InstanceEndEditable --></div>
  <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
  <!-- InstanceBeginEditable name="EditRegion2" -->
  <div class="page-content">
    <div class="row">
      <div class="col-lg-12">
        <h2>Standard Ward <i class="fa fa-angle-right"></i> Details</h2>
        <div class="clearfix"></div>
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissable" >
              <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
              <i class="fa fa-check-circle"></i> <strong>Success!</strong>
              <p> {{ session()->get('message') }}</p>
            </div>
        @endif

        <div class="alert alert-success alert-dismissable" id="ward_message" style="display:none">
          <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
          <i class="fa fa-check-circle"></i> <strong>Success!</strong>
          <p>Ward details has been deleted successfully.</p>
        </div>

        <!-- <div class="pull-left"> Last updated: <span class="text-blue">15 Sept, 2014 @ 12.00PM</span> </div> -->
        @if($last_updated!='')
        <div class="pull-left"> Last updated: <span class="text-blue updated_date">{{date('d M, Y @ h:i a', strtotime($last_updated->updated_at))}}</span> </div>
        @endif
        <div class="clearfix"></div>
        <p></p>

        <div class="portlet">
          <div class="portlet-header">
            <div class="caption">Standard Ward Details</div>
            <br/>
            <p class="margin-top-10px"></p>
            <a href="#" data-target="#modal-add-type" data-toggle="modal" class="btn btn-success">Add New Ward Type &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
            <div class="btn-group">
              <button type="button" class="btn btn-primary">Delete</button>
              <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
              <ul role="menu" class="dropdown-menu">
                <li><a href="#" data-target="#modal-delete-selected" data-toggle="modal">Delete selected item(s)</a></li>
                <li class="divider"></li>
                <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
              </ul>
            </div>
             
	  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
            <!--Modal Add New start-->
            <div id="modal-add-type" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
              <div class="modal-dialog modal-wide-width">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                    <h4 id="modal-login-label3" class="modal-title">Add New Ward Type</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form">
                      <form class="form-horizontal" action="{{ route('admin.room_detail.store') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="room_rate_id" value="{{$room_rate_id}}">
                        <div class="form-group">
                          <label class="col-md-3 control-label">Status</label>
                          <div class="col-md-9">
                            <div data-on="success" data-off="primary" class="make-switch">
                                  <input type="hidden" name="status" value="0">
                                  <input type="checkbox" checked="checked" name="status" value="1"/>
                                </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-3 control-label">Wards <span class='require'>*</span></label>
                          <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="eg. Single-bedded, Superior" name="wards">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-3 control-label">Facilities <span class='require'>*</span></label>
                          <div class="col-md-9">
                            <textarea  rows="2" class="form-control" name="facilities"  placeholder="eg. Air-conditioned, Television, Telephone, Sofa, Condition with basic amenities provided"></textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label">Rates/Day <span class='require'>*</span></label>
                          <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="eg. RM 225.00" name="rates_day">
                          </div>
                        </div>
                       
                        <div class="form-actions">
                          <div class="col-md-offset-5 col-md-8">
                            <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;
                            &nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a>
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
            <div id="modal-delete-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-actions hidden">
                      <div class="col-md-offset-4 col-md-8"> 
                         <button class="btn btn-red delete_room_detail_selected" data-url="{{ route('admin.room_detail.destroy_all') }}">Yes &nbsp;<i class="fa fa-check"></i></button>
                         &nbsp; 
                        <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                    </div>
                    <div class="alert alert-danger text-center">
                      <p>Please select at least one item to delete</p>
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
                      <div class="col-md-offset-4 col-md-8"> 
                        <button class="btn btn-red delete_room_detail_selected" data-url="{{ route('admin.room_detail.destroy_all') }}">Yes &nbsp;<i class="fa fa-check"></i></button>
                        &nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                      <th width="1%"><input type="checkbox" id="room_detail_chk"/></th>
                      <th>#</th>
                      <th>Status</th>
                      <th>Wards</th>
                      <th>Rates/Day</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($room_details)>0)
                        @foreach ($room_details as $key=>$room_detail)
                    <tr>
                      <td><input type="checkbox"  class="room_detail_chk"  data-id="{{$room_detail->id }}" data-title="{{ $room_detail->wards }}"/>
                      </td>
                      <td>{{$key+1}}</td>
                      <td>@if($room_detail->status == 1)
                              <span class="label label-sm label-success">Active</span>
                            @else
                                <span class="label label-sm label-danger">Inactive</span>
                            @endif</td>
                      <td>{{$room_detail->wards}}</td>
                      <td>{{$room_detail->rates_day}}</td>
                      <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-type-{{$room_detail->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a>
                       <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$room_detail->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                          <!--Modal Edit ward type start-->
                          <div id="modal-edit-type-{{$room_detail->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                            <div class="modal-dialog modal-wide-width">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                  <h4 id="modal-login-label3" class="modal-title">Edit Ward Type</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="form">
                                    <form class="form-horizontal" action="{{ route('admin.room_detail.update', $room_detail->id) }}" method="post" enctype="multipart/form-data">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                                      <input type="hidden" name="_method" value="post">
                                      <input type="hidden" name="room_rate_id" value="{{$room_rate_id}}">
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Status</label>
                                        <div data-on="success" data-off="primary" class="make-switch">
                                                <input type="hidden" name="status" value="0">   
                                                <input type="checkbox" name="status" 
                                                    @if($room_detail->status == 1)
                                                      checked="checked"                                   
                                                    @endif
                                                    value="1"
                                                />
                                            </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-md-3 control-label">Wards <span class='require'>*</span></label>
                                          <div class="col-md-9">
                                            <input type="text" class="form-control" style="width:100%" placeholder="eg. Single-bedded, Superior" name="wards" value="{{ $room_detail->wards}}">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Facilities <span class='require'>*</span></label>
                                          <div class="col-md-9">
                                            <textarea  rows="2" class="form-control" style="width:100%"  placeholder="eg. Air-conditioned, Television, Telephone, Sofa, Condition with basic amenities provided" name="facilities">{{$room_detail->facilities}}</textarea>
                                          </div>
                                        </div>
          
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Rates/Day <span class='require'>*</span></label>
                                          <div class="col-md-9">
                                            <input type="text" class="form-control" style="width:100%" placeholder="eg. RM 225.00" value="{{$room_detail->rates_day}}" name="rates_day">
                                          </div>
                                        </div>
                                                                                  
                                      <div class="form-actions">
                                        <div class="col-md-offset-5 col-md-8"> 
                                          <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>
                                          &nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <!--END MODAL Edit vacancy-->
                          <!--Modal delete start-->
                          <div id="modal-delete-{{$room_detail->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                  <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this ward type? </h4>
                                </div>
                                <div class="modal-body">
                                  <p>{{$room_detail->wards}}</p>
                                  <p>{{$room_detail->facilities}}</p>
                                  <form class="form-horizontal" action="{{ route('admin.room_detail.destroy', $room_detail->id) }}" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                                            <input type="hidden" name="_method" value="DELETE">
                                      <div class="form-actions">
                                        <div class="col-md-offset-4 col-md-8"> 
                                          <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-floppy-o"></i></button>
                                          &nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                      </div>
                                    </form>
                                </div>
                              </div>
                            </div>
                        </div>
                        <!-- modal delete end -->
                      </td>
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="6"></td>
                    </tr>
                  </tfoot>
                </table>
            </div><!-- end table responsive -->
            <div class="tool-footer text-right">
               <p class="pull-left">Showing {{$room_details->count()>0 ? $room_details->firstItem():$room_details->count()}} to {{$room_details->lastItem()}}
                        of  {{$room_details->total()}} entries</p>
            </div>
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
<script>     
$(document).ready(function()
{

    $('.lem').removeClass('active');
    $('.lem_patients').addClass('active');

    $('#modal-delete-selected').on('show.bs.modal', function() {
      if ( $(".room_detail_chk:checked").length > 0) {
        $('#modal-delete-selected .modal-body .alert').addClass('hidden');
        $('#modal-delete-selected .modal-body .form-actions').removeClass('hidden');
      } else {
        $('#modal-delete-selected .modal-body .form-actions').addClass('hidden');
        $('#modal-delete-selected .modal-body .alert').removeClass('hidden');
      }
    });


    $("#room_detail_chk").on('click', function(){
        if($(this).is(':checked', true)){
          $(".room_detail_chk").prop('checked', true);
        }else{
          $(".room_detail_chk").prop('checked', false);
        }
    });

    $('.delete_room_detail_selected').on('click', function(e)
    {
        var admission_deposit_val = [];      
        $(".room_detail_chk:checked").each(function() {  
            admission_deposit_val.push($(this).attr('data-id'));        
        });
        if(admission_deposit_val.length <=0)  
        {  
            alert("Please select row.");  
            return;
        }
        else
        {                   
          var join_selected_values = admission_deposit_val.join(",");          
          $.ajax({
              url: $(this).data('url'),
              type: 'DELETE',
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              data: 'ids='+join_selected_values,
              success: function (data)
              {
                  if (data['message'])
                  {
                      $('#ward_message').show();
                      $(".room_detail_chk:checked").each(function()
                      {  
                          $(this).parents("tr").remove();                            
                          $("#modal-delete-selected").modal('hide');                            
                      });
                      $('#modal-delete-all').modal('hide');
                      location.reload(true);
                  } 
                  else if (data['error'])
                  {
                    alert(data['error']);
                  }
                  else
                  {
                      alert('Whoops Something went wrong!!');
                  }
              },
              error: function (data) {
                  alert(data.responseText);
              }
          });
        $.each(admission_deposit_val, function( index, value ) {
            $('table tr').filter("[data-row-id='" + value + "']").remove();
        });      
      }  
    });
});
</script>
@stop