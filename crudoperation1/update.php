<?php
include 'connection.php';

echo $id=$_GET['id'];

$data="SELECT * FROM student where id='$id'";
$que=mysqli_query($conn, $data);
while($res = mysqli_fetch_array($que))
{
    $name=$res['name'];
    $roll_no=$res['roll_no'];
    $email=$res['email'];
    $password=$res['password'];
    $address=$res['address'];
}

if(isset($_POST['update']))
{
    $name=$_POST['fullname'];
    $roll_no=$_POST['rollno'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $address=$_POST['address'];

    $update=" UPDATE  student SET  name='$name', roll_no='$roll_no', email='$email', password='$password', 
    address='$address' where id='$id'";
    $que=mysqli_query($conn, $update);
    if($que)
    {
       // echo "Your Profile is Update Successfully";
       header('location:display.php');
    }
    else
    {
        echo "Your Profile Not Update Please Try Again";
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
            <p>Full NAME:</p>
            <input  type="text" name="fullname" placeholder="Enter Your Full Name" value="<?php echo $name;?>">

            <p>Roll Number:</p>
            <input  type="number" name="rollno" placeholder="Enter your Roll Number" value="<?php echo $roll_no;?>">

            <p>Email :</p>
            <input  type="text" name="email" placeholder="Enter Your Email" value="<?php echo $email;?>">

            <p> Password:</p>
            <input  type="password" name="pass" placeholder=" Enter Sroung Password" value="<?php echo $password;?>">

            <p> Address:</p>
            <input  type="text" name="address" placeholder="Enter Your Address" value="<?php echo $address;?>">
            <button type="submit" name="update">Registration </button>
        </form>
        </div>
    </body>
</html>