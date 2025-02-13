<?php
session_start(); // Start the session

// If session variable for news doesn't exist, create an array
if (!isset($_SESSION['news'])) {
    $_SESSION['news'] = [];
}

// Store the news with a timestamp and category
$news_item = [
    'content' => $_POST['news_content'],
    'title' => $_POST['news_title'],
    'category' => $_POST['category'], // Add category
    'image_url' => $_POST['image_url'], // URL for image
    'timestamp' => time() // Current timestamp
];

$_SESSION['news'][] = $news_item; // Add to session

header("Location: showbiz.php"); // Redirect back to Showbiz page
exit();
?>
