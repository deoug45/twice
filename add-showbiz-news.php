<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Showbiz News</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <section class="add-news-form">
    <h2>Add Showbiz News</h2>
    <form action="submit-news.php" method="POST">
      <input type="text" name="news_title" placeholder="Title of News" required><br>
      <textarea name="news_content" placeholder="Content of News" required></textarea><br>
      <input type="text" name="image_url" placeholder="Image URL" required><br>
      <input type="hidden" name="category" value="Showbiz">
      <button type="submit">Submit News</button>
    </form>
  </section>

</body>
</html>
