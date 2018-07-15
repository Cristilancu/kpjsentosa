	
                <div class="height40"></div>
                
    <!-- Screening packages start
                ============================================= -->
                <section class="meet-the-doctors no-bg-img team-carousel">
                    
                    <div class="container">
                    
                        <h2 class="light bordered">Offer <span>Packages</span></h2>
                        
                        <div id="team-carousel" class="owl-carousel wrapper-padding-none">
                            
                @foreach(Helper::getPromotionpackages() as $pack)
                            <div class="team-member">
                                <div class="team-thumb">
                                    <img src="{{$pack->image}}" class="img-rounded" alt="{{$pack->alt}}">
                                    <div class="links">
                       @if($pack->image_large)
                          <a href="{{$pack->image_large}}">
                      @elseif($pack->pdf)
                          <a href="{{$pack->pdf}}">                 
                      @elseif($pack->website)                      
                      <a href="{{Helper::fix_link($pack->website)}}">
                      @else
                          <a href="/promotion_packages/{{$pack->id}}">
                      @endif <i class="fa fa-link"></i></a>

                                       
                                     </div>
                                </div>
                                <h5><a href="/promotion_packages/{{$pack->id}}">{{$pack->title}}</a></h5>
                              	<p>{{$pack->description}}</p>
                                <a href="/promotion_packages/{{$pack->id}}">- VIEW DETAILS</a>
                            </div>
                @endforeach
                            
                            
                            
                            
                            
                            
                      </div>
        
                    </div>
                    
                </section>
				
				