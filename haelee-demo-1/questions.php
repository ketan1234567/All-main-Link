<?php

/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 */

$firstname = $_POST["firstname"];
$temp = implode(",", $_POST["data"]);
$temp = $firstname.','.$temp;

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Take the Financial Planning and Analysis Quiz!     </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css"  href="css/smart-forms-111.css">
    <link rel="stylesheet" type="text/css"  href="css/smart-addons.css">
    <link rel="stylesheet" type="text/css"  href="css/font-awesome.min.css">
    
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.steps.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-custom.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/additional-methods.min.js"></script>    
    <script type="text/javascript" src="js/jquery.form.min.js"></script>
    <script type="text/javascript" src="js/smart-form.js"></script>    

    <link rel="stylesheet" href="sky-forms.css">
  <style>
  
  ul[aria-label="Pagination"] .disabled{
  display:none;
  }


  label{
    display: block;
  }

  table td{
    width: calc(100%/4);
    justify-content: start;
    vertical-align: text-top;
  }


  table td input[type="radio"]{
    visibility: hidden;
  }

  .wizard > .actions a, .wizard > .actions a:hover, .wizard > .actions a:active{
    background-color: #4c77c7;
    opacity: 0.8;
    transition: opacity 0.2s;
    -o-transition: opacity 0.2s;
    -ms-transition: opacity 0.2s;
    -moz-transition: opacity 0.2s;
    -webkit-transition: opacity 0.2s;
    border-radius: 0;
    min-width: 100px;
    text-align: center;
}


.form-body{
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%);
}



.smart-forms label{
  
}


.messagebox{
	color:red;
}
  </style>
</head>

