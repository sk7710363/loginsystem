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
        <form action="code.php" method="post">
            <p>Full NAME:</p>
            <input  type="text" name="fullname" placeholder="Enter Your Full Name" >

            <p>Roll Number:</p>
            <input  type="number" name="rollno" placeholder="Enter your Roll Number" >

            <p>Email :</p>
            <input  type="text" name="email" placeholder="Enter Your Email" >

            <p> Password:</p>
            <input  type="password" name="pass" placeholder=" Enter Sroung Password" >

            <p> Address:</p>
            <input  type="text" name="address" placeholder="Enter Your Address" >
            <button type="submit" name="submit">Registration </button>
        </form>
        </div>
    </body>
</html>