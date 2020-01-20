<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "k5jka48g6sat", "Specv338ftw!", "users");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$company = mysqli_real_escape_string($link, $_REQUEST['company']);
$datework = mysqli_real_escape_string($link, $_REQUEST['datework']);
$tasks = mysqli_real_escape_string($link, $_REQUEST['tasks']);
$institution = mysqli_real_escape_string($link, $_REQUEST['institution']);
$dateedu = mysqli_real_escape_string($link, $_REQUEST['dateedu']);
$studies = mysqli_real_escape_string($link, $_REQUEST['studies']);
$qual = mysqli_real_escape_string($link, $_REQUEST['qual']);
$headline = mysqli_real_escape_string($link, $_REQUEST['headline']);
$summary = mysqli_real_escape_string($link, $_REQUEST['summary']);
$skills = mysqli_real_escape_string($link, $_REQUEST['skills']);




 
// Attempt insert query execution
$sql = "INSERT INTO signup (company, datework, tasks, institution, dateedu, studies, qual, skills,headline, summary) VALUES ('$company','$datework','$tasks','$institution','$datedu','$studies','$qual', '$headline', '$summary','$skills')";
if(mysqli_query($link, $sql)){
    header('Location: https://www.freelancer.com');
     exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

