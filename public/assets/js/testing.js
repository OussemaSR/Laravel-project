var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

$(document).ready(function(){

  $('#file').on('change',function(){
 
    // Get the selected file
    var files = $('#file')[0].files;
    if(files.length > 0){
       var fd = new FormData();

       // Append data 
       fd.append('file',files[0]);
       fd.append('_token',CSRF_TOKEN);
        console.log(fd);
       // Hide alert 
       $('#responseMsg').hide();

       // AJAX request 
       $.ajax({
         url: "http://localhost/smdevis/public/upload",
         method: 'post',
         data: fd,
         contentType: false,
         processData: false,
         dataType: 'json',
         success: function(response){
            console.log(response);
            console.log(response.success);
        
           // Hide error container
           $('#err_file').removeClass('d-block');
           $('#err_file').addClass('d-none');

           if(response.success == 1){ // Uploaded successfully
           
             // Response message
             $('#responseMsg').removeClass("alert-danger");
             $('#responseMsg').addClass("alert-success");
             $('#responseMsg').html('file has been uploaded succefuly');
            //  console.log("ext :"+response.extension);
             $('#responseMsg').show();

             // File preview
             $('#filepreview').show();
              $('#filepreview').append('<img id="'+response.path+'" src="'+response.file+'" alt="IMG" />');
              $('#filepreview img').show();
           }else{
             // Display Error
             $('#err_file').text('failed to upload image');
             $('#err_file').removeClass('d-none');
             $('#err_file').addClass('d-block');
           } 
         },error: function(response){
          $('#err_file').text('failed to upload image');
          $('#err_file').removeClass('d-none');
          $('#err_file').addClass('d-block');
         }
       });
    }else{
       alert("Please select a file.");
    }
  });     
});

$('#delete').click(function(){
 var image = $('#filepreview').find('img').attr("id");
 console.log(image);

    
       var data = {
        'image' : image,
      };

      $.post('http://localhost/smdevis/public/delete',
      {
        '_token': $('meta[name=csrf-token]').attr('content'), data : data

      }).done(function (res){
          console.log(res);
      });
});

