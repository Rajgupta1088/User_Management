<!DOCTYPE html>
<html lang="en">

<head>

  <title>Admin - Dashboard</title>

  <?= link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
  <?= link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
  <?= link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
  <?= link_tag('assests/css/sb-admin.css'); ?>
  <link rel="icon" type="image/x-icon" href="https://dld87tjdltnh8.cloudfront.net/0/admin_v1/test_management/question_bank/7484890_download.jpg">

  <style>
    .navbar {
      background-color: #ff9700 !important;
    }
  </style>
</head>

<body id="page-top">
  <?php include APPPATH . 'views/admin/includes/header.php'; ?>


  <div id="wrapper">

    <?php include APPPATH . 'views/admin/includes/sidebar.php'; ?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <div class="row">
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5"><?= htmlentities($tcount); ?> Users</div>
              </div>
              <a class="card-footer text-white clearfix small z-1">
                <span class="float-left">Total Registered Users</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?= htmlentities($tsevencount); ?> Users</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Registred in Last 10 Days</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?= htmlentities($tthirycount); ?> Users</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Registered in last 30 days</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

        </div>
      </div>

      <?php include APPPATH . 'views/admin/includes/footer.php'; ?>

    </div>

  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


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