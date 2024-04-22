<?php

function create($title, $content, $image, $user_id, $category_id)
{
    session_start();
    include "db_conn.php";

    if (empty($title)) {
        header("Location:");
        exit();
    } else if (empty($content)) {
        header("Location:");
        exit();
    } else if (empty($user_id)) {
        header("Location:");
        exit();
    } else if (empty($category_id)) {
        header("Location:");
        exit();
    } else {
        $sql = "INSERT INTO posts (title, content, image, user_id, category_id) VALUES (?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param($title, $content, $image, $user_id, $category_id);
        $stmt->execute();
    }
}