<?php
$conn = mysqli_connect('localhost','root','','student');
if($conn)
{
    echo "Connection established!";
}
else
{
    echo "Connection Failed!";
}
?>