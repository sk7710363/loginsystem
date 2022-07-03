<?php
include 'connection.php';
echo $id=$_GET['id'];

$data="DELETE  FROM student where id='$id'";
$que=mysqli_query($conn, $data);
if($que)
{
    echo " Data is Deleted ";
    header('location:display.php');
}
else
{
    echo " Data is not Deleted";
}


?>