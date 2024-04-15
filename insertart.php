<?php
$mysqli = new mysqli("localhost", "root", "root", "artisticaura");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$image = $mysqli->real_escape_string($_POST['image']);
$name = $mysqli->real_escape_string($_POST['name']);
$artist = $mysqli->real_escape_string($_POST['artist']);
$descrpition = $mysqli->real_escape_string($_POST['description']);

$query = "INSERT INTO images VALUES ('$image', '$name', '$artist', '$description')";

if ($mysqli->query($query) === true) {
   echo "<script>window.open('adminfeatures.html','_self');</script>";
    
} else {
    echo "Insert Failed: " . $mysqli->error;
}

$mysqli->close();
?>
