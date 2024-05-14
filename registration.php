<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registration Page</h2>
    <form method='POST' action = ''>
    Enter name :<br>
    <input type="text" name='name'><br><br>
    Enter email :<br>
    <input type="text" name='email'><br><br>
    Enter password :<br>
    <input type="password" name='password'><br><br>
    Enter confirm password :<br>
    <input type="password" name='c_password'><br><br><br>
    <input type='submit' name='submit'>
</form>
<?php
if (isset($_POST['submit']))
{
    $servername='localhost';
    $username='root';
    $password='';

    $conn=new mysqli($servername,$username,$password,'students1');

    if ($conn->connect_error) {
        die('Connection failed'.$conn -> connect_error);
    }
    echo ("Connection successful");
    echo ('<br>');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $c_password=$_POST['c_password'];
    if ($password!=$c_password){
     echo "Enter same password in both the fields";
        die();
    }
    $query="INSERT INTO `logindata`( `name`, `email`, `password`, `c_password`) VALUES ('$name','$email','$password','$c_password')";
    $execute=mysqli_query($conn ,$query);
}
?>
</body>
</html>