@extends('layouts.front')

@section('title')
    <title>Patient Registration</title>
@stop

@section('content')

    <!-- Sub Page Banner
	============================================= -->
    <section class="sub-page-banner2 text-center" data-stellar-background-ratio="0.3">

        <div class="overlay"></div>

        <div class="container">
            <h1 class="entry-title">Patient Registration</h1>
        </div>

    </section>

    <div class="page-header-breadcrumb">


        <ol class="breadcrumb page-breadcrumb text-center">
            <li><a href="/make-appointment">Make an Appointment</a>&nbsp;</li>
            <li><a href="#" data-target="#modal-login" data-toggle="modal">Patient Login</a>&nbsp;</li>
        </ol>

    @if(\Auth::guest())
        <!-- Modal login -->
            <div class="modal fade book-an-appointment" id="modal-login" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Patient Login</h4>
                        </div>
                        <div class="modal-body">
                            <p>Log in to check/update your appointment bookings and update your personal details.</p>
                            <hr>

                            <div class="form-group">
                                <label class="col-md-4">Email (Login ID): <span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="eg. mail@yourdomain.com" name="email" id="email">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                                <label class="col-md-4">Password: <span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="password" id="password">
                                    <div class="clearfix"></div>
                                    <a href="#" data-target="#modal-forgot-password" data-toggle="modal">Forgot Your Password?</a>
                                    <div id="alert-message"></div>
                                    <?php /*<div class="alert alert-success" style="width: 94%">
											<i class="fa fa-check-circle"></i> Password entered correctly.
										</div>
										<div class="alert alert-danger" style="width: 94%">
											<i class="fa fa-times-circle"></i> Password entered wrongly.
										</div>*/ ?>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <hr>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-danger btn-rounded" style="width: 20%" id="btn-login">Login</button>
                                <button class="btn btn-primary btn-rounded" style="width: 20%" data-dismiss="modal">Cancel</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal login-->

            <!-- Modal forgot password -->
            <div class="modal fade book-an-appointment" id="modal-forgot-password" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Forgot Your Password?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Please type in the email address you used for signup and we will send you the new password.</p>
                            <hr>
                            <form method="post">
                                <div class="form-group">
                                    <label class="col-md-4">Email (Login ID): <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" placeholder="eg. mail@yourdomain.com" required="required">
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <hr>
                                <div class="col-md-12 text-center">
                                    <input type="submit" class="btn btn-danger btn-rounded" style="width: 40%" value="Reset Password">
                                    <input type="submit" class="btn btn-primary btn-rounded" style="width: 20%" value="Cancel" data-dismiss="modal">
                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal forgot password -->
        @endif
    </div>



    <!-- Sub Page Content
    ============================================= -->
    <div id="sub-page-content" class="no-padding-bottom clearfix">


        <!-- patient transfer Start
        ============================================= -->
        <div class="container">

            @if( Session::has('errors') )
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <h2 class="light bordered main-title">Account <span>Activation</span></h2>

                <div class="row">
                    <div class="col-md-12">
                        @if(array_has($view_data, 'show_email_warning'))
                        <div class="alert alert-success">
                            <h2 class="text-center"><i class="fa fa-check-circle"></i><strong>&nbsp; Email Sent!</strong></h2>
                            <h3 class="light text-center">Account activation email has been sent to you successfully.</h3>
                        </div>
                        @endif
                        @if(false)
                        <div class="alert alert-danger">
                            <h2 class="text-center error_message"><i class="fa fa-exclamation-triangle"></i><strong>&nbsp; Error!</strong></h2>
                            <h3 class="light text-center error_message">Account activation email has not been sent yet. Please click "Resend" and try again..</h3>
                        </div>
                        @endif

                        <p class="text-center">We have just sent you a confirmation email to {{ $view_data['email'] }}. Open it up and click "Activate Account".</p>
                        <p class="text-center">Can't find the email? We can resend it for you.</p>
                        <p class="text-center">Your Email: {{ $view_data['email'] }}</p>

                    </div><!-- end col-md-12 -->
                </div><!-- end row -->
                <div class="row">

                    <div class="col-md-12 text-center">
                        <a href="/patient/resend_confirmation/{{ $view_data['email'] }}" class="btn btn-danger btn-rounded">RESEND</a>

                    </div><!-- end col-md-12 -->
                </div>


                </div><!-- end container -->
        <div class="height40"></div>


        <!-- Find Health Information
        ============================================= -->
        <section class="medicom-app" data-stellar-background-ratio="0.3">
            <div class="container">
                <div class="row">
                    <div class="col-md-5"> <img src="/images/mobile-hand.png" class="app-img" alt="" title=""> </div>
                    <div class="col-md-7">
                        <div class="medicom-app-content">
                            <h1>Find Health Information</h1>
                            <p class="lead">All Topics by Letters</p>
                            <form name="appoint_form" id="appoint_form" method="post" action="#" onSubmit="return false">
                                <input type="text" placeholder="Search Topics">
                                <input type="submit" value="Search" class="btn btn-danger btn-rounded" onClick="validateAppoint();">
                                <div class="clearfix"></div>
                                <div class="height20"></div>
                                <a href="#" class="btn btn-rounded btn-default btn-sm">A</a> <a href="#" class="btn btn-rounded btn-default btn-sm">B</a> <a href="#" class="btn btn-rounded btn-default btn-sm">C</a> <a href="#" class="btn btn-rounded btn-default btn-sm">D</a> <a href="#" class="btn btn-rounded btn-default btn-sm">E</a> <a href="#" class="btn btn-rounded btn-default btn-sm">F</a> <a href="#" class="btn btn-rounded btn-default btn-sm">G</a> <a href="#" class="btn btn-rounded btn-default btn-sm">H</a> <a href="#" class="btn btn-rounded btn-default btn-sm">I</a> <a href="#" class="btn btn-rounded btn-default btn-sm">J</a> <a href="#" class="btn btn-rounded btn-default btn-sm">K</a> <a href="#" class="btn btn-rounded btn-default btn-sm">L</a> <a href="#" class="btn btn-rounded btn-default btn-sm">M</a>
                                <div class="height10"></div>
                                <a href="#" class="btn btn-rounded btn-default btn-sm">N</a> <a href="#" class="btn btn-rounded btn-default btn-sm">O</a> <a href="#" class="btn btn-rounded btn-default btn-sm">P</a> <a href="#" class="btn btn-rounded btn-default btn-sm">Q</a> <a href="#" class="btn btn-rounded btn-default btn-sm">R</a> <a href="#" class="btn btn-rounded btn-default btn-sm">S</a> <a href="#" class="btn btn-rounded btn-default btn-sm">T</a> <a href="#" class="btn btn-rounded btn-default btn-sm">U</a> <a href="#" class="btn btn-rounded btn-default btn-sm">V</a> <a href="#" class="btn btn-rounded btn-default btn-sm">W</a> <a href="#" class="btn btn-rounded btn-default btn-sm">X</a> <a href="#" class="btn btn-rounded btn-default btn-sm">Y</a> <a href="#" class="btn btn-rounded btn-default btn-sm">Z</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div><!--end sub-page-content-->
    <div class="solid-row"></div>
