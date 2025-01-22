<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin Change Password</title>
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
            <a href="<?= site_url('admin/Dashboard'); ?>">Admin</a>
          </li>
          <li class="breadcrumb-item active">Change Password</li>
        </ol>

        <h1>Change Password</h1>
        <hr>
        <?php if ($this->session->flashdata('success')) { ?>
          <p style="color:green; font-size:18px;"><?= $this->session->flashdata('success'); ?></p>
      </div>
    <?php } ?>

    <?php if ($this->session->flashdata('error')) { ?>
      <p style="color:red; font-size:18px;"><?= $this->session->flashdata('error'); ?></p>
    <?php } ?>



    <?= form_open('admin/Change_password'); ?>

    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">
            <?= form_password(['name' => 'currentpassword', 'id' => 'password', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('currentpassword')]); ?>
            <?= form_label('Current Password', 'currentpassword'); ?>
            <?= form_error('currentpassword', "<div style='color:red'>", "</div>"); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">
            <?= form_password(['name' => 'password', 'id' => 'password', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('password')]); ?>
            <?= form_label('New Password', 'password'); ?>
            <?= form_error('password', "<div style='color:red'>", "</div>"); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">
            <?= form_password(['name' => 'confirmpassword', 'id' => 'confirmpassword', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('confirmpassword')]); ?>
            <?= form_label('Confirm Password', 'confirmpassword'); ?>
            <?= form_error('confirmpassword', "<div style='color:red'>", "</div>"); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <?= form_submit(['name' => 'chnagepwd', 'value' => 'Change', 'class' => 'btn btn-primary btn-block']); ?>
        </div>
      </div>
    </div>
    <?= form_close(); ?>

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