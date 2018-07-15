@extends('layouts.front')

@section('title')
    <title>{{$cat->title}}</title>
  @stop

@section('content') 


		  <!-- InstanceBeginEditable name="EditRegion1" -->
          <section class="sub-page-banner7 text-center" data-stellar-background-ratio="0.3">
            <div class="overlay"></div>
              <div class="container">
               @if($setting = Helper::hasSetting('category'))
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
                  <h2 class="light bordered">{{$cat->title}}</h2>
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
                      <h5><span>All {{$cat->title}} Topics</span></h5>
                     
                        <ul class="list-unstyled medicom-feature-list">
                        @foreach($cat->listings()->where('status', 1)->get() as $kpj)
                         <div class="col-md-6">
                          <li><i class="fa fa-check medicom-check"></i>
                      @if($kpj->pdf)
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
                     
                     </ul>
                     </div>
                    
                    
                    
                    
                  </div>
                  <!-- end row -->
                </div>
                <!-- end container -->

              </section>

      <div class="height40"></div>
      

@stop