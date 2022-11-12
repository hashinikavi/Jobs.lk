<?php include 'db_connection.php'; ?>
<?php include 'filter/filter.php'; ?>
<?php $page=1; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Jobs.lk|Home</title>
	<?php include 'head.php'; ?>
</head>
<body>

<!-- Nav bar -->
<?php include 'nav.php'; ?>
<!-- Nav bar end -->
<!-- ############################################################################################################### -->

 <!-- area 1 -->
    <style type="text/css">
        .slider-div{height: 500px; background-repeat:no-repeat; background-size:cover; background-position:center; width:100%;}
    </style>

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <!-- slide1 -->
    <div class="carousel-item active" >
      <div class="container-fluid slider-div text-white text-center pt-5 pb-5" style="background-image:url(image/post2.png);  ">
      </div>
    </div>
  <!-- slide1 end -->   
  </div>
  </div>
  <!-- area 1 end-->

  <!-- ################################################################################################################### -->


<!-- Area 2-->
<div class="container pt-5">
<div class="row">
<!-- left side area	 -->

     <div class="col-sm-3">
        <div class="container-fluid bg-light px-2 py-3">
        <h5>Search here...</h5><hr>
     	<form>

     		<!-- Job Type -->
        <label>Job Role:</label>
     		<select class="form-control mb-2" name="role">
     	  <option value="<?php echo $role_v; ?>"><?php echo $role; ?></option>
     			<?php 
                $sql = "SELECT * FROM jobs GROUP BY role";
                $result = $conn->query($sql);
                while($row=$result->fetch_assoc())
                {?>
                <option value="<?php echo $row["role"]; ?>"><?php echo $row["role"]; ?></option>
                <?php } ?>			
     		</select><br>
     		
     		<!-- Location -->
        <label>Location:</label>
     		<select class="form-control mb-2" name="city">
     			<option value="<?php echo $city_v; ?>"><?php echo $city; ?></option>
     			<?php 
                $sql = "SELECT * FROM jobs GROUP BY city";
                $result = $conn->query($sql);
                while($row=$result->fetch_assoc())
                {?>
                <option value="<?php echo $row["city"]; ?>"><?php echo $row["city"]; ?></option>
                <?php } ?>      			
     		</select>

            <!-- Submit button -->
            <input type="submit" value="Search" class="btn btn-primary w-100 mt-3"><br><br><hr>
     	</form>
        </div>
    </div>

    <!-- left area end -->
    <!-- ########################################################################################################## -->

    <!-- right side area -->
    <style type="text/css">
        .t1{font-size:15pt; font-family:Verdana; font-weight:700; text-decoration:none;}
        .t2{font-size:12pt; font-family:Arial;}
        .t3{font-size:13pt; font-family:Arial; color:#777873;}
        .t4{font-size:14pt; font-family:Verdana; color:#1e0e8a; font-weight:600;}
        .im1{height:150px; position:cover;}

    </style>
    <div class="col-sm-9 bg-light pt-2">

        <?php 
        $sql = "SELECT * FROM jobs WHERE status='approved' {$condition1} {$condition2} ";
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc())
        {?>
       
        <!-- add area -->
        <div class="container bg-white">
            <div class="row">
                <!-- Image -->
                <div class="col-sm-4 col-md-4">
                   <img src="uploads/<?php echo $row["pic1"]; ?>" class=" im1 img-fluid ">   
                </div>
                <!-- Details -->
                <div class="col-sm-6 col-md-5 pt-3"> 
                    <a href="add.php?id=<?php echo $row["id"]; ?>" target="_blank"><h1 class="t1"><?php echo $row["title"]; ?></h1></a>
                    <h2 class="t2"><?php echo $row["employer"]; ?></h2>  
                    <h2 class="t3"><?php echo $row["city"]; ?></h2>  
                    <h2 class="t4"><?php echo $row["role"]; ?></h2>  
                </div>
                <!-- Date -->
                <div class="col-sm-2 col-md-3 d-none d-sm-block" style="position:relative;">
                    <p style="position:absolute; bottom:0; color:#98a39b; font-weight:600;">Deadline: <?php echo $row["deadline"]; ?></p>
                </div>

                <div class="d-lg-none col-sm-2 pt-2">
                    <p style="color:#98a39b; font-weight:600;">2021-11-03</p>
                </div>
                
            </div>
        </div>
        <hr>
        <?php }?> 
        <!-- add area end-->
    </div>
    <!-- right side area end -->
</div>
</div>
<!-- Area 2 end-->

<!-- Footer -->
<?php include 'footer.php'; ?>
<!-- Footer end-->

</body>
</html>