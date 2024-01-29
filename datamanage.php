<?php include 'components/connection.php'; ?>


<!-- user section start -->

<?php
if (isset($_POST['adduser'])) {
	$name=mysqli_real_escape_string($conn, $_POST['name']);
    $role=mysqli_real_escape_string($conn, $_POST['role']);
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $password=mysqli_real_escape_string($conn, md5($_POST['password']));

    $query="INSERT INTO usertbl(name,roleid,email,password)VALUES('$name','$role','$email','$password')";
    $result=mysqli_query($conn,$query);

    if ($result) {
    	$_SESSION['message']=" Student register successfully";
    	header("Location:user.php");
    	exit(0);
    }else{
    	$_SESSION['message']=" Student not successfully";
    	header("Location:user.php");
    	exit(0);
    }
}

?>

<?php
if (isset($_POST['updateuser'])) {

	$st_id=mysqli_real_escape_string($conn, $_POST['id']);
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    $role=mysqli_real_escape_string($conn, $_POST['role']);
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $password=mysqli_real_escape_string($conn, $_POST['password']);	

    $update="UPDATE usertbl SET name='{$name}',roleid='{$role}',email='{$email}',password='{$password}' WHERE id={$st_id}";
    $result=mysqli_query($conn,$update);

    if ($result) {
    	$_SESSION['message']=" Student update successfully";
    	header("Location:user.php");
    	exit(0);
    }
    else{
    	$_SESSION['message']=" Student not update";
    	header("Location:user.php");
    	exit(0);
    }

}
?>

<?php
if (isset($_POST['delete-btn'])) {
    $st_id=mysqli_real_escape_string($conn, $_POST['delete-btn']);
    $query="DELETE FROM usertbl WHERE id='$st_id'";
    $result=mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['message']=" Student delete successfully";
        header("Location:user.php");
        exit(0);
    }
    else{
        $_SESSION['message']=" Student not deleted";
        header("Location:user.php");
        exit(0);
    }
}
?>


<!-- enquiry section start -->

<?php
if (isset($_POST['enq-btn'])) {
  $name=trim($_POST['name']);
  $phone=trim($_POST['mobile']);
  $email=trim($_POST['email']);
  $course=trim($_POST['course']);

  $ins="INSERT INTO enquiry (name,mobile,email,course)VALUES('$name','$phone','$email','$course')";
  mysqli_query($conn,$ins);
}
?>


<!-- login connection -->
<?php

if (isset($_POST['login'])) {

    $query=mysqli_query($conn,"SELECT * FROM usertbl WHERE email='".$_POST['email']."' and password='".$_POST['password']."'");

    if (mysqli_num_rows($query)>0) {

        session_start();
        $_SESSION['userlogin']=$_POST['email'];
        header("Location:index.php");
    }else{
        echo '<div class="btn btn-danger">Please try again</div>';
    }
}
?>



<!-- Notifications start -->

<?php
include '../newcrudsystem/connect.php';
?>

<?php
if (isset($_POST['send'])) {
    $link=$_POST['link'];
    $disc=$_POST['disc'];
    $type=$_POST['type'];

    $query="INSERT INTO notitbl(link,description,typeid)VALUES('$link','$disc','$type')";
    $result=mysqli_query($conn,$query);
    if ($result) {
        echo "<div class='alert alert-warning close' role='alert'>
              Send Successfully
            </div>";
            header("Location:components/status_card.php");
    }else{
        echo '<div class="alert alert-danger close" role="alert">
              Unsuccessfully
            </div>';
    }
    mysql_close($conn);
}

?>