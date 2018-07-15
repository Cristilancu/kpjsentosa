
$(document).ready(function(e){

sessionStorage.removeItem("totaldate")


//$(".scheduleform").on('submit',(function(e) {

//$('#calen #modaledit').on('click','#saveschedule',function(){

$('#saveschedule').on('click',function(){
       //e.preventDefault();
var totaldate=[]
var datedata=[]
/*
    $( ".slot" ).each(function( index ) {
        
        
        var long=$('.slot').length
        var totalslots=[]
        var slotdata=[]
        var status=$(this).find('.status').val()
        var start=$(this).find('.start').val()
        var end=$(this).find('.end').val()
        var daybymonth=$(this).find('.daybymonth').val()
        var bymonth=$(this).find('.bymonth').val()
        var daybyyear=$(this).find('.daybyyear').val()
        var byyear=$(this).find('.byyear').val()
        var maxp=$(this).find('.maxp').val()    
 
         slotdata.push({
                    status:status,
				    start:start,
				    end:end,
				    daybymonth:daybymonth,
				    bymonth:bymonth,
				    daybyyear:daybyyear,
				    byyear:byyear,
				    maxp:maxp 
                });

         slotdata=JSON.stringify(slotdata)
         //sessionStorage.setItem("slotdata",slotdata)
         
         if(sessionStorage.getItem("totalslots"))
         {
           totalslots=sessionStorage.getItem("totalslots")
         } 

         totalslots.push({
         	slotdata:slotdata

         });

         sessionStorage.setItem("totalslots",totalslots)
         
         
        
           if((long-1)==index)
           {
           	  totalslots=JSON.stringify(totalslots)
              sessionStorage.setItem("totalslots",totalslots)
           }
    })

*/

    var status3=$('#sta3').val();
    var daybymonth1=$('#daybymonth1').val();
    var bymonth1=$('#bymonth1').val();
    var daybyyear1=$('#daybyyear1').val();
    var byyear1=$('#byyear1').val();
    var iddoctor=$('#iddoctor').val();
    var dateschedule=$('#dateschedule').val();

    $( ".fordate" ).each(function( index ) {

        var long=$('.fordate').length
        var start=$(this).find('.start').val()
        var end=$(this).find('.end').val()

        datedata.push({
				    start:start,
				    end:end
                });

           if((long-1)==index)
           {
           	  datedata=JSON.stringify(datedata)
           }
           
    })

 //alert(datedata)
    

          data={
      	      status3:status3,
          	  daybymonth1:daybymonth1,
          	  bymonth1:bymonth1,
          	  daybyyear1:daybyyear1,
          	  byyear1:byyear1,
              datedata:datedata,
              iddoctor:iddoctor,
              dateschedule:dateschedule
          }


          $.ajax({
      				url: 'admin/save/schedule', // Url to which the request is send
      				data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
      				success: function(data){   // A function to be called if request succeeds
      				   
      				    $('#calen').html(data);

      				    $('#modal-edit-schedule').modal('hide')
      				},
                      error: function(xhr, status, error) {
                              alert('Can not Save Information')
                           }
      		});

    });


});