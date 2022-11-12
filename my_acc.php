<?php include 'db_connection.php'; ?>
<?php $page=3; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Jobs.lk | My account</title>

	<?php include 'head.php'; ?>
</head>
<body>

<!-- Nav bar -->
<?php include 'nav.php'; include 'login_check.php'; ?>
<!-- Nav bar end -->


<!-- Area 1 -->
<style type="text/css">
	.btn3{background-color:#1580d1;}
	
</style>
<div class="container mt-5 bg-light text-center">
	<h1 class="pt-5" style="color:#131166;">My Account</h1>
	<a href="new_add.php" class="btn btn-info m-3 btn3">Create a new add</a>
	<table class="table">
        <tr>
        	<th><font style="color:#131166; font-size: 17px; ">Add ID</font></th>
        	<th><font style="color:#131166; font-size: 17px; ">Title</font></th>
        	<th><font style="color:#131166; font-size: 17px; ">Status</font></th>
        	<th><font style="color:#131166; font-size: 17px; ">Action</font></th>
        </tr>
        
        <?php
		$uid=$_SESSION["user_id"];
		$sql = "SELECT * FROM jobs WHERE uid='$uid' ";
		$result = $conn->query($sql);
		while($row=$result->fetch_assoc()) { ?>

        <tr>
        	<td><?php echo $row["id"]; ?></td>
        	<td><?php echo $row["title"]; ?></td>
			<td><?php echo $row["status"]; ?></td>
        	<td>
        		<a href="edit_add.php?id=<?php echo $row["id"]; ?>" class="btn btn-sm  btn-secondary btn3">Edit</a>
        		<a href="sql/delete_add.php?id=<?php echo $row["id"]; ?>" class="btn btn-sm  btn-danger">Delete</a>
        	</td>
        </tr>
        <?php } ?>		
	</table>
</div>
<!-- Area 1 end -->

<!-- Footer -->
<?php include 'footer.php'; ?>
<!-- Footer end-->


</body>
</html>