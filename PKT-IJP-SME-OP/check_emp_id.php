<?php
header("Content-Type: text/plain");
// Database configuration
$hostname = "localhost";
$username = "xdbsmedia_pkt";
$password = "Apple@2023?";
$database = "xdbsmedia_survey";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emp_id = $_POST['emp_id'];

    // Create a connection
    $conn = new mysqli($hostname, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if emp_id exists in the database
    $sql = "SELECT emp_id FROM `ijp-pkt-op-k-201123` WHERE emp_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $emp_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "exists";
    } else {
        echo "not_exists";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: index.html");
    exit;
}
?>
