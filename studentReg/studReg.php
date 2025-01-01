<?php
include('conn.php');
if($conn)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $sname=$_POST['sname'];
        $sdob=$_POST['sdob'];
        $srollno=$_POST['srollno'];
        $sno=$_POST['sno'];
        $semail=$_POST['semail'];
        $spassword=$_POST['spassword'];

        $query="INSERT INTO student(sname,sdob,srollno,sno,semail,spassword) VALUES('".$sname."','".$sdob."','".$srollno."','".$sno."','".$email."','".$spassword."')";
        $res=mysqli_query($conn,$query);
        if($res)
        {
            echo "<script>alert('Registered')</script>";
        }
        else
        echo "<script>alert('Not Registered')</script>";
        mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Registration Form</h2>
    <form action="" method="post" onsubmit="return validate()">
        <label for="sname">Name:</label><input type="text" id="sname" name="sname" required>
        <label for="sdob">DOB:</label><input type="date" id="sdob" name="sdob">
        <label for="srollno">Roll No:</label><input type="text" id="srollno" name="srollno" required>
        <label for="sno">Phone Number:</label><input type="text" id="sno" name="sno" required>
        <label for="semail">Email Id:</label><input type="email" id="semail" name="semail" required>
        <label for="spassword">Password:</label><input type="password" id="spassword" name="spassword" required>
        <label for="srepassword">Retype Password:</label><input type="password" id="srepassword" name="srepassword" required>
        <input type="submit" value="register">
</form>
<script src="script.js"></script>
</body>
</html>