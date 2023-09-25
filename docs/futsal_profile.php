<?php
// Include database connection logic (mysqli)
include "loginsystem/subsystem/_dbconnect_futsal.php";
// Get the futsal ID from the URL parameter
$futsalId = $_GET['id'];
// Assuming you pass the ID in the URL like "profile.php?id=1"

// Query the database to retrieve futsal data based on the ID
$sql = "SELECT * FROM futsal_facilities  WHERE futsal_id = $futsalId;";
$result = mysqli_query($conn, $sql) or die("Query Failed");
$row = mysqli_fetch_assoc($result);

//Query 2:
$sql2 = "SELECT image_url FROM `futsal_images` WHERE futsal_id =$futsalId";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
if (mysqli_num_rows($result2) != 1) {
    $row2['image_url'] = "IMG-65102003eeb1d2.74902540.jpg";
}


// Replace these lines with your database query logic
$futsalName = $row["futsal_name"];
$futsalLocation = $row["futsal_address"];
$futsalDescription = $row["futsal_description"];
$futsalImgUrl = $row2["image_url"];

// Include the template and pass the data
include('futsal_profile_template.php');
?>