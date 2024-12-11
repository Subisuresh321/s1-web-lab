
<?php
include('conn.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $sname=$_POST['sname'];
    $sno=$_POST['sno'];
    $semail=$_POST['semail'];
    $spassword=$_POST['spassword'];
    $repassword=$_POST['repassword'];
    if($spassword!=$repassword)
    echo "NOT SAME PASSWORD";
    else{
    $query="INSERT INTO student (sname,sno,semail,password) VALUES ('$sname',$sno,'$semail','$spassword')";
    $result=mysqli_query($conn,$query);
    if($result)
    echo "Registered";
    else
    echo "Not Registered";}
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
    <center><h2>Registration Form</h2></center>
    <form method="POST" action="">
        <label>Name</label><input type="text" name="sname"><br>
        <label>Number</label><input type="text" name="sno"><br>
        <label>Email</label><input type="email" name="semail"><br>
        <label>Password</label><input type="password" name="spassword"><br>
        <label>Re-Type Password</label><input type="password" name="repassword"><br>
        <input type="submit" name="submit">
</form>
</body>

</html>