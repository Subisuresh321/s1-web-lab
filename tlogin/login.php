<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
     include('conn.php');
     if($conn){
     $uname=$_POST['uname'];
     $pass=$_POST['pass'];
     $q="SELECT * FROM login WHERE username='$uname' AND password='$pass'";
     $res=mysqli_query($conn,$q);
     if($res->num_rows>0)
     {
        header('Location:teacher.php');
     }
     else{
      echo "<script>alert('Invalid Username and Password')</script>";
     }
     mysqli_close($conn);
     }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <center><h2>LOGIN FORM</h2></center>
    <form method="post" action="" align="center">
        <label for="uname">USERNAME:<label><input type="text" id="uname" name="uname"><br>
        <label for="pass">PASSWORD:<label><input type="password" id="pass" name="pass"><br>
        <input type="submit" value="login" style="margin-top:2%;">
</form>
</body>
</html>