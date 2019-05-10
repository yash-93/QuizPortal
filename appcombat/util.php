<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "webgators";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$firstMember = $_POST['firstMember']; 
	$secondMember = $_POST['secondMember'];
	$number = $_POST['number'];
	$score = $_POST['score'];
	
	$sql = "INSERT INTO result VALUES ('$firstMember', '$secondMember', '$number', $score)";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
