<?php $page=3; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Jobs.lk|Login</title>
	<?php include 'head.php'; ?>
</head>
<body>
	<!-- Nav bar -->
    <?php include 'nav.php'; ?>
    <!-- Nav bar end -->

    <!-- Area 1 -->
    <div class="container bg-white mt-5 mb-5 text-center" style="background-image:url(image/login.jpg); background-repeat:no-repeat; background-size:cover; padding-top:50px; padding-bottom:50px;">
        <center>
        	<h1 style="color:#131166;">Login to Jobs.lk</h1>
        	<form action="" method="POST">
        	<div class="form-floating mb-3 mt-5 col-lg-4 col-md-6">
        	  <input type="email" name="uname" class="form-control" id="floatingInput" placeholder="name@example.com" required>
        	  <label for="floatingInput">Email address</label>
        	</div>
        	<div class="form-floating mb-3 col-lg-4 col-md-6">
        	  <input type="password" name="pw" class="form-control" id="floatingPassword" placeholder="Password" required>
        	  <label for="floatingPassword">Password</label>
        	</div>
        	<div class="col-lg-4 col-md-6 mb-3">
        		<input type="submit" value="Login" name="btn_login" class="btn btn-primary btn-lg w-100">
        	</div>
        	<a href="register.php">New user? Please register here</a>
        	</form>
        </center>
    </div>
<!-- Area 1 end -->


</body>
</html>

<?php include 'db_connection.php'; ?>

<?php
if (isset($_REQUEST["btn_login"]))
{
    $uname=$_REQUEST["uname"];
    $pw=$_REQUEST["pw"];
    $check_login=0;

    $sql = "SELECT * FROM users WHERE uname='$uname' AND pw='$pw' ";
    $result = $conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        $check_login=1;
        $user_id=$row["id"];

    }

    if ($check_login==1) 
    {
      $_SESSION["user_id"]=$user_id;  
      header('Location: my_acc.php');
      exit;
    }

    else
    {
        echo "<script>alert ('Invalid login!'); window.location.replace('login.php');</script>";
    }
} 

?>

