<?php
include 'koneksi.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $email = $_POST["email"];
    $idplayer = $_POST["idplayer"];
    $item = $_POST["item"];
    $price = $_POST["price"];

    // Get the last ID from the database
    $lastIdQuery = "SELECT MAX(id) AS maxId FROM pembeli";
    $result = mysqli_query($db, $lastIdQuery);
    $row = mysqli_fetch_assoc($result);
    $lastId = $row["maxId"];

    // Increment the last ID for the new data
    $newId = $lastId + 1;

    // Insert the data into the database
    $insertQuery = "INSERT INTO pembeli (id, email, idplayer, item, price) VALUES ($newId, '$email', '$idplayer', '$item', '$price')";
    $insertResult = mysqli_query($db, $insertQuery);

    if ($insertResult) {
        // Data inserted successfully
        echo "Data inserted successfully with ID: " . $newId;
    } else {
        // Error in insertion
        echo "Error: " . mysqli_error($db);
    }
} else {
    // Redirect to the form page if accessed directly without form submission
    header("Location: katalog.php");
    exit();
}
?>
