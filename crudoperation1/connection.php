<?php
$servername="localhost";
$username="root";
$password="";
$dbname="crudoperation1";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Connection is Successfully";

}
else
{
    echo "Connection is Faild";
}
?>