<?php
session_start();
include("dbConnect.php");


if (isset($_GET['increment']) && $_GET['increment'] == 'true') {

    $updateQuery = "UPDATE visitor_count SET count = count + 1 WHERE id = 1";
    mysqli_query($db, $updateQuery);
}


$selectQuery = "SELECT count FROM visitor_count WHERE id = 1";
$result = mysqli_query($db, $selectQuery);

if ($row = mysqli_fetch_assoc($result)) {
    echo $row['count']; 
} else {
    echo "Unavailable"; 
}

mysqli_close($db);
?>
