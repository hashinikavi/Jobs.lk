<?php include 'db_connection.php'; ?>
<?php $page=4; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Jobs.lk | Add</title>

	<?php include 'head.php'; ?>
</head>
<body>

<!-- Nav bar -->
<?php include 'nav.php'; ?>
<!-- Nav bar end -->

<?php 
$id=$_REQUEST["id"];
$sql = "SELECT * FROM jobs WHERE id='$id' ";
$result = $conn->query($sql);
while($row=$result->fetch_assoc())
{?>

<!-- Area 1 -->
<div class="container bg-white">
<style type="text/css">
        .slider-div{height: 500px; background-repeat:no-repeat; background-size:contain; background-position:center; width:100%;}
    </style>

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <!-- slide1 -->
    <div class="carousel-item active" >
      <div class="container-fluid slider-div text-white text-center pt-5 pb-5" style="background-image:url(uploads/<?php echo $row["pic1"]; ?> ">
      </div>
    </div>
  <!-- slide1 end -->   
  </div>
  </div>
</div>
<!-- Area 1 end -->

<!-- Area 2 -->
<style type="text/css">
  .cn1{font-size: 20px;}
</style>

<center>
<div class="container bg-white mb-5">
	<h1 class="text-center"><?php echo $row["title"]; ?></h1>
	<p class="text-center p-3"><?php echo $row["description"]; ?></p>

  <table class="table">
    <tr>
      <th><font style="color: #1d19b3"><b>Employer:</b></font><?php echo $row["employer"]; ?></th>
      <th><font style="color: #1d19b3"><b>Role: </b></font><?php echo $row["role"]; ?></th>
      <th><font style="color: #1d19b3"><b>Reqired work experience(years):</b></font><?php echo $row["experience"]; ?></th>
    </tr>
    <tr>
      <th><font style="color: #1d19b3"><b>Application deadline: </b></font><?php echo $row["deadline"]; ?></th>
      <th><font style="color: #1d19b3"><b>Required education: </b></font><?php echo $row["education"]; ?></th>
      <th></th>
    </tr>
  </table>
  <h2 class="pt-3" style="color: #1d19b3">Contact Details:</h2>
  <p class="cn1"><b><?php echo $row["city"]; ?>,Sri Lanka</b></p>
  <p class="mb-3 pb-3 cn1"> <b><?php echo $row["tel1"]; ?></b></p>

  <a href="apply.php"><input type="submit" value="Apply Now" class="btn btn-primary btn-lg mb-5 "></a>
</div>

</center>

<!-- Area 2 end-->
<?php }?> 

<!-- Footer -->
<?php include 'footer.php'; ?>
<!-- Footer end-->

</body>
</html>