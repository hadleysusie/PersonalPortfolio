<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['fullName']) || empty($_POST['comment'])) {
        echo "<h3>Error: All fields are required.</h3>";
    } else {

        $query = "INSERT INTO comments(
            fullName,
            comment
            ) VALUES (
              '$_POST[fullName]',
              '$_POST[comment]'
            );";
            $result = mysqli_query($db, $query);
            echo"<h3>Thank you for your comment!</h3>";
        }
    }

    mysqli_close($db);
?>
