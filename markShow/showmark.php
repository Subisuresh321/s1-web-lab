<?php
$rollno="";
$sname="";
$m1="";
$m2="";
$tot="";
$grade="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include('conn.php');
    if($conn)
    {
        $rollno=$_POST['rollno'];
        $q="SELECT * FROM studData WHERE rollno='$rollno'";
        $res=mysqli_query($conn,$q);
        if($res->num_rows==1)
        {
            $row=$res->fetch_assoc();
            $sname=$row['sname'];
            $m1=$row['m1'];
            $m2=$row['m2'];
            $tot=$m1+$m2;

            if($tot>90)
            $grade="A+";
            elseif($tot>80)
            $grade="A";
            elseif($tot>70)
                $grade="B";
            elseif($tot>60)
                $grade="C+";
            elseif($tot>50)
            $grade="C";
            else
            $grade="D";
        }
        else
        {
            $rollno="";
            echo "<script>alert('Data not Found')</script>";
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
    <title>Show Mark</title>
    <style>
        #main-container{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
        label,input,table{
            margin-top:10px;
        }
        </style>
</head>
<body>
    <div id="main-container">
        <div>
        <form method="post" action="">
            <label for="rollno">Enter the Roll No:</label>
            <input type="text" id="rollno" name='rollno'><br>
            <center><input type="submit" value="Check Result"></center>
</form>
    </div>
    <div>
<table border="1">
    <tr>
        <th>NAME</th>
        <th>ROLL NO</th>
        <th>MARK 1</th>
        <th>MARK 2</th>
        <th>TOTAL</th>
        <th>GRADE</th>
</tr>
<tr>
        <th><?php echo $sname?></th>
        <th><?php echo $rollno?></th>
        <th><?php echo $m1?></th>
        <th><?php echo $m2?></th>
        <th><?php echo $tot?></th>
        <th><?php echo $grade?></th>
</tr>
</table>
    </div>
</div>
</body>
</html>