@extends('layouts.admin')

@section('title')
  <title>KPJ Advisor Series :: Listing</title>
@stop


@section('content')
	<!--BEGIN PAGE WRAPPER-->
	<div id="page-wrapper">

		<!--BEGIN PAGE HEADER & BREADCRUMB-->
		<div class="page-header-breadcrumb">
			<div class="page-heading hidden-xs">
				<h1 class="page-title">Find Doctor</h1>
			</div>

			<!-- InstanceBeginEditable name="EditRegion1" -->
				<ol class="breadcrumb page-breadcrumb">
					<li><i class="fa fa-home"></i>&nbsp;<a href="/admin">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
					<li>Find Doctor &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
					<li class="active">Consultants - Listing</li>
				</ol>
			<!-- InstanceEndEditable -->
		</div>
		<!--END PAGE HEADER & BREADCRUMB-->

		<!--BEGIN CONTENT-->
		<!-- InstanceBeginEditable name="EditRegion2" -->
		<div class="page-content">
			<div class="row">
				<div class="col-lg-12">
					<h2>Consultants <i class="fa fa-angle-right"></i> Listing</h2>
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
							<div contenteditable="true" id="line1">
								@if($setting = Helper::hasSetting('find_doctor'))
									{!!$setting->line1!!}
								@else  
									<h1 class="entry-title">Find Doctor</h1>
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
							<div contenteditable="true" id="line2">
								@if($setting = Helper::hasSetting('find_doctor'))
									{!!$setting->line2!!}
								@else  
									<h2 class="light bordered main-title">Find <span>Doctor</span></h2>
								@endif
							</div>
						</div>
						<!-- end portlet body -->
						<!-- save button start -->
						<div class="form-actions none-bg"> <a href="javascript:void(0)" class="btn btn-red preview_line">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <a href="javascript:void(0)" class="btn btn-blue save_line" type="find_doctor">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp; <a href="javascript:void(0)" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
						<!-- save button end -->
					</div>

					<div class="portlet">
						<div class="portlet-header">
							<div class="caption">Consultants Listing</div>
							<br/>
							<p class="margin-top-10px"></p>
							<a href="/admin/find_doctor_new" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
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

							<!--Modal delete selected items start-->
							<div id="modal-delete-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
											<h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
										</div>
										<div class="modal-body">
											{{-- <p><strong>#1:</strong> Dr Mohd Rapi Abd Rahman</p> --}}
											<div class="form-actions">
												<div class="col-md-offset-4 col-md-8"> <a href="javascript:void(0)" class="btn btn-red all_del" val="doctor" take_four="yes">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
												<div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
											<!--wolf0518-->
											<th width="1%"><input type="checkbox" id="headcheck" /></th>
											<th id="sortorder">#</th>
											<th>Status</th>
											<th>Name</th>
											<th>Specialty</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($doctors as $key=>$doctor)
										<tr>
											<td class="newcheck"><span style="display: none;">{{$key+1}}</span><input type="checkbox" class="del" val="{{$doctor->id}}" /></td>
											<td>{{$key+1}}</td>
											<td>@if($doctor->status) <span class="label label-sm label-success">Active</span> @endif   @if(!$doctor->status)<span class="label label-sm label-danger">InActive</span> @endif</td>
											<td>{{ $doctor->name }}</td>
											<td>{{ strip_tags($doctor->service->title) }}</td>
											<td><a href="/admin/find_doctor/{{$doctor->id}}/edit" data-hover="tooltip" data-placement="top" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="javascript:void(0)" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$doctor->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
												<!--Modal delete start-->
												<div id="modal-delete-{{$doctor->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
																<h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this consultant? </h4>
															</div>
															<div class="modal-body">
																<p><strong>#{{$doctor->id}}:</strong> {{$doctor->name}}</p>
																<div class="form-actions">
																	<div class="col-md-offset-4 col-md-8"> <a href="/admin/action_delete/{{$doctor->id}}/doctor" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
							</div>
							<!-- end table responsive -->
							<div class="clearfix"></div>
						</div>

					</div>
					<!-- end portlet -->
				</div>
			</div>
		</div>
		<!-- InstanceEndEditable -->
		<!--END CONTENT-->
	
	<div id="line3"></div><div id="line4"></div><div id="line5"></div>
	
	<!-- </div> END PAGE WRAPPER-->

	{{-- Dummy editable lines --}}
@stop


@section('end_scripts')

<script type="text/javascript">
  $('.lem').removeClass('active')
  $('.lem_consultant').addClass('active')
  $(document).ready(function() {
      // $('#index-banner_info').add('.dataTables_length').add('#DataTables_Table_0_info').add('.dataTables_paginate').add('#index-banner_length').hide();
  })
  //wolf0518
	$("#headcheck").on('click', function(e) {
	    if ($(this).prop("checked") == true) {
	        $(".newcheck input[type='checkbox']").prop("checked", true);
	    }
	    else {
	        $(".newcheck input[type='checkbox']").prop("checked", false);  
	    }                
	});
</script>

<script>
	// $('.save_line').click(function(){
	// 	for(i=1; i<=5; i++){
	// 		if($('#line'+i).length){
	// 			getContent('line1', 'thg1');
	// 		}
	// 	}

	// 	var model = $(this).attr('type');

	// 	var data = $('#submit_preview').serializeArray();
	// 	window.number = 0;
	// 	for(z=1; z<=5; z++){
	// 		$.ajax({
	// 			url:'/admin/save_preview/line'+z+'/save',
	// 			data:{
	// 				model:model,
	// 				data:$('#line'+z).html(),
	// 			},
	// 			type:'post',
	// 			success:function(){
	// 				console.log(z)
	// 				window.number++;
	// 				if(window.number>2){
	// 					reload();
	// 				}
	// 			}
	// 		})
	// 	}
	// })
$('#sortorder').click();
</script>

@stop