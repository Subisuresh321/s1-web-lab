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

        let nameFormat= /^[A-Z][A-Za-z\s.]+$/;
        let emailFormat=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let passwordFormat=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%&*?])[a-zA-Z\d@$!%&*?]{8,}$/;
        let numberFormat=/^\d{10}$/;

        if(sname=="" || sno=="" || semail=="" || spassword=="" || repassword=="")
    {
        alert("All fields must be filled");
        return false;
    }
    if(!nameFormat.test(sname))
    {
        alert("Name should start with capital letter and shouldn't contain digits & symbols");
        return false;
    }
    if(!numberFormat.test(sno))
    {
        alert("Phone number should have 10 digits");
        return false;
    }
    if(!emailFormat.test(semail))
    {
        alert("Incorrect Email Format");
        return false;
    }
    if(!passwordFormat.test(spassword))
    {
        alert("Password must be at least 8 characters long, contain at least one lowercase letter, one uppercase letter, one digit, and one special character.");
        return false;
    }

    if(spassword!=repassword)
    {
        alert("Passwords donot match!!!");
        return false;
    }
    return true;
    }
</script>
</body>
</html>