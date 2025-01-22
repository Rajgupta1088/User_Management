<!DOCTYPE html>
<html lang="en">

<head>
  <title>User Profile</title>
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
            <a href="<?= site_url('user/Dashboard'); ?>">User</a>
          </li>
          <li class="breadcrumb-item active">My Profile</li>
        </ol>

        <h3><?= $ud->firstName; ?> <?= $ud->lastName; ?>'s Profile</h3>
        <hr>






        <p> <strong>Reg Date :</strong> <?= $ud->regDate; ?>
        <p> <strong>First Name :</strong> <?= $ud->firstName; ?>
        <p> <strong>Last Name :</strong> <?= $ud->lastName; ?>
        <p> <strong>Email id :</strong> <?= $ud->emailId; ?>
        <p> <strong>Mobile Number:</strong> <?= $ud->mobileNumber; ?>
        <p> <strong>Last Updation Date :</strong> <?= $ud->lastUpdationDate; ?>


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