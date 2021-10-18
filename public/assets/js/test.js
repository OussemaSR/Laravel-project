
$(document).ready(function() {

	$("#submit").on('click',function(e){
		

		var files = $('#file')[0].files;

       if(files.length > 0){
       var fd = new FormData();
	   let _token   = $('meta[name="csrf-token"]').attr('content');
       // Append data 
       fd.append('file',files[0]);
       fd.append('_token',_token);
       // AJAX request 
       $.ajax({
         url: "http://localhost/smdevis/public/file_up",
         method: 'POST',
         data: fd,
         contentType: false,
         processData: false,
         dataType: 'json',
         success: function(response){
            console.log(response);
            console.log(response.success);
         },
        });
      }
      });

});

