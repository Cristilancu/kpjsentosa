        @if(Session::has('message'))
 <div class="alert alert-success alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>{{Session::get('message')}}</p>
              </div>

           
          @endif
       @if(Session::has('error'))
              <div class="alert alert-danger alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-times-circle"></i> <strong>Error!</strong>
                <p>{{Session::get('error')}}</p>
              </div>

             
        @endif
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

    <div class="pull-left last_update_common"> Last updated: <span class="text-blue">{{Helper::hasSetting('last_date')?Helper::hasSetting('last_date')->line1:date('d M, Y @ h:i a')}}</span> </div>


