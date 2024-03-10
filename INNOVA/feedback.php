<?php

//create connection
$conn = new mysqli('localhost','root','','innova');

//check connection
$name=$_POST['fname'];
$email=$_POST['email'];
$feedback=$_POST['fb'];

$stmt = $conn-> prepare('insert into feedback_data(Name,Email,Feedback) values(?,?,?)');
$stmt-> bind_param ("sss",$name,$email,$feedback);
$stmt-> execute();
echo "feedback submitted..";


$stmt->close();
$conn->close();
//Back to this page
header ('location:feedback1.php');

?>


