<?php
  require_once 'config.php';

  $skill_id = $_GET['skill_id'];

  $sql = "DELETE FROM skills WHERE skill_id='$skill_id'";
  if ($conn->query($sql) === TRUE) {
    echo "Skill deleted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>