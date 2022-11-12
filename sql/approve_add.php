<?php include '../db_connection.php'; ?>
<?php
$id=$_REQUEST["id"];
$status=$_REQUEST["status"];

$sql = "UPDATE jobs SET status='$status' WHERE id='$id' ";
if ($conn->query($sql) === TRUE) {
 	header('Location: ../admin.php');
	exit;
} else {
  	echo "Error: " . $sql . "<br>" . $conn->error;
}

?>