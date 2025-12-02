

<?php



$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$servername = "localhost";
$username = "root";

$password = "";
$dbname = "demo_web";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'INSERT INTO contact_us (name, email,subject,message)
VALUES ("'.$name.'", "'.$email.'", "'.$subject.'","'.$message.'")';

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$message = 'record created successfully';
header("Location:contact.php?message=".$message);

$conn->close();


?>













