@extends('layouts.login')

@section('title')
    <title>Login</title>
  @stop

@section('content')

<body id="signin-page" class="animated bounceInDown">
<div id="signin-page-content">
    <form action="/reset_link" class="form" method="post">
    	<div class="text-center"><a href="http://www.webqom.com/web88.html" target="_blank"><img src="/admin_html/images/login/logo_web88.jpg" alt="Web88"></a></div>
        <h1 class="block-heading">Web88 CMS Admin Login</h1>

        <p>Please enter your new password.</p>

        @if(Session::has('error'))
            <p class="alert alert-danger"> {{Session::get('error')}} </p>
        @endif

        <div class="form-group">
            <div class="input-icon"><i class="fa fa-key"></i><input type="password" placeholder="Password" name="password" class="form-control"></div>
      </div>
        <div class="form-group">
            <div class="input-icon"><i class="fa fa-key"></i><input type="password" placeholder="Confirm Password" name="cpassword" class="form-control"></div>
      </div>
      <input type="hidden" name="link" value="{{$user->formated_time}}">
          <button type="submit" class="btn btn-primary">Reset Password
                &nbsp;<i class="fa fa-chevron-circle-right"></i></button>
       
       
        <hr>
        <a href="mailto:hock@webqom.com"><i class="fa fa-envelope"></i> hock@webqom.com</a>
        <a href="http://www.facebook.com/webqomtechnologies" class="pull-right" target="_blank"><i class="fa fa-facebook-square"></i> /webqomtechnologies</a><br/>
        <i class="fa fa-phone"></i>+(603) 2630 5562
        <span class="margin-top-5px text-12px pull-right">&copy; 2016 <a href="http://www.webqom.com" target="_blank">Webqom Technologies Sdn. Bhd.</a></span>

        <input type='hidden' name='_token' value='{{csrf_token()}}'>
        
    </form>
</div>

@stop