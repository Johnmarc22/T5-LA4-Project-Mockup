<?php
$conn = new mysqli("localhost", "root", "", "users_db");
$result = $conn->query("SELECT * FROM posts");
$posts = [];

while ($row = $result->fetch_assoc()) {
    $posts[] = $row;
}

echo json_encode($posts);
?>