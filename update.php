<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $id=$_GET['id'];
    echo $id;
    $servername='localhost';
    $username='root';
    $password='';

    $conn=new mysqli($servername,$username,$password,'students1');
    if($conn -> connect_error){
        die ('Connection failed'.$conn->connect_error);
    }
    echo 'Connection Successful';
    $query="select * from _database where id='$id'";
    $execute=mysqli_query($conn,$query);
    $fetch=mysqli_fetch_array($execute);
    ?>
    <h1>Update values</h1>
    <form method='POST' action=''>
        <label>Enter your name:</label>
        <input type='text' name='name' value="<?php echo $fetch['name']?>"><br>
        <label>Enter your age:</label>
        <input type='text' name='age' value="<?php echo $fetch['age']?>"><br>
        <label>Enter your phone:</label>
        <input type='text' name='phone' value="<?php echo $fetch['phone']?>"><br>
        <label>Enter your email:</label>
        <input type='text' name='email' value="<?php echo $fetch['email']?>"><br>
        <label>Enter your password:</label>
        <input type='password' name='password' value="<?php echo $fetch['pwd']?>"><br><br>
        <input type='submit' name='submit'>
    </form>
    <?php
    if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="UPDATE `_database` SET `name`='$name' , `age`='$age', `phone`='$phone', `email`='$email', `pwd`='$password'  where id='$id'";
    $data=mysqli_query($conn,$query);
    header("Location: http://localhost/tih/4.%20table.php");
}
    ?>
</body>
</html>