<body class="darkbg">

	<div class="smart-wrap">
    	<div class="smart-forms wrap-1" style="width:1700px;margin-top:30px; margin-left:250px;">
			
				<div  style="margin-bottom: 30px;">
					<img src="https://www.itbusinessplus.com/Tech-Score/survey-demo-1/itbp_logo_2019.png" width="210px" style="padding-left:30px;">
					
				</div>
            	<div class="form-body smart-steps stp-three">
                 <form method="POST" action="send_email.php" id="smart-form">
				   <input type="hidden" name="firstname" value="<?php echo $firstname; ?>"/>
                    <input type="hidden" name="temp" value="<?php echo $temp; ?>"/>
							<!--<h2> </h2>
							 <fieldset>
							 <h3><font color="#aaaaaa" style="font-size:38px;">
							Take the Data-Driven Transformation Quiz!      
							 </font>
							 </h3><br>
								<div class="row">
									<div class="col-sm-10 col-sm-offset-1">
										<div class="col-sm-12" style="font-size:16px;  text-align: justify; ">			

										   <p>
										   
										   
										 Banks and financial institutions have weathered the storm of the pandemic, but they now must focus on modernizing outdated processes if they want to accelerate their journeys toward becoming digital enterprises. Insurance companies have also survived but are facing significant operational challenges due to both the pandemic and a rise in natural disasters. Both financial institutions and insurance organizations feel the effects of the current unfavorable economic conditions driven by high interest rates and the economic downturn.
										<br><br>
										Financial institutions and insurance organizations need to meet these challenges by updating their technology infrastructure through the cloud and investing in advanced analytics.
										<br><br>
										Take the Data-Driven Transformation Quiz to establish what kind of buyer you are, and we&#8217;ll instantly deliver the most helpful content so that you can achieve your goals.

										   </p> 

										
										   <br><br>
										</div>
									</div>
									
								</div>
							 </fieldset>--> 
				 
								<h2> </h2>
								<fieldset>
                            	<div class="section spacer-t10">
                                	<h1 style="color:#aaaaaa;">1. Tell us about your organization    </h1>
                                </div>

                                <div class="frm-row">
                                	<div class="option-group field">
                                        
										
                                      

                                        <table style="padding: 10px;width:100%;">
                                                    <tr>
												
                                                        <td>
                                                            <b>a. Type of organization</b>
                                                            <div>
                                                                <label class="validation_error_message help-block"></label>
                                                            <label >
                                                                <input type="radio" name="data[0]" value="Physician group" class="customError">
                                                                <span class="radio"></span> Physician group
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[0]" value="Hospital/Health System" class="customError">
                                                                <span class="radio"></span> Hospital/Health System 
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[0]" value="Digital Health Company" class="customError">
                                                                <span class="radio"></span> Digital Health Company  
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[0]" value="Other" class="customError">
                                                                <span class="radio"></span> Other
                                                            </label>
                                                            <div class="messagebox"></div>
                                                        </div>
														
														<br><br>
														<div class="section colm colm3">
                                            <img src="haelee_logo.jpg" width="150px"/>
                                        </div><!-- end section -->
                                                        </td>
                                                       <!-- <td>
                                                            <b>b. Number of providers</b>
                                                            

                                                                <div>
                                                            <label >
                                                                <input type="radio" name="data[1]" value="&gt;10">
                                                                <span class="radio"></span> &gt;10
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[1]" value="10-50">
                                                                <span class="radio"></span> 10-50 
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[1]" value="50-100">
                                                                <span class="radio"></span> 50-100  
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[1]" value="100+">
                                                                <span class="radio"></span> 100+
                                                            </label>
                                                            <div class="messagebox"></div>
                                                        </div>

                                                        </td> -->
                                                        <td>
                                                            <b>b. Type of service</b>

                                                            <div>
                                                            <label >
                                                                <input type="radio" name="data[2]" value="Primary Care">
                                                                <span class="radio"></span> Primary Care
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[2]" value="Specialty Care">
                                                                <span class="radio"></span> Specialty Care 
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[2]" value="Emergency Care">
                                                                <span class="radio"></span> Emergency Care  
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[2]" value="Urgent Care">
                                                                <span class="radio"></span> Urgent Care
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[2]" value="Long-term Care">
                                                                <span class="radio"></span> Long-term Care
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[2]" value="Hospice Care">
                                                                <span class="radio"></span> Hospice Care
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[2]" value="Mental Healthcare">
                                                                <span class="radio"></span> Mental Healthcare
                                                            </label>
															 <label >
                                                                <input type="radio" name="data[2]" value="Other">
                                                                <span class="radio"></span> Other
                                                            </label>
                                                            <div class="messagebox"></div>
                                                            </div>


                                                        </td>
                                                        <td>

                                                            <b>c. Type of specialty</b>
                                                            <div>
                                                            <label >
                                                                <input type="radio" name="data[3]" value="Internal medicine">
                                                                <span class="radio"></span> Internal medicine
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[3]" value="Pediatrics">
                                                                <span class="radio"></span> Pediatrics 
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[3]" value="Family medicine">
                                                                <span class="radio"></span> Family medicine  
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[3]" value="OB-GYN">
                                                                <span class="radio"></span> OB-GYN
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[3]" value="Cardiology">
                                                                <span class="radio"></span> Cardiology
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[3]" value="Psychiatry">
                                                                <span class="radio"></span> Psychiatry
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[3]" value="Dermatology">
                                                                <span class="radio"></span> Dermatology
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[3]" value="Endocrinology">
                                                                <span class="radio"></span> Endocrinology
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[3]" value="Oncology">
                                                                <span class="radio"></span> Oncology
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[3]" value="Surgery">
                                                                <span class="radio"></span> Surgery
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[3]" value="Not applicable">
                                                                <span class="radio"></span> Not applicable
                                                            </label>
                                                            <label >
                                                                <input type="radio" name="data[3]" value="Other">
                                                                <span class="radio"></span> Other
                                                            </label>
                                                            <div class="messagebox"></div>
                                                            </div>
                                                        </div>
                                                        </td>
                                                    </tr>

                                        </table>
										
										<div class="section colm colm9" style="margin-left:0px;margin-top:30px;font-size:16px;">
                                           
											
                                        </div><!-- end section -->
                                    </div><!-- .option-group -->                
                                </div><!-- end frm-row section --> 	
                                   
                            </fieldset>







							<h2> </h2>
								<fieldset>
                            	<div class="section spacer-t10">
                                	<h1 style="color:#aaaaaa;">2. How much do you use telehealth? (select the most applicable)
                                    </h1>
                                </div>
                                <div class="frm-row">
                                	<div class="option-group field">
                                        <div class="section colm colm3">
                                            <img src="haelee_logo.jpg" width="180px"/>
                                        </div><!-- end section -->
										
										<div class="section colm colm9" style="margin-left:0px;margin-top:30px;">
                                            <label class="option block">
                                                <input type="radio" name="data[4]" value="We apply virtual-first care model">
                                                <span class="radio"></span> We apply virtual-first care model
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="radio" name="data[4]" value="We apply hybrid care model">
                                                <span class="radio"></span> We apply hybrid care model 
                                            </label>
											<label class="option block spacer-t10">
                                                <input type="radio" name="data[4]" value="We use telehealth need-based, only when required by the patient">
                                                <span class="radio"></span> We use telehealth need-based, only when required by the patient  
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="radio" name="data[4]" value="We use telehealth for chronic disease management">
                                                <span class="radio"></span> We use telehealth for chronic disease management  
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="radio" name="data[4]" value="Telehealth is not a priority">
                                                <span class="radio"></span> Telehealth is not a priority  
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="radio" name="data[4]" value="Other">
                                                <span class="radio"></span> Other  
                                            </label>
                                        
                                            
											
										</div><!-- end section -->
                                    </div><!-- .option-group -->                
                                </div><!-- end frm-row section --> 
                            </fieldset>
							
							<h2> </h2>
								<fieldset>
                            	<div class="section spacer-t10">
                                	<h1 style="color:#aaaaaa;">3. How do you currently manage telehealth?  </h1>
                                </div>
                                <div class="frm-row">
                                	<div class="option-group field">
                                        <div class="section colm colm3">
                                            <img src="haelee_logo.jpg" width="180px"/>
                                        </div><!-- end section -->
										
										<div class="section colm colm9" style="margin-left:0px;margin-top:30px;">
                                            <label class="option block">
                                                <input type="radio" name="data[5]" value="Not doing any telehealth">
                                                <span class="radio"></span> Not doing any telehealth
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="radio" name="data[5]" value="Using an in-house built tool">
                                                <span class="radio"></span>  
												Using an in-house built tool
                                            </label> 
											<label class="option block spacer-t10">
                                                <input type="radio" name="data[5]" value="Using our EHR/practice management tool">
                                                <span class="radio"></span> Using our EHR/practice management tool
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="radio" name="data[5]" value="Using separate non-specialized tools (e.g. Skype, email, spreadsheets, notes, calendar)">
                                                <span class="radio"></span> Using separate non-specialized tools (e.g. Skype, email, spreadsheets, notes, calendar)
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="radio" name="data[5]" value="Using separate specialized tools (E.g. Zoom for Health in combination with a scheduling tool)">
                                                <span class="radio"></span> Using separate specialized tools (E.g. Zoom for Health in combination with a scheduling tool)
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="radio" name="data[5]" value="Using a unified specialized platform for telehealth (communication, scheduling, intake, 
                                                payments, etc.)">
                                                <span class="radio"></span> Using a unified specialized platform for telehealth (communication, scheduling, intake, 
                                                payments, etc.)
                                            </label>

										
											</div><!-- end section -->
                                    </div><!-- .option-group -->                
                                </div><!-- end frm-row section --> 
                            </fieldset>
							
							<h2> </h2>
								<fieldset>
                            	<div class="section spacer-t10">
                                	<h1 style="color:#aaaaaa;">4. What are the biggest barriers to telehealth adoption for your organization? (select up to 3)
                                        </h1>
                                </div>
                                <div class="frm-row">
                                	<div class="option-group field">
                                        <div class="section colm colm3">
                                            <img src="haelee_logo.jpg" width="180px"/>
                                        </div><!-- end section -->
										
										<div class="section colm colm9" style="margin-left:0px;margin-top:30px;">
                                            <label class="option block">
                                                <input type="checkbox" name="data[6][]" value="Coverage of telehealth services, payment and reimbursement policies">
                                                <span class="checkbox"></span> Coverage of telehealth services, payment and reimbursement policies
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[6][]" value="State licenses">
                                                <span class="checkbox"></span> State licenses
                                            </label>
											<label class="option block spacer-t10">
                                                <input type="checkbox" name="data[6][]" value="Aging population and technology challenges of patients">
                                                <span class="checkbox"></span> Aging population and technology challenges of patients
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[6][]" value="Security issues and liability">
                                                <span class="checkbox"></span> Security issues and liability
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[6][]" value="Integration with the EHR and other tools">
                                                <span class="checkbox"></span> Integration with the EHR and other tools
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[6][]" value="Lack of IT resources within the organization">
                                                <span class="checkbox"></span> Lack of IT resources within the organization
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[6][]" value="Hard to fit technology to the processes and workflows">
                                                <span class="checkbox"></span> Hard to fit technology to the processes and workflows
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[6][]" value="Physicians burnout and technology fatigue">
                                                <span class="checkbox"></span> Physicians burnout and technology fatigue
                                            </label>
											<label class="option block spacer-t10">
                                                <input type="checkbox" name="data[6][]" value="Other">
                                                <span class="checkbox"></span> Other
                                            </label>


                                        

											
											</div><!-- end section -->
                                    </div><!-- .option-group -->                
                                </div><!-- end frm-row section --> 
                            </fieldset>
							
							    <h2> </h2>
								<fieldset>
                            	<div class="section spacer-t10">
                                	<h1 style="color:#aaaaaa;">5.   Is your telehealth solution integrated with any other internal system? (Select all that apply)
                                    </h1>
                                </div>
                                <div class="frm-row">
                                	<div class="option-group field">
                                        <div class="section colm colm3">
                                            <img src="haelee_logo.jpg" width="180px"/>
                                        </div><!-- end section -->
										
										<div class="section colm colm9" style="margin-left:0px;margin-top:30px;">
                                            <label class="option block">
                                                <input type="checkbox" name="data[7]" value="EHR/EMR">
                                                <span class="checkbox"></span> EHR/EMR
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[7]" value="Scheduling">
                                                <span class="checkbox"></span> Scheduling
                                            </label>
											<label class="option block spacer-t10">
                                                <input type="checkbox" name="data[7]" value="Payments">
                                                <span class="checkbox"></span> Payments
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[7]" value="E-prescription">
                                                <span class="checkbox"></span> E-prescription
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[7]" value="Remote patient monitoring">
                                                <span class="checkbox"></span> Remote patient monitoring
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[7]" value="Not integrated">
                                                <span class="checkbox"></span> Not integrated
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[7]" value="Not sure">
                                                <span class="checkbox"></span> Not sure
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[7]" value="Not applicable">
                                                <span class="checkbox"></span> Not applicable
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[7]" value="Other">
                                                <span class="checkbox"></span> Other
                                            </label>


                                        </div><!-- end section -->
                                    </div><!-- .option-group -->                
                                </div><!-- end frm-row section --> 
                            </fieldset>
							
                            <h2> </h2>
                            <fieldset>
							<div class="section spacer-t10">
                                	<h1 style="color:#aaaaaa;">6. Which statement(s) currently apply to the overall use of digital health technology at your 
                                        practice? (Select all that apply)
                                              </h1>
                                </div>
                                <div class="frm-row">
                                	<div class="option-group field">
                                        <div class="section colm colm3">
                                            <img src="haelee_logo.jpg" width="180px"/>
                                        </div><!-- end section -->
										
										<div class="section colm colm9" style="margin-left:0px;margin-top:30px;">
                                            <label class="option block">
                                                <input type="checkbox" name="data[8]" value="Too many disconnected tools, hard to follow information">
                                                <span class="checkbox"></span> Too many disconnected tools, hard to follow information
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[8]" value="Difficult for providers to learn the tools">
                                                <span class="checkbox"></span> Difficult for providers to learn the tools
                                            </label>
											<label class="option block spacer-t10">
                                                <input type="checkbox" name="data[8]" value="Flawed patient journeys for scheduling, intake, care transitions">
                                                <span class="checkbox"></span> Flawed patient journeys for scheduling, intake, care transitions
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[8]" value="Not enough features/functionalities for all our use cases">
                                                <span class="checkbox"></span> Not enough features/functionalities for all our use cases
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[8]" value="Current tools don’t perform according to expectations/needs">
                                                <span class="checkbox"></span> Current tools don’t perform according to expectations/needs
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[8]" value="Trying to fit processes to existing technologies">
                                                <span class="checkbox"></span> Trying to fit processes to existing technologies
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[8]" value="Need for more automation to improve staff efficiency">
                                                <span class="checkbox"></span> Need for more automation to improve staff efficiency
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[8]" value="Need for more awareness of our services among patients">
                                                <span class="checkbox"></span> Need for more awareness of our services among patients
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[8]" value=" Need for more business analysis and reporting visibility">
                                                <span class="checkbox"></span>  Need for more business analysis and reporting visibility
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[8]" value="Need to provide more personalized care/attention to patient">
                                                <span class="checkbox"></span>  Need to provide more personalized care/attention to patient
                                            </label>
											<label class="option block spacer-t10">
                                                <input type="checkbox" name="data[8]" value="None applies">
                                                <span class="checkbox"></span>  None applies

                                            </label>



										
                                        </div><!-- end section -->
                                    </div><!-- .option-group -->                
                                </div>
                            </fieldset>
							
							<h2> </h2>
                            <fieldset>
							<div class="section spacer-t10">
                                	<h1 style="color:#aaaaaa;">7. How likely are you to implement a new telehealth solution in the next year</h1>
                                </div>
                                <div class="frm-row">
                                	<div class="option-group field">
                                        <div class="section colm colm3">
                                            <img src="haelee_logo.jpg" width="180px"/>
                                        </div><!-- end section -->
										
										<div class="section colm colm9" style="margin-left:0px;margin-top:30px;">
										<div style="display: flex;
    flex-direction: row;
    align-items: center;
    flex-wrap: wrap;
    align-content: flex-start;
    justify-content: space-evenly;
}">
                                            <label class="option block">
                                                 Not likely
                                            </label>
											 <label class="option block">
                                                <input type="radio" name="data[9]" value="0">
                                                <span class="radio"></span> 
                                            </label>
											 <label class="option block">
                                                <input type="radio" name="data[9]" value="1">
                                                <span class="radio"></span> 
                                            </label>
											 <label class="option block">
                                                <input type="radio" name="data[9]" value="2">
                                                <span class="radio"></span> 
                                            </label>
											 <label class="option block">
                                                <input type="radio" name="data[9]" value="3">
                                                <span class="radio"></span> 
                                            </label>
											 <label class="option block">
                                                <input type="radio" name="data[9]" value="4">
                                                <span class="radio"></span> 
                                            </label>
											 <label class="option block">
                                                <input type="radio" name="data[9]" value="5">
                                                <span class="radio"></span> 
                                            </label>
                                            <label class="option block spacer-t10">
                                                Very likely
                                            </label>
										
										</div>
                                        </div><!-- end section -->
                                    </div><!-- .option-group -->                
                                </div>
                            </fieldset>
							<h2> </h2>
                            <fieldset>
							<div class="section spacer-t10">
                                	<h1 style="color:#aaaaaa;">8.  When selecting a telehealth solution, what is important to you? (choose up to 3) </h1>
                                </div>
                                <div class="frm-row">
                                	<div class="option-group field">
                                        <div class="section colm colm3">
                                            <img src="haelee_logo.jpg" width="180px"/>
                                        </div><!-- end section -->
										
										<div class="section colm colm9" style="margin-left:0px;margin-top:30px;">
                                            <label class="option block">
                                                <input type="checkbox" name="data[10][]" value="Ability to integrate with EHR and other internal systems">
                                                <span class="checkbox"></span> Ability to integrate with EHR and other internal systems
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[10][]" value="Features our own brand">
                                                <span class="checkbox"></span> Features our own brand  
                                            </label>
											<label class="option block spacer-t10">
                                                <input type="checkbox" name="data[10][]" value="Configurable to our workflows">
                                                <span class="checkbox"></span> Configurable to our workflows
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[10][]" value="Easy to use, convenient">
                                                <span class="checkbox"></span> Easy to use, convenient
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[10][]" value="Comprehensive feature set – single solution">
                                                <span class="checkbox"></span> Comprehensive feature set – single solution
                                            </label>
											
											 <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[10][]" value="Speed of setup">
                                                <span class="checkbox"></span> Speed of setup
                                            </label>
											 <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[10][]" value="No internal resources needed to implement">
                                                <span class="checkbox"></span> No internal resources needed to implement
                                            </label>
											 <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[10][]" value="Extensive tech support">
                                                <span class="checkbox"></span> Extensive tech support
                                            </label>
											<label class="option block spacer-t10">
                                                <input type="checkbox" name="data[10][]" value="Cost">
                                                <span class="checkbox"></span> Cost
                                            </label>
											<label class="option block spacer-t10">
                                                <input type="checkbox" name="data[10][]" value="Security and compliance">
                                                <span class="checkbox"></span> Security and compliance
                                            </label>
											<label class="option block spacer-t10">
                                                <input type="checkbox" name="data[10][]" value="Reference from the market (known vendor)
