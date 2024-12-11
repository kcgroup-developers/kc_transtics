<?php
// Establish a connection to the database

include "./dnl_dashboard/PHP/config/db_conn.php";
// Process the search query
if(isset($_GET['search'])) {
    $search = $_GET['search'];

    // Query to search for posts
    $sql = "SELECT * FROM posts WHERE title LIKE '%$search%' OR content LIKE '%$search%' OR tag LIKE '%$search%' LIMIT 5";
    $result = $conn->query($sql);
    // Display search results
    echo '<div id="search-results">
    <h5 style="color: black; margin-top:20px"></h5>
    <hr>
    <div class="news-row">';
    if($result !== false && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="ft-blog-post-feed-innerbox">';
            echo '<a href="blog-single.php?id=' . $row["id"] . '">';
            echo '<div class="ft-blog-post-feed-img">';
            echo '<img class="zoom-effect" src="./dnl_dashboard/' . $row["image"] . '" alt="" />';
            echo '</div>';
            echo '</a>';
            echo '<div class="ft-blog-post-feed-text-wrapper headline pera-content">';
            echo '<div class="blog-meta">';
            echo '<a href="#"><i class="fas fa-user"></i> By ' . $row["posted_by"] . '</a>';
            echo '<a href="#"><i class="far fa-clock"></i> ' . $row["date"] . '</a>';
            echo '<a href="tag.php?tag=' . $row["tag"] . '"><i class="fas fa-tag"></i> ' . $row["tag"] . '</a>';
            echo '</div>';
            echo '<div class="ft-blog-feed-title-text">';
            echo '<h3>';

            $title = $row["title"];
            if (strlen($title) > 100) {
                $title = substr($title, 0, 100) . '...';
            }

            echo '<a href="blog-single.php?id=' . $row["id"] . '">' . $title . '</a>';
            echo '</h3>';

            echo '<p>';

            $content = $row["content"];
            if (strlen($content) > 500) {
                $content = substr($content, 0, 500) . '...';
            }

            echo $content;
            echo '</p>';
            echo '</div>';
            echo '<div class="ft-btn-2">';
            echo '<a href="blog-single.php?id=' . $row["id"] . '">';
            echo '<i class="icon-first flaticon-right-arrow"></i>';
            echo '<span>Read More</span>';
            echo '</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>No results found.</p>';
    }
}
// Close the database connection
$conn->close();
?>