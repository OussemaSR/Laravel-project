@extends('emails.mail_layout')

@section('content')
    <div class="page_container">
        <div class="email_logo">
            <img class="img2" src="https://www.sm-devis.com/img/logo.jpg" alt="SM-DEVIS">
        </div>
        <div class="request_type">Formulaire client</div>
        <div class="first_half">
            <div>
                <ul>
                    <li>Client #id :<strong>{{ $BIG_data['id'] }}</strong></li>
                    <li>Prenom : <strong>{{ $BIG_data['prename'] }}</strong></li>
                    <li>Nom : <strong>{{ $BIG_data['name'] }}</strong></li>
                    <li>Email : <strong>{{ $BIG_data['email'] }}</strong></li>
                    <li>Tel : <strong>{{ $BIG_data['phone'] }}</strong></p>
                </ul>
            </div>
            <div>
                <ul>
                    <li>Type  de Renovation: <strong>{{ $BIG_data['categorie'] }}</strong></li>
                    <li>Ville : <strong>{{ $BIG_data['ville'] }}</strong></li>
                </ul>

            </div>
            <div>
                
                <ul>
                    <li class="text">Rendez-Vous</li>
                    <li>Le : <strong>{{ $BIG_data['appointement_date'] }}</strong></li>
                    <li>à : <strong>{{ $BIG_data['appointement_time'] }}</strong></li>
                </ul>

            </div>
        </div>
    
        <div class="second_half">
            <section>
                <div class="data_table">
                    <div class="label">Informations de renovation</div>
                    <?php
                    foreach ($BIG_data["newdata1"] as $item1 ){
                        $value = $item1;
                        $answers = array_shift($value);
                        $answer_ = "";
                        if(!empty($value)){
                            foreach ($value as $answer ){
                                $answer_ = $answer_.("<div class='answers'>".$answer."</div>");
                            }
                        }
                        echo '<div class="data_line">
                            <div>'.$item1[0].' :</div>
                            <div>'.$answer_.'</div>
                            </div>'; 
                    }
                    ?>    
                </div>
            </section>
            <section>
                <div class="data_table">
                    <div class="label">Informations de renovation</div>
                    <?php
                    foreach ($BIG_data["newdata2"] as $item1 ){
                        $value = $item1;
                        $answers = array_shift($value);
                        $answer_ = "";
                        if(!empty($value)){
                            foreach ($value as $answer ){
                                $answer_ = $answer_.("<div  class='answers'>".$answer."</div>");
                            }
                        }
                        echo '<div class="data_line">
                            <div>'.$item1[0].' :</div>
                            <div>'.$answer_.'</div>
                            </div>'; 
                    }
                    ?>    
                </div>
            </section>
            <section>
                <div class="data_table">
                    <div class="label">Informations de renovation</div>
                    <?php
                    foreach ($BIG_data["newdata3"] as $item1 ){
                        $value = $item1;
                        $answers = array_shift($value);
                        $answer_ = "";
                        if(!empty($value)){
                            foreach ($value as $answer ){
                                $answer_ = $answer_.("<div class='answers'>".$answer."</div>");
                            }
                        }
                        echo '<div class="data_line">
                            <div>'.$item1[0].' :</div>
                            <div>'.$answer_.'</div>
                            </div>'; 
                    }
                    ?>    
                </div>
            </section>
    
        </div>
    </div>
 @endsection    
    



