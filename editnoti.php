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
              <h4>Update Notification
              </h4>
            </div>
            <div class="card-body">
              <?php
                $n_id=$_GET['n_id'];
                $sel="SELECT * FROM notitbl WHERE n_id={$n_id}";
                $res=mysqli_query($conn,$sel) or die("Unsuccessful");

                if (mysqli_num_rows($res)>0) {
                    while($row=mysqli_fetch_assoc($res)){
                
                ?>
              <form method="post" action="datamanage.php">
                <div><input type="hidden" value="<?php echo $row['n_id']; ?>" class="form-control" name="id"></div>
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
                  <?php
                  $sql="SELECT * FROM notitype";
                  $res1=mysqli_query($conn,$sql) or die("Unsuccessful");

                  if (mysqli_num_rows($res1)>0) {
                      echo '<select name="role" class="form-control" required>';
                          while($row1=mysqli_fetch_assoc($res1)){
                              if ($row['typeid']==$row1['t_id']) {
                                   $select="selected";
                              }else {
                                   $select ="";
                              }

                       echo "<option {$select} value='{$row1['t_id']}'>{$row1['typeclass']}</option>";

                      }
                    
                      echo '</select>';
                       }
                  ?>
                </div>
                <div class="mb-5">
                  <button class="btn btn-primary" type="submit" name="notiupdate">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- footer section -->
<?php include 'components/footer.php'; ?>

</body>
</html>