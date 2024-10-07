<?php
require_once 'config.php';

$project_name = $_POST["project_name"];
$description = $_POST["description"];
$start_date = $_POST["start_date"];
$end_date = $_POST["end_date"];

$sql = "INSERT INTO projects (project_name, description, start_date, end_date) VALUES ('$project_name', '$description', '$start_date', '$end_date')";

if ($conn->query($sql) === TRUE) {
  echo "New project added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>