<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <?= link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
  <?= link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
  <?= link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
  <?= link_tag('assests/css/sb-admin.css'); ?>
  <link rel="icon" type="image/x-icon" href="https://dld87tjdltnh8.cloudfront.net/0/admin_v1/test_management/question_bank/7484890_download.jpg">

  <style>
    body {
      background: linear-gradient(to right, #6a11cb, #2575fc);
      color: #fff;
      font-family: 'Roboto', sans-serif;
    }

    .breadcrumb {
      background: rgba(255, 255, 255, 0.2);
      border-radius: 5px;
    }

    .breadcrumb-item a {
      color: #ffd700;
    }

    .card {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card-footer {
      background: rgba(255, 255, 255, 0.1);
    }

    h1 {
      font-weight: bold;
      text-align: center;
      margin-bottom: 30px;
    }

    .container-fluid {
      padding-top: 30px;
    }
  </style>
</head>

<body id="page-top">
  <div id="wrapper">
    <div id="content-wrapper">
      <div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="https://www.vayuz.com/">Welcome to Medigence</a>
          </li>
        </ol>

        <h1>User Management System</h1>
        <hr>

        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-users fa-3x"></i>
                </div>
                <div class="text-center">
                  <h5 class="font-weight-bold">User Login</h5>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?= site_url('user/login'); ?>">
                <span class="float-left">Click Here</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-list fa-3x"></i>
                </div>
                <div class="text-center">
                  <h5 class="font-weight-bold">Admin Login</h5>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?= site_url('admin/login'); ?>">
                <span class="float-left">Click Here</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="<?= base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?= base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
  <script src="<?= base_url('assests/vendor/chart.js/Chart.min.js'); ?>"></script>
  <script src="<?= base_url('assests/vendor/datatables/jquery.dataTables.js'); ?>"></script>
  <script src="<?= base_url('assests/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>
  <script src="<?= base_url('assests/js/sb-admin.min.js'); ?>"></script>
  <script src="<?= base_url('assests/js/demo/datatables-demo.js'); ?>"></script>
  <script src="<?= base_url('assests/js/demo/chart-area-demo.js'); ?>"></script>

</body>

</html>