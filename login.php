<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
<div class="topnav">
  
  <a class="active" href='index.html'>Home</a>
  <a href="login.php">Login</a>
  <a href="form.php">Form</a>
</div>
    <h2>Login</h2>
    <form method='post' action=''>
    Enter your username:    
    <input type='text' name='email'>
    <br>
    <br>
    Enter you password:     
    <input type='password' name='password'><br><br>
    <input type='submit' name='submit'>
    </form>
    <?php
    if(isset($_POST['submit'])){
        
    $servername='localhost';
    $username='root';
    $password='';

    $conn=new mysqli($servername,$username,$password,'students1');

    if ($conn->connect_error) {
        die('Connection failed'.$conn -> connect_error);
    }
    echo ("Connection successful<br><br>");

    $email=$_POST['email'];
    $password=$_POST['password'];

    $query= "SELECT * from `userdetails` where email='$email' AND `password`='$password' ";
    $execute=mysqli_query($conn,$query);
    $fetch=mysqli_fetch_array($execute);

    if ($password == $fetch['password'] and $email==$fetch['email']) {
        session_start();
        $_SESSION['email']=$email;
        header("Location: http://localhost/tih/form.php");
    } elseif($password != $fetch['password'] && $email!=$fetch['email']) {
        echo 'Login first to visit the form';
        header("Location: http://localhost/tih/new.php") ;
    }
}
?>
</body>
</html>