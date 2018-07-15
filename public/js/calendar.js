$(document).ready(function(e){


	$('#calen').on('click','#modal-booked-patients',function(){
		
        date=$(this).attr( "name" )
        docid=$(this).attr( "class" )

        //alert(date+'-'+docid)
        
        data={
	      docid:docid,
	      date:date

		}

                    jQuery.ajax({
				          url: 'mes/calendar/modal',
				          data:data,
				          success: function(data){
				              $('#modaldates').html(data);
				              //alert('success')
				              $('#modal-booked-patients').modal()
				        }
				    });
	

    })

    $('#calen').on('click','.modal-edit-schedule',function(){
		
        docid=$(this).attr( "name" )
        date=$(this).attr( "id" )

        //alert(docid)
        
        data={
	      docid:docid,
	      date:date

		}

                    jQuery.ajax({
				          url: 'edit/calendar/modal',
				          data:data,
				          success: function(data){
				              $('#modaledit').html(data);
				              //alert('success')
				              $('#modal-edit-schedule').modal()
				        }
				    });
	

    })

	$('#calen').on('click','#next',function(){

	var mesactual = $(this).attr( "name" );
	var id=$('#doc').attr( "name" );
		data={
	      accion:'next',
	      mesactual:mesactual,
	      id:id

		}

		ajaxcalendar(data);
	})

	$('#calen').on('click','#before',function(){

	var mesactual = $(this).attr( "name" );
	var id=$('#doc').attr( "name" );
		data={
	      accion:'before',
	      mesactual:mesactual,
	      id:id

		}

		ajaxcalendar(data);
	})

	function ajaxcalendar(data){
	  jQuery.ajax({
	          url: 'mes/calendar',
	          data:data,
	          success: function(data){
	              $('#calen').html(data);
	          }
	    });
	}

});