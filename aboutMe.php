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
          <article>
              <h2>Welcome to About Hadley</h2>
              <p>Hello and thank you for visiting! I am thrilled to share my journey with you through this blog, where you'll find pictures, videos, and stories about what I do when I am not coding. If you would like to, there is the ability to leave comments about the blog at the bottom of the page. You can also view what other people have to say!</p>
              <img src="images/rock.png" alt="An interesting event"><img src="images/group.png" alt="An interesting event">
              <p>With a group of enthusiastic climbers by my side, each with a shared passion for challenge and nature, we tackle various routes ranging from sheer vertical faces to intriguing overhangs. The camaraderie is palpable, with climbers supporting and cheering each other on, sharing tips, and occasionally competing in friendly duels against gravity.</p>
              <p>Equipped with headlamps and a surge of adrenaline, we transition to night bouldering. The cool air and the quiet of the evening enhance our focus, the beam of our lights casting dramatic shadows on the rocks, creating a surreal, otherworldly experience. The tactile sensation of the cool, rough granite and the quiet whispers of encouragement become the only sensations that pierce the night.</p>
              <p>Bouldering at night in South Dakota is not just about testing our physical limits, but also about embracing the serene beauty of the natural world under the cover of darkness. It's a unique, unforgettable experience that bonds us to the landscape and to each other in profound ways.</p>
              <video controls>
                  <source src="climbing.MP4" type="video/mp4" alt="Your browser does not support the video tag.">
              </video>
          </article>
  
          <aside>
              <h3>Visitor Count: <span id="visitor-count">Loading...</span></h3>
          </aside>
          <section id="comments">
            <h3>Leave a Comment</h3>
            <form id="comment-form" action="commentResponse.php" method="post">
                <div class="form-group">
                    <label for="fullName">Name:</label>
                    <input type="text" id="fullName" name="fullName" required>
                </div>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <input required type="text" size="60" id="comment" name="comment">
                </div>
                <button type="submit" class="btn submit-button">Post Comment</button>
            </form>
          </section>
          <section id="comments">
            <h1>View Past Comments</h1>
            <a href="loadComments.php" class="btn">Click Here</a>
          </section>
      </main>
    <footer>
        <p>© 2024 Hadley Susie. All rights reserved.</p>
    </footer>
    <script src="new.js"></script>
    <script >
        document.addEventListener('DOMContentLoaded', function() {
        fetch('visitorCounter.php?increment=true')
        .then(response => response.text())
        .then(data => {
            document.getElementById('visitor-count').textContent = data;
        })
        .catch(error => console.error('Error fetching visitor count:', error));
        });
    </script>
</body>
</html>
