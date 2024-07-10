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
                          <h3 class="mb-0">Add product</h3>
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
                                <label class="form-control-label" >Name</label>
                                <input type="text" name="name" value="<?=$idUr['product_name'] ?>" class="form-control form-control-alternative" placeholder="NAME">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label" >PRICE</label>
                                <input type="text"  name="price" value="<?=$idUr['product_price'] ?>" class="form-control form-control-alternative" placeholder="PRICE"  >
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                              <label class="form-control-label" >BRAND</label>
                              <select class="form-select form-control form-control-alternative" name="brand" value="<?=$idUr['brand_id'] ?>" aria-label="Default select example">
                                <?php foreach($all_br as $b): ?>
                                    <option value="<?=$b['brand_id'] ?>"><?=$b['brand_name'] ?></option>
                                <?php endforeach; ?>
                              </select>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                              <label class="form-control-label" >CATEGORY</label>
                              <select class="form-select form-control form-control-alternative" name="category" value="<?=$idUr['categorys_id'] ?>" aria-label="Default select example">
                              <?php foreach($all_ct as $c): ?>
                                    <option value="<?=$c['categorys_id'] ?>"><?=$c['categorys_name'] ?></option>
                                <?php endforeach; ?>
                              </select>
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
                                <input class="form-control form-control-alternative" name="img" value="<?=$idUr['product_img'] ?>" type="file">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="pl-lg-4">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                   <input class="form-control form-control-alternative" name="day" type="hidden" >
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="pl-lg-4">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="form-control-label">Description</label>
                                <input class="form-control form-control-alternative" name="description" value="<?=$idUr['product_description'] ?>" type="text" placeholder="Description">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-4">
                          <input type="submit" name="submit" value="Edit-Product" class="btn btn-sm btn-success"></input>
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