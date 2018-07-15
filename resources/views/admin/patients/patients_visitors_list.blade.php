@extends('layouts.admin')

@section('title')
 <title>Patients &amp; Visitors:: Listing</title>
  @stop


@section('content')

    @include('admin.patients.partial.add_patient_list')
    @include('admin.patients.partial.delete_patient_list_selected')
    @include('admin.patients.partial.delete_patient_list_selected_error')   
    @include('admin.patients.partial.delete_all_patient_list')

    @include('admin.patients.partial_visitor.add_visitor_list')
    @include('admin.patients.partial_visitor.delete_visitor_list_selected')
    @include('admin.patients.partial_visitor.delete_visitor_list_selected_error')   
    @include('admin.patients.partial_visitor.delete_all_visitor_list')


        <!--BEGIN PAGE WRAPPER-->
      <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
        
        <div class="page-header-breadcrumb">
          <div class="page-heading hidden-xs">
            <h1 class="page-title">CMS Pages</h1>
          </div>
          
          <!-- InstanceBeginEditable name="EditRegion1" -->
          <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li>CMS Pages &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li class="active">Patients &amp; Visitors - Listing</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Patients &amp; Visitors <i class="fa fa-angle-right"></i> Listing</h2>
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
                  <div contenteditable="true">
                         @if($setting = Helper::hasSetting('patients_visitors'))
				{!!$setting->line1!!}
			@else  
				<h1 class="entry-title">Patients &amp; Visitors</h1>
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
                  <div contenteditable="true">
                         
                    <div class="col-md-6">
                    	<h2 class="light bordered main-title">For <span>Patients</span></h2>
                    </div>
                  </div>
                  <div contenteditable="true">
                    <div class="col-md-6">
                    	<h2 class="light bordered main-title">For <span>Visitors</span></h2>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <!-- end portlet body -->
                <!-- save button start -->

                <div class="form-actions none-bg">
                  <a href="javascript:void(0)" class="btn btn-red preview_line">
                     Save &amp; Preview &nbsp;
                     <i class="fa fa-search">
                     </i>
                  </a>
                  &nbsp; 
                  <a href="javascript:void(0)" class="btn btn-blue save_line">
                     Save &amp; Publish &nbsp;
                    <i class="fa fa-globe">
                    </i>
                  </a>
                  &nbsp;  
                 <a href="javascript:void(0)" class="btn btn-green">
                    Cancel &nbsp;
                    <i class="glyphicon glyphicon-ban-circle"></i>
                 </a> 
                </div>

                <!-- save button end -->
              </div>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">For Patients Listing</div>
                  <br/>

                  <p class="margin-top-10px"></p>

                  <a href="#" data-target="#modal-add-patient" data-toggle="modal" class="btn btn-success">
                    Add New &nbsp;
                    <i class="fa fa-plus"></i>
                  </a>

                  &nbsp;

                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">
                      Delete
                    </button>

                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle">
                        <span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>

                    <ul role="menu" class="dropdown-menu">
                      <li>
                        <a href="#" data-target="#modal-delete-selected-patient1" data-toggle="modal" id="delete_patient_selected">
                          Delete selected item(s)
                        </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                       <a href="#" data-target="#modal-delete-all-patient" data-toggle="modal">
                         Delete all
                       </a>
                      </li>
                    </ul>
                  </div>
                   
		<div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal Add New start-->
                  <!--END MODAL Add New-->
                  <!--Modal delete selected items start-->
                  @include('admin.patients.partial.delete_patient_list_selected')
                  <!-- modal delete selected items end -->
                  <!--Modal delete all items start-->
                  <!-- modal delete all items end -->

                   

                </div>
                <div class="portlet-body">
                  <div class="form-inline pull-left">
                    <!--<div class="form-group">
                      <select name="select" class="form-control">
                        <option  selected="selected">10</option>
                        <option>20</option>
                        <option>30</option>
                        <option>50</option>
                        <option>100</option>
                      </select>
                      &nbsp;
                      <label class="control-label">Records per page</label>
                    </div>-->
                  </div>
                  <div class="clearfix"></div>
                  <!--<br/>
                  <br/>-->
                  <div class="table-responsive">
                      <table class="table table-hover table-striped">
                        <thead>
                          <tr>
                            <th width="1%"><input type="checkbox" id="master"/></th>
                            <th>#</th>
                            <th>Status</th>
                            <th>Title</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($getPatients as $patient)
                          <tr>
                            <td>
                              <input type="checkbox"  class="sub_chk"  data-id="{{$patient->id }}" data-title="{{ $patient->title }}"/>
                            </td>
                            <td>{{ $patient->id }}</td>
                            <td>
                                @if($patient->status == 1)
                                  <span class="label label-sm label-success">Active</span>
                                @else
                                    <span class="label label-sm label-danger">Inactive</span>
                                @endif
                            </td>
                            <td>{{ $patient->title }}</td>
                            <td>
                                <a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-patient-{{$patient->id }}" data-toggle="modal" title="Edit">
                                    <span class="label label-sm label-success"><i class="fa fa-pencil"></i></span>
                                </a>
                                <a href="{{url('/admin/patient_edit_details',$patient->id)}}" data-hover="tooltip" data-placement="top" title="Add/Edit Patient Details">
                                    <span class="label label-sm label-warning"><i class="fa fa-plus"></i></span>
                                </a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$patient->id}}" data-toggle="modal">
                                    <span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span>
                                </a>

                                <!--Modal Edit patient start-->
                                @include('admin.patients.partial.edit_patient_list')
                                <!--END MODAL Edit vacancy-->
                                <!--Modal delete start-->
                                @include('admin.patients.partial.delete_patient_list')
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
                  <div class="tool-footer text-right">
                    <p class="pull-left">Showing {{($getPatients->currentpage()-1)*$getPatients->perpage()+1}} to {{$getPatients->lastItem()}}
                        of  {{$getPatients->total()}} entries</p>
                    
                      {!! $getPatients->render() !!}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div><!-- end portlet -->
              
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">For Visitors Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-visitor" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#modal-delete-selected-visitor1" data-toggle="modal" id="delete_visitor_selected">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all-visitor" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
				  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal Add New start-->
                 
                  <!--END MODAL Add New-->
                  <!--Modal delete selected items start-->                
                  <!-- modal delete selected items end -->
                  <!--Modal delete all items start-->                 
                  <!-- modal delete all items end -->
                </div>
                <div class="portlet-body">
                  <div class="form-inline pull-left">
                    <div class="form-group">
                    <!--  <select name="select" class="form-control">
                        <option selected="selected">10</option>
                        <option>20</option>
                        <option>30</option>
                        <option>50</option>
                        <option>100</option>
                      </select>
                      &nbsp;
                      <label class="control-label">Records per page</label>-->
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <!--<br/>
                  <br/>-->
                  <div class="table-responsive">
                      <table class="table table-hover table-striped">
                        <thead>
                          <tr>
                            <th width="1%"><input type="checkbox" id="master_visitor"/></th>
                            <th>#</th>
                            <th>Status</th>
                            <th>Title</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($getVisitors as $visitor)
                          <tr>
                              <td>
                                  <input type="checkbox"  class="sub_chk01"  data-id="{{$visitor->id }}" data-title="{{ $visitor->title }}"/>
                              </td>
                              <td>{{ $visitor->id }}</td>
                              <td>
                                  @if($visitor->status == 1)
                                  <span class="label label-sm label-success">Active</span>
                                @else
                                    <span class="label label-sm label-danger">Inactive</span>
                                @endif
                              </td>
                              <td>{{ $visitor->title}}</td>
                              <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-visitor-{{$visitor->id }}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a>
                                 <a href="{{url('/admin/visitor_edit_details',$visitor->id)}}" data-hover="tooltip" data-placement="top" title="Add/Edit Visitor Details"><span class="label label-sm label-warning"><i class="fa fa-plus"></i></span></a>
                                <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$visitor->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                  <!--Modal Edit start-->
                                 @include('admin.patients.partial_visitor.edit_visitor_list')
                                <!--END MODAL Edit vacancy-->
                                  <!--Modal delete start-->
                                  @include('admin.patients.partial_visitor.delete_visitor_list')
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
                  <div class="tool-footer text-right">
                    <p class="pull-left">Showing {{($getVisitors->currentpage()-1)*$getVisitors->perpage()+1}} to {{$getVisitors->lastItem()}}
                        of  {{$getVisitors->total()}} entries</p>
                        {!! $getVisitors->render() !!}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div><!-- end portlet -->
              
            </div>
          </div>
        </div>
        <!-- InstanceEndEditable -->
        <!--END CONTENT-->
            
        <!--BEGIN FOOTER-->

        
 
