@extends('layouts.admin')

@section('title')
  <title>KPJ Advisor Series :: Patient Listing</title>
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
         <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
         <li>Find Doctor &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
         <li class="active">Patients - Listing</li>
      </ol>
      <!-- InstanceEndEditable -->
   </div>
   <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
   <!-- InstanceBeginEditable name="EditRegion2" -->
   <div class="page-content">
      <div class="row">
         <div class="col-lg-12">
            <h2>Patients <i class="fa fa-angle-right"></i> Listing</h2>
            <div class="clearfix"></div>
			@include('common.alerts')
            <div class="clearfix"></div>
            <p></p>
            <div class="portlet">
               <div class="portlet-header">
                  <div class="caption">Patients Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-patient" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                     <button type="button" class="btn btn-primary">Delete</button>
                     <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                     <ul role="menu" class="dropdown-menu">
                        <li><a href="javascript:void(0)" data-target="#modal-delete-selected" data-toggle="modal">Delete selected item(s)</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                     </ul>
                  </div>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal add patient start-->
                  <div id="modal-add-patient" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                     <div class="modal-dialog modal-wide-width">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                              <h4 id="modal-login-label3" class="modal-title">Add Patient</h4>
                           </div>
                           <div class="modal-body">
                              <div class="form">
                                 <form class="form-horizontal">
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Status</label>
                                       <div class="col-md-9">
                                          <div data-on="success" data-off="primary" class="make-switch">
                                             <input type="checkbox" checked="checked" id="patient_status" />
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Patient MRN No. <span class='require'>*</span></label>
                                       <div class="col-md-6">
                                          <input type="text" class="form-control" placeholder="eg. 0000000001" id="patient_mrn_number" value="{{old('patient_mrn_number')}}">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Patient Last Name <span class='require'>*</span></label>
                                       <div class="col-md-6">
                                          <input type="text" class="form-control" placeholder="eg. Lim" id="patient_last_name" value="{{old('patient_last_name')}}">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Patient First Name <span class='require'>*</span></label>
                                       <div class="col-md-6">
                                          <input type="text" class="form-control" placeholder="eg. Hock Hock" id="patient_first_name" value="{{old('patient_first_name')}}">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Date of Birth <span class='require'>*</span></label>
                                       <div class="col-md-4">
                                          <div class="input-group">
                                             <input type="text" data-date-format="dd/mm/yyyy" placeholder="eg. 25 June, 1980" class="datepicker-default form-control" id="patient_date_of_birth" value="{{old('patient_date_of_birth')}}" />
                                             <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Gender <span class='require'>*</span></label>
                                       <div class="col-md-6">
                                          <select class="form-control" id="patient_gender" value="{{old('patient_gender')}}">
                                             <option>- Please select -</option>
                                             <option value="male">Male</option>
                                             <option value="female">Female</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">NRIC/Passport No. <span class='require'>*</span></label>
                                       <div class="col-md-6">
                                          <input type="text" class="form-control" placeholder="eg. 890625-04-3445" id="patient_passport_number" value="{{old('patient_passport_number')}}">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Contact No. <span class='require'>*</span></label>
                                       <div class="col-md-6">
                                          <input type="text" class="form-control" placeholder="eg. +6016-123-1234" id="patient_contact_number" value="{{old('patient_contact_number')}}">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Address <span class="text-red">* </span></label>
                                       <div class="col-md-6">
                                          <textarea class="form-control" placeholder="eg. B2-2-2, Solaris Dutamas, No. 1, Jalan Dutamas 1" id="patient_address" value="{{old('patient_address')}}"></textarea>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">City <span class="text-red">* </span></label>
                                       <div class="col-md-6">
                                          <input type="text" class="form-control" id="patient_city" value="{{old('patient_city')}}">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Postal Code <span class="text-red">* </span></label>
                                       <div class="col-md-6">
                                          <input type="text" class="form-control" id="patient_postal_code" value="{{old('patient_postal_code')}}">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">State <span class="text-red">* </span></label>
                                       <div class="col-md-6">
                                          <input type="text" class="form-control" id="patient_state" value="{{old('patient_state')}}">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Country <span class="text-red">* </span></label>
                                       <div class="col-md-6">
                                          <select name="select" class="form-control" id="patient_country_id" value="{{old('patient_country_id')}}">
                                             <option value="">-- Please select --</option>
                                             @foreach($countries as $country)
                                             <option value="{{$country->id}}" data-calling-code="{{$country->calling_code}}" data-eu-tax="{{$country->eu_tax}}">{{$country->name}}</option>
                                             @endforeach
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Email (Login ID) <span class='require'>*</span></label>
                                       <div class="col-md-6">
                                          <input type="text" class="form-control" placeholder="eg. yourname@domain.com" id="patient_email" value="{{old('patient_email')}}">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Password <span class="text-red">*</span></label>
                                       <div class="col-md-6">
                                          <div class="input-icon"><i class="fa fa-key"></i>
                                             <input id="patient_password" type="password" placeholder="Password" class="form-control" value="-^L^wuLQ9{S" value="">
                                             <span class="text-10px">(Password length should be between 6-12 characters)</span> 
                                          </div>
                                          <p><a href="#" id="add_generate_password">Generate Password</a></p>
                                          <div id="add_password_generated_block">
                                             <input id="add_password_generated" type="text" class="form-control"/>
                                             <div class="col-md-offset-4 col-md-7 margin-top-10px"> <a href="#" id="add_use_generated_password" class="btn btn-red">Ok &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                          </div>
                                          <input type="hidden" id="strength">
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="xs-margin"></div>
                                    <div class="form-group">
                                       <label class="control-label col-md-3"></label>
                                       <div class="col-md-6">
                                          <div data-hover="tooltip" data-placement="top"  class="progress progress-striped active">
                                             <div id="add_progress_bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" class=" ">
                                                <span class="sr-only" ></span>
                                                <span class="progress-completed" id="add_progress_bar_text"></span>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- col-md-6 -->
                                    </div>
                                    <!-- end form group -->
                                    <div class="clearfix"></div>
                                    <div class="form-group">
                                       <label class="control-label col-md-3">Confirm Password <span class="text-red">*</span></label>
                                       <div class="col-md-6">
                                          <div class="input-icon"><i class="fa fa-key"></i>
                                             <input type="password" placeholder="Confirm Password" class="form-control" id="patient_password_confirmation" value="" />
                                             <span class="text-10px">(Password length should be between 6-12 characters)</span> 
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Newsletter Subscription</label>
                                       <div class="col-md-9">
                                          <div class="margin-top-10px">
                                             <input type="checkbox" checked="checked" id="patient_newsletter_subscription" value="1" {{(old('patient_newsletter_subscription')==1?'checked="checked"':'')}}>
                                             I would like to subscribe to KPJ Sentosa KL Specialist Hospital's newsletter and get latest news &amp; events, promotions &amp; packages. 
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-actions">
                                       <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0)" class="btn btn-red" id="btn-addnew-save">Save{{--Add new save--}} &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--END MODAL add patient-->
                  

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
                            <div class="col-md-offset-4 col-md-8"> <a href='javascript:void(0)' class="btn btn-red all_del" val='Patient' take_four='yes'>Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href='javascript:void(0)' data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                              <h4 id="modal-login-label4b" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
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
                  <?php /*
					<div class="form-inline pull-left">
					 <div class="form-group">
					    <select name="select" class="form-control">
					       <option>10</option>
					       <option>20</option>
					       <option selected="selected">30</option>
					       <option>50</option>
					       <option>100</option>
					    </select>
					    &nbsp;
					    <label class="control-label">Records per page</label>
					 </div>
					</div>
					<div class="clearfix"></div>
					<br/>
					<br/>
                  */?>
                  <div class="clearfix"></div>
                  <div class="table-responsive mtl">
                     <table class="table table-hover table-striped">
                        <thead>
                           <tr>
                              <th width="1%"><input type="checkbox" class="del_all" /></th>
                              <!--wolf0518-->
                              <th id="sortorder">#</th>
                              <th>Status</th>
                              <th>MRN #</th>
                              <th>Patient Name</th>
                              <th>Contact No</th>
                              <th>Email</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($patients as $key=>$patient)
                           <tr>
                              <td><span style="display: none;">{{$key+1}}</span><input type="checkbox" class="del" val="{{$patient->id}}" /></td>
                              <td>{{$patient->id}}</td>
                              <td>
                                 @if($patient->status == 1)
                                 <span class="label label-sm label-success">Active</span>
                                 @else
                                 <span class="label label-sm label-danger">Inactive</span>
                                 @endif
                              </td>
                              <td>{{$patient->mrn_number}}</td>
                              <td>{{$patient->first_name}} {{$patient->last_name}}</td>
                              <td>{{$patient->contact_number}}</td>
                              <td>{{$patient->user["email"]}}</td>
                              <td>
                                 <a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-patient" data-toggle="modal" title="Edit" data-id="{{$patient->id}}" data-status="{{$patient->status}}" data-mrnnumber="{{$patient->mrn_number}}" data-lastname="{{$patient->last_name}}" data-firstname="{{$patient->first_name}}" data-dob="{{$patient->date_of_birth}}" data-gender="{{$patient->gender}}" data-passportnumber="{{$patient->passport_number}}" data-contactnumber="{{$patient->contact_number}}" data-address="{{$patient->address}}" data-city="{{$patient->city}}" data-postalcode="{{$patient->postal_code}}" data-state="{{$patient->state}}" data-countryid="{{$patient->country_id}}" data-newslettersubscription="{{$patient->newsletter_subscription}}" data-email="{{$patient->user["email"]}}"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-patient" data-toggle="modal" data-id="{{$patient->id}}" data-mrnnumber="{{$patient->mrn_number}}" data-lastname="{{$patient->last_name}}" data-firstname="{{$patient->first_name}}"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                        <tfoot>
                           <tr>
                              <td colspan="8"></td>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
                  <!-- end table responsive -->
                  <?php /* 
                  <div class="tool-footer text-right">
                     <p class="pull-left">Showing 1 to 10 of 57 entries</p>
                     <ul class="pagination pagination mtm mbm">
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                     </ul>
                  </div>
                  */ ?>
                  <div class="clearfix"></div>