">
                                                <span class="checkbox"></span> Reference from the market (known vendor)

                                            </label>
											


											</div><!-- end section -->
                                    </div><!-- .option-group -->                
                                </div>
                            </fieldset>
							<h2> </h2>
                            <fieldset>
							<div class="section spacer-t10">
                                	<h1 style="color:#aaaaaa;">9. What would be your focus areas for improvement in 2023? (Select all that apply)</h1>
                                </div>
                                <div class="frm-row">
                                	<div class="option-group field">
                                        <div class="section colm colm3">
                                            <img src="haelee_logo.jpg" width="180px"/>
                                        </div><!-- end section -->
										
										<div class="section colm colm9" style="margin-left:0px;margin-top:30px;">
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[11][]" value="Reducing cost">
                                                <span class="checkbox"></span> Reducing cost
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[11][]" value="Improving clinical efficiency">
                                                <span class="checkbox"></span> Improving clinical efficiency
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[11][]" value="Improving patient outcomes">
                                                <span class="checkbox"></span>  Improving patient outcomes
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[11][]" value="Improving administrative efficiency">
                                                <span class="checkbox"></span>  Improving administrative efficiency
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="checkbox" name="data[11][]" value="Other">
                                                <span class="checkbox"></span>  Other
                                            </label>

                                            


											
											</div><!-- end section -->
                                    </div><!-- .option-group -->                
                                </div>
                            </fieldset>
							
                            
                            
                           <!-- <h2> </h2>
                            <fieldset>
							<div class="section spacer-t10">
                                	<h1 style="color:#aaaaaa;">10.When considering your organization&#8217;s infrastructure modernization, what&#8217;s top of mind? </h1>
                                </div>
                                <div class="frm-row">
                                	<div class="option-group field">
                                        <div class="section colm colm3">
                                            <img src="icons/Icon10.gif" width="180px"/>
                                        </div><!-- end section 
										
										<div class="section colm colm9" style="margin-left:0px;margin-top:30px;">
                                            <label class="option block">
                                                <input type="radio" name="step10" value="">
                                                <span class="radio"></span> We want to secure our IT infrastructure supply chain
                                            </label>
                                            <label class="option block spacer-t10">
                                                <input type="radio" name="step10" value="">
                                                <span class="radio"></span> We want to accelerate our edge computing initiatives
                                            </label>
											<label class="option block spacer-t10">
                                                <input type="radio" name="step10" value="">
                                                <span class="radio"></span> We want to analyze more data quickly
                                            </label>
											
											</div><!-- end section
                                    </div><!-- .option-group                
                                </div>                  
                            </fieldset>-->
						
                    </form>
                    <div class="result spacer-b10"></div>					
                </div><!-- end .form-body section -->
            
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->

</body>
</html>
