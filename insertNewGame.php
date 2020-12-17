<?php
 
// Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "DB Connected successfully";
 
// this will select the Database sample_db
mysqli_select_db($conn,"gamecentral");
 
echo "\n DB is seleted as Test  successfully";
 
// create INSERT query
 
 
$sql="INSERT INTO games (title,releaseDate) VALUES (?,?)";
 
if ($stmt = mysqli_prepare($conn, $sql)) {
	mysqli_stmt_bind_param($stmt, "ss", $_POST['title'], $_POST['releaseDate']);
	mysqli_stmt_execute($stmt);

    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
?>
<meta http-equiv="refresh" content="3; URL=/final_project/index" />