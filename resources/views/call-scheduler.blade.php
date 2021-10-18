<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/call-scheduler.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="assets/js/call-scheduler.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="page_container">
      <div>
        <div class="call_scheduler_pic"><img src="assets/images/calendar1.png" alt=""></h1>
      </div>

      <div>
        <div class="big_text">Programmez votre appel avec l'un de nos conseillers</h1>
      </div>
    
       <div>
        <h3 class="small_text">Merci d’avoir pris le temps de compléter votre questionnaire,
           c’est l’assurance d’un devis illico presto. Un de nos supers conseillers 
           travaux va maintenant l’étudier (bien comme il faut) et vous appeler,
            selon vos disponibilités</h3>
       </div>
  
        <div class="container2">

              <div class="right_arrow">
                <i class="fa fa-arrow-right"></i>
              </div>

              <div class="left_arrow">
                <i class="fa fa-arrow-left"></i>
              </div>
            
        </div>
    </div>

    <!-------- validate Modal -------->
    <div id="validate_Modal" class="modal_valid">

      <!-- Modal content -->
      <form  method="POST" action="{{ route("save_data") }}" class="modal_valid-content">
        @csrf 
        <div class="close_cross"><div class="fa fa-close"></div></div>
        <div class="modal_title">Cet horaire vous convient-il ?</div>
        <div class="modal_text">Votre appel avec l'un de nos super conseillers sera programmé pour le :</div>
        <div class="time-zone"></div>
        <input type="text" class="hide" id="date" name="date"/>
        <input type="text" class="hide" id="time" name="time"/>
        <input type="submit" class="validate" value="Confirmer mon RDV"/>
        <input type="button" class="redo" value="Choisir un autre créneau"/>     
      </form>

    </div>
    <!-------- Loading Modal -------->
    <div class="modal"><!-- Place at bottom of page --></div>

        <!-------- exit Modal -------->
        <div id="exit_modal" class="modal_valid">
          <div class="modal_valid-content">
            <div class="modal_title">S'il vous plaît, attendez...</div>
            <div class="modal_text">Vous allez recevoir une confirmation dans votre boite e-mail sous peu.</div>  
          </div>
        </div>
    
</body>
</html>
