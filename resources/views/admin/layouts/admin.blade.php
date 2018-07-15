<!DOCTYPE html>
<html lang="en">
<head>

@yield('title')


<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/admin_html/images/icons/favicon.ico" rel="shortcut icon">
      <link rel="stylesheet" type="text/css" href="/admin_html/vendors/datatables/css/dataTables.bootstrap.css">

    <!--Loading bootstrap css-->
    <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,400italic,700,700italic,300italic' rel='stylesheet' type='text/css'>

<link type="text/css" rel="stylesheet" href="/admin_html/vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css">
<link type="text/css" rel="stylesheet" href="/admin_html/vendors/font-awesome/css/font-awesome.min.css">

<link type="text/css" rel="stylesheet" href="/admin_html/vendors/bootstrap/css/bootstrap.min.css">

    <!--LOADING SCRIPTS FOR PAGE-->
<link type="text/css" rel="stylesheet" href="/admin_html/vendors/bootstrap-datepicker/css/datepicker.css">
<link type="text/css" rel="stylesheet" href="/admin_html/vendors/bootstrap-switch/css/bootstrap-switch.css">

    <!--Loading style vendors-->
<link type="text/css" rel="stylesheet" href="/admin_html/vendors/animate.css/animate.css">
<link type="text/css" rel="stylesheet" href="/admin_html/vendors/jquery-pace/pace.css">

    <!--Loading style-->
<link type="text/css" rel="stylesheet" href="/admin_html/css/style.css">
<link type="text/css" rel="stylesheet" href="/admin_html/css/style-mango.css" id="theme-style">
<link type="text/css" rel="stylesheet" href="/admin_html/css/vendors.css">
<link type="text/css" rel="stylesheet" href="/admin_html/css/themes/grey.css" id="color-style">

 	<!-- kym front end style -->
<link type="text/css" rel="stylesheet" href="/admin_html/css/style_kym_front.css">
<link type="text/css" rel="stylesheet" href="/admin_html/css/skeleton_kym_front.css">

     <link type="text/css" rel="stylesheet" href="/admin_html/css/blue_kpj_front.css">
  <link type="text/css" rel="stylesheet" href="/admin_html/css/medicom_kpj_front.css">


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<div>
<!--BEGIN TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP-->



  <div id="wrapper"><!--BEGIN TOPBAR-->
        <nav id="topbar" role="navigation" style="margin-bottom: 0;" class="navbar navbar-default navbar-static-top">
          <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a id="logo" href="http://www.webqom.com/web88.html" target="_blank" class="navbar-brand"><img src="/admin_html/images/logo_web88.png"></a>          </div>

            	<div class="topbar-main">
                	<a id="logo" href="http://kpjsentosa.com/" class="navbar-brand" target="_blank"><img src="/admin_html/images/logo.jpg"></a>
                    <a id="menu-toggle" href="#" class="btn hidden-xs"><i class="fa fa-bars"></i></a>

                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control"/></div>
                </form>
                <ul class="nav navbar-top-links navbar-right">

                    <li class="dropdown"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><img src="{{Auth::user()->image?Auth::user()->image:'/admin_html/images/profile/image_hock.jpg'}}" alt="" class="img-responsive img-circle"/>&nbsp;
                        Support Webqom
                        &nbsp;<span class="caret"></span></a>
<ul class="dropdown-menu dropdown-user pull-right animated bounceInLeft">
                            <li>
                                <div class="navbar-content">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="{{Auth::user()->image?Auth::user()->image:'/admin_html/images/profile/image_hock.jpg'}}" alt="" class="img-responsive img-circle"/>

                                            <p class="text-center mtm">
                                            	<a href="#" data-target="#modal-change-avatar" data-toggle="modal" class="change-avatar">
                                                <small>Change Avatar</small>                                                </a></p>
                                      </div>
                                        <div class="col-md-7 col-xs-5"><span>Support Webqom</span>

                                            <p class="text-muted small">support@webqom.com</p>

                                            <div class="divider"></div>
                                            <!--<a href="#" class="btn btn-primary btn-sm">View Profile</a>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-footer">
                                    <div class="navbar-footer-content">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6"><a href="#" class="btn btn-default btn-sm" data-target="#modal-change-password" data-toggle="modal">Change Password</a></div>
                                            <div class="col-md-6 col-xs-6"><a href="/logout" class="btn btn-default btn-sm pull-right">Sign Out</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                      </ul>
                  </li>
                </ul>
          </div>
