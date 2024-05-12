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
    <?php
    include("submitComment.php");
    ?>
    <h1>Return to About Me page:</h1>
    <a href="aboutMe.php" class="btn">Click Here</a>
  </main>
  <footer>
      <p>© 2024 Hadley Susie. All rights reserved.</p>
  </footer>

  <script src="new.js"></script>
</body>
</html>