<?php /* Modals for Editing and Deleting */ ?>
                                 <!--Modal Edit patient start-->
                                 <div id="modal-edit-patient" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                    <div class="modal-dialog modal-wide-width">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                             <h4 id="modal-login-label3b" class="modal-title">Edit Patient</h4>
                                          </div>
                                          <div class="modal-body">
                                             <div class="form">
                                                <form class="form-horizontal">
                                                   <div class="form-group">
                                                      <label class="col-md-3 control-label">Status</label>
                                                      <div class="col-md-9">
                                                         <div data-on="success" data-off="primary" class="make-switch">
                                                            <input type="hidden" name="edit_patient_id" id="edit_patient_id">
                                                            <input type="checkbox" checked="checked" id="edit_status"/>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="col-md-3 control-label">Patient MRN No. <span class='require'>*</span></label>
                                                      <div class="col-md-6">
                                                         <input type="text" class="form-control" placeholder="eg. 0000000001" value="" id="edit_mrn_number">
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="col-md-3 control-label">Patient Last Name <span class='require'>*</span></label>
                                                      <div class="col-md-6">
                                                         <input type="text" class="form-control" placeholder="eg. Lim" value="Lim" id="edit_last_name">
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="col-md-3 control-label">Patient First Name <span class='require'>*</span></label>
                                                      <div class="col-md-6">
                                                         <input type="text" class="form-control" placeholder="eg. Hock Hock" value="Hock Hock" id="edit_first_name">
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="col-md-3 control-label">Date of Birth <span class='require'>*</span></label>
                                                      <div class="col-md-4">
                                                         <div class="input-group">
                                                            <input type="date" data-date-format="dd/mm/yyyy" placeholder="eg. 25 June, 1980" class="form-control" value="" id="edit_date_of_birth"/>
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="col-md-3 control-label">Gender <span class='require'>*</span></label>
                                                      <div class="col-md-6">
                                                         <select name="edit_gender" class="form-control" id="edit_gender">
                                                            <option value="">- Please select -</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="col-md-3 control-label">NRIC/Passport No. <span class='require'>*</span></label>
                                                      <div class="col-md-6">
                                                         <input type="text" class="form-control" placeholder="eg. 890625-04-3445" value="890625-04-3445" id="edit_passport_number">
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="col-md-3 control-label">Contact No. <span class='require'>*</span></label>
                                                      <div class="col-md-6">
                                                         <input type="text" class="form-control" placeholder="eg. +6016-123-1234" value="+6016-123-1234" id="edit_contact_number">
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="col-md-3 control-label">Address <span class="text-red">* </span></label>
                                                      <div class="col-md-6">
                                                         <textarea class="form-control" placeholder="eg. B2-2-2, Solaris Dutamas, No. 1, Jalan Dutamas 1" id="edit_address">B2-2-2, Solaris Dutamas, No. 1, Jalan Dutamas 1</textarea>
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="col-md-3 control-label">City <span class="text-red">* </span></label>
                                                      <div class="col-md-6">
                                                         <input type="text" class="form-control" value="Kuala Lumpur" id="edit_city">
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="col-md-3 control-label">Postal Code <span class="text-red">* </span></label>
                                                      <div class="col-md-6">
                                                         <input type="text" class="form-control" value="50480" id="edit_postal_code">
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="col-md-3 control-label">State <span class="text-red">* </span></label>
                                                      <div class="col-md-6">
                                                         <input type="text" class="form-control" value="Wilayah Persekutuan" id="edit_state">
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="col-md-3 control-label">Country <span class="text-red">* </span></label>
                                                      <div class="col-md-6">
                                                         <select name="select" class="form-control" id="edit_country_id">
                                                            <option>-- Please select --</option>
                                                            @foreach($countries as $country)
                                                            <option data-calling-code="{{$country->calling_code}}" data-eu-tax="{{$country->eu_tax}}" value="{{$country->id}}">{{$country->name}}</option>
                                                            @endforeach
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="col-md-3 control-label">Email (Login ID) <span class='require'>*</span></label>
                                                      <div class="col-md-6">
                                                         <p class="form-control-static" id="edit_email"></p>
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="control-label col-md-3">Password <span class="text-red">*</span></label>
                                                      <div class="col-md-6">
                                                         <div class="input-icon"><i class="fa fa-key"></i>
                                                            <input type="password" class="form-control" name="edit_password" id="edit_password" value="">
                                                            <span class="text-10px">(Password length should be between 6-12 characters)</span> 
                                                         </div>
                                                         <p><a href="#" id="edit_generate_password">Generate Password</a></p>
                                                         <div id="edit_password_generated_block">
                                                            <input id="edit_password_generated" type="text" class="form-control"/>
                                                            <div class="col-md-offset-4 col-md-7 margin-top-10px"> <a href="#" id="edit_use_generated_password" class="btn btn-red">Ok &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="clearfix"></div>
                                                   <div class="xs-margin"></div>
                                                   <div class="form-group">
                                                      <label class="control-label col-md-3"></label>
                                                      <div class="col-md-6">
                                                         <div data-hover="tooltip" data-placement="top"  class="progress progress-striped active">
                                                            <div id="edit_progress_bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" class=" ">
                                                               <span class="sr-only" ></span>
                                                               <span class="progress-completed" id="edit_progress_bar_text"></span>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!-- col-md-6 -->
                                                   </div>
                                                   <!-- end form group -->
                                                   <div class="clearfix"></div>
                                                   <div class="form-group">
                                                      <label class="control-label col-md-3">Confirm Password <span class="text-red">*</span></label>
                                                      <div class="col-md-6">
                                                         <div class="input-icon"><i class="fa fa-key"></i>
                                                            <input type="password" placeholder="Confirm Password" class="form-control" id="edit_password_confirmation" />
                                                            <span class="text-10px">(Password length should be between 6-12 characters)</span> 
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label class="col-md-3 control-label">Newsletter Subscription</label>
                                                      <div class="col-md-9">
                                                         <div class="margin-top-10px">
                                                            <input type="checkbox" checked="checked" id="edit_newsletter_subscription">
                                                            I would like to subscribe to KPJ Sentosa KL Specialist Hospital's newsletter and get latest news &amp; events, promotions &amp; packages. 
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="form-actions">
                                                      <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0)" class="btn btn-red" id="btn-edit-save">Save{{--Edit save--}} &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--END MODAL Edit patient-->
                                 <!--Modal delete start-->
                                 <div id="modal-delete-patient" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                    <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                             <h4 id="modal-login-label4c" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this patient? </h4>
                                          </div>
                                          <div class="modal-body">
                                             <p><strong>#<span id="deleting_id"></span>:</strong> <span id="deleting_mrn"></span> / <span id="deleting_patient_name"></span></p>
                                             <div class="form-actions">
                                                <input type="hidden" name="delete_id" id="delete_id">
                                                <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red" id="button-delete">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- modal delete end -->  
