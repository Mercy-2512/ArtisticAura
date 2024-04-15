<?php
$mysqli = new mysqli("localhost", "root", "root", "artisticaura");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$fn = $mysqli->real_escape_string($_POST['firstname']);
$ln = $mysqli->real_escape_string($_POST['lastname']);
$email = $mysqli->real_escape_string($_POST['email']);
$password = $mysqli->real_escape_string($_POST['password']);

$query = "INSERT INTO olduser (firstname, lastname, email, pass) VALUES ('$fn', '$ln', '$email', '$password')";

if ($mysqli->query($query) === true) {
   echo "<script>window.open('login.html','_self');</script>";
    
} else {
    echo "Insert Failed: " . $mysqli->error;
}

$mysqli->close();
?>
