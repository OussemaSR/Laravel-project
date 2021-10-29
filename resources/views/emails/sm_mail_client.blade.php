@extends('emails.mail_layout')
@section('content')
<div class="page_container">
    <div class="email_logo">
        <img class="img" src="https://scontent.ftun9-1.fna.fbcdn.net/v/t1.6435-9/118534919_3949090178451334_21595385897008740_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=730e14&_nc_ohc=Kwws0W2bUmkAX8KMRe2&_nc_ht=scontent.ftun9-1.fna&oh=328e3838cb55718f67a40bc20f85c019&oe=619A7D1B" alt="SM-DEVIS">
    </div>


    <div class="request_type">Votre créneau de rappel : parlons de votre projet !</div> 
    <br><br>
        <div class="text">
        <div class="label">SM Devis prend votre projet en main</div>
        <br><br>
        Bonjour <strong>{{ $Client['name'] }}</strong> <strong>{{ $Client['prename'] }}</strong>
        
        
        <br><br>
        
            Nous avons bien reçu votre demande de devis estimatif concernant vos travaux de rénovation, et nous vous en remercions.
            <br>
            <br>
            Votre conseiller travaux va vous appeler le <strong>{{ $Client['appointement_date'] }}</strong>
            à <strong>{{ $Client['appointement_time'] }}</strong> pour en savoir plus sur votre projet. A la suite de cet appel
            de 15 minutes, vous recevrez une première estimation du montant de vos travaux par email,
            dont vous pourrez discuter avec votre conseiller.
            <br><br>C'est simple, gratuit, et sans engagement !
        </div>

        <br>
        <br><br>
        <div class="text">
            <div class="label">Et pour la suite...</div> 
            <div>Pour bien vous préparer pour les prochaines étapes et bien comprendre 
            </div>accompagnement, nous vous invitons à consulter nos documents suivants : 
        </div>
        <br>
        <br>
        <ul class="list">
            <li><a class="link" href="https://www.sm-devis.tn/tous-nos-guides-travaux-en-tunisie/">SM Devis : mode emploi</a></li>
            <li><a class="link" href="https://www.sm-devis.tn/devis-construction-renovation-tunisie/">Bien préparer vos travaux : le guide</a></li>
            <li><a class="link" href="https://drive.google.com/file/d/19Pqu-nF5M9tOdK-D6Uj54VD7PVRRd4-B/view?usp=sharing" type="application/pdf">SM Devis: Comment ça marche ?</a></li>

        </ul>
        <br>
        <div class="text">A très vite sur <a class="link" href="https://www.sm-devis.com">sm-devis.com</a> !</div>
        <br>
        <br>
        <div class="buttom_logo">
            <img class="img2" src="https://sm-devis.com/img/logo.jpg" alt="SM-DEVIS">
        </div>
        
        <div class="footer">
            <div style="font-weight: bolder;margin-top:20px;">L'équipe SM Devis</div>
            <div><a href="mailto:contact@sm-devis.com">contact@sm-devis.com</a></div>
            <div>+33 1 80 84 31 19</div>
            <div>+216 96 515 994</div>

            <div class="contacts">
                <div class="contact_logo"><a href="https://www.facebook.com/SMDEVIS"><img src="https://cdn.exclaimer.com/Handbook%20Images/facebook-icon_square_24x24.png" alt="Twitter Icon" /></a></div>
                <div class="contact_logo"><a href="https://www.linkedin.com/company/sm-devis-international"><img src="https://cdn.exclaimer.com/Handbook%20Images/linkedin-icon_square_24x24.png" alt="Twitter Icon" /></a></div>
                <div class="contact_logo"><a href="https://mobile.twitter.com/sm_devis"><img src="https://cdn.exclaimer.com/Handbook%20Images/twitter-icon_square_24x24.png" alt="Twitter Icon" /></div>
                <div class="contact_logo"><a href="https://youtu.be/YzygDxS8OS8"><img src="https://cdn.exclaimer.com/Handbook%20Images/youtube-icon_square_24x24.png" alt="Twitter Icon" /></div>
            </div>
        </div>

</div>
@endsection

