<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
        <title>Jobs.lk | Admin</title>

        <?php include 'head.php'; ?>
</head>
<body>

<!-- Nav bar -->
<?php include 'nav.php';?>
<!-- Nav bar end -->

<!-- Area 1 -->
<div class="container bg-light mt-3 text-center">
        <h1>Admin</h1>
        
        <table class="table mt-5">
                <tr>
                        <th>Add ID</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>
                </tr>
                <?php
                $sql = "SELECT * FROM jobs ";
                $result = $conn->query($sql);
                while($row=$result->fetch_assoc()) { ?>
                <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td>
                                <a href="add.php?id=<?php echo $row["id"]; ?>" target="_blank"><?php echo $row["title"]; ?></a>
                        </td>
                        <td><?php echo $row["status"]; ?></td>
                        <td>
                                <?php if($row["status"]=="pending") {?>
                                <a href="sql/approve_add.php?status=approved&id=<?php echo $row["id"]; ?>" class="btn btn-sm btn-secondary">Approve</a>
                                <?php } ?>

                                <?php if($row["status"]=="approved") {?>
                                <a href="sql/approve_add.php?status=pending&id=<?php echo $row["id"]; ?>" class="btn btn-sm btn-secondary">Make Pending</a>
                                <?php } ?>


                                <a href="sql/delete_add.php?id=<?php echo $row["id"]; ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                </tr>
                <?php } ?>
        </table>
</div>
<!-- Area 1 end -->

</body>
</html>