@stop


@section('end_scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            //$('#modal-login').modal('show');
        });
        $('.lem').removeClass('active');
        $('.lem_appointment').addClass('active');


        $('#modal-book').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) ;

            var strDate = button.data('strdate');
            var dayName = button.data('dayname');
            var appointmentDate = button.data('appointmentdate');

            var modal = $(this);
            modal.find('#str_date').html(strDate);
            modal.find('#day_name').html(dayName);
            modal.find('#appointment_date').val(appointmentDate);
        });

        $('#btn-login').on('click', function(e){
            $.ajax({
                url: '/patient/login',
                type: 'POST',
                data: {'_token': '{{csrf_token()}}', 'email':$('#email').val(), 'password':$('#password').val()},
            }).done(function(data) {
                console.log("ok: ");
                console.log(data);
                if(data.status == 1){
                    $('#alert-message').html(data.alert);
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                } else {
                    $('#alert-message').html(data.alert);
                }
            }).fail(function(data) {
                console.log("error: ");
                console.log(data);
            }).always(function() {
                console.log("complete");
            });
        });

        $(document).on('keyup change', '#password', function(event) {
            var password = $(this).val();
            // console.log("length: "+password);

            strenght=0;
            if (password.length==0) {
                strenght=0;

                $('#progress_bar').removeClass();
                $('#progress_bar').addClass('progress-bar progress-bar-danger');
                $('#progress_bar').css('width', strenght+"%");
                $('#progress_bar_text').html( strenght+"%");
                // console.log("zero"+strenght);
            }
            else if (password.length>0 && password.length<12) {
                strenght=10;
                $('#progress_bar').removeClass();
                $('#progress_bar').addClass('progress-bar progress-bar-danger');
                $('#progress_bar').css('width', strenght+"%");
                $('#progress_bar_text').html( strenght+"% Week");
                // console.log("weak"+strenght);
            }
            else if (password.length>=12) {
                strenght=50;
                $('#progress_bar').removeClass();
                $('#progress_bar').addClass('progress-bar progress-bar-warning');
                $('#progress_bar').css('width', strenght+"%");
                $('#progress_bar_text').html( strenght+"% Moderate");
                // console.log("medium"+strenght);
                if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)){
                    strenght=100;
                    $('#strength').val(100);
                    $('#progress_bar').removeClass();
                    $('#progress_bar').addClass('progress-bar progress-bar-success');
                    $('#progress_bar').css('width', strenght+"%");
                    $('#progress_bar_text').html( strenght+"% Strong");
                    // console.log("strong"+strenght);
                }
            }
            $('#strength').val(strenght);
        });

        function autoClick(){};
    </script>
@stop