<?php 
include 'connectionfeedback.php';
include 'feedback.html';


if(isset($_POST["submit"]))
{
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


    $sql="INSERT INTO 'feedback'('firstname','lastname','department','Enrollment','mobno','email','supportiverating','teachingrating','collegerating','overrating','Feedback')
    VALUES('[$firstname]','[$lastname]','[$department]','[$Enrollment]','[$mobno]','[$email]','[$supportiverating]','[$teachingrating]','[$collegerating]','[$overrating]','[$Feedback]')";
    $result= mysqli_query($conn,$sql);
     echo "<script>alert('Your Complaint has been recorded Successfully')</script>";
}
mysqli_close($conn);
?>