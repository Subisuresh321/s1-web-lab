<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include('conn.php');
    $sname=$_POST['sname'];
    $sid=$_POST['sid'];
    $spass=$_POST['spass'];
    $query="INSERT INTO student(id,name,password) VALUES ('$sid','$sname','$spass')";
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
    <title>Student Registration</title>
</head>
<body>
<div id="main">
        <h3>Student Registration</h3>
        <form action="" method="POST">
            <label for="sname">Student Name: </label><input type="text" id="sname" name="sname" required><br> 
            <label for="sid">Student Id: </label><input type="text" id="sid" name="sid" required><br> 
            <label for="spass">Student Password: </label><input type="password" id="spass" name="spass" required><br> 
            <input type="submit" value="Register">       
         </form>
         <div id="btn-4"><a href="admin.php"><button>HOME</button></a></div>
    </div>
</body>
</html>
