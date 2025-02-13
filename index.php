<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twice - Top Stories</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link your CSS -->
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo">
            <img src="logo.jpg" alt="Twice Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php" class="active">Top Stories</a></li>
                <li><a href="showbiz.html">Showbiz</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Search news...">
            <button>Search</button>
        </div>
    </header>

    <!-- News Submission Form -->
    <section class="news-form">
        <h2>Post a News Update</h2>
        <form action="submit-news.php" method="POST">
            <textarea name="news_content" placeholder="Write your news here..." required></textarea>
            <button type="submit">Submit News</button>
        </form>
    </section>

    <!-- Top Stories Grid -->
    <section class="news-grid">
        <h2 class="section-title">Top Stories</h2>
        <div class="grid-container">
            <?php
            // Remove expired news (older than 48 hours)
            if (isset($_SESSION['news'])) {
                $_SESSION['news'] = array_filter($_SESSION['news'], function ($news_item) {
                    return (time() - $news_item['timestamp']) < (48 * 3600);
                });

                // Display valid news
                if (!empty($_SESSION['news'])) {
                    foreach ($_SESSION['news'] as $news) {
                        echo '<article class="news-card">
                                <p>' . htmlspecialchars($news['content']) . '</p>
                              </article>';
                    }
                } else {
                    echo "<p>No recent news available.</p>";
                }
            } else {
                echo "<p>No recent news available.</p>";
            }
            ?>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2023 Twice. All rights reserved.</p>
    </footer>

</body>
</html>
