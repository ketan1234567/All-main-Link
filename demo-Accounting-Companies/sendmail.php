<?php
include('../mailer_config/mailerConfig.php');   

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

//$c1=$_POST["country"];
//$c2=$_POST["country"];

//DON'T CHANGE THIS CODE (Data Get From LP)
$URL = $_SERVER['HTTP_REFERER'];
$camp_id = $_POST["camp_id"];
$firstname = $_POST["firstname"];
$temp = implode(",", $_POST["data"]);



$post_code=$_POST["data"][6];
$email=$_POST["data"][7];
$company_name=$_POST["data"][9];
$cq1_What_functions=$_POST["data"][10];
$cq2_Number_users=$_POST["data"][11];
$cq3_I_am=$_POST["data"][12];
$lastname=$_POST["data"][13];
$phone=$_POST["data"][23];
$address=$_POST["data"][15];

// echo $post_code ."<br>". $email."<br>".$company_name."<br>".$cq1_What_functions."<br>".$cq2_Number_users."<br>".$cq3_I_am
// ."<br>".$lastname."<br>".$phone."<br>".$address."<br>".$firstname;
// exit();


$postArray = array();
$postArray[] = array(

  "categoryId" => 7214,
  "data" => array(

      "184" => intval($cq1_What_functions),
      "185" => intval($cq2_Number_users),
      "12" => $post_code,
     
      "email" => $email,

      "companyName" => $company_name,
      "segment" => $cq3_I_am,
      "firstname" => $firstname,
      "lastname" => $lastname,
      "phone" => $phone,
      

  )
);


print_r($postArray);

echo "<br><br><br>";


$json = json_encode($postArray);


//echo $json;



$ch = curl_init();
$headers  = [
  'Content-Type: application/json',
  'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjMyLCJleHAiOjI1MjQ2MDgwMDAsImlzcyI6IklqTXlYMFJCVkVGUFRrUkZUVUZPUkY4ek1pSSJ9._2 uiQp1aayHoOS0eldjfeOESibpuBMQ7rYq1E7R1Ng0'
];
$url = "https://api.companeo.com/api/v1/partners/create_rfq";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,  $json);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result     = curl_exec($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);




if ($statusCode == 200) {
  // if you need to process the response from the API further
  $response = json_decode($result, true);

  print_r($response);
} else {
  die("Error: call to URL $url failed with status $statusCode, response $result, curl_error " . curl_error($ch) . ", curl_errno " . curl_errno($ch));
}


// Close cURL resource
curl_close($ch);












$temp = $firstname.','.$temp;
$pattern = '/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i';
preg_match_all($pattern, $temp, $matches);
$email = array_shift($matches[0]);
//DON'T CHANGE THIS CODE END

$ENDURL="";

/* if(strcmp($c1, "DE")==0 ||
strcmp($c1, "AT")==0 ||
strcmp($c1, "LU")==0 ||
strcmp($c1, "NO")==0 ||
strcmp($c1, "CH")==0 ) */
//{
//$ENDURL = "https://engage.biz-tech-insights.com/whitepaper/LP-Google-Q4-EMEA-CS-1-thankyou.html";	
//}else{
$ENDURL = "https://resources.readmagazine.com/demo-Accounting-Companies/thankyou.html";
//}





// print_r($_POST);

// exit();


//Change last folder name as given below as per the requirement of camp
//ace, bl, comndb, magento, tata, tgif
file_get_contents("https://engage.biz-tech-insights.com/api-final/api/public/index.php/api/insert/user/w8/".base64_encode($ENDURL).",".base64_encode($URL)."/".base64_encode($temp)."/".$camp_id."/".$ip_address);
                  
$mail->From = "info@resources.readmagazine.com";
$mail->FromName = "ReadMagazine";
$mail->addAddress($email, $firstname);

$mail->isHTML(true);

$mail->Subject = "=?UTF-8?B?RGVtYW5kZSBkZSBkZXZpcyBlbnJlZ2lzdHLDqWU=?=";

