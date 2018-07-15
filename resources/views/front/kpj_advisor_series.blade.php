@extends('layouts.front')



@section('title')
<title>KPJ Advisor series</title>
@stop

@section('content')
<!-- Sub Page Banner
============================================= -->
<!-- InstanceBeginEditable name="EditRegion1" -->
<section class="sub-page-banner9 text-center" data-stellar-background-ratio="0.3">
  <div class="overlay"></div>
  <div class="container">    @if($setting = Helper::hasSetting('category'))
    {!!$setting->line1!!}
    @else
    <h1 class="entry-title">KPJ Advisor Series</h1>
    @endif
    <!--<p>Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile.</p>-->
  </div>
</section>
<!-- InstanceEndEditable -->
<!-- Sub Page Content
============================================= -->
<!-- InstanceBeginEditable name="EditRegion2" -->

<div id="sub-page-content" class="no-padding-bottom clearfix">


  <!-- find health information Start
  ============================================= -->
  <section class="no-bg-img clearfix">
    <div class="container">
      @if($setting = Helper::hasSetting('category'))
      {!!$setting->line2!!}
      @else
      <h2 class="light bordered">Find <span>Health Information</span></h2>
      @endif
      <div class="row">
        <div class="col-md-12">
          <h5><span>Filter Topics by Letters</span></h5>

          <?php $letters = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
                                    ?>

          @foreach($letters as $key=>$value)

          <a href="/search?search={{$value}}" class="btn btn-rounded btn-danger btn-sm">{{$value}}</a>
          @endforeach
          <div class="height20"></div>

        </div><!-- end col-md-12 -->
        <hr>

        <div class="col-md-12">
          <h5><span>All Health Topics</span></h5>

          <?php $listin =  Helper::getListings(true);?>
          <ul class="list-unstyled medicom-feature-list">
            @foreach($listin as $kpj)
            <div class="col-md-6 ">
              <li><i class="fa fa-check medicom-check"></i><a href="/articles/{{$kpj->id}}">@if($kpj->pdf)
                <a href="{{$kpj->pdf}}">
                  @elseif($kpj->website)
                  <a href="{{Helper::fix_link($kpj->website)}}">
                    @else
                    <a href="/articles/{{$kpj->id}}">
                      @endif {{$kpj->title}}</a></li>
                    </div>
                    @endforeach
                  </div><!-- end col-md-6-->


                </div><!-- end col-md-12 -->
                <div class="clearfix"></div>
                <hr>

                <div class="text-center">
                  <ul class="pagination pagination-sm">
                    {!!$listin->render()!!}
                  </ul>
                </div>




              </div>
              <!-- end row -->
            </div>
            <!-- end container -->

          </section>

          <div class="height40"></div>
          <?php $setting = Helper::hasSetting('kpj_background');?>
          <!-- KPJ Advisor Series start
          ============================================= -->
          <section class="about-sec text-center" data-stellar-background-ratio="0.3" @if(isset($setting->details) &&$setting->status )  style=" background: url('{{$setting->details}}') repeat center top " @endif >

            <div class="container">
              <?php $setting = Helper::hasSetting('kpj_background_text'); ?>
              <h1>{{($setting && $setting->status)?$setting->line2:''}}</h1>
              <p class="lead">{{($setting && $setting->status)?$setting->line3:''}}</p>

              <div class="row text-center">

                @foreach(Helper::getCategories() as $cat)

                <div class="col-md-4 col-xs-6">
                  <div class="counter">
                    <span class="quantity-counter3 highlight"><img src="{{$cat->image}}"></span>
                    <a href="/kpj_advisor_series/{{$cat->id}}"><h6 class="counter-details">{{$cat->title}}</h6></a>
                  </div>
                </div>
                @endforeach

              </div>

            </div>

          </section>


        </div>
        <!-- InstanceEndEditable -->
        <!--end sub-page-content-->


        <div class="solid-row"></div>

        @stop
