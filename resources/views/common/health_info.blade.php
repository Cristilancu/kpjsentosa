            <div class="height40"></div>
              
                <?php $setting = Helper::hasSetting('parallax_image');?>
              <!-- Find Health Information
                ============================================= -->
                @if($setting && $setting->status)
                <section class="medicom-app" data-stellar-background-ratio="0.3" @if(isset($setting->details) &&$setting->status )  style=" background: url('{{$setting->details}}') repeat center top " @endif >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                            <?php $setting = Helper::hasSetting('parallax_content');?>
                                <img src="{{($setting &&$setting->status) ?$setting->details:'/images/mobile-hand.png'}}" class="app-img" alt="" title="{{$setting?$setting->line1:''}}">                    
                            </div>
                            <div class="col-md-7">
                                <div class="medicom-app-content">
                         <?php $setting = Helper::hasSetting('parallax_text');?>
                                    <h1>{{($setting&&$setting->status )?$setting->line1:'Find Health Information'}}</h1>
                                    <p class="lead">{{($setting&&$setting->status )?$setting->line2:'All Topics by Letters'}}</p>
                                    <form name="appoint_form" id="appoint_form" method="get" action="/search" onSubmit="">
                                    <input type="text" name='filter' placeholder="Search Topics">
                                    <input type="submit" value="Search" class="btn btn-danger btn-rounded" onClick="validateAppoint();">
                                    <div class="clearfix"></div>
                                    <div class="height20"></div>
                                    <?php $letters = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','0','P','Q','R','S','T','U','V','W','X','Y','Z'];
                                    ?>

                                    @foreach($letters as $key=>$value)
                                        <a href="/search?search={{$value}}" class="btn btn-rounded btn-default btn-sm">{{$value}}</a>

                                        @if($key==12)
                                         <div class="height10"></div>
                                        @endif
                                    @endforeach
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endif


              
  			  	
			
		  </div>