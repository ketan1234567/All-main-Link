
<?php
header("Content-Type: text/plain");
// Database configuration
$hostname = "localhost";
$username = "xdbsmedia_pkt";
$password = "Apple@2023?";
$database = "xdbsmedia_survey";

$correctOptionMapping = array(
     "2 paid leaves and 0 casual leaves",
     "Promotion",
     "Accessibility",
     "Workflow",
     "Advertising",
     "Business Services",
     "Cross Suppression",
     "3 working days",
     "No",
     "Switzerland",
     "Arizona",
     "Full time effort",
     "List of companies that use a specific software platform",
     "dncescalations@ondirect.in"
    
               // Add more mappings for other correct answers
);



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emp_id = $_POST['emp_id'];
    $full_name = $_POST['full_name'];
    $department = $_POST['department'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $q10 = $_POST['q10'];
    $q11 = $_POST['q11'];
    $q12 = $_POST['q12'];
    $q13 = $_POST['q13'];
    $q14 = $_POST['q14'];
    $q15 = $_POST['q15'];
    $q16 = $_POST['q16'];
    $q17 = $_POST['q17'];
    $totalScore = 0;
	 


    // check correct questions
    $useransarray = array($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14);


    for ($i=0; $i < count($correctOptionMapping) ; $i++) { 
        if($useransarray[$i] == $correctOptionMapping[$i]){
            $totalScore++;
        }
    }


    // Create a connection
    $conn = new mysqli($hostname, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `ijp-pkt-op-k-201123` (emp_id, full_name,  department, totalScore, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15,q16,q17) 
    VALUES (  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }
    
    $stmt->bind_param("sssssssssssssssssssss", $emp_id,  $full_name,  $department, $totalScore,  $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, $q11, $q12, $q13, $q14, $q15, $q16, $q17);

    if ($stmt->execute()) {
        echo "Data inserted successfully";
    } else {
        echo "Error executing statement: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
    
} else {
    // Redirect if accessed directly
    header("Location: index.html");
    exit;
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
