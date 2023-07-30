<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $ndetail = $_POST["ndetail"];

    // Database connection parameters
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "flood-news";

    // Create a database connection
    $conn = new mysqli($hostname, $username, $password, $dbname);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement
    $sql = "INSERT INTO news (detail) VALUES ('$ndetail')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
      echo "Data inserted successfully!";
       // Redirect back to the form page (index.html) after a short delay
       header("refresh:2;url=admin.html");
       exit;
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

    // Close the statement and connection
    $conn->close();
}
?>
