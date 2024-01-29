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
</style>

<!-- Main section -->

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Enquiry</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">S No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Course</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sel="SELECT * FROM enquiry";
                  $query= mysqli_query($conn,$sel);

                  while ($conn= mysqli_fetch_object($query))
                  {?>
                  <tr>
                    <th scope="row"><?=$conn ->e_id?></th>
                    <td><?=$conn ->name?></td>
                    <td><?=$conn ->mobile?></td>
                    <td><?=$conn ->email?></td>
                    <td><?=$conn ->course?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
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
