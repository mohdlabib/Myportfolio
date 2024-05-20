<?php

require_once '../ini.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['message'])) {
        $name = htmlspecialchars($_POST['name']);
        $message = htmlspecialchars($_POST['message']);
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');

        $sql = "INSERT INTO contacts (name, message, created_at, updated_at) VALUES ('$name', '$message', '$created_at', '$updated_at')";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(['status' => 'success', 'message' => 'Data inserted successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error inserting data: ' . mysqli_error($conn)]);
        }

    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid input']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}



