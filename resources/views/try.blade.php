<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="assets/css/try.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="assets/js/try2.js"></script>
	
	<script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
	<title>SM Devis | Traveaux en ligne</title>
</head>
<body>
	
	<div id="back_paint">
	    <div id="header_logo">
			<a  id="ignore"><img src="assets/images/logoo.png" alt="sm devis" id="logo_class"></a>
	    </div>

		<div id="msform_container" class="form_area">
			<form id="msform" method="POST">

				<div class="msform_body">
					<div class="msform_logo">
						<div class="circle_logo"><img src="assets/images/location.png" alt="location"></div>
					</div>
					<div class="ms-title">Veuillez choisir votre type de rénovation et préciser votre code postal</div>
					<div class="ms-subtitle">Ces informations nous permettent de vérifier votre éligibilité à nos services</div>
					<span id="errormsg" class="errormsg"></span>
					<select list="renovation" id="categorie" name="categorie" class="dropdown" >
					<optgroup label="Pièces/Prestation specifique">
						<option value="" disabled selected hidden>Votre type de renovation</option>
					
					 @foreach($ppss as $pps)
					 	<option id="{{ $pps->id }}" value="{{ $pps->renoname }}">{{ $pps->renoname }}</option>
					 @endforeach
						
					<optgroup>
					<optgroup label="Projet complet">
					
					@foreach($pcs as $pc)
						<option id="{{ $pc->id }}" value="{{ $pc->renoname }}">{{ $pc->renoname }}</option>
					@endforeach	
						
					
					</optgroup>
					</select>
					<div>
					<select list="region" id="ville" name="ville" class="dropdown" >
						<optgroup label="Région">
							<option value="" disabled selected hidden>Votre région</option>
							<option value="bizerte">Bizerte</option> 
							<option value="nabel">Nabel</option> 
							<option value="ariana">Ariana</option> 
							<option value="tunis">Tunis</option> 
							<option value="zaghouen">Zaghouen</option>
							<option value="manouba">Manouba</option> 
							<option value="ben_arous">Ben arous</option> 
							<option value="sousse">Sousse</option> 
							<option value="sfax">Sfax</option> 
							<option value="mehdia">Mehdia</option> 
							<option value="monastir">Monastir</option>      
							<option value="beja">Béja</option> 
							<option value="jandouba">Jandouba</option>
							<option value="kef">Kef</option>   
							<option value="siliana">Siliana</option> 
							<option value="kairaoun">Kairaoun</option>       
						    <option value="sidi_bouzid">Sidi bouzid</option>
							<option value="kasserine">Kasserine</option>
							<option value="mednine">Mednine</option>
							<option value="kebili">Kebili</option>
							<option value="gabes">Gabès</option>
							<option value="gafsa">Gafsa</option>
							<option value="tozeur">Tozeur</option>
							<option value="tataouine">Tataouine</option>
						</optgroup>
					</select>
					</div>
						<input type="button" id="confirmer" class="confirm-button" value="confirmer"/>
				</div>
			</form>
		
		</div>	
		
		<div id="note_card">
			<div class="card_body">
				<div class="card_logo"><img src="assets/images/chrono.png" alt=""/></div>
				<div class="ms-title">
					Nos clients prennent en moyenne moins de 5 minutes pour répondre au 
					questionnaire qui va suivre.
				</div>
				<div class="ms-subtitle">C’est donc le moment parfait si vous êtes dans le taxi !</div>
				<div><button id="start_quest" class="confirm-button">Lancer le questionnaire</button></div>
			</div>
		</div>
	</div>
	

	{{--------------- dynamicsurveylayout --------------}}

	<div id="survey_layout">

		{{--------------- dynamic progress bar --------------}}
		<div class="heading">
			<div class="heading_layout">
				<div id="start">
					<img src="assets/images/taxi.png" alt="taxi"/>
				</div>
				<div class="step_layout">
					<div id="progress_step1" class="stack_labels">
						<div class="labels_title">Votre Project en détail</div>
						<div class="labels_n">1</div>
					</div>
					<div class="stack_bar">			
						<div class="empty_bar1"></div> 
						<div class="progressbar1"></div>
					</div>
					<div id="progress_step2" class="stack_labels">
						<div class="labels_title">Les documents utiles</div>
						<div class="labels_n">2</div>
					</div>
					<div class="stack_bar">			
						<div class="empty_bar2"></div> 
						<div class="progressbar2"></div>
					</div>
					<div id="progress_step3" class="stack_labels">
						<div class="labels_title">Votre bien et vous</div>
						<div class="labels_n">3</div>
					</div>
					<div class="stack_bar">			
						<div class="empty_bar3"></div> 
						<div class="progressbar3"></div>
					</div>
					<div id="progress_step4" class="stack_labels">
						<div class="labels_title">La synthèse qui va bien</div>
						<div class="labels_n">4</div>
					</div>
					
				</div>
				<div id="finish">
					<img src="assets/images/flag.png" alt="flag" />
				</div>
			</div>
		</div>
	
	    <form id="dynamic_frm">
				<section id="1st_section">
					<div id="progress_stage">
						<div id="n_stage">
							1
						</div>
						<div id="logo_stage">
							<img src="assets/images/home.png" id="img4" alt='' />
						</div>
						<div id="title_stage">
							Votre projet en détail
						</div>
						<div id="subtitle_stage">
							Explorons les contours de votre super projet ensemble.
						</div>
						{{-- for tetsing --}}
						<input type="button" id="skp" value="skip"/>
						{{--  --}}
					</div>
					<input type="button" id="commencer" class="next long_btn" value="commencer"/>
				</section>
				
				<section id="additional" class="1st_stage active">
					<h2 class="f-title">Pour compléter,décrivez-nous votre project ou ajoutez des précisions</h2>
					<h3 class="f-subtitle">Optionnel</h3>
					<textarea class="big_input" id="add_info" placeholder="A remplir..."></textarea>
					<input type="button" class="next long_btn" value="passez" />
					<input type="button" name="previous" class="previous action-button" value="Précedent" />	
				</section>

				<section id="2nd_section" class="active">
					<div id="progress_stage">
						<div id="n_stage">
							2
						</div>
						<div id="logo_stage">
							<img src="assets/images/archive.png" id="img4" alt='' />
						</div>
						<div id="title_stage">
							Les documents utiles
						</div>
						<div id="subtitle_stage">
							Les informations additionelles pour mieux vous aider.
						</div>
					</div>
					<input type="button" class="next long_btn" value="commencer"/>
					<input type="button" name="previous" class="previous action-button" value="Précedent" />	
				</section>
				<section id="plan" class="2nd_stage active">
					<h2 class="f-title">Avez-vous des plans à nous transmettre ?</h2>
					<h3 class="f-subtitle">Pas d'inquiétude si vous ne les avez pas sous la main, vous pourrez nous les envoyer plus tard</h3>
					<h3 class="f-subtitle">Optionnel</h3>
					<span id="plan" class="file_error"></span>
					   	<div class="joint_container">
							<div class="fileUpload">
								<label for="plan_files">
									<i class="fa fa-paperclip"></i>Déposer mes documents
								</label>
								<input id="plan_files" type="file">
							  </div>
							<div id="plan" class="joint_table">
								{{-- joint files --}}
								{{-- will be put here--}}
							</div>
				    	</div>
					<input type="button" class="next long_btn" value="passez" />
					<input type="button" name="previous" class="previous action-button" value="Précedent" />	
				</section>
				<section id="actuel_pic" class="2nd_stage active">
					<h2 class="f-title">Avez-vous des photos actuelles de votre bien à nous transmettre ?</h2>
					<h3 class="f-subtitle">Pas d'inquiétude si vous ne les avez pas sous la main, vous pourrez nous les envoyer plus tard</h3>
					<h3 class="f-subtitle">Optionnel</h3>
					<span id="actuel_pic" class="file_error"></span>
					<div class="joint_container">
						<div class="fileUpload">
							<label for="actual_files">
								<i class="fa fa-paperclip"></i>Déposer mes documents
							</label>
							<input id="actual_files" type="file">
						</div>
						<div id="actuel_pic" class="joint_table">
							{{-- joint files --}}
							{{-- will be put here--}}
						</div>
					</div>
					<input type="button" class="next long_btn" value="passez" />
					<input type="button" name="previous" class="previous action-button" value="Précedent" />	
				</section>
				<section id="inspire_pic" class="2nd_stage active">
					<h2 class="f-title">Avez-vous des images ou photos de tarveaux ou décorations qui vous inspirent ?</h2>
					<h3 class="f-subtitle">Pas d'inquiétude si vous ne les avez pas sous la main, vous pourrez nous les envoyer plus tard</h3>
					<h3 class="f-subtitle">Optionnel</h3>
					<span id="inspire_pic" class="file_error"></span>
					<div class="joint_container">
						<div class="fileUpload">
							<label for="inspire_files">
								<i class="fa fa-paperclip"></i>Déposer mes documents
							</label>
							<input id="inspire_files" type="file">
						  </div>
						<div id="inspire_pic" class="joint_table">
							{{-- joint files --}}
							{{-- will be put here--}}
						</div>
					</div>
					<input type="button" class="next long_btn" value="passez" />
					<input type="button" name="previous" class="previous action-button" value="Précedent" />	
				</section>
				<section id="3rd_section" class="active">
					<div id="progress_stage">
						<div id="n_stage">
							3
						</div>
						<div id="logo_stage">
							<img src="assets/images/sofa.png" id="img4" alt='' />
						</div>
						<div id="title_stage">
							Votre bien et vous
						</div>
						<div id="subtitle_stage">
							Parlon de petit chez-vous en long, large et travers.
						</div>
					</div>
					<input type="button" class="next long_btn" value="commencer"/>
					<input type="button" name="previous" class="previous action-button" value="Précedent" />	
				</section>
				<section id="adresse" class="3rd_stage active">
					<h2 class="f-title">Quelle est l'adresse du chantier ?</h2>
					<h3 class="f-subtitle">Optionnel</h3>
					<input type="text" class="input_field" id="adress" placeholder="votre adresse..." />
					<input type="button" name="previous" class="previous action-button" value="Précedent" />
					<input type="button" name="next" class="next long_btn" value="passez" />
				</section>
				<section id="logement" class="3rd_stage active">
					<h2 class="f-title">Quelle est le type de votre logement ?</h2>
					<h3 class="f-subtitle">1 seul choix possible</h3>
					<div class="container1">	 
						<input class="one_press buttn" id="appartement" value="Appartement"/>
						<input class="one_press buttn" value="maison individuelle" />
                        <input type="text" class='one_input input_buttn' placeholder="Autre(préciser)..." />
					  </div>
					<input type="button" name="previous" class="previous action-button" value="Précedent" />
					
				</section>
				<section id="status" class="3rd_stage active">
					<h2 class="f-title">Quel est le statut de propriété du bien ?</h2>
					<h3 class="f-subtitle">1 seul choix possible</h3>
					<div class="container1">	
						<input class="one_press buttn" value="Je suis propriétaire" />
						<input class="one_press buttn" value="Je suis en train de faire une offre" />
                        <input class="one_press buttn" value="Je suis locataire" />
						<input type="text" class='one_input input_buttn' placeholder="Autre(préciser)..." />
					</div>
					<input type="button" name="previous" class="previous action-button" value="Précedent" />
					
				</section>
				<section id="etat_general" class="3rd_stage active">
					<h2 class="f-title">Quel est l'état général actuel de votre bien ?</h2>
					<h3 class="f-subtitle">1 seul choix possible</h3>
					<div class="container1">	
						<input type="button" class="one_press buttn" value="Trés bon état"/>
						<input type="button" class="one_press buttn" value="Bon état" />
                        <input type="button" class="one_press buttn" value="Ancien" />
						<input type="button" class="one_press buttn" value="Délabré" />
						<input type="text" class='one_input input_buttn' placeholder="Autre(préciser)..." />
					</div>
					<input type="button" name="previous" class="previous action-button" value="Précedent" />
				
				</section>
				<section id="disponibilité" class="3rd_stage active">
					<h2 class="f-title">Quel sont vos disponibilités pour les visites</h2>
					<h3 class="f-subtitle">Optionnel</h3>
					<input type="text" class='input_field' placeholder="Autre(préciser)..." />
					<input type="button" name="previous" class="previous action-button" value="Précedent" />
					<input type="button" class="next long_btn" value="passez"/>
				</section>
				<section id="traveaux" class="3rd_stage active">
					<h2 class="f-title">Quand souhaitez-vous Réaliser Vos Traveaux ?</h2>
					<h3 class="f-subtitle">1 seul choix possible</h3>
					<div class="container1">	
						<input class="one_press buttn" value="Dés que possible" />
						<input class="one_press buttn" value="Dans les 3 moins" />
                        <input class="one_press buttn" value="Dans l'année" />
						<input type="text" class='one_input input_buttn' placeholder="Autre(préciser)..." />
					  </div>
					<input type="button" name="previous" class="previous action-button" value="Précedent" />
				</section>
				<section id="connu" class="3rd_stage active">
					<h2 class="f-title">Et pour finir..comment nous avez-vous connu ?</h2>
					<h3 class="f-subtitle">1 seul choix possible</h3>
					<div class="container1">	
						<input class="one_press buttn" value="Moteur de recherche" />
						<input class="one_press buttn" value="Facebook" />
                        <input class="one_press buttn" value="Instagram" />
						<input class="one_press buttn" value="Client BIAT" />
						<input class="one_press buttn" value="Needhelp" />
						<input class="one_press buttn" value="Bouche à oreille" />
						<input class="one_press buttn" value="Déja client" />
						<input type="text" class='one_input input_buttn' placeholder="Autre(préciser)..." />
					  </div>
					<input type="button" name="previous" class="previous action-button" value="Précedent" />
				</section>

				<section id="4rth_section" class="active">
					<div id="progress_stage">
						<div id="n_stage">
							4
						</div>
						<div id="logo_stage">
							<img src="assets/images/resume.png" id="img4" alt='' />
						</div>
						<div id="title_stage">
							La synthèse qui va bien
						</div>
						<div id="subtitle_stage">
							Le grand final : un résumé de votre questionnaire
						</div>
					</div>
					<input type="button" name="previous" class="previous action-button" value="Précedent" />
					{{--  --}}
					<div class="summery_table">

						{{-------------------------- 1st step --------------------------}}
						<div id="1st_summery" class="summery_step_style">
							<h2 class="sss_container">
								<img src="assets/images/home.png" class="sss_img" alt='' /> Votre project en détails
							</h2>
								
						</div>
										
						{{-------------------------- 2nd step --------------------------}}
						<div id="2nd_summery" class="summery_step_style">
						
							<h2 class="sss_container">
								<img src="assets/images/archive.png" class="sss_img" alt='' /> Les documents utiles
							</h2>
								
						</div>
						{{--  --}}
					
					
						<div id="plan" class="summery_line">
							<!---->
							<div class="grid_line">
					
								<div class="question_line">Plans</div>
					
								<div class="answer_line">
								  <div class="answers"></div>
							
								</div>
					
								<div class="circle_icon">
									<img src="assets/images/pencil.png" alt="" class="pencil_img" />
								</div>
							</div>
							<!---->
					
						</div>
					
						<div id="actuel_pic" class="summery_line">
							<div class="grid_line">
								<div class="question_line">Photos actuelles</div>
								<div class="answer_line">
								  <div class="answers"></div>
							
								</div>
								<div class="circle_icon">
									<img src="assets/images/pencil.png" alt="" class="pencil_img" />
								</div>
							</div>
						</div>

						<div id="inspire_pic" class="summery_line">
							<!---->
					
							<div class="grid_line">
					
								<div class="question_line">Photos d'inspiration</div>
					
								<div class="answer_line">
								  <div class="answers"></div>
								</div>
					
								<div class="circle_icon">
									<img src="assets/images/pencil.png" alt="" class="pencil_img" />
								</div>
							</div>
							<!---->
					
						</div>
					
							{{-- ------------------------ 3rd step ------------------------ --}}
							<div id="3rd_summery" class="summery_step_style">
						
								<h2 class="sss_container">
									<img src="assets/images/sofa.png" class="sss_img" alt='' /> Votre bien et vous
								</h2>
									
							</div>
							{{--  --}}
					
					
					
						<div id="submitting" class="summery_step_style">
						  <input type="button" id="survey_end" class="long_btn" value="Confirmer  Programmer un rendez-vous">
						</div>
					
						
					</div>
				</section>
	    </form>
		
	</div>
		
		
		<form method="POST" action={{ route('preserve') }} id="registration">
			 @csrf
			<div id="reg_container">
				<div id="content_container">
					<div id="script">
						Pour continuer, nous avons besoin de votre nom complet et téléphone pour vous appeler
					</div>
					<div id="mini_script">
						Vous choisissez le jour et l’horaire qui vous conviennent le mieux à la prochaine étape. Votre e-mail vous sert à recevoir la confirmation de rendez-vous téléphonique.
					</div>
					<div id="form_container">
						<div id="wrapp">
							<div class="icon_reg">
								<img src="assets/images/logoo.png" alt="SM-DEVIS"  />
							</div>
							<div class="reg_form">
							
								<input type="text" class="in_field" id="name" name="given_name" placeholder="Votre prénom" required/>
								<input type="text" class="in_field" id="prename" name="family_name" placeholder="Votre nom" required/>
								<input type="number" class="in_field" id="phone" name="phone" placeholder="Votre numéro de téléphone" required/>
								<input type="email" class="in_field" id="client_email" name="email" placeholder="Votre email" required/>
								<input type="text" class="hidden_element" id="categorie" name="categorie" required/>
								<input type="text" class="hidden_element" id="ville" name="ville"required/>
								
								<div id="legal_verif">
									<div class="verif">
										<label id="legal_label">
											<input type="checkbox" required/> <span class="Sspan">J'accepte les conditions générales d'utilisation (<a href="smdevis/public/mentions_legales" rel="noopener noreferrer" >Voir les CGU</a>) *</span>
										</label>
									</div>
									<div class="verif">
										<label id="legal_label">
											<input type="checkbox" required/> <span class="Sspan">J’accepte que mes données soient transférées à des sociétés partenaires pour bénéficier d'offres et bons plans ciblés.</span>
										</label>
									</div>
								</div> 
								<input type="submit" id="submit_form" class="confirm_btn" value="Confirmer">
							</div>
						</div>
						<div id="sticker">
							<img src="https://espace-client.renovationman.com/assets/images/perceuse.png" alt="" id= "stiker_img" />
						</div>
					</div>
				</div>
			</div>
		</form>



</body>
</html>
