<?php
session_start();
include("common/document_head.html");
?>
  <header>
      <?php
      include("common/navbar.html");
      include("dbConnect.php");
      ?>
  </header>
  <main>
    <h1>Comments:</h1>
    <?php
        $query = "SELECT fullName, comment, DATE_FORMAT(created_at, '%M %d, %Y at %h:%i %p') AS formatted_date FROM comments ORDER BY created_at DESC";
        $result = mysqli_query($db, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='comments-list'>";
                echo "<p><strong>" . htmlspecialchars($row['fullName']) . "</strong> - " . $row['formatted_date'] . "</p>";
                echo "<p>" . htmlspecialchars($row['comment']) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No comments yet.</p>";
        }
        mysqli_free_result($result);
        mysqli_close($db);
    ?>
    <h4>Return to About Me page:</h4>
    <a href="aboutMe.php" class="btn">Click Here</a>
  </main>
  <footer>
      <p>© 2024 Hadley Susie. All rights reserved.</p>
  </footer>

  <script src="new.js"></script>
</body>
</html>
