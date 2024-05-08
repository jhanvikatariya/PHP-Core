<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Registration </h1>

<?php
    $servername='localhost';
    $username='root';
    $password='';

    $conn=new mysqli($servername,$username,$password,'students1');
    if($conn -> connect_error){
        die ('Connection failed'.$conn->connect_error);
    }
    echo 'Connection Successful';
?>
<table action='' border='2' cellspacing='7'>
<tr>
    <th>Name</th>
    <th>Age</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Password</th>
</tr>
<?php
 $query = 'Select * from _database';
 $execute= mysqli_query($conn,$query);
 while($fetch=mysqli_fetch_array($execute))
 {
?>
<tr>
    <td><?php echo $fetch['name'];?>
    <td><?php echo $fetch['age'];?>
    <td><?php echo $fetch['phone'];?>
    <td><?php echo $fetch['email'];?>
    <td><?php echo $fetch['pwd'];?>
</tr>
<?php
}
?>
</table>
</body>
</html>