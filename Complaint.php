<?php 
include 'connectioncomplaint.php';
include 'complaint.html';


if(isset($_POST["submit"]))
{
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $department =  $_POST['department'];
    $Enrollment =  $_POST['Enrollment'];
    $mobno =  $_POST['mobno'];
    $email =  $_POST['email'];
    $Complaint =  $_POST['Complaint'];
    $otherdetail =  $_POST['otherdetail'];

    $sql="INSERT INTO 'complaint'('firstname','lastname','department','Enrollment','mobno','email','Complaint','otherdetail')
    VALUES('[$firstname]','[$lastname]','[$department]','[$Enrollment]','[$mobno]','[$email]','[$Complaint]','[$otherdetail]')";
    $result= mysqli_query($conn,$sql);
     echo "<script>alert('Your Complaint has been recorded Successfully')</script>";
}
mysqli_close($conn);
?>