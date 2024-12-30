<?php
include('conn.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $semail=$_POST["semail"];
    $spassword=$_POST["spassword"];
    $query="SELECT * FROM student where semail='$semail' AND spassword='$spassword'";
    $result=mysqli_query($conn,$query);

    if($result->num_rows>0)
    {
        while($rows=$result->fetch_assoc())
        {
            echo "<script>alert('Welcome ".$rows['sname']."')</script>";
        }
    }
    else
    {
         echo "<script>alert('INVALID EMAIL & PASSWORD')</script>";
    }
    mysqli_close($conn);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body>
    <center> <h2>LOGIN FORM</h2> </center>
<form action="" method="post">
<label>Email</label><input type="email" name="semail"><br>
<label>Password</label><input type="password" name="spassword"><br>
<input type="submit" value="login">
</body>
</html>