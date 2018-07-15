   <div class="height40"></div>
				
				
				<!-- Screening packages start
                ============================================= -->
                <section class="meet-the-doctors no-bg-img team-carousel">
                  <div class="container">
                    <h2 class="light bordered">Screening &amp; <span>Packages</span></h2>
                    <div id="team-carousel" class="owl-carousel wrapper-padding-none">


        @foreach(Helper::getScreeningpackages() as $pack)
                      <div class="team-member">
                      <div class="team-thumb"> <img src="{{$pack->image}}" class="img-rounded" alt="{{$pack->alt}}">
                            <div class="links"> 
                        @if($pack->image_large)
                          <a href="{{$pack->image_large}}">
                      @elseif($pack->pdf)
                          <a href="{{$pack->pdf}}">                 
                      @elseif($pack->website)                      
                      <a href="{{Helper::fix_link($pack->website)}}">
                      @else
                          <a href="/screening_packages/{{$pack->id}}">
                      @endif <i class="fa fa-link"></i></a>

                  </div>
                        </div>
                        <h5><a href="/screening_packages/{{$pack->id}}">{{$pack->title}}</a></h5>
                        <p>{{$pack->description}} </p>
                          @if($pack->sale_price != null)
                        <div class="price-rating">
                          <p class="price"><b>RM {{$pack->sale_price}}</b><del>RM {{$pack->cost_price}}</del></p>
                        </div>
                          @endif
                        <div class="clearfix"></div>
                        <a href="/screening_packages/{{$pack->id}}">- VIEW DETAILS</a> </div>
        @endforeach
                  </div>
                </section>
		</div>
