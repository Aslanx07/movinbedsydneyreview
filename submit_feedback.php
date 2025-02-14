<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $comments = htmlspecialchars($_POST["comments"]);

    // Save to a text file (for simplicity)
    $file = fopen("feedback.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nFeedback: $comments\n\n");
    fclose($file);

    // Thank the user
    echo "<h1>Thank you for your feedback, $name!</h1>";
    echo "<p>We appreciate your thoughts and will work to improve.</p>";
    echo "<a href='index.html'>Go back</a>";
}
?>