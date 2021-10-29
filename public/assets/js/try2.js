

$(document).ready(function(e) {
	
	//////// GLOBAL VARIABLES /////////////

	//// questions order pattern /////
	pattern = []; //// questions order pattern  /////
	trigger = []; //// subquestions trigger pattern ///// 
	showing = []; //// default shown section //////

	var inter;   //// intermediate variable between  addingSummeryLine/collectData functions //// 
	var stage1 = $('#1st_summery'); 
	var stage2 = $('#2nd_summery');
	var stage3 = $('#3rd_summery');
	//////// GLOBAL FUNCTIONS ////////////

	function progressbarfunction(position){
		var section2_index =  $("section#2nd_section").index();
		var section3_index =  $("section#3rd_section").index();
		var section4_index =  $("section#4rth_section").index();

		var NUMBER_OF_SECTIONS_1 = ($("#dynamic_frm > section#1st_section").nextUntil("section#2nd_section")).length;
		var NUMBER_OF_SECTIONS_2 = ($("#dynamic_frm > section#2nd_section").nextUntil("section#3rd_section")).length;
		var NUMBER_OF_SECTIONS_3 = ($("#dynamic_frm > section#3rd_section").nextUntil("section#4rth_section")).length;
		
		var progress = $("#dynamic_frm > section").index(position);

		if(progress == section2_index){
			$("#progress_step2").find(".labels_n").css({"background":"#f55858"},{"border-box":"0 0 15px 1px #222222b6"});
		}
		if(progress == section3_index){
			$("#progress_step3").find(".labels_n").css({"background":"#f55858"},{"border-box":"0 0 15px 1px #222222b6"});
		}
		if(progress == section4_index){
			$("#progress_step4").find(".labels_n").css({"background":"#f55858"},{"border-box":"0 0 15px 1px #222222b6"});
		}

		if((progress > section2_index) && (progress <= section3_index) ){		
			var progress2 = (($("#dynamic_frm > section#2nd_section").nextUntil(position)).length)+1;
			var step = (progress2*100)/NUMBER_OF_SECTIONS_2;
			$(".heading").find(".progressbar2").animate({width: step+'%'},10);
			console.log(progress2);
		}
		if(progress > section3_index){
			
			var progress3 = (($("#dynamic_frm > section#3rd_section").nextUntil(position)).length)+1;
			var step = (progress3*100)/NUMBER_OF_SECTIONS_3;
			$(".heading").find(".progressbar3").animate({width: step+'%'},10);
			// console.log(progress);
		}
		if(progress <= section2_index ){

			var step = (progress*100)/NUMBER_OF_SECTIONS_1;
			$(".heading").find(".progressbar1").animate({width: step+'%'},10);
		}
	}
	/////move to next section animation function///////
	  function NavigateToNext(current,next){

				progressbarfunction(next);			
				//show the next section
			
				while(next.hasClass("active")!=true){
				next = next.next();
				}

				filterLines(next);

				next.show().animate({height:'100%',opacity:'100%'}); 
				//hide the current section with style
				current.animate({height:'0%',opacity:'0'}).promise().done(function () {
					current.hide();
				});
	
	  }
	
	/////return to previous section animation function///////
	  function NavigateBack(current,previous){

		$("#progressbar li").eq($("#dynamic_frm > section").index(current)).removeClass("active");
		while(previous.hasClass("active")!=true){
			previous = previous.prev();
		}
		
		//show the previous section
		previous.show().animate({height:'100%',opacity:'100%'}); 
		
		//hide the current section with style
		current.animate({height:'0',opacity:'0'}).promise().done(function () {
			current.hide();
		}); 
		
		console.log(previous.attr("id"));

	  }

	  	//////// adding summery lines fcn //////////////// 

	  function addingSummeryLine(stage,qn_id,qn_val,art){
			
				stage.after('<div id="'+qn_id+'" class="summery_line">\
					<div class="grid_line">\
						<div class="question_line">'+qn_val+'</div>\
						<div class="answer_line">\
						  <div class="answers"> </div>\
						</div>\
						<div class="circle_icon">\
							<img src="assets/images/pencil.png" alt="" class="pencil_img" />\
						</div>\
					</div>\
					</div>')
					stage = stage.next();
					art.forEach((a) => {
						$('.summery_table').find('div#'+qn_id+ '.summery_line').find('.answers').append('<div>'+a+'</div>')
					});
		
					inter = stage ;
					return inter;
	  } 

	  ////// show sub-questions function //////////
	  function showQuestion (qstn,ansr,trig){

		qstn_id = qstn.attr("id");
		ansr_id = ansr.attr("id");

		var trigger_id  = $.grep(trig, function(n, i) {
            return n.q_id == qstn_id;
        });

        if (trigger_id.length > 0) {
				
			var answer_id  = $.grep(trigger_id, function(n, i) {
				return n.a_id == ansr_id ;
			});
			if (answer_id.length > 0) {

				if(ansr.hasClass("active") == true){

				$.each( answer_id[0].sub_id, function( key, value ) {

					$("#dynamic_frm").find("section#"+value).addClass("active");
				  });
				}else{
					$.each( answer_id[0].sub_id, function( key, value ) {
						$("#dynamic_frm").find("section#"+value).removeClass("active");

					});
				}	

			}else{
			
				$.each( trigger_id[0].sub_id, function( key, value ) {
					$("#dynamic_frm").find("section#"+value).removeClass("active");
	
				});
			
			}			    

		}  
	}

	///////// answer/question collecting function //////////

		function filterLines(fltr){
			if(fltr.attr("id") == "4rth_section"){
				console.log("im here");
					stage1 = $("#1st_summery");
					stage3 = $("#3rd_summery");
					$("#1st_summery").nextUntil("#2nd_summery").detach();
				    // $("#2nd_summery").nextUntil("#3rd_summery").detach();
				    $("#3rd_summery").nextUntil("#submitting").detach();
				$(".1st_stage.active").each(function(){
					qn = $(this);
					var quest_id = qn.attr("id");
					var ans = [];
					s = 0;
					var q = qn.find("h2");
					if(qn.attr("id") == "additional"){
						var add_txt = qn.find("textarea.big_input");
						if(add_txt.hasClass("active")){
							ans[s++] = add_txt.val();
	
							addingSummeryLine(stage1,quest_id,q.text(),ans);

							stage1 = inter;
							
						}
					}else{
						
					qn.find("input.active").each(function(){
						///// classify answers depent on their types ///// 
						if($(this).hasClass("input_buttn")){
							//// written answres (strings and dimensions)
							let lbl = $(this).attr('placeholder');
							let val = $(this).val();

							if( lbl.search(":")!=-1 ){
								//// answer for dimension ////
								let pos = lbl.indexOf(":");
								//// put answres in correct format (label : answer) 
								ans[s++] = [lbl.slice(0, pos + 2), val, lbl.slice(pos + 2)].join('');
							}else {
								//// answer for string and others ////
								ans[s++] = $(this).val();
							}
						}else if($(this).hasClass("input_number")){
							//// written answres (numbers) 
							let lbl_id = $(this).attr("id");
							let lbl = qn.find("label[for='" + lbl_id + "']").text();
							let val = $(this).val();

							if( lbl.search(":")!=-1 ){
								//// answer for number ////
								let pos = lbl.indexOf(":");
								//// put answres in correct format (label : answer) 
								ans[s++] = [lbl.slice(0, pos + 2), val, lbl.slice(pos + 2)].join('');
							  }else {
								  //// answer for others ////
								ans[s++] = $(this).val();
							  } 
						}else{
							//// reguluar clicked answers ////
							//store answers in an array
							ans[s++] = $(this).val();
						}
					});
	
						addingSummeryLine(stage1,quest_id,q.text(),ans);
						
						stage1 = inter;

				}
				});
				//////////////////

				//////////////////
				$(".2nd_stage.active").each(function(){
					var qn = $(this);
					var quest_id = qn.attr("id");
 					var sum_line = $(".summery_table").find("#"+quest_id);

					(qn.find("div#file_img")).children().each(function(){
						let img_id = $(this).attr("id");
						let img_src = $(this).attr("src");
						var img_name = qn.find("div.joint_name").text();
						console.log(qn.find("div.joint_name"));
						(sum_line.find('.answers')).append('<div class="joint_element">\
						<div id="file_img" class="joint_pic"><img src="'+img_src+'" id="'+img_id+'" alt="img"/></div>\
						<div class="file_name">'+img_name+'</div>\
						<div class="joint_x"><img src="assets/images/x-mark.png" id="remove" alt="x"/></div>\
					   </div>');
					});
				});
				
				//////////////////
				$(".3rd_stage.active").each(function(){
					qn = $(this);
					var quest_id = qn.attr("id");
					var q = qn.find("h2");
					var ans = [];
					s = 0;
					qn.find("input.active").each(function(){
						///// classify answers depent on their types ///// 
						if($(this).hasClass("input_buttn")){
							//// written answres (strings and dimensions)
							let lbl = $(this).attr('placeholder');
							let val = $(this).val();

							if( lbl.search(":")!=-1 ){
								//// answer for dimension ////
								let pos = lbl.indexOf(":");
								//// put answres in correct format (label : answer) 
								ans[s++] = [lbl.slice(0, pos + 2), val, lbl.slice(pos + 2)].join('');
							}else {
								//// answer for string and others ////
								ans[s++] = $(this).val();
							}
						}else if($(this).hasClass("input_number")){
							//// written answres (numbers) 
							let lbl_id = $(this).attr("id");
							let lbl = qn.find("label[for='" + lbl_id + "']").text();
							let val = $(this).val();

							if( lbl.search(":")!=-1 ){
								//// answer for number ////
								let pos = lbl.indexOf(":");
								//// put answres in correct format (label : answer) 
								ans[s++] = [lbl.slice(0, pos + 2), val, lbl.slice(pos + 2)].join('');
							  }else {
								  //// answer for others ////
								ans[s++] = $(this).val();
							  } 
						}else{
							//// reguluar clicked answers ////
							//store answers in an array
							ans[s++] = $(this).val();
						}
					});
					
					addingSummeryLine(stage3,quest_id,q.text(),ans);
					stage3 = inter;
				});
			
			}
		};


		///////// edit answer pencil fcn /////////
		$(".summery_table").on("click","div.circle_icon",function(){

			var edit_pencil_sec_id = $(this).closest(".summery_line").attr("id");
			console.log(edit_pencil_sec_id);
			
			$("#dynamic_frm").find("section#"+edit_pencil_sec_id).show().animate({height:'100%',opacity:'100%'}); 
			//hide the current section with style
			$("section#4rth_section").animate({height:'0%',opacity:'0'}).promise().done(function () {
				$("section#4rth_section").hide();
			});
		});
		//////////////////////////////////////////

		function firstFunction(_callback){
			//////get selected categorie from drop down select//////
			var id = $("#categorie option:selected").attr("id");
			/////get categorie questions ans answers /////////
			$.get('http://localhost/smdevis/public/getquestions?id='+id,
		
			).promise().done(function (res) {

				console.log(res.questions);
				// refering variables for each categorie // 
				switch (id){
					case '1' : //ID : 1  salle de bain
						pattern = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,
								  22,23,24,25,26,27]; 
						trigger = [
									{q_id:'2', a_id:['7'] , sub_id:['3']},
								   	{q_id:'6', a_id:['7'] , sub_id:['7'] },
									{q_id:'8', a_id:['7'] , sub_id:['9'] },
									{q_id:'10', a_id:['7'] , sub_id:['11'] },
									{q_id:'13', a_id:['7'] , sub_id:['14','15','16'] },
									{q_id:'17', a_id:['7'] , sub_id:['18','19','20'] },
									{q_id:'21', a_id:['8'] , sub_id:['22'] },
									{q_id:'22', a_id:['7'] , sub_id:['23'] },
									{q_id:'24', a_id:['7'] , sub_id:['25'] },
									{q_id:'26', a_id:['7'] , sub_id:['27'] }
								];
						showing = [1,2,4,5,6,8,10,12,13,17,21,24,26];
					break;

					case '2' : //ID : 2  cuisine
						pattern = [1,2,3,4,5,6,7,28,29,30,31,32,13,85,33,15,86,17,18,19,20,
						          21,22,23,26,87,80]; 
						trigger = [
									{q_id:'2', a_id:['7'] , sub_id:['3']},
									{q_id:'6', a_id:['7'] , sub_id:['7']},
									{q_id:'29', a_id:['60'] , sub_id:['30','31','32']},
									{q_id:'13', a_id:['7'] , sub_id:['85']},
									{q_id:'33', a_id:['78'] , sub_id:['15','86']},
									{q_id:'17', a_id:['7'] , sub_id:['18,19,20']},
									{q_id:'21', a_id:['8'] , sub_id:['22']},
									{q_id:'22', a_id:['7'] , sub_id:['23']},
									{q_id:'26', a_id:['7'] , sub_id:['87']}
								  ];
						showing = [1,2,4,5,6,28,29,13,33,17,21,26]; 
					break;

					case '3' : //ID : 3  sols-murs-plafonds
						pattern = [1,2,3,4,5,13,88,33,15,89,17,90,19,91,21,22,23]; 
						trigger = [
									{q_id:'2', a_id:['7'] , sub_id:['3']},
									{q_id:'13', a_id:['7'] , sub_id:['88','33','15','89']},
									{q_id:'17', a_id:['7'] , sub_id:['90','19','91']},
									{q_id:'21', a_id:['8'] , sub_id:['22']},
									{q_id:'22', a_id:['7'] , sub_id:['23']}
								  ];
						showing = [1,2,4,5,13,17,21]; 
					break;

					case '4' :  //ID : 4  fenetres
						pattern = [1,34,35,36,37]; 
						trigger = [];
						showing = [1,34,35,36,37]; 
					break;

					case '5' : //ID : 5 menuiseries intérieurs
						pattern = [1,2,3,4,5]; 
						trigger = [{q_id:'2', a_id:['7'] , sub_id:['3']}];
						showing = [1,2,4,5]; 
					break;

					case '6' : //ID : 6 Toiture- charpente-combles
						pattern = [1,38,39,40,41,42,43,44,45]; 
						trigger = [
									{q_id:'39', a_id:['105'] , sub_id:['40']},
									{q_id:'39', a_id:['41'] , sub_id:['41']}
								  ];
						showing = [1,38,39,42,43,44,45]; 
					break;

					case '7' : //ID : 7 isolation- chauffage-clim
						pattern = [1,93,46,47,48,49,50,43,36,37]; 
						trigger = [
									{q_id:'93', a_id:['121'] , sub_id:['46']},
									{q_id:'93', a_id:['122'] , sub_id:['47']},
									{q_id:'93', a_id:['123'] , sub_id:['48']}
								  ];
						showing = [1,93,49,50,43,36,37]; 
					break;

					case '8' : //ID : 8  Électricité
						pattern = [1,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67]; 
						trigger = [
									{q_id:'51', a_id:['142'] , sub_id:['56']},
									{q_id:'51', a_id:['143'] , sub_id:['57']},
									{q_id:'51', a_id:['144'] , sub_id:['58']},
									{q_id:'51', a_id:['145'] , sub_id:['59']},
									{q_id:'51', a_id:['146'] , sub_id:['60']},
									{q_id:'51', a_id:['147'] , sub_id:['61']},
									{q_id:'51', a_id:['148'] , sub_id:['62']},
									{q_id:'51', a_id:['149'] , sub_id:['63']},
									{q_id:'51', a_id:['150'] , sub_id:['64']},
									{q_id:'51', a_id:['151'] , sub_id:['65']},
									{q_id:'51', a_id:['152'] , sub_id:['66']},
									{q_id:'51', a_id:['153'] , sub_id:['67']}
									
								  ];
						showing = [1,51,52,53,54,55]; 
					break;

					case '9' : //ID : 9  Autre
						pattern = [1,2,3,4,5]; 
						trigger = [
									{q_id:'2', a_id:['7'] , sub_id:['3']}
								  ];
						showing = [1,2,4,5]; 
					break;

					case '10' : //ID : 10 Appartement
						pattern = [1,68,92,69,70,71,4,5]; 
						trigger = [];
						showing = [1,68,92,69,70,71,4,5]; 
					break;

					case '11' : //ID : 11  Maison
						pattern = [1,68,92,69,70,71,4,5]; 
						trigger = [];
						showing = [1,68,92,69,70,71,4,5]; 
					break;

					case '12' : //ID : 12  Studio
						pattern = [1,68,92,69,70,71,4,5]; 
						trigger = [];
						showing = [1,68,92,69,70,71,4,5]; 
					break;

					case '13' : //ID : 13  Extension - Survélévation
						pattern = [1,73,74,71,75,76,77,78,79,37]; 
						trigger = [];
						showing = [1,73,74,71,75,76,77,78,79,37]; 
					break;

					case '14' : //ID : 14  Bar-Restaurant-Commerce
						pattern = [1,80,81,82,83,84,50]; 
						trigger = [
							{q_id:'81', a_id:['186'] , sub_id:['82']},
							{q_id:'81', a_id:['142'] , sub_id:['83']}
						  ];
						showing = [1,80,81,84,50]; 
					break;
				} 


				var count = 0;
				res.questions.forEach((el) => {
					count++;
				});
				console.log(count+" : question")
				
					/* get and loop through question pattern */
					pattern.forEach((val) => {
					/* add questions to html */
					 res.questions.forEach((el) => {
						 if(el.id == val){
						     $('#additional').before('<section id="'+el.id+'" class="1st_stage">\
						     <h2 id="'+el.id+'" class="f-title">'+ el.question +'</h1>\
						     <h3 class="f-subtitle">'+ el.commentary +'</h3>\
						     <div class="container1">\
						     </div>\
						     <input type="button" name="previous" class="previous action-button" value="Précedent" />\
						     </section>');
						 }
						});	 
					});

					///// set active sections of questions /////////
					showing.forEach((act) => {
						$("#dynamic_frm").find("section#"+act).addClass("active");
					});
					///////add answers to html/////////
					res.questions.forEach((el) => {
						///////sort question by type (1/many choice(s) question)///////
						if(el.type == "no_btn"){
							/////////1 choice question////////
							el.answers.forEach((i) => { if(i.ansr_type=="btn"){
								//////input button answer///////
									$("#dynamic_frm").find("section#"+el.id+"> .container1").append('\
									<input type="button" id="'+i.id+'" class="one_press buttn" value="'+i.answer+'" />')
								}else if(i.ansr_type=="dim"){
									//////input button answer///////
									$("#dynamic_frm").find("section#"+el.id+"> .container1").append('\
									<input type="number" id="'+i.id+'" class="one_input input_buttn" placeholder="'+i.answer+' : cm"/>')
								}else if(i.ansr_type=="nbr"){
									$("#dynamic_frm").find("section#"+el.id+"> .container1").append('\
									<input type="text" id="'+i.id+'" class="one_input input_buttn" placeholder="'+i.answer+' : préciser nbr" />')
								}else{
									$("#dynamic_frm").find("section#"+el.id+"> .container1").append('\
									<input type="text" id="'+i.id+'" class="one_input input_buttn" placeholder="'+i.answer+' (préciser):" />')}
							})
	
						}else{
							el.answers.forEach((i) => { if(i.ansr_type=="btn"){
								$("#dynamic_frm").find("section#"+el.id+"> .container1").append('\
								<input type="button" id="'+i.id+'" class="multi_press buttn" value="'+i.answer+'" />')
							}else if(i.ansr_type=="dim"){
								$("#dynamic_frm").find("section#"+el.id+"> .container1").append('\
								<input type="number" id="'+i.id+'" class="precise_input input_buttn" placeholder="'+i.answer+' : cm"/>')
							}else if(i.ansr_type=="nbr"){
								$("#dynamic_frm").find("section#"+el.id+"> .container1").append('\
								<div style="float:left;margin-right:20px;margin-bottom:5px">\
								<label class="label_frm" for="'+i.id+'">'+i.answer+' :</label>\
								<p>Préciser nombre</p>\
								<div class="input-container">\
								<input type="checkbox" class="checkin" id="'+i.id+'" for="'+i.id+'">\
								<input type="number" id="'+i.id+'" class="multi_input input_number" value= "1" />\
								</div>\
								</div>')
							}else{
								$("#dynamic_frm").find("section#"+el.id+"> .container1").append('\
								<input type="text" id="'+i.id+'" class="multi_press input_buttn" placeholder="'+i.answer+' (préciser)..." />')}
						})
					}
					})
					});
	
			_callback();    
		};

	
		$("#start_quest").on("click",function secondFunction(e){
			e.preventDefault();
	
			// call first function and pass in a callback function which
			// first function runs when it has completed
			firstFunction(function() {
				///rfresh page content/////
			$("#note_card").hide();
			$("#back_paint").hide();
			$("#header_logo").hide();
			$("#msform_container").hide(); 
			$("#survey_layout").css("display","block"); 
			//////////////////////////////
	
	
			$("#dynamic_frm").on("click","input.one_press",function(){
				current_fs = $(this).parent().parent();
				next_fs = $(this).parent().parent().next();
				
				

				if($(this).hasClass("active")!=true){

					$(this).addClass("active");
					$(this).siblings().removeClass("active");

					showQuestion(current_fs,$(this),trigger);
					//activate next step on progressbar using the index of next_fs
					NavigateToNext(current_fs,next_fs);
					current_fs.find("input.long_btn").remove();
				}else{
					showQuestion(current_fs,$(this),trigger);
					//activate next step on progressbar using the index of next_fs
					NavigateToNext(current_fs,next_fs);
				}
			
			});
			


			$("#dynamic_frm").on("input","input.one_input",function(){
				current_fs = $(this).parent().parent();
				next_fs = $(this).parent().parent().next();
				this_input = $(this);

						// If the target is not the container or a child of the container, then process
						// the click event for outside of the container.
						if ($.trim(this_input.val())!="") {

							
							this_input.addClass("active");
							this_input.siblings().removeClass("active");
							if(current_fs.find("input.long_btn").length == false){
								current_fs.append("<input type='button' class='next long_btn' value='Valider'/>");
							}
						
						}else{
						$(this).removeClass("active");
						current_fs.find("input.long_btn").remove();
					
				}
			});
			
			////////////////////////////////////////////////////////////
		
			$("#dynamic_frm").on("click","input.multi_press",function(){
				current_fs = $(this).parent().parent();
		  		next_fs = $(this).parent().parent().parent();

		  	
				if($(this).attr('type') == "button"){
					if(($(this).hasClass("active")!=true)){

						$(this).addClass("active");	
						showQuestion(current_fs,$(this),trigger);
						
					}else{
						$(this).removeClass("active");
						showQuestion(current_fs,$(this),trigger);
					}
				}else{
					if(($(this).hasClass("active")!=true)  &&  ($(this).val()!="")){

						$(this).addClass("active");	
						showQuestion(current_fs,$(this),trigger);
						
					}else{
						$(this).removeClass("active");
						showQuestion(current_fs,$(this),trigger);
					}
				}
				var select = current_fs.find("input.multi_press.active").filter(function() {
					return this;
					
				});
	
				if((select.length!=0)) {
					if(current_fs.find("input.long_btn").length == false){
						current_fs.append("<input type='button' class='next long_btn' value='Valider'/>");
					}
				}else{
					$(this).removeClass("active");
					current_fs.find("input.long_btn").remove();
				}	
					
			});
	
			$("#dynamic_frm").on("input","input.precise_input",function(){
				current_fs = $(this).parent().parent();

				if(($(this).hasClass("precise_input active")!=true) &&($(this).val() != "")){

					

					$(this).addClass("active");

					showQuestion(current_fs,$(this),trigger);
					
	
					var empty = $(this).parent().find("input.precise_input").filter(function() {
						return this.value === "";
					});
					if((empty.length==0)) {
						if(current_fs.find("input.long_btn").length == false){
							current_fs.append("<input type='button' class='next long_btn' value='Valider'/>")
						}			
					}
				}else{
					$(this).removeClass("active");
					current_fs.find("input.long_btn").remove();
					showQuestion(current_fs,$(this),trigger);
				}
				
			});
	
			$("#dynamic_frm").on("input","input.multi_input",function(){
				current_fs = $(this).parent().parent().parent().parent();


				if($(this).hasClass("active")!=true){
					inputid = $(this).attr("id")
					checkbox = current_fs.find("input#"+inputid+".checkin");
					console.log(checkbox);
					if($(this).val() > 0){

						$(this).addClass("active");

						showQuestion(current_fs,$(this),trigger);
						

						if(checkbox.is(":checked")){
							return false;
						}else{
							checkbox.prop('checked', true);
						}
					}else{
					$(this).removeClass("active");

					showQuestion(current_fs,$(this),trigger);
					}
				}
				var select = current_fs.find("input.multi_input.active").filter(function() {
					return this;
					
				});
	
				if((select.length!=0)) {
					if(current_fs.find("input.long_btn").length == false){
						current_fs.append("<input type='button' class='next long_btn' value='Valider'/>")
					}
				}else{
		
					current_fs.find("input.long_btn").remove();
					showQuestion(current_fs,$(this),trigger);
				}	
				
			});
	
	
			$("#dynamic_frm").on("click","input.checkin",function(){
				current_fs = $(this).parent().parent().parent().parent();
					var checkid = $(this).attr("id"); 
					if($(this).is(":checked")){
						current_fs.find("input#"+checkid+".input_number").addClass("active");
					}else{
						current_fs.find("input#"+checkid+".input_number").removeClass("active");
					}
	
				
				var select = current_fs.find("input.multi_input.active").filter(function() {
					return this;
					
				});
	
				if((select.length!=0)) {
					if(current_fs.find("input.long_btn").length == false){
						current_fs.append("<input type='button' class='next long_btn' value='Valider'/>")
					}
				}else{
	
					current_fs.find("input.long_btn").remove();
				}	
	
			});
			
			
			$("#dynamic_frm").on("input","input.input_field",function(){
				
				if(($(this).hasClass("active")!=true)  ||  ($(this).val()!="")){

					$(this).addClass("active");	
					let long_btn = $(this).closest("section").find("input.long_btn");
					long_btn.css("box-shadow"," 0 0 15px 1px rgba(255, 255, 255, 0.5)");
					long_btn.val("Suivant");
				}else{
					$(this).removeClass("active");
					let long_btn = $(this).closest("section").find("input.long_btn");
					long_btn.val("Passez");
					long_btn.css("box-shadow","none");
				}
			});

			$("#dynamic_frm").on("input","textarea.big_input",function(){

				if(($(this).hasClass("active")!=true)  ||  ($(this).val()!="")){
					$(this).addClass("active");	
					let long_btn = $(this).closest("section").find("input.long_btn");
					long_btn.css("box-shadow"," 0 0 15px 1px rgba(255, 255, 255, 0.5)");
					long_btn.val("Suivant");
				}else{
				$(this).removeClass("active");
					let long_btn = $(this).closest("section").find("input.long_btn");
					long_btn.val("Passez");
					long_btn.css("box-shadow","none");
				}
			});


	
			$("#dynamic_frm").on("click","input.next",function(){
				current_fs = $(this).parent();
				next_fs = $(this).parent().next();
	
		  NavigateToNext(current_fs,next_fs);
			});
	
	
	
			$("#dynamic_frm").on("click","input.previous",function(){
				current_fs = $(this).parent();
				previous_fs = $(this).parent().prev();

		  NavigateBack(current_fs,previous_fs);
	
			});

			////////////////// store data function /////////////////

			$("#dynamic_frm").on("click","input#survey_end",function(){
				var lane = ""
				$( "#1st_summery" ).find("h2.sss_container").text();
				$( "#1st_summery" ).nextUntil( "#2nd_summery" ).each(function(){
					
					summery1_line = $(this);
					///////////
					obj1_q = summery1_line.find("div.question_line").text();
					lane = (obj1_q);
					summery1_line.find("div.answers").children("div").each(function(){
					lane = (lane+'||'+$(this).text());
					});
					console.log(lane);
					$("#registration").find("#form_container").append('<input type="text"\
					 										 class="hidden_element" id="categorie"\
															 name="data_1[]" value="'+lane+'" />');
					lane="";
					
				    //////////
				});
			
				$( "#2nd_summery" ).find("h2.sss_container").text();
				$( "#2nd_summery" ).nextUntil( "#3rd_summery" ).each(function(){
					summery2_line = $(this);
					///////////
					obj2_q = summery2_line.find("div.question_line").text();
					lane = (obj2_q);
					summery2_line.find("div.answers").children("div").each(function(){
						var path = $(this).find('div#file_img').children().attr("id");
						console.log('files : '+path);
						lane = (lane+'||'+path);
					});
						console.log(lane);
						$("#registration").find("#form_container").append('<input type="text"\
																			class="hidden_element" id="categorie"\
					    													name="data_2[]" value="'+lane+'" />');
						lane="";
					});
	
				$( "#3rd_summery" ).find("h2.sss_container").text();
				$( "#3rd_summery" ).nextUntil( "#submitting" ).each(function(){
					summery3_line = $(this);
					///////////
					obj3_q = summery3_line.find("div.question_line").text();
					lane = (obj3_q);

					summery3_line.find("div.answers").children("div").each(function(){
						lane = (lane+'||'+$(this).text());
					});
						console.log(lane);
						$("#registration").find("#form_container").append('<input type="text"\
																			class="hidden_element" id="categorie"\
					    													name="data_3[]" value="'+lane+'" />');
						lane="";
					});
			
					$("#survey_layout").hide();
					$("#survey_layout").hide();
					$("body").css("height", "100vh");
					$("#registration").css("display","flex").animate({opacity:'100%'});
				
						
			});

	
			///////////////////////////////////////////////////////
			
			
		// 	var winHeight = $(window).height(),
		// 	pages = $('.page'),
		// 	navLinks = $('#menu-nav a'),
		// 	currentPage = 0;
		// 	('html, body').animate({ scrollTop: 0}, 0);
		// 	$(window).on('mousewheel DOMMouseScroll', function(e){
		// 		var direction = 'down',
		// 		  $th = $(this),
		// 		currentPageOffset = currentPage * winHeight;
				
		// 		if (e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
		// 			direction = 'up';
		// 			alert("up")
		// 		}
			  
		// 	  if(direction == 'down' && currentPage <= pages.length - 2){
		// 		  $th.scrollTop(currentPageOffset + winHeight);
		// 		currentPage++;
		// 		alert("down")
		// 	  } else if(direction == 'up' && currentPage > 0) {
		// 		  $th.scrollTop(currentPageOffset - winHeight);
		// 		currentPage--;
		// 		alert("up")
		// 	}
		// });
	
			});    
		});
			
			
	
	
		/////////////////
		var categorie_id;
		var categorie;
		var ville;
		$("#confirmer").click(function(e){
			e.preventDefault();
			categorie_id = $("#categorie option:selected").attr("id");
			categorie = $("#categorie option:selected").val();
			ville = $.trim($("#ville").val());
			console.log(categorie_id)
			console.log(categorie)
			console.log(ville)
			if( categorie !== "" && ville !== ""){
				
				$("#errormsg").text("")
				//show the next section
				$("#msform_container").hide();
				$("#note_card").fadeIn();
				$('form#registration').find('input#categorie').val(categorie);
				$('form#registration').find('input#ville').val(ville);
			}			
			else {
				$("#errormsg").text("Vérifier les informations de remplissage")
			}
	
		});
	

		/********jointfile********/

		function viewfiles(input){

			// Get the selected file
			files = input[0].files;
			if(files.length > 0){
			   var fd = new FormData();
		       var CSRF_TOKEN = $('meta[name=csrf-token]').attr('content')
			   // Append data 
			   fd.append('file',files[0]);
			   fd.append('_token',CSRF_TOKEN);

			   var fileview_id = input.closest("section").attr("id");
			   var fileview = input.closest("section").find("#"+fileview_id+".joint_table");
			   var sum_line = $(".summery_table").find("#"+fileview_id);
			   var sum_line_answers = sum_line.find('.answers');
			   // AJAX request 
			   $.ajax({
				 url: "http://localhost/smdevis/public/try/upload",
				 method: 'post',
				 data: fd,
				 contentType: false,
				 processData: false,
				 dataType: 'json',
				 success: function(response){
					console.log(response.success);	
				   	if(response.success == 1){ // Uploaded successfully
						$('span#'+fileview_id).hide();
						$('<div class="joint_element">\
				 	 	<div  id="file_img" class="joint_pic"><img src="'+response.file+'" id="'+response.path+'" alt="IMG" /></div>\
				 	 	<div class="joint_name">'+response.file_name+'</div>\
				 	 	<div  class="joint_x"><img src="assets/images/x-mark.png" id="remove" alt="x"/></div>\
				     	</div>').appendTo(fileview,sum_line_answers);
					}else{
						$('span#'+fileview_id).text("échec du chargement de l'image");
						$('span#'+fileview_id).show().fadeOut(4000);
					}
					},error: function(){
						$('span#'+fileview_id).text("échec du chargement de l'image");
						$('span#'+fileview_id).show().fadeOut(4000);
					}
				    
			});
			}

		}
		
		/** *** upload actual photos file input handler *** */
		$('#actual_files').on('change', function() {
			var file = $(this);
			viewfiles(file);
		});
		/** *** upload inspire photos file input handler *** */
		$('#inspire_files').on('change', function() {
			var file = $(this);
			viewfiles(file);
		});
		/** *** upload plan photos file input handler *** */
		$('#plan_files').on('change', function() {
			var file = $(this);
			viewfiles(file);
		});
		
		/** *** delete image files *** */
		$("#dynamic_frm").on("click","div > img#remove ", function(){
			var xbtn_ref = $(this).parent().parent().find("div#file_img").children().attr("src");	
			var image = $(this).parent().parent().find("div#file_img").children().attr("id");
			var delete_element = $("#dynamic_frm").find('img[src^="'+xbtn_ref+'"]').closest(".joint_element");		
			delete_element.detach();
			
 				console.log(image);
      			var data = {
      			  'image' : image,
      			};
			  
      			$.post('http://localhost/smdevis/public/try/delete',
      			{
      			  '_token': $('meta[name=csrf-token]').attr('content'), data : data
				
      			}).done(function (res){
      			    console.log(res);
      			});
		  });


	
	});