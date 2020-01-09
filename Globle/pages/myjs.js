
  $("#subq").click( function() {
    $.post( $("#myForm").attr("action"),$("#myForm :input").serializeArray(),function(info){ $("#result").html(info);});
    clearInput();
   });
    
   $("#myform").submit( function() {
     return false;	
   });
    
   function clearInput() {
       $("#myform : input").each( function() {
          $(this).val('');
       });
   }