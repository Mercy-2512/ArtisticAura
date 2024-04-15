<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "artisticaura";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select all images
$sql = "SELECT name, image FROM images";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $imageId = $row["name"];  // Corrected column name
        $imageData = $row["image"];  // Corrected column name
        echo '<div class="col">';
        echo '<div class="card">';
        echo  '<center>';
            <img src="Buddha.jpg" class="card-img-top" alt="Fissure in Sandstone" style="height: 300px; width: 200px;"/>
        echo '</center>';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">Buddha</h5>';
        echo  '<p class="card-text">Colorful Buddha Painting by Janvi Sharma</p>';
        echo   '<a href="form.html" class="btn btn-primary">Buy Now</a>';
        echo    '</div>';
        echo  '</div>';
        echo '</div>';
       
    }
} else {
    echo "No images found in the database.";
}

// Close the database connection
$conn->close();
?>
