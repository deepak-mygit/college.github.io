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
      <div class="row">
        <form method="post">
        <div class="card m-4">
          <div class="card-header">
            <h4>Manage Notice Board</h4>
          </div>
          <div class="card-body mt-4">
            <a href="addnoti.php" class="btn btn-success">Send Notification</a>
            <a href="editnoti.php" class="btn btn-primary">Update</a>
            <a href="" class="btn btn-danger">Delete</a>    
          </div>
        </div>  
        </form>
      </div>
    </div>

  </main>  
<!-- footer section -->
<?php include 'components/footer.php'; ?>