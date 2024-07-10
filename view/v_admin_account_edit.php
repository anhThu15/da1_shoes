<style>
        .nen{
        background-image: linear-gradient(500deg,#ff9500,#f83729 );
        color: white;
      }
  </style> <!-- Navbar -->

    <!-- End Navbar -->
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 300px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask nen default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <!-- <h1 class="display-2 text-white">Hello Jesse</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="#!" class="btn btn-info">Edit profile</a> -->
          </div>
        </div>
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <!-- 1 of 3 -->
            </div>
            <div class="col-10">
                  <!-- Page content -->
                <div class="col-xl-8 order-xl-1">
                  <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                      <div class="row align-items-center">
                        <div class="col-8">
                          <h3 class="mb-0">Add account</h3>
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
                                <label class="form-control-label" >Full name</label>
                                <input type="text" name="fullname" class="form-control form-control-alternative" value="<?= $idEdit['user_fullname'] ?>" placeholder="Full name">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label" >Username</label>
                                <input type="text"  name="name" class="form-control form-control-alternative" value="<?= $idEdit['user_name'] ?>" placeholder="Username"  >
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label" >Emails</label>
                                <input type="email" name="email" class="form-control form-control-alternative" placeholder="Email" value="<?= $idEdit['user_email'] ?>">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label" >Password</label>
                                <input type="text"  name="pass" class="form-control form-control-alternative" placeholder="Password" value="<?= $idEdit['user_pass'] ?>" >
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Address -->
                        <div class="pl-lg-4">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="form-control-label">Img</label>
                                <input class="form-control form-control-alternative" name="img" value="<?= $idEdit['user_img'] ?>" type="file">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="pl-lg-4">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="form-control-label">Address</label>
                                <input type="text" name="address" class="form-control form-control-alternative" value="<?= $idEdit['user_address'] ?>" placeholder="Address" >
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="pl-lg-4">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                              <label class="form-control-label" >Permission</label>
                              <select class="form-select form-control form-control-alternative" name="permission" value="<?= $idEdit['user_permission'] ?>" aria-label="Default select example">
                                    <option value="1" selected>User</option>
                                    <option value="2">Collaborators</option>
                                    <option value="3">admin</option>
                              </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-4">
                          <input type="submit" name="submit" value="Add" class="btn btn-sm btn-success"></input>
                        </div>
                      </form>
                      <?php if(isset($_SESSION['thongbao'])): ?>
                       <div class="alert alert-danger" role="alert">
                       <?= $_SESSION['thongbao'] ?>
                       </div>
                       <?php endif; unset($_SESSION['thongbao']); ?>

                <?php if(isset($_SESSION['loi'])): ?>
                         <div class="alert alert-danger" role="alert">
                         <?= $_SESSION['loi'] ?>
                         </div>
                <?php endif; unset($_SESSION['loi']); ?>
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
      </div>
    </div>
    <!-- Page content -->
  
      
    </div>
  </div>
      <!-- Footer -->
    </div>
  </div>