@stop


@section('end_scripts')

  <script type="text/javascript">
      $('.lem').removeClass('active');
      $('.lem_patients').addClass('active');
      $('#index-banner_info').add('.dataTables_length').add('#DataTables_Table_0_info').add('.dataTables_paginate').add('#index-banner_length').hide();
  </script>

  <script>
        $(document).on('hidden.bs.modal', function (e) {
           	 $(e.target).removeData('bs.modal');
              refresh: true
        });
  </script>

  <script>
  $(document).ready(function () {
    
    $('#master').on('click', function(e) {
    if($(this).is(':checked',true))  
    {
        $(".sub_chk").prop('checked', true);           
    } else {  
        $(".sub_chk").prop('checked',false);  
    }  
    });

    // For visitor 

    $('#master_visitor').on('click', function(e) {
        if($(this).is(':checked',true))  
        {
            $(".sub_chk01").prop('checked', true);           
        } else {  
            $(".sub_chk01").prop('checked',false);  
        }  

    });

    // end visitor
    
$("#delete_patient_selected").on('click', function(){

    var allVals = [];      
    $(".sub_chk:checked").each(function() {  
        allVals.push($(this).attr('data-id'));        
    });  
    if(allVals.length <=0){
      $("#modal-delete-selected-patient_error").modal();
    }else{
      $("#modal-delete-selected-patient_error").modal('hide');
      $("#modal-delete-selected-patient").modal();
    }
    


    var allPatientTitle = [];
    $(".sub_chk:checked").each(function() {  
        
        allPatientTitle.push($(this).attr('data-title'));
        var join_selected_patient_title = allPatientTitle.join("<br>");
        //console.log(allPatientTitle);
        $("#patient_selected").html(join_selected_patient_title);
    });  
});

// For visitor 
$("#delete_visitor_selected").on('click', function(){

var allVisitor = [];      
$(".sub_chk01:checked").each(function() {  
    allVisitor.push($(this).attr('data-id'));        
});  
if(allVisitor.length <=0){
  $("#modal-delete-selected-visitor_error").modal();
}else{
  $("#modal-delete-selected-visitor_error").modal('hide');
  $("#modal-delete-selected-visitor").modal();
}



var allVisitorTitle = [];
$(".sub_chk01:checked").each(function() {  
    
    allVisitorTitle.push($(this).attr('data-title'));
    var join_selected_visitor_title = allVisitorTitle.join("<br>");
    
    $("#visitor_selected").html(join_selected_visitor_title);
});  
});

//end for visitor


$('.delete_all').on('click', function(e) {
    var allVals = [];      
    $(".sub_chk:checked").each(function() {  
        allVals.push($(this).attr('data-id'));        
    });  
    if(allVals.length <=0)  
    {  
        alert("Please select row.");  
    }  else {                   
            var join_selected_values = allVals.join(",");          
            $.ajax({
                url: $(this).data('url'),
                type: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: 'ids='+join_selected_values,
                success: function (data) {
                    if (data['success']) {
                        $(".sub_chk:checked").each(function() {  
                            $(this).parents("tr").remove();                            
                                $("#modal-delete-selected-patient").modal('hide');                            
                        });
                    } else if (data['error']) {
                        alert(data['error']);
                    } else {
                        alert('Whoops Something went wrong!!');
                    }
                },
                error: function (data) {
                    alert(data.responseText);
                }
            });
          $.each(allVals, function( index, value ) {
              $('table tr').filter("[data-row-id='" + value + "']").remove();
          });      
    }  
});


$('[data-toggle=confirmation]').confirmation({
    rootSelector: '[data-toggle=confirmation]',
    onConfirm: function (event, element) {
        element.trigger('confirm');
    }
});

$(document).on('confirm', function (e) {
    var ele = e.target;
    e.preventDefault();
    $.ajax({
        url: ele.href,
        type: 'DELETE',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success: function (data) {
            if (data['success']) {
                $("#" + data['tr']).slideUp("slow");
                alert(data['success']);
            } else if (data['error']) {
                alert(data['error']);
            } else {
                alert('Whoops Something went wrong!!');
            }
        },
        error: function (data) {
            alert(data.responseText);
        }
    });
    return false;
});
});




