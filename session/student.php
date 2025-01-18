<?php
session_start();
    include("conn.php");
    $id=$_SESSION['sid'];
    $query="SELECT * FROM marks where id='$id'";
    $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home</title>
</head>
<body>
<div id="main">
<h3>MARKS</h3>
<?php
if($result->num_rows>0){
    while($row=mysqli_fetch_array($result)){
        echo "<table border='1'><tr><td>INTERNAL MARK</td><td>EXTERNAL MARK</td><td>GRADE</td></tr>";
        echo "<tr><td>".$row['imark']."</td><td>".$row['emark']."</td><td>".$row['grade']."</td></tr></table>";
    }

}else{
    echo "Marks have not been Entered";
}
?>
</div>
</body>
</html>