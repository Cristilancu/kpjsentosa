@extends('layouts.admin')

@section('title')
  <title>KPJ Advisor Series :: Listing</title>
  <link type="text/css" rel="stylesheet" href="/admin_html/vendors/jquery-nestable/nestable.css">
@stop


@section('content')
      <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
        
        <div class="page-header-breadcrumb">
          <div class="page-heading hidden-xs">
            <h1 class="page-title">Menu</h1>
          </div>
          
          <!-- InstanceBeginEditable name="EditRegion1" -->
          <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li>Menu &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
            <li class="active">Menu Items - Listing</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Menu Items <i class="fa fa-angle-right"></i> Listing</h2>
              <div class="clearfix"></div>
              @include('common.alerts')
              <div class="clearfix"></div>
              <p></p>
              <div class="clearfix"></div>
            </div>
            <!-- end col-lg-12 -->
            <div class="col-lg-12">
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Menu Items Listing</div>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
                <div class="portlet-body">
                  <div class="text-blue text-15px" style="line-height: 150%">You can drag and drop the categories. To add a new category/sub category, please click the "Duplicate" icon to edit it. Then drag and drop the position according to your preference.
                    <!--Add/upload/edit "Menu Image" is only applicable for the first level of the category, eg. Audio Visual, Home Appliances, etc...-->
                  </div>
                  note to programmer: pls make the menu drag and drop its position.
                  <div class="sm-margin"></div>
                  <div id="nestable" class="dd">
                    <ol class="dd-list">
                      @foreach($menu_items as $menu)
                      <li data-id="{{ $menu->id }}" class="dd-item" style="position: relative;">
                        <div class="dd-handle">{!! str_replace('<br/>', ' ', $menu->category_name) !!} &nbsp;
                          @if($menu->status == 1)
                            <span class="label label-sm label-success">Active</span>
                          @else
                            <span class="label label-sm label-danger">Inactive</span>
                          @endif
                        </div>
                            <div style="position: absolute; right: 0; top:4px;"> <a href="javascript:void" onclick="duplicate({{$menu->id}})" data-hover="tooltip" data-placement="top" title="Duplicate/New Category"><span class="label label-sm label-blue"><i class="fa fa-copy"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-category" data-toggle="modal" title="Edit" data-menuid="{{$menu->id}}" data-menustatus="{{$menu->status}}" data-menucategoryname="{{$menu->category_name}}"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-1" data-toggle="modal" data-menuname="{{ $menu->category_name }}" data-menuid="{{$menu->id}}"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a> <span>&nbsp;</span></div>
                            @if($menu->children->count() > 0)
                              @foreach($menu->children as $child)
                                <ol class="dd-list"><li data-id="{{$child->id}}" class="dd-item" style="position: relative;"><div class="dd-handle">{!! str_replace('<br/>', ' ', $child->category_name) !!} &nbsp;
                                @if($child->status == 1)
                                  <span class="label label-sm label-success">Active</span>
                                @else
                                  <span class="label label-sm label-danger">Inactive</span>
                                @endif
                                </div><div style="position: absolute; right: 0; top:4px;"> <a href="javascript:void" onclick="duplicate({{$child->id}})" data-hover="tooltip" data-placement="top" title="" data-original-title="Duplicate/New Category"><span class="label label-sm label-blue"><i class="fa fa-copy"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-category" data-toggle="modal" title="" data-menuid="{{$child->id}}" data-menustatus="{{$child->status}}" data-menucategoryname="{{str_replace(  '<br/>', "\n", $child->category_name )}}" data-original-title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="" data-target="#modal-delete-1" data-toggle="modal" data-menuid="{{$child->id}}" data-original-title="Delete"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a> <span>&nbsp;</span></div>
                                </li></ol>
                              @endforeach
                            @endif
                      </li>
                      @endforeach
                    </ol>
                  </div>
                  <div class="clearfix"></div>
                  <!--Modal edit category start-->
                  <div id="modal-edit-category" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title">Category Edit</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                            <form class="form-horizontal">
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-6">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    <input type="hidden" name="menu_item_id" id="menu-item-id" value="">
                                    <input id="menu-status" type="checkbox"/>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Category Name <span class='require'>*</span></label>
                                <div class="col-md-6">
                                    <textarea id="menu-category-name" type="text" class="form-control" placeholder="" value="">

                                    </textarea>
                                  <!-- <input id="menu-category-namea" type="text" class="form-control" placeholder="" value=""> -->
                                </div>
                              </div>
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"> <a id="button-save-edit" href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL edit category-->
                  <!--Modal delete selected items start-->
                  <div id="modal-delete-1" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                          <p><b>#1:</b> <span id="delete-name"></span></p>
                          <div class="form-actions">
                            <input type="hidden" name="menu-delete-item-id" id="menu-delete-item-id">
                            <div class="col-md-offset-4 col-md-8"> <a href="#" id="button-delete" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete selected items end -->
                </div>
                <!-- end portlet body -->
              </div>
              <!-- end porlet -->
            </div>
            <!-- end col-lg-12 -->
          </div>
          <!-- end row -->
        </div>
        <!-- InstanceEndEditable -->
        <!--END CONTENT-->

