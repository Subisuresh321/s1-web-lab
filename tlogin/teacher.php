<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
     include('conn.php');
     if($conn){
     $tname=$_POST['tname'];
     $sub=$_POST['sub'];
     $nos=$_POST['nos'];
     $q="INSERT INTO teacher(tname,subject,no_stud)VALUES('$tname','$sub','$nos')";
     $res=mysqli_query($conn,$q);
     if($res)
     {
        echo "<script>alert('Data Inserted')</script>";
     }
     else{
      echo "<script>alert('Data Insertion Failed!!!')</script>";
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
    <title>teacher</title>
</head>
<style>
    div{
        display:flex;
        flex-direction:column;
        justify-content:space-around;
        align-items:center;
        

    }
    form{
        display:flex;
        justify-content:space-evenly;
        align-items:center;
        border:2px solid red;
        padding: 1%;
        width:25%;
    }

    label{
        margin-top:3%;
    }
    
    }
    </style>
<body>
<center><h2>ADD Teacher</h2></center>
    <div><form method="post" action="" >
        <label for="tname">FACULTY NAME:<label><input type="text" id="tname" name="tname"><br>
        <label for="sub">SUBJECT:<label><input type="text" id="sub" name="sub"><br>
        <label for="nos">NO. STUDENTS:<label><input type="text" id="nos" name="nos"><br>
        <input type="submit" value="add" style="margin-top:2%;">
</div>
</body>
</html>