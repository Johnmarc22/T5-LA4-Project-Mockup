<?php
$conn = new mysqli("localhost", "root", "", "users_db");

$title = $_POST['title'];
$content = $_POST['content'];
$imagePath = "";

if (!empty($_FILES['image']['name'])) {
    $imagePath = "http://localhost/login/" . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
}

$sql = "INSERT INTO posts (title, content, image) VALUES ('$title', '$content', '$imagePath')";
$conn->query($sql);
?>