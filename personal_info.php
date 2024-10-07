<?php
require_once 'config.php';

function createPersonalInfo($name, $email, $phone, $address, $bio) {
    $sql = "INSERT INTO personal_info (name, email, phone, address, bio) VALUES ('$name', '$email', '$phone', '$address', '$bio')";
    if ($conn->query($sql) === TRUE) {
      echo "New personal info entry created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  
  // Read all personal info entries
  function readPersonalInfo() {
    $sql = "SELECT * FROM personal_info";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Phone: " . $row["phone"] . "<br>";
        echo "Address: " . $row["address"] . "<br>";
        echo "Bio: " . $row["bio"] . "<br>";
      }
    } else {
      echo "0 results";
    }
  }
  
  // Update a personal info entry
  function updatePersonalInfo($id, $name, $email, $phone, $address, $bio) {
    $sql = "UPDATE personal_info SET name='$name', email='$email', phone='$phone', address='$address', bio='$bio' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
      echo "Personal info entry updated successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  
  // Delete a personal info entry
  function deletePersonalInfo($id) {
    $sql = "DELETE FROM personal_info WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
      echo "Personal info entry deleted successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>