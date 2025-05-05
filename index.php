<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickShare</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to QuickShare</h1>
        <p>Upload files or share text instantly across devices!</p>
        
        <!-- File upload form -->
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label for="fileUpload">Choose a file to upload:</label>
            <input type="file" name="fileUpload" id="fileUpload" required>
            <button type="submit" name="upload">Upload</button>
        </form>

        <!-- Text sharing form -->
        <form action="share.php" method="POST">
            <label for="text">Share a quick message:</label>
            <textarea name="text" id="text" rows="5" required></textarea>
            <button type="submit" name="share">Share Text</button>
        </form>
    </div>
</body>
</html>
