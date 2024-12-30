<?php
include('conn.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $sname=$_POST['sname'];
    $sno=$_POST['sno'];
    $semail=$_POST['semail'];
    $spassword=$_POST['spassword'];
    $repassword=$_POST['repassword'];
    $query="INSERT INTO student (sname,sno,semail,spassword) VALUES ('$sname',$sno,'$semail','$spassword')";
    $result=mysqli_query($conn,$query);
    if($result)
    echo "<script>alert('Registered')</script>";
    else
    echo "<script>alert('Not Registered')</script>";
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2>REGISTRATION</h2></center>
    <form action="" method="POST" onsubmit="return validate()">
        <label>Name</label><input type="text" name="sname" id="sname" required>
        <label>Phone number</label><input type="text" name="sno" id="sno" required>
        <label>Email</label><input type="email" name="semail" id="semail" >
        <label>Password</label><input type="password" name="spassword" id="spassword" required>
        <label>Retype Password</label><input type="password" name="repassword" id="repassword" required>
        <input type="submit" value="Register">
</form>
<script>
    function validate()
    {
        var sname=document.getElementById("sname").value;
        var sno=document.getElementById("sno").value;
        var semail=document.getElementById("semail").value;
        var spassword=document.getElementById("spassword").value;
        var repassword=document.getElementById("repassword").value;

        if(sname=="" || sno=="" || semail=="" || spassword=="" || repassword=="")
    {
        alert("All fields must be filled");
        return false;
    }
    if(sno.length!=10)
    {
        alert("Phone number should have 10 digits");
        return false;
    }
    if(spassword.length<8)
    {
        alert("Password should have atleast 8 characters");
        return false;
    }
    if(password!=repassword)
    {
        alert("Passwords donot match!!!");
        return false;
    }
    return true;
    }
</script>
</body>
</html>