<?php include 'components/connection.php'; ?>
<?php
session_start();
if (!isset($_SESSION['userlogin'])) {
  header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<!-- Links section -->
<?php include 'components/links.php'; ?>

  
</head>

<body>
<!-- Header section -->
<?php include 'components/header.php'; ?>
  

<!-- Sidebar section -->  
<?php include 'components/sidebar.php'; ?>

<style>
  .section a{
    color: #fff;
  }
  form{
    width: 50%;
    margin: auto;
  }
  form .col-lg-12{
    padding: 10px;
  }
</style>

<!-- Main section -->

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Users Records</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="m-3">
              <button class="btn btn-success"><i class="bi bi-plus-lg"></i><a href="adduser.php">Add New</a></button>
            </div>
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <!-- Table with stripped rows -->
               <?php
                $sel="SELECT * FROM usertbl u join roletbl r on u.roleid=r.r_id";
                $result=mysqli_query($conn,$sel) or die("Unsuccessful");

                if (mysqli_num_rows($result)>0) {
                
                ?>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">S No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  while ($row=mysqli_fetch_assoc($result)) {
                    
                ?>
                  <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['role']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td>
                      <button class="btn btn-success" ><a href="updateuser.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a></button>
                      <form method="post" action="datamanage.php" class="d-inline">
                        <button type="submit" value="<?php echo $row['id']; ?>" class="btn btn-danger" name="delete-btn"><i class="bi bi-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
              <?php } ?>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  



<!-- footer section -->
<?php include 'components/footer.php'; ?>

</body>

</html>


