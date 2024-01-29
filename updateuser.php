<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>adduser</title>
	<?php include 'components/links.php'?>
</head>
<body>
<!-- Header section -->
<?php include 'components/header.php'; ?>
  

<!-- Sidebar section -->  
<?php include 'components/sidebar.php'; ?>

<main class="main" id="main">
<div class="">
	<div class="row">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header"><h5>Update Users</h5></div>
				<div class="card-body">
				<?php
                $stu_id=$_GET['id'];
                $sel="SELECT * FROM usertbl WHERE id={$stu_id}";
                $res=mysqli_query($conn,$sel) or die("Unsuccessful");

                if (mysqli_num_rows($res)>0) {
                    while($row=mysqli_fetch_assoc($res)){
                
                ?>

					<form method="post" action="datamanage.php">
						<div><input type="hidden" value="<?php echo $row['id']; ?>" class="form-control" name="id"></div>
						<div class="row">
							<div class="col-md-6 mt-3">
							<label>Name</label>
							<input type="text" name="name" class="form-control" placeholder="Enter your name" value="<?php echo $row['name']; ?>">
						</div>
						<div class="col-md-6 mt-3 ">
							<label for="role">Role</label>
							<?php
                            $sql="SELECT * FROM roletbl";
                            $res1=mysqli_query($conn,$sql) or die("Unsuccessful");

                            if (mysqli_num_rows($res1)>0) {
                                echo '<select name="role" class="form-control" required>';
                                    while($row1=mysqli_fetch_assoc($res1)){
                                        if ($row['roleid']==$row1['r_id']) {
                                            $select="selected";
                                        }else {
                                            $select ="";
                                        }

                                 echo "<option {$select} value='{$row1['r_id']}'>{$row1['role']}</option>";

                               }
                    
                               echo '</select>';
                                }
                            ?>
							
						</div>
						<div class="col-md-6 mt-3">
							<label>Email</label>
							<input type="email" name="email" class="form-control" placeholder="Enter your email" value="<?php echo $row['email']; ?>">
						</div>
						<div class="col-md-6 mt-3">
							<label>Password</label>
							<input type="password" name="password" class="form-control" placeholder="Enter password" value="<?php echo $row['password']; ?>">
						</div>
						<div class="col-md-2 mt-4">
							<button class="btn btn-success" name="updateuser">Update</button>
						</div>
						</div>
					</form>
					<?php 
                    } 
                        }
                    ?>

				</div>
			</div>
		</div>
	</div>
</div>
</main>

<!-- footer section -->
<?php include 'components/footer.php'; ?>

</body>
</html>