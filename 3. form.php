<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sign up...</h1>
    <form method='POST' action=''>
        <label>Enter your name:</label>
        <input type='text' name='name'><br>
        <label>Enter your age:</label>
        <input type='text' name='age'><br>
        <label>Enter your phone:</label>
        <input type='text' name='phone'><br>
        <label>Enter your email:</label>
        <input type='text' name='email'><br>
        <label>Enter your password:</label>
        <input type='password' name='password'><br><br>
        <input type='submit' name='submit'>
    </form>
    <?php
    if(isset($_POST['submit']))
{
    $servername='localhost';
    $username='root';
    $password='';

    $connect=new mysqli($servername,$username,$password,'students1');

    if($connect -> connect_error){
        die ('Connection failed'.$connect->connect_error);
    }
    echo ('Connection Successful');

    $name=$_POST['name'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="INSERT INTO `_database`(`name`, `age`, `phone`, `email`, `pwd`) VALUES ('$name','$age','$phone','$email','$password')";
    $data=mysqli_query($connect,$query);
}
    ?>
</body>
</html>