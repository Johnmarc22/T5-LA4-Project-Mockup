<?php
$conn = new mysqli("localhost", "root", "", "users_db");
$data = json_decode(file_get_contents("php://input"), true);
$id = $data['id'];
$conn->query("DELETE FROM posts WHERE id = $id");
?>