</nav>
        <!--Modal Change Avatar start-->
         <!--Modal Change Avatar start-->
                            <div id="modal-change-avatar" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label2" class="modal-title">Change Avatar</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
                                      <form class="form-horizontal" action="/admin/change_avatar" enctype="multipart/form-data" method="post">

                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload Avatar Image </label>
                                          <div class="col-md-8">
                                            <div class="text-15px margin-top-10px">
                                              <img src="{{Auth::user()->image?Auth::user()->image:'/admin_html/images/profile/image_hock.jpg'}}" alt="Avatar" class="img-responsive"><br/>
                                                <input id="exampleInputFile1" type="file" name="image" />
                                              <br/>
                                                <span class="help-block">(Image dimension: 100 x 100 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                          </div>
                                        </div>

                                        <div class="form-actions">
                                          <div class="col-md-offset-4 col-md-8"> <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!--END MODAL Change Avatar-->

        <!--Modal Change Password start-->
                <div id="modal-change-password" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-login-label" class="modal-title"><a href="#"><i class="fa fa-exclamation-triangle"></i></a> Change Password</h4></div>
                            <div class="modal-body">
                                <div class="form">
                                    <form class="form-horizontal" action="/admin/change_password" method="post">

                                        <div class="form-group">
                                          <label for="password" class="control-label col-md-4">New Password</label>

                                            <div class="col-md-8">
                                              <div class="input-icon"><i class="fa fa-key"></i> <input id="password" type="password" placeholder="New Password" class="form-control" name="password" /><span class="text-10px">(Password length should be between 6-12 characters)</span>                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                          <label for="password" class="control-label col-md-4">Confirm New Password</label>

                                            <div class="col-md-8">
                                              <div class="input-icon"><i class="fa fa-key"></i> <input id="password" type="password" placeholder="Confirm New Password" class="form-control" name="old_password" /><span class="text-10px">(Password length should be between 6-12 characters)</span>                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="col-md-offset-4 col-md-8">
                                               <button class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;
                                              <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a>                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!--END MODAL CHANGE PASSWORD-->
        <!--END TOPBAR-->

        <!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
          <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li class="clock"><strong id="get-date"></strong>

                        <div class="digital-clock">
                            <div id="getHours" class="get-time"></div>
                            <span>:</span>

                            <div id="getMinutes" class="get-time"></div>
                            <span>:</span>

                            <div id="getSeconds" class="get-time"></div>
                        </div>
                    </li>
                  <li class="sidebar-heading"><h4>Main Menu</h4></li>
                  <li class="active lem lem_dashboard"><a href="/admin/dashboard"><i class="fa fa-laptop fa-fw"></i><span class="menu-title">Dashboard</span></a></li>

                  <li class="sidebar-heading"><h4>Contacts</h4></li>
                  <li class="lem lem_contact"><a href="/admin/feedback_list"><i class="fa fa-coffee fa-fw"></i><span class="menu-title">Feedback Listing</span></a></li>

                  <li class="sidebar-heading"><h4>Promotions</h4></li>
                  <li class="lem lem_screening"><a href="/admin/screening_packages_list/"><i class="fa fa-viadeo-square fa-fw"></i><span class="menu-title">Screening &amp; Packages</span></a> </li>
				  <li class="lem lem_promotion"><a href="/admin/promotion_packages_list/"><i class="fa fa-qrcode fa-fw"></i><span class="menu-title">Promotion Packages</span></a></li>
                  	<li class="lem lem_newsletter"><a href="/admin/newsletter"><i class="fa fa-envelope fa-fw"></i><span class="menu-title">Newsletter Subscription</span></a> </li>

                    <li class="sidebar-heading"><h4>News &amp; Events</h4></li>
                    <li class="lem lem_latest"><a href="/admin/latest_news"><i class="fa fa-newspaper-o fa-fw"></i><span class="menu-title">Latest News</span></a></li>
                    <li class="lem lem_events"><a href="/admin/latest_events_list"><i class="fa fa-calendar fa-fw"></i><span class="menu-title">Events</span></a> </li>
                  	<li class="lem lem_health"><a href="/admin/health_calendar_list"><i class="fa fa-calendar-plus-o fa-fw"></i><span class="menu-title">Health Calendar</span></a> </li>

                  <li class="sidebar-heading"><h4>Banners</h4></li>
                    <li class="lem lem_banners"><a href="/admin/index_banner_list"><i class="fa fa-check-circle fa-fw"></i><span class="menu-title">Index Banners</span></a></li>

                  <li class="sidebar-heading"><h4>CMS Pages</h4></li>

                  <li class="lem lem_index"><a href="/admin/index_page"><i class="fa fa-check-circle fa-fw"></i><span class="menu-title">Index Page</span></a></li>
                  <li class="lem lem_vacancy lem_online"><a href="#"><i class="fa fa-briefcase fa-fw"></i><span class="menu-title">Careers</span><span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">

                        <li class="lem lem_vacancy"><a href="/admin/careers">Vacancies Listing</a></li>
                        <li class="lem lem_online"><a href="/admin/applications">Online Applicants Listing</a></li>
                      </ul>
                  </li>
                  <li class="lem lem_services"><a href="/admin/services_procedures"><i class="fa fa-stethoscope fa-fw"></i><span class="menu-title">Services &amp; Procedures</span></a></li>
                  <li class="lem lem_kpj"><a href="/admin/kpj_advisor_series_list"><i class="fa fa-h-square fa-fw"></i><span class="menu-title">KPJ Advisor Series</span></a></li>

              </ul>
          </div>
    </nav>
@yield('content')

    <div class="modal fade preview_show ">
                    <div class=" modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Preview</h4>
                        </div>
                        <div class="modal-body">
                          <div class="">
                             @for($i=1; $i<=5; $i++)
                            <div class="line{{$i}}">
                            </div>
                            @endfor
                           <form id='submit_preview' action="/admin/save_preview" method="post" class="form-horizontal">

                          <input type="hidden" name="model" id='preview_model'>
                  @for($i=1; $i<=5; $i++)
                            <input type="hidden" name="line{{$i}}" class="hidden{{$i}}" id='thg{{$i}}'>
                          @endfor


                          </form>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>






        <!--BEGIN FOOTER-->
<div class="page-footer">
                <div class="copyright"><span class="text-15px">2016 © <a href="http://www.webqom.com" target="_blank">Webqom Technologies Sdn Bhd.</a> Any queries, please contact <a href="mailto:support@webqom.com">Webqom Support</a>.</span>
                	<div class="pull-right"><img src="/admin_html/images/logo_webqom.png" alt="Webqom Technologies"></div>
                </div>
        </div>
    <!--END FOOTER--></div>
  <!--END PAGE WRAPPER--></div>
</div>
<script src="/admin_html/js/jquery-1.9.1.js"></script>
<script src="/admin_html/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/admin_html/js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="/admin_html/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="/admin_html/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="/admin_html/js/html5shiv.js"></script>
<script src="/admin_html/js/respond.min.js"></script>
<script src="/admin_html/vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="/admin_html/vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="/admin_html/vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="/admin_html/js/jquery.menu.js"></script>
<script src="/admin_html/vendors/jquery-pace/pace.min.js"></script>

<!--LOADING SCRIPTS FOR PAGE-->
<script src="/admin_html/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="/admin_html/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/admin_html/vendors/moment/moment.js"></script>
<script src="/admin_html/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="/admin_html/vendors/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="/admin_html/vendors/bootstrap-clockface/js/clockface.js"></script>
<script src="/admin_html/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="/admin_html/vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="/admin_html/vendors/jquery-maskedinput/jquery-maskedinput.js"></script>
<script src="/admin_html/js/form-components.js"></script>
<!--LOADING SCRIPTS FOR PAGE-->

<script src="/admin_html/vendors/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="/admin_html/vendors/ckeditor/ckeditor.js"></script>
<script src="/admin_html/js/ui-tabs-accordions-navs.js"></script>



<!--CORE JAVASCRIPT-->
<script src="/admin_html/js/main.js"></script>
<script src="/admin_html/js/holder.js"></script>
<script type="text/javascript" src="/admin_html/vendors/datatables/js/jquery.dataTables.js"></script>
<script type="text/javascript" src='/admin_html/vendors/datatables/js/dataTables.bootstrap.js'></script>

</body>
</html>


<script type="text/javascript">
    function getContent(from,to){

        document.getElementById(to).value = document.getElementById(from).innerHTML;

    }


</script>
<script type="text/javascript">
  $('table').dataTable();

  $('table.table-striped').dataTable({
    "order": [[1, "asc"]]
  });

</script>

<script type="text/javascript">
  var array_del = [];

    Array.prototype.remove = function() {
        var what, a = arguments, L = a.length, ax;
        while (L && this.length) {
          what = a[--L];
          while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
          }
        }
        return this;
      };


    $('.del').click(function(){
        var val = $(this).attr('val');
        if(array_del.indexOf(val)!=-1){
            array_del.remove(val);
        }else{
           array_del.push(val);
        }

    })

    $('.del_all').click(function(){
       array_del = [];
        if($(this).is(":checked")){
            $('.del').each(function(i, obj) {
                 var val = $(this).attr('val');
                  $(this).prop('checked', true);
                  //else{
                     array_del.push(val);
                 // }
              });
        }else{
           array_del = [];
            $('.del').each(function(i, obj) {
              $(this).prop('checked', false);
            })
        }

      });

     $('.all_del').click(function(){
       var model = $(this).attr('val');
       console.log(array_del)
         $.ajax({
            url:'/admin/action_delete_selected',
            data:{
              model:model,
              ids:array_del
            },
            success:function(){
              window.location = '/admin/reload';;
            }
        })
    })