// For visitor 
$('.delete_all_visitor').on('click', function(e) {
      var allVisitor = [];      
      $(".sub_chk01:checked").each(function() {  
          allVisitor.push($(this).attr('data-id'));        
      });  
    if(allVisitor.length <=0)  
    {  
        alert("Please select row.");  
    }  else {      
            var join_selected_values = allVisitor.join(",");         
            $.ajax({
                url: $(this).data('url'),
                type: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: 'ids='+join_selected_values,
                success: function (data) {
                    if (data['success']) {
                        $(".sub_chk01:checked").each(function() {  
                            $(this).parents("tr").remove();                        
                                $("#modal-delete-selected-visitor").modal('hide');                        
                        });
                    } else if (data['error']) {
                        alert(data['error']);
                    } else {
                        alert('Whoops Something went wrong!!');
                    }
                },
                error: function (data) {
                    alert(data.responseText);
                }
            });
          $.each(allVisitor, function( index, value ) {
              $('table tr').filter("[data-row-id='" + value + "']").remove();
          });
    }  
    });

    $('[data-toggle=confirmation]').confirmation({
    rootSelector: '[data-toggle=confirmation]',
    onConfirm: function (event, element) {
        element.trigger('confirm');
    }
    });
    $(document).on('confirm', function (e) {
    var ele = e.target;
    e.preventDefault();


$.ajax({
    url: ele.href,
    type: 'DELETE',
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    success: function (data) {
        if (data['success']) {
            $("#" + data['tr']).slideUp("slow");
            alert(data['success']);
        } else if (data['error']) {
            alert(data['error']);
        } else {
            alert('Whoops Something went wrong!!');
        }
    },
    error: function (data) {
        alert(data.responseText);
    }
});
return false;
});
</script>
@stop
