<div id="modal-delete-selected-patient" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
            </div>
            <div class="modal-body">
                <div id="patient_selected"></div>
                
                <div class="form-actions">
                    <div class="col-md-offset-4 col-md-8">
                        <button class="btn btn-red delete_all" data-url="{{ url('/admin/for_patients_delete_selected') }}">Yes &nbsp;<i class="fa fa-check"></i></button>
                         &nbsp;
                          <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                </div>
            </div>
        </div>
    </div>
</div>

