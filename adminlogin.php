<?php
$mysqli = new mysqli("localhost", "root", "root", "artisticaura");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$password = $_POST['password'];
$query = "SELECT * FROM adminlogin WHERE email = '$email' AND pass='$password'";
$result = $mysqli->query($query);
if ($result) 
{
    if ($result->num_rows> 0) 
    {
        echo "<script>window.open('adminfeatures.html','_self');</script>";
    } 
    else 
    {
            
        echo "Incorrect Creditials.";
    }
} 
 else 
 {
    
    echo "Error: " . $mysqli->error;
}
$mysqli->close();
?>
