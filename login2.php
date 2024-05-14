<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'students1';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Get input values
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT email, password FROM logindata WHERE email=? AND password=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Redirect to new.php upon successful login
        header("Location: http://localhost/tih/new.php");
        exit(); // Terminate script after redirection
    } else {
        // No matching record found
        echo "Invalid email or password";
    }

    // Close connection
    $conn->close();
}
?>

</body>
</html>