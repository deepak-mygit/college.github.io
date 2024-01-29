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
    <div class="container mt-5">

      <div class="row">
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-header">
              <h4>Add Notification
              </h4>
            </div>
            <div class="card-body">
              <form method="post" action="datamanage.php">
                <div class="mb-3">
                  <label>Links</label>
                  <input type="text" name="link" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label>Discreption</label>
                  <input type="text" name="disc" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label>Type</label>
                  <select class="form-control" name="type" required>
                    <option disabled selected>Select type of notification</option>
                    <?php
                    $sel="SELECT * FROM notitype";
                    $result=mysqli_query($conn,$sel) or die("Unsuccessful");

                      while($row=mysqli_fetch_assoc($result))
                        {
                    ?>
                    <option value="<?php echo $row['t_id']; ?>"><?php echo $row['typeclass']; ?></option>

                    <?php } ?>
                    </select>
                </div>
                <div class="mb-5">
                  <button class="btn btn-primary" type="submit" name="send">Send Notification</button>
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