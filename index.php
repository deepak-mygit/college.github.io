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



<!-- Main section -->
<?php include 'components/status_card.php'; ?>  




<!-- footer section -->
<?php include 'components/footer.php'; ?>

</body>

</html>