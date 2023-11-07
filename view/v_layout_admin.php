<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý HCMLib</title>
    <link rel="stylesheet" href="template/bootstrap-5.3.2-dist/css/bootstrap.rtl.min.css">
    <script src="https://kit.fontawesome.com/6895c8023a.js" crossorigin="anonymous"></script>
    <style>
      .nen{
        background-image: linear-gradient(500deg,#ff9500,#f83729 );
        color: white;
      }
    </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 p-0 nen collapse collapse-horizontal show" style="min-height: 100vh;" id="openMenu">
        <strong class="text-center d-block p-3">
          TRANG QUẢN TRỊ
        </strong>
        <div class="list-group list-group-item list-group-item-light nen m-3" style="border: 0px solid;">
          <a href="?mod=admin&act=dashboard" class="list-group-item list-group-item-action active" aria-current="true">
            Tổng Quan
          </a>
          <a href="?mod=admin&act=account" class="list-group-item list-group-item-action">Tài Khoản</a>
          <a href="#" class="list-group-item list-group-item-action">Sách</a>
          <a href="#" class="list-group-item list-group-item-action">Chủ đề</a>
          <a class="list-group-item list-group-item-action" aria-disabled="true">Mượn/Trả</a>
        </div>
      </div>
      <div class="col-md p-0">
        <nav class="navbar navbar-expand-lg bg-body-tertiary nen" data-bs-theme="dark" >
          <div class="container-fluid">
            <button class="btn btn-primary nen" type="button" data-bs-toggle="collapse" data-bs-target="#openMenu" aria-expanded="false" aria-controls="openMenu">
              =
            </button>
            <a class="navbar-brand" href="#"> HCMLib</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Xin Chào, Thư
                  </a>
                  <ul class="dropdown-menu ">
                    <li><a class="dropdown-item" href="/user/index.html">Xem trang chủ</a></li>
                    <li><a class="dropdown-item" href="#">Muốn gì ?</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
          <?php include_once 'view/v_'.$view_name.'.php'; ?>
      </div>
    </div>
  </div>
   


  <script src="template/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>