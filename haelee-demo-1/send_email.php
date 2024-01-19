



<?php

foreach ($_POST["data"] as $index=>$data) {
	
	if(is_array($data)){
		$_POST["data"][$index]="{".implode(",", $data)."}";
	}else{
		
	}
  }

$temp1 = $_POST["temp"];
$temp2 = implode(",", $_POST["data"]);
$temp = $temp1.','.$temp2;




  

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../mailer_config/mailerConfig.php');  
$camp_id = "HAELEE-SURVEY-1";
//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {$ip_address = $_SERVER['HTTP_CLIENT_IP'];}
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];}
//whether ip is from remote address
else
  {$ip_address = $_SERVER['REMOTE_ADDR'];}
// echo $ip_address;
//IP ADDRESS END

//DON'T CHANGE THIS CODE (Data Get From LP)
$URL = urlencode( $_SERVER['HTTP_REFERER'] );
$firstname = $_POST["firstname"];
//$temp = implode(",", $_POST["data"]);




 // print_r($temp);




//$temp = $firstname.','.$temp;
$pattern = '/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i';
preg_match_all($pattern, $temp, $matches);
$email = array_shift($matches[0]);
//DON'T CHANGE THIS CODE END





$ENDURL = "https://itbusinessplus.com/whitepapers/Alpha-LP-3120646.1-SAP-Concur-SB-1-thankyou.html";
//Change last folder name as given below as per the requirement of camp
//ace, bl, comndb, magento, tata, tgif


file_get_contents("https://resource.itbusinessplus.com/api/public/index.php/api/insert/user/ace/".base64_encode($ENDURL).",".base64_encode($URL)."/".base64_encode($temp)."/".$camp_id."/".$ip_address);



//print_r($temp);die();
//Email Code Start
$mail->From = "fulfillment@itbusinessplus.com";
$mail->FromName = "ITBusinessPlus";
$mail->addAddress($email, $firstname);

$mail->isHTML(true);

$mail->Subject = "The State of Telehealth 2022";

		$mail->Body = "<table>
				
				 <tr><td>Dear&nbsp;<b>$firstname,<b></td></tr>
				 <tr><td>&nbsp;</td></tr>
				  <tr><td>Thank you!</td></tr>
				 <tr><td>We appreciate your input and will be in touch with your gift card and report.</td></tr>
				 <tr><td>&nbsp;</td></tr>
				 <tr><td>
				 <img src='https://itbusinessplus.com/Tech-Score/haelee-demo-1/HS1_IMG1.png' width='60%' />
				 </td></tr>
				 <tr><td>&nbsp;</td></tr>
				 
				 
				
				 <tr><td><b>Get a Free Demo of Healee White Label</b>
<br><br>
Launch your own digital health platform with telehealth, digital check-in and 
scheduling, adapted to your unique use case.
<br><br>
In this personalized demo, learn how you can create a fully-branded patient 
experience, enable all organizational workflows, and get started in weeks
<br><br>
<a style='display:block;
    background-color: #4c77c7;
    padding: 0 200px;
	color:white;
    text-align:center;
	text-decoration:none;
	padding:10px;
	width:40%;
	margin:0 auto;' href='https://www.healee.com/en/demo-white-label?utm_source=Reach+Mail+Media&utm_medium=third-party-email&utm_campaign=PG_survey'>Request Demo</a>
</td></tr>
				 <tr><td>&nbsp;</td></tr>
				 
				 <tr><td>Sincerely,</td></tr>
				 <tr><td>The IT Business Plus Fulfillment Team </td></tr>

				 
				 </table>"; 

		
$mail->AltBody = "";


try {
    $mail->send();
	// exit();
    // echo "Message has been sent successfully";
	// header('Location: https://www.google.com/');
	echo "<script>
	window.location.href = 'thankyou.html';
	</script>";
	

	//echo "sent";
} catch (Exception $e) {
    // echo "Mailer Error: " . $mail->ErrorInfo;
	//echo "not sent";
}


?>