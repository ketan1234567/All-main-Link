<?php
$exam_title=$_GET['etitle'];
$exam_name=$_GET['ename'];
// echo $exam_name; 

$string_exam_title = base64_decode($exam_title);
$string_exam_title= ucwords($string_exam_title);

// $string_exam_name = preg_replace("/[^a-zA-Z0-9]+/", " ", base64_decode($exam_name));
$string_exam_name= ucwords($string_exam_name);
$string_exam_name = $exam_name;
// echo $string_exam_name;
// echo base64_decode($string_exam_name);

?>



<?php
 
// Program to illustrate base64_decode()
// function
// $str_decoded = 'U01FLXB1bmU=';
 
// echo base64_decode($exam_name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Form Validations -->
    <title>MIS QA</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }

        
        .rightAbstractDiv{
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            width: 50%;
            margin: 0% auto;
            padding: 20px;
        }


        .form{
            padding: 30px;
            width: 100%;
            /* border: 1px solid red; */

        }
        .inputWidthHalf{
            width: 50%;
        }
        .inputWidthFull{
            width: 100%;
        }

        input[type=text],[type=date]{
            padding: 10px;
            border: none;
            border-bottom: 1px solid #AFC2D5;
            font-size: 14px;
        }

        .inputclass:focus{
        outeamleaderine: none;     /* oranges! yey */
        }

     .btnSubmit{
        padding: 10px 30px;
        border: none;
        /* background: linear-gradient(133deg, #ed1c24, #000000bd); */
        color: rgb(255, 255, 255);
        font-size: 16px;
        font-weight: 700;
        text-shadow: 1px 2px 5px black;
        letter-spacing: 2px;
        width: 100%;
        margin: 2% auto;
        cursor: pointer;
        background-color: #ed1c24;
     }
	 
	 .main-div{
		width: 50%;margin: 0% auto;
	 }
	 
	 .form-details{
		width: 100%; margin: 0% auto;
	 }
	 
	 @media only screen and (max-width: 600px) {
		.main-div{
			width: 100%;
		}
		
		.rightAbstractDiv{
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            width: 100%;
            margin: 0% auto;
            padding: 20px;
        }
	 }
        
    </style>

    

    
</head>
<body>
   
    
        <div class="main-div"  style="margin-top: 20px">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ed1c24" >
                <tr>
                    <td class="content-spacing" width="45" valign="top" style="font-size:0pt; line-height:0pt; text-align:left;"></td>
                    <td style="padding: 20px 0px 20px 0px;" class="p30-15">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="h3" style="color:#fff; font-family:'Quicksand', Arial, sans-serif; font-size:40px; line-height:46px; text-align:left; font-weight:300;">Internal Job Posting:
                                </td>
                            </tr>
                            <tr>
                                
                                <td class="h2" style="padding-bottom: 20px; color:#fff; font-family:'Quicksand', Arial, sans-serif; font-size:80px; line-height:80px; text-align:left; font-weight:700;"><?php echo $string_exam_title; ?></td>
                            </tr>
                            
                             
                        </table>
                    </td>
                    <td class="content-spacing" width="40" valign="top" style="font-size:0pt; line-height:0pt; text-align:left;">
                            <div class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;">
                                    <img src="images/red_box.jpg" border="0" width="45" height="44" alt="" style="filter: grayscale(1);" />
                            </div>
                    </td>
                </tr>
            </table> 
        </div>
    

    <div class="form-details"> 
            <div class="rightAbstractDiv">
                <h2 style="text-align: center;margin-top: 20px;">Submit Your Details</h2>
                <div class="form">
                    <form action="#" method="POST" id="MIS-TL-02-08-2023">
					
						<input type="hidden" name="examname" id="examname" value="<?php echo base64_decode($string_exam_name);?>">
                        
                        <div style="width: 100%;padding: 5px; margin-bottom: 10px;">
                            <input type="text" class="inputWidthFull inputclass" placeholder="Employee ID" id="ECN" name="ECN">
                        </div>

                        <div style="width: 100%;display: flex;gap: 2%;padding: 5px;margin-bottom: 10px; justify-content: space-between;" >
                            <div style="width:100%;"><input type="text" class="inputWidthFull inputclass" placeholder="First Name" name="firstname"></div>
                            <div style="width:100%;"><input type="text" class="inputWidthFull inputclass" placeholder="Last Name" name="lastname"></div> 
                        </div>

                        
                        <div style="width: 100%;padding: 5px; margin-bottom: 10px;">
                            <label style="margin: 0 20px 0 5px; ">Date Of Joining:</label>
                            <!-- <input type="text" class="inputWidthHalf inputclass" placeholder="First Name" name="firstname"> -->
                            <input type="date" class="inputWidthHalf inputclass" placeholder="DOJ" name="doj">
                        </div>
                        <div style="width: 100%;padding: 5px;margin-bottom: 10px;" >
                            <input type="text" class="inputWidthFull inputclass" placeholder="Designation" name="designation">
                        </div>
                        <div style="width: 100%;padding: 5px;margin-bottom: 10px;">
                            <input type="text" class="inputWidthFull inputclass" placeholder="Team Leader" name="teamleader">
                        </div>
                        
                        <div>
                            <button class="btnSubmit">SUBMIT</button>
                        </div>
                    </form>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


                    <style>

                                    .error{
                                        display:block;
                                        color:red;
                                    }

                    </style>
                    <script>
                        $(document).ready(function() {

                            
                                $("#MIS-TL-02-08-2023").validate({
                                    rules: {
                                        ECN: {
                                            required: true,
                                            digits: true
                                        },
                                        firstname: {
                                            required: true
                                        },
                                        lastname: {
                                            required: true
                                        },
                                        doj: {
                                            required: true
                                        },
                                        designation: {
                                            required: true
                                        },
                                        teamleader: {
                                            required: true
                                        }
                                    }
                                });
                         

                        
                        });
                     </script>



                    <script src="../PKT/allFunctions.js"></script>
                </div>
            </div>
    </div>


    
</body>
</html>