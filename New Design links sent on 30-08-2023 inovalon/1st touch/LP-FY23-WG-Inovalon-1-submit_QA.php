<?php
 
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

$ENDURL = "LP-FY23-WG-Inovalon-1_ENDURL";
//Change last folder name as given below as per the requirement of camp
//ace, bl, comndb, magento, tata, tgif

//$link="https://resource.softwaredigest.com/api/public/index.php/api/insert/user/comndb/".base64_encode($ENDURL).",".base64_encode($URL)."/".base64_encode($temp)."/".$camp_id."/".$ip_address;
file_get_contents("https://engage.biz-tech-insights.com/api-final/api/public/index.php/api/insert/user/w8/".base64_encode($ENDURL).",".base64_encode($URL)."/".base64_encode($temp)."/".$camp_id."/".$ip_address);

// $fp = fopen('data.txt', 'a');//opens file in append mode  
// fwrite($fp, $_POST["data"][1]."| event:".$_POST["data"][2]." | ".$email." | ".$time." | ".$link." from sendmail\r\n");    
// fclose($fp);  
                                


?>
