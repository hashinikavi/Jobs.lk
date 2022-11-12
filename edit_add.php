<?php include 'db_connection.php'; ?>
<?php $page=3;?>
<!DOCTYPE html>
<html>
<head>
	<title>Jobs.lk | Edit add</title>

	<?php include 'head.php'; ?>
</head>
<body>

<!-- Nav bar -->
<?php include 'nav.php'; include 'login_check.php'; ?>
<!-- Nav bar end -->


<!-- Area1 -->
<?php
$id=$_REQUEST["id"];		
$sql = "SELECT * FROM jobs WHERE id='$id' ";
$result = $conn->query($sql);
while($row=$result->fetch_assoc()) { ?>


<div class="container bg-white mt-5 mb-5 text-center" style="background-image:url(image/edit.jpg); background-repeat:no-repeat; background-size:cover; padding-top:50px; padding-bottom:50px;">
	<center>
		<h1 style="color:#131166;">Edit Advertisement</h1>

	<form action="sql/edit_add.php" method="post" enctype="multipart/form-data">
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="title" class="form-control" id="floatingInput" placeholder="title" value="<?php echo $row["title"]; ?>" 
	        >
	        <label for="floatingInput">Enter Title:</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	       <input type="" name="description" class="form-control" id="floatingInput" placeholder="description"value="<?php echo $row["description"]; ?>" >
           <label for="floatingInput">Enter Description</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="employer" class="form-control" id="floatingInput" placeholder="employer"value="<?php echo $row["employer"]; ?>" >
	        <label for="floatingInput">Employer</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="role" class="form-control" id="floatingInput" placeholder="role" value="<?php echo $row["role"]; ?>" >
	        <label for="floatingInput">Enter Role</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="experience" class="form-control" id="floatingInput" placeholder="experience" value="<?php echo $row["experience"]; ?>" >
	        <label for="floatingInput">Required work experience(years)</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="education" class="form-control" id="floatingInput" placeholder="education" value="<?php echo $row["education"]; ?>" >
	        <label for="floatingInput">Required education</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="deadline" class="form-control" id="floatingInput" placeholder="deadline" value="<?php echo $row["deadline"]; ?>" >
	        <label for="floatingInput">Application deadline</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="tel1" class="form-control" id="floatingInput" placeholder="tel1"value="<?php echo $row["tel1"]; ?>"  >
	        <label for="floatingInput">Telephone number</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="city" class="form-control" id="floatingInput" placeholder="city" value="<?php echo $row["city"]; ?>" >
	        <label for="floatingInput">City</label>
	    </div>
	    
        <div class="row">
        	<center>
            <div class="col-lg-4 col-md-6">
		    	<img src="uploads/<?php echo $row["pic1"]; ?>" class="w-100 img-fluid">
		    	<input type="file" name="photo" class="form-control mb-2">
		    </div>
		    </center>
	    </div>

       <!-- ID -->
	    <div class="col-lg-4 col-md-6 mt-3">
		<input type="submit"  class="btn btn-primary btn-lg w-100">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
	</div>
	   
	</form>
    </center>
</div>
<?php } ?>
<!-- Area1 end -->

<!-- Footer -->
<?php include 'footer.php'; ?>
<!-- Footer end-->

</body>
</html>