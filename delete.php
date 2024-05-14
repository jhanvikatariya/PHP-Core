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



    $query="DELETE from _database where id='$id'";
    echo $query;
    $execute=mysqli_query($conn,$query);
        
    header("Location: http://localhost/tih/4.%20table.php");
    ?>
