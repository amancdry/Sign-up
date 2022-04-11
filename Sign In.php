<?php

$username=$_POST['Email'];
$password=$_POST['password'];
$conn = new mysqli('localhost','root','','gym');
$sql="select Email from gym_table where Email='".$username."' and Password='".$password."'";
$result1=mysqli_query($conn,$sql);
if($result1->num_rows)
{
   
    header("location:keyboard.html");
    
}
else

{
    header("location:Sign in1.html");
    echo"

    <script>
        alert('Error');
    </script>
";
}

?>