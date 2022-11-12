<?php $page=3; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Jobs.lk | Register</title>

	<?php include 'head.php'; ?>
</head>
<body>

<!-- Nav bar -->
<?php include 'nav.php'; ?>
<!-- Nav bar end -->

<!-- Area 1 -->
<div class="container bg-white mt-5 mb-5 text-center" style="background-image:url(image/register.jpg); background-repeat:no-repeat; background-size:cover; padding-top:50px; padding-bottom:50px;">
<center>
	<h1 style="color:#131166;">Register</h1>
	<form action="sql/user.php" method="POST">
	<div class="form-floating mb-3 col-lg-4 col-md-6">
	  <input type="" name="name" class="form-control" id="floatingInput" placeholder="name@example.com" required>
	  <label for="floatingInput">Enter your name</label>
	</div>
	<div class="form-floating mb-3 col-lg-4 col-md-6">
	  <input type="" name="tel" class="form-control" id="floatingInput" placeholder="name@example.com" required>
	  <label for="floatingInput">Enter your telephone No</label>
	</div>
	<div class="form-floating mb-3 col-lg-4 col-md-6">
	  <input type="email" name="uname" class="form-control" id="floatingInput" placeholder="name@example.com" required>
	  <label for="floatingInput">Enter your email address</label>
	</div>
	<div class="form-floating mb-3 col-lg-4 col-md-6">
	  <input type="password" name="pw" class="form-control" id="floatingPassword" placeholder="Password" required>
	  <label for="floatingPassword">Enter a Password</label>
	</div>
	<div class="col-lg-4 col-md-6">
		<input type="submit" value="Register" class="btn btn-primary btn-lg w-100">
	</div>
	<a href="login.php" style="color:#131166;">Already a user? Please login here</a>
	</form>
</center>
</div>
<!-- Area 1 end -->

<!-- Footer -->
<?php include 'footer.php'; ?>
<!-- Footer end-->

</body>
</html>