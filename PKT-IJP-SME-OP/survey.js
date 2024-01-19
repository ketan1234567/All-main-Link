$(document).ready(function() {
    var currentStep = 1;
    var formSubmitted = false;
    var tabSwitched = false;
    var timer; // Timer variable
    var questions; // Store loaded questions data
    
    // Load questions from JSON file
    $.getJSON("questions.json", function(data) {
        // console.log(data)
        questions = data;
        generateQuestions();
    });

    // Detect tab visibility change
    document.addEventListener("visibilitychange", function() {
        if (currentStep === 2 && !tabSwitched && document.visibilityState === 'hidden') {
            Swal.fire({
                title: "Warning",
                text: "You switched tabs. Your survey responses will be automatically submitted.",
                icon: "warning",
                showCancelButton: false,
                confirmButtonText: "OK"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Automatically submit the form data
                    $("#surveyForm").submit();
                    tabSwitched = true;
                }
            });
        }
    });

    // Prevent minimizing or tab switching
    $(window).on('blur', function() {
        if (currentStep === 2 && !formSubmitted && !tabSwitched) {
            Swal.fire({
                title: "Warning",
                text: "You are attempting to leave the page. Your survey responses will be automatically submitted.",
                icon: "warning",
                showCancelButton: false,
                confirmButtonText: "OK"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Automatically submit the form data
                    $("#surveyForm").submit();
                    tabSwitched = true;
                }
            });
        }
    });

    $("#nextButton").click(function() {
        if (currentStep === 1) {
            var empId = $("input[name='emp_id']").val();
           
            var department = $("input[name='department']").val();

            // Perform any necessary validation before proceeding
            if (empId && department ) {
                // Check if empId is already in the database
                $.ajax({
                    url: "check_emp_id.php", // Replace with your server-side script URL
                    method: "POST",
                    data: { emp_id: empId },
                    success: function(response) {
                        if (response === 'exists') {
                            Swal.fire("Error", "You have already submitted your survey.", "error");
                        } else {
                            // Display a confirmation dialog
                            Swal.fire({
                                title: 'Instructions',
                                html: "<ul style='text-align: left;font-size: 17px;line-height:30px;'><li>The PKT consist of 19 Multiple choice questios .</li><li>There is no time limit to complete the PKT.</li><li>The pkt would be automatically submitted if you switch the window/screen.</li><li>Good Luck !!</li></ul>",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Yes, proceed!',
                                cancelButtonText: 'No, cancel'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Request fullscreen
                                    var element = document.documentElement;
                                    if (element.requestFullscreen) {
                                        element.requestFullscreen();
                                    } else if (element.mozRequestFullScreen) {
                                        element.mozRequestFullScreen();
                                    } else if (element.webkitRequestFullscreen) {
                                        element.webkitRequestFullscreen();
                                    } else if (element.msRequestFullscreen) {
                                        element.msRequestFullscreen();
                                    }

                                    // Start the timer and proceed to Step 2
                                    // startTimer();
                                    $("#step1").hide();
                                    $("#step2").show();
                                    currentStep = 2;
                                }
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire("Error", "An error occurred. Please try again later.", "error");
                    }
                });
            } else {
                // Display an error message if data is missing
                Swal.fire("Error", "Please fill in all details", "error");
            }
        }
    });

   


    // Function to start the timer
    function startTimer() {
        var duration = 600; // Timer duration in seconds (5 minutes)
        var display = $("#timer");
        var minutes, seconds;

        // Update the timer display
        function updateDisplay() {
            minutes = parseInt(duration / 60, 10);
            seconds = parseInt(duration % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.text(minutes + ":" + seconds);

            if (--duration < 0) {
                // Timer expired, submit the form data
                clearInterval(timer);
                $("#surveyForm").submit();
            }
        }

        // Start the timer and update the display
        display.text("10:00");
        timer = setInterval(updateDisplay, 1000);
    }

    $("#surveyForm").submit(function(event) {
        event.preventDefault();


        var totalScore = 0;

        // let totalSecTaken=0;
        // let timeTaken = $("#timer").html();
        // let TotalTimeInSec = 10*60
        // timeTaken = timeTaken.split(':');
        // totalSecTaken=parseInt(timeTaken[0])*60;
        // totalSecTaken = totalSecTaken + parseInt(timeTaken[1]);
        // totalSecTaken = TotalTimeInSec - totalSecTaken;

       // let q19Ans = `MIS=${$("#q19-1").val()}==NCNS=${$("#q19-2").val()}==ICORE=${$("#q19-3").val()}==VAR=${$("#q19-4").val()}`
        // Calculate total score based on correct answers with a value of 1
        // for (var i = 0; i < questions.length; i++) {
        //     var questionObj = questions[i];
        //     var selectedValue = $("input[name='q" + (i + 1) + "']:checked").val();

        //     // If no option is selected, set selectedValue to NULL
        //     if (!selectedValue) {
        //         selectedValue = null;
        //     }
            
        //     // Check if the selected value is the correct answer with a value of 1
        //     if (selectedValue === "1") {
        //         var correctAnswer = questionObj.options.find(option => option.val === "1");
        //         if (selectedValue === correctAnswer.val) {
        //             totalScore++;
        //         }
        //     }
        // }
        // Include total score in the form data

        // $(this).append("<input type='hidden' name='timeTaken'  value='" + totalSecTaken + "'>");

       // $(this).append("<input type='hidden' name='q19'  value='" + q19Ans + "'>");
        // $(this).append("<p>'" + totalScore + "'</p>");

        // Perform any necessary validation before submitting
        if (!formSubmitted) {
            // Set formSubmitted to true to prevent further submission attempts
            formSubmitted = true;
           console.log($(this).serialize());
            // AJAX call to submit form data
            $.ajax({
                url: "process_survey.php", // Replace with your server-side script URL
                method: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response);
                    Swal.fire("Success", "Survey submitted successfully", "success").then((result) => {
                    
                        if (result.isConfirmed) {
                            // Redirect to test.html page
                            window.location.href = "pkt.html";
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.log(error);
                    Swal.fire("Error", "An error occurred. Please try again later.", "error");
                }
            });
        }
        //  else {
        //     Swal.fire("Info", "Survey has already been submitted.", "info");
        // }
    });

    function generateQuestions() {
        var questionContainer = $("#questionContainer");
        questionContainer.empty(); // Clear any existing questions
           
        // Loop through the questions array and generate HTML
       for (var i = 0; i < questions.length; i++) {
            var questionObj = questions[i];
            var questionHTML = `<div class="single_Q_Div"><div class="quetionDiv" ><p>${questionObj.q}</p></div>`;
            
			if(questionObj.options=='text'){
				questionHTML += `
                     
                       <div onclick='afterClickRadioBtn(${i+1})'>
                       <br>
                            <textarea class="inputCustom" required style="height: 200px;border: none;width: 100%;border-bottom: 2px solid #00005c;border: 1px solid #7e7e7e;border-bottom: 4px solid #00005c;padding: 10px 10px;border-radius: 5px;outline: none;" name="q${i+1}" ></textarea>
                        </div>
                            
                     `;
           
            //questionHTML +=`</div>`
            questionContainer.append(questionHTML);
          //  $(".inputCustom").css({'padding':'0px','width':'50%'})
        }
			else{
            for (var j = 0; j < questionObj.options.length; j++) {
                var option = questionObj.options[j];
                questionHTML += `
                    <div class="opitonDiv">
                        <label class="radio_label" onclick='afterClickRadioBtn(${i+1})'>
                            <input class="radio_type" type="radio" value="${option.val}" name="q${i+1}" required />
                            <span class="radio_span">${option.opt}</span>
                        </label>
                    </div>`;
            }
            questionHTML +=`</div>`
            questionContainer.append(questionHTML);
        }
    
    }
}
    
});

// ---------------------------------- raj added JS -----------------------------

let slideTraker=0;
let maxques = 17; // Total Quetion mention here...
let activeQue = 1;
$('#nextBtn').click(function (e) { 
    e.preventDefault();

    // Add the 'required' attribute to the input fields based on activeQue
    setRequiredAttribute(activeQue);

    if (activeQue == maxques-1) {
        $('#nextBtn').css('display', 'none');
        $('#submitButton').css('display', 'inline-block');
    }
    if (activeQue == maxques) {
        activeQue = maxques;
    } else {
        activeQue++;
        $('.single_Q_Div').css({'transform': `translateX(-${slideTraker+=105.25}%)`});
        currentQueDisplayTraker(activeQue);
    }
});

$('#preBtn').click(function (e) { 
    e.preventDefault();
    $('#submitButton').css('display', 'none');
    $('#nextBtn').css('display', 'inline-block');
    if (activeQue == 1) {
        activeQue = 1;
    } else {
        activeQue--;
        $('.single_Q_Div').css({'transform': `translateX(-${slideTraker-=105.25}%)`});
        currentQueDisplayTraker(activeQue);
    }

    // Remove the 'required' attribute from all input fields when going back
    removeRequiredAttribute();
});

function setRequiredAttribute(activeQue) {
    // Example: Add 'required' to input fields with name="q1", name="q2", etc.
    $(`input[name='q${activeQue}']`).prop('required', true);
    // You can add similar lines for other types of form elements (textarea, radio, checkbox, etc.)
}

function removeRequiredAttribute() {
    // Example: Remove 'required' from all input fields
    $('input').prop('required', false);
    // You can add similar lines for other types of form elements (textarea, radio, checkbox, etc.)
}

function afterClickRadioBtn(activeQue){
	
	
    // $(`#queIndicator-${activeQue}`).css('background-color','#008f2594 !important');
    $(`#queIndicator-${activeQue}`).addClass('queIndicatorChecked');
}

function currentQueDisplayTraker(crntQue){
    $(`.queIndicator`).css({'background-color': '#00698f63','transform': 'scale(1)'});
    $(`#queIndicator-${crntQue}`).css({'background-color': '#208abd','transform': 'scale(1.15)','transition': '0.3s ease'});
}
currentQueDisplayTraker(activeQue);
