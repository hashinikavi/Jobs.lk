<?php session_start(); ?>
<style type="text/css">
	.active_nav{font-size:20px;  }
	.active_nav:hover{text-decoration: underline; text-decoration-color:#247be0; text-decoration-thickness:15%; background-color:#758a7a;}
  .logo{width:90px; margin-top:0px; margin-left:0px;}
</style>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#131166;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"> <img src="image/logo.png" alt=""  class="logo img-fluid"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white <?php if($page==1){echo "active_nav";} ?>" aria-current="page" href="index.php"><font class="active_nav">Home</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if($page==2){echo "active_nav";} ?>" aria-current="page" href="contact.php"><font class="active_nav">Contact Us</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if($page==3){echo "active_nav";} ?>" aria-current="page" href="login.php"><font class="active_nav">Login</font></a>
        </li>

        <?php if (isset($_SESSION["user_id"])) {?>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-light ms-1" aria-current="page" href="?logout=1">Logout</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>


<!-- Logout -->
<?php
if(isset($_REQUEST["logout"]))
{
  unset($_SESSION["user_id"]);
  header('Location: login.php');
  exit;
}
?>