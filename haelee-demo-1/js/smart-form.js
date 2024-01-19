	$(function(){
			
			$("#smart-form").steps({
				bodyTag: "fieldset",
				headerTag: "h2",
				bodyTag: "fieldset",
				
				titleTemplate: "<span class='number'>#index#</span> #title#",
				labels: {
					finish: "Submit",
					next: "Next",
					previous: "Previous",
					loading: "Loading..." 
				},
				onStepChanging: function (event, currentIndex, newIndex){
					if (currentIndex > newIndex){return true; }
					var form = $(this);
					if (currentIndex < newIndex){}
					return form.valid();
				},
				onStepChanged: function (event, currentIndex, priorIndex){
				},
				onFinishing: function (event, currentIndex){
					var form = $(this);
					form.validate().settings.ignore = ":disabled";
					return form.valid();
				},
				onFinished: function (event, currentIndex){
					var form = $(this);
					form.submit();				
				}
			}).validate({
			
			
				errorClass: "state-error",
				validClass: "state-success",
				errorElement: "em",
				onkeyup: false,
				onclick: false,
				rules: {
					firstname: {
						required: true
					},
					lastname: {
						required: true
					},					
					emailaddress: {
						required: true,
						email: true
					},
					company: {
						required: true
					},
					jobtitle: {
						required: true
					},
					'data[0]': {
						 required: true,
						 maxlength:1
					},
					'data[1]': {
						required: true,
						maxlength:1
				   },
				   'data[2]': {
					required: true,
					maxlength:1
			   },
			   'data[3]': {
				required: true,
				maxlength:1
		   },
                    'data[4]': {
						 required: true,
						 maxlength:1
					},
					'data[5]': {
						 required: true,
						 maxlength:1
					},
					'data[6][]': {
						 required: true,minlength:1,
						 maxlength:3
					},
					'data[7][]': {
						 required: true,minlength:1
						 //maxlength:1
					},
					'data[8][]': {
						 required: true,minlength:1
						 //maxlength:1
					},
					'data[9]': {
						 required: true,
						 maxlength:1
					},
					'data[10][]': {
						 required: true,minlength:1,
						 maxlength:3
					},
					'data[11][]': {
						 required: true,minlength:1
						 //maxlength:1
					}
                					
				},
				messages: {
					firstname: {
						required: "Please enter firstname"
					},
					lastname: {
						required: "Please enter lastname"
					},
					emailaddress: {
						required: 'Please enter your email',
						email: 'You must enter a VALID email'
					},				
					company: {
						required: "Please enter the Company"
					},
					jobtitle:{
						required: 'Please enter Job Title'
					},
                    "data[0]":{
						required: 'Please select option'
					},
                    "data[1]":{
						required: 'Please select option'
					},
                    "data[2]":{
						required: 'Please select option'
					},
                    "data[3]":{
						required: 'Please select option'
					},
                    "data[4]":{
						required: 'Please select at least 1 option'
					},
					"data[5]":{
						required: 'Please select at least 1 option'
					},
					"data[6]":{
						required: 'Please select at least 1 option'
					},
					"data[7]":{
						required: 'Please select at least 1 option'
					},
					"data[8]":{
						required: 'Please select at least 1 option'
					},
					"data[9]":{
						required: 'Please select option'
					},
					"data[10]":{
						required: 'Please select at least 1 option'
					},
					"data[11]":{
						required: 'Please select at least 1 option'
					}   
					
				},
				highlight: function(element, errorClass, validClass) {
					$(element).closest('.field').addClass(errorClass).removeClass(validClass);
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).closest('.field').removeClass(errorClass).addClass(validClass);
				},
				errorPlacement: function(error, element) {
					if (element.attr("name") == "data[0]") {
						error.appendTo(element.parent().parent().find('.messagebox').first());
						
					}else if (element.attr("name") == "data[1]") {
						error.appendTo(element.parent().parent().find('.messagebox').first());
					} else if (element.attr("name") == "data[2]") {
						error.appendTo(element.parent().parent().find('.messagebox').first());
					} else if (element.attr("name") == "data[3]") {
						error.appendTo(element.parent().parent().find('.messagebox').first());
					}  else if (element.is(":radio") || element.is(":checkbox")) {
						element.closest('.option-group').after(error);
					} else {
						error.insertAfter(element.parent());
					}

					
				}
			
			});
			
			/* Reload Captcha
			----------------------------------------------- */	
			function reloadCaptcha(){ $("#captchax").attr("src","php/captcha/captcha.php?r=" + Math.random()); }
			$('.captcode').click(function(e){
				e.preventDefault();
				reloadCaptcha();
			});			
			
			/* Project datepicker range
			----------------------------------------------- */			
			$("#start_date").datepicker({
				defaultDate: "+1w",
				changeMonth: false,
				numberOfMonths: 1,
				prevText: '<i class="fa fa-chevron-left"></i>',
				nextText: '<i class="fa fa-chevron-right"></i>',
				onClose: function( selectedDate ) {
					$( "#end_date" ).datepicker( "option", "minDate", selectedDate );
				}
			});
			
			$("#end_date").datepicker({
				defaultDate: "+1w",
				changeMonth: false,
				numberOfMonths: 1,
				prevText: '<i class="fa fa-chevron-left"></i>',
				nextText: '<i class="fa fa-chevron-right"></i>',			
				onClose: function( selectedDate ) {
					$( "#start_date" ).datepicker( "option", "maxDate", selectedDate );
				}
			});
					
	}); 