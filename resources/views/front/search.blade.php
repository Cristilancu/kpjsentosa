@extends('layouts.front')


@section('title')
    <title>Search</title>
  @stop

@section('content')

<!-- Sub Page Banner
			============================================= -->
		  <!-- InstanceBeginEditable name="EditRegion1" -->
          <section class="sub-page-banner1 text-center" data-stellar-background-ratio="0.3">
            <div class="overlay"></div>
              <div class="container">
                <h1 class="entry-title">Search</h1>
                <!--<p>Staff is eagerly awaiting to serve our patients and visitors with warm welcome and glowing smile.</p>-->
              </div>
            </section>
          <!-- InstanceEndEditable -->
    <!-- Sub Page Content
			============================================= -->
    <!-- InstanceBeginEditable name="EditRegion2" -->
    <div id="sub-page-content" class="no-padding-bottom clearfix">
      <!-- about us Start
				============================================= -->
      <div class="container">
        <h2 class="light bordered main-title">Search Results - <span>{{$request->search}}</span></h2>
        <div class="row">
       
          <div class="col-md-12">
                     
                      <div class="col-md-6">
                        <ul class="list-unstyled medicom-feature-list">
                        @foreach($search as $kpj)
                          <li><i class="fa fa-check medicom-check"></i>
                              @if($kpj->pdf)
                          <a href="{{$kpj->pdf}}">
                      @elseif($kpj->website)                      
                          <a href="{{Helper::fix_link($kpj->website)}}">
                      @else
                          <a href="/articles/{{$kpj->id}}">
                      @endif {!! $kpj->title !!}</a></li>
                        @endforeach
                      </div><!-- end col-md-6-->
                                            
                      
                    </div>
          <!-- end col-md-12 -->
        </div>


        <!-- end row -->
      </div>


                @include('common.health_info')
      <!-- end container -->

    <!-- InstanceEndEditable -->
    <!--end sub-page-content-->
    
    
	<div class="solid-row"></div>

@stop