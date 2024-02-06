<?php
// chat.php

// Assuming you have a database named 'chat' with a table 'messages' having columns 'id', 'user', 'message', 'timestamp'

// Database connection
include("./connect.php");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch messages from the database
$query = "SELECT * FROM messages ORDER BY timestamp DESC";
$result = $conn->query($query);

$messages = [];
while ($row = $result->fetch_assoc()) {
    $messages[] = $row;
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($messages);

// Close the connection
$conn->close();
?>
