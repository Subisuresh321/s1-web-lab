<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $uname=$_POST['uname'];
    $upass=$_POST['upass'];
    if($uname=="admin" && $upass=="admin"){
        header("Location: admin.php");
    }
    else{
        include('conn.php');
        $query="SELECT * FROM student where id='$uname' and password='$upass'";
        $res=mysqli_query($conn,$query);
        if($res->num_rows>0){
            while($row=$res->fetch_assoc()){
                $_SESSION['sid']=$row['id'];
                header("Location:student.php");
            }
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
    <title>Login Page</title>
</head>
<body>
    <div id="main">
        <h3>Login Form</h3>
        <form method="POST" action="">
        <label for="uname">UserName: </label><input type="text" name="uname" id="uname" required><br>
        <label for="upass">Password: </label><input type="text" name="upass" id="upass" required><br>
        <input type="submit" name="login" value="LOGIN">
</form>
</div> 
</body>
</html>
