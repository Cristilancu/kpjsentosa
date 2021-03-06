@extends('layouts.login')

@section('content')

<body id="signin-page" class="animated bounceInDown">
<div id="signin-page-content">
    <form action="/reset_password" class="form" method="post" >
    	<div class="text-center"><a href="http://www.webqom.com/web88.html" target="_blank"><img src="/admin_html/images/login/logo_web88.jpg" alt="Web88"></a></div>
        <h1 class="block-heading">Forgot Your Password?</h1>

        <p>A mail has been sent to your email, please check.</p>

        <div class="form-group">
            <input type="hidden" name="email" value="{{$email}}">
      </div>
        

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Resend Mail?
                &nbsp;<i class="fa fa-chevron-circle-right"></i></button>
            <a id="btn-forgot-pwd" href="/login" class="mlm">Return to Login Page</a></div>
        <hr>
        <a href="mailto:hock@webqom.com"><i class="fa fa-envelope"></i> hock@webqom.com</a>
        <a href="http://www.facebook.com/webqomtechnologies" class="pull-right" target="_blank"><i class="fa fa-facebook-square"></i> /webqomtechnologies</a><br/>
        <i class="fa fa-phone"></i>+(603) 2630 5562
        <span class="margin-top-5px text-12px pull-right">&copy; 2016 <a href="http://www.webqom.com" target="_blank">Webqom Technologies Sdn. Bhd.</a></span>
        
    </form>
</div>

@stop