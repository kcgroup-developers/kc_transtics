<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dnl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve all posts from the database
$sql = "SELECT * FROM posts";

// Execute the query
$result = $conn->query($sql);

// Check if there are rows in the result
if ($result->num_rows > 0) {
    echo "<h2>All Posts</h2>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . htmlspecialchars($row["title"]) . "</h3>"; // Use htmlspecialchars to prevent XSS attacks
        echo "<p><strong>Date:</strong> " . htmlspecialchars($row["date"]) . "</p>";
        echo "<p><strong>Posted By:</strong> " . htmlspecialchars($row["posted_by"]) . "</p>";
        echo "<p>" . nl2br(htmlspecialchars($row["content"])) . "</p>"; // Use nl2br to preserve line breaks
        echo "<p><strong>Tag:</strong> " . htmlspecialchars($row["tag"]) . "</p>";

        // Check if a file path is present for the post
        if (!empty($row["image"])) {
            // Display the image with proper HTML escaping
            echo "<img src='" . htmlspecialchars($row["image"]) . "' alt='Post Image'>";
        }

        echo "</div>";
        echo "<hr>"; // Optional: Add a horizontal line between posts for better readability
    }
} else {
    echo "No posts found.";
}

// Close the database connection
$conn->close();
?>
