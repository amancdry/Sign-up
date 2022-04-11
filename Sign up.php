<?php

$First_Name=$_POST['Fname'];
$Last_Name=$_POST['Lname'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$rePassword=$_POST['Password1'];
$conn = new mysqli('localhost','root','','gym');
if($Password==$rePassword)
{
    $sql="INSERT INTO `gym_table` (`Fname`, `Lname`, `Email`, `Password`, `RePassword`) 
    VALUES ('$First_Name','$Last_Name', '$Email', '$Password', '$rePassword')";
$result1=mysqli_query($conn,$sql);
if($result1)
{
    echo "inserted successfully";
}
else
{
    echo ("Already existed".mysqli_connect_error());
}

}
else
{
    echo "Please insert same password as before";
}




?>