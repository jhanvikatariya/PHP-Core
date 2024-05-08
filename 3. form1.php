<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action=''>
    <h1>Registration Form</h1>
    <label for='name'>Enter your name:</label>
    <input type='text' name='name'></input><br>
    <label for='age'>Enter your age:</label>
    <input type='text' name='age'></input><br>
    <label for='email'>Enter your email:</label>
    <input type='text' name='email'></input><br>
    <label for='pwd'>Enter phone:</label>
    <input type='text' name='phone'></input><br>
    <input type="submit" name="submit">
<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,'students1');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$query="INSERT INTO `student_info`(`name`, `age`, `ph_no`, `email`) VALUES ('$name','$age','$email','$phone')";
$execute=mysqli_query($conn,$query);
}
?>
</body>
</html>