@stop


@section('end_scripts')
<script src="/admin_html/vendors/jquery-nestable/jquery.nestable.js"></script>
<script src="/admin_html/js/ui-nestable-list.js"></script>
<script>
  // $(document).ready(function () {

    $('#modal-edit-category').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) ;
      var menuId = button.data('menuid') ;
      var menuStatus = button.data('menustatus') ;
      var menuCategoryName = button.data('menucategoryname');
      var modal = $(this);
      modal.find('#menu-item-id').val(menuId);
      modal.find('#menu-category-name').val(menuCategoryName);
      if(menuStatus == 1){
        console.log('satu');
        modal.find('.make-switch > div').removeClass('switch-off');
        modal.find('.make-switch > div').addClass('switch-on');
      } else {
        console.log('nol');
        modal.find('.make-switch > div').removeClass('switch-on');
        modal.find('.make-switch > div').addClass('switch-off');
      }
    });

    $('#button-save-edit').on('click', function(event){
      var menu_item_id = $('#menu-item-id').val();
      var menu_category_name = $('#menu-category-name').val();
      var menu_status = $('#menu-status:checked').length;

      /*AJAX call to post changes */
      $.ajax({
          type    : "POST",
          url     : '/admin/category_list_edit_item',
          data    :   {
              menu_item_id: menu_item_id,
              menu_category_name: menu_category_name,
              menu_status: menu_status
          },
          dataType    : 'json',
          complete    :   function(data){
              result = JSON.parse(data.responseText);
              console.log(result);
              if(result.status == 1){
                $('#modal-edit-category').modal('hide');
                window.location.reload();
              }
          }
      });
    });

    $('#modal-delete-1').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) ;
      var menuId = button.data('menuid') ;
      var menuname = button.data('menuname')
      var name = menuname.replace('<br/>','');
      $('#delete-name').html(name)
      var modal = $(this);
      modal.find('#menu-delete-item-id').val(menuId);
    });

    $('#button-delete').on('click', function(event){
      var menu_item_id = $('#menu-delete-item-id').val();

      /*AJAX call to post changes */
      $.ajax({
          type    : "POST",
          url     : '/admin/category_list_delete_item',
          data    :   {
            _method: 'DELETE',
            menu_item_id: menu_item_id
          },
          dataType    : 'json',
          complete    :   function(data){
              // console.log(data.responseText);
              result = JSON.parse(data.responseText);
              console.log(result);
              if(result.status == 1){
                $('#modal-delete-1').modal('hide');
                window.location.reload();
              }
          }
      });
    });

    function duplicate(id) {
      $.ajax({
        url: '/admin/category_list_duplicate_item',
        type: 'POST',
        data: {'_token': '{{csrf_token()}}', 'menu_item_id':id},
      }).done(function() {
        location.reload();
      }).fail(function() {
        console.log("error");
      }).always(function() {
        console.log("complete");
      });
    } 
  // });
</script>

<script type="text/javascript">
    $('.lem').removeClass('active')
    $('.lem_navbar').addClass('active')
</script>
@stop