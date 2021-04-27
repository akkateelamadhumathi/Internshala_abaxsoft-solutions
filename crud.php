<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Internshala";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name']
$email = $_POST['email']
$mobile = $_POST['mobile']
$state = $_POST['state']
$city = $_POST['city']
$address = $_POST['address']

// CRUD OPERATIONS

// sql to create a table
// table name : abaxsoft

$create_query =" CREATE TABLE abaxsoft (
    Id INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(100),
    Email VARCHAR(100),
    Mobile INT,
    State VARCHAR(50),
    City VARCHAR(50),
    address VARCHAR(255) ,
    Primary key(Id)
)";

if ($conn->query($create_query) === TRUE) {
    echo "Table abaxsoft created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  //insert query
  $insert_query = "INSERT INTO abaxsoft(Name, Email, Mobile, State, City, Address) VALUES ('$name', '$email', '$mobile', '$state', '$city', '$address')"; 
  if (mysqli_query($conn, $insert_query)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
  }
  
  // Read the data of the table
  $select_query = "SELECT * FROM abaxsoft";
  if (mysqli_query($conn, $select_query)) {
    echo "Records displayed successfully";
  } else {
    echo "Error displaying the  records: " . mysqli_error($conn);
  }

  // Update the values of the data
  $update_query = "UPDATE abaxsoft SET State = 'tamilnadu' WHERE  Id = 4";
  if (mysqli_query($conn, $update_query)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
 
  // Delete the data from the table
  $delete_query = "DELETE FROM abaxsoft WHERE City = 'Madurai' ";
  if (mysqli_query($conn, $delete_query)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  $conn->close();
  ?>