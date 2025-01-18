<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'conn.php';
    $imark=$_POST['imark'];
    $emark=$_POST['emark'];
    $sid=$_POST['sid'];
    $total=$imark+$emark;

    if($total>90){
        $grade='A+';
    }
    else if($total> 80){
        $grade= 'A';
    }
    else if($total> 70){
        $grade= 'B+';
    }
    else {
        $grade= 'C';
    }

    $query="INSERT INTO marks(id,imark,emark,grade) VALUES ('$sid','$imark','$emark','$grade')";
    $result=mysqli_query($conn,$query); 
    if($result)
    echo "<script>alert('Mark Added')</script>";
    else
    echo "<script>alert('Mark Not Added')</script>";
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Add</title>
</head>
<body>
<div id="main">
        <h3>ADD MARKS</h3>
        <form action="" method="POST">
            <label for="sid">Student Id: </label>
            <select id="sid" name="sid" required>
                <option value="" disabled selected>Select Id</option>
                <?php
                include('conn.php');
                $query="SELECT id FROM student";
                $res=mysqli_query($conn, $query);
                 while($row=mysqli_fetch_assoc($res)){
                    echo "<option value=".$row['id'].">".$row['id']."</option>";
                 }
                ?>
            </select><br>
            <label for="imark">Internal Mark: </label><input type="text" id="imark" name="imark" required><br> 
            <label for="emark">External Mark: </label><input type="text" id="emark" name="emark" required><br> 
            <input type="submit" value="Register">       
         </form>
    </div>
    
</body>
</html>