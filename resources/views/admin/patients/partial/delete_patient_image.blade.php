<div id="modal-delete-icon" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this icon image? </h4>
                </div>
                <div class="modal-body">
                    <p><img src="../images/Patients&VisitorLists/{{$patient->image_path}}" alt="Room Rates" class="img-responsive bg-default"></p>
                    <div class="form-actions">
                    <form action="{{url('for_patients_delete_image',$patient->id) }}" method="post">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">                                          
                        <div class="col-md-offset-4 col-md-8">
                            <button type="submit"class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp;
                             <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;
                                 <i class="fa fa-times-circle"></i>
                                </a> 
                        </div>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>




    <div id="modal-delete-icon" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                        <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this icon image? </h4>
                    </div>
                    <div class="modal-body">
                        <p><img src="../images/patients_visitors/icon_room_rates.png" alt="Room Rates" class="img-responsive bg-default"></p>
                        <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>