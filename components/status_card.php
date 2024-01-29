
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Student Card -->
            <div class="col-xxl-3 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total Student <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1000+</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Student Card -->

            <!-- Teacher Card -->
            <div class="col-xxl-3 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Total Teacher<span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6>20</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Teacher Card -->

            <!-- Teacher Card -->
            <div class="col-xxl-3 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Total Teacher<span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6>20</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Teacher Card -->

            <!-- Classes Card -->
            <div class="col-xxl-3 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Total Classes<span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-border-all"></i>
                    </div>
                    <div class="ps-3">
                      <h6>40+</h6>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Classes Card -->

            
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

    <section>
      <div class="container">
      <div class="row">
        <form method="post">
        <div class="card m-4">
          <div class="card-header">
            <h4>Notifications</h4>
          </div>
          <div class="card-body mt-4">

            <?php
                  $sel="SELECT * FROM notitbl u join notitype n on u.typeid=n.t_id";
                $result=mysqli_query($conn,$sel) or die("Unsuccessful");

                  if (mysqli_num_rows($result)>0) {
                    foreach ($result as $student) {
                      ?>
                      <div class="<?=$student['typeclass']; ?>" role="alert">
                        <a href="<?=$student['link']; ?>"><?=$student['description']; ?></a>
                      </div>
                      <?php
                    }
                  }else{
                    echo "No Record found";
                  }
                  ?>
               
          </div>
        </div>  
        </form>
      </div>
    </div>
    
    </section>

  </main><!-- End #main -->