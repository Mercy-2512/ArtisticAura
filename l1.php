<?php
session_start();

$mysqli = new mysqli("localhost", "root", "root", "artisticaura");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $password = $_POST['password'];
    
    $query = "SELECT * FROM olduser WHERE email = '$email' AND pass = '$password'";
    $result = $mysqli->query($query);

    if ($result) {
        if ($result->num_rows > 0) {
            while($row=mysqli_fetch_assoc($result))
            {
            $_SESSION["email"] = $email; 
            $name=$row['firstname'];
            setcookie("em",$name,time()+3600);
            }
            echo "<script>window.open('collections.php', '_self');</script>";
        } else {
            echo "Incorrect Credentials.";
        }
    } else {
        echo "Error: " . $mysqli->error;
    }
} else {
    echo "Email and password not provided.";
}

$mysqli->close();
?>
