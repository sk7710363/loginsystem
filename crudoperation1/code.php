<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $name=$_POST['fullname'];
    $roll_no=$_POST['rollno'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $address=$_POST['address'];

    $insert="INSERT INTO student(name, roll_no, email, password, address) VALUES ('$name', '$roll_no', '$email', '$password', '$address')";
    $que=mysqli_query($conn, $insert);
    if($que)
    {
        //echo "Your Data is Inserted Successfully";
        header('location:display.php');
    }
    else
    {
        echo "Your Data in Not Inserted";
    }

}

?>