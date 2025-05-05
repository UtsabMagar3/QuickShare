<?php
session_start();
if (isset($_POST['share'])) {
    $sharedText = $_POST['text'];

    // Store the shared text in session or a database
    $_SESSION['shared_text'] = $sharedText;
    echo "<h3>Your shared text:</h3>";
    echo "<p>" . nl2br(htmlspecialchars($sharedText)) . "</p>";
    echo "<p>Share this text across devices or use it anywhere!</p>";
}
?>
