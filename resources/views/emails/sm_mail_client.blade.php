@extends('emails.mail_layout')
@section('content')
<div class="page_container">
    <div class="request_type">parlons de votre projet !</div> 
    <br><br>

        <div class="label">SM Devis prend votre projet en main
            <br><br>Bonjour <strong>{{ $Client['name'] }}</strong> <strong>{{ $Client['prename'] }}</strong>
        </div>
        
        <br><br>
        <div class="text">Nous avons bien reçu votre demande de devis estimatif concernant vos travaux de rénovation,
            Votre conseiller travaux va vous appeler le <strong>{{ $Client['appointement_date'] }}</strong>
            à <strong>{{ $Client['appointement_time'] }}</strong>
            pour en savoir plus sur votre projet.<br><br>A la suite de cet appel de 15 minutes,
            et nous vous en remercions.
        </div>

        <br>
        <br><br>
        <div class="text">vous recevrez une première estimation du montant de vos travaux par email, dont vous pourrez discuter avec votre conseiller.

            C'est simple, gratuit, et sans engagement !
        </div>

        <br>
        <br>
        <div class="text">Merci,<br>
            {{ config('app.name') }}
        </div>

</div>
@endsection
