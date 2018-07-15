<div id="modal-delete-{{$patient->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this information? </h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin/for_patients_details_delete', $patient->id) }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <p><strong>#{{$patient->id}}:</strong> {{ $patient->title }}</p>
                    <div class="form-actions">
                        <div class="col-md-offset-4 col-md-8">
                            <button type="submit" class="btn btn-red">Yes <i class="fa fa-check"></i></button>&nbsp;
                            <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>