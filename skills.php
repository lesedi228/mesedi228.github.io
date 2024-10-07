<?php
  require_once 'config.php';

  // Insert skill
  if (isset($_POST['insert_skill'])) {
    $skill_name = $_POST['skill_name'];
    $skill_level = $_POST['skill_level'];

    $sql = "INSERT INTO skills (skill_name, skill_level) VALUES ('$skill_name', '$skill_level')";
    if ($conn->query($sql) === TRUE) {
      echo "New skill inserted successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  // Edit skill
  if (isset($_POST['edit_skill'])) {
    $skill_id = $_POST['skill_id'];
    $skill_name = $_POST['skill_name'];
    $skill_level = $_POST['skill_level'];

    $sql = "UPDATE skills SET skill_name='$skill_name', skill_level='$skill_level' WHERE skill_id='$skill_id'";
    if ($conn->query($sql) === TRUE) {
      echo "Skill updated successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  // Delete skill
  if (isset($_POST['delete_skill'])) {
    $skill_id = $_POST['skill_id'];

    $sql = "DELETE FROM skills WHERE skill_id='$skill_id'";
    if ($conn->query($sql) === TRUE) {
      echo "Skill deleted successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  // Display skills
  $sql = "SELECT * FROM skills";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["skill_id"] . "</td>";
      echo "<td>" . $row["skill_name"] . "</td>";
      echo "<td>" . $row["skill_level"] . "</td>";
      echo "<td><a href='edit_skill.php?skill_id=" . $row["skill_id"] . "'>Edit</a> | <a href='delete_skill.php?skill_id=" . $row["skill_id"] . "'>Delete</a></td>";
      echo "</tr>";
    }
  } else {
    echo "0 results";
  }
?>