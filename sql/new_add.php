<?php include '../db_connection.php'; ?>
<?php

session_start();
$uid=$_SESSION["user_id"];
$title=$_REQUEST["title"];
$description=$_REQUEST["description"];
$employer=$_REQUEST["employer"];
$role=$_REQUEST["role"];
$experience=$_REQUEST["experience"];
$education=$_REQUEST["education"];
$deadline=$_REQUEST["deadline"];
$tel1=$_REQUEST["tel1"];
$city=$_REQUEST["city"];
$date=date("Y-m-d");

$file_tmp1=$_FILES['photo']['tmp_name'];
$pic1="img_".$date."_".rand(1,10000)."_".$_FILES['photo']['name'];

move_uploaded_file($file_tmp1,"../uploads/".$pic1);

$sql="INSERT INTO jobs(uid,title,description,employer,role,experience,education,deadline,tel1,city,pic1,date) VALUES('$uid','$title','$description','$employer','$role','$experience','$education','$deadline','$tel1','$city','$pic1','$date')";

if ($conn->query($sql) === TRUE) {
 	header('Location: ../my_acc.php');
	exit;
} else {
  	echo "Error: " . $sql . "<br>" . $conn->error;
}


?>