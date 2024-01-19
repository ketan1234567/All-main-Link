<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../../database/db.php";
	//echo "SSS";
	
	
	//print_r($_POST);
	//exit();
    try
    {
		
		 //Get DB Object
        $db=new db();
		
		$mysqli = $db->mysqli();

    $eid = $mysqli->real_escape_string($_POST['eid']);
    $ename = $mysqli->real_escape_string($_POST['ename']);
    $edept = $mysqli->real_escape_string($_POST['edept']);
	$Reporting_Leader = $mysqli->real_escape_string($_POST['Reporting_Leader']);

   
    

    $sql="INSERT INTO `table_tennis_tm_registration`(`emp_id`, `full_name`, `department`,`Reporting_Leader`) VALUES ('$eid','$ename','$edept','$Reporting_Leader')";


       
        
        //Connect
        $db=$db->connect();
		
		
		
        $sql_query_check = "SELECT COUNT(emp_id) AS ecnCount FROM `table_tennis_tm_registration` WHERE emp_id='$eid' ";
        $stmt=$db->query($sql_query_check);
        $result = $stmt->fetch( PDO::FETCH_ASSOC );  
        if($result["ecnCount"]==0){
            $stmt=$db->query($sql);
            
            echo "1";
        }else{
            echo "You have already registered for the  Table Tennis Tournament Thank You!";
        }
        $db=null;
		
		$mysqli -> close();
		
     
    }
    catch(Exception $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }



?>