</script>

<script type="text/javascript">
    $('.preview_line').click(function(){

        for(i=1; i<=5; i++){
            $('.line'+i).html($('#line'+i).html());
        }

        $('.preview_show').modal();
    })

    $('.save_line').click(function(){
        for(i=1; i<=5; i++){
           // $('.hidden'+i).val($('#line'+i).html());
           if($('#line'+i).length){
              getContent('line1', 'thg1');
           }
        }
      //  $('#preview_model').val($(this).attr('type'));

      var model = $(this).attr('type');


      var data = $('#submit_preview').serializeArray();
window.number =0;
    for(z=1; z<=5; z++){
      $.ajax({
          url:'/admin/save_preview/line'+z+'/save',
          data:{
            model:model,
            data:$('#line'+z).html(),
          },
          type:'post',
          success:function(){
            console.log(z)
            window.number++;
            if(window.number>2){
              //alert('Save');
                reload();
            }
          }
      })
    }




    })

    function reload(){
                  window.location= '/admin/reload';;

    }

    $(document).on("shown.bs.modal",function () {
      //  window.CKEDITOR.dom = false;
       // window.CKEDITOR = window.CKEDITOR;
       // CKEDITOR.inline('.modal')
         $('.datepicker-default').datepicker();
            $(this).find("*[contenteditable='false']").each(function () {
        var name;
        for (name in CKEDITOR.instances) {
            var instance = CKEDITOR.instances[name];
            if (this && this == instance.element.$) {
                instance.destroy(true);
            }
        }
        $(this).attr('contenteditable', true);
        CKEDITOR.inline(this);
         })

        $('.datepicker-default').on('focus').datepicker();


    });



    $('.dropdown-menu li a ').click(function(){

       if(array_del.length<1){
           var tp = $('.all_del').attr('val');
           var four_txt='';
           if($('.all_del').attr('take_four')=='yes'){
               var four_txt='yes';
            }
          $('.all_del').parents('.form-actions').html("<div class='col-md-12'><div class='alert alert-danger'> Please select at least one item for delete.</div><span class='all_del' val='"+tp+"' take_four='"+four_txt+"'></span></div>");
       }
       else{
         var tp = $('.all_del').attr('val');
         var text ='';

         $.each(array_del, function(key, val){
            var txt = $('.del[val='+val+']').closest('tr').children( "td:nth-child(4)").html();
            var cnt = $('.del[val='+val+']').closest('tr').children( "td:nth-child(2)").html();
            var fifth ='';
            if($('.all_del').attr('take_four')=='yes'){
               var fifth = ' - '+$('.del[val='+val+']').closest('tr').children( "td:nth-child(5)").html();
            }

            text = text + "<p><strong> #"+cnt+":</strong> "+txt+fifth+"</p> "

            console.log(text);

         })

           var fifth ='';
            if($('.all_del').attr('take_four')=='yes'){
               var fifth = 'yes';
                 }



         $('.all_del').parents('.form-actions').html(text+'<div class="col-md-offset-4 col-md-8"><a href="javascript:void(0)" class="btn btn-red all_del" val="'+tp+'" take_four="'+fifth+'">Yes &nbsp;<i class="fa fa-check"></i></a> &nbsp;<a href="javascript:void(0)" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a></div>');

          $('.all_del').click(function(){
               var model = $(this).attr('val');
               console.log(array_del)
                 $.ajax({
                    url:'/admin/action_delete_selected',
                    data:{
                      model:model,
                      ids:array_del
                    },
                    success:function(){
                      window.location = '/admin/reload';;
                    }
                })
            })
       }
    })

</script>


<script type="text/javascript">
    //delete pictures

    $('.del_item').click(function(){
          var type = $(this).attr('type');
          var model = $(this).attr('model');
          var input = $(this).attr('input');
          var hide_div=$(this).attr('hide_div');
          var model_id = $(this).attr('model_id');



          $.ajax({
              url:'/admin/action_delete_file/'+model+'/'+model_id+'/'+type,
              success:function(){
                 // console.log($(this).closest('modal'));
                  $(this).closest('.modal').modal('hide');
                  $('#'+input).prop('required', true);
                  $('.'+hide_div).hide();
              }
          })

    })
</script>


@yield('end_scripts')