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
<div class="container">
	<?php include ('message.php'); ?>
	<div class="row">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header"><h5>Add Users</h5></div>
				<div class="card-body">
					<form method="post" action="datamanage.php">
						<div class="row">
							<div class="col-md-6 mt-3">
							<label>Name</label>
							<input type="text" name="name" class="form-control" placeholder="Enter your name" required>
						</div>
						<div class="col-md-6 mt-3">
							<label>Role</label>
							<select class="form-control" name="role" required>
                                <option disabled selected>Select your course</option>
                                <?php
                                  $sel="SELECT * FROM roletbl";
                                  $result=mysqli_query($conn,$sel) or die("Unsuccessful");

                                  while($row=mysqli_fetch_assoc($result))
                                              {
                                ?>
                                <option value="<?php echo $row['r_id']; ?>"><?php echo $row['role']; ?></option>

                                <?php } ?>
                            </select>
						</div>
						<div class="col-md-6 mt-3">
							<label>Email</label>
							<input type="email" name="email" class="form-control" placeholder="Enter your email" required>
						</div>
						<div class="col-md-6 mt-3">
							<label>Password</label>
							<input type="password" name="password" class="form-control" placeholder="Enter password" required>
						</div>
						<div class="col-md-2 mt-4">
							<button class="btn btn-success" name="adduser">Add User</button>
						</div>
						</div>
					</form>
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