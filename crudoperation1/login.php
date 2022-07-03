<?php
include 'connection.php';

if (isset($_POST['update'])) {
  	
    $email= $_POST['email'];
    $pwd = $_POST['pass'];
    $query = "SELECT * FROM student WHERE email='$email' && password='$pwd' ";
 $data=mysqli_query($conn, $query);
 $total = mysqli_num_rows($data);
 if ($total==1) {
 //echo "Login Ok";

    $_SESSION['user_name']= $user;
    header('location:home.php');
 }
 else
 {
     echo "Login Failed";
 }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>
            Registration Form
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="registration-form">
        <h1>Registration Form</h1>
        <form action="" method="post">
            

            <p>Email :</p>
            <input  type="text" name="email" placeholder="Enter Your Email" >

            <p> Password:</p>
            <input  type="password" name="pass" placeholder=" Enter Sroung Password" >

            
            <button type="submit" name="update">UPDATE </button>
        </form>
        </div>
    </body>
</html>