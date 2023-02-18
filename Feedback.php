<?php 
include 'connectionfeedback.php';
include 'feedback.html';

    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $department =  $_POST['department'];
    $Enrollment =  $_POST['Enrollment'];
    $mobno =  $_POST['mobno'];
    $email =  $_POST['email'];
    $supportiverating =  $_POST['supportiverating'];
    $teachingrating =  $_POST['teachingrating'];
    $collegerating =  $_POST['collegerating'];
    $overrating =  $_POST['overrating'];
    $Feedback =  $_POST['Feedback'];

if(isset($_POST["sumbit"]))
{
    $sql="INSERT INTO 'feedback'('firstname','lastname','department','Enrollment','mobno','email','supportiverating','teachingrating','collegerating','overrating','Feedback')
    VALUES('[$firstname]','[$lastname]','[$department]','[$Enrollment]','[$mobno]','[$email]','[$supportiverating]','[$teachingrating]','[$collegerating]','[$overrating]','[$Feedback]')";
    $result= mysqli_query($conn,$sql);
    echo "<script>alert('Your Feedback has been recorded Successfully')</script>";
}
mysqli_close($conn);
?>