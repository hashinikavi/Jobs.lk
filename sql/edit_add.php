<?php include '../db_connection.php'; ?>
<?php

$id=$_REQUEST["id"];
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


$sql = "UPDATE jobs SET title='$title',description='$description',employer='$employer',role='$role',experience='$experience',education='$education',deadline='$deadline',tel1='$tel1',city='$city' WHERE id='$id' ";
$conn->query($sql);

$file_tmp1=$_FILES['photo']['tmp_name'];
$pic1="img_".$date."_".rand(1,10000)."_".$_FILES['photo']['name'];

if($file_tmp1!="")
{
	move_uploaded_file($file_tmp1,"../uploads/".$pic1);
	$sql = "UPDATE jobs SET pic1='$pic1' WHERE id='$id' ";
	$conn->query($sql);
}

header('Location: ../my_acc.php');
exit;

?>