<?php
include('mailer_config/mailerConfig.php');  
$camp_id = $_POST["camp_id"];
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
$URL = $_SERVER['HTTP_REFERER'];
$firstname = $_POST["firstname"];
$temp = implode(",", $_POST["data"]);
$temp = $firstname.','.$temp;
$pattern = '/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i';
preg_match_all($pattern, $temp, $matches);
$email = array_shift($matches[0]);
//DON'T CHANGE THIS CODE END

$ENDURL = "https://resource.itbusinesstoday.com/whitepapers/30312-OpenText-Corporation-CPL-ABM-BN-EU-1-thanks.php";
//Change last folder name as given below as per the requirement of camp
//ace, bl, comndb, magento, tata, tgif
file_get_contents("https://resource.itbusinesstoday.com/api/public/index.php/api/insert/user/tgif/".base64_encode($ENDURL).",".base64_encode($URL)."/".base64_encode($temp)."/".$camp_id."/".$ip_address);


                                
$mail->From = "mailing@itbusinesstoday.com";
$mail->FromName = "ITBusinessToday";
$mail->addAddress($email, $firstname);

$mail->isHTML(true);

$mail->Subject = "Thank you for requesting Webinar OnDemand";
$mail->Body = "<table>
				
				 <tr><td>Dear&nbsp;<b>$firstname,</b></td></tr>
				 <tr><td>&nbsp;</td></tr>
				  <tr><td>Thank you for requesting <b>ERP Modernisation and Growing Data Challenges Drive 91% of Enterprises to Modernise Integration Solutions</b>. You can view it immediately by clicking <a href='https://resource.itbusinesstoday.com/whitepapers/30312-OpenText-Corporation-CPL-ABM-BN-EU-1.pdf'>HERE</a>!</td></tr>
				 <tr><td>&nbsp;</td></tr>
				 
				
				 <tr><td>&nbsp;</td></tr>
				 <tr><td>Sincerely,</td></tr>
				 <tr><td>Nina Ridgeway</td></tr>
				 <tr><td>ITBusinessToday</td></tr>
				 
				 
				 </table>";
							
$mail->AltBody = "";

try {
    $mail->send();
	// exit();
    // echo "Message has been sent successfully";
	// header('Location: https://www.google.com/');
	echo "<script>
	window.location.href = 'https://resource.itbusinesstoday.com/whitepapers/30312-OpenText-Corporation-CPL-ABM-BN-EU-1-thanks.php';
	</script>";
} catch (Exception $e) {
    // echo "Mailer Error: " . $mail->ErrorInfo;
}

?>
