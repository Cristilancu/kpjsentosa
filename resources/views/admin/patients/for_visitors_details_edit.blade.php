@extends('layouts.admin')

@section('content')
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
                <li class="active">For Visitors | {{$visitor->title}} - Details</li>
            </ol>
            <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
            <div class="row">
                <div class="col-lg-12">
                    <h2>For Visitors | {{$visitor->title}} <i class="fa fa-angle-right"></i> Details</h2>
                    <div class="clearfix"></div>
                    <div id="success" class="alert alert-success alert-dismissable" style="display:none;">
                        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                        <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                        <p>The information has been saved/updated successfully.</p>
                    </div>
                    <div id="danger" class="alert alert-danger alert-dismissable" style="display:none;">
                        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                        <i class="fa fa-times-circle"></i> <strong>Error!</strong>
                        <p>The information has not been saved/updated. Please correct the errors.</p>
                    </div>
                    <div class="pull-left"> Last updated: <span class="text-blue updated_date">{{date('d M, Y @ h:i a', strtotime($visitor->updated_at))}}</span> </div>
                    <div class="clearfix"></div>
                    <p></p>

                    <div class="portlet">
                        <div class="portlet-header">
                            <div class="caption">Page Content</div>
                            <div class="clearfix"></div>
                            <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                            <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                        </div>
                        <div class="portlet-body">

                            <div class="row">

                                <div class="col-md-12">
                                    <div contenteditable="true" id="description">
                                        @if($visitor->desc !== null)
                                            {!! $visitor->desc !!}
                                        @else
                                            {!! "<p> </p>" !!}
                                        @endif
                                    </div>


                                </div><!-- end col-md-12 -->


                            </div><!-- end row -->

                        </div><!-- end portlet body -->
                        <!-- save button start -->

                        <div class="form-actions none-bg">
                            <a href="#preview in browser/not yet published" data-id="{{ $visitor->id }}" data-url ="{{ url('/admin/visitor_edit_details',$visitor->id) }}"class="btn btn-red save_preview">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp;
                            <a href="#publish online" data-id="{{ $visitor->id }}" data-url ="{{ url('/admin/visitor_edit_details',$visitor->id) }}"class="btn btn-blue save_preview">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a>
                        </div>                        <!-- save button end -->
                    </div><!-- end portlet -->
                </div>
            </div>
        </div>
        <!-- InstanceEndEditable -->
        <!--END CONTENT-->

        <!--BEGIN FOOTER-->

        <!--END FOOTER-->

        @endsection
        @section('end_scripts')
            <script>

                $('.lem').removeClass('active');
                $('.lem_patients').addClass('active');
                $(document).ready(function() {
                    
                $(".save_preview").on('click', function () {
                        var url = $(this).data('url');
                        var id = $(this).attr('data-id');
                        var token = $('meta[name="csrf-token"]').attr('content');
                        var general_desc = $("#description").html();

                        $.ajax({
                            url: $(this).data('url'),
                            type: 'POST',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: {
                                general_desc: general_desc,
                                _method: 'POST',
                                _token: token
                            },
                            success: function (data) {
                                if (data['success']) {
                                    $("#success").css('display', 'block');
                                    $("#danger").css('display', 'none');
                                    $('.updated_date').html('');
                                    $('.updated_date').html(data['date']);

                                    console.log(data['success']);
                                } else if (data['error']) {
                                    $("#success").css('display', 'none');
                                    $("#danger").css('display', 'black');
                                    alert(data['error']);
                                } else {
                                    alert('Whoops Something went wrong!!');
                                }
                            },
                            error: function (data) {
                                alert(data.responseText);
                            }
                        });
                    });
                });// preview save general
            </script>
@stop