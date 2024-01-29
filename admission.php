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

<div class="container">
      <div class="row">
        <form method="post">
        <div class="card m-4">
          <div class="card-header">
            <h4>Admission Form 2024</h4>
            <p>Enter your personal & acedamic details</p>
          </div>
          <div class="card-body">
            <h5 class="link-warning">Personal Details</h5>
            <div class="row p-2">
              <div class="col-6 mt-3">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter your name" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>Father Name</label>
                <input type="text" name="fname" placeholder="Enter father name" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>Mother Name</label>
                <input type="text" name="mname" placeholder="Enter mother name" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>Email Id</label>
                <input type="email" name="email" placeholder="Enter your email" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>Gender</label>
                <select class="form-control" name="gender">
                  <option selected disabled>Select gender</option>
                  <option >Male</option>
                  <option >Female</option>
                  <option >Other</option>
                </select>
              </div>
              <div class="col-6 mt-3">
                <label>Course</label>
                <select class="form-control" name="course">
                  <option selected disabled>Select course</option>
                  <option >BCA</option>
                  <option >BSC-IT</option>
                  <option >BBA</option>
                </select>
              </div>
              <div class="col-6 mt-3">
                <label>Date of Birth</label>
                <input type="date" name="dob" placeholder="Enter date of birth" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>Phone</label>
                <input type="text" name="phone" placeholder="Enter phone number" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>City</label>
                <input type="text" name="city" placeholder="Enter your city" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>State</label>
                <input type="text" name="state" placeholder="Enter your state" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>Zip/Pin Code</label>
                <input type="text" name="zipcode" placeholder="Enter pin code" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>Address</label>
                <textarea class="form-control" placeholder="Enter your address:" name="address" required></textarea>
              </div>
              <h5 class="link-warning mt-4" >Intermediate Details</h5>
              <div class="col-6 mt-3">
                <label>College Name</label>
                <input type="text" name="college" placeholder="Enter college name" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>12th Marks</label>
                <input type="text" name="mark" placeholder="Enter 12th marks" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>Division</label>
                <input type="text" name="mark" placeholder="Enter division" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>Passing Year</label>
                <input type="year" name="pass" placeholder="Enter passing year" required class="form-control">
              </div>
              <h5 class="link-warning mt-4" >Uploade Documents</h5>
              <div class="col-6 mt-3">
                <label>Photo</label>
                <input type="file" name="photo" placeholder="Uploade your photo" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>Signature</label>
                <input type="file" name="sig" placeholder="Uploade your signature" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>Marksheet</label>
                <input type="file" name="sig" placeholder="Uploade your signature" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>College Certificate (CLC)</label>
                <input type="file" name="sig" placeholder="Uploade your signature" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>Character Certificate (CC)</label>
                <input type="file" name="sig" placeholder="Uploade your signature" required class="form-control">
              </div>
              <div class="col-6 mt-3">
                <label>Magration Certificate (MC)</label>
                <input type="file" name="sig" placeholder="Uploade your signature" required class="form-control">
              </div>
              <div class="col-4">
                <button class="btn btn-success btn-md mt-5 " name="submit" type="btn">Submit</button>
              </div>  
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>


</main><!-- End #main -->
  



<!-- footer section -->
<?php include 'components/footer.php'; ?>

</body>

</html>


