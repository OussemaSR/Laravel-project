$(document).ready(function() {


	///////////////////////
	var d = new Date();
	var weekday = new Array(7);
		weekday[0] = "DIM";
		weekday[1] = "LUN";
		weekday[2] = "MAR";
		weekday[3] = "MER";
		weekday[4] = "JEU";
		weekday[5] = "VEN";
		weekday[6] = "SAM";

	var monthNames = ["January", "February", "March", "April", "May", "June",
  	"July", "August", "September", "October", "November", "December"
	];

	///////////////////////
	getCurrentDate(d);
	fillSchedulerTable(d);
	///////////////////////

	$body = $("body");

	$(document).on({
		ajaxStart: function() { $body.addClass("loading");    },
		ajaxStop: function() { $body.removeClass("loading"); }    
	});

	function update_calendar(){

			/////get dates  /////////
			$.get('http://localhost/smdevis/public/get_date',
		
			).done(function (res) {
				console.log(res.appointements);
				$('div.date_container').each(function(){
					stat = $(this).find('.date_txt');
					stat_date = $.trim(stat.text()); //// remove white space of edges/////
					res.appointements.forEach((dt) => {
					if(stat_date == dt.date){
						// console.log('this date :'+stat_date+' exist with time : '+dt.time);
						time_to_disable = stat.parent().parent().find('button:contains("'+dt.time+'")');
						if(time_to_disable.hasClass('activated_time_btn')==true){
							time_to_disable.removeClass('activated_time_btn');
							time_to_disable.addClass('disabled_time_btn');
						}
					}else{
						// console.log('*');
					}
					});
				});
				
			});
	}
	
	$(".container2").on("focus","Button",function() {
		var time_select = $(this);
		$("#validate_Modal").fadeIn( "slow" );
			var time_raw = time_select.text();
			var date_raw = time_select.closest(".schedule_tab_column").find(".date_container").find(".date_txt").text();
			var time = $.trim(time_raw);
			var date = $.trim(date_raw);
			
			var day_raw = parseInt(date_raw.substring(4,6));
			var month_raw = parseInt(date_raw.substring(7,9));
			var year_raw = parseInt(date_raw.substring(10,12))+2000;  
			var fulldate = new Date(''+month_raw+' '+day_raw+', '+year_raw+'');
            
			var day = fulldate.getDate() ;
			var day_week = weekday[fulldate.getDay()];;
			var month = monthNames[(fulldate.getMonth())+1];
			$("#validate_Modal").find("#date").val(date);
			$("#validate_Modal").find("#time").val(time);
			$("#validate_Modal").find(".time-zone").text(day_week+' '+day+' '+month+' '+year_raw+" à "+time);
			console.log("rendez-vous : "+date+" à "+time);
			$("#validate_Modal").on("click",".validate",function() {

					time_select.removeClass('activated_time_btn');
					time_select.addClass('disabled_time_btn');
				

					$("#validate_Modal").hide();
					$("#exit_modal").fadeIn( "slow" );
			});
	
	});

    /////////////////////////////////
	var today_is;
	function getCurrentDate(to){	
		var day = to.getDate();
		var month = to.getMonth()+1;
		var year = to.getFullYear();
		var n = weekday[to.getDay()];
		today_is = n + '.' +((''+day).length<2 ? '0' : '') + day +
		'/' +((''+month).length<2 ? '0' : '')+ month + '/' +(year.toString().slice(2, 4));
		console.log('today_is : '+today_is);
		return today_is;
	}

	//////////////////////////
	
	function fillSchedulerTable(dd){
		 var current_day =  dd.getDate();
		// var next_day = new Date();
		var t =0;
		var q=0;
			while(q<=6){
			var cutDate = new Date(dd.getTime() + t * 60 * 60 * 1000);
			q=q+1;
			t=t+24;
			console.log("**: "+cutDate);

		var day = cutDate.getDate();
		var month = cutDate.getMonth()+1;
		var year = cutDate.getFullYear();

  		var n = weekday[cutDate.getDay()];
	
		var output = n + '.' +((''+day).length<2 ? '0' : '') + day +
		 '/' +((''+month).length<2 ? '0' : '')+ month + '/' +(year.toString().slice(2, 4));
		 if(output == today_is){
		$('.left_arrow').hide();
		 $('.right_arrow').before('<div class="schedule_tab_column">\
                  					<div class="date_container">\
									<p class="date_txt">'+output+'</p>\
									<p class="today_marker">aujourdui</p>\
									</div>\
                  					<div class="buttons_align">\
                    				<button class="activated_time_btn">\
                    				07:00\
									</button>\
                    				<button class="activated_time_btn">\
                    				  07:30\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  08:00\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  08:30\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  09:00\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  09:30\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  10:00\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  10:30\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  11:00\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  11:30\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  12:00\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  12:30\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  13:00\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  13:30\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  14:00\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  14:30\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  15:00\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  15:30\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  16:00\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  16:30\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  17:00\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  17:30\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  18:00\
                    				</button>\
									<button class="activated_time_btn">\
                    				  18:30\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  19:00\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  19:30\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  20:00\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  20:30\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  21:00\
                    				</button>\
                    				<button class="activated_time_btn">\
                    				  21:30\
                    				</button>\
                  				</div>\
                			</div>');
		 }else{
					$('.right_arrow').before('<div class="schedule_tab_column">\
						<div class="date_container">\
				  			<p class="date_txt">'+output+'</p>\
				  			</div>\
								<div class="buttons_align">\
				  			<button class="activated_time_btn">\
				  			07:00\
				  			</button>\
				  			<button class="activated_time_btn">\
								07:30\
				  			</button>\
				  			<button class="activated_time_btn">\
								08:00\
				  			</button>\
				  			<button class="activated_time_btn">\
								08:30\
				  			</button>\
				  			<button class="activated_time_btn">\
								09:00\
				  			</button>\
				  			<button class="activated_time_btn">\
								09:30\
				  			</button>\
				  			<button class="activated_time_btn">\
								10:00\
				  			</button>\
				  			<button class="activated_time_btn">\
								10:30\
				  			</button>\
				  			<button class="activated_time_btn">\
								11:00\
				  			</button>\
				  			<button class="activated_time_btn">\
								11:30\
				  			</button>\
				  			<button class="activated_time_btn">\
								12:00\
				  			</button>\
				  			<button class="activated_time_btn">\
								12:30\
				  			</button>\
				  			<button class="activated_time_btn">\
								13:00\
				  			</button>\
				  			<button class="activated_time_btn">\
								13:30\
				  			</button>\
				  			<button class="activated_time_btn">\
								14:00\
				  			</button>\
				  			<button class="activated_time_btn">\
								14:30\
				  			</button>\
				  			<button class="activated_time_btn">\
								15:00\
				  			</button>\
				  			<button class="activated_time_btn">\
								15:30\
				  			</button>\
				  			<button class="activated_time_btn">\
								16:00\
				  			</button>\
				  			<button class="activated_time_btn">\
								16:30\
				  			</button>\
				  			<button class="activated_time_btn">\
								17:00\
				  			</button>\
				  			<button class="activated_time_btn">\
								17:30\
				  			</button>\
				  			<button class="activated_time_btn">\
								18:00\
				  			</button>\
				  			<button class="activated_time_btn">\
								18:30\
				  			</button>\
				  			<button class="activated_time_btn">\
								19:00\
				  			</button>\
				  			<button class="activated_time_btn">\
								19:30\
				  			</button>\
				  			<button class="activated_time_btn">\
								20:00\
				  			</button>\
				  			<button class="activated_time_btn">\
								20:30\
				  			</button>\
				  			<button class="activated_time_btn">\
								21:00\
				  			</button>\
				  			<button class="activated_time_btn">\
								21:30\
				  			</button>\
							</div>\
					</div>');

		 }
		}
		t=0;
		update_calendar();
	}
	/////////////////////////////////
	var first_edge;
	var last_edge;
	function getWeekEdges(){
		first_edge = $.trim(
			$("div.schedule_tab_column").first().find('.date_container').find('.date_txt').text());
		last_edge = $.trim(
			$("div.schedule_tab_column").last().find('.date_container').find('.date_txt').text());
		console.log('first_edge : '+first_edge);
		console.log('last_edge : '+last_edge);
		return first_edge,last_edge;
	}
	/////////////////////////////////
	function nextWeek(){
		$('.left_arrow').css('display','flex');
		getWeekEdges();
		var dday = parseInt(last_edge.substring(4,6));
		var mm = parseInt(last_edge.substring(7,9));
		var yy = parseInt(last_edge.substring(10,12))+2000;  
		var ggn = new Date(''+mm+' '+dday+', '+yy+'');
		var cdd = new Date(ggn.getTime() + 24 * 60 * 60 * 1000);
		// console.log('edge : '+ cdd);
		$("div.schedule_tab_column").detach();
		fillSchedulerTable(cdd);


		
	}
	function lastWeek(){
		getWeekEdges();
		var dday = parseInt(first_edge.substring(4,6));
		var mm = parseInt(first_edge.substring(7,9));  
		var yy = parseInt(last_edge.substring(10,12))+2000;
		var ggl = new Date(''+mm+' '+dday+', '+yy+'');
		for(i=0;i<=6;i++){
			ggl.setDate(ggl.getDate() - 1);
		}		
		$("div.schedule_tab_column").detach();
		fillSchedulerTable(ggl);
	}



	$('.right_arrow').on('click',function(){
		console.log('clicked');
		nextWeek();
		
		
	});


	$('.left_arrow').on('click',function(){
		console.log('clicked');
		lastWeek();
	});

	$('.close_cross').add('.redo').on('click',function(){
		console.log('clicked');
		$('#validate_Modal').hide();
	});

});