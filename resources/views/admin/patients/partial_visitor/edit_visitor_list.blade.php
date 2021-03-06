<div id="modal-edit-visitor-{{$visitor->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
    <div class="modal-dialog modal-wide-width">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                <h4 id="modal-login-label3" class="modal-title">For Visitors - Edit</h4>
            </div>
            <div class="modal-body">
                <div class="form">
                    <form class="form-horizontal" action="{{ url('/admin/for_visitors_edit', $visitor->id) }}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Status</label>
                            <div class="col-md-9">
                                <div data-on="success" data-off="primary" class="make-switch">
                                        <input type="hidden" name="status" value="0">   
                                        <input type="checkbox" name="status" 
                                            @if($visitor->status == 1)
                                              checked="checked"                                   
                                            @endif
                                            value="1"
                                        />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="title" class="form-control" placeholder="eg. Room Rates" value="{{ $visitor->title }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Short Description <span class='require'>*</span></label>
                            <div class="col-md-9">
                                <textarea name="short_desc" rows="2" class="form-control" id="inputContent" 
                                placeholder="eg. Our facilities and services at KPJ Sentosa KL Specialist Hospital are among the best and most modern to serve your needs more effectively.">{{$visitor->short_desc}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Upload Icon Image <span class="require">*</span></label>
                            <div class="col-md-9">
                                <div class="xs-margin"></div>
                                <img src="../images/Patients&VisitorLists/{{$visitor->image_path}}" alt="Room Rates" class="img-responsive bg-default"><br/>
                                <!--<a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-icon" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>-->
                                <!--Modal delete icon start-->
                               

                                <!-- modal delete end -->

                                <div class="xs-margin"></div>

                                <input id="exampleInputFile2" type="file" name="image_path"/>
                                <input type="hidden" name="image_path_status" value="{{ $visitor->image_path }}">
                                <span class="help-block">(Image dimension: 48 x 48 pixels, PNG only, Max. 1MB) </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Icon Image Alt Text</label>
                            <div class="col-md-9">
                                <input type="text" name="image_alt" class="form-control" placeholder="eg. Room Rates" value="{{$visitor->image_alt}}">
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8">
                                    <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>    &nbsp; 
                                 <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;
                                     <i class="glyphicon glyphicon-ban-circle"></i></a> 
                                    </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>