<?php $page=3;?>
<!DOCTYPE html>
<html>
<head>
	<title>Jobs.lk | Login</title>

	<?php include 'head.php'; ?>
</head>
<body>

<!-- Nav bar -->
<?php include 'nav.php'; ?>
<!-- Nav bar end -->
<!-- Area1 -->
<div class="container bg-white mt-5 mb-5 text-center" style="background-image:url(image/add1.jpg); background-repeat:no-repeat; background-size:cover; padding-top:50px; padding-bottom:50px;">
	<center>
		<h1 style="color:#131166;">Apply for this Job</h1>

	<form action="" method="post" enctype="multipart/form-data">
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="name" class="form-control" id="floatingInput" placeholder="title" required>
	        <label for="floatingInput">	Your Name:</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	       <input type="" name="description" class="form-control" id="floatingInput" placeholder="description" required>
           <label for="floatingInput">Your Email:</label>
	    </div>
	    <div class="form-floating mb-3 col-lg-4 col-md-6">
	        <input type="" name="employer" class="form-control" id="floatingInput" placeholder="employer" required>
	        <label for="floatingInput">Your phone number:</label>
	    </div>
	    <div class="col-lg-4 col-md-6">
	    	<p class="text-start"><b>Attach CV: </b></p>
	        <input type="file" name="file" class="form-control mb-2">
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