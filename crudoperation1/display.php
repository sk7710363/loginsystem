<!DOCTYPE html>
<html>
    <head>
        <title>
            Display Data
        </title>
    </head>
    <body>
        <table border="1px solid">
            <tr>
                <th>Name</th>
                <th>Roll Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php
            include 'connection.php';
                $data="SELECT * From student";
                $que=mysqli_query($conn, $data);
    
                while($res= mysqli_fetch_array($que))
                {
                    ?>
                    <tr>
                    <td><?php echo $res['name'];?></td>
                    <td><?php echo $res['roll_no'];?></td>
                    <td><?php echo $res['email'];?></td>
                    <td><?php echo $res['address'];?></td>
                    <td><a href="update.php?id=<?php echo $res['id'];?>">update</td>
                    <td><a href="delete.php?id=<?php echo $res['id'];?>">Delete</td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </body>
</html>