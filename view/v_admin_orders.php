<style>
        .nen{
        background-image: linear-gradient(500deg,#ff9500,#f83729 );
        color: white;
      }
  </style>
<div class="header nen bg-gradient pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Traffic</h5>
                      <span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                      <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Since last week</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Since yesterday</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Deal</h3>
              <!-- <a href="?mod=admin&act=account_add" class="nav-link py-2 px-3 active nen" data-toggle="tab">
                        <span class="d-none d-md-block">add</span>
                        <span class="d-md-none">M</span>
              </a> -->
            </div>
            <div class="table-responsive">
        <form action="?mod=admin&act=orders_ship" method="post">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">FullName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Oder Day</th>
                    <th scope="col">PaymentStatus</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($all as $item): ?>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="mb-0 text-sm"><?= $item['user_fullname'] ?></span>
                        </div>
                      </div>
                    </th>

                    <td>
                        <?= $item['user_email'] ?>
                    </td>
                    
                    <td>
                        <?= $item['user_address'] ?>
                    </td>

                    <td>
                      <span class=" mr-4">
                        <input type="hidden" name="id" value="<?=$item['user_id']?>">
                        <i class="bg-warning"></i> <?= $item['orders_day'] ?>
                      </span>
                    </td>
                    <td>
                      <span class=" mr-4">
                        <i class="bg-warning"></i> <?= $item['orders_paymentStatus'] ?>
                      </span>
                    </td>
                  
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="?mod=admin&act=orders_view&id=<?= $item['user_id'] ?>">View</a>
                          <button type="submit" class="dropdown-item">Ship</button>
                          <a class="dropdown-item" href="?mod=admin&act=orders_del&id=<?= $item['user_id'] ?>">DELETE</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
                <?php endforeach; ?>
              </table>
      </form>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Dark table -->
      <div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Ship</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">FullName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Oder Day</th>
                    <th scope="col">PaymentStatus</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <?php foreach($all_ship as $item): ?>
                <tbody>
                <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="mb-0 text-sm"><?= $item['user_fullname'] ?></span>
                        </div>
                      </div>
                    </th>

                    <td>
                        <?= $item['user_email'] ?>
                    </td>
                    
                    <td>
                        <?= $item['user_address'] ?>
                    </td>

                    <td>
                      <span class=" mr-4">
                        <i class="bg-warning"></i> <?= $item['orders_day'] ?>
                      </span>
                    </td>
                    <td>
                      <span class=" mr-4">
                        <i class="bg-warning"></i> <?= $item['orders_paymentStatus'] ?>
                      </span>
                    </td>
                    


                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="?mod=admin&act=orders_view&id=<?= $item['user_id'] ?>">View</a>
                          <!-- <button type="submit" class="dropdown-item" href="?mod=admin&act=orders_ship&id=<?= $item['user_id'] ?>">Ship</button>
                          <a class="dropdown-item" href="?mod=admin&act=orders_del&id=<?= $item['user_id'] ?>">DELETE</a> -->
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
                <?php endforeach; ?>
              </table>
            </div>
          </div>
        </div>
      </div>