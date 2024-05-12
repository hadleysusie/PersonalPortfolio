<?php
session_start();
include("common/document_head.html");
?>
    <header>
        <?php
        include("common/navbar.html");
        ?>
    </header>
      <main>
          <h2>Contact Me</h2>
          <form id="contactForm" action="contactResponse.php" method="post">
            <div class="form-group">
                <label for="fullName">Name:</label>
                <input type="text" name="fullName" placeholder="Your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input required type="text" name="email" size="60"
                title=
                "x@y.z, x and y can have . or -, z only 2 or 3 letters"
                pattern=
                "^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input required type="text" size="60" name="phone"
                        title="xxx-yyy-zzzz"
                        pattern="^(\d{3}-)?\d{3}-\d{4}$">
            </div>
            <div class="form-group">
                <label for="contactMessage">Message:</label>
                <input required type="text" size="60" name="contactMessage">
            </div>
            <button type="submit" class="btn submit-button">Send Message</button>
        </form>
    </main>
    <footer>
        <p>© 2024 Hadley Susie. All rights reserved.</p>
    </footer>

    <script src="new.js"></script>
</body>
</html>