<?php include '../db_connection.php'; ?>
<?php

$id=$_REQUEST["id"];


$sql="DELETE FROM jobs WHERE id='$id' ";
if ($conn->query($sql) === TRUE) {
 	header('Location: ../my_acc.php');
	exit;
} else {
  	echo "Error: " . $sql . "<br>" . $conn->error;
}

?>