$mail->Body = '

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<!--[if gte mso 9]>
<xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
</xml>
<![endif]-->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title></title>
  
    <style type="text/css">
      @media only screen and (min-width: 520px) {
  .u-row {
    width: 500px !important;
  }
  .u-row .u-col {
    vertical-align: top;
  }

  .u-row .u-col-100 {
    width: 500px !important;
  }

}

@media (max-width: 520px) {
  .u-row-container {
    max-width: 100% !important;
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  .u-row .u-col {
    min-width: 320px !important;
    max-width: 100% !important;
    display: block !important;
  }
  .u-row {
    width: 100% !important;
  }
  .u-col {
    width: 100% !important;
  }
  .u-col > div {
    margin: 0 auto;
  }
}
body {
  margin: 0;
  padding: 0;
}

table,
tr,
td {
  vertical-align: top;
  border-collapse: collapse;
}

p {
  margin: 0;
}

.ie-container table,
.mso-container table {
  table-layout: fixed;
}

* {
  line-height: inherit;
}

a[x-apple-data-detectors=true] {
  color: inherit !important;
  text-decoration: none !important;
}

table, td { color: #000000; } </style>
  
  

</head>

<body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #e7e7e7;color: #000000">
  <!--[if IE]><div class="ie-container"><![endif]-->
  <!--[if mso]><div class="mso-container"><![endif]-->
  <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #e7e7e7;width:100%" cellpadding="0" cellspacing="0">
  <tbody>
  <tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #e7e7e7;"><![endif]-->
    
  
  
<div class="u-row-container" style="padding: 0px;background-color: transparent">
  <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px;"><tr style="background-color: transparent;"><![endif]-->
      
<!--[if (mso)|(IE)]><td align="center" width="500" style="background-color: #bfedd2;width: 500px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 500px;display: table-cell;vertical-align: top;">
  <div style="background-color: #bfedd2;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
  <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
  
<table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
        
  <h1 style="margin: 0px; color: #070707; line-height: 140%; text-align: left; word-wrap: break-word; font-size: 22px; font-weight: 400;"><strong>Demande de devis enregistr&#233;e</strong></h1>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
  </div>
  


  
  
<div class="u-row-container" style="padding: 0px;background-color: transparent">
  <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px;"><tr style="background-color: transparent;"><![endif]-->
      
<!--[if (mso)|(IE)]><td align="center" width="500" style="background-color: #ffffff;width: 500px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 500px;display: table-cell;vertical-align: top;">
  <div style="background-color: #ffffff;height: 100%;width: 100% !important;">
  <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
  
<table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
        
  <div style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
    <p style="line-height: 140%;">Bonjour,</p>
<p style="line-height: 140%;"><br />Nous avons bien re&#231;u votre demande de devis en <b>Trouvez un meilleur expert-comptable pour votre entreprise</b>, et nous vous en remercions !</p>
<p style="line-height: 140%;"><br />Nous transmettons vos coordonn&#233;es aux fournisseurs les plus adapt&#233;s qui vous recontacteront dans les meilleurs d&#233;lais.</p>
<p style="line-height: 140%;"></p>
<p style="line-height: 140%;">&#192; bient&#244;t!</p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
  </div>
  


  
  
<div class="u-row-container" style="padding: 0px;background-color: transparent">
  <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px;"><tr style="background-color: transparent;"><![endif]-->
      
<!--[if (mso)|(IE)]><td align="center" width="500" style="width: 500px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 500px;display: table-cell;vertical-align: top;">
  <div style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
  <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
  
  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
  </div>
  


    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    </td>
  </tr>
  </tbody>
  </table>
  <!--[if mso]></div><![endif]-->
  <!--[if IE]></div><![endif]-->
</body>

</html>


';
$mail->AltBody = "";

try {
    $mail->send();
	// exit();
    // echo "Message has been sent successfully";
	// header('Location: https://www.google.com/');
	/* echo "<script>
	window.location.href = '$ENDURL';
	</script>"; */
} catch (Exception $e) {
    // echo "Mailer Error: " . $mail->ErrorInfo;
}
 
 
 
 echo "<script>
	window.location.href = 'https://resources.readmagazine.com/demo-Accounting-Companies/thankyou.html';
	</script>";
?>