<?php /* End of Modals for Editing and Deleting */?>

               </div>
            </div>
            <!-- end portlet -->
         </div>
      </div>
   </div>
   <!-- InstanceEndEditable -->
   <!--END CONTENT-->


<!-- </div> END PAGE WRAPPER-->
@stop


@section('end_scripts')
<script type="text/javascript">
    $('.lem').removeClass('active')
    $('.lem_patient').addClass('active')
</script>

<script>
   $('#btn-addnew-save').on('click', function(){
      var patient_status = $('#patient_status:checked').length;
      var patient_mrn_number = $('#patient_mrn_number').val();
      var patient_last_name = $('#patient_last_name').val();
      var patient_first_name = $('#patient_first_name').val();
      var patient_date_of_birth = $('#patient_date_of_birth').val();
      var patient_gender = $('#patient_gender').val();
      var patient_passport_number = $('#patient_passport_number').val();
      var patient_contact_number = $('#patient_contact_number').val();
      var patient_address = $('#patient_address').val();
      var patient_city = $('#patient_city').val();
      var patient_postal_code = $('#patient_postal_code').val();
      var patient_state = $('#patient_state').val();
      var patient_country_id = $('#patient_country_id').val();
      var patient_newsletter_subscription = $('#patient_newsletter_subscription').val();
      var patient_email = $('#patient_email').val();
      var patient_password = $('#patient_password').val();
      var patient_password_confirmation = $('#patient_password_confirmation').val();

      var menu_item_id = $('#menu-item-id').val();
      var menu_category_name = $('#menu-category-name').val();

      /*AJAX call to post changes */
      $.ajax({
          type    : "POST",
          url     : '/admin/patient_add_new',
          data    :   {
            patient_status: patient_status,
            patient_mrn_number: patient_mrn_number,
            patient_last_name: patient_last_name,
            patient_first_name: patient_first_name,
            patient_date_of_birth: patient_date_of_birth,
            patient_gender: patient_gender,
            patient_passport_number: patient_passport_number,
            patient_contact_number: patient_contact_number,
            patient_address: patient_address,
            patient_city: patient_city,
            patient_postal_code: patient_postal_code,
            patient_state: patient_state,
            patient_country_id: patient_country_id,
            patient_email: patient_email,
            password: patient_password,
            // patient_generate_password: patient_generate_password,
            password_confirmation: patient_password_confirmation,
            patient_newsletter_subscription: patient_newsletter_subscription
          },
          dataType    : 'json',
          complete    :   function(data){
              // console.log(data.responseText);
              result = JSON.parse(data.responseText);
              if(result.status == 'ok'){
                $('#modal-edit-category').modal('hide');
                window.location.reload();
              }
          }
      });
   });
   $('#modal-add-patient').on('show.bs.modal', function (event) {
       var button = $(event.relatedTarget) ;
       var modal = $(this);
       modal.find('#add_password_generated_block').hide();


       modal.find('#add_generate_password').click(function(event) {
           event.preventDefault();
           modal.find('#add_password_generated_block').show();
           var strongPassword=generatePassword(12);
           modal.find('#add_password_generated').val(strongPassword);
       });

       modal.find('#add_use_generated_password').click(function(event){
           event.preventDefault();
           var pass = modal.find('#add_password_generated').val();
           modal.find('#patient_password').val(pass);
           modal.find('#patient_password_confirmation').val(pass);
           updateProgressBar($('#strength').val(), 'add');
       });

   });

   $('#modal-edit-patient').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) ;

      var patientId = button.data('id');
      var patientStatus = button.data('status');
      var patientMrnNumber = button.data('mrnnumber');
      var patientLastName = button.data('lastname');
      var patientFirstName = button.data('firstname');
      var patientDateOfBirth = button.data('dob');
      var patientGender = button.data('gender');
      var patientPassportNumber = button.data('passportnumber');
      var patientContactNumber = button.data('contactnumber');
      var patientAddress = button.data('address');
      var patientCity = button.data('city');
      var patientPostalCode = button.data('postalcode');
      var patientState = button.data('state');
      var patientCountryId = button.data('countryid');
      var patientNewsletterSubscription = button.data('newslettersubscription');
      var patientEmail = button.data('email');

      var modal = $(this);
      modal.find('#edit_patient_id').val(patientId);
      modal.find('#edit_status').val(patientStatus);
      modal.find('#edit_mrn_number').val(patientMrnNumber);
      modal.find('#edit_last_name').val(patientLastName);
      modal.find('#edit_first_name').val(patientFirstName);
      modal.find('#edit_date_of_birth').val(patientDateOfBirth);
      modal.find('#edit_gender').val(patientGender);
      modal.find('#edit_passport_number').val(patientPassportNumber);
      modal.find('#edit_contact_number').val(patientContactNumber);
      modal.find('#edit_address').val(patientAddress);
      modal.find('#edit_city').val(patientCity);
      modal.find('#edit_postal_code').val(patientPostalCode);
      modal.find('#edit_state').val(patientState);
      modal.find('#edit_country_id').val(patientCountryId);
      modal.find('#edit_newsletter_subscription').val(patientNewsletterSubscription);
      modal.find('#edit_email').html(patientEmail);


      modal.find('#edit_password_generated_block').hide();


      modal.find('#edit_generate_password').click(function(event) {
          event.preventDefault();
          modal.find('#edit_password_generated_block').show();
          var strongPassword=generatePassword(12);
          modal.find('#edit_password_generated').val(strongPassword);
      });

      modal.find('#edit_use_generated_password').click(function(event){
          event.preventDefault();
          var pass = modal.find('#edit_password_generated').val();
          modal.find('#edit_password').val(pass);
          modal.find('#edit_password_confirmation').val(pass);
          updateProgressBar($('#strength').val(), 'edit');
      });


      if(patientStatus == 1){
        console.log('satu');
        modal.find('.make-switch > div').removeClass('switch-off');
        modal.find('.make-switch > div').addClass('switch-on');
      } else {
        console.log('nol');
        modal.find('.make-switch > div').removeClass('switch-on');
        modal.find('.make-switch > div').addClass('switch-off');
      }
    });

   $('#btn-edit-save').on('click', function(){
      var datanya= {
         patient_status: $('#edit_status:checked').length,
         patient_mrn_number: $('#edit_mrn_number').val(),
         patient_last_name: $('#edit_last_name').val(),
         patient_first_name: $('#edit_first_name').val(),
         patient_date_of_birth: $('#edit_date_of_birth').val(),
         patient_gender: $('#edit_gender').val(),
         patient_passport_number: $('#edit_passport_number').val(),
         patient_contact_number: $('#edit_contact_number').val(),
         patient_address: $('#edit_address').val(),
         patient_city: $('#edit_city').val(),
         patient_postal_code: $('#edit_postal_code').val(),
         patient_state: $('#edit_state').val(),
         patient_country_id: $('#edit_country_id').val(),
         patient_newsletter_subscription: $('#edit_newsletter_subscription').val(),
         patient_email: $('#edit_email').val(),
         password: $('#edit_password').val(),
         password_confirmation: $('#edit_password_confirmation').val(),
         patient_id: $('#edit_patient_id').val()
      };

      console.log(datanya);

      /*AJAX call to post changes */
      $.ajax({
          type    : "POST",
          url     : '/admin/patient_save_edit',
          data    : datanya,
          dataType    : 'json',
          complete    :   function(data){
              console.log(data.responseText);
              result = JSON.parse(data.responseText);

              if(result.status == 'ok'){
                $('#modal-edit-category').modal('hide');
                window.location.reload();
              }
          }
      });
   });

   $('#modal-delete-patient').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) ;
      var patientId = button.data('id') ;
      var patientMrnNumber = button.data('mrnnumber');
      var patientLastName = button.data('lastname');
      var patientFirstName = button.data('firstname');

      var modal = $(this);
      modal.find('#delete_id').val(patientId);
      modal.find('#deleting_id').html(patientId);
      modal.find('#deleting_mrn').html(patientMrnNumber);
      modal.find('#deleting_patient_name').html(patientFirstName+' '+patientLastName);
    });

    $('#button-delete').on('click', function(event){
      var patient_id = $('#delete_id').val();

      /*AJAX call to post changes */
      $.ajax({
          type    : "GET",
          url     : '/admin/patient/'+patient_id+'/delete',
          data    :   {},
          dataType    : 'json',
          complete    :   function(data){
              // console.log(data.responseText);
              result = JSON.parse(data.responseText);
              console.log(result);
              if(result.status == 'ok'){
                $('#modal-delete-patient').modal('hide');
                window.location.reload();
              }
          }
      });
    });

   $(document).on('keyup change', '#patient_password', function(event) {
       var password = $(this).val();
       // console.log("length: "+password);

       var strength = checkPasswordStrength(password);
       updateProgressBar(strength, 'add');

   });
   $(document).on('keyup change', '#edit_password', function(event) {
       var password = $(this).val();
       // console.log("length: "+password);

       var strength = checkPasswordStrength(password);
       updateProgressBar(strength, 'edit');

   });

    function updateProgressBar(strength, action) {
        var strength = parseInt(strength);
        $('#' + action + '_progress_bar').removeClass();
        switch(strength) {
            case 0:
                $('#' + action + '_progress_bar').addClass('progress-bar progress-bar-danger');
                $('#' + action + '_progress_bar_text').html( strength+"%");
                break;
            case 10:
                $('#' + action + '_progress_bar').addClass('progress-bar progress-bar-danger');
                $('#' + action + '_progress_bar').css('width', strength+"%");
                $('#' + action + '_progress_bar_text').html( strength+"% Week");
                break;
            case 50:
                $('#' + action + '_progress_bar').addClass('progress-bar progress-bar-warning');
                $('#' + action + '_progress_bar_text').html( strength+"% Moderate");
                break;
            case 100:
                $('#' + action + '_progress_bar').addClass('progress-bar progress-bar-success');
                $('#' + action + '_progress_bar_text').html( strength+"% Strong");
                break;
        }
        $('#' + action + '_progress_bar').css('width', strength+"%");

    }
    function generatePassword(length) {
        var password = '', character;
        while (checkPasswordStrength(password)<100) {
            password = '';
            while (length > password.length) {
                if (password.indexOf(character = String.fromCharCode(Math.floor(Math.random() * 94) + 33), Math.floor(password.length / 94) * 94) < 0) {
                    password += character;
                }
            }
        }

        return password;
    }
   function checkPasswordStrength(password) {
        var strength;
       if (password.length === 0) {
           strength=0;
       }
       else if (password.length>0 && password.length<12) {
           strength=10;
       }
       else if (password.length>=12) {
           strength=50;
           if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)){
               strength=100;
           }
       }
       $('#strength').val(strength);

       return strength;
   }
   //wolf0518
   $('#sortorder').click();
   $('#sortorder').click();
</script>
@stop



