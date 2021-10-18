<!DOCTYPE html>
<html>
<head>
<title>How to upload a file using jQuery AJAX in Laravel 8</title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<style type="text/css">
.displaynone{
display: none;
}
body{
  margin-top:50px;
}
</style>
</head>
<body>

  <div class="container">

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">

        <!-- Response message -->
        <div class="alert displaynone" id="responseMsg"></div>

        <!-- File preview --> 
        <div id="filepreview" class="displaynone" > 

          <a href="#" class="displaynone" >Click Here..</a>
        </div>


        <!-- Form -->
        <form class="form-group">

          @csrf
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">File    <span class="required">*</span></label>
           <div class="col-md-6 col-sm-6 col-xs-12">

              <input type='file' id="file" name='file' class="form-control">

              <!-- Error -->
              <div class='alert alert-danger mt-2 d-none text-danger' id="err_file"></div>

           </div>
                  @if ($errors->any())
          <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
          </div>
          @endif

        <div class="form-group">
           <div class="col-md-6">
              <input type="button" id="submit" value='Submit' class='btn btn-success'>
              <input type="button" id="delete" value='delete' class='btn'>
           </div>
        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="assets/js/testing.js"></script>

</body>
</html>