<?php include '../db_connection.php'; ?>

<?php
$name=$_REQUEST["name"];
$tel=$_REQUEST["tel"];
$uname=$_REQUEST["uname"];
$pw=$_REQUEST["pw"];

$sql="INSERT INTO users(name,tel,uname,pw) VALUES('$name','$tel','$uname','$pw')";
if ($conn->query($sql) === TRUE) {
 	header('Location: ../login.php');
	exit;
} else {
  	echo "Error: " . $sql . "<br>" . $conn->error;
}

?>