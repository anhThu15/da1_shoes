<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
  </title>
  <!-- Favicon -->
  <link href="template/argon-dashboard-master/assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="template/argon-dashboard-master/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="template/argon-dashboard-master/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="template/argon-dashboard-master/assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
</head>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Profile name</h1>
					<nav class="d-flex align-items-center">
						<a href="?mod=page&act=home">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="?mod=page&act=in4">in4<span class="lnr lnr-arrow-right"></span></a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->


   



  <div class="container text-center">
  <div class="row">
    <div class="col">
      <!-- 1 of 3 -->
    </div>
    <div class="col-10">
           <!-- Page content -->
    <div class="container-fluid mt--5 mb-5 ">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="upload/avatar/<?= $idUs['user_img'] ?>" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <!-- <div>
                      <span class="heading">22</span>
                      <span class="description">Friends</span>
                    </div> -->
                    <div>
                      <span class="heading">10</span>
                      <span class="description">deal</span>
                    </div>
                    <div>
                      <span class="heading">89</span>
                      <span class="description">Comments</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  <?= $idUs['user_fullname'] ?><span class="font-weight-light"></span>
                </h3>
                <!-- <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Bucharest, Romania
                </div> -->
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?= $idUs['user_email'] ?>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i><?= $idUs['user_address'] ?>
                </div>
                <!-- <hr class="my-4" />
                <p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music.</p>
                <a href="#">Show more</a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <!-- <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> -->
              </div>
            </div>
            <div class="card-body">
              <form method="post" enctype="multipart/form-data">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Full name</label>
                        <input type="text" name="fullname" class="form-control form-control-alternative"value="<?= $idUs['user_fullname'] ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email"  name="email" class="form-control form-control-alternative" value="<?= $idUs['user_email'] ?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Username</label>
                        <input type="text"  name="name" class="form-control form-control-alternative"  value="<?= $idUs['user_name'] ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Password</label>
                        <input type="text"  name="pass" class="form-control form-control-alternative"  value="<?= $idUs['user_pass'] ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Address -->
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input  name="address" class="form-control form-control-alternative" value="<?= $idUs['user_address'] ?>" type="text">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Img</label>
                        <input class="form-control form-control-alternative" name="img" type="file">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <input type="submit" name="submit" value="Update" class="btn btn-sm btn-success"></input>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
    </div>
    <div class="col">
      <!-- 3 of 3 -->
    </div>
  </div>
</div>


  <!--   Core   -->
  <script src="template/argon-dashboard-master/assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="template/argon-dashboard-master/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="template/argon-dashboard-master/assets/js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>