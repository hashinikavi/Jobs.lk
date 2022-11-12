<?php $page=3;?>
<!DOCTYPE html>
<html>
<head>
	<title>Jobs.lk | Post add</title>

	<?php include 'head.php'; ?>
</head>
<body>

<!-- Nav bar -->
<?php include 'nav.php'; include 'login_check.php'; ?>
<!-- Nav bar end -->
<!-- Area1 -->
<div class="container bg-white mt-5 mb-5 text-center" style="background-image:url(image/add1.jpg); background-repeat:no-repeat; background-size:cover; padding-top:50px; padding-bottom:50px;">
	<center>
		<h1 style="color:#131166;">POST ADD</h1>

	<form action="sql/new_add.php" method="post" enctype="multipart/form-data">
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="title" class="form-control" id="floatingInput" placeholder="title" required>
	        <label for="floatingInput">Enter Title:</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	       <input type="" name="description" class="form-control" id="floatingInput" placeholder="description" required>
           <label for="floatingInput">Enter Description</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="employer" class="form-control" id="floatingInput" placeholder="employer" required>
	        <label for="floatingInput">Employer</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="role" class="form-control" id="floatingInput" placeholder="role" required>
	        <label for="floatingInput">Enter Role</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="experience" class="form-control" id="floatingInput" placeholder="experience" >
	        <label for="floatingInput">Required work experience(years)</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="education" class="form-control" id="floatingInput" placeholder="education" >
	        <label for="floatingInput">Required education</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="deadline" class="form-control" id="floatingInput" placeholder="deadline" required>
	        <label for="floatingInput">Application deadline</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="tel1" class="form-control" id="floatingInput" placeholder="tel1" >
	        <label for="floatingInput">Telephone number</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="city" class="form-control" id="floatingInput" placeholder="city" required>
	        <label for="floatingInput">City</label>
	    </div>
	    <div class="col-lg-4 col-md-6">
	    	<p class="text-start"><b>Select an image to upload:</b></p>
	        <input type="file" name="photo" class="form-control mb-2">
	    </div>
	    <div class="col-lg-4 col-md-6 mt-3">
		<input type="submit"  class="btn btn-primary btn-lg w-100">
	</div>
	   
	</form>
    </center>
</div>
<!-- Area1 end -->

<!-- Footer -->
<?php include 'footer.php'; ?>
<!-- Footer end-->

</body>
</html>