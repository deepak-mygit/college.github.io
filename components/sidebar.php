<?php
$conn=mysqli_connect("localhost","root","admin","cmsdb");
echo $_SESSION['userlogin'];

$query=mysqli_query($conn,"SELECT * FROM usertbl WHERE email='".$_SESSION['userlogin']."'");

while ($row=mysqli_fetch_array($query)) {
  
  $role=$row['roleid'];
}

if ($role=="1") { ?>

<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#account-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Manage Accounts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="account-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Student Records</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Student Fee</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Teachers Records</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Teacher Payments</span>
            </a>
          </li>
          <li>
            <a href="admission.php">
              <i class="bi bi-circle"></i><span>Admission</span>
            </a>
          </li>
        </ul>
      </li><!-- End manage account Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#teacher-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Manage Teachers</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="teacher-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Teachers Attendance</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>View Attendance</span>
            </a>
          </li>
        </ul>
      </li><!-- End manage teacher Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#student-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Manage Students</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="student-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>Students Attendance</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>View Attendance</span>
            </a>
          </li>
        </ul>
      </li><!-- End manage student Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#classes-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-border-all"></i><span>Manage Classes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="classes-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="student/addfor.php">
              <i class="bi bi-circle"></i><span>Add Classes</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>Schedule</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>Notification</span>
            </a>
          </li>
        </ul>
      </li><!-- End Classes Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-add"></i><span>Manage Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="user.php">
              <i class="bi bi-circle"></i><span>Add Users</span>
            </a>
          </li>
        </ul>
      </li><!-- End user Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="enquiry.php">
          <i class="bi bi-person-add"></i><span>Enquiry</span>
        </a>
      </li><!-- End enquiry Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="noticeboard.php">
          <i class="bi bi-person-add"></i><span>Notification</span>
        </a>
      </li><!-- End enquiry Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-credit-card-2-back"></i>
          <span>Payment</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact/.php">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.php">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->
      
    </ul>

  </aside><!-- End Sidebar-->

<?php } elseif ($role=="teacher") { ?>
<div>Teacher section</div>  


<?php } elseif ($role=="student") { ?>
<div>Student section</div>




<?php }?> 