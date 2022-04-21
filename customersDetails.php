<!--STORING TO DATABASEEEEE -->

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "leo_db");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$car_model = $mysqli->real_escape_string($_REQUEST['car_model']);
$first_name = $mysqli->real_escape_string($_REQUEST['first_name']);
$last_name = $mysqli->real_escape_string($_REQUEST['last_name']);
$phone = $mysqli->real_escape_string($_REQUEST['phone']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$addr = $mysqli->real_escape_string($_REQUEST['addr']);
$date_start = $mysqli->real_escape_string($_REQUEST['date_start']);
$date_end = $mysqli->real_escape_string($_REQUEST['date_end']);
$numDays = $mysqli->real_escape_string($_REQUEST['numDays']);
 
// Attempt insert query execution
$sql = "INSERT INTO bookingForm (car_model, first_name, last_name, phone, email, addr, date_start, date_end, numDays) VALUES ('$car_model','$first_name', '$last_name', '$phone', '$email', '$addr', '$date_start', '$date_end', '$numDays')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";

    } else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>