<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $candidate = $_POST['candidate'];

    // Here you would normally save the vote to a database
    // For this example, we'll just simulate a successful submission

    echo "Thank you for voting, your vote counts " . htmlspecialchars($candidate) . "!";
} else {
    echo "Invalid request method.";
}
?>