<?php
if(!isset($_SESSION["user_id"]))
{
	echo "<script>alert ('Please login first!'); window.location.replace('login.php');</script>";
}
?> 