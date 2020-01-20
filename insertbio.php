<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "k5jka48g6sat", "Specv338ftw!", "users");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$skills = mysqli_real_escape_string($link, $_REQUEST['skills']);
$headline = mysqli_real_escape_string($link, $_REQUEST['headline']);
$intro = mysqli_real_escape_string($link, $_REQUEST['intro']);
$summary = mysqli_real_escape_string($link, $_REQUEST['summary']);
$closer = mysqli_real_escape_string($link, $_REQUEST['closer']);

 
// Attempt insert query execution
$sql = "INSERT INTO signup (headline, intro, summary, closer) VALUES ('$headline', '$intro', '$summary', '$closer')";
if(mysqli_query($link, $sql)){
    header('Location: 7-photo.html');
     exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

headline
intro
summary
close