<?php
  require_once 'config.php';

  $skill_id = $_GET['skill_id'];

  $sql = "SELECT * FROM skills WHERE skill_id='$skill_id'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $skill_name = $row["skill_name"];
      $skill_level = $row["skill_level"];
    }
  }

  if (isset($_POST['update_skill'])) {
    $skill_name = $_POST['skill_name'];
    $skill_level = $_POST['skill_level'];

    $sql = "UPDATE skills SET skill_name='$skill_name', skill_level='$skill_level' WHERE skill_id='$skill_id'";
    if ($conn->query($sql) === TRUE) {
      echo "